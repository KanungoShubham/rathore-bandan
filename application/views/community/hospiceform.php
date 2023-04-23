
             
         
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

                  <form enctype="multipart/form-data"  method="POST" class="forms-sample"   id="homform">
               
                    <div class="form-group">
                      <label for="exampleInputName1">Community Hall / Hospice Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="hospicname" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Community Hall / Hospice(Registration Number)</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Community Hall / Hospice(Registration Number" name="registrationnmber" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Community Hall / Hospice(Registration Year)</label>
                      <input type="date" class="form-control" id="exampleInputName1" placeholder="Community Hall / Hospice(Registration Year)" name="registratioyear" required="required">
                    </div>
                    <div class="form-group">
               <label>Community Hall / Hospice Description</label>
               <textarea class="form-control" name="hospice_desc" id="hospice_desc" required="required"></textarea>
              
            </div>
            <div class="form-group">
               <label>Facilities</label>
               <textarea class="form-control" name="facilities" id="facilities" required="required"></textarea>
              
            </div>
            <div class="form-group">
               <label>Note / Terms(if any)</label>
               <textarea class="form-control" name="note" id="note" required="required"></textarea>
              
            </div>
            <div class="form-group ">
                      <label for="exampleInputName1">Community Hall / Hospice (Total Room)</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Community Hall / Hospice (Total Room)" name="room" required="required">
                    </div>
            <div class="row">
               <div class="form-group col-md-6">
                      <label for="exampleInputName1">Price From (per day)</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Price From (per day)" name="pricefromhospic" required="required">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Price To (per day)</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Price To (per day)" name="pricetohospic" required="required">
                    </div>
                 </div>
                 <div class="form-group ">
                      <label for="exampleInputName1">Electricity (per unit)</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Electricity (per unit)" name="hospicelectricity" required="required">
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
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Landmark" name="landmark" required="required">
                    </div>
                      
                    <div class="form-group ">
                      <label>Mobile Number</label>
                      <input type="number"name="mobile[]" class="form-control"  placeholder="Enter Mobile Number">
                    </div>
                                 
                      <fieldset class="MOB">
                     <div class="repeatable "></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add ">
                     </div>
                  </fieldset>
                  <div class="form-group ">
                      <label>Landline Number</label>
                      <input type="number"name="landline[]" class="form-control"  placeholder="Enter Landline Number">
                    </div>
                                 
                      <fieldset class="LAD">
                     <div class="repeatable "></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add ">
                     </div>
                  </fieldset>
                  <div class="form-group ">
                      <label>Email</label>
                      <input type="email"name="hemail[]" class="form-control"  placeholder="Enter Email Id">
                    </div>
                                 
                      <fieldset class="EMA">
                     <div class="repeatable "></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add ">
                     </div>
                  </fieldset>
                                    <div class="form-group">
                                        <label> Facebook Page Link: <span>*</span></label>
                                        <input type="text"  name="facebook" placeholder="Facebook Page Link"  class="form-control" required/ >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label> Instagram Page Link: <span>*</span></label>
                                        <input type="text"  name="instagram" placeholder="Instagram Page Link"  class="form-control" required/ >
                                        
                                    </div>
                                    <div class="form-group">
                                    <label> Feature Image: <span>*</span></label>
                                    <div class="custom-file">
                                <input type="file" class="form-control" id="inputGroupFile04" class="form-control" name="image">
                           
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
           $('#homform').submit(function(e){
            e.preventDefault(); 

            for (hospice_desc in CKEDITOR.instances) {
              CKEDITOR.instances[hospice_desc].updateElement();
            }
            for (facilities in CKEDITOR.instances) {
              CKEDITOR.instances[facilities].updateElement();
            }
            for (note in CKEDITOR.instances) {
              CKEDITOR.instances[note].updateElement();
            }
   
   
  
   

            $.ajax({
             url:'<?php echo base_url();?>Hospic/addhospic',
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
                    $("#homform").trigger("reset");
                    setTimeout(function(){
                     location.reload();
                   }, 3000); 
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully ");
                    $("#homform").trigger("reset");
                    setTimeout(function(){
                     location.reload();
                   }, 3000); 
                }
                  
                  
                    
             
                
      },

         });
               
                 
    }); 


      
      </script>
     