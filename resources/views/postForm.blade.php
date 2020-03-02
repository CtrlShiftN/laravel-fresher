<form action="{{route('postForm')}}" method="post">
	{{csrf_field()}}
  <input type="text" name="fname"> 
  <input type="submit" value="Submit">
</form> 