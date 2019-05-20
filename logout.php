<?php
require_once __DIR__ . '/require.php';

unset($_SESSION['admin']);
redirect('index.php');
