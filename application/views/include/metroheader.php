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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-multiselect.css')?>"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-multiselect.min.css')?>"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-select.css')?>">        
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fmaily.css')?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/colors1.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">

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
    <link rel="stylesheet" href="<?php echo base_url('assets/revolution/css/navigation.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/form.css')?>">
    <!-- educate icon CSS
		============================================ -->
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > -->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">



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
 
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="<?php echo base_url('assets/images/logos/rathore.png')?>" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
              <li><a href="<?php echo base_url()?>Matrimony">Home</a></li>
               <li> <a  href="it_home.html"><i class="fas fa-heart"></i>&nbsp;Marriage Bureau</a>
                  <ul>
                    <li><a href="<?php echo base_url()?>Bureau">Visit Bureau</a></li>
                    <li><a href="<?php echo base_url()?>profileregister">Register Profile</a></li>
                  </ul>
                </li>
                <li> <a href="it_service.html">Directory</a>
                  <ul>
                    <li><a href="<?php echo base_url()?>Hospice">Community/Hospice Directory</a></li>
                    <li><a href="<?php echo base_url()?>News">News Directory</a></li>
                    <li><a href="<?php echo base_url()?>directory"> Rathore Directory</a></li>
                    <!-- <li><a href="<?php echo base_url()?>Community">Community-login</a></li> -->
                    <li><a href="<?php echo base_url()?>social">Social Gropes</a></li>
                    <li><a href="<?php echo base_url()?>Event">Event</a></li>
                    <li><a href="<?php echo base_url()?>todaybrithday"> Today Brithday</a></li>
                    <li><a href="<?php echo base_url()?>todaycondolence"> Today Condolence</a></li>
                  </ul>
                </li>
                 <li> <a  href="#"><i class="fal fa-users mr-2"></i>Committe</a>
                  <ul>
                    <li><a href="<?php echo base_url()?>Statelevel">State level community</a></li>
                    <li><a href="<?php echo base_url()?>Nationallevel">Akhil bhartiya community</a></li>
                  </ul>
                </li>
           
            
                </li>
                     <li> 
                      <a href="#" class="d-flex">     <img src="<?php $imgs = $datas['proimage']; 
                    if ($imgs) {
echo base_url().''.$datas['proimage'];
} else {
echo base_url().'assets/images/ur.png'; 
}
    ?>" width="45" style=" margin-top: -14px; border-radius: 50px;">   <h5 class="ml-2 text-danger"><b><?php echo $datas['Fristname']; ?></b></h5>
            </a>
                  <ul>
                    <li><a href="<?php echo base_url()?>dasbored">Dasbored</a></li>
                    <li><a href="<?php echo base_url()?>logouts">Logout</a></li>
                 
                 
                  </ul>
                </li>
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

           
   
                                  