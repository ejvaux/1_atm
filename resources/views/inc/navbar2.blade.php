<div class="pos-f-t"> 
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">    
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto ml-2">
                    <li>
                        <span class="navbar-text font-weight-bold" style='font-size: 1.11em'>
                                <a class="" href="http://172.16.1.13:8000">
                                    <img class='' src="{{ asset('images/primatech-logo.png') }}" style="width: 146px; height: 28px">
    
                                    {{-- <div class='showwhensmall hidewhenlarge'>
                                        <img src="{{ asset('images/ptpi.png') }}" style="width: 28px; height: 28px;">
                                    </div>  --}}                               
                                </a>
                        </span>
                    </li>                
                </ul>
            {{-- <a class="" href="/1_mes/">
                <img class='hidewhensmall' src="{{ asset('images/primatech-logo.png') }}" style="width: 146px; height: 28px">
                <img class='showwhensmall' src="{{ asset('images/ptpi.png') }}" style="width: 28px; height: 28px">
            </a>  --}}      
            <div class="row" >
                <!-- Left Side Of Navbar -->
                {{-- <ul class="navbar-nav mr-auto">
    
                </ul> --}}
    
                <!-- Right Side Of Navbar -->
                <div class="navbar-nav col-md">
                    <!-- Authentication Links -->
                    @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> --}}
                    @else
                        <div class="nav-item dropdown" id='notificon'> 
                            @include('inc.dropdownmenu')                  
                        </div> 
                        <div class="nav-item dropdown">  
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user-circle"></i> <span class='hidewhensmall'>
                                    @if (Auth::user()->id != 1)
                                        <span class="labelfontbold">{{ Auth::user()->name }}</span>
                                    @else
                                        <span class='medev'>{{ Auth::user()->name }}</span>
                                    @endif
                                </span> <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('user/update/'.Auth::user()->id) }}">
                                    <i class="fa fa-edit"></i> {{__('Edit Profile')}}
                                </a>
                                <a class="dropdown-item" href="{{ url('user/changepass') }}">
                                    <i class="fa fa-key"></i> {{__('Change Password')}}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>                    
                    @endguest
                </div>
            </div>        
        </div>
    </nav>
</div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    @include('inc.sidebar')
</div>