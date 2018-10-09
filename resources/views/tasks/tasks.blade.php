<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
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
        <div class="flex-center"><h3>Always, Keep in  mind what you have to do today.</h3></div>        

        <div class="container" style="border:2px solid black;width:500px;height:auto;margin-left: 33%;padding-left: 30px;">
            <strong><h3>All Tasks</h3></strong>
            <!-- {{$allTasks}}  -->
            @foreach ($allTasks as $task)
                <li><a href="{{url('tasks/'.$task->id)}}">{{$task->task_name}}</a></li> 
            @endforeach  
            <hr>

            <strong><h3>Completed Tasks</h3></strong>
            @if(count($completedTasks) > 0)
                @foreach ($completedTasks as $task)
                    <li><a href="{{url('tasks/'.$task->id)}}">{{$task->task_name}}</a></li> 
                @endforeach  
            @else
                <p>0 tasks completed</p>    
            @endif
            <hr>

            <strong><h3>Remaining Tasks</h3></strong>
            @if(count($remainingTasks) > 0)
                @foreach ($remainingTasks as $task)
                    <li><a href="{{url('tasks/'.$task->id)}}">{{$task->task_name}}</a></li> 
                @endforeach 
            @else
                <p>Congratulations! You have no remaining tasks. Be grateful for that.</p>
            @endif    

        </div>
            <!-- <div class="content">
                <a href="{{url('/tasks')}}"><button class="btn btn default">View Tasks</button></a>
            </div> -->
        
    </body>
</html>
