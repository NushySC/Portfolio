<?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'My website';
       $to = 'anuska@anuskasampedro.com';
       $subject = 'Hello';

       
       $body = "From: $name\n E-Mail: $email\n Message:\n $message";
   
       
    if (isset($_POST["send"]))  {
           if (mail ($to, $subject, $body, $from)) {
            echo "<script>alert('Your email was sent succesfully and I will contact you as soon as possible.');</script>";
            echo "<script>document.location.href='index.html'</script>";
           } else {
            echo "<script>alert('There was an error submitting the form, please try again.');</script>";
            echo "<script>document.location.href='index.html'</script>";
           }
       }

       var_dump($_POST);
    ?>
