<html>
<body> 

<?php
/*
function spamcheck($field) {
    //filter_var() sanitizes the e-mail
    //address using FILTER_SANITIZE_EMAIL
        $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() validates the e-mail
    //address using FILTER_VALIDATE_EMAIL
        if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        }
        else {
             return FALSE;
        }
    }
  */  
    //if(isset($_POST["email"])){
    //if form is filled, then send email
    $emailto = "dan@danielbrackett.com";
    $email = $_POST["visitorEmail"];
    $subject = $_POST["visitorSubject"];
    $message = $_POST["visitorMessage"];
    $message .= "URL: ".$url."\n";
    $message .= "Email: ".$visitorEmail."\n";
    $url = $_POST["visitorUrl"];
    $headers = 'From: ' .$visitorEmail."\r\n";
    @mail($emailto, $subject, $message, $headers);
    echo "Thanks for emailing me.";
   /*
   }

    else {
    //if email is not filled out, display form
    echo "<form method="post" action="mailforum.php"
    Email: <input name="visitorEmail" type="email"><br>
    Subject: <input name="visitorSubject" type="text"><br>
    Message: <br>
    <textarea name="visitorMessage" rows="4" >   </textarea><br>
    <input type="submit">
    </form>"; 
    }
*/
?>
<h3>Link back to my<a href="index.html"> Homepage</a>.</h3>

</body>
</html>
