<?php

session_start();

unset($_SESSION);

session_destroy();

echo "<a href='index.php'>Click here to go to index.php</a>";


?>