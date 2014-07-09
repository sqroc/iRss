
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin</title>

      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/signin.css">

      <script src="<?php echo base_url(); ?>js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>js/irss.js"></script>

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.js"></script>
        <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 
  </body>
</html>