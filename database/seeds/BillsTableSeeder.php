<?php

use Illuminate\Database\Seeder;

use App\Bill;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         Bill::insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'restaurant' => 'Dennys',
             'comments' => 'Good pancakes',
             'date' => '2016-03-30',
             'customers' => 4,
             'amount' => 100,
             'each_paid' => 25,
         ]);

         Bill::insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'restaurant' => 'Taco Bell',
             'comments' => 'T-bell is always so good to me',
             'date' => '1999-01-14',
             'customers' => 7,
             'amount' => 50,
             'each_paid' => 7,
         ]);

         Bill::insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'restaurant' => 'Hard Rock Cafe',
             'comments' => 'Great environment and good food',
             'date' => '2015-02-20',
             'customers' => 2,
             'amount' => 60,
             'each_paid' => 30,
         ]);

         Bill::insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'restaurant' => 'Taco Bell',
             'comments' => 'In pain and sitting by the toilet',
             'date' => '2016-06-23',
             'customers' => 5,
             'amount' => 25,
             'each_paid' => 5,
         ]);

         Bill::insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'restaurant' => 'Wendys',
             'comments' => 'Great nuggets with a lot of tasty fries',
             'date' => '2015-10-30',
             'customers' => 6,
             'amount' => 30,
             'each_paid' => 5,
         ]);

         Bill::insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'restaurant' => 'Wendys',
             'comments' => 'It was not as good as I expected. Soggy burger',
             'date' => '2017-03-30',
             'customers' => 3,
             'amount' => 12,
             'each_paid' => 4,
         ]);
     }
}