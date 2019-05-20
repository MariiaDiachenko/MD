<?php
require_once __DIR__ . '/require.php';

if (check('logout', 'logout')) {
  unset($_SESSION['admin']);
}
redirect('login.php');
