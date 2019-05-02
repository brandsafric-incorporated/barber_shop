@extends('admin.layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <h1>Bookings</h1>
              <table class="table">
                  @if( count($bookings) > 0 )
                    @foreach($bookings as $booking)
                    <tr>
                      <td>
                        A
                      </td>
                      <td>
                        B
                      </td>
                    </tr>
                    @endforeach
                  @endif
              </table>
        </div>
    </div>
</div>

@endsection
