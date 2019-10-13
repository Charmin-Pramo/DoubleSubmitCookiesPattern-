<!DOCTYPE html>
<html>
<head>
    
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Login to Avengers Mansion</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <style type="text/css" media="all">
  .form_table { text-align: center; }
  .full_width .segment_header { text-align: center !important; }
  .q { float:none;display: inline-block; }
  table.matrix, table.rating_ranking { margin-left:200px !important;margin-right:auto !important; }
  h1 {
  text-shadow: 2px 2px #ff0000;
    }
</style>
    
</head>
<body background="css/avengerss.jpg">
    
    
    
    <div id="form-wrapper" style="max-width:500px; margin:100px;">
        <h1 style="font-family:Calibri;" class="heading"> Avengers Mansion Login </h2>
        <form  method="POST" action="login.php">
            <div class="form-input">
                <label class="uname">Username:</label>  
                <input class="w3-input w3-border" type="text" name="user_name"  placeholder="Username" style="width:300px;" autocomplete="off">
            </div>
            <div class="form-input">
                <label class="pwd">Password:</label>
                <input class="w3-input w3-border" type="password" name="user_pswd" autocomplete="off" placeholder="Password" style="width:300px;">
            </div><br>
            <input type="submit" name="submit" class="login_btn" value="Login"/>

        </form>
    </div>

</body>
</html>