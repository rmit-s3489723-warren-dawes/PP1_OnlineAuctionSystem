<?php

session_start();
if(isset($_SESSION['username']))
{
    header("Location: home.php");
    die();
}else if(isset($_POST))
{
    
   // var_dump(($_POST));
    $username=clean(($_POST['username']));
    $password=clean($_POST['password']);
    $email = clean($_POST['email']);
        

   if(insetToDataBase($username,$password,$email,0))
   {
          // header("Location: home.php");
   // die();
echo "done";
       
   }else{
      // header("Location: registerForm.html");
    //die();
   }
    
    
}else{
       header("Location: registerForm.html");
    die();
}

  function clean($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


    function insetToDataBase($username,$password,$email,$balance)
    {
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "console";
    $dbname = "auction";

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        
    $stmt = $conn->prepare("INSERT INTO users(username,password,email, available_balance ) VALUES (? , ? , ? , ?)");
    if($stmt)
        {
        $stmt->bind_param("sssd", $username, $password, $email,$balance);
        
        $stmt->execute();
        if(isset($stmt->error) && empty($stmt->error)==false)
        {
       // echo "Check this:".$stmt->error;
           // echo'alert("This username is already taken.")';
            return false;
        }else
        {
            $_SESSION['username']=$username;
        }
        $conn->close();
        return true;
        }
    return false;
    }

?>