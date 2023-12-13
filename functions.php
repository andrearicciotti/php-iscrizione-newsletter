<?php

function mail_validator($mail_address) {
    var_dump($mail_address);

    if(str_contains($mail_address, '@') && str_contains($mail_address, '.')) {
        // mail valida
        return $mail_state = false;
    } else {
        return $mail_state = true;
    }
}

?>