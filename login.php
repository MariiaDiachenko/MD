<?php
// require_once __DIR__ . '/require.php';
// login();
// if(isLogged()) {
//   header( 'Location: ' . $_SERVER['HTTP_HOST'] . '/MD/backend-index.php', true, 301);
// }
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>MD - Mariia Diachenko</title>
  <link rel="Shortcut icon" href="logo.ico" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link href="css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="Shortcut icon" href="logo.ico" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="skin/default.css"> -->
</head>

<body>

<div class="jumbotron">
  <form  method="post" role="form" class="contactForm">
  	<div class="form-group">
  		<label for="loginl">login</label>
  		<input type="text" class="form-control" name="login"  placeholder="" data-rule="email" data-msg="Please enter a valid email" />
  	</div>
  	<div class="form-group">
  		<label for="password">Your password</label>
  		<input type="password" class="form-control" name="password"  placeholder=""/>
  		</div>
  <button type="submit" class="line-btn green">login</button>
  </form>
  </div>

  </body>
</html>
