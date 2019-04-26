@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
              <h1>Services</h1>

                  @if( count($services) > 0 )

                    @foreach($services as $service)

                      <div class="card" style="margin-top: 20px;">
                        <div class="card-header bg-info text-white">{{ $service->title }}</div>
                        <div class="card-body">
                          <center><img src="{{ asset('images/barber-tools.png') }}" width="100" height="100"></img></center>
                          <a href=""><h4>{{ $service->title }} for ${{ $service->price }}</h2></a>
                        </div>
                      </div>

                    @endforeach

                  @endif
        </div>
    </div>
</div>
@endsection
