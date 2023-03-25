<?php
//look for the config.php file to connect to the database
require 'config.php';
//conditional if statement which will check if the action has taken place for registration
if(isset($_POST['action']) && $_POST['action'] == 'register'){
    //check the input of the name variable 
    $name=check_input($_POST['name']);
    //check the input of the username
    $uname=check_input($_POST['uname']);
    //check the input of the email
    $email=check_input($_POST['email']);
    //check the input of the password
    $pass=check_input($_POST['pass']);
    //check the input of thee confirm password
    $cpass=check_input($_POST['cpass']);
    //calculate the hash of the password 
    $pass=sha1($pass);
    //calculate the hash of the confirm password 
    $cpass=sha1($cpass);
    //generate the date the account was created
    $created=date('Y-m-d');

    //check if the passwords match
    //if they do not match return a message saying the password which you have entered does not match
    if($pass!=$cpass){
        echo 'Password did not match';
        exit();
    }
    //else for if the passwords match
    else{
        //prepare the connection
        $sql=$conn->prepare("SELECT username,email FROM users WHERE username=? OR email =?");
        //bind parameters in the sql
        $sql->bind_param("ss", $uname,$email);
        $sql->execute();
        //load the results to a variable 
        $register_result=$sql->get_result();
        $row=$register_result->fetch_array(MYSQLI_ASSOC);

        //conditional statement for the row for the username
        if($row['username']==$uname){
            echo 'Username not avaialble please try a different one!';
        }
        //check if email is already registered
        elseif($row['email']==$email){
            //display message to say if the email is already registered
            echo 'Email is already registered try different!';
        }
        else{
            //statement which inserts the registered details to the database
            $stmt=$conn->prepare("INSERT INTO users (fullname,email,pass,created) VALUES(?,?,?,?)");
            //bind the parameters to the stmt variable 
            $stmt->bind_param("ssss",$name,$email,$pass,$created);
            //if the stmt is executed then display a message 
            if($stmt->execute()){
                //display that the user has registered 
                echo 'Successfully Registered. Login Now.';
            }
            else{
                //if registration is unsucessful display message
                echo 'Registration failed please try again.';
            }
        }
    }

}

//function to check the input of the form which has been created
function check_input($data){
    //trim the data which is stored in the variable. then return the data which is stored in the variable $data.
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>