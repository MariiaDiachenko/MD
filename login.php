<?php
require_once __DIR__ . '/require.php';
login();
if(isLogged()) {
  header( 'Location: ' . getProjectPatch() . '/gallery.php');
}
require(__DIR__ . '/elements/header.html.php');
?>

<div class="jumbotron">
  <form action='' method="post">
        <div class="form-group">
                <label for="loginl">login</label>
                <input type="text" class="form-control" name="login"  placehold$
        </div>
        <div class="form-group">
                <label for="password">Your password</label>
                <input type="password" class="form-control" name="password"  pl$
                </div>
  <input type="submit"  value="login">
  </form>

<?php
require(__DIR__ . '/elements/footer.html.php');
