<?php 

// echo"<pre>";
// print_r($_POST);

$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = md5($_POST['password']);


if( $username!='' && $email != '' && $phone != '' && $address != '' && $password != '' ){
   
    include('../admin/functions/connection.php');

    $insert = "INSERT INTO 
    users(username,email,phone,address,password) 
    VALUES ('$username','$email','$phone','$address','$password')";
    
    $query = $conn->query($insert);
    
    if(!$conn){
        echo $conn-> error;
    }else{
        echo "<p class= 'remove'style='color:red;font-size:15px;    
        font-size: 15px;
        border: 1px solid #ffe6af;
        padding: 10px 20px;
        border-radius: 8px;
        width: 50%;
        background: darkcyan;
        color: white;
    }'> Data inserted seccessfuly <i class='ri-checkbox-circle-fill'></i></p>";
    }
}else{
    echo "<p style='color:red;font-size:15px;'> Please, Inter the information </p>";
}



