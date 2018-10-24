@include('includes.header')

        <div class="text-center"><h3>Always, Keep in  mind what you have to do today.</h3></div>        

        <div class="container h-100" style="border:2px solid black;width:500px;height:auto;margin-left: 29%;padding-left: 30px;">
            <strong><h3>All Tasks</h3></strong>
            <!-- {{$allTasks}}  -->
            @foreach ($allTasks as $task)
                <li><a href="{{url('tasks/'.$task->id)}}">{{$task->task_name}}</a></li> 
            @endforeach  
            <hr>

            <strong><h3>Completed Tasks</h3></strong>
            @if(count($completedTasks) > 0)
                @foreach ($completedTasks as $task)
                    <li>
                        <a href="{{url('tasks/'.$task->id)}}">{{$task->task_name}}</a>
                        <!-- <button class="btn btn default">complete</button> -->
                    </li> 
                @endforeach  
            @else
                <p>0 tasks completed</p>    
            @endif
            <hr>

            <strong><h3>Remaining Tasks</h3></strong>
            @if(count($remainingTasks) > 0)
                @foreach ($remainingTasks as $task)
                    <li>
                        <a href="{{url('tasks/'.$task->id)}}">{{$task->task_name}}</a>
                        <button class="btn btn default btn-sm text-right complete" id="complete">complete</button>                      
                    </li> 
                @endforeach 
            @else
                <p>Congratulations! You have no remaining tasks. Be grateful for that.</p>
            @endif    

        </div>
@include('includes.footer');