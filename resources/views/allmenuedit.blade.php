<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Allamenu</h3>
 
	<a href="/allmenu"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($allmenu as $p)
	<form action="/allmenu/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        Name<input type="text" name="name" required="required" value="{{ $p->name }}"> <br/>
        Type<input type="checkbox" name="type" value="{{ $p->type }}"> <br/>
        Price<input type="text" name="price" value="{{ $p->name }}"> <br/>
        
        <button type="submit"  class="btn btn-default">Submit Button</button>
        <button type="reset" class="btn btn-default">Reset Button</button>
	</form>
	@endforeach
		
 
</body>
</html>