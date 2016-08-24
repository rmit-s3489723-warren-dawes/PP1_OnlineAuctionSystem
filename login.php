<?php
session_start();

if(isset($_POST) && empty($_POST['username'])==false && empty($_POST['password'])==false && isset($_SESSION['username'])==false)
{
   //var_dump($_POST);
    $username=clean($_POST['username']);
    $password=clean($_POST['password']);
    $servername = "localhost";
    $dbuser = "root";
    $dbpassword = "console";
    $dbname = "auction";

    // Create connection
    $conn = new mysqli($servername, $dbuser, $dbpassword,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     $sql = "SELECT * from users";
    $result = $conn->query($sql);


    ///var_dump($result);

    if ($result==true && $result->num_rows > 0) 
    {
        $found=false;
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            //echo "username: " . $row["username"]. " - password: " . $row["password"]. " email: " . $row["email"]. "<br>";
            if(strtolower($username)==strtolower($row["username"]) && strtolower($password)==strtolower($row["password"]))
            {
                //echo "Welcome ! ".$row["username"];
                $_SESSION['username']=$row["username"];
                $found=true;
               header("Location: home.php");
               die();
                break;
            }
        }
        if($found==false)
        {
       // echo "Wrong username or password";
               header("Location: index.php");
               die();  
        }
    } else 
    {
        echo "<br> 0 results <br>";
        
    }
    


    
    $conn->close();
}else if(isset($_SESSION['username']))
	{
    	//echo "Hey ".$_SESSION['username'];
        header("Location: home.php");
	    die();
	}




    function clean($data)
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


    ?>