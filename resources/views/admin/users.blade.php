@extends('admin.layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <h1>Users</h1>
              <table class="table">
                  @if( count($users) > 0 )
                    @foreach($users as $user)
                    <tr>
                      <td>
                        {{ $user->name }}
                      </td>
                      <td>
                        {{ $user->email }}
                      </td>
                      <td>
                        {{ $user->role }}
                      </td>
                    </tr>
                    @endforeach
                  @endif
              </table>
        </div>
    </div>
</div>

@endsection
