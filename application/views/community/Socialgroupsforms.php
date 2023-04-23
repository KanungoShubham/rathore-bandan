
             
         
<div class="main-panel">
        <div class="content-wrapper">
                 <div>
               
                 
          <div class="row">

          <div class="col-12 grid-margin stretch-card">
       
              <div class="card">
    
          
                <div class="card-body">
     
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                 <form enctype="multipart/form-data"  method="POST" class="forms-sample"  id="addsocialgroup">
               
                    <div class="form-group">
                      <label for="exampleInputName1">Social Groups Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="socialname" required="required">
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleInputName1"> Social Group Registration Year</label>
                      <input type="date" class="form-control" id="exampleInputName1" placeholder="Community Hall / Hospice(Registration Year)" name="socialyear" required="required">
                    </div>
                    <div class="form-group">
               <label>Office Description</label>
               <textarea class="form-control" name="socialdec" id="input-4" required="required"></textarea>
              
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> City/village: <span>*</span></label>
                                        <input type="text" name="city" placeholder="City/village" class="form-control " required/ >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Pin Code: <span>*</span></label>
                                        <input type="text" name="pincode" placeholder="Pin Code"pattern="[0-9]{6}" maxlength="6"class="form-control" required/ >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Full address: <span>*</span></label>
                                        <input type="text"  name="address" placeholder="Full address" class="form-control" required/ >
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
               
                        <div class="form-group ">
                      <label for="exampleInputName1">Landmark</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Landmark" name="sociallandmark" required="required">
                    </div>
                      
                    <div class="form-group ">
                      <label>Mobile Number</label>
                      <input type="number"name="officmobile[]" class="form-control"  placeholder="Enter Mobile Number">
                    </div>
                                 
                      <fieldset class="OMOB">
                     <div class="repeatable "></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add ">
                     </div>
                  </fieldset>
                  <div class="form-group ">
                      <label>Landline Number</label>
                      <input type="number"name="officelandline[]" class="form-control"  placeholder="Enter Landline Number">
                    </div>
                                 
                      <fieldset class="OLAD">
                     <div class="repeatable "></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add ">
                     </div>
                  </fieldset>
                  <div class="form-group ">
                      <label>Email</label>
                      <input type="email"name="officehemail[]" class="form-control"  placeholder="Enter Email Id">
                    </div>
                                 
                      <fieldset class="OEMA">
                     <div class="repeatable "></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add ">
                     </div>
                  </fieldset>
                                    <div class="form-group">
                                        <label> Facebook Page Link: <span>*</span></label>
                                        <input type="text"  name="socialfacebook" placeholder="Facebook Page Link"  class="form-control" required/ >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label> Instagram Page Link: <span>*</span></label>
                                        <input type="text"  name="socialinstagram" placeholder="Instagram Page Link"  class="form-control" required/ >
                                        
                                    </div>
                                    <div class="form-group">
                                    <label> Feature Image: <span>*</span></label>
                                    <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" class="form-control" name="socialimage">
                            <label class="custom-file-label" for="inputGroupFile04" class="form-control">Feature Image</label>
                          </div>
                        </div>
                         
                           
                     <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit">
                    <button class="btn btn-light">Cancel</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
</div>


      <!-- main-panel ends -->
      <script src="<?php echo base_url('assets/cojs/drop.js')?>"></script>
      <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
      <script type="text/javascript">
           $('#addsocialgroup').submit(function(e){
            e.preventDefault(); 
            

            $.ajax({
             url:'<?php echo base_url();?>Socialgroups/socialgroupadd',
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
                    $("#addsocialgroup").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully ");
                     
                    $("#addsocialgroup").trigger("reset");
                   
                }
                  
                  
                    
                  document.getElementById("addsocialgroup").reset();
                
      },

         });
               
                 
    }); 


          
      </script>
     
     