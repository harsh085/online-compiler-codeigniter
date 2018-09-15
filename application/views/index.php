

<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ; ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
        <script src="<?php echo base_url('js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/vendor/jquery-1.12.0.min.js'); ?>"></script>
        <script src="<?php echo base_url('bootstrap-3.3.7/js/bootstrap.min.js'); ?>" ></script>
        <script src="<?php echo base_url('bootstrap-3.3.7/js/bootstrap.js'); ?>" ></script>








</head>
<body>
<div class="main">

<div class="row" style="background-color: white;">
  <div class="col-sm-12">
  <nav class="shadow navbar navbar-default navbar-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="index.php">HARSHIT</a>
      <img class="" src="http://ies.ipsacademy.org/wp-content/uploads/2018/04/logoies.png"  />
      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>-->
    </div>
  <!-- <div class="collapse navbar-collapse navbar-menubuilder">
    <ul class="nav navbar-nav">
      <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
      <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problem Archive</a></li>
      <li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>
      <li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li>
     
      
    </ul>
    </div>-->
</nav>
</div>
</div>


<div class="row log">
  <div class="col-sm-1">

</div>
<div class="col-sm-8">
<div class=""><h1 style="color:blue;"><center>Online Compiler</center></h1></div>
</div>



<div class="col-sm-3">
  
</div>

</div>




<div class="row cspace">
<div class="col-sm-10">
<div class="form-group">
<form action="<?php echo base_url('main/compile'); ?>" name="f2" method="POST">
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
<option value="python2.7">Python2</option>
<option value="python3.2">Python2</option>
  

</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


</form>

</div>
</div>
</div>
</div>


<br><br><br>
<div class="area">
<div class="well foot" style="background-color: #0A195E;color: white;">
<div class="row area">


<div class="col-sm-5">


<div class="fm">

<b>Beta Version</b><br>
<b>powered By <a href="http://ies.ipsacademy.org/" style="color: green;">IES IPS Academy</a></b>

</div>
</div>


<div class="col-sm-4">
<?php
date_default_timezone_set("Asia/Kolkata");
 $t=date("H:i:s");
echo"<b>Server Time:  $t</b>";

?>
</div>
</div>
</div>
</div>
</body>
</html>


