<?php

?>
<h2> Welcome to your Dashboard <?= $_SESSION['user']['email']  ?> </h2>
<p> You are successfully logged in. </p>

<a href="index.php?url=logout">Logout</a>