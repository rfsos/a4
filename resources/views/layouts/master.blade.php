<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

		<title>@yield('title', 'Split & Track')</title>

</head>
<body>
    <div class='container-fluid'>

        @if(Session::get('message') != null))
            <div class='message'>{{ Session::get('message') }}</div>
        @endif

        {{-- Title from body --}}
  			<h1>Bill Split &amp; Track</h1>
  			<hr />

        <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/search">Search</a></li>
                    <li><a href="/add">Add</a></li>
                    <li><a href="/edit">Edit</a></li>
                    <li><a href="/delete">Delete</a></li>
                </ul>
        </nav>
      @yield('content')
      <hr />
      <footer>Copyright &copy; Split and Track</footer>

    </div>
</body>
</html>
