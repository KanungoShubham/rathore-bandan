<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-md-12">
    <form class="forms-sample" id="binfo" enctype="multipart/form-data"  method="POST">
        <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
          <div class="card-body ">


<div class="col-md-12">
<div class="form-group  ">
    <label for="my-input" class="text-right"> Name</label>
    <input id="condolencename" class="form-control" type="text" name="condolencename" required />
</div>
</div>



    <div class="col-md-12">
    <div class="form-group ">
        <label for="my-input" class="text-right">condolence Massge</label>
        <textarea class="form-control" name="business" id="business" required ></textarea>
    </div>
    </div>
    <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Date of Death</label>
            <input id="dob" class="form-control" type="date" name="dob" required />
        </div>
        </div>
      
    <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Whatsapp Number</label>
            <input id="mobile" class="form-control" type="text" name="mobile" required >
        </div>
        </div>
    
   
    <div class="form-group  ">
        <label for="my-input" class="text-right">Image</label>
        <input id="dimage" class="form-control" type="file" name="dimage"  accept="image/png, image/gif,image/jpeg,image/jpg" required >
       
    </div>
    <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary submit">
          </div>
        </div>
     
      </div>
    </form>
  </div>
</div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" >
    // add eduction//

  $('#binfo').submit(function(e){
    e.preventDefault(); 
    for (business in CKEDITOR.instances)
    CKEDITOR.instances[business].updateElement();
     $.ajax({
             url:'<?php echo base_url();?>Matrimony/addcondolence/',
             type:"POST",
            dataType: "json",
             data:new FormData(this),
             processData:false,
             contentType:false,
             cache:false,
             async:false,
              success: function(data){
                 console.log(data)
                 if(data['warning'] == 2){
                  
                    toastr.warning(data['message'], "You Bussines already registered ");
                 
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], " Successfully");
                    $("#binfo").trigger("reset");
                    setTimeout(function () {
                    location.reload();
                }, 3000);
                  
                }
                
                
     
                   
                  
         },
         });
               
                 
    });
    </script>