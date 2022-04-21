<?php

if($_POST){
    
    //variable setting
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    //check input fields
    if(empty($name) || empty($email) || empty($subject)){

        echo "Please fill all the required fields";
    }
    else{
        mail('19btcse09@suiit.ac.in',"Contact","Name: $name\nEmail: $email \nContent: $subject");
        echo "<script type='text/javascript'>
                alert('Thanks for contacting us');
                window.history.go(-1);
                </script>";
    }
}

?>