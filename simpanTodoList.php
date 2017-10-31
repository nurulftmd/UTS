<?php
  $cookie_name = "todo";
  $cookie_value = "John Doe";
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
