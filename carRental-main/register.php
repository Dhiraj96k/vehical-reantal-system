<?php 
include 'connect.php';
    // Get form data
    if(isset($_POST['reg-btn']))
    {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo".$username";
    echo".$email";
    echo".$password";

    // SQL query to insert data into database
    $sql = "INSERT INTO register (u_name, u_email, u_pass) VALUES ('$username', '$email', '$password')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        setcookie("u_name",$username,0,"/");
        setcookie("u_email",$email,0,"/");
        header('location:formbooking.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close connection
    $con->close();
    }
    else if(isset($_POST['LoginBtn']))
    {   $emailOrUsername = $_POST['email'];
        $password = $_POST['password'];

        // SQL query to check if the user exists
        $sql = "SELECT * FROM register WHERE (u_name='$emailOrUsername' OR u_email='$emailOrUsername') AND u_pass='$password'";
        $result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            // User found, do something (e.g., redirect to a welcome page)
            // echo "Login successful";
            $row = $result->fetch_assoc();
            $user_id = $row['u_id'];
            $username = $row['u_name'];
            $email = $row['u_email'];
            setcookie("u_id",$user_id,0,"/");
            setcookie("u_name",$username,0,"/");
            setcookie("u_email",$email,0,"/");
            header('location:index.php');
        } else {
            // User not found or invalid credentials
            echo "Invalid email/username or password";
        }
    
    }
?>
