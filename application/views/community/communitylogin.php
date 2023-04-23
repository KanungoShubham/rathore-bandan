<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
  
  <h4 class="card-title mt-2">login</h4>
</header>
<div class="card-body">
    <form action="<?php echo base_url()?>chlogin"method="POST"> 
  <div class="form-row">
 <!-- form-row end.// -->
 
  <div class="form-group col-md-12">
    <label>Email address</label>
    <input type="email" class="form-control" placeholder="" name="chemail" id="chemail">
   
  </div> 
    <div class="form-group col-md-12">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="" name="chpassword" id="chpassword">
   
  </div> 

  <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
    </div> <!-- form-group// -->      
  </div>                                       
</form>
</div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

