<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <title> LOGIN PAGE</title>

</head>
<body style="background-image: url('https://images.readwrite.com/wp-content/uploads/2018/04/coding-825x500.jpg')">
  <div id="header">
    harsh
  </br>harsh
    <!--<img src="styles/header.png" width="1000px" height="200px" alt="BITS logo" />
  -->
  </div>
  <div class="container">
<div class="well" style="background-color:black;">
  <center><h1 class="jumbtron" style="color:white; text-shadow: 2px 2px 8px #FF0000;" >PLEASE LOGIN</h1></center></br>

        <form action="<?php echo base_url('main/login_validation'); ?>" method="post" style="color:white;""></br>
        Enter username:<input type="text" name="usr" class="form-control" placeholder="username here">
        <span class="text-danger"><?php echo form_error("usr");?></span></br>
        Enter password:<input type="password" name="pass" class="form-control" placeholder="password here">
        <span class="text-danger"><?php echo form_error("pass");?></span></br>
        <button type="submit" class="btn btn-primary">Sign in</button>
  <!--    <div class="btn btn-primary" >
        <a style="color:white;" href="<?php// echo base_url() ?>main/sign_up">Sign up
        </a>
      </div> -->
        <?php

        echo $this->session->flashdata('error'); ?>
        </form><br/>
</div>
</div>
<div id="bottom bottom-bar" style="color: white;">all right reserved.copyright 2018</div>
</body>
</html>
