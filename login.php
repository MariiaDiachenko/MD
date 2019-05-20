<?php
require_once __DIR__ . '/require.php';
login();
if(isLogged()) {
  header( 'Location: ' . getProjectPatch() . '/gallery.php');
}
require(__DIR__ . '/elements/header.html.php');
?>

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

<?php
require(__DIR__ . '/elements/footer.html.php');
