@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <center>
              <h1>Hot Offers</h1>
              <h5>Hurry Up !!! Offers valid till Monday 6 May, 11:59 PM</h5>
                  @if( count($offers) > 0 )

                    <div class="row justify-content-center">
                    @foreach($offers as $offer)

                      <div class="col-md-4">
                        <div class="card" style="margin-top: 20px;">
                          <div class="card-header bg-info text-white">{{ $offer->title }}</div>
                          <div class="card-body">
                            <center>
                              <img 
                              src="{{ asset('images/tools/tools_' . $loop->iteration . '.png') }}"
                              width="80" height="80"></img>
                              <a href=""><h4>{{ $offer->title }}</h4></a>


                              @if ($loop->iteration < 3)
                                <font color="red">50% off</font>
                                @elseif ($loop->iteration < 5)
                                <font color="red">25% off</font>
                                @else
                                  <font color="red">10% off</font>
                                @endif


                            </center>
                          </div>
                        </div>
                      </div>

                    @if( ($loop->index+1) %2 == 0 )
                      </div>
                      <div class="row justify-content-center">
                    @endif

                    @endforeach
                    </div>

                  @endif
          </center>
        </div>
    </div>
</div>
@endsection
