<?php

if (isset($_POST['submit'])) {

  $to = 'chrismountzou@gmail.com';
  $subject = $_POST ['message'];
  $message = $_POST ['message'];
  $headers = $_POST ['name'];

  $retval = mail($to,$subject,$message,$headers);

  if( $retval == true ) {
   echo '<div class="alert alert-success"><strong>You have successfully sent your email!</strong> We gonna get in touch with you as soon as possible.</div>';
  } else {
   echo '<div class="alert alert-danger"><strong>Unable to send your email!</strong> Please try again!</div>';
  }

}

?>
