@extends('layouts.layout')

@section('content')
<link href="{{asset('css/homepage.css')}}" rel="stylesheet">
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/><img style="width: cover;"src="{{url('/storage/style_image/homepage_slider1.jpg')}}"></svg>
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Welcome to LVecommerce</h1>
              <p>Start Your small business here</p>
              <p><a class="btn btn-lg btn-primary" href="{{ route('register') }}" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/><img style="width: cover;"src="{{url('/storage/style_image/homepage_slider2.jpg')}}"></svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>about LVecommerce</h1>
              <p>Wanna know more about LVecommerce?</p>
              <p><a class="btn btn-lg btn-primary" href="{{ url('/about') }}" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/><img style="width: cover;"src="{{url('/storage/style_image/homepage_slider3.jpg')}}"></svg>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>More than 100000 user</h1>
              <p>Buy or Sell your product here.</p>
              <p><a class="btn btn-lg btn-primary" href="{{ url('/posts') }}" role="button">View Sell/Buy Posts</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  
  
    <div class="container marketing">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img style="width: 700px;"src="{{url('/storage/style_image/homepage_pic1.jpg')}}">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img style="width: 450px;"src="{{url('/storage/style_image/homepage_pic2.jpg')}}">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img style="width: 700px;"src="{{url('/storage/style_image/homepage_pic3.jpg')}}">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->
  
  
    <!-- FOOTER -->
    <footer class="container">
      <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#" style="color: grey">Privacy</a> &middot; <a href="#" style="color: grey">Terms</a></p>
    </footer>
  </main>
@endsection