<?php

include_once('../../functions/userFuction.php');


$result = userRegistration($_POST['userName'], $_POST['userEmail'], $_POST['userPhone'], $_POST['userPass']);



echo($result);
?>