<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="userid" content="{{ Auth::check() ? Auth::user()->id : ''}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

    @include('inc.header')         
</head>
<body>        
    <div id="app" class='app'>
        <div id='nvbr'>
            @include('inc.navbar')
        </div>  
        <main class="container-fluid py-4">            
            <div class="container-fluid" style='height:100vh'>
                <div class="row">
                    <div class="col-md-2 m-0 p-0" style='height:100vh;' id='sidebr'>
                        @include('inc.sidebar')
                    </div>  
                    <div class='col-md m-0 ml-3 pt-3 border' id="main_panel" style="background:white" >            
                        @yield('content')
                    </div> 
                </div>
            </div>
        </main>
    </div>
</body>
</html>
