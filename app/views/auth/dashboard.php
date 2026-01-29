<?php
// Redirect any auth/dashboard requests to the consolidated home/dashboard
header('Location: index.php?url=home/dashboard');
exit();
?>