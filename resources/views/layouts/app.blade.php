<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sonite_forum') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css ') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/atom-one-dark.min.css">

   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('APP_NAME', 'Sonite_forum') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                 
                                <li class="nav-item">
                                     <a class="nav-link" href="{{ route('social.auth', ['provider' => 'github']) }} "> Register With GitHub</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>




                            <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


            
            
                @if($errors->count() > 0)

                    <ul class="list-group">
                    
                        @foreach($errors->all() as $error)

                          <li class="list-group-item text-danger">
                          
                                {{ $error }}
                          
                          
                          </li> 


                        @endforeach
                    
                    
                    </ul>


                        <br>

                        <br>


                @endif
            
            
            
           


           <div class="container">

           <div class="row">

            
           
            <div class="col-md-4">

            <a href="{{ route('discussions.create') }}" class="form-control btn btn-primary">Create a new discussion</a>

            <br>


            <br>
           
            <div class="card card-default">

                



                <div class="card-body">

                <ul class="list-group">
                
                   <li class="list-group-item">
                   
                        <a href="/forum/public/forum" style="text-decoration: none;">Home</a>
                   
                   </li>

                   <li class="list-group-item">
                   
                   <a href="/forum/public/forum?filter=me" style="text-decoration: none;">My Discussions only</a>
              
                    </li>

                    <li class="list-group-item">
                   
                   <a href="/forum/public/forum?filter=solved" style="text-decoration: none;">Answered Discussions </a>
              
                    </li>


                    <li class="list-group-item">
                   
                   <a href="/forum/public/forum?filter=unsolved" style="text-decoration: none;">Unanswered Discussions </a>
              
                    </li>

                </ul> 
                </div>

                @if(Auth::check())

                    @if(Auth::user()->admin)

                    <div class="card-body">

                        <ul class="list-group">

                        <li class="list-group-item">
                        
                                <a href="/forum/public/channels" style="text-decoration: none;">All Channels</a>
                        
                        </li>

                        </ul>

                        </div>

                    @endif

                @endif
                </div>
                <div class="card card-default">

                    <div class="card-header">
                       <b> Channels </b>
                    
                    </div>
                    
                    
                    

                    <div class="card-body">
                    
                       <ul class="list-group">
                       
                        @foreach($channels as $channel)

                            <li class="list-group-item">
                            
                               <a href="{{ route('channel', ['slug' => $channel->slug ]) }}" style="text-decoration:none;"> {{ $channel->title }}</a>
                            
                            </li>
                        @endforeach
                       
                       </ul> 
                    </div>
                     
                
                </div>
                
            </div>
           
           <div class="col-md-8">
           
                @yield('content')

           </div>
           
        </div>
         
       </div>
    </div>



    
   

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  

<script>

     @if(Session::has('success'))

         toastr.success( '{{ Session::get('success') }}' )

     @endif


     


    
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

<script>

        $(document).ready(function() {
        
            $('#content').summernote();


        });

</script>


<!-- call hightlight js as soon as the page is loading  --> 

<script>hljs.iniHighlightingOnLoad();</script>

    
    


    
</body>
</html>
