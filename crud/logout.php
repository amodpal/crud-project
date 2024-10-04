<?php

session_start();

session_unset();
header('location:form.php');
?>

<meta http-equiv = "refresh" content = "0; url = http://localhost:8080/webly/crud/form.php" />

<?php
            
?>