<?php
$flavor = $_GET['flavor'];
$appVersionCode = $_GET['appVersionCode'];
header("Location: http://localhost/HappyDeveloper/android/instadownloader/api/v1/webserver.php?flavor=$flavor&appVersionCode=$appVersionCode");
exit();