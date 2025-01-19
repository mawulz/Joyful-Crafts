@extends('layout.master')

@section('title', 'About Us')

@section('about')
<div id="about" class="container my-5">
    <h1 class="text-center mb-4">About Us</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <p>
                Welcome to Joyful Craft! 
                We are committed to delivering quality and excellence in everything we do.
            </p>
            <p>
                Joyful Craft is a dedicated art marketplace platform aimed at supporting the creativity and potential of children with special needs. We believe that every child possesses unique talents that deserve to be celebrated and appreciated. Through Joyful Craft, children with special needs can showcase their artworks, sell their creations, and receive support through donations.
            </p>
            <p>
                Thank you for choosing Joyful Craft. We look forward to serving you!
            </p>
        </div>
    </div>
</div>
@endsection