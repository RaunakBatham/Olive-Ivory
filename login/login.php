<?php
    $name = $phone = $email = $password = $repass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($email=="")
{echo ("Email can't be empty");

return false;
}
else if($password=="")
{echo ("Please enter your password");

return false;
}
else{
call();
}
function call()
{
echo("Your details are recorded");
}

?>