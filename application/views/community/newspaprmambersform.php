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

                  <form enctype="multipart/form-data"  method="POST" class="forms-sample" id="addmebers" >
               
                        <input type="number" name="noficid" value="<?php echo $natio ['id'] ?>">
                       
                            <div><h2 class="text-center"></h2></div>
                            <div>
                   
                                <div class="form-group">
                                     <label>Post Name</label>
                                    <select class="form-control" name="nmberpost" required="required">
                                        <option selected="" disabled="">Select post / position</option>
                                         <option value="Manager">Manager</option>
                                         <option value="Chief-Editor">Chief-Editor</option>
                                         <option value="Editor">Editor</option>
                                         <option value="Managing-Editor">Managing-Editor</option>
                                         <option value="Representaive">Representaive</option>
                                         <option value="Chief-Reporter">Chief-Reporter</option>
                                         <option value="Reporter">Reporter</option>
                                         <option value="Cameraman">Cameraman</option>
                                         <option value="Communicator">Communicator</option>
                                         <option value="Members">Members</option>
                                       </select>
                                </div>
                                <div class="form-group">
                                       <label>Name</label>
            <input type="text" name="nmbername" class="form-control" required="required" list="mabers">
                                      
                                        <datalist id="mabers">
                                        <option value="Mr.">
                                        <option value="Mrs.">
                                     
                                        </datalist>
                                    </div>
                                    <div class="form-group">
                                       <label>Board Category</label>
                                   <select name="nmbergender" class="form-control" required="required">
                                    <option value="male">Men's Board</option>
                                    <option value="female">Women's Board</option>
                                    <option value="youth">Youth Board</option>
                                  </select>
                                </div>
                                   <div class="form-group">
                                       <label>Contact No.</label>
                               <input type="number" name="nmbrmobile" class="form-control" required="required">
                                </div>
                                     <div class="form-group">
                                       <label>Email-id</label>
                               <input type="email" name="nmbremail" class="form-control" required="required">
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
                                        <div class="form-group">
                                       <label>Profile photo</label>
                               <input type="file" name="nmberimage" class="form-control" required="required">
                                </div>
                                       <div class="form-group">
                                       <label>Facebook Id Link:</label>
                               <input type="text" name="nmberfb" class="form-control" required="required">
                                </div>
                                      <div class="form-group">
                                       <label>Instagram Id Link:</label>
                               <input type="text" name="nmbrinsta" class="form-control" required="required">
                                </div>
                                    <div class="form-group">
                                       <label>Whatsapp Number:</label>
                               <input type="number" name="nmbrwhatsapp" class="form-control" required="required">
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
        
      </div>
      <!-- main-panel ends -->
        <script src="<?php echo base_url('assets/cojs/drop.js')?>"></script>
      <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
      <script type="text/javascript">
           $('#addmebers').submit(function(e){
            e.preventDefault(); 
            

            $.ajax({
             url:'<?php echo base_url();?>Newspaper/addnewspapermembers',
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
                    $("#addmebers").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully ");
                     
                    $("#addmebers").trigger("reset");
                   
                }
                  
                  
                    
           
                
      },

         });
               
                 
    }); 


          
      </script>
     