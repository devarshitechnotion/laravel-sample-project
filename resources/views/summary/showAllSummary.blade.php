@include('includes.header')

	<br><br><br>

	<div class="row">
		<div class="col-md-10">
			<h3>List of All Summary	</h3>
		</div>
		<div class="col-md-2" style="margin-top: 10px;"">
			<span align=right><a href="{{url('summary/create')}}"><button class="btn btn-primary">Add Summary</span></button></a></span>			
		</div>
	</div>	

	<hr>

		
	@foreach($summaryData as $summary)
		<h4><a href="{{url('summary/'.$summary['id'])}}">{{$summary['title'] }}</a></h4>
	@endforeach
	

@include('includes.footer')	  