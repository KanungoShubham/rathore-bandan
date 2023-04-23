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
               
                        <input type="number" name="oficid" value="<?php echo $ofcm ['id'] ?>">
                       
                            <div><h2 class="text-center"></h2></div>
                            <div>
                                 <div class="form-group">
                                    <label>select state</label>
                                    <select name="state" id="stateSel" size="1" class="form-control">
                                            
                                        <option value="Andra Pradesh">Andra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Aasam">Aasam</option><option value="Bihar">Bihar</option><option value="Chandigrah">Chandigrah</option><option value="Chhattisgarh">Chhattisgarh</option><option value=" Dadar &amp; Nagar Haveli"> Dadar &amp; Nagar Haveli</option><option value=" Daman &amp; Diu"> Daman &amp; Diu</option><option value=" Delhi "> Delhi </option><option value=" Goa "> Goa </option><option value=" Gujrat  "> Gujrat  </option><option value="Haryana">Haryana</option><option value=" Himachal Pradesh"> Himachal Pradesh</option><option value=" JAMMU AND KASHMIR"> JAMMU AND KASHMIR</option><option value=" Jharkhand "> Jharkhand </option><option value=" Karnataka  "> Karnataka  </option><option value=" Kerala"> Kerala</option><option value=" Lakshyadeep "> Lakshyadeep </option><option value=" Madhya Pradesh"> Madhya Pradesh</option><option value=" Maharastra "> Maharastra </option><option value=" Manipur  "> Manipur  </option><option value=" Meghalaya "> Meghalaya </option><option value=" Mizoram"> Mizoram</option><option value=" Nagaland "> Nagaland </option><option value=" ODISHA"> ODISHA</option><option value=" PUDUCHERRY (UT)J-R"> PUDUCHERRY (UT)J-R</option><option value=" PUNJAB "> PUNJAB </option><option value=" RAJASTHANA  "> RAJASTHANA  </option><option value=" SIKKIM"> SIKKIM</option><option value="TAMILNADU ">TAMILNADU </option><option value="TELANGANA ">TELANGANA </option><option value="TRIPURA  ">TRIPURA  </option><option value="UTTARAKHAND">UTTARAKHAND</option><option value="UTTAR PRADESH">UTTAR PRADESH</option><option value="WEST BENGAL">WEST BENGAL</option></select>
                                 </div>
                                <div class="form-group">
                                     <label>Post Name</label>
                                    <select class="form-control" name="mberpost" required="required">
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
                 <input type="text" name="mbername" class="form-control" required="required" list="mabers" >
                                      
                                        <datalist id="mabers">
                                        <option value="Mr.">
                                        <option value="Mrs.">
                                     
                                        </datalist>
                                    </div>
                                    <div class="form-group">
                                       <label>Board Category</label>
                                   <select name="mbergender" class="form-control" required="required">
                                    <option value="male">Men's Board</option>
                                    <option value="female">Women's Board</option>
                                    <option value="youth">Youth Board</option>
                                  </select>
                                </div>
                                   <div class="form-group">
                                       <label>Contact No.</label>
                               <input type="number" name="mbrmobile" class="form-control" required="required">
                                </div>
                                     <div class="form-group">
                                       <label>Email-id</label>
                               <input type="email" name="mbremail" class="form-control" required="required">
                                </div>
                                        <div class="form-group">
                                       <label>Profile photo</label>
                               <input type="file" name="mberimage" class="form-control" required="required">
                                </div>
                                       <div class="form-group">
                                       <label>Facebook Id Link:</label>
                               <input type="text" name="mberfb" class="form-control" required="required">
                                </div>
                                      <div class="form-group">
                                       <label>Instagram Id Link:</label>
                               <input type="text" name="mbrinsta" class="form-control" required="required">
                                </div>
                                    <div class="form-group">
                                       <label>Whatsapp Number:</label>
                               <input type="number" name="mbrwhatsapp" class="form-control" required="required">
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
     
      <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
      <script type="text/javascript">
           $('#addmebers').submit(function(e){
            e.preventDefault(); 
            

            $.ajax({
             url:'<?php echo base_url();?>State/statemabers',
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
                  
                  
                    
                  document.getElementById("addmebers").reset();
                
      },

         });
               
                 
    }); 


          
      </script>
     