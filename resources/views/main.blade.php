<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./css/app.css" rel="stylesheet">
  <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/moment.min.js"></script>
  <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>

<style>
@import url(https://fonts.googleapis.com/css?family=Kanit:100,300,400);
body{
  background-color: #222222;
  font-family: 'Kanit', sans-serif;
}
label.h1{
  color: rgb(230, 219, 116);
}
div.input-group{
  width: 100%;
  margin: auto;
}
@media screen and (min-width: 768px) {
  div.input-group{
    width: 40%;
    margin: auto;
  }
}
button{
  width: 30%;
}
</style>

<title>Reminder</title>
</head>
<body>
  <div class="container-fluid text-center text-uppercase">
    <form id="" action="{{ action('ReminderController@setReminder') }}/" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      
      <label for="content" class="h1">Remind me to:</label>
      <div class="input-group">
      <input type="text" class="form-control" id="content" name="content" placeholder="Return books to the library" required>

      </div>
        <label for="targetdate" class="h1">When?</label>
        <div class='input-group date' id='datetimepicker'>
            <input type='text' name="targetdate" class="form-control" required>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time"></span>
            </span>
          </div>
      <script type="text/javascript">
          $(function () {
              $('#datetimepicker').datetimepicker({
                format: 'DD/MM/YYYY HH:mm:ss'
              }); 
          });
      </script>
      <label for="email" class="h1">E-mail:</label>
      <div class="input-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="email@domain.com" required>
      </div>
      
      <label for="author" class="h1">Name:</label>
      <div class="input-group">  
        <input type="text" name="author" id="author" class="form-control" value="" required>
      </div>
      <br/>
      <div class="input-group">
        <button type="submit" class="btn-lg btn-info text-uppercase">Remind me</button>
      </div>
      </form>
  </div>

</body>
</html>
