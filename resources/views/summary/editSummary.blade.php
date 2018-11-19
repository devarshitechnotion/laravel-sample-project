@include('includes.header')

	<br><br><br>	
	<h3>Edit Summary</h3>
	<hr>

	<form method="POST" action="{{url('summary/edit/'.$summaryData['id'])}}">
		
		{{ csrf_field() }}

	    <div class="form-group">
			<input type="hidden" value="{{$summaryData->id}}">	
		
	      <label for="email">Tittle:</label>
	      <input type="text" class="form-control" id="title" placeholder="Enter title" value="{{$summaryData->title}}" name="title">
	    </div>

	    <div class="form-group">
	      <label for="pwd">Summary:</label>
	      <textarea class="form-control" rows="5" id="summary" placeholder="Enter summary" name="summary" value="">{{$summaryData->summary}}</textarea>
	    </div>

	    <button type="submit" class="btn btn-success">Update</button>

	  </form>

@include('includes.footer')

