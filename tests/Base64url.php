<?php

use kuralab\base64url\Base64url;

class Base64urlTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function encode()
    {
        $expected = 'V2hvIGFyZSB5b3U_ID4-IC9kZXYvbnVsbA';

        $data = 'Who are you? >> /dev/null';
        $result = Base64url::encode($data);

        $this->assertSame($expected, $result);
    }

    /**
     * @test
     */
    public function decode()
    {
        $expected = 'Who are you? >> /dev/null';

        $data = 'V2hvIGFyZSB5b3U_ID4-IC9kZXYvbnVsbA';
        $result = Base64url::decode($data);

        $this->assertSame($expected, $result);
    }
}
