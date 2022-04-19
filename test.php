<?php 
$data="hello";
var_dump($data);
$data_Crypt=openssl_encrypt($data,"aes-256-cbc","unmotdepasscomplique");
var_dump($data_Crypt);
$data_Decrypt= openssl_decrypt($data_Crypt,"aes-256-cbc","unmotdepasscompliqu");
var_dump($data_Decrypt);
print_r(openssl_get_cipher_methods(),0);


?>