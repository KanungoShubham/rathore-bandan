<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rthore Bandhan</title>
  <!-- plugins:css -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/cocss/bootstrap.min.css')?>">  
  <link rel="stylesheet" href="<?php echo base_url('assets/cocss/bootstrap.css')?>"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/cocss/bootstrap-multiselect.css')?>"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/cocss/bootstrap-multiselect.min.css')?>"> 
  <link rel="stylesheet" href="<?php echo base_url('assets/cocss/bootstrap-select.css')?>">    -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/feather/feather.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/cocss/bootstrap-select.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css')?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cocss/toastr.min.css')?>"> 
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/cocss/vertical-layout-light/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/cocss/vertical-layout-light/styleone.css')?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cocss/vertical-layout-light/jquery.paginate.css')?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html">  <img src="<?php echo base_url('assets/images/rathore.png')?>" alt="logo"  class="w-75 "/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"> <img src="<?php echo base_url('assets/images/rathore.png')?>" alt="logo"  class="w-75 "/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle d-flex" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php $imgs = $data['proimage']; 
                    if ($imgs) {
echo base_url().''.$data['proimage'];
} else {
echo base_url().'uploads/origin/def-img.png';
}
    ?>" width="100">   <h5 class="my-3 ml-2"><?php echo $data['Fristname']; ?></h5>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item ">
              <i class="fal fa-mobile"></i>
             <p class="text-secondary mb-1"><?php echo $data['Mobilenumber']; ?></p>
     
            
              </a>
              <a class="dropdown-item">
              <i class="fal fa-user-cog"></i><p class="text-muted font-size-sm"><?php echo $data['Belongs']; ?></p>
            
              </a>
              <a class="dropdown-item" href="<?php echo base_url()?>profile/<?php echo $data['id']; ?>" >
              <i class="fal fa-user-cog"></i>
              Edit Profile
              </a>
              <a class="dropdown-item" href="<?php echo base_url()?>logouts">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
      
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
     
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>Matrimony">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>dasbored" >
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Marriage" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Marriage Bureau</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Marriage">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a href="<?php echo base_url()?>Bureau" class="nav-link">Visit Bureau</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>profileregister" class="nav-link">Register Profile</a></li>
            
               
              </ul>
            </div>
          </li> 

          <?php if($data['liked_profiles_id']!=NULL){?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>list" target="_blank">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Your Shortlist</span>
            </a>
          </li>
          <?php }?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Directory" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Directory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Directory">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item"><a href="<?php echo base_url()?>Hospice" class="nav-link">Hospice Directory</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>News" class="nav-link">News Directory</a></li>
                
                    <li class="nav-item"><a href="<?php echo base_url()?>social" class="nav-link">Social Gropes</a></li>
               
              </ul>
            </div>
          </li> 
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Community" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Community</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Community">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item"><a href="<?php echo base_url()?>Statelevel" class="nav-link">State level community</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>Nationallevel" class="nav-link">Akhil bhartiya community</a></li>

               
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#busin" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Business</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="busin">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item">  <a class="nav-link" href="<?php echo base_url()?>addbusiness" >Add Your Business</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>updatebusiness" class="nav-link">Update Your Business</a></li>

               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#event" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title"> Event</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="event">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item">  <a class="nav-link" href="<?php echo base_url()?>addevent" >Add Your Event</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>eventlist" class="nav-link">Your Event list</a></li>

               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#birthday" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Birthday</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="birthday">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item">  <a class="nav-link" href="<?php echo base_url()?>addbirthday" >Add Birthday</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>birthdaylist" class="nav-link">Your Event list</a></li>

               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#condolence " aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Condolence</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="condolence">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item">  <a class="nav-link" href="<?php echo base_url()?>addcondolence" >Add condolence</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>condolencelist" class="nav-link">condolence list</a></li>

               
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blog " aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
              <ul class="nav flex-column sub-menu">
             
                    <li class="nav-item">  <a class="nav-link" href="<?php echo base_url()?>addblog" >Add Blog</a></li>
                    <li class="nav-item"><a href="<?php echo base_url()?>bloglist" class="nav-link">Blog list</a></li>

               
              </ul>
            </div>
          </li>
        </ul>
      </nav>