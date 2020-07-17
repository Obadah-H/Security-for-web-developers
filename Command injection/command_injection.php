<?php
if (isset($_GET{'email'})) {
  system("mail " . $_GET{'email'} . " -s 'contact us' < ./email.txt");
}
?>