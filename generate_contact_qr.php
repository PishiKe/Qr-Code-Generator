<?php
// (A) LOAD QR CODE LIBRARY
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use JeroenDesloovere\VCard\VCard;

if (isset($_POST['submit'])) {

    //vcard data
    // $firstName = $_GET['text'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $namePrefix = $_POST['prefix'];
    $email = $_POST['email'];
    $emailType = 'Work';
    $jobTitle = $_POST['job-title'];
    $company = $_POST['company'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $phoneType = 'Work';
    $url = $_POST['url'];
    $urlType = 'Personal';
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $postCode = $_POST['post-code'];
    $country = $_POST['country'];
    $addressType = 'Work';
}

//initialize vcard
$vcard = new VCard();

$vcard->addName($lastName, $firstName, $additionalName, $namePrefix, $nameSuffix);
$vcard->addCompany($company, $department);
$vcard->addJobtitle($jobTitle);
$vcard->addEmail($email, $emailType);
$vcard->addPhoneNumber($phone, $phoneType);
$vcard->addURL($url, $urlType);
$vcard->addurl($twitter);
$vcard->addurl($facebook);
$vcard->addurl($instagram);
$vcard->addurl($linkedin);
$vcard->addAddress($addressName, $extendedAddress, $street, $city, $region, $zip, $country, $addressType);

//converts vcard data to string
$vcardAsString = $vcard->getOutput();

// create qr code
$qr = QrCode::create($vcardAsString);

$writer = new PngWriter();
$result = $writer->write($qr);

// ways to output the qr-code

// 1. direct output
// header("Content-Type: " . $result->getMimeType());
// echo $result->getString();

// 1. direct output
// header("Content-Type: " . $result->getMimeType());
// echo $result->getString();

// 2. save to file
$result->saveToFile(__DIR__ . "/qr.png");

// 3. generate data uri
// echo "<img src='{$result->getDataUri()}'>";

// echo "<img src='/qr.png'>";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Contact information</title>
    <style>
        body {
            background-color: #f5f7fa;
        }

        .testimonial-card .card-up {
            height: 120px;
            overflow: hidden;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }

        .aqua-gradient {
            background: linear-gradient(40deg, #e66465, #9198e5) !important;
        }

        .testimonial-card .avatar {
            width: 120px;
            margin-top: -60px;
            overflow: hidden;
            border: 5px solid #fff;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="mx-auto my-5  text-center" style="max-width: 35rem;">
            <div class="card mt-2 mb-3 ">
              
                <div class="card-up aqua-gradient">
                    <div class="card-body">
                        <h1 class="card-title font-weight-bold text-light"><?php echo  $namePrefix . " " . $firstName . " " . $lastName ?></h4>
                        <!-- <hr> -->
                        <!-- <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                            adipisci</p> -->
                    </div>
                </div>
              
                <!-- <div class="avatar mx-auto white">
                    <img src="https://randomuser.me/api/portraits/women/6.jpg" class="rounded-circle img-fluid" alt="woman avatar">
                </div> -->
                <?php if ($_POST['email'] != null) : ?>
                    <div class="card-body" id="email">
                        <span class="d-inline-block"> <i class="i bi bi-envelope"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $email ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['job-title'] != null) : ?>
                    <div class="card-body" id="job-title">
                        <span class="d-inline-block"> <i class="i bi bi-briefcase"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $jobTitle ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['company'] != null) : ?>
                    <div class="card-body" id="company-name">
                        <span class="d-inline-block"> <i class="i bi bi-building"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $company ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['phone'] != null) : ?>
                    <div class="card-body" id="phone-number">
                        <span class="d-inline-block"> <i class="i bi bi-phone"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $phone ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['url'] != null) : ?>
                    <div class="card-body" id="website">
                        <span class="d-inline-block"> <i class="i bi bi-globe"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $url ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['city'] != null) : ?>
                    <div class="card-body" id="city">
                        <span class="d-inline-block"> <i class="i bi bi-geo-alt"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $city ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['street'] != null) : ?>
                    <div class="card-body" id="street">
                        <span class="d-inline-block"> <i class="i bi bi-geo-alt"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $street ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['region'] != null) : ?>
                    <div class="card-body" id="region">
                        <span class="d-inline-block"> <i class="i bi bi-pin"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $region ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['post-code'] != null) : ?>
                    <div class="card-body" id="post-code">
                        <span class="d-inline-block"> <i class="i bi bi-pin"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $postCode ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <?php if ($_POST['country'] != null) : ?>
                    <div class="card-body" id="country">
                        <span class="d-inline-block"> <i class="i bi bi-geo"></i></span>
                        <span class="d-inline-block btn float-right">
                            <h5><?php echo $country ?></h5>
                        </span>
                    </div>
                <?php endif ?>

                <div class="card-body" id="social">
                    <?php if ($_POST['twitter'] != null) : ?>
                        <a href="<?php echo $twitter ?>" target="_blank" class="i bi bi-twitter text-dark mx-1"></a>
                    <?php endif ?>

                    <?php if ($_POST['facebook'] != null) : ?>
                    <a href="<?php echo $facebook ?>" target="_blank" class="i bi bi-facebook text-dark mx-1"></a>
                    <?php endif ?>

                    <?php if ($_POST['linkedin'] != null) : ?>
                    <a href="<?php echo $linkedin ?> " target="_blank" class="i bi bi-linkedin text-dark mx-1"></a>
                    <?php endif ?>

                    <?php if ($_POST['instagram'] != null) : ?>
                    <a href="<?php echo $instagram ?>" target="_blank" class="i bi bi-instagram text-dark mx-1"></a>
                    <?php endif ?>
                </div>

                <div id="qrbox" style="text-align: center;">
                    <img src="/qr.png" alt="">
                </div>

        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>