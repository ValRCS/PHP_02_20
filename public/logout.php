<?php
session_start();
session_unset();
// $_SESSION['id'] = null;
// $_SESSION['user'] = null;
header('Location: /');
