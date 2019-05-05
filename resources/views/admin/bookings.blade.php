@extends('admin.layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <div class="card">
              <div class="card-header  bg-info text-white">Bookings</div>

              <div class="card-body">


                <div class="row" style="border: 1px solid #ccccff; border-radius: 2px; padding: 8px; background: #eeeeff;">
                  <div class="col-md-6">
                    <a class="btn btn-primary" href="/bks">All Bookings</a>
                  </div>
                  <div class="col-md-6">
                    <form method="POST" action='/bookings_by_date'>@csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('View By Date') }}</label>

                        <div class="col-md-6">
                            <input id="booking_date" type="date"
                            class="form-control @error('booking_date') is-invalid @enderror"
                            name="booking_date" value="{{ old('nbooking_dateame') }}"
                            required autocomplete="booking_date"
                            autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                           <button class="btn btn-primary"  type="submit">Filter</button>
                       </div>
                    </div>
                  </form>
                  </div>
                </div>

                <table class="table">
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Date
                    </th>
                    <th>
                      Time
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Mobile No.
                    </th>
                  </tr>
                    @if( count($bookings) > 0 )
                      @foreach($bookings as $booking)
                      <tr>
                        <td>
                          {{ $loop->iteration }}
                        </td>
                        <td>
                          {{ $booking->booking_date }}
                        </td>
                        <td>
                          {{ $booking->timeslot }}:00 hrs
                        </td>
                        <td>
                          {{ $booking->name }}
                        </td>
                        <td>
                          {{ $booking->email }}
                        </td>
                        <td>
                          {{ $booking->mobile }}
                        </td>
                      </tr>
                      @endforeach
                    @endif
                </table>




              </div>
          </div>


        </div>
    </div>
</div>

@endsection
