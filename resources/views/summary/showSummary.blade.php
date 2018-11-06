@include('includes.header')
	
	<div class="row">
		<div class="col-md-10">
			<h3>List of All Summary	</h3>
		</div>
		<div class="col-md-2" style="margin-top: 10px;"">
			<span align=right><a href="{{url('summary/create')}}"><button class="btn btn-primary">Add Summary</span></button></a></span>			
		</div>
	</div>	
	<hr>

	<ul>
		@foreach($summaryData as $summary)
		<li>
			{{$summary['summary'] }}
		</li>
		@endforeach
	</ul>

@include('includes.footer')	  