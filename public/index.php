<?php
require_once("../includes/database.php");
require_once("../includes/user.php");
if(isset($database)) {echo "true";} else {echo "false"; }

echo "<br/>";

//$sql = "INSERT INTO users (id,username,password,first_name,last_name)";
//$sql .= "VALUES (1,'ushan','ushan123','Ushan','Kavinda')";
//$result = $database->query($sql);

$sql = "SELECT * FROM users WHERE id = 1";
$result_set = $database->query($sql);
$found_user = $database->fetch_array($result_set);
echo $found_user['username'];

echo "<hr/>";
$found_user = User::find_by_id(1);
echo $found_user['username'];
?>