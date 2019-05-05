@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <h1>Our Barbers</h1>

                  @if( count($barbers) > 0 )

                    <div class="row">
                    @foreach($barbers as $barber)

                      <div class="col-md-4">
                        <div class="card" style="margin-top: 20px;">
                          <div class="card-header bg-info text-white">{{ $barber->name }}</div>
                          <div class="card-body">
                            <center>
                              <img style="border: 1px solid #ddddff; border-radius: 8px;"
                               src="{{ asset('images/barbers/barber_' . $loop->iteration . '.png') }}"
                               width="80" height="80"></img>
                              <a href=""><h4>{{ $barber->name }}</h4></a>
                              {{ $barber->email }} {{ $loop->iteration }}
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
