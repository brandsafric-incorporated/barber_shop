@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <h1>Our Products</h1>

                  @if( count($products) > 0 )

                    <div class="row">
                    @foreach($products as $product)

                      <div class="col-md-4">
                        <div class="card" style="margin-top: 20px;">
                          <div class="card-header bg-info text-white">{{ $product->title }}</div>
                          <div class="card-body">
                            <center>
                              <img
                               src="{{ asset('images/products/product_' . $loop->iteration . '.png') }}"
                              width="80" height="80"></img>
                              <h4>{{ $product->title }}</h4>
                              Cost ${{ $product->price }}
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
