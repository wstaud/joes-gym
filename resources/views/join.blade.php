@extends('layouts.master')

@section('video')
<!-- Video Landing Page -->
<section class="wrapper">
    <div class="video-wrap">
        <video autoplay muted loop>
            <source src="/resources/videos/main_vid.mp4" type="video/mp4">
        </video>
    </div>
    <div class="overlay"></div>
    <div class="landing-text">
        <h1 id="title">JOE'S GYM</h1>
        <h2 id="sub-title">SAN ANTONIO'S ORIGINAL GYM</h2>
        <button type="button" class="btn btn-outline-secondary">GET SERIOUS</button>
    </div>
</section>
@stop

@section('navbar-selection')
<ul class="nav navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/join">Join</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
    </li>
</ul>
@stop

@section('content')
<div class="container top-gap">
    <div class="row">
        <div class="col-lg-6">
            <img src="/resources/imgs/crew.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-lg-6">
            <h2>WELCOME TO JOE'S GYM</h2>
            <p>Joe's Gym, located in San Antonio, isn't your average gym. We aren't your fancy pick-up-chicks gym. We are for those who are serious about pumping iron. We are for those who are serious about getting into shape. We are for those who are serious about lifting themselves up to a new level of power.</p>
            <p>This is a hardcore, screamin' in-your-face, don't go home till you you've finished the mission, rock & roll gym.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2 class="text-center top-gap">Social Media</h2>
    </div>
    <div class="row justify-content-center">
        <button type="button" class="btn btn-outline-secondary">@joesgymsa</button>
    </div>
</div>
@stop