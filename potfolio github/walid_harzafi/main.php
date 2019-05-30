<?php
   
   if(isset($_POST['submit'])){
        $name = $_POST['sender']; 
        $mailFrom = $_POST['mail'];
        $subj = $_POST['subject']; 
        $message = $_POST['message']; 

        $mailTo = "harzafi55@gmail.com";
        $headers = "From: ".$mailFrom;
     

        mail($mailTo, $subj, $message, $headers);
        header("Location: index.php?mailsend");
   }
   
?>