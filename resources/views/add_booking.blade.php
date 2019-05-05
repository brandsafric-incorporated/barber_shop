@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  bg-info text-white">Appointment Status</div>

                <div class="card-body">
                   <h2>{{ $success }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
