<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="filename">
    <input type="submit" value="Submit">
</form>