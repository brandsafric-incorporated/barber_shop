<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barber Shop</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .btn-my{
              width: 100%;
              border-radius: 3px;
              border-color: #fff;
              background: #AC0B0B;
              color: #fff;
              padding: 5px;
              border: 2px solid #fff;

            }
            .btn-my:hover{
              background: #220303;
              border-color: #fff;
            }
            .h_style{
              font-weight: 900;
              color: #fff;
              text-align: center;
              font-size: 60px;
              font-style: normal;

            }
            .h_style2{
              font-weight: 700;
              color: #fff;
              text-align: center;
              font-style: italic;
            }
        </style>
    </head>
    <body background="{{ asset('images/bg.jpg') }}">


        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('home') }}" style="color: white;">{{ __('Home') }}</a>
                        <a href="{{ route('services') }}" style="color: white;">{{ __('Our Services') }}</a>
                        <a href="{{ route('gallery') }}" style="color: white;">{{ __('Gallery') }}</a>
                        <a href="{{ route('contact') }}" style="color: white;">{{ __('Contact Us') }}</a>
                        <a href="{{ route('about') }}" style="color: white;">{{ __('About Us') }}</a>

                        <a href="{{ route('login') }}"  style="color: white;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }} "  style="color: white;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <div class="container">
          <div class="row">
            <div class="col-sm-1"></div>
              <div class="col-sm-10" style="margin-top:10%;">

                <h1 class="h_style">BARBER SHOP</h1>
                <h1 class="h_style2">When You Look Good You Feel Good.</h1>
                <h1 class="h_style">022-123-4567</h1>

                <div class="row">
                  <div class="col-sm-6">
                    <a href="{{ route('booking') }}" type="button" class="btn btn-outline-primary btn-lg btn-block btn-my">Get an Appointment</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="{{ route('offers') }}" type="button" class="btn btn-outline-primary btn-lg btn-block btn-my">Check Hot Offers</a>
                  </div>
                </div>
              </div>
                <div class="col-sm-1"></div>
          </div>
        </div>
    </body>
</html>
