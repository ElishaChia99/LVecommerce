@extends('layouts.layout')

@section('content')
<link href="{{asset('css/homepage.css')}}" rel="stylesheet">
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
      <div class="row featurette">
        <h1 class="featurette-heading" style="color: white">LVecommerce</h1>
        <p class="lead" style="color: white">E-commerce (electronic commerce) is the activity of electronically buying or selling of products on online 
                services or over the Internet. Electronic commerce draws on technologies such as mobile commerce, 
                electronic funds transfer, supply chain management, Internet marketing, online transaction processing,
                electronic data interchange (EDI), inventory management systems, and automated data collection systems. 
                E-commerce is in turn driven by the technological advances of the semiconductor industry, and is the largest sector of the electronics industry.
                Modern electronic commerce typically uses the World Wide Web for at least one part of the transaction's 
                life cycle although it may also use other technologies such as e-mail. Typical e-commerce transactions 
                include the purchase of online books (such as Amazon) and music purchases (music download in the form 
                of digital distribution such as iTunes Store), and to a less extent, customized/personalized online liquor 
                store inventory services. There are three areas of e-commerce: online retailing, electronic markets, 
                and online auctions. E-commerce is supported by electronic business.</p>
      </div>
@endsection