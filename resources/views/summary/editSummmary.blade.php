@include('includes.header')

	<br><br><br>	
	<h3>Edit Summary</h3>
	<hr>

	<form method="POST" action="{{url('summary/store')}}">
		
		{{ csrf_field() }}

	    <div class="form-group">
	      <label for="email">Tittle:</label>
	      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
	    </div>

	    <div class="form-group">
	      <label for="pwd">Summary:</label>
	      <textarea class="form-control" rows="5" id="summary" placeholder="Enter summary" name="summary"></textarea>
	    </div>

	    <button type="submit" class="btn btn-success">Submit</button>

	  </form>

@include('includes.footer')

