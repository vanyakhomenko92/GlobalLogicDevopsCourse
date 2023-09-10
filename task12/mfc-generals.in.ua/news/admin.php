<?php
    include '../header.php';
?>

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel="stylesheet">
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/salvattore.min.js"></script>


<div class="container col-xs-2">
</div>

<div class="container col-xs-8">


<form action="connect.php"class="form-horizontal" role="form" method="POST" name="myform">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Введіть заголовок</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="title" name="title" value="">
		</div>
	</div>
    <div class="form-group">
		<label for="message" class="col-sm-2 control-label">Скопіюйте назву картинки </label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="1"name="image" type="text" id="image"></textarea>
		</div> 
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Текст</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="10" id="article" name="article"></textarea>
		</div> 
	</div>
	   
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="add" class="btn btn-primary">
		</div>
	</div>
</form>
</div>
<div class="container col-xs-2">
<br>
<br>
<br>
<br>
<br>
</div>
<hr>      

<?php
      include '../footer.php'   
?>
       