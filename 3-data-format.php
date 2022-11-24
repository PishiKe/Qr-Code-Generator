<?php
// (A) LOAD QR CODE LIBRARY
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// (B) CREATE QR CODE
// (B1) WEBSITE
// $qr = QrCode::create("https://code-boxx.com");

// (B2) EMAIL
// $qr = QrCode::create("mailto:jon@doe.com");

// (B3) TELEPHONE NUMBER
// $qr = QrCode::create("tel:123456789");

// (B4) SMS
// $qr = QrCode::create("smsto:123456789:Message");

// (B5) VCARD
// https://www.qr-code-generator.com/solutions/vcard-qr-code/
$qr = QrCode::create(
"BEGIN:VCARD
VERSION:3.0
N:Doe;John;
TEL;TYPE=work,VOICE:123456789
EMAIL:john@doe.com
ORG:Code Boxx
TITLE:Crash Test Dummy
URL:https://code-boxx.com
VERSION:3.0
END:VCARD"
);

// (C) OUTPUT QR CODE
$writer = new PngWriter();
$result = $writer->write($qr);
header("Content-Type: " . $result->getMimeType());
echo $result->getString();