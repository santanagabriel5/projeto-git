<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php $i=0; ?>
@foreach($array as $link)
<a href="storage/{{$link}}" download="{{$nomes[$i]}}">Download the archive</a><br>
<?php $i++; ?>

@endforeach



  </body>
</html>
