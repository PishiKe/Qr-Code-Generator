<?php
// (A) LOAD QR CODE LIBRARY
    require "vendor/autoload.php";

    use Endroid\QrCode\QrCode;
    use Endroid\QrCode\Writer\PngWriter;
    use JeroenDesloovere\VCard\VCard;

    //vcard data
    // $firstName = $_GET['text'];
    $firstName = 'John';
    $lastName ='Doe';
    $namePrefix = 'Dr';
    $email = 'doe@mail.com';
    $emailType = 'Work';
    $company = 'eyby';
    $department = 'e-commerce';
    $tel = '0712123321';
    $telType = 'Work';
    $url = 'eyby.com';
    $urlType = 'Personal';
    $social = 'https://twitter.com/elonmusk';
    $socialType = 'Twitter';
    $street = 'Sesame st.';
    $city = 'Mombasa';
    $region = 'CBD';
    $country = 'kenya';
    $addressType = 'Work';

    //initialize vcard
    $vcard = new VCard();

    $vcard->addName($lastName, $firstName, $additionalName, $namePrefix, $nameSuffix);
    $vcard->addCompany($company, $department);
    $vcard->addEmail($email, $emailType);
    $vcard->addPhoneNumber($tel, $telType);
    $vcard->addURL($url, $urlType);
    $vcard->addurl($social, $socialType);
    $vcard->addAddress($addressName, $extendedAddress, $street, $city, $region, $zip, $country, $addressType);

    //converts vcard data to string
    $vcardAsString = $vcard->getOutput();

    // create qr code
    $qr = QrCode::create($vcardAsString);

    $writer = new PngWriter();
    $result = $writer->write($qr);

    // ways to output the qr-code

    // 1. direct output
    header("Content-Type: " . $result->getMimeType());
    echo $result->getString();

    // 1. direct output
    header("Content-Type: " . $result->getMimeType());
    echo $result->getString();

    // 2. save to file
    // $result->saveToFile(__DIR__ . "/qr.png");

    // 3. generate data uri
    // echo "<img src='{$result->getDataUri()}'>";