<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen"
   href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

  <title>Reminder</title>
</head>
<body>
  <div id="main">
    <div id="form">
      <form id="inputs" action="/" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <p>
          Remind me that:
        </p>
        <input type="text" name="content" value="">
        <p>
          When?
        </p>


        <div id="datetimepicker" class="input-append date">
          <input type="text" name="targetdate"></input>
          <span class="add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
          </span>
        </div>
        <script type="text/javascript"
         src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
        </script>
        <script type="text/javascript"
         src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
        </script>
        <script type="text/javascript"
         src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
        </script>
        <script type="text/javascript">
          $('#datetimepicker').datetimepicker({
            format: 'dd/MM/yyyy hh:mm:ss'
                });
        </script>

        <p>
          E-mail me this to:
        </p>
        <input type="email" name="email" value="">
        <br />
        <p>
          Name:
        </p>
        <input type="text" name="author" value="">
        <input type="submit" name="submit" value="Remind me!">
        </form>
    </div>
  </div>
  This is a reminder
</body>
</html>
