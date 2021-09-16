<?php

class DES
{
    /**
     * Des-cbc
     *
     * @param string $data
     * @param string $key  
     * 
     * @return string Ciphertext
     */
    public  function encrypt($data, $key=null)
    {
        if (strlen($key)!=8) {
            $key='kakatoji';
        }
        $cipher = 'des-cbc';
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = $key;
        $options = 0;
        return openssl_encrypt($data, $cipher, $key, $options, $iv);
    }

    /**
     * Des-cbc
     *
     * @param string $data
     * @param string $key  
     * 
     * @return string Plaintext
     */
    public function decrypt($data, $key=null)
    {
        if (strlen($key)!=8) {
            $key='kakatoji';
        }
        $cipher = 'des-cbc';
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = $key;
        $options = 0;
        return openssl_decrypt($data, $cipher, $key, $options, $iv);
    }
}