<?php $af=$nodm;
  if ($af) { ?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
            
              <div class="card">
                <div class="card-body">
<div class="col-md-12 mb-5">
  <div class="row">
             <?php  foreach ($nodm as $rw) {  ?>
                   <div class="col-md-3">
          <div class="card card-bodys " >
   <img  class=" proimg  mt-2" src="<?php $imgs = $rw->profileimage; 
                    if ($imgs) {echo base_url().''.$rw->profileimage;} else {echo base_url().'uploads/origin/def-img.png';}?>" style="width: 100px; height: 80px;" > 
  <div class=" mt-3 mb-3">
    <h4 class="text-center" style="font-size: 14px;"><?php echo $rw->socialname; ?></h4>
    
    <center><a class="mr-3" href="<?php echo base_url()?>soicaladdmambers/<?php echo $rw->id ?>" data-toggle="tooltip" data-placement="right" title="Add Mamber"><i class="fa fa-plus" aria-hidden="true" ></i></a>
  <a href="<?php echo base_url()?>socialupdate/<?php echo $rw->id ?>" class="hosmbe  mr-2 mt-3 " data-toggle="tooltip" data-placement="right" title="Edit state office"><i class="fas fa-edit " aria-hidden="true" ></i></a>
  </center>
  </div>
</div>
                   </div>
                     <?php   }   ?>
                   </div>
                 </div>
                   <div class="co-md-2 mb-5 ml-5">
         <a class="btn btn-primary " href="<?php echo base_url()?>socialviewmamber/<?php echo $rw->id ?>">view Mamber</a>
     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         
         </div>


<?php } else{?>
  <h3> frist ragisterd office</h3>

<?php } ?>
  

  