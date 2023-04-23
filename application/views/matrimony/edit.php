<div class="container bootstrap snippets bootdeys">
<div class="row">
  <div class="col-md-12">
    <form class="forms-sample" id="epinu" enctype="multipart/form-data"  method="POST">
        <div class="card" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
          <div class="card-body ">
              <div class="text-center">
          <img src="<?php $imgs = $data['proimage']; 
                    if ($imgs) {
echo base_url().''.$data['proimage'];
} else {
echo base_url().'uploads/origin/def-img.png';
}
    ?>" width="100" > 
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group  ">
    <label for="my-input" class="text-right">Frist Name</label>
    <input id="my-input" class="form-control" type="text" name="fristname" value="<?php echo $data['Fristname']; ?>">
    <input  class="form-control" type="text" name="edid" value="<?php echo $data['id']; ?>">
</div>
</div>
<div class="col-md-6">
    <div class="form-group  ">
        <label for="my-input" class="text-right">Last Name</label>
        <input id="my-input" class="form-control" type="text" name="lastname" value="<?php echo $data['Lastname']; ?>">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group  ">
        <label for="my-input" class="text-right">Email ID</label>
        <input id="my-input" class="form-control" type="text" name="emaile" value="<?php echo $data['Email']; ?>">
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group  ">
            <label for="my-input" class="text-right">Mobile number</label>
            <input id="my-input" class="form-control" type="text" name="mobile" value="<?php echo $data['Mobilenumber']; ?>">
        </div>
        </div>
    </div>
    <div class="form-group  ">
        <label for="my-input" class="text-right">PRofile image</label>
        <input id="my-input" class="form-control" type="file" name="nimage" accept="image/png, image/gif,image/jpeg,image/jpg">
        <input id="my-input" class="form-control" type="hidden" name="oldimage" value="<?php echo $data['proimage']; ?>" >
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

  $('#epinu').submit(function(e){
    e.preventDefault(); 
     $.ajax({
             url:'<?php echo base_url();?>Matrimony/edituserprofile/',
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
                  
                    toastr.error(data['message'], "User not ragister");
                    $("#epinu").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], " Successfully");
                    $("#epinu").trigger("reset");
                    setTimeout(function(){
                     location.reload();
                   }, 3000); 
                }
                
                document.getElementById("epinu").reset();
     
                   
                  
         },
         });
               
                 
    });
    </script>