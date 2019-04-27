@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <h1>Hot Offers</h1>

                  @if( count($offers) > 0 )

                    <div class="row">
                    @foreach($offers as $offer)

                      <div class="col-md-4">
                        <div class="card" style="margin-top: 20px;">
                          <div class="card-header bg-info text-white">{{ $offer->title }}</div>
                          <div class="card-body">
                            <center>
                              <img src="{{ asset('images/barber-tools.png') }}" width="80" height="80"></img>
                              <a href=""><h4>{{ $offer->title }}</h4></a>
                              Cost ${{ $offer->price }}
                            </center>
                          </div>
                        </div>
                      </div>

                    @if( ($loop->index+1) %3 == 0 )
                      </div>
                      <div class="row">
                    @endif

                    @endforeach
                    </div>

                  @endif
        </div>
    </div>
</div>
@endsection
