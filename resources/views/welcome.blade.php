<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Les chroniques d'emilie</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
          
            html, body {
                text-decoration: none;
                background-color: #fff;
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
                padding-bottom: 32%;
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
            .links{
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .mod{
                color: #cc7cd2;
            }
            .mods{
                color: #eb00fd;
            }
            .mods:hover{
                color: blue;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:#4a4d51;
                color: white;
                text-align: center;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Bienvenu</a>
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
                   
                <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.15752-9/89909123_2686289701636774_2370229198955479040_n.png?_nc_cat=104&_nc_sid=b96e70&_nc_oc=AQndUVm2_zEy0bnTsWDcVLOPT20taFWEjfAAVYDlv6LYpnhF4GfNI9c66NBEcF72NhknQBmoO_qGWjxSUM1cKFSr&_nc_ht=scontent-cdg2-1.xx&oh=2b7f34eb787876fa9040b50f9c17d43c&oe=5E97CCDF" alt="">
                </div>

                <div class="mod">
                    <a class="mods" href="https://laravel.com/docs" style="text-decoration: none;">Home</a>
                    <a class="mods" href="https://laracasts.com"    style="text-decoration: none;">Emilie</a>
                    <a class="mods" href="https://laravel-news.com" style="text-decoration: none;">Blog</a>
                </div>
            </div>
        </div>
        <style>
            .emilie{
                font-family: 'Raleway', sans-serif;
                color: #eb00fd;
                text-align: center;
            }
           
        </style>
        <div class="footer">
            <p class="emilie">Les chroniques d'emilie</p>
          </div> 
    </body>
</html>
