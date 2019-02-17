<?php
    $name = $phone = $email = $password = $repass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
   $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $repass = test_input($_POST["repass"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($name=="")
{echo ("Name can't be empty");

return false;
}
else if($phone=="")
{echo ("Contact No. can't be empty");

return false;
}
else if($email=="")
{echo ("Email can't be empty");

return false;
}
else if($password=="")
{echo ("Please enter the password");

return false;
}
else if($repass=="")
{echo ("Re-enter your password");

return false;
}
else if($password!=$repass)
{
	echo ("Password Mismatch");
}
else{
call();
}
function call()
{
echo("Your details are recorded");
}

?>