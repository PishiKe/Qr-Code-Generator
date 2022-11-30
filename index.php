<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <title>Contact Details</title>

<body class="bg-dark">
  <div class="container ">
    <div class="row align-items-center">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5 ">
          <div class="card-up">
            <div class="card-body">
              <span>
                <img src="/assets/logo/transparent_eyby.png" class="img-fluid" width="25%" alt="">
              </span>
              <span>
                <h2>vCard Qr Generator</h2>
              </span>
            </div>
          </div>
          <div class="card-body">
            <form id="generateQrForm" class="form-signin" method="post" action="generate_contact_qr.php">
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-person text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="first-name" class=" control-label">First Name</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-person text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="last-name" class=" control-label">Last Name</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-person text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="prefix" class=" control-label">Name Prefix</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="prefix" name="prefix" placeholder="Mr, Mrs, Dr ..." value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-phone text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="phone" class=" control-label">Phone Number</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="0700111222" value="" />
                </div>
              </div>

              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-envelope text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="email" class=" control-label">Email Address</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="email" name="email" placeholder="example@domain.com" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-globe text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="url" class=" control-label">Website Url</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="url" name="url" placeholder="Enter your web url" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-briefcase text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="job-title" class=" control-label">Job Title</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="job-title" name="job-title" placeholder="Job title" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-building text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="company" class=" control-label">Company</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="company" name="company" placeholder="Company name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-building text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="department" class=" control-label">Department</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="department" name="department" placeholder="Department name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"> <i id="twitter-logo" class="i bi bi-twitter text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="twitter" class="control-label">Twitter Username</label>
                </span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Username">
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"> <i class="i bi bi-facebook text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="facebook" class=" control-label">Facebook Username</label>
                </span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Username">
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"> <i class="i bi bi-instagram text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="instagram" class=" control-label">Instagram Username</label>
                </span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Username">
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"> <i class="i bi bi-linkedin text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="linkedin" class=" control-label">Linkedin Profile Url</label>
                </span>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Username">
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-geo-alt text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="city" class=" control-label">City</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-geo-alt text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="state" class=" control-label">State</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="state" name="state" placeholder="State name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-geo-alt text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="street" class=" control-label">Street</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="street" name="street" placeholder="Street name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-mailbox text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="post-code" class=" control-label">Post Code</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="post-code" name="post-code" placeholder="Post Code" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"><i class="i bi bi-geo text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="country" class=" control-label">Country</label>
                </span>
                <div>
                  <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <div>
                  <input id="submit" name="submit" type="submit" value="Generate QR" class="btn btn-primary col-12 btn-danger" />
                </div>
              </div>

              <button id="btn1" class="btnClass">Button 1</button>
              <button id="btn2">Button 2</button>
              <p class="para1">jQuery is built on top of JavaScript, a rich and expressive language in its own right. This section covers the basic concepts of JavaScript, as well as some frequent pitfalls for people who have not used JavaScript before. While it will be of particular value to people with no programming experience</p>


            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script>
    $('#twitter-logo').on('click', function() {
      $('twitter').hide();
    });

    $('#btn1').on('click', function(){
				alert('Button Clicked!');
			});

  </script>
</body>

</html>