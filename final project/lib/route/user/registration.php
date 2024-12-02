<?php

include_once('../../functions/userFunction.php');

$result = userRegistration($_POST['userName'], $_POST['userEmail'], $_POST['userPhone'], $_POST['userAge'], $_POST['userPass']);

echo($result);

?>
