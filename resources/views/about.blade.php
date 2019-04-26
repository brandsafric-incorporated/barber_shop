@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-info text-white">About Us</div>

                <div class="card-body">
                    <center>
                    <img src="{{ asset('images/about.jpg') }}" width="300" height="300"></img>
                    </center>
                    <p>
                      The Barber Shop was started in Hamilton on 15 April, 2019 by Navjot Singh and Cameron Whale.<br>
                      We are the best barber shop in Hamilton. We provide excellent services at a very reasonable rates.<br>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
