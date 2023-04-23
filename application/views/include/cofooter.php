</div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url('assets/cojs/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js')?>"></script>
  <script  src="<?php echo base_url('assets/ckeditor/ckeditor.js')?>"></script> 
 <!--  <script src="https://cdn.ckeditor.com/4.17.2/full/ckeditor.js"></script> -->
  <script  src="<?php echo base_url('assets/ckeditor/adapters/jquery.js')?>"></script> 
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/dataTables.select.min.js')?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets/cojs/jquery.repeatable.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/off-canvas.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/hoverable-collapse.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/template.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/settings.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/todolist.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/toastr.min.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/jquery.paginate.js')?>"></script>
   
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url('assets/cojs/dashboard.js')?>"></script>
  <script src="<?php echo base_url('assets/cojs/Chart.roundedBarCharts.js')?>"></script>
  <!-- <script> CKEDITOR.replace('hospice_desc');</script>
  <script> CKEDITOR.replace('facilities');</script>
  <script> CKEDITOR.replace('note');</script>
  <script> CKEDITOR.replace( 'uphospice_desc' );</script>
  <script> CKEDITOR.replace( 'upfacilities' );</script>
  <script> CKEDITOR.replace( 'upnote' );</script> -->
  <script> 
    CKEDITOR.replace('hospice_desc');
    CKEDITOR.replace('facilities');
    CKEDITOR.replace('note');
    CKEDITOR.replace( 'uphospice_desc' );
    CKEDITOR.replace( 'upfacilities' );
    CKEDITOR.replace( 'upnote' );
    CKEDITOR.replace( 'officedesc' );
    CKEDITOR.replace( 'upofficedesc' );
    CKEDITOR.replace( 'business' );
    CKEDITOR.replace( 'description' );
</script>
  <script type="text/template" id="MOB">
<div class="field-group ">
           
                    <div class="form-group ">
                      <label>Mobile Number</label>
                      <input type="text"name="mobile[]" class="form-control"  placeholder="Enter Mobile Number">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
    </script>
        <script>
              $(function() {
                $(".MOB .repeatable").repeatable({
                    addTrigger: ".MOB .add",
                    deleteTrigger: ".MOB .delete",
                    template: "#MOB",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
          <script type="text/template" id="LAD">
<div class="field-group ">
                      <div class="form-group ">
                      <label>Landline Number</label>
                      <input type="text"name="landline[]" class="form-control"  placeholder="Enter Landline Number">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
         </script>
        <script>
              $(function() {
                $(".LAD .repeatable").repeatable({
                    addTrigger: ".LAD .add",
                    deleteTrigger: ".LAD .delete",
                    template: "#LAD",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
         <script type="text/template" id="EMA">
<div class="field-group ">
                    <div class="form-group ">
                      <label>Email</label>
                      <input type="email"name="hemail[]" class="form-control"  placeholder="Enter Email Id">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
         </script>
        <script>
              $(function() {
                $(".EMA .repeatable").repeatable({
                    addTrigger: ".EMA .add",
                    deleteTrigger: ".EMA .delete",
                    template: "#EMA",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
          <script type="text/template" id="MOBU">
           <div class="field-group ">
           
                    <div class="form-group ">
                      <label>Mobile Number</label>
                      <input type="text"name="upmobile[]" class="form-control"  placeholder="Enter Mobile Number">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
    </script>
        <script>
              $(function() {
                $(".MOBU .repeatable").repeatable({
                    addTrigger: ".MOBU .add",
                    deleteTrigger: ".MOBU .delete",
                    template: "#MOBU",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
         <script type="text/template" id="LADU">
<div class="field-group ">
                      <div class="form-group ">
                      <label>Landline Number</label>
                      <input type="text"name="uplandline[]" class="form-control"  placeholder="Enter Landline Number">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
         </script>
        <script>
              $(function() {
                $(".LADU .repeatable").repeatable({
                    addTrigger: ".LADU .add",
                    deleteTrigger: ".LADU .delete",
                    template: "#LADU",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
                 <script type="text/template" id="EMAU">
<div class="field-group ">
                    <div class="form-group ">
                      <label>Email</label>
                      <input type="email"name="uphemail[]" class="form-control"  placeholder="Enter Email Id">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
         </script>
        <script>
              $(function() {
                $(".EMAU .repeatable").repeatable({
                    addTrigger: ".EMAU .add",
                    deleteTrigger: ".EMAU .delete",
                    template: "#EMAU",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
           <script type="text/template" id="OMOB">
           <div class="field-group ">
           
                    <div class="form-group ">
                      <label>Mobile Number</label>
                      <input type="text"name="officmobile[]" class="form-control"  placeholder="Enter Mobile Number">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
    </script>
        <script>
              $(function() {
                $(".OMOB .repeatable").repeatable({
                    addTrigger: ".OMOB .add",
                    deleteTrigger: ".OMOB .delete",
                    template: "#OMOB",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
          <script type="text/template" id="OLAD">
<div class="field-group ">
                      <div class="form-group ">
                      <label>Landline Number</label>
                      <input type="text"name="officelandline[]" class="form-control"  placeholder="Enter Landline Number">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
         </script>
        <script>
              $(function() {
                $(".OLAD .repeatable").repeatable({
                    addTrigger: ".OLAD .add",
                    deleteTrigger: ".OLAD .delete",
                    template: "#OLAD",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
                 <script type="text/template" id="OEMA">
<div class="field-group ">
                    <div class="form-group ">
                      <label>Email</label>
                      <input type="email"name="officehemail[]" class="form-control"  placeholder="Enter Email Id">
                    </div>
                     <div class="px-3">
                    <input type="button" class="btn btn-danger delete" value="x" />
                    <div>
               </div>
         </script>
        <script>
              $(function() {
                $(".OEMA .repeatable").repeatable({
                    addTrigger: ".OEMA .add",
                    deleteTrigger: ".OEMA .delete",
                    template: "#OEMA",
                    startWith: 1,
                    max:4
                });
            });
              
        </script>
                
  <!-- End custom js for this page-->
</body>

</html>

