<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif



       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>ShutterPress</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}" media="screen" />
</head>
<body>
<div id="wrapper">
  <div id="wrapper-top"> </div>
  <div id="left">
    <h1 class="logo"><a href="{{route('index')}}">Chobi Ghor</a></h1>
    <ul class="menu">
      <li><a href="{{route('index')}}">Home</a></li>
      <li> <a class="closed" href="#">Category</a>

        <ul class="sub-menu closed">
            @foreach($category as $c)
          <li><a href="{{route('category.list',['id'=>$c->id])}}">{{$c->name}}</a></li>
            @endforeach
          
        </ul>
      </li>
      <li><a href="">Contact</a></li>
    </ul>
    <div id="left-bottom">
     
     
    </div>
  </div>
  <div id="right">
    <ul class="thumbnails">
        @foreach($post as $p)
      <li><a href="{{route('details.image',['id'=>$p->id])}}" rel=""><img src="{{asset('/image/'.$p->image)}}" alt="" width="150" height="121" /></a></li>
      @endforeach
      
    </ul>
    
  </div>
  <div id="wrapper-bottom"> </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>





            
        </div>
    </body>
</html>
