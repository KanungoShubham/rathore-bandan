


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
               
                          
                       
                            <div><h2 class="text-center mb-3">Donation Form</h2></div>
                            <div>
                                  <div class="form-group">
                                <input type="number" name="donationid" value="<?php echo $donation['id'] ?>">
                                
                            </div>
                              
                                <div class="form-group">
                                       <label>Name</label>
                                    <input type="text" name="donername" class="form-control" required="required" list="mabers">
                                      <datalist id="mabers">
                                        <option value="Mr.">
                                        <option value="Mrs.">
                                     
                                        </datalist>
                                </div>
                                <div class="form-group">
                                       <label>Donation Type </label>
                               <input type="text" name="donationtype" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                       <label>Donation </label>
                               <input type="number" name="donation" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                       <label>Date </label>
                               <input type="date" name="date" class="form-control" required="required">
                                </div>
                                   <div class="form-group">
                                       <label>Contact No.</label>
                               <input type="number" name="mobile" class="form-control" required="required">
                                </div>
                          
                                <div class="form-group">
                                       <label>Address</label>
                               <input type="text" name="Address" class="form-control" required="required">
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
             url:'<?php echo base_url();?>Hospic/hospicadddonation',
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
     