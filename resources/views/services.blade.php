@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Services</div>

                <div class="card-body">
                    @if( count($services) > 0 )

                      @foreach($services as $service)

                        <h2>{{ $service->title }} : {{ $service->price }}</h2>


                      @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
