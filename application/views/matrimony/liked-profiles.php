<style>
  .bg{
    border-radius: 20px;
    background-color: #ccf5ff;
background-image: -webkit-linear-gradient(246deg, #ccf5ff 0%, #e0ebeb 100%);
background-image: -moz-linear-gradient(246deg, #ccf5ff 0%, #e0ebeb 100%);
background-image: -o-linear-gradient(246deg, #ccf5ff 0%, #e0ebeb 100%);
background-image: linear-gradient(246deg, #ccf5ff 0%, #e0ebeb 100%);

  }
  </style>


<section class="mt-3">

<div class="section">
 <div class="container">
     <div class="row" id="examples">
 <?php  foreach ($liked_data as $rw) {  ?>
    <div class="col-md-4">

    <div class="card bg">
    
       
     
        <div class="card-body">
          <div class="d-flex">
<div>    
  <img src="<?php $imgs = $rw->userprofileimage; 
    if ($imgs) {echo base_url().''.$rw->userprofileimage;}  elseif($rw->gender == "Male") {
      echo base_url().'assets/images/man.png';
      }elseif($rw->gender == "Female") {
          echo base_url().'assets/images/woman.png';
          }?>" class="card-img-top rounded-circle" alt="..." style="width:100px; height:100px;"></div>
<div class="my-auto mx-auto">
  <h5 class="card-title text-center"><b>Name:<?php echo $rw->firstName; ?> <?php echo $rw->lastName; ?></b></h5> 

<p class="text-dark text-center "> <b>Age:<?php echo date_diff(date_create($rw->dob), date_create('today'))->y.'yrs';?></b></p>
<p class="text-dark  text-center"> <b><?php echo $rw->belongs; ?></p></b></div>
          </div>
        
          <center><a href="<?php echo base_url()?>metroinfo/<?php echo $rw->id ?>" class="btn btn-info " target="_blank">view More </a> </center>
        </div>
      </div>
 </div>
      <?php } ?>
 </div>
 </div>
 </div>

</section>

<script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
 <script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>  
 <script>
 $('#examples').paginate();
</script>