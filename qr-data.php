<?php


// (A) LOAD QR CODE LIBRARY
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeData
{
   // DATA TO CREATE QR CODE
    private $data;

    //generate URL
    public function url($url = null)
    {
        $this->data = preg_match("#^https?\:\/\/#", $url) ? $url : "http://{$url}";
    }

    // generate TEXT
    public function text($text)
    {
        $this->data = $text;
    }

    //generate EMAIL
    public function email($email = null, $subject = null, $message = null)
    {
        $this->data = "MATMSG:TO:{$email};SUB:{$subject};BODY:{$message};;";
    }

    // generate PHONE
    public function phone($phone)
    {
        $this->data = "TEL:{$phone}";
    }

    //generate  SMS
    public function sms($phone = null, $msg = null)
    {
        $this->data = "SMSTO:{$phone}:{$msg}";
    }

    // generate CONTACT
    public function contact(
        $name = null,
        $phone = null,
        $email = null,
        $url = null,
        $social = null,
        $street = null,
        $city = null,
        $state = null,
        $postCode = null,
        $country = null
    ) {

        $vCard = "BEGIN:VCARD\r\n";
        $vCard .= "VERSION:3.0\r\n";
        $vCard .= "FN:" . $name . "\r\n";
        $vCard .= "URL:" . $url . "\r\n";
        $vCard .= "SOCIALPROFILE;type=facebook:" . $social . "\r\n";

        if ($email) {
            $vCard .= "EMAIL;TYPE=WORK:" . $email . "\r\n";
        }

        if ($phone) {
            $vCard .= "TEL;HOME;VOICE:" . $phone . "\r\n";
        }

        $vCard .= "ADR;TYPE=HOME:;;$street;$city;$state;$postCode;$country \r\n";

        $vCard .= "END:VCARD\r\n";

        // (B) CREATE QR CODE
        $qr = QrCode::create(
            $this->data
        );

        $writer = new PngWriter();
        $result = $writer->write($qr);

        // (C) OUTPUT QR CODE
        // (C1) SAVE TO FILE
        $result->saveToFile(__DIR__ . "/qr.png");

        // (C2) DIRECT OUTPUT
        header("Content-Type: " . $result->getMimeType());
        echo $result->getString();


        $this->data = $vCard;
    }


    //save qrcode image file.
    public function qrCode()
    {
        // (B) CREATE QR CODE
        $qr = QrCode::create(
            $this->data
        );

        $writer = new PngWriter();
        $result = $writer->write($qr);

        // (C) OUTPUT QR CODE
        // (C1) SAVE TO FILE
        $result->saveToFile(__DIR__ . "/qr.png");

        // (C2) DIRECT OUTPUT
        header("Content-Type: " . $result->getMimeType());
        echo $result->getString();

        // (C3) GENERATE DATA URI
        // echo "<img src='{$result->getDataUri()}'>";

    }
}
