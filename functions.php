<?php

/**
 * Controlla la validità della mail inserita dall' utente
 * @param string $mail_address
 * 
 * @return [boolean]
 */
function mail_validator($mail_address) {

    if(str_contains($mail_address, '@') && str_contains($mail_address, '.')) {
        // mail valida
        return $mail_state = false;
    } else {
        return $mail_state = true;
    }
}

?>