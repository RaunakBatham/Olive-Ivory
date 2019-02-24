<?php 
// Login Page for the Customer
// require_once("../packages/include/globals.php");
if(isset($_POST['email'], $_POST['password'])){
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    $loginerr = $mailerr = $passerror = "";
    if($email == "")    $mailerr = "Email Cannot be Empty.";
    if($password == "")    $passerr = "Password Cannot be Empty.";

    try {
        $conn = new PDO("sqlite:users.sqlite3");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND pass = ?");
        $stmt->execute(array($email, $password));
        $user = $stmt->fetch();
        if ($user) die("Welcome " . $user['email']);
        else if($email!="" && $password!="")    $loginerr = "Invalid Login Details";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>

    <body>
        <form method="POST">
            <p><input type="email" name="email" placeholder="Enter Email ID"/>ERROR</p>
            <p><input type="password" name="password" placeholder="Enter Password"/><?= $passerr ?></p>
            <p><?= $loginerr ?></p>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>