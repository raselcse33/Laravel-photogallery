<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>ShutterPress | Slider Gallery</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/all.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/prettyPhoto.css')}}" media="screen" />
</head>
<body>
<div id="wrapper">
  <div id="wrapper-top"> </div>
  <div  id="left">
    <h1 class="logo"><a href="{{route('index')}}">Chobi Ghor</a></h1>
     <div id="modules-holder">
      <div class="module">
        <h2 class="module-one">Image Name</h2>
        <p>{{$post->imagename}}</p>
      </div>
      <div class="module">
        <h2 class="module-two">Description</h2>
        <p>{{$post->description}}</p>
      </div>
      <div class="module">
        <h2 class="module-three">Author Name</h2>
        <p>{{$post->author_name}}</p>
      </div>
    </div>

    
    
  </div>
  <div id="right">
    <div id="gallery-holder">
      <ul class="slideshow">
        <li><img src="{{asset('/image/'.$post->image)}}" alt="" width="719" height="442" /></li>
      </ul>
      <div class="slideshow-frame"></div>
     
    </div>
    <div id="modules-holder">
      <ul class="thumbnails">
       @foreach($samepost as $s)
      <li>
        <a href="{{route('image.details',['id'=>$s->id])}}">
        <img src="{{asset('/image/'.$s->image)}}" alt="" width="140" height="100" />
      </a>
      </li>

      @endforeach
      
      
      
    </ul>
      
    </div>
  </div>
  <div id="wrapper-bottom"> </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
