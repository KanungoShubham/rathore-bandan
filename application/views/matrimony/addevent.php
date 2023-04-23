<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-md-12">
    <form class="forms-sample" id="binfo" enctype="multipart/form-data"  method="POST">
        <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
          <div class="card-body ">


<div class="col-md-12">
<div class="form-group  ">
    <label for="my-input" class="text-right">Event name</label>
    <input id="eventname" class="form-control" type="text" name="eventname" >
</div>
</div>
<div class="col-md-12">
    <div class="form-group  ">
        <label for="my-input" class="text-right">orgniger Name</label>
        <input id="parsonanme" class="form-control" type="text" name="parsonanme" >
    </div>
    </div>


    <div class="col-md-12">
    <div class="form-group ">
        <label for="my-input" class="text-right">event Description</label>
        <textarea class="form-control" name="business" id="business" required="required"></textarea>
    </div>
    </div>
    <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Event loction</label>
            <input id="eventloction" class="form-control" type="text" name="eventloction" >
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Event Date</label>
            <input id="eventdatet" class="form-control" type="date" name="eventdate" >
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Event start time</label>
            <input id="eventdatet" class="form-control" type="time" name="starttime" >
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Event end time</label>
            <input id="eventdatet" class="form-control" type="time" name="endtime" >
        </div>
        </div>
      
    <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Mobile number</label>
            <input id="my-input" class="form-control" type="number" name="mobile" >
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Email id</label>
            <input id="my-input" class="form-control" type="email" name="emailid" >
        </div>
        </div>
   
    <div class="form-group  ">
        <label for="my-input" class="text-right"> Your event Baner Image</label>
        <input id="my-input" class="form-control" type="file" name="eimage" >
       
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
             url:'<?php echo base_url();?>Matrimony/eventadd/',
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