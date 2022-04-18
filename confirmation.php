<?php
if($_POST){
    //variable setting
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['cnumber'];
    $Institute_address = $_POST['Iaddress'];
    $role = $_POST['role'];
    $recommend = $_POST['recommed'];
    $startup_details = $_POST['Startup_details'];

    //check input fields
    if( empty($name) || empty($email) || empty($contact_number) || empty($Institute_address) || empty($role) || empty($recommend) || empty($startup_details))
    {
        echo "Please fill all the required fields";
    }
    else
    {
        mail($email, "Registered Successfully.", "hi $name congratulation on registering on Sambalpur University Startup Forum");
        echo 
            "<script type='text/javascript'>
                alert('Registration Successfull');
                window.history.go(-1);
            </script>";
    }

}
?>