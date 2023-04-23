<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title></title>
    <style>
    .loginbtn {
        background: transparent;
        color: #ff9902;
        text-decoration: none;
        padding: 7px 26px;
        border-radius: 7px;
        font-size: 11px;
        font-weight: 900;
        border: 1px solid #ff9902;
        letter-spacing: 0.7px;
        display: inline-block;
        margin-right: 10px;
        position: relative;
    }

    .loginbtn:hover {
        background: transparent;
        color: #ff9902;
        text-decoration: none;
        padding: 7px 26px;
        border-radius: 7px;
        font-size: 11px;
        font-weight: 900;
        border: 1px solid #ff9902;
        letter-spacing: 0.7px;
        display: inline-block;
        margin-right: 10px;
        position: relative;
    }

    body {
        margin: 0;

        background-image: url(<?php echo base_url('assets/images/homebg.avif')?>);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .btn-grad {

        padding: 15px 45px;
        text-align: center;
        text-transform: uppercase;
        transition: .5s;
        background-size: 200% auto;
        color: #fff;
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        display: block;
        background-image: linear-gradient(to right, #FF512F 0%, #F09819 51%, #FF512F 100%);
        text-decoration: none;
    }

    a:hover {

        color: #fff;


    }
    .info-box{
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
      background-color:#fff;
      border-radius: 15px;
    }
    .rb-verified{
      background-image: url(<?php echo base_url('assets/images/rb-verified.webp')?>);
    width: 39px;
    height: 46px;
    background-repeat: no-repeat;
        background-size: cover;
    }
    .rb-document{
      background-image: url(<?php echo base_url('assets/images/rb-document.webp')?>);
      width: 42px;
    height: 45px;
    background-repeat: no-repeat;
        background-size: cover;
    }
    .rb-brand{
      background-image: url(<?php echo base_url('assets/images/rb-brand.webp')?>);
    width: 31px;
    height: 46px;
    background-repeat: no-repeat;
        background-size: cover;

    }
    </style>

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="logo">
                <a href="#"><img src="<?php echo base_url('assets/images/logos/rathore.png')?>" alt="logo" style="height: 60px;" /></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="d-flex my-3">
                <h6 class="mb-0 my-2">Already a member ?</h6>
                <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="ms-3 loginbtn">Login</a>
                <a href="<?php echo base_url()?>Community"  class="ms-3 loginbtn">Community-login</a>
            </div>
        </div>
    </div>
    <div class="mt-5 pt-5">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="mt-5">
                    <h5>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 mt-5">
        <a href="#" data-bs-toggle="modal" data-bs-target="#sinup" class="btn-grad">REGISTER FREE</a>
    </div>
 
    <div class="mt-5 pt-3">
        <div class="info-box p-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="rb-verified"></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <h6>
                                Contact genuine profiles with 100% verified mobile numbers
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="rb-document"></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <h6>
                                Contact genuine profiles with 100% verified mobile numbers
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="rb-brand"></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <h6>
                                Contact genuine profiles with 100% verified mobile numbers
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-dark text-white mt-3 p-3">
      <center><p class="mb-0">Copyright © 2023. All rights reserved </p></center>
  </div>
    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center" style="border-bottom: 0px solid #dee2e6;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <center>
                    <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                </center>
                <div class="modal-body">
                    <form action="<?php echo base_url()?>login" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control mb-2" name="Email" placeholder="Enter Your Mail Id" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-2" name="Password" placeholder="Enter Your Password" />
                        </div>
                        <div>
                            <center><input type="submit" class="btn btn-danger" name="submit" value="Login" /></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="sinup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" id="user" method="POST" class="was-validated">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="userrole" value="1" />
                                        <label for="validationTextarea">Frist Name</label>
                                        <input type="text" class="form-control" name="Fristname" id="validationTextarea" placeholder="Enter your Frist Name" required />
                                        <div class="invalid-feedback">
                                            Please Enter Your Fristname.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="Lastname" placeholder="Enter your Last Name" required />
                                        <div class="invalid-feedback">
                                            Please Enter Your Lastname.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input type="email" class="form-control" name="Email" placeholder="Enter your Emial id" required />
                                        <div class="invalid-feedback">
                                            Please Enter Your Email id.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="number" class="form-control" name="Mobilenumber" placeholder="Enter your Mobile Number " required />
                                        <div class="invalid-feedback">
                                            Please Enter Your Mobile Number.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Addhar Number</label>
                                        <input type="number" class="form-control" name="addharname" placeholder="Enter your Addhar Number" required />
                                        <div class="invalid-feedback">
                                            Please Enter Your addhar Number.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password </label>
                                        <!-- <input type="password" class="form-control" name="password"  placeholder="Enter your Password "required/ > -->
                                        <div class="input-group" id="show_hide_password">
                                            <input class="form-control" type="password" name="password" placeholder="Enter your Password" aria-describedby="basic-addon1" required />

                                            <a href="">
                                                <span class="input-group-text" id="basic-addon1" style="height: 38px;"><i class="fa fa-eye-slash" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please Enter Your 8 chercter password use spalcal sinc@$#.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="Gender" class="form-control">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Belongs To </label>
                                        <select name="Belongs" class="form-control">
                                            <option value="Kshtriya Rathore/Rathod">Kshtriya Rathore/Rathod</option>
                                            <option value="Kshtriya Teli Rathore/Rathod">Kshtriya Teli Rathore/Rathod</option>
                                            <option value="Sahu Rathore/Rathod">Sahu Rathore/Rathod</option>
                                            <option value="Sahu Teli Rathore/Rathod">Sahu Teli Rathore/Rathod </option>
                                            <option value="Banjara Rathore/Rathod">Banjara Rathore/Rathod</option>
                                            <option value="Banjara Teli Rathore/Rathod">Banjara Teli Rathore/Rathod </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select name="Bloodgroup" class="form-control">
                                            <option value="(A+)">(A+)</option>
                                            <option value="(A-)">(A-)</option>
                                            <option value="(B+)">(B+)</option>
                                            <option value="(B-)">(B-)</option>
                                            <option value="(O+)"> (O+)</option>
                                            <option value="(O-)"> (O-)</option>
                                            <option value="(AB+)"> (AB+)</option>
                                            <option value="(AB-)">(AB-)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Do you Donate blood?</label>
                                        <select name="Donate" class="form-control">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Addhar Card Image</label>
                            <div class="form-group">
                                <input type="file" name="addcard" class="form-control" multiple="multiple" required />
                                <div class="invalid-feedback">
                                    Please upload Your Addhar card image.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>profile Image</label>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" multiple="multiple" required />
                                <div class="invalid-feedback">
                                    Please upload Your image.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select Country: <span>*</span></label>

                                        <select name="country" id="countySel" size="1" class="form-control">
                                            <option value="" selected="selected">Select Country</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select State: <span>*</span></label>
                                        <select name="state" id="stateSel" size="1" class="form-control">
                                            <option value="" selected="selected">Please select Country first </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select District: <span>*</span></label>
                                        <select name="district" id="districtSel" size="1" class="form-control">
                                            <option value="" selected="selected">Please select State first</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Do you belive in Veer Durgadas ji Rathore/Rathod?</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Durgadasji" id="exampleRadios1" value="yes" checked />
                                        <label class="form-check-label" for="exampleRadios1">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Durgadasji" id="exampleRadios2" value="No" />
                                        <label class="form-check-label" for="exampleRadios2">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <center><input type="submit" class="btn btn-danger" name="submit" value="Singup" /></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="<?php echo base_url('assets/js/drop.js')?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
       $("#user").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Home/user",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User registered alrday");
                $("#user").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 1000);
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "User registered Successfully");
                $("#user").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 1000);
            }
        },
    });
});

(function () {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });
})();
$(document).ready(function () {
    $("#show_hide_password a").on("click", function (event) {
        event.preventDefault();
        if ($("#show_hide_password input").attr("type") == "text") {
            $("#show_hide_password input").attr("type", "password");
            $("#show_hide_password i").addClass("fa-eye-slash");
            $("#show_hide_password i").removeClass("fa-eye");
        } else if ($("#show_hide_password input").attr("type") == "password") {
            $("#show_hide_password input").attr("type", "text");
            $("#show_hide_password i").removeClass("fa-eye-slash");
            $("#show_hide_password i").addClass("fa-eye");
        }
    });
});

        </script>


</body>

</html>