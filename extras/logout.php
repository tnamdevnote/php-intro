<?php
  session_start();
  session_destroy();
  header('Location: /php-intro/13_session.php');