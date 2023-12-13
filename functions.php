<?php

function mail_validator($mail_address) {
    var_dump($mail_address);
    $mail_state = false;
    if(str_contains($mail_address, '@') && str_contains($mail_address, '.')) {
        // mail valida
        return $mail_state;
    } else {
        return $mail_state = true;
    }
}

?>