<?php
namespace kuralab\base64url;

/**
 * Base64url Encoding/Decoding Class
 */
class Base64url
{
    public static function encode($data)
    {
        $data = base64_encode($data);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);

        return $data;
    }

    public static function decode($data)
    {
        $data = str_replace(array('-', '_'), array('+', '/'), $data);

        $lack = strlen($data) % 4;
        if ($lack > 0) {
            $padding = 4 - $lack;
            $data .= str_repeat('=', $padding);
        }

        return base64_decode($data);
    }
}
