<?php
session_start();
unset($_SESSION['login']);
header('Location: /task1/login_view.html');