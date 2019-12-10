<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HeroesBurger</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #343a40;
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
                top: 20px;
            }

            .top-left {
                position: absolute;
                left: 16px;
                top: 0px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #ada9a9;
                padding: 0px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links-menu > a {
                color: #dd9969;
                padding: 0px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: -20px;
            }

            .sobre{
                padding-left: 100px;
                padding-right: 100px;
            }

            h4{
                color: #dd9969;
            }

            .content {
                padding-bottom: 50px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-left links">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/images/logo.png" width="100px" height="100px">
                    </a>
                </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <p></p>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="images/logo.png" width="15%" height="15%">
                </div>

                <div class="sobre">
                    <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aliquam lacinia orci ex, sit amet placerat orci mollis id. 
                    Praesent dapibus metus vitae interdum sagittis. 
                    Aenean orci massa, lacinia quis lectus sed, interdum interdum augue. 
                    In hac habitasse platea dictumst. Duis gravida semper quam in accumsan. 
                    Pellentesque tempor nisl sit amet enim finibus auctor. 
                    Curabitur feugiat volutpat gravida. Cras tempor pretium tristique. 
                    Integer maximus egestas felis, tristique accumsan diam sodales at. 
                    Nunc nec justo sit amet tellus pretium fringilla.
                    </h4>
                </div>
    </body>
</html>
