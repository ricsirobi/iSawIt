@extends('layouts.main')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>
<body>



<div class="jumbotron">
  <div class="container text-center">
    <h1>{{ config('app.name') }}</h1>      
    <p>{{__("Track what you watch.")}}	 </p>
    <p> {{__("Upload new shows and movies.")}}</p>    
	
	<h3>{{__("Discover new shows and movies")}}</h3>
	<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" width="100%" height="450" allowfullscreen style="border: solid 4px #193e50" 
		name="video" src="http://www.youtube.com/embed/K6FoFBv6DRk?autoplay=1&loop=1&playlist=K6FoFBv6DRk">
	</iframe>
	</div>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" width="100%" height="450" allowfullscreen style="border: solid 4px #193e50" 
      name="video" src="http://www.youtube.com/embed/3Yh_6_zItPU?autoplay=1&loop=1&playlist=3Yh_6_zItPU">
    </iframe>
    </div>
  

	
	<script>
		document.getElementsByName("video")[0].style.pointerEvents = "none";
    document.getElementsByName("video")[1].style.pointerEvents = "none";
	</script>

  </div>
</div>
  
<!-- <div class="container-fluid bg-3 text-center">    
  
  <div class="row">
    <div class="col-sm-3">
      <p>Film 1</p>
      <img src="https://via.placeholder.com/100?text=FilmCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Film 2</p>
      <img src="https://via.placeholder.com/100?text=FilmCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Film 3</p>
      <img src="https://via.placeholder.com/100?text=FilmCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Film 4</p>
      <img src="https://via.placeholder.com/100?text=FilmCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Serie 1</p>
      <img src="https://via.placeholder.com/100?text=ShowCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Serie 2</p>
      <img src="https://via.placeholder.com/100?text=ShowCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Serie 3</p>
      <img src="https://via.placeholder.com/100?text=ShowCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Serie 4</p>
      <img src="https://via.placeholder.com/100?text=ShowCover" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
-->

</body>
</html>








@endsection