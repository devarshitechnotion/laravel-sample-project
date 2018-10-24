@include('includes.header')
	
	<h3>Add Summary</h3>
	<hr>

	<form action="summary/store">

	    <div class="form-group">
	      <label for="email">Tittle:</label>
	      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
	    </div>

	    <div class="form-group">
	      <label for="pwd">Summary:</label>
	      <textarea class="form-control" rows="5" id="pwd" placeholder="Enter summary" name="summary"></textarea>
	    </div>

	    <button type="submit" class="btn btn-success">Submit</button>

	  </form>

@include('includes.footer')	  