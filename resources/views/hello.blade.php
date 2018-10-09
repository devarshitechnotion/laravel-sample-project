<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Manager</title>

        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

        <!-- JS Files -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>
        <script src="{{asset('js/bootstrap.min.js')}}" ></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
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
                font-size: 12px;
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
        <div class="flex-center"><h3>Hello, This is my first custom laravel page.</h3></div>
       
            <div class="container">
                <p>Hello {{$user}}
                This is a new page created by me. And now every time this page is open first.because I set this page as a default page.Using web.php file in routes folder.
                In web.php file we can set default view or default controller for our project.</p>
            </div>
            <br>
            <div class="container">
                <a href="{{url('/tasks')}}"><button class="btn btn default success">View Tasks</button></a>
            </div>
        </div>
    </body>
</html>
