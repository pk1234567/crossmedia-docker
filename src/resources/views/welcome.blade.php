<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flankr</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700&family=Poppins&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #0d0e0f;
                color: rgb(224, 19, 156);
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
                font-size: 160px;
            }

            .links > a {
                color: rgb(224, 19, 156);
                padding: 0 25px;
                font-size: 32px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref " style="margin-top: 300px;">
            <img src="img\flankr-logo.JPG" style="width: 200px; height: auto; " />
        </div>


            <div class="content">
                <div class="title m-b-md">
                    Asset Manager
                </div>

                <div class="links">
                @auth
                        <a href="{{ url('/files') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
