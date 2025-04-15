<?php
    /* TODO:datos a cifrar */
    $data = "123456";

    $key = "mi_key_secret";

    $cipher = "aes-256-cbc";

    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

    $cifrado = openssl_encrypt($data, $cipher, $key, OPENSSL_RAW_DATA, $iv);

    /* TODO:Descifrado */
    $decifrado = openssl_decrypt($cifrado, $cipher, $key, OPENSSL_RAW_DATA, $iv);

    echo "Texto Cifrado: " . base64_encode($cifrado) . "<br>";

    echo "Texto Descifrado: " . $decifrado . "<br>";
    
?>