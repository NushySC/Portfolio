<?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: My Contact Form';
       $to = 'anuska@anuskasampedro.com';
       $subject = 'Hello';

       
       $body = "From: $name\n E-Mail: $email\n Message:\n $message";
   
       
    if (isset($_POST["send"]))  {
           if (mail ($to, $subject, $body, $from)) {
            echo "<script>alert('Mail was sent !');</script>";
            echo "<script>document.location.href='index.html'</script>";
           } else {
            echo "<script>alert('Try again please!');</script>";
            echo "<script>document.location.href='index.html'</script>";
           }
       }

       var_dump($_POST);
    ?>
