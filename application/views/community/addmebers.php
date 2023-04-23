


<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
            
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>

                  <form enctype="multipart/form-data"  method="POST" class="forms-sample" id="addm" >
               
                          
                       
                            <div><h2 class="text-center">Community hall / Hospice caretaker</h2></div>
                            <div>
                                  <div class="form-group">
                                <input type="number" name="hospicid" value="<?php echo $hos['id'] ?>">
                                <input type="text" name="hospicrag" value="<?php echo $hos['registrationnmber'] ?>">
                                 <input type="text" name="hospicuniq" value="<?php echo $hos['hopicuniqid'] ?>">
                            </div>
                                <div class="form-group">
                                     <label>  Post Name</label>
                                    <select class="form-control" name="carepost" required="required">
                                        <option selected="" disabled="">Select post / position</option>
                                         <option value="Guardian">Guardian</option>
                                         <option value="Chairmen">Chairmen</option>
                                         <option value="Executive-chairmen">Executive-chairmen</option>
                                         <option value="Vice-Chairmen">Vice-Chairmen</option>
                                         <option value="General-Secretary">General secretary</option>
                                         <option value="Secretary">Secretary</option>
                                         <option value="Joint-Secretary">Joint secretary</option>
                                         <option value="Treasury-Chairmen">Treasury chairmen</option>
                                         <option value="Co-tresury-chairmen">Co-treasury chairmen</option>
                                         <option value="Education-Minister">Education minister</option>
                                         <option value="Organisation-Minister">Organisation minister</option>
                                         <option value="Office-minister">Office minister</option>
                                         <option value="Publicity-Minister">Publicity minister</option>
                                         <option value="Adviser">Adviser</option>
                                         <option value="Member">Member</option>
                                       </select>
                                </div>
                                <div class="form-group">
                                       <label>Name</label>
                                    <input type="text" name="carename" class="form-control" required="required" list="mabers">
                                      <datalist id="mabers">
                                        <option value="Mr.">
                                        <option value="Mrs.">
                                     
                                        </datalist>
                                </div>
                                    <div class="form-group">
                                       <label>Board Category</label>
                                   <select name="caregender" class="form-control" required="required">
                                    <option value="male">Men's Board</option>
                                    <option value="female">Women's Board</option>
                                    <option value="youth">Youth Board</option>
                                  </select>
                                </div>
                                   <div class="form-group">
                                       <label>Contact No.</label>
                               <input type="number" name="caremobile" class="form-control" required="required">
                                </div>
                                     <div class="form-group">
                                       <label>Email-id</label>
                               <input type="email" name="caremail" class="form-control" required="required">
                                </div>
                                        <div class="form-group">
                                       <label>Profile photo</label>
                               <input type="file" name="careimage" class="form-control" >
                                </div>
                                       <div class="form-group">
                                       <label>Facebook Id Link:</label>
                               <input type="text" name="carefb" class="form-control" required="required">
                                </div>
                                      <div class="form-group">
                                       <label>Instagram Id Link:</label>
                               <input type="text" name="careinsta" class="form-control" required="required">
                                </div>
                                    <div class="form-group">
                                       <label>Whatsapp Number:</label>
                               <input type="number" name="carewhatsapp" class="form-control" required="required">
                                </div>
      
                            </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      <script src="<?php echo base_url('assets/cojs/drop.js')?>"></script>
      <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
      <script type="text/javascript">
           $('#addm').submit(function(e){
            e.preventDefault(); 
            

            $.ajax({
             url:'<?php echo base_url();?>Hospic/hospicaddmber',
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
                    $("#addm").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully ");
                    $("#addm").trigger("reset");
                }
                  
                  
                    
                  document.getElementById("addm").reset();
                
      },

         });
               
                 
    }); 


          
      </script>
     