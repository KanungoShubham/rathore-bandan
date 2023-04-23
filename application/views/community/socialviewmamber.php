<?php $af=$nofcm;
  if ($af) { ?>

<div class="main-panel">
  <div class="col-md-12">
              <div class="row p-5" id="examples">
              <?php  foreach ($nofcm  as $row) {  ?>
                 <div class="col-md-3">
                 <div class="card mt-3">
                <div class="card-bodys">
                                                        
                <img class=" modal-target mb-3 mt-2 proimg" alt="" src="<?php $news = $row->image; 
                                    if ($news) {
                 echo  base_url().$row->image;
                } else {
                echo base_url().'uploads/origin/def-img.png';
                }
                    ?>"  style="width: 217px; height: 162px;"> 
                    <h5 class="mb-3 text-center"><?php echo $row->name ?></h5>
                     <h5 class="mb-3 text-center"><?php echo $row->mobile ?></h5>
                   <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->

                   <a href="#" class="hosmbe float-right mr-2"  data-id="<?php echo $row->id ?>"><i class="fas fa-edit" aria-hidden="true"></i></a>
  
                                </div>
                                </div>
                                </div>
                                 <?php } ?>
                               </div>
                               
                             </div>
                             
</div>
<div class="modal fade" id="shwoinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered d-block" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Update info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    
      <div class="modal-body">
          <form id="updatemberinfo" method="POST" enctype="multipart/form-data">  
                <div class="form-group">
            <input type="text" name="mid" id="mid">
            <input type="text" name="mimgup"  multiple="true" id="mimgup">
            </div>
        
                     
            <div class="form-group">
                                       <label>Name</label>
                <input type="text" name="upname" class="form-control" required="required" id="upn" list="mabers">
                              <datalist id="mabers">
                                        <option value="Mr.">
                                        <option value="Mrs.">
                                     
                                        </datalist>
                                </div>
                                    <div class="form-group">
                                       <label>Board Category</label>
                                   <select name="upgender" class="form-control" required="required" id="upg">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                
                                  </select>
                                </div>
                                   <div class="form-group">
                                       <label>Contact No.</label>
                        <input type="number" name="upmobile" class="form-control" required="required" id="upc">
                                </div>
                                     <div class="form-group">
                                       <label>Email-id</label>
                        <input type="email" name="upemail" class="form-control" required="required" id="upem">
                                </div>
                 
                                <div class="row ">
                                        <div class="col-md-4">
                                        <img  class="w-75" src="" id="mig" style="height:95px;">
                                      </div>
                                        <div class="form-group col-md-8">
                                       <label>Profile photo</label>
                               <input type="file" name="upimage" class="form-control" >
                                </div>
                            </div>
                                       <div class="form-group">
                                       <label>Facebook Id Link:</label>
                               <input type="text" name="upfb" class="form-control" required="required" id="upf">
                                </div>
                                      <div class="form-group">
                                       <label>Instagram Id Link:</label>
                             <input type="text" name="upinsta" class="form-control" required="required" id="upin">
                                </div>
                                    <div class="form-group">
                                       <label>Whatsapp Number:</label>
                        <input type="number" name="upwhatsapp" class="form-control" required="required" id="upwt">
                                </div>
      
                            </div>
        <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit">
                            </div>
      </form>
            
       
    </div>
</div>
</div>
</div>
<?php } else{?>
  <h3 class="mt-5 ml-5 text-center d-flex"> frist  Add your society Members </h3> <a class="nav-link mt-5 ml-5 text" href="<?php echo base_url() ?>nationalmaber">Add Members</a>

<?php } ?>
 <script src="<?php echo base_url('assets/cojs/drop.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
      <script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>  
          <script>
  
    $('#examples').paginate();

//-- paginate end//
  $('.hosmbe').on('click', function () {
   var nsateid = $(this).data('id');
    console.log("id: " + nsateid);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo base_url();?>Socialgroups/socialupdatemebers/' + nsateid,
        success: function (data) {
            // var result = JSON.parse(data);
            console.log(data);
            // $("#updateimage").modal('toggle');
            $('#shwoinfo').modal('show');
            // $('[name="id"]').val(data.id);
            $('#mid').val(data.id);
            // $('#ums').val(data.state);
      
            $('#upn').val(data.name);
            $('#upg').val(data.gender);
            $('#upc').val(data.mobile);
            $('#upf').val(data.facboock);
            $('#upin').val(data.instagram);
            $('#upem').val(data.emailid);
            $('#upwt').val(data.whatsappno);
            $('#mig').attr("src", '<?php echo base_url()?>./' + data.image);
            $('#mimgup').val(data.image);


        }
    });
});
       $('#updatemberinfo').submit(function(e){
            e.preventDefault(); 
             
            $.ajax({
             url:'<?php echo base_url();?>Socialgroups/updatesoicalmberinfo',
             type:"POST",
            dataType: "json",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(data){
                 console.log(data)
                 if(data['error'] == 0){
                  
                    toastr.error(data['message'], "User alredy ragister");
                    $("#updatemberinfo").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully update");
                      $("#shwoinfo").modal('toggle');
                    $("#updatemberinfo").trigger("reset");
                     setTimeout(function(){
                     location.reload();
                   }, 3000); 
                }
                  
                    
                  document.getElementById("updatemberinfo").reset();
      },
         });
               
                 
    });
  </script>                          