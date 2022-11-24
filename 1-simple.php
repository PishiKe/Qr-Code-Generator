<?php
// (A) LOAD QR CODE LIBRARY
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$name = 'test';
$email = 'user@mail.com';
$tel = '0712123321';

// (B) CREATE QR CODE
$qr = QrCode::create('BEGIN:VCARD
VERSION:4.0
N:;'.$name.';;;
FN:'.$name.'
EMAIL:'.$email.'
ORG:'.$name.'
TEL:'.$tel.'
TEL;type=FAX:'.$fax.'
URL;type=PREF:'.$www.'
ADR:;'.$address.';;;;;Spain
END:VCARD');

$writer = new PngWriter();
$result = $writer->write($qr);

// (C) OUTPUT QR CODE
// (C1) SAVE TO FILE
// $result->saveToFile(__DIR__ . "/qr.png");

// (C2) DIRECT OUTPUT
header("Content-Type: " . $result->getMimeType());
echo $result->getString();

    // (C3) GENERATE DATA URI
    // echo "<img src='{$result->getDataUri()}'>";