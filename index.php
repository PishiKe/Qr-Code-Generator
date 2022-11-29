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
            <span class="d-inline-block">
                <img src="/assets/logo/transparent_eyby.png" class="img-fluid" width="10%" alt="">
              </span>
              <span class="d-inline-block  float-right">
                <h2> Enter your details</h2>
              </span>
            </div>
          </div>
          <div class="card-body">
            <form id="generateQrForm" class="form-signin" method="post" action="generate_contact_qr.php">
              <div class="form-group p-2">
                <label for="first-name" class="col-sm-2 control-label">First name</label>
                <div>
                  <input type="text" class="form-control" id="first-name" name="first-name" placeholder="First name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="last-name" class="col-sm-2 control-label">Last Name</label>
                <div>
                  <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="prefix" class="col-md-3 control-label">Name prefix</label>
                <div>
                  <input type="text" class="form-control" id="prefix" name="prefix" placeholder="Mr, Mrs, Dr ..." value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="phone" class="col-sm-2 control-label">Phone</label>
                <div>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="07XXXXXXXX" value="" />
                </div>
              </div>

              <div class="form-group p-2">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div>
                  <input type="text" class="form-control" id="email" name="email" placeholder="example@domain.com" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="phone" class="col-sm-2 control-label">Url</label>
                <div>
                  <input type="text" class="form-control" id="url" name="url" placeholder="Enter your web url" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="job-title" class="col-sm-2 control-label">Job title</label>
                <div>
                  <input type="text" class="form-control" id="job-title" name="job-title" placeholder="Job title" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="company" class="col-sm-2 control-label">Company</label>
                <div>
                  <input type="text" class="form-control" id="company" name="company" placeholder="Company name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="department" class="col-md-3 control-label">Department</label>
                <div>
                  <input type="text" class="form-control" id="department" name="department" placeholder="Department name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <span class="d-inline-block"> <i class="i bi bi-twitter text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="twitter" class=" control-label">Twitter Username</label>
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
                <span class="d-inline-block"> <i class="i bi bi-linkedin text-dark mx-1"></i>
                </span>
                <span class="d-inline-block btn float-right">
                  <label for="linkedin" class=" control-label">Linkedin Username</label>
                </span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Username">
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
                <label for="street" class="col-sm-2 control-label">Street</label>
                <div>
                  <input type="text" class="form-control" id="street" name="street" placeholder="Street name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="city" class="col-sm-2 control-label">City</label>
                <div>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div>
                  <input type="text" class="form-control" id="state" name="state" placeholder="State name" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="post-code" class="col-sm-2 control-label">Post code</label>
                <div>
                  <input type="text" class="form-control" id="post-code" name="post-code" placeholder="Post Code" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <label for="country" class="col-sm-2 control-label">Country</label>
                <div>
                  <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="" />
                </div>
              </div>
              <div class="form-group p-2">
                <div>
                  <input id="submit" name="submit" type="submit" value="Generate QR" class="btn btn-primary col-12 btn-danger" />
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>