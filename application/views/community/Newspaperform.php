 <style type="text/css">
    
.error{
  color:red;
}
 </style>
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
<form enctype="multipart/form-data"  id="newspaerform" method="POST" class="forms-sample" >
               
<div class="form-group">
   <label for="exampleInputName1">office Name</label>
   <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="officename" required="required">
</div>
<div class="form-group">
   <label for="exampleInputName1">Registration Number</label>
   <input type="text" class="form-control" id="exampleInputName" placeholder="Registration Number" name="officergnumber" required="required">
</div>
<div class="form-group">
   <label for="exampleInputName1">Registration Year</label>
   <input type="date" class="form-control" id="exampleInputName" placeholder="Community Hall / Hospice(Registration Year)" name="officergyear" required="required">
</div>
<div class="form-group">
   <label>Office Description</label>
   <textarea class="form-control" name="officedesc" id="officedesc" required="required"></textarea>
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
   <input type="text" class="form-control" id="exampleInputName1" placeholder="Landmark" name="officelandmark" required="required">
</div>
<div class="form-group ">
   <label>Mobile Number</label>
   <input type="number"name="officmobile[]" class="form-control"  placeholder="Enter Mobile Number" required/>
</div>
<fieldset class="OMOB">
   <div class="repeatable "></div>
   <div class="form-group col-lg-12">
      <input type="button" value="+" class="btn btn-primary add ">
   </div>
</fieldset>
<div class="form-group ">
   <label>Landline Number</label>
   <input type="number"name="officelandline[]" class="form-control"  placeholder="Enter Landline Number" required/>
</div>
<fieldset class="OLAD">
   <div class="repeatable "></div>
   <div class="form-group col-lg-12">
      <input type="button" value="+" class="btn btn-primary add ">
   </div>
</fieldset>
<div class="form-group ">
   <label>Email</label>
   <input type="email"name="officehemail[]" class="form-control"  placeholder="Enter Email Id" required/>
</div>
<fieldset class="OEMA">
   <div class="repeatable "></div>
   <div class="form-group col-lg-12">
      <input type="button" value="+" class="btn btn-primary add ">
   </div>
</fieldset>
<div class="form-group">
   <label> Facebook Page Link: <span>*</span></label>
   <input type="text"  name="officefacebook" placeholder="Facebook Page Link"  class="form-control" required/ >
</div>
<div class="form-group">
   <label> Instagram Page Link: <span>*</span></label>
   <input type="text"  name="officeinstagram" placeholder="Instagram Page Link"  class="form-control" required/ >
</div>
<div class="form-group">
   <label> Feature Image: <span>*</span></label>
 
    <input type="file"  id="officeimage" class="form-control" name="officeimage" accept=".jpg, .jpeg, .png">
    
</div>
<!-- <div class="form-group">
   <label> New Paper Thumbnail Image: <span>*</span></label>
 
    <input type="file"  id="thumbnailimage" class="form-control" name="thumbnailimage" accept=".jpg, .jpeg, .png">
    
</div>
<div class="form-group">
   <label> Monthly Pdf upload: <span>*</span></label>
 
    <input type="file"  id="paperpdf" class="form-control" name="paperpdf" accept=".pdf">
    
</div> -->
                           
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
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>
    <script>



   $.validator.addMethod('filesize', function (value, element,param) {
   
  var size=element.files[0].size;
 
  size=size/1024;
  size=Math.round(size);
  return this.optional(element) || size <=param ;
  
}, 'File size must be less than {3mb}');

jQuery(function ($) {
    "use strict";
    $('#nps').validate({
        rules: {
          
            paperpdf: {
                required: true,
                extension: "pdf",
                filesize: 3000
            }
        },
    });
});
$('#newspaerform').submit(function(e){
            e.preventDefault(); 
            for (officedesc in CKEDITOR.instances) {
              CKEDITOR.instances[officedesc].updateElement();
            }

            $.ajax({
             url:'<?php echo base_url();?>Newspaper/addNewspaperoffice',
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
                    $("#newspaerform").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully ");
                     
                    $("#newspaerform").trigger("reset");
                    setTimeout(function () {
                    location.reload();
                }, 3000);
                   
                }
                  
                  
                 
                
      },

         });
               
                 
    }); 
</script>