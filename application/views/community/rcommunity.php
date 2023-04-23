

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
  
  <h4 class="card-title mt-2">Sign up</h4>
</header>
<div class="card-body">
<form id="rgistercom" method="POST">
  <div class="form-row">
 <!-- form-row end.// -->
   <div class="form-group col-md-12">
      <label>Role</label>
<select class="form-control" name="role" id="role">
  <option value="2">Hospice</option>
   <option value="3">StateCommunity</option>
    <option value="4">NationalCommunity</option>
      <option value="5">journalist New Paper</option>
      <option value="6">journalist New Channel</option>
      <option value="7">Social Groups</option>
</select>
   
   
  </div> 
  <div class="form-group col-md-12">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="" name="cemail" id="cemail">
   
  </div> 

  <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
  </div>                                       
</form>
</div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<script type="text/javascript">
   $('#rgistercom').submit(function(e){
            e.preventDefault(); 
               var cemail=$("#cemail").val();
               var role=$("#role").val();
               
            $.ajax({
             url:'<?php echo base_url();?>Community/inserrtcommunity',
             type:"POST",
            dataType: "json",
             data:{
                       cemail:cemail,
                        role:role
             },
              success: function(data){
                 console.log(data)
                 if(data['error'] == 0){
                  
                    toastr.error(data['message'], "User alredy ragister");
                    $("#rgistercom").trigger("reset");
                }
               
               else if(data['success'] == 1){
                  
                    toastr.success(data['message'], "Successfully Insart");
                    $("#rgistercom").trigger("reset");
                }
                  
                    
                 
      },
         });
               
                 
    }); 
   
</script>