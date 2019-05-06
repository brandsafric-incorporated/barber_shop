@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-info text-white">Gallery</div>

                <div class="card-body">

                    <div class="row"><!-- row 1 -->
                      <div class="col-md-4">
                        <a href="{{ asset('images/gallery/g01.jpg') }}">
                          <img src="{{ asset('images/gallery/g01.jpg') }}" width="200" height="200"></img>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ asset('images/gallery/g02.jpg') }}">
                          <img src="{{ asset('images/gallery/g02.jpg') }}" width="200" height="200"></img>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ asset('images/gallery/g03.jpg') }}">
                          <img src="{{ asset('images/gallery/g03.jpg') }}" width="200" height="200"></img>
                        </a>
                      </div>
                    </div>

                    <div class="row" style="margin-top: 20px;"><!-- row 2 -->
                      <div class="col-md-4">
                        <a href="{{ asset('images/gallery/g04.jpg') }}">
                          <img src="{{ asset('images/gallery/g04.jpg') }}" width="200" height="200"></img>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ asset('images/gallery/g05.jpg') }}">
                          <img src="{{ asset('images/gallery/g05.jpg') }}" width="200" height="200"></img>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ asset('images/gallery/g06.jpg') }}">
                          <img src="{{ asset('images/gallery/g06.jpg') }}" width="200" height="200"></img>
                        </a>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
