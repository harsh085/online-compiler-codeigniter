<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title> LOGIN PAGE</title>

</head>
<body style="background-image: url('http://tinytidbits.in/wp-content/uploads/2018/04/best-books-book-youll-ever-read.jpg')">
<div class="container">
<div class="well">
  <center><h1 class="jumbtron" >Sign up page </h1></center></br>

        <form action="<?php echo base_url('login_validation'); ?>" method="post"></br>
        Enter username:<input type="text" name="usr" class="form-control" placeholder="username here">
        <span class="text-danger"><?php echo form_error("usr");?></span></br>
        Enter password:<input type="password" name="pass" class="form-control" placeholder="password here">
        <span class="text-danger"><?php echo form_error("pass");?></span></br>
        <button type="submit" class="btn btn-primary">Sign up</button>
        <?php

        echo $this->session->set_flashdata('error'); ?>
        </form><br/>
</div>
</div>
<footer style="color: white;">all right reserved.copyright 2018</footer>
</body>
</html>
