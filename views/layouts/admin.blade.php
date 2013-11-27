<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Contribute to Fat Lip
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->

        {{ HTML::style('css/bootstrap.min.css') }}
         {{ HTML::style('css/bootstrap-responsive.min.css') }}
    </head>

    <body>
        <!-- Navbar -->
       <header>
            <h1>Welcome Contributor:</h1>
       </header>
        <!-- Content -->
    <div id="admin-content">
               
            <!-- Content -->
            @yield('content')
    </div>        
        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-2.0.3.min.js') }}
        {{ HTML::script('js/scriptfile.js') }}
    </body>
</html>