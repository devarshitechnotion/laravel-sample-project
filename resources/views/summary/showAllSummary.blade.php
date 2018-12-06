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
		<h4>
			<p>
				<a href="{{url('summary/'.$summary['id'])}}" >{{$summary['title'] }}</a>
			
				<a href="{{url('summary/edit/'.$summary['id'])}}" title="edit summary">
	          		<span class="glyphicon glyphicon-pencil"></span>
	        	</a>

	        	<a href="{{url('summary/delete/'.$summary['id'])}}" title="delete summary">
	          		<span class="glyphicon glyphicon-remove-sign"></span>
	        	</a>
        	</p>
		</h4>
	@endforeach
	

@include('includes.footer')	  