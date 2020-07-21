<?php 
if (!empty($_SESSION['username'])){
   $this->load->view('admin/index');
} else {
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="PerPusWeb (Perpustakaan Berbasis Web)">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="../../favicon.ico">

    <title>UAD</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo config_item('base_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo config_item('base_url') ?>/assets/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo config_item('base_url') ?>/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo config_item('base_url') ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo config_item('base_url') ?>/assets/js/bootstrap.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="<?php echo config_item('base_url') ?>/assets/img/page-background.png">

    <div class="container">

      <form class="form-signin" action="<?php echo base_url().'Admin/proseslogin' ?>" method="post">
        <center><h2 class="form-signin-heading"><span class="glyphicon glyphicon-th-large"></span> Admin </h2></center>
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input type="text" id="usernames" name="username" class="form-control" placeholder="username" autocomplete="off" autofocus="on" >
         </div><br>

        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
         <input type="password" id="password" name="password" class="form-control" placeholder="password" autocomplete="off" autofocus="on" >
         </div>
        <br />

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    
    <center><h5 class="form-signin">Copyright &copy; <a href="#" data-toggle="modal" data-target="#contact">UAD-TIF-15</a></h5></center> 
    
    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php }?>
