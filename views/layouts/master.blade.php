<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Fat Lip Sports
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        {{ HTML::style('css/style.css') }}
    </head>

    <body>
        <!-- Navbar -->
       <header>
            <h1>Fat Lip Sports</h1>
            <nav>
                <ul>
                    <li id="ftball" class="prime-menu">Football |</li>
                    <li id="bball" class="prime-menu">Basketball</li>
                </ul>
                <ul id="ftball-sub" class="is-sub">
                            <li>Bob Costas |</li>
                            <li>State of the Team |</li>
                            <li>Draft Info |</li>
                            <li>Fasntasy</li>
                </ul>  
                <ul id="bball-sub" class="is-sub">
                            <li>Bob Costas2 |</li>
                            <li>State of the Team |</li>
                            <li>Draft Info |</li>
                            <li>Fasntasy</li>
                </ul>  
            </nav>
            <hr>
       </header>
        <!-- Container -->
    <div id="wrapper">
        
            <div class="container">
               
            <!-- Content -->
            @yield('content')
              
            </div>
    </div>
<footer>
     <span class="ft-links">About us |</span>
     <span class="ft-links">Write for Fat Lip |</span>
     <span class="ft-links">Terms of Use |</span>
     <span class="ft-links">Privacy |</span>
     <span class="ft-links">Contact Us</span>
</footer>
        <!-- Scripts are placed here -->
        {{ HTML::script('js/jquery-2.0.3.min.js') }}
        {{ HTML::script('js/scriptfile.js') }}
    </body>
</html>