<?php
  $email = filter_input(INPUT_POST, 'email');
  $subject = filter_input(INPUT_POST, 'subject');
  $body = filter_input(INPUT_POST, 'body');

  if(!empty($email) && !empty($subject) && !empty($body)) {
    if(mail($email, $subject, $body)) $message = 'Email successfully sended';
  } else $message = 'Email could not be sent';
  
  require 'index.php';
  echo "<script type='text/javascript'>alert('$message');</script>";