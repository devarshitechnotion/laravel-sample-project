<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Manager</title>

        <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> -->
        

        <!-- JS Files -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>
        <script src="{{asset('js/bootstrap.min.js')}}" ></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
               background: #e1eec3;  /* fallback for old browsers */
            background: -webkit-linear-gradient(left, #f05053, #e1eec3);
            background: -o-linear-gradient(left, #f05053, #e1eec3);
            background: linear-gradient(to right, #f05053, #e1eec3);  /* Chrome 10-25, Safari 5.1-6 */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            
                /*background-color: #fff;*/
                color: #000;
               /* font-family: 'Nunito', sans-serif;*/
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .img_div:hover .img_card img{
                 -webkit-transform: scale(1.08);
                 transform: scale(1.08);
            }

            .img_card img {
             -webkit-transition: 0.4s ease;
              transition: 0.4s ease;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                background-color: #f5f5f5; 
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
        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        <div class="flex-center"><h3>Welcome to your personal Task Manager.</h3></div>
            <br>
            <div class="container img_div">
                <center>
                    <img class="img-responsive img_card"
                    src="/images/content/taskm.jpg" style="height: 450px" alt="">
                </center>                                     
            </div>
            <div class="container">
                <p><h3><strong>What</strong></h3>Task management: Task management is the process of managing a task through its life cycle. It involves planning, testing, tracking, and reporting. Task management can help either individual achieve goals, or groups of individuals collaborate and share knowledge for the accomplishment of collective goals.</p>
            </div>
             <div class="container">
                <p><h3><strong>Why</strong></h3>In essence, task management is deemed very important among executives because it helps them become more productive; it reduces the time allotted for setting priorities, encourages us to make use of the art of delegation, and enables us to differentiate from the four kinds of individual tasks which are: urgent and important; others are not urgent but important; there are those that are urgent but not important; and of course there are always those that are not urgent and not important.</p>
            </div>
             <div class="container">
                <p><h3><strong>How</strong></h3>Task management: From managing simple to-do lists for individuals as well as to helping teams work and collaborate better, there are many other hidden features and our team actively working to add more .</p>
            </div>
            <br>
           <!--  <div class="container">
                <a href="{{url('/tasks')}}"><button class="btn btn default success">View Tasks</button></a>
            </div> -->
        </div>
    </body>
</html>
