<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <div class="flex-center"><h3>Details of your task</h3></div>       
            <div class="container" style="border:2px solid black;width:500px;height:400px;margin-left: 33%;
    padding-left: 30px;">                
                <!-- {{$tasksDetail}}  -->
                @foreach ($tasksDetail as $taskDetail)
                    <p><strong>Task Name: {{$taskDetail->task_name}}</strong></p>
                    <p><strong>Description: {{$taskDetail->description}}</strong></p>
                    <p><strong>Created on: {{date('d-m-Y',strtotime($taskDetail->created_at))}}</strong></p> 
                @endforeach                  
            </div>
         
            <!-- <div class="content">
                <a href="{{url('/tasks')}}"><button class="btn btn default">View Tasks</button></a>
            </div> -->
        
    </body>
</html>
