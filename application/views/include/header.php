<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/back/img/favicon.ico')?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">  
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>"> 
   
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/colors1.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fmaily.css')?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/revolution/css/settings.css')?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/revolution/css/layers.css')?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/revolution/css/navigation.cs')?>">
    <!-- educate icon CSS
    
		============================================ -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cocss/vertical-layout-light/jquery.paginate.css')?>">

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

   <style type="text/css">
 .was-validated input:required:invalid {
    background: transparent;
}

/* Mark valid inputs during .invalid state */
.was-validated input:required:valid {
  background: transparent;
}
.cardimg{
	background: 
linear-gradient(
 rgba(0, 0, 0, 0.6),
 rgba(0, 0, 0, 0.6)
),
url("<?php echo base_url('assets/images/logos/banner.webp')?>");

background-size: cover;
border-radius:10px;

}
   </style>
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<!-- <div class="bg_load"> <img class="loader_animation" src="<?php echo base_url('assets/images/logos/rathore.png')?>" alt="#" /> </div> -->
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="float-right">
             <ul class="list-inline">
            <li><a data-toggle="modal" data-target="#login">Login</a></li>
             <li><a data-toggle="modal" data-target="#sinup">Sinup</a></li>
          </ul>
         </div>
       </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="<?php echo base_url('assets/images/logos/rathore.png')?>" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a  href="it_home.html">Home</a>
                  <ul>
                    <li><a href="it_home.html">It Home Page</a></li>
                    <li><a href="it_home_dark.html">It Dark Home Page</a></li>
                  </ul>
                </li>
                <li><a href="it_about.html">About Us</a></li>
                <li> <a href="it_service.html">Directory</a>
                  <ul>
                    <li><a href="<?php echo base_url()?>Hospice">Community/Hospice Directory</a></li>
                    <li><a href="<?php echo base_url()?>News">News Directory</a></li>
                    <li><a href="<?php echo base_url()?>Community">Community-login</a></li>
                    <li><a href="<?php echo base_url()?>social">Social Gropes</a></li>
                  </ul>
                </li>
                 <li> <a  href="#"><i class="fal fa-users mr-2"></i>Committe</a>
                  <ul>
                    <li><a href="<?php echo base_url()?>Statelevel">State level community</a></li>
                    <li><a href="<?php echo base_url()?>Nationallevel">Akhil bhartiya community</a></li>
                  </ul>
                </li>
                <li> <a href="it_blog.html">Blog</a>
                  <ul>
                    <li><a href="it_blog.html">Blog List</a></li>
                    <li><a href="it_blog_grid.html">Blog Grid</a></li>
                    <li><a href="it_blog_detail.html">Blog Detail</a></li>
                  </ul>
                </li>
                <li> <a href="#">Pages</a>
                  <ul>
                    <li><a href="it_career.html">Career</a></li>
                    <li><a href="it_price.html">Pricing</a></li>
                    <li><a href="it_faq.html">Faq</a></li>
                    <li><a href="it_privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="it_error.html">Error 404</a></li>
                  </ul>
                </li>
                <li> <a href="it_shop.html">Shop</a>
                  <ul>
                    <li><a href="it_shop.html">Shop List</a></li>
                    <li><a href="it_shop_detail.html">Shop Detail</a></li>
                    <li><a href="it_cart.html">Shopping Cart</a></li>
                    <li><a href="it_checkout.html">Checkout</a></li>
                  </ul>
                </li>
                <li> <a href="it_contact.html">Contact</a>
                  <ul>
                    <li><a href="it_contact.html">Contact Page 1</a></li>
                    <li><a href="it_contact_2.html">Contact Page 2</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->

</header>
<!-- end header -->

           
   <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <form action="<?php echo base_url()?>login"method="POST">    
         <div class="form-group">
        <input type="email" class="form-control" name="Email" placeholder="Enter Your Mail Id">
          </div>
            <div class="form-group">
       <input type="password"  class="form-control" name="Password" placeholder="Enter Your Password">
      </div>
      <div>
           <center><input type="submit" class="btn btn-danger" name="submit" value="Login"/> </center>
      </div>
    </form>
      </div>
      <div class="modal-footer">
    
      </div>
    </div>
  </div>
</div>                                                                                       
 <div class="modal fade" id="sinup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">User Ragistrtion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form enctype="multipart/form-data" id="user" method="POST" class="was-validated">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                 <input type="hidden" class="form-control" name="userrole" value="1">
                <label  for="validationTextarea">Frist Name</label>
              <input type="text" class="form-control" name="Fristname" id="validationTextarea"  placeholder="Enter your Frist Name" required/ >
               <div class="invalid-feedback">
                  Please Enter Your Fristname.
                  </div>
            </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
              <input type="text" class="form-control" name="Lastname"  placeholder="Enter your Last Name" required/ >
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
              <input type="email" class="form-control" name="Email"  placeholder="Enter your Emial id" required/ >
                <div class="invalid-feedback">
                  Please Enter Your Email id.
                  </div>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                 <label>Mobile Number</label>
              <input type="number" class="form-control" name="Mobilenumber"  placeholder="Enter your Mobile Number "required/ >
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
              <input type="number" class="form-control" name="addharname"  placeholder="Enter your Addhar Number"required/ >
               <div class="invalid-feedback">
                  Please Enter Your addhar Number.
                  </div>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                 <label>Password </label>
              <input type="password" class="form-control" name="password"  placeholder="Enter your Password "required/ >
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
               <option value="Sahu Teli Rathore/Rathod">Sahu Teli Rathore/Rathod</option>
               <option value="Banjara Rathore/Rathod">Banjara Rathore/Rathod</option>
               <option value="Banjara Teli Rathore/Rathod">Banjara Teli Rathore/Rathod</option>
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
              <input type="file" name="addcard" class="form-control" multiple="multiple" required/ >
               <div class="invalid-feedback">
                  Please upload  Your  Addhar card image.
                  </div>
            </div>
        </div>
     <div class="col-md-12">
           <label>profile Image</label>
            <div class="form-group">
              <input type="file" name="image" class="form-control" multiple="multiple" required/ >
               <div class="invalid-feedback">
                  Please upload  Your   image.
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
                                            <option value="" selected="selected">Please select Country first</option>
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
  <input class="form-check-input" type="radio" name="Durgadasji" id="exampleRadios1" value="yes" checked>
  <label class="form-check-label" for="exampleRadios1">
    Yes
  </label>
</div></div>
              <div class="col-md-2">
               <div class="form-check">
  <input class="form-check-input" type="radio" name="Durgadasji" id="exampleRadios2" value="No" >
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div></div>
             </div>
            </div>
            <div>
           <center><input type="submit" class="btn btn-danger" name="submit" value="Singup"/> </center>
      </div>
      </form>
     </div>
      <div class="modal-footer">
    
      </div>
    </div>
  </div>
</div>                                    