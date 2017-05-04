<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;

class CalcController extends Controller
{
    /*
    * GET
    * /welcome
    */
    public function welcome(Request $request) {

        // Validate the request data
        $this->validate($request, [
            'customers' => 'integer|min:2',
            'amount' => 'numeric|min:10',
            'service' => 'numeric',
        ]);


        // Note: If validation fails, it will redirect the visitor back to the form page
        // and none of the code that follows will execute.
        $customers = $request->input('customers');
        $amount = $request->input('amount');
        $service = $request->input('service');

        # Redirect the user to the page to view the book
        // return redirect('/books/'.$title);

        // Values
        $customers = (isset($_GET['customers'])) ? $_GET['customers'] : '';
        $roundUp = (isset($_GET['roundUp'])) ? $_GET['roundUp'] : '';
        $amount = (isset($_GET['amount'])) ? $_GET['amount'] : '';
        $service = (isset($_GET['service'])) ? $_GET['service'] : '';
        $calculate = null;

        // Displays tipping amount
        if($service != 'tipping') {
            $alertType = 'alert-info';
            $results = 'A tip of '.$service.'% has been added.';
        }

        // Caculation for splitting bill, with rounding or without rounding
        if(is_numeric($amount) && is_numeric($customers)) {
            if($roundUp == 'yes') {
                $calculate = 'Each person should pay $'.ceil(($amount / $customers) * (1 + $service));
            } else {
                $calculate = 'Each person should pay $'.floatval(($amount / $customers) * (1 +$service));
            }
        }

        if($calculate != null) {
            $alertType = 'alert-success';
        }

        // Allows variables to be used in view templates
        return view('welcome')->with([
            'calculate' => $calculate,
            'customers' => $customers,
            'amount' => $amount,
            'service' => $service,
            'roundUp' => $roundUp,
            'alertType' => $alertType,
            'results' => $results,
        ]);
    }

    /*
    * POST
    * /calculate
    */
    public function save(Request $request) {

      return redirect('/save');

    }

    /*
    * GET
    * /add
    */
    public function add(Request $request) {

        // Validate the request data
        $this->validate($request, [
            'restaurant' => 'alpha',
            'customers' => 'integer|min:2',
            'amount' => 'numeric|min:10',
            'service' => 'numeric',
        ]);

        // Note: If validation fails, it will redirect the visitor back to the form page
        // and none of the code that follows will execute.
        $customers = $request->input('customers');
        $amount = $request->input('amount');
        $service = $request->input('service');
        $restaurant = $request->input('restaurant');

        # Redirect the user to the page to view the book
        // return redirect('/books/'.$title);

        $bills = Bill::all();
        return view('bills.add')->withInput([
            'bills' => $bills,
        ]);
    }
    //
    // public function edit() {
    //
    //     return view('bills.edit')->with([
    //         'bills' => $bills,
    //     ]);
    // }
    //
    // public function delete() {
    //
    //     return view('bills.delete')->with([
    //         'bills' => $bills,
    //     ]);
    // }

}
