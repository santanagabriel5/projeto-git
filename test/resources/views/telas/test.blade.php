<!DOCTYPE html>
<html>
<head>
    <title>Test upload</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
</head>
<body>
<center>
<a href="/avatars/QPfpobNOqY17ESDGCIdLsgYFFRru2xYfzmr1FXwa.jpeg" download> download <>


<form  action="/avatars" method="post" enctype="multipart/form-data">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />



  <input type="file" name="avatar"></input>
  <input type="submit" value="Anexar">


</form>

</body>
</html>
