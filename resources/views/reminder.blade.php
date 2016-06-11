<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/app.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <title>You shall be reminded</title>
</head>
<body>
<style>
@import url(https://fonts.googleapis.com/css?family=Kanit:100,300,400);
body{
	background-color: #222222;
	font-family: 'Kanit', sans-serif;
}
@media screen and (min-width: 768px){
  div.container-fluid{
    width: 50%;
  }
}
h1{
	color: rgb(230, 219, 116);
  text-align: center;
}
</style>
<div class="container-fluid">
	<h1>This is a reminder.</h1>
	<?php
		date_default_timezone_set('Europe/Tallinn');
      	$setdate = date('d/m/Y G:i:s', $setdate);
      	$targetdate = date('d/m/Y G:i:s', $targetdate);
    ?>
	<div class="panel panel-default">
		<div class="panel-heading">{{ $author }} requested to be reminded of:</div>
		<div class="panel-body">{{ $content }}</div>
		<ul class="list-group">
			<li class="list-group-item">E-mail: {{ $email }}</li>
			<li class="list-group-item">Reminder set on: {{ $setdate }}</li>
			<li class="list-group-item">To be reminded on: {{ $targetdate }}</li>
		</ul>
	</div>
	<idgmav class="alert alert-success" role="alert">Permalink to this page: <a href="{{ route('reminder', ['rand' => $rand]) }}">{{ route('reminder', ['rand' => $rand]) }}</a></div>

</div>
</body>
</html>
