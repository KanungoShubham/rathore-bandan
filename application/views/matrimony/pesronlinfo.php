<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="top-breadcrumb"></div>
      </div>
   </div>
   <div class="card social-prof">
      <div class="card-body">
         <div>
            <div class="baneerimg">
               <img src="<?php $imgs = $data['coveimage']; 
                  if ($imgs) {
                  echo base_url().''.$data['coveimage'];
                  } else {
                  echo base_url().'assets/usercover/rathore.png';
                  }
                  ?>" alt="" class="w-100 modal-target" />
            </div>
            <div class="banericon">
               <a href="#" class="coverpimage btn btn-primary w-100" data-id="<?php echo $data["id"] ?>"><i class="fa fa-camera" aria-hidden="true" ></i>&nbsp;Edit cover</a> 
            </div>
         </div>
         <div class="wrapper">
            <img src="<?php $imgs = $data['userprofileimage']; 
               if ($imgs) {
               
                   
               echo base_url().''.$data['userprofileimage'];
               } elseif($data["gender"]== "Male") {
                echo base_url().'assets/images/man.png';
                }elseif($data["gender"]== "Female") {
                    echo base_url().'assets/images/woman.png';
                    }
               ?>"   alt="" class="user-profile modal-target" />
            <div class="baneericon">
               <a href="#" class="eprogileimage" data-id="<?php echo $data["id"] ?>"><i class="fa fa-camera fa-2x" aria-hidden="true" style="color:#4d0000;"></i></a> 
            </div>
            <h3 class="pt-4"><?php echo $data['firstName']; ?><?php echo $data['lastName']; ?></h3>
            <p>RB - <?php echo $data['id']; ?></p>
            <p>Profile created by- <?php echo $data['profilecreated']; ?></p>
            <p>AGE-  <?php echo date_diff(date_create($data['dob']), date_create('today'))->y.'yrs';?></p>
         </div>
      </div>
   </div>
   <div class="col-lg-12">
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="card">
               <div class="card-body info-card social-about">
                  <div class="row">
                     <div class="col-12">
                        <div class="social-info">
                           <i class="fas fas fa-mobile mr-2"></i>
                           <span><?php 
                              $famliycont =$fditslis; 
                                              if ($famliycont) {
                              echo $fditslis["fcontactnumber"]  ;
                              } else {
                              echo 'please fill out the form first';
                              }  ?></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="social-info">
                           <i class="fab fa-whatsapp"></i>
                           <span><?php 
                              $famliycont =$fditslis; 
                                              if ($famliycont) {
                              echo $fditslis["whatsapp_number"]  ;
                              } else {
                              echo 'please fill out the form first';
                              }  ?></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="social-info">
                           <i class="fas fas fa-envelope mr-2"></i>
                           <span><?php 
                              $famliycont =$fditslis; 
                                              if ($famliycont) {
                              echo $fditslis["emailid"]  ;
                              } else {
                              echo 'please fill out the form first';
                              }  ?></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="social-info">
                           <i class="fas fa-map-marker-alt mr-2"></i>
                           <span><?php 
                              $famliycont =$fditslis; 
                                              if ($famliycont) {
                              echo $fditslis["address"]  ;
                              } else {
                              echo 'please fill out the form first';
                              }  ?></span>
                        </div>
                     </div>
                  </div>
                  <div>
                    
                    <?php  $famliycont =$fditslis; 
                    if ($famliycont) {
                    if($fditslis["hide"] == 1) { ?>
                     <form id="uncontacthide" method="POST" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-md-8 p-2">
                              <div class="form-check">
                                 <input type="hidden" name="uncontactid"  id="uncontactid" value="<?php echo $data['id'];?>">
                                 <input type="checkbox" class="form-check-input " checked="checked" id="unhide" name="unhide">
                                 <label class="form-check-label my-1" for="exampleCheck1">Unhide Contact</label>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <input type="submit" class="btn btn-danger bt-sm p-2" name="submit" value="Unhide">
                           </div>
                        </div>
                     </form>
                     <?php } else { ?>
                        <form id="contacthide" method="POST" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-8">
                              <div class="form-check">
                                 <input type="hidden" name="contactid"  id="contactid" value="<?php echo $data['id'];?>">
                                 <input type="checkbox" class="form-check-input" id="hide" name="hide">
                                 <label class="form-check-label my-1" for="exampleCheck1">Hide Contact</label>
                              </div>
                           </div>
                           <div class="col-4">
                              <input type="submit" class="btn btn-danger" name="submit" value="Hide">
                           </div>
                        </div>
                     </form>
                        <?php } } else{?>
                            <?php echo 'please fill out the form first';?>
                            <?php }?>
                  </div>
               </div>
            </div>
            <?php if($diser!=NULL){?>
            <h3>Pre-Match</h3>
            <?php 
               if($data['gender']=='Male'){
                   
                   
                   ?>
            <div id="growm" class="carousel slide" data-ride="false">
               <div class="carousel-inner">
                  <?php 
                     $count = 0;  
                     foreach ($premathc as $fe) {
                     
                         if($fe->manglik == implode(', ', json_decode(($diser['desiredmangal']))) || implode(', ', json_decode(($fe->diet)))== implode(', ', json_decode(($diser['desireddiet']))) ) {?>
                  <div class="carousel-item <?php 
                     if($count==0){
                       echo "active";  
                     }
                     else{
                         echo " ";
                     }
                     ?>">
                     <div class="card">
                        <div class="row  d-flex">
                           <div class="col-md-4 ">
                              <img src="<?php $imgs = $fe->userprofileimage; 
                                 if ($imgs) {
                                 echo base_url().''.$fe->userprofileimage;
                                 } else {
                                 echo base_url().'assets/usercover/rathore.png';
                                 }
                                 ?>"   alt="" class="user-profile  my-3"  style="width: 88px; height: 88px;"/>
                           </div>
                           <div class="col-md-8">
                              <p class=" my-3"><?php echo $fe->firstName;?> <?php echo $fe->lastName;?></p>
                              <a href="<?php echo base_url()?>metroinfo/<?php echo $fe->id ?>" class="btn inbt mb-2 " target="_blank">view More </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php  $count++; }else{?>
                  hii
                  <?php }} ?>
               </div>
               <a class="carousel-control-prev " href="#growm" role="button" data-slide="prev" style="margin-left: -32px;">
               <span><i class="fa fa-angle-left" aria-hidden="true" style="color:black;font-size: 22px;"></i></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next " href="#growm" role="button" data-slide="next" style="margin-right: -32px;">
               <span><i class="fa fa-angle-right" aria-hidden="true" style="color:black;font-size: 22px;"></i></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <?php  } else if($data['gender']=='Female') { ?>
            <div id="bried" class="carousel slide" data-ride="false">
               <div class="carousel-inner">
                  <?php $count = 0;  foreach ($fmatch as $me) {  
                     if($me->manglik== implode(', ', json_decode(($diser['desiredmangal']))) || implode(', ', json_decode(($me->diet)))== implode(', ', json_decode(($diser['desireddiet'])))) {?>
                  <div class="carousel-item <?php 
                     if($count==0){
                       echo "active";  
                     }
                     else{
                         echo " ";
                     }
                     ?>">
                     <div class="card">
                        <div class="row d-flex">
                           <div class="col-md-4 ">
                              <img src="<?php $imgs = $me->userprofileimage; 
                                 if ($imgs) {
                                 echo base_url().''.$me->userprofileimage;
                                 } else {
                                 echo base_url().'assets/usercover/rathore.png';
                                 }
                                 ?>"   alt="" class="user-profile  my-3"  style="width: 88px; height: 88px;"/>
                           </div>
                           <div class="col-md-8">
                              <p class=" my-3"><?php echo $me->firstName;?> <?php echo $me->lastName;?></p>
                              <a href="<?php echo base_url()?>metroinfo/<?php echo $me->id ?>" class="btn inbt mb-2 " target="_blank">view More </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php  $count++; } } ?>
               </div>
               <a class="carousel-control-prev " href="#bried" role="button" data-slide="prev" style="margin-left: -32px;">
               <span><i class="fa fa-angle-left" aria-hidden="true" style="color:black;font-size: 22px;"></i></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next " href="#bried" role="button" data-slide="next" style="margin-right: -32px;">
               <span><i class="fa fa-angle-right" aria-hidden="true" style="color:black;font-size: 22px;"></i></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <?php } ?>
            <?php }else if($diser==NULL){?>
            <h5 class="ml-5"> No Mtach</h5>
            <?php }?>
         </div>
         <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="card info-card">
               <div class="card-body">
                  <div class="tabbable-panel">
                     <div class="tabbable-line">
                        <ul class="nav nav-tabs">
                           <li class="active">
                              <a href="#tab_default_1" data-toggle="tab"> About</a>
                           </li>
                           <li>
                              <a href="#tab_default_2" data-toggle="tab"> Education/Profession </a>
                           </li>
                           <li>
                              <a href="#tab_default_3" data-toggle="tab"> Family Details </a>
                           </li>
                           <li>
                              <a href="#tab_default_4" data-toggle="tab"> Desired Partner </a>
                           </li>
                           <li>
                              <a href="#tab_default_5" data-toggle="tab"> Photos Gallery </a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane active" id="tab_default_1">
                              <div class="col-md-12">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="float-right">
                                          <button class="btn inbt" data-toggle="modal" data-target="#editAbout">Edit About information</button>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <p class="text-dark" style="font-size: 1.4rm;">About Me</p>
                                    </div>
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>Religin</td>
                                             <td>:</td>
                                             <td>Hindu</td>
                                          </tr>
                                          <tr>
                                             <td>Date of Birth</td>
                                             <td>:</td>
                                             <td><?php echo date("d/m/Y", strtotime($data['dob']));?></td>
                                          </tr>
                                          <tr>
                                             <td>Age</td>
                                             <td>:</td>
                                             <td><?php echo date_diff(date_create($data['dob']), date_create('today'))->y.'yrs';?></td>
                                          </tr>
                                          <tr>
                                             <td>Gender</td>
                                             <td>:</td>
                                             <td><?php echo $data['gender']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Blood group</td>
                                             <td>:</td>
                                             <td><?php echo $data['bloodgroup']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Marital Status</td>
                                             <td>:</td>
                                             <td><?php echo $data['marital']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Height</td>
                                             <td>:</td>
                                             <td><?php echo $data['height']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Weight</td>
                                             <td>:</td>
                                             <td><?php echo $data['weight']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>City/Village</td>
                                             <td>:</td>
                                             <td><?php echo $data['district']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Address</td>
                                             <td>:</td>
                                             <td><?php echo $data['address']; ?>,<?php echo $data['district']; ?>, <?php echo $data['city']; ?>, <?php echo $data['state']; ?>,<?php echo $data['country']; ?>(<?php echo $data['pincode']; ?>)</td>
                                          </tr>
                                          <tr>
                                             <td>Birth time</td>
                                             <td>:</td>
                                             <td><?php echo $data['birthtime']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Birth place</td>
                                             <td>:</td>
                                             <td><?php echo $data['birthplace']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Gotra</td>
                                             <td>:</td>
                                             <td><?php echo $data['gotra']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Mama gotra</td>
                                             <td>:</td>
                                             <td><?php echo $data['mamagotra']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Manglik</td>
                                             <td>:</td>
                                             <td><?php echo $data['manglik']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Shani</td>
                                             <td>:</td>
                                             <td><?php echo $data['shani']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Moon sign</td>
                                             <td>:</td>
                                             <td><?php echo $data['moonsign']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Skin colour</td>
                                             <td>:</td>
                                             <td><?php echo $data['skin']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Body type</td>
                                             <td>:</td>
                                             <td><?php echo $data['body']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Smoking/Drinking  habit</td>
                                             <td>:</td>
                                             <td><?php echo $data['smoke']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Diet</td>
                                             <td>:</td>
                                             <td><?php echo (!empty(json_decode($data['diet']))) ? implode(', ', json_decode(($data['diet']))) : ''; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Hobby</td>
                                             <td>:</td>
                                             <td><?php echo (!empty(json_decode($data['hobby']))) ?str_replace('_', ' ',implode(', ', json_decode($data['hobby']))) : ''; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Other Hobby</td>
                                             <td>:</td>
                                             <td><?php echo $data['otherhobby']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Interest</td>
                                             <td>:</td>
                                             <td><?php echo (!empty(json_decode($data['interest']))) ?str_replace('_', ' ',implode(', ', json_decode($data['interest']))) : ''; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Other Interest</td>
                                             <td>:</td>
                                             <td><?php echo $data['otherinterest']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Mother tongue</td>
                                             <td>:</td>
                                             <td><?php echo $data['mothertongue']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Languages known</td>
                                             <td>:</td>
                                             <td><?php echo $data['languages']; ?></td>
                                          </tr>
                                          <tr>
                                             <td>Special case</td>
                                             <td>:</td>
                                             <td>None</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_default_2">
                              <div class="col-md-12">
                                 <div class="table-responsive">
                                    <div class="col-sm-12">
                                       <div class="float-right">
                                          <button class="btn  inbt" data-toggle="modal" data-target="#EPu">Add/Edit Education </button>
                                       </div>
                                    </div>
                                    <br />
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>Education level</td>
                                             <td>:</td>
                                             <td><?php $imgs =$st; 
                                                if ($imgs) {
                                                echo $st['education'];
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Educational Degree</td>
                                             <td>:</td>
                                             <td><?php $imgs = $st; 
                                                if ($imgs) {
                                                echo $st['otheredu'];
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Other educations</td>
                                             <td>:</td>
                                             <td><?php $imgs = $st; 
                                                if ($imgs) {
                                                    echo (!empty(json_decode($st['educationallevel']))) ? implode(', ', json_decode(($st['educationallevel']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Occupation</td>
                                             <td>:</td>
                                             <td><?php $imgs = $st; 
                                                if ($imgs) {
                                                     echo (!empty(json_decode($st['occupation']))) ? implode(', ', json_decode(($st['occupation']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Occupation Details</td>
                                             <td>:</td>
                                             <td><?php $imgs = $st; 
                                                if ($imgs) {
                                                echo $st['occupationdescription'];
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Income</td>
                                             <td>:</td>
                                             <td><?php $imgs = $st; 
                                                if ($imgs) {
                                                echo $st['income'];
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr></tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <?php 
                                 $bimage =$st; 
                                 if ($bimage) {
                                   if($st['userbiuseens']=='Yes'){
                                       ?>
                              <div class="col-md-12">
                                 <h2>Family Bussines</h2>
                                 <div class="card mt-4">
                                    <img  src="<?php $bimgs = $st; 
                                       if ($bimgs) {
                                       echo base_url().''.$st['biuneesimage'];
                                       } else {
                                       echo base_url().'assets/usercover/rathore.png';
                                       }
                                       ?> " class="modal-target"/>
                                 </div>
                              </div>
                              <?php } } ?>
                           </div>
                           <div class="tab-pane" id="tab_default_3">
                              <?php   $name =$fditslis; 
                                 if ($name) { ?>
                              <div class="col-md-12 ">
                                 <div class="float-right">
                                    <button class="btn inbt" data-id="<?php echo $fditslis["id"] ?>" data-toggle="modal" data-target="#updatefamliynew">Edit About information</button>
                                 </div>
                              </div>
                              <?php } else{ ?>
                              <div class="col-md-12 ">
                                 <div class="float-right">
                                    <button class="btn inbt" data-toggle="modal" data-target="#editfamliy">add About information</button>
                                 </div>
                              </div>
                              <?php } ?>
                              <br>
                              <div class="col-md-12 mt-5 my-5">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="card famliyinfocard" >
                                          <img  src="<?php $imgs = $fditslis; 
                                             if ($imgs) {
                                             echo base_url().''.$fditslis['grandfatherimage'];
                                             } else {
                                             echo base_url().'assets/images/man.png';
                                             }
                                             ?>"  class="newd modal-target"/>
                                          <div class="card-body">
                                             <center>
                                                <h4>GrandFather Name</h4>
                                                <h4>    <?php $name =$fditslis; 
                                                   if ($name) {
                                                   echo $fditslis["grandfather_name"]  ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }
                                                   ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="card famliyinfocard" >
                                          <img  src="<?php $imgs = $fditslis; 
                                             if ($imgs) {
                                             echo base_url().''.$fditslis['grandmotherimage'];
                                             } else {
                                             echo base_url().'assets/images/woman.png';
                                             }
                                             ?>"  class="newd modal-target"/>
                                          <div class="card-body">
                                             <center>
                                                <h4>GrandMother Name</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                               if ($name) {
                                                   echo $fditslis["grandmother_name"]  ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }
                                                    ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="card famliyinfocard" >
                                          <img  src="<?php $imgs = $fditslis; 
                                             if ($imgs) {
                                             echo base_url().''.$fditslis['father_image'];
                                             } else {
                                                echo base_url().'assets/images/man.png';
                                             }
                                             ?>"  class="newd modal-target"/>
                                          <div class="card-body">
                                             <center>
                                                <h4>Father Name</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                                   if ($name) {
                                                   echo $fditslis["father_name"]  ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }  ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="card famliyinfocard" >
                                          <img  src="<?php $imgs = $fditslis; 
                                             if ($imgs) {
                                             echo base_url().''.$fditslis['motherimage'];
                                             } else {
                                                echo base_url().'assets/images/woman.png';
                                             }
                                             ?>"  class="newd modal-target"/>
                                          <div class="card-body">
                                             <center>
                                                <h4>Mother Name</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                              if ($name) {
                                                   echo $fditslis["mother_name"]   ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }  ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-md-12 mt-3">
                                 <div class="card p-4" >
                                    <center>
                                       <h3>Father Occupation</h3>
                                    </center>
                                    <div class="card-body">
                                       <center>
                                          <h3><?php 
                                             $name =$fditslis; 
                                                        if ($name) {
                                             echo $fditslis["fatheroccupation"]  ;
                                             } else {
                                             echo 'please fill out the form first      ';
                                             } 
                                             ?></h3>
                                          <h4><?php
                                             $name =$fditslis; 
                                                        if ($name) {
                                             echo $fditslis["f_occupation_detail"] ;
                                             } else {
                                             echo 'please fill out the form first  ';
                                             } 
                                             
                                             ?></h4>
                                       </center>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                 <div class="card p-4" >
                                    <center>
                                       <h3>Mother Occupation</h3>
                                    </center>
                                    <div class="card-body">
                                       <center>
                                          <h3><?php 
                                             $name =$fditslis; 
                                                                 if ($name) {
                                             echo $fditslis["motheroccupation"] ;
                                             } else {
                                             echo 'please fill out the form first      ';
                                             } 
                                               ?></h3>
                                          <h4><?php $name =$fditslis; 
                                             if ($name) {
                                             echo $fditslis["m_occupation_detail"] ;
                                             } else {
                                             echo 'please fill out the form first      ';
                                             } 
                                             
                                             ?></h4>
                                       </center>
                                    </div>
                                 </div>
                              </div>
                              <?php
                                 $name =$fditslis; 
                                 if( $name){
                                 $sibling_array=json_decode($fditslis["sibling_array"]);
                                 if(!empty($sibling_array)){
                                 foreach ($sibling_array as $key => $value) {
                                 if($key=='sibling_gen'){
                                 $sibling_gen=$value;
                                 }else if($key=='sibling_status'){
                                 $sibling_status=$value;
                                 }else if($key=='sibling_name'){
                                 $sibling_name=$value;
                                 }else if($key=='sibling_marriage'){
                                 $sibling_marriage=$value;
                                 }else if($key=='sibling_ocupation'){
                                 $sibling_occu=$value;
                                 }
                                 }
                                 
                                 } 
                                 } else {
                                 echo 'please fill out the form first      ';
                                 } 
                                 ?> 
                              <div class="row">
                                 <?php                           
                                    if(!empty($sibling_gen)){
                                    
                                     for ($i=0; $i < count($sibling_gen); $i++) {
                                    
                                       ?>
                                 <div class="col-md-4">
                                    <div class="card p-4" >
                                       <div class="card-body">
                                          <center>
                                             <h6><?php echo $sibling_status[$i].'-'. $sibling_gen[$i] ;?></h6>
                                             <p style="margin-bottom: 0px;"><?php echo $sibling_name[$i].'('.$sibling_marriage[$i].')';?></p>
                                             <p><?php echo $sibling_occu[$i];?></p>
                                          </center>
                                       </div>
                                    </div>
                                 </div>
                                 <?php
                                    }
                                    
                                    }
                                    
                                    ?>
                              </div>
                              <hr>
                              <div class="col-md-12">
                                 <h2>Family details</h2>
                                 <div class="row">
                                    <div class="col-md-3 mt-5">
                                       <div class="card h-75">
                                          <div class="card-body">
                                             <center>
                                                <h4>Family Type</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                              if ($name) {
                                                   echo $fditslis["family_type"]   ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }  ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                       <div class="card h-75">
                                          <div class="card-body">
                                             <center>
                                                <h4>Family Values</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                              if ($name) {
                                                   echo $fditslis["family_values"]   ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }  ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                       <div class="card h-75">
                                          <div class="card-body">
                                             <center>
                                                <h4>Family Status</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                              if ($name) {
                                                   echo $fditslis["family_status"]   ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }  ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 mt-5">
                                       <div class="card h-75">
                                          <div class="card-body">
                                             <center>
                                                <h4>Family Income</h4>
                                                <h4><?php 
                                                   $name =$fditslis; 
                                                              if ($name) {
                                                   echo $fditslis["family_income"]   ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }  ?></h4>
                                             </center>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="col-md-12">
                                 <h2>Family photo</h2>
                                 <div class="card mt-4">
                                    <img  src="<?php $imgs = $fditslis; 
                                       if ($imgs) {
                                       echo base_url().''.$fditslis['famliyimage'];
                                       } else {
                                       echo base_url().'assets/usercover/rathore.png';
                                       }
                                       ?>" class="modal-target" />
                                 </div>
                              </div>
                              <hr>
                              <?php 
                                 $name =$fditslis; 
                                 if ($name) {
                                   if($fditslis['famliy_bussines']=='Yes'){
                                       ?>
                              <div class="col-md-12">
                                 <h2>Family Bussines</h2>
                                 <div class="card mt-4">
                                    <img  src="<?php $imgs = $fditslis; 
                                       if ($imgs) {
                                       echo base_url().''.$fditslis['family_businessimg'];
                                       } else {
                                       echo base_url().'assets/usercover/rathore.png';
                                       }
                                       ?> " class="modal-target"/>
                                 </div>
                              </div>
                              <?php } } ?>
                           </div>
                           <div class="tab-pane" id="tab_default_4">
                              <div class="col-md-12">
                                 <div class="table-responsive">
                                    <div class="col-sm-12">
                                       <div class="float-right">
                                          <button class="btn  inbt" data-toggle="modal" data-target="#editdep"> Add/Edit desired details</button>
                                       </div>
                                    </div>
                                    <br />
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <td>Age</td>
                                             <td>:</td>
                                             <td>
                                                <?php $age =$diser; 
                                                   if ($age) {
                                                   echo $diser['fromage'].'yrs'.'-'.$diser['toage'].'yrs' ;
                                                   } else {
                                                   echo 'please fill out the form first      ';
                                                   }
                                                   ?>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Height</td>
                                             <td>:</td>
                                             <td><?php $Height =$diser; 
                                                if ($Height) {
                                                echo $diser['fromheight'].'-'.$diser['toheight'] ;
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Marital status</td>
                                             <td>:</td>
                                             <td><?php $Marital =$diser; 
                                                if ($Marital) {
                                                echo $diser['desiredmarital'];
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Mother tongue</td>
                                             <td>:</td>
                                             <td><?php $Mother = $diser; 
                                                if ($Mother) {
                                                     echo (!empty(json_decode($diser['desiredtongue']))) ? implode(', ', json_decode(($diser['desiredtongue']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Manglik</td>
                                             <td>:</td>
                                             <td><?php $Manglik = $diser; 
                                                if ($Manglik) {
                                                     echo (!empty(json_decode($diser['desiredmangal']))) ? implode(', ', json_decode(($diser['desiredmangal']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Shani</td>
                                             <td>:</td>
                                             <td><?php $Shani = $diser; 
                                                if ($Shani) {
                                                     echo (!empty(json_decode($diser['desiredshani']))) ? implode(', ', json_decode(($diser['desiredshani']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Diet</td>
                                             <td>:</td>
                                             <td><?php $Diet = $diser; 
                                                if ($Diet) {
                                                     echo (!empty(json_decode($diser['desireddiet']))) ? implode(', ', json_decode(($diser['desireddiet']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Smoke</td>
                                             <td>:</td>
                                             <td><?php $Smoke = $diser; 
                                                if ($Smoke) {
                                                     echo (!empty(json_decode($diser['desiredsmoke']))) ? implode(', ', json_decode(($diser['desiredsmoke']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Drink</td>
                                             <td>:</td>
                                             <td><?php $Drink = $diser; 
                                                if ($Drink) {
                                                     echo (!empty(json_decode($diser['desireddrink']))) ? implode(', ', json_decode(($diser['desireddrink']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Complexion</td>
                                             <td>:</td>
                                             <td><?php $Complexion = $diser; 
                                                if ($Complexion) {
                                                     echo (!empty(json_decode($diser['desiredcomplexion']))) ? implode(', ', json_decode(($diser['desiredcomplexion']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Body type</td>
                                             <td>:</td>
                                             <td><?php $Body = $diser; 
                                                if ($Body) {
                                                     echo (!empty(json_decode($diser['desiredbody']))) ? implode(', ', json_decode(($diser['desiredbody']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Education</td>
                                             <td>:</td>
                                             <td><?php $Education = $diser; 
                                                if ($Education) {
                                                     echo (!empty(json_decode($diser['desirededucation']))) ? implode(', ', json_decode(($diser['desirededucation']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Occupation</td>
                                             <td>:</td>
                                             <td><?php $Occupation = $diser; 
                                                if ($Occupation) {
                                                     echo (!empty(json_decode($diser['desiredoccupation']))) ? implode(', ', json_decode(($diser['desiredoccupation']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                          <tr>
                                             <td>Special case</td>
                                             <td>:</td>
                                             <td><?php $Special = $diser; 
                                                if ($Special) {
                                                     echo (!empty(json_decode($diser['desiredchallenge']))) ? implode(', ', json_decode(($diser['desiredchallenge']))) : '';
                                                
                                                } else {
                                                echo 'please fill out the form first      ';
                                                }
                                                ?></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane" id="tab_default_5">
                              <div class="col-sm-12">
                                 <div class="float-right">
                                    <?php if($gimag->num_rows()<6){?>
                                    <button class="btn  inbt" data-toggle="modal" data-target="#addimage"> Add Image</button>
                                    <?php }?>
                                 </div>
                              </div>
                              <br>
                              <div class="col-md-12 mt-4">
                                 <div class="row">
                                    <?php  foreach ($gimag->result() as $rows) {  ?>
                                    <div class="col-md-4">
                                       <div class="card cradimage">
                                          <div class="card-body p-0">
                                             <img class="garliyss modal-target" alt="" src="<?php $gi = $rows->gimages; 
                                                if ($gi) {
                                                echo  base_url().$rows->gimages;
                                                } else {
                                                echo base_url().'uploads/origin/def-img.png';
                                                }
                                                ?>"  > 
                                                </div>
                                                <div class="p-2">
                                             <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->
                                             <a href="#" class="userinfo float-right mr-2" data-id="<?php echo $rows->id ?>"><i class="fa fa-camera" aria-hidden="true"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- add eduction -->
<!-- add end eduction -->
<!-- edit deuction -->
<div class="modal fade" id="EPu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Edit Eduction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form  id="epinu" method="POST">
               <div class="form-group">
                  <input type="hidden" name="rid" value="<?php echo $data['id']; ?>">
               </div>
               <div class="form-group">
                  <label>Education : <span>*</span></label>
                  <select name="eductionc" class="form-control"  required="required">
                     <option> <?php
                        $sm =$st; 
                                           if ($sm) {
                        echo $st['education'];
                        } else {
                        echo 'Uneducated';
                        }
                           ?></option>
                     <option value="Trade-School">Trade School
                     </option>
                     <option value="High-School">High School
                     </option>
                     <option value="Less_than_High_School">Less than High School
                     </option>
                     <option value="Graduate">Graduate</option>
                     <option value="Post-Graduate">Post Graduate</option>
                     <option value="Other">Other</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Other Education</label>
                  <input type="text" name="otheredus" class="form-control" value="<?php $sm =$st; 
                     if ($sm) {
                     echo $st['otheredu'];
                     } else {
                     echo 'please fill out the form first      ';
                     }
                     ?>" >
               </div>
               <div class="form-group">
                  <?php $sm =$st; 
                     if ($sm) {
                     $desired_occupation=json_decode($st['educationallevel']);
                     if(empty($desired_occupation)){
                     $desired_occupation=[];
                     }
                     } 
                     else{
                     if(empty($desired_occupation)){
                     $desired_occupation=[];
                     }
                     }
                     ?>
                  <label>Educational Level</label>
                  <br />
                  <select name="educationallevelus[]" class="form-control" multiple="multiple"  id="educationallevelu" required="required">
                     <option <?php echo (in_array('less than high school',$desired_occupation))? "selected" :"" ?> >less than high school</option>
                     <optio <?php echo (in_array('B  Arch',$desired_occupation))? "selected" :"" ?>>
                     B  Arch</option>
                     <option <?php echo (in_array('B Phil',$desired_occupation))? "selected" :"" ?>>B Phil</option>
                     <option <?php echo (in_array('B Plan',$desired_occupation))? "selected" :"" ?>>B Plan</option>
                     <option <?php echo (in_array('B.Pharm',$desired_occupation))? "selected" :"" ?>>B.Pharm</option>
                     <option <?php echo (in_array('Bachelor Of Law',$desired_occupation))? "selected" :"" ?>>Bachelor Of Law</option>
                     <option <?php echo (in_array('Bachelor Of Veterinary Science',$desired_occupation))? "selected" :"" ?>>Bachelor Of Veterinary Science</option>
                     <option <?php echo (in_array('Bachelors in Computers',$desired_occupation))? "selected" :"" ?> >Bachelors in Computers</option>
                     <option <?php echo (in_array('Bachelors in Technology',$desired_occupation))? "selected" :"" ?> >Bachelors in Technology</option>
                     <option <?php echo (in_array('BAMS',$desired_occupation))? "selected" :"" ?>>BAMS</option>
                     <option <?php echo (in_array('BBA',$desired_occupation))? "selected" :"" ?>>BBA</option>
                     <option <?php echo (in_array('BDS',$desired_occupation))? "selected" :"" ?>>BDS</option>
                     <option <?php echo (in_array('BFA',$desired_occupation))? "selected" :"" ?>>BFA</option>
                     <option <?php echo (in_array('BFM (Financial Management)',$desired_occupation))? "selected" :"" ?>>BFM (Financial Management)</option>
                     <option <?php echo (in_array('BGL',$desired_occupation))? "selected" :"" ?>>BGL</option>
                     <option <?php echo (in_array('BHM',$desired_occupation))? "selected" :"" ?>>BHM</option>
                     <option <?php echo (in_array('BHMS',$desired_occupation))? "selected" :"" ?> >BHMS</option>
                     <option <?php echo (in_array('BLIS',$desired_occupation))? "selected" :"" ?> >BLIS</option>
                     <option <?php echo (in_array('BMM (MASS MEDIA)',$desired_occupation))? "selected" :"" ?> >BMM (MASS MEDIA)</option>
                     <option <?php echo (in_array('BPT',$desired_occupation))? "selected" :"" ?> >BPT</option>
                     <option <?php echo (in_array('BSc Computer Science',$desired_occupation))? "selected" :"" ?> >BSc Computer Science</option>
                     <option <?php echo (in_array('BSc  IT',$desired_occupation))? "selected" :"" ?> >BSc  IT</option>
                     <option <?php echo (in_array('BSc  Nursing',$desired_occupation))? "selected" :"" ?> >BSc  Nursing</option>
                     <option <?php echo (in_array('BSW',$desired_occupation))? "selected" :"" ?> >BSW</option>
                     <option <?php echo (in_array('CA Final',$desired_occupation))? "selected" :"" ?> >CA Final</option>
                     <option <?php echo (in_array('CA Inter',$desired_occupation))? "selected" :"" ?> >CA Inter</option>
                     <option <?php echo (in_array('CFA (Chartered Financial Analyst)',$desired_occupation))? "selected" :"" ?> >CFA (Chartered Financial Analyst)</option>
                     <option <?php echo (in_array('Chartered Accountant',$desired_occupation))? "selected" :"" ?> >Chartered Accountant</option>
                     <option <?php echo (in_array('CNC OP',$desired_occupation))? "selected" :"" ?> >CNC OP</option>
                     <option <?php echo (in_array('Company Secretary',$desired_occupation))? "selected" :"" ?> >Company Secretary</option>
                     <option <?php echo (in_array('Company Secretary (CS)',$desired_occupation))? "selected" :"" ?> >Company Secretary (CS)</option>
                     <option <?php echo (in_array('Degree In Medicine',$desired_occupation))? "selected" :"" ?> >Degree In Medicine</option>
                     <option <?php echo (in_array('Diploma',$desired_occupation))? "selected" :"" ?> >Diploma</option>
                     <option <?php echo (in_array('Diploma in AMIE',$desired_occupation))? "selected" :"" ?> >Diploma in AMIE</option>
                     <option <?php echo (in_array('Diploma in ITI',$desired_occupation))? "selected" :"" ?> >Diploma in ITI</option>
                     <option <?php echo (in_array('Diploma in Nursing',$desired_occupation))? "selected" :"" ?> >Diploma in Nursing</option>
                     <option <?php echo (in_array('DM - Doctorate Of Medicine',$desired_occupation))? "selected" :"" ?> >DM - Doctorate Of Medicine</option>
                     <option <?php echo (in_array('HSC',$desired_occupation))? "selected" :"" ?>>HSC</option>
                     <option <?php echo (in_array('IAS',$desired_occupation))? "selected" :"" ?> >IAS</option>
                     <option <?php echo (in_array('ICWA',$desired_occupation))? "selected" :"" ?> >ICWA</option>
                     <option <?php echo (in_array('IPS',$desired_occupation))? "selected" :"" ?> >IPS</option>
                     <option <?php echo (in_array('IRS',$desired_occupation))? "selected" :"" ?> >IRS</option>
                     <option <?php echo (in_array('Legal law',$desired_occupation))? "selected" :"" ?> >Legal law</option>
                     <option <?php echo (in_array('LLM',$desired_occupation))? "selected" :"" ?> >LLM</option>
                     <option <?php echo (in_array('M Arch',$desired_occupation))? "selected" :"" ?> >M Arch</option>
                     <option <?php echo (in_array('M Phil',$desired_occupation))? "selected" :"" ?> >M Phil</option>
                     <option <?php echo (in_array('M.Pharm',$desired_occupation))? "selected" :"" ?> >M.Pharm</option>
                     <option <?php echo (in_array('MA',$desired_occupation))? "selected" :"" ?> >MA</option>
                     <option <?php echo (in_array('MAMS',$desired_occupation))? "selected" :"" ?>>MAMS</option>
                     <option <?php echo (in_array('Management Degree',$desired_occupation))? "selected" :"" ?> >Management Degree</option>
                     <option <?php echo (in_array('Master In Medicine',$desired_occupation))? "selected" :"" ?> >Master In Medicine</option>
                     <option <?php echo (in_array('Master Of Law',$desired_occupation))? "selected" :"" ?> >Master Of Law</option>
                     <option <?php echo (in_array('Master Of Veterinary Science',$desired_occupation))? "selected" :"" ?> >Master Of Veterinary Science</option>
                     <option <?php echo (in_array('Masters in Arts',$desired_occupation))? "selected" :"" ?> >Masters in Arts</option>
                     <option <?php echo (in_array('Masters in Commerce',$desired_occupation))? "selected" :"" ?> >Masters in Commerce</option>
                     <option <?php echo (in_array('Masters in Computers',$desired_occupation))? "selected" :"" ?> >Masters in Computers</option>
                     <option <?php echo (in_array('Masters in Technology',$desired_occupation))? "selected" :"" ?> >Masters in Technology</option>
                     <option <?php echo (in_array('MBBS',$desired_occupation))? "selected" :"" ?> >MBBS</option>
                     <option <?php echo (in_array('MCh - Master Of Chirurgical',$desired_occupation))? "selected" :"" ?> >MCh - Master Of Chirurgical</option>
                     <option <?php echo (in_array('MD / MS (Medical)',$desired_occupation))? "selected" :"" ?> >MD / MS (Medical)</option>
                     <option <?php echo (in_array('MDS',$desired_occupation))? "selected" :"" ?> >MDS</option>
                     <option <?php echo (in_array('MEd',$desired_occupation))? "selected" :"" ?> >MEd</option>
                     <option <?php echo (in_array('Medical Laboratory Technology',$desired_occupation))? "selected" :"" ?> >Medical Laboratory Technology</option>
                     <option <?php echo (in_array('Medicine',$desired_occupation))? "selected" :"" ?> >Medicine</option>
                     <option <?php echo (in_array('MFM (Financial Management)',$desired_occupation))? "selected" :"" ?> >MFM (Financial Management)</option>
                     <option <?php echo (in_array('MHM',$desired_occupation))? "selected" :"" ?> >MHM</option>
                     <option <?php echo (in_array('MHMS',$desired_occupation))? "selected" :"" ?> >MHMS</option>
                     <option <?php echo (in_array('MLIS',$desired_occupation))? "selected" :"" ?> >MLIS</option>
                     <option <?php echo (in_array('MPT',$desired_occupation))? "selected" :"" ?> >MPT</option>
                     <option <?php echo (in_array('MSc Computer Science',$desired_occupation))? "selected" :"" ?> >MSc Computer Science</option>
                     <option <?php echo (in_array('MSc IT',$desired_occupation))? "selected" :"" ?> >MSc IT</option>
                     <option <?php echo (in_array('MSc Nursing',$desired_occupation))? "selected" :"" ?> >MSc Nursing</option>
                     <option <?php echo (in_array('MSW',$desired_occupation))? "selected" :"" ?> >MSW</option>
                     <option  <?php echo (in_array('Nursery',$desired_occupation))? "selected" :"" ?>>Nursery</option>
                     <option <?php echo (in_array('Other Education',$desired_occupation))? "selected" :"" ?> >Other Education</option>
                     <option <?php echo (in_array('PG',$desired_occupation))? "selected" :"" ?> >PG</option>
                     <option <?php echo (in_array('PGDCA',$desired_occupation))? "selected" :"" ?> >PGDCA</option>
                     <option <?php echo (in_array('PGDM',$desired_occupation))? "selected" :"" ?> >PGDM</option>
                     <option <?php echo (in_array('PHD',$desired_occupation))? "selected" :"" ?> >PHD</option>
                     <option <?php echo (in_array('Polytechnic',$desired_occupation))? "selected" :"" ?> >Polytechnic</option>
                     <option <?php echo (in_array('SSC',$desired_occupation))? "selected" :"" ?> >SSC</option>
                     <option <?php echo (in_array('UG',$desired_occupation))? "selected" :"" ?> >UG</option>
                     <option <?php echo (in_array('Others',$desired_occupation))? "selected" :"" ?> >Others</option>
                  </select>
               </div>
               <div class="form-group">
                  <?php 
                     $exop =$st; 
                     if ($exop) {
                     $occupationss=json_decode($st['occupation']);
                     if(empty($occupationss)){
                     $occupationss=[];
                     }
                     } else {
                     
                     if(empty($occupationss)){
                     $occupationss=[];
                     }
                     }
                     ?>
                  <label>occupation</label>
                  <select name="occupationus[]" class="form-control" multiple="multiple"  id="occupationu" >
                     <option <?php echo (in_array('Not-employed', $occupationss))? "selected" :"" ?> value="Not-employed">Not employed</option>
                     <!--   <option <?php echo (in_array('Business', $occupationss))? "selected" :"" ?> value="Business">Business</option> -->
                     <option <?php echo (in_array('Defence', $occupationss))? "selected" :"" ?> value="Defence">Defence</option>
                     <option <?php echo (in_array('Government', $occupationss))? "selected" :"" ?> value="Government">Government</option>
                     <option <?php echo (in_array('Private', $occupationss))? "selected" :"" ?> value="Private">Private</option>
                     <option <?php echo (in_array('Public_Sector', $occupationss))? "selected" :"" ?> value="Public_Sector"> Public Sector</option>
                     <option <?php echo (in_array('Farmer', $occupationss))? "selected" :"" ?> value="Farmer">Farmer</option>
                     <option <?php echo (in_array('Others', $occupationss))? "selected" :"" ?> value="Others">Others</option>
                  </select>
               </div>
               <?php   $bis=$st; 
                  if ($bis) { ?>
               <div class="forn-group">
                  <label>Biuseens</label>
                  <input type="text" name="userbiuseens" class="form-control" value="<?php echo  $st['userbiuseens']?>" readonly>
               </div>
               <?php if($st['userbiuseens']=='Yes'){ ?>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6" >
                        <label>Your Biuseens Image</label>
                        <input type="hidden" name="userbiuseensimageup" class="form-control" value="<?php echo  $st['biuneesimage']?>">
                        <input type="file" name="userbiuseensimage" >
                     </div>
                     <div class="col-md-6">
                        <div class="card">
                           <img  src="<?php $biusimg = $st; 
                              if ($biusimg) {
                              echo base_url().''.$st['biuneesimage'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " />
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <?php } else{?>
               <div class="forn-group">
                  <label>Biuseens</label>
                  <select name="userbiuseens" class="form-control" id = "Passport" onchange = "ShowHidenewDiv()">
                     <option value="No">No</option>
                     <option value="Yes">Yes</option>
                  </select>
               </div>
               <div class="col-md-12"  id="dPassport" style="display:none;">
                  <label>Your Biuseens Image</label>
                  <input type="hidden" name="userbiuseensimageup" class="form-control" value="assets/usercover/rathore.png">
                  <input type="file" name="userbiuseensimage"   id="showMe">
               </div>
               <?php } ?>
               <div class="form-group " >
                  <label>Occupation description
                  </label>
                  <textarea class="form-control" name="occupationdescriptions" required="required"  ><?php 
                     $sm =$st; 
                                 if ($sm) {
                     echo $st['occupationdescription'];
                     } else {
                     echo 'please fill out the form first      ';
                     }
                     ?>
                  </textarea>
               </div>
               <div class="form-group " >
                  <label>Annual Income Level
                  </label>
                  <select name="incomes" class="form-control" required="required">
                     <option> <?php
                        $sm =$st; 
                                           if ($sm) {
                        echo $st['income'];
                        } else {
                        echo 'No income';
                        }
                           ?></option>
                     <option value="0-50k">0 - 50k</option>
                     <option value="0-1lac">0 - 1 lac</option>
                     <option value="1lac-2lac">1 lac - 2 lac</option>
                     <option value="2lac-3lac">2 lac - 3 lac</option>
                     <option value="3lac-4lac">3 lac - 4 lac</option>
                     <option value="4lac-5lac">4 lac - 5 lac</option>
                     <option value="5lac-6lac">5 lac - 6 lac</option>
                     <option value="6lac-7lac">6 lac - 7 lac</option>
                     <option value="7lac-8lac">7 lac - 8 lac</option>
                     <option value="8lac-9lac">8 lac - 9 lac</option>
                     <option value="9lac-10lac">9 lac - 10 lac</option>
                     <option value="10lac-12lac">10 lac - 12 lac</option>
                     <option value="12lac-15lac">12 lac - 15 lac</option>
                     <option value="morethan_15lac">more than 15 lac</option>
                  </select>
               </div>
               <center><input type="submit" class="btn btn-danger" name="submit" value="Sumbit"/></center>
            </form>
         </div>
      </div>
   </div>
</div>
<!--  end edit  deuction -->
<!---add/edit di --->
<div class="modal fade" id="editdep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Edit Eduction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form  id="editdepst" method="POST">
               <div class="form-group">
                  <input type="hidden" name="did" value="<?php echo $data['id']; ?>">
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group ">
                           <label>From Age</label>
                           <select name="fromage" class="form-control sel_des">
                              <option> <?php
                                 $desr =$diser; 
                                                    if ($desr) {
                                 echo $diser['fromage'];
                                 } else {
                                 echo 'Age';
                                 }
                                    ?></option>
                              <?php for($i=18;$i<=40;$i++) {?>
                              <option value="<?php echo $i?>">
                                 <?php echo $i?>
                              </option>
                              <?php }?> 
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group ">
                           <label>To Age
                           </label>
                           <select name="toage" class="form-control">
                              <option> <?php
                                 $diserage =$diser; 
                                                    if ($diserage) {
                                 echo $diser['toage'];
                                 } else {
                                 echo 'Age';
                                 }
                                    ?></option>
                              <?php for($i=18;$i<=40;$i++) {?>
                              <option value="<?php echo $i?>">
                                 <?php echo $i?>
                              </option>
                              <?php }?> 
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6 ">
                        <label>Height between
                        </label>
                        <select name="fromheight" class="form-control">
                           <option> <?php
                              $diserheight =$diser; 
                                                 if ($diserheight) {
                              echo $diser['fromheight'];
                              } else {
                              echo '0foot 0inch';
                              }
                                 ?></option>
                           <?php for($i=4;$i<=6;$i++) {
                              for($j=1;$j<=12;$j++) {
                              
                              ?>
                           <option value="<?php echo $i.' foot '.$j.' inch'?>">
                              <?php echo $i.' foot '.$j.' inch'?>
                           </option>
                           <?php }}?> 
                        </select>
                     </div>
                     <div class="col-md-6 ">
                        <label>
                           <!-- HEI -->
                        </label>
                        <select name="toheight" class="form-control" style="margin-top: 5px;">
                           <option> <?php
                              $diserheight =$diser; 
                                                 if ($diserheight) {
                              echo $diser['toheight'];
                              } else {
                              echo '0foot 0inch';
                              }
                                 ?></option>
                           <?php for($i=4;$i<=6;$i++) {
                              for($j=1;$j<=12;$j++) {
                              
                              ?>
                           <option value="<?php echo $i.' foot '.$j.' inch'?>">
                              <?php echo $i.' foot '.$j.' inch'?>
                           </option>
                           <?php }}?>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group ">
                           <label>Marital Status
                           </label>
                           <select  class="form-control" name="desiredmarital">
                              <option> <?php
                                 $disermarital =$diser; 
                                                    if ($disermarital) {
                                 echo $diser['desiredmarital'];
                                 } else {
                                 echo 'None';
                                 }
                                    ?></option>
                              <option value="Single">Single
                              </option>
                              <option value="Married">Married
                              </option>
                              <option value="Divorced">Divorced
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group ">
                           <?php 
                              $disertongues =$diser; 
                                                  if ($disertongues) {
                               $mothertongue=json_decode($diser['desiredtongue']);
                                              if(empty($mothertongue)){
                                                $mothertongue=[];
                                              }
                              } 
                              else{
                                              if(empty($mothertongue)){
                                                $mothertongue=[];
                                              }
                              }
                                  ?>
                           <label>Mother Tongue
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredtongue[]" id="desiredtongues">
                              <option <?php echo (in_array('Hindi',$mothertongue))? "selected" :"" ?> value="Hindi">Hindi
                              </option>
                              <option <?php echo (in_array('Sindhi',$mothertongue))? "selected" :"" ?> value="Sindhi">Sindhi
                              </option>
                              <option <?php echo (in_array('Assamese',$mothertongue))? "selected" :"" ?>value="Assamese">Assamese
                              </option>
                              <option <?php echo (in_array('Bengali',$mothertongue))? "selected" :"" ?> value="Bengali">Bengali
                              </option>
                              <option <?php echo (in_array('Marathi',$mothertongue))? "selected" :"" ?> value="Marathi">Marathi
                              </option>
                              <option <?php echo (in_array('Nepali',$mothertongue))? "selected" :"" ?> value="Nepali">Nepali
                              </option>
                              <option <?php echo (in_array('Bihari',$mothertongue))? "selected" :"" ?> value="Bihari">Bihari
                              </option>
                              <option <?php echo (in_array('Maithli',$mothertongue))? "selected" :"" ?> value="Maithli">Maithli
                              </option>
                              <option <?php echo (in_array('Punjabi',$mothertongue))? "selected" :"" ?> value="Punjabi">Punjabi
                              </option>
                              <option <?php echo (in_array('Tamil',$mothertongue))? "selected" :"" ?> value="Tamil">Tamil
                              </option>
                              <option <?php echo (in_array('Kannar',$mothertongue))? "selected" :"" ?> value="Kannar">Kannar
                              </option>
                              <option <?php echo (in_array('Malyalam',$mothertongue))? "selected" :"" ?> value="Malyalam">Malyalam
                              </option>
                              <option <?php echo (in_array('Telgu',$mothertongue))? "selected" :"" ?> value="Telgu">Telgu
                              </option>
                              <option <?php echo (in_array('Gujrati',$mothertongue))? "selected" :"" ?> value="Gujrati">Gujrati
                              </option>
                              <option <?php echo (in_array('Rajasthani',$mothertongue))? "selected" :"" ?> value="Rajasthani">Rajasthani
                              </option>
                              <option <?php echo (in_array('Hariyanvi',$mothertongue))? "selected" :"" ?> value="Hariyanvi">Hariyanvi
                              </option>
                              <option <?php echo (in_array('English',$mothertongue))? "selected" :"" ?> value="English">English
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group ">
                           <?php $disermangal =$diser; 
                              if ($disermangal) {
                              $desiredmangals=json_decode($diser['desiredmangal']);
                              if(empty($desiredmangals)){
                              $desiredmangals=[];
                              }
                              } 
                              else{
                              if(empty($desiredmangals)){
                              $desiredmangals=[];
                              }
                              }
                              ?>
                           <label>Manglik
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredmangal[]" id="desiredmangals">
                              <option<?php echo (in_array('No',$desiredmangals))? "selected" :"" ?> value="No">No
                              </option>
                              <option <?php echo (in_array('Yes',$desiredmangals))? "selected" :"" ?> value="Yes">Yes
                              </option>
                              <option <?php echo (in_array('Anshik-Manglik',$desiredmangals))? "selected" :"" ?> value="Anshik-Manglik">Anshik Manglik
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <?php $disershani =$diser; 
                              if ($disershani) {
                              $desiredshanis=json_decode($diser['desiredshani']);
                              if(empty($desiredshanis)){
                              $desiredshanis=[];
                              }
                              } 
                              else{
                              if(empty($desiredshanis)){
                              $desiredshanis=[];
                              }
                              }
                              ?>
                           <label>Shani
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredshani[]" id="desiredshanis">
                              <option <?php echo (in_array('No',$desiredshanis))? "selected" :"" ?> value="No">No
                              </option>
                              <option <?php echo (in_array('Yes',$desiredshanis))? "selected" :"" ?> value="Yes">Yes
                              </option>
                              <option <?php echo (in_array('Anshik-Shani',$desiredshanis))? "selected" :"" ?> value="Anshik-Shani">Anshik Shani
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <?php $disereducations =$diser; 
                              if ($disereducations) {
                              $desirededucation=json_decode($diser['desirededucation']);
                              if(empty($desirededucation)){
                              $desirededucation=[];
                              }
                              } 
                              else{
                              if(empty($desirededucation)){
                              $desirededucation=[];
                              }
                              }
                              ?>
                           <label>Highest Education
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desirededucation[]" id="desirededucation">
                              <option <?php echo (in_array('Does-not-matter',$desirededucation))? "selected" :"" ?> value="does-not-matter">Does not matter
                              </option>
                              <option <?php echo (in_array('Under-Graduate',$desirededucation))? "selected" :"" ?> value="under_graduate">Under Graduate
                              </option>
                              <option <?php echo (in_array('Graduate',$desirededucation))? "selected" :"" ?> value="graduate">Graduate
                              </option>
                              <option <?php echo (in_array('Post-Graduate',$desirededucation))? "selected" :"" ?> value="post_graduate">Post Graduate
                              </option>
                              <option <?php echo (in_array('Medicine',$desirededucation))? "selected" :"" ?> value="Medicine">Medicine</option>
                              <option <?php echo (in_array('Doctorate',$desirededucation))? "selected" :"" ?> value="Doctorate">Doctorate</option>
                              <option <?php echo (in_array('Professional-Degree',$desirededucation))? "selected" :"" ?>value="Professional-Degree">Professional Degree</option>
                              <option <?php echo (in_array('Trade-School',$desirededucation))? "selected" :"" ?> value="Trade-School">Trade School</option>
                              <option <?php echo (in_array('High-School',$desirededucation))? "selected" :"" ?> value="High-School">High School</option>
                              <option  <?php echo (in_array('Less-Than-High-School',$desirededucation))? "selected" :"" ?>value="Less-Than-High-School">Less than High School</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <?php $desiredoccupations =$diser; 
                              if ($disereducations) {
                              $desiredoccupation=json_decode($diser['desiredoccupation']);
                              if(empty($desiredoccupation)){
                              $desiredoccupation=[];
                              }
                              } 
                              else{
                              if(empty($desiredoccupation)){
                              $desiredoccupation=[];
                              }
                              }
                              ?>
                           <label>Occupation
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredoccupation[]" id="desiredoccupation">
                              <option  <?php echo (in_array('Does-Not-Matter',$desiredoccupation))? "selected" :"" ?> value="Does-Not-Matter">Does not matter
                              </option>
                              <option  <?php echo (in_array('Business',$desiredoccupation))? "selected" :"" ?> value="Business">Business
                              </option>
                              <option <?php echo (in_array('Job-Government',$desiredoccupation))? "selected" :"" ?> value="Job-Government">Job-Government
                              </option>
                              <option <?php echo (in_array('Job-Private',$desiredoccupation))? "selected" :"" ?> value="Job-Private">Job-Private
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group " >
                           <label>Annual Income Level
                           </label>
                           <select name="desiredincome" class="form-control">
                              <option> <?php
                                 $diserincome =$diser; 
                                                    if ($diserincome) {
                                 echo $diser['desiredincome'];
                                 } else {
                                 echo 'No Income';
                                 }
                                    ?></option>
                              <option value="0-50k">0 - 50k</option>
                              <option value="0-1lac">0 - 1 lac</option>
                              <option value="1lac-2lac">1 lac - 2 lac</option>
                              <option value="2lac-3lac">2 lac - 3 lac</option>
                              <option value="3lac-4lac">3 lac - 4 lac</option>
                              <option value="4lac-5lac">4 lac - 5 lac</option>
                              <option value="5lac-6lac">5 lac - 6 lac</option>
                              <option value="6lac-7lac">6 lac - 7 lac</option>
                              <option value="7lac-8lac">7 lac - 8 lac</option>
                              <option value="8lac-9lac">8 lac - 9 lac</option>
                              <option value="9lac-10lac">9 lac - 10 lac</option>
                              <option value="10lac-12lac">10 lac - 12 lac</option>
                              <option value="12lac-15lac">12 lac - 15 lac</option>
                              <option value="morethan_15lac">more than 15 lac</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <?php $desirediet =$diser; 
                              if ($desirediet) {
                              $desireddiets=json_decode($diser['desireddiet']);
                              if(empty($desireddiets)){
                              $desireddiets=[];
                              }
                              } 
                              else{
                              if(empty($desireddiets)){
                              $desireddiets=[];
                              }
                              }
                              ?>
                           <label>Diet Habits
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desireddiet[]" id="desireddiet">
                              <option <?php echo (in_array('Veg',$desireddiets))? "selected" :"" ?> value="Veg">Veg
                              </option>
                              <option <?php echo (in_array('Non-veg',$desireddiets))? "selected" :"" ?> value="Non-veg">Non-veg
                              </option>
                              <option <?php echo (in_array('Eggtarian',$desireddiets))? "selected" :"" ?> value="Eggtarian">Eggtarian
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <?php $desiredrink =$diser; 
                              if ($desiredrink) {
                              $desireddrinks=json_decode($diser['desireddrink']);
                              if(empty($desireddrinks)){
                              $desireddrinks=[];
                              }
                              } 
                              else{
                              if(empty($desireddrinks)){
                              $desireddrinks=[];
                              }
                              }
                              ?>
                           <label>Drinking Habits
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desireddrink[]" id="desireddrink">
                              <option <?php echo (in_array('Yes',$desireddrinks))? "selected" :"" ?> value="Yes">Yes
                              </option>
                              <option <?php echo (in_array('No',$desireddrinks))? "selected" :"" ?> value="No">No
                              </option>
                              <option <?php echo (in_array('Occasionally',$desireddrinks))? "selected" :"" ?> value="Occasionally">Occasionally
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <?php $desiresmoke =$diser; 
                           if ($desiresmoke) {
                           $desiresmokes=json_decode($diser['desiredsmoke']);
                           if(empty($desiresmokes)){
                           $desiresmokes=[];
                           }
                           } 
                           else{
                           if(empty($desiresmokes)){
                           $desiresmokes=[];
                           }
                           }
                           ?>
                        <div class="form-group">
                           <label>Smoking Habits
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredsmoke[]" id="desiredsmoke">
                              <option <?php echo (in_array('Yes',$desiresmokes))? "selected" :"" ?> value="Yes">Yes
                              </option>
                              <option <?php echo (in_array('No',$desiresmokes))? "selected" :"" ?> value="No">No
                              </option>
                              <option  <?php echo (in_array('Occasionally',$desiresmokes))? "selected" :"" ?> value="Occasionally">Occasionally
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group ">
                           <?php $desirescomplexion =$diser; 
                              if ($desirescomplexion) {
                              $desiredcomplexions=json_decode($diser['desiredcomplexion']);
                              if(empty($desiredcomplexions)){
                              $desiredcomplexions=[];
                              }
                              } 
                              else{
                              if(empty($desiredcomplexions)){
                              $desiredcomplexions=[];
                              }
                              }
                              ?>
                           <label>Complexion
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredcomplexion[]"  id="desiredcomplexion">
                              <option  <?php echo (in_array('Very-Fair',$desiredcomplexions))? "selected" :"" ?> value="Very-Fair">Very Fair</option>
                              <option <?php echo (in_array('Fair',$desiredcomplexions))? "selected" :"" ?> value="Fair">Fair </option>
                              <option <?php echo (in_array('Whitish-Brown',$desiredcomplexions))? "selected" :"" ?> value="Whitish-Brown">Whitish Brown
                              </option>
                              <option <?php echo (in_array('Whitish-Medium',$desiredcomplexions))? "selected" :"" ?> 
                                 value="Whitish-Medium">Whitish Medium
                              </option>
                              <option <?php echo (in_array('Whitish',$desiredcomplexions))? "selected" :"" ?> 
                                 value="Whitish">Whitish
                              </option>
                              <option <?php echo (in_array('Dark',$desiredcomplexions))? "selected" :"" ?> 
                                 value="Dark">Dark
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <?php $desiresbody =$diser; 
                              if ($desiresbody) {
                              $desiredbodys=json_decode($diser['desiredbody']);
                              if(empty($desiredbodys)){
                              $desiredbodys=[];
                              }
                              } 
                              else{
                              if(empty($desiredbodys)){
                              $desiredbodys=[];
                              }
                              }
                              ?>
                           <label>Body type
                           </label>
                           <select  multiple="multiple" class="form-control multi-select" name="desiredbody[]" id="desiredbody">
                              <option  <?php echo (in_array('Slim',$desiredbodys))? "selected" :"" ?> value="Slim">Slim
                              </option>
                              <option  <?php echo (in_array('Average',$desiredbodys))? "selected" :"" ?> value="Average">Average
                              </option>
                              <option  <?php echo (in_array('Fat',$desiredbodys))? "selected" :"" ?> value="Fat">Fat
                              </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="form-group">
                        <?php $desiresChallenged =$diser; 
                           if ($desiresChallenged) {
                           $desiredchallenges=json_decode($diser['desiredchallenge']);
                           if(empty($desiredchallenges)){
                           $desiredchallenges=[];
                           }
                           } 
                           else{
                           if(empty($desiredchallenges)){
                           $desiredchallenges=[];
                           }
                           }
                           ?>
                        <label>Challenged
                        </label>
                        <select  multiple="multiple" class="form-control multi-select" name="desiredchallenge[]" id="desiredchallenge">
                           <option <?php echo (in_array('No',$desiredchallenges))? "selected" :"" ?> value="No">No
                           </option>
                           <option <?php echo (in_array('Physically',$desiredchallenges))? "selected" :"" ?> value="Physically">Physically
                           </option>
                           <option <?php echo (in_array('Mentally',$desiredchallenges))? "selected" :"" ?> value="Mentally">Mentally
                           </option>
                        </select>
                     </div>
                  </div>
               </div>
         </div>
         <center><input type="submit" class="btn btn-danger" name="submit" value="Sumbit"/></center>
         </form>
      </div>
   </div>
</div>
</div>
<!-- end dis edit--->
<div class="modal fade" id="addimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Add Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="addimages" method="POST" enctype="multipart/form-data" >
               <div class="form-group">
                  <input type="hidden" name="grid" value="<?php echo $data['id'];?>">
               </div>
               <div class="form-group">
                  <input type="file" name="gimages"  multiple="true" >
                  <input type="submit" class="btn btn-danger" name="submit" value="Upload"/>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="updateimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Update Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="euimages" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <input type="hidden" name="ueid" id="uid">
                  <input type="hidden" name="uiges"  multiple="true" id="ueuim">
               </div>
               <div class="form-group">
                  <input type="file" name="ueics"  multiple="true" >
                  <input type="submit" class="btn btn-danger" name="submit" value="Upload"/>
               </div>
               <div>
                  <img  class="w-25" src="" id="ueimage" style="height: 120px;">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="updateproimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Update Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="epuimages" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <input type="hidden" name="pid" id="pid">
                  <input type="hidden" name="upeuim"  multiple="true" id="upeuim">
               </div>
               <div class="form-group">
                  <input type="file" name="peimages"  multiple="true" >
                  <input type="submit" class="btn btn-danger" name="submit" value="Upload"/>
               </div>
               <div>
                  <img  class="w-25" src="" id="peimage" style="height: 120px;">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="euprogileimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Update Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="coverepuimages" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <input type="hidden" name="cpid" id="cpid">
                  <input type="hidden" name="cupeuim"  multiple="true" id="cupeuim">
               </div>
               <div class="form-group">
                  <input type="file" name="coverpeimages"  multiple="true" >
                  <input type="submit" class="btn btn-danger" name="submit" value="Upload"/>
               </div>
               <div>
                  <img  class="w-25" src="" id="cpeimage" style="height: 120px;">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php   $name =$fditslis; 
   if ($name) { ?>
<div class="modal fade" id="updatefamliynew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Family Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="upadeuserfamliy" method="POST" enctype="multipart/form-data">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <input type="text" name="famliyid" class="form-control" value="<?php echo $data['id']; ?>" hidden/>
                        <input type="text" name="fid" class="form-control" value="<?php echo $fditslis['id']; ?>" hidden/>
                        <label>Family Values</label>
                        <select name="familyvalueupdate" class="form-control" required="required">
                           <option <?php if($fditslis['family_values']=="Traditional")echo 'selected="selected"';?>value="Traditional">Traditional</option>
                           <option <?php if($fditslis['family_values']=="Orthodox")echo 'selected="selected"';?>value="Orthodox">Orthodox</option>
                           <option <?php if($fditslis['family_values']=="Liberal")echo 'selected="selected"';?>value="Liberal">Liberal</option>
                           <option <?php if($fditslis['family_values']=="Moderate")echo 'selected="selected"';?>value="Moderate">Moderate </option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label>Family Type </label>
                        <select name="familytypeupdate" class="form-control" required="required">
                           <option <?php if($fditslis['family_type']=="Joint")echo 'selected="selected"';?>value="Joint">Joint </option>
                           <option <?php if($fditslis['family_type']=="Nuclear")echo 'selected="selected"';?> value="Nuclear">Nuclear</option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label>Family Status
                        </label>
                        <select name="familystatusupdate" class="form-control" required="required">
                           <option <?php if($fditslis['family_status']=="Rich")echo 'selected="selected"';?>  value="Rich">Rich</option>
                           <option  <?php if($fditslis['family_status']=="Upper-Middle-Class")echo 'selected="selected"';?> value="Upper-Middle-Class">Upper Middle Class
                           </option>
                           <option  <?php if($fditslis['family_status']=="Lower-Middle-Classs")echo 'selected="selected"';?> value="Lower-Middle-Class">Lower Middle Class
                           </option>
                           <option <?php if($fditslis['family_status']=="High-Class")echo 'selected="selected"';?> value="High-Class">High Class</option>
                           <option <?php if($fditslis['family_status']=="Middle-Class")echo 'selected="selected"';?> value="Middle-Class">Middle Class</option>
                           <option <?php if($fditslis['family_status']=="No_Interest_to_tell_at_this_time")echo 'selected="selected"';?> value="No_Interest_to_tell_at_this_time">No Interest to tell at this time</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <div class="row">
                     <div class="col-md-4">
                        <label>Residential Address </label>
                        <textarea name="faddressupdate" class="form-control address"  required="required"><?php echo  $fditslis['address']?></textarea>
                     </div>
                     <div class="col-md-4">
                        <label>Family Income (per annum)
                        </label>
                        <select name="fincomesupdate" class="form-control" required="required">
                           <option <?php if($fditslis['family_income']=="0-50k")echo 'selected="selected"';?> value="0-50k">0 - 50k</option>
                           <option <?php if($fditslis['family_income']=="0-1lac")echo 'selected="selected"';?> value="0-1lac">0 - 1 lac</option>
                           <option <?php if($fditslis['family_income']=="1lac-2lac")echo 'selected="selected"';?>  value="1lac-2lac">1 lac - 2 lac</option>
                           <option <?php if($fditslis['family_income']=="2lac-3lac")echo 'selected="selected"';?> value="2lac-3lac">2 lac - 3 lac</option>
                           <option <?php if($fditslis['family_income']=="3lac-4lac")echo 'selected="selected"';?> value="3lac-4lac">3 lac - 4 lac</option>
                           <option <?php if($fditslis['family_income']=="4lac-5lac")echo 'selected="selected"';?> value="4lac-5lac">4 lac - 5 lac</option>
                           <option <?php if($fditslis['family_income']=="5lac-6lac")echo 'selected="selected"';?> value="5lac-6lac">5 lac - 6 lac</option>
                           <option <?php if($fditslis['family_income']=="6lac-7lac")echo 'selected="selected"';?> value="6lac-7lac">6 lac - 7 lac</option>
                           <option <?php if($fditslis['family_income']=="7lac-8lac")echo 'selected="selected"';?> value="7lac-8lac">7 lac - 8 lac</option>
                           <option <?php if($fditslis['family_income']=="8lac-9lac")echo 'selected="selected"';?> value="8lac-9lac">8 lac - 9 lac</option>
                           <option <?php if($fditslis['family_income']=="9lac-10lac")echo 'selected="selected"';?> value="9lac-10lac">9 lac - 10 lac</option>
                           <option <?php if($fditslis['family_income']=="10lac-12lac")echo 'selected="selected"';?> value="10lac-12lac">10 lac - 12 lac</option>
                           <option <?php if($fditslis['family_income']=="12lac-15lac")echo 'selected="selected"';?> value="12lac-15lac">12 lac - 15 lac</option>
                           <option <?php if($fditslis['family_income']=="morethan_15lac")echo 'selected="selected"';?> value="morethan_15lac">more than 15 lac</option>
                        </select>
                     </div>
                     <div class="col-md-4" >
                        <label>Family Business</label>
                        <input type="text" name="familybupdate" class="form-control" value="<?php echo  $fditslis['famliy_bussines']?>" readonly>
                     </div>
                  </div>
               </div>
               <?php if($fditslis['famliy_bussines']=='Yes'){ ?>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6" >
                        <label>Famliy Biuseens</label>
                        <input type="hidden" name="seconbimag" class="form-control" value="<?php echo  $fditslis['family_businessimg']?>">
                        <input type="file" name="bimageupdate" class="form-control">
                     </div>
                     <div class="col-md-6">
                        <div class="card">
                           <img  src="<?php $imgs = $fditslis; 
                              if ($imgs) {
                              echo base_url().''.$fditslis['family_businessimg'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " />
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Famliy Image</label>
                        <input type="hidden" name="updateseconfamliyimg" class="form-control" value="<?php echo  $fditslis['famliyimage']?>">
                        <input type="file" name="newfamliyimgsupdate">
                     </div>
                     <div class="col-md-6">
                        <div class="card">
                           <img  src="<?php $imgs = $fditslis; 
                              if ($imgs) {
                              echo base_url().''.$fditslis['famliyimage'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <label>Grand Father Name</label>
                        <input type="text" name="grandfupdate" class="form-control" list="gm" value="<?php echo  $fditslis['grandfather_name']?>">
                        <datalist id="gm">
                           <option value="Mr."></option>
                           <option value="Dr."></option>
                           <option value="Late Mr."></option>
                        </datalist>
                     </div>
                     <div class="col-md-4">
                        <label>Grand Father Image</label>
                        <input type="hidden" name="secongrfimgupdate" class="form-control" value="<?php echo  $fditslis['grandfatherimage']?>" >
                        <input type="file" name="updategrfimg" >
                     </div>
                     <div class="col-md-4">
                        <div class="card careds">
                           <img  src="<?php $imgs = $fditslis; 
                              if ($imgs) {
                              echo base_url().''.$fditslis['grandfatherimage'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " class="crdimgs" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <label>Grand Mother Name</label>
                        <input type="text" name="gramnaeupdate" class="form-control" list="gms" value="<?php echo  $fditslis['grandmother_name']?>">
                        <datalist id="gms">
                           <option value="Mrs."></option>
                           <option value="Dr."></option>
                           <option value="Late Mrs."></option>
                        </datalist>
                     </div>
                     <div class="col-md-4">
                        <label>Grand  Mother Image</label>
                        <input type="hidden" name="secondgrmimgupdate" class="form-control" value="<?php echo  $fditslis['grandmotherimage']?>" >
                        <input type="file" name="grmimgupdate" >
                     </div>
                     <div class="col-md-4">
                        <div class="card careds">
                           <img  src="<?php $imgs = $fditslis; 
                              if ($imgs) {
                              echo base_url().''.$fditslis['grandmotherimage'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " class="crdimgs" />
                        </div>
                     </div>
                  </div>
               </div>
               <hr>
               <div class="col-md-12 ">
                  <center>
                     <h1>Father Detail</h1>
                  </center>
                  <div class="row mt-5">
                     <div class="col-md-4">
                        <label>Father Name</label>
                        <input type="text" name="fnameupdate" class="form-control" list="gm" value="<?php echo  $fditslis['father_name']?>">
                        <datalist id="gm">
                           <option value="Mr."></option>
                           <option value="Dr."></option>
                           <option value="Late Mr."></option>
                        </datalist>
                     </div>
                     <div class="col-md-4">
                        <label>Father Image</label>
                        <input type="hidden" name="seconfimgupdate" class="form-control" value="<?php echo  $fditslis['father_image']?>" >
                        <input type="file" name="fimgupdate"  >
                     </div>
                     <div class="col-md-4">
                        <div class="card careds">
                           <img  src="<?php $imgs = $fditslis; 
                              if ($imgs) {
                              echo base_url().''.$fditslis['father_image'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " class="crdimgs" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 ">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Father  Occupation</label>
                        <select name="focupdate" class="form-control">
                           <option <?php if($fditslis['fatheroccupation']=="Business")echo 'selected="selected"';?> value="Business">Business</option>
                           <option <?php if($fditslis['fatheroccupation']=="Job")echo 'selected="selected"';?> value="Job">Job</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label>Father  Occupation Detail</label>
                        <input type="text" name="focdupdate" class="form-control"  value="<?php echo  $fditslis['f_occupation_detail']?>" >
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <label>Father  Conttact</label>
                  <input type="number" name="fmnumberupdate" class="form-control"  value="<?php echo  $fditslis['fcontactnumber']?>">
               </div>
               <hr>
               <div class="col-md-12 ">
                  <center>
                     <h1>Mother Detail</h1>
                  </center>
                  <div class="row mt-5">
                     <div class="col-md-4">
                        <label>Mother Name</label>
                        <input type="text" name="mnameupdate" class="form-control" list="gmm" value="<?php echo  $fditslis['mother_name']?>">
                        <datalist id="gmm">
                           <option value="Mrs."></option>
                           <option value="Dr."></option>
                           <option value="Late Mrs."></option>
                        </datalist>
                     </div>
                     <div class="col-md-4">
                        <label>Mother Image</label>
                        <input type="hidden" name="secondmimgupdate" class="form-control" value="<?php echo  $fditslis['motherimage']?>" >
                        <input type="file" name="mimgupdate" >
                     </div>
                     <div class="col-md-4">
                        <div class="card careds">
                           <img  src="<?php $imgs = $fditslis; 
                              if ($imgs) {
                              echo base_url().''.$fditslis['motherimage'];
                              } else {
                              echo base_url().'assets/usercover/rathore.png';
                              }
                              ?> " class="crdimgs" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Mother  Occupation</label>
                        <select name="mocupdate" class="form-control">
                           <option <?php if($fditslis['motheroccupation']=="Housewife")echo 'selected="selected"';?> value="Housewife">Housewife</option>
                           <option <?php if($fditslis['motheroccupation']=="Job")echo 'selected="selected"';?> value="Job">Job/Business</option>
                           <option  <?php if($fditslis['motheroccupation']=="Housewife & Job")echo 'selected="selected"';?> value="Housewife & Job">Housewife & Job</option>
                           <option  <?php if($fditslis['motheroccupation']=="Housewife & Business")echo 'selected="selected"';?> value="Housewife & Business">Housewife & Business</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label>Mother  Occupation Detail</label>
                        <input type="text" name="mocdupdate" class="form-control"  value="<?php echo  $fditslis['m_occupation_detail']?>">
                     </div>
                  </div>
               </div>
               <hr>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Family Whatsup Conttact</label>
                        <input type="number" name="fwnumberupdate" class="form-control" value="<?php echo  $fditslis['whatsapp_number']?>" >
                     </div>
                     <div class="col-md-6">
                        <label>Email id</label>
                        <input type="email" name="femailupdate" class="form-control" value="<?php echo  $fditslis['emailid']?>" >
                     </div>
                  </div>
               </div>
               <hr>
               <?php
                  if(!empty($sibling_gen)){
                    for ($i=0; $i < count($sibling_gen); $i++) {
                      ?>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>status</label>
                           <select class="form-control" name="sibling_statusupdate[]">
                              <option <?php echo ($sibling_status[$i]=='Younger')? "selected" :"" ?> value="Younger">Younger</option>
                              <option <?php echo ($sibling_status[$i]=='Elder')? "selected" :"" ?> value="Elder">Elder</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Type</label>
                           <select class="form-control" name="sibling_genupdate[]" >
                              <option <?php echo ($sibling_gen[$i]=='brother')? "selected" :"" ?> value="brother">brother</option>
                              <option <?php echo ($sibling_gen[$i]=='sister')? "selected" :"" ?> value="sister">sister</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>Name</label>
                           <input type="text" value="<?php echo  $sibling_name[$i]; ?>" name="sibling_nameupdate[]" class="form-control" >
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>Marriage status</label>
                           <select class="form-control" name="sibling_marriageupdate[]">
                              <option <?php echo ($sibling_marriage[$i]=='Married')? "selected" :"" ?> value="Married">Married</option>
                              <option <?php echo ($sibling_marriage[$i]=='Unmarried')? "selected" :"" ?> value="Unmarried">Unmarried</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>oucption</label>
                           <input type="text" value="<?php echo  $sibling_occu[$i]; ?>" name="sibling_ocuupdate[]" class="form-control" >
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  }
                  }
                  ?>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>status</label>
                           <select class="form-control" name="sibling_statusupdate[]">
                              <option value="Younger">Younger</option>
                              <option value="Elder">Elder</option>
                           </select>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Type</label>
                           <select class="form-control" name="sibling_genupdate[]">
                              <option value="brother">brother</option>
                              <option value="sister">sister</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>Name</label>
                           <input type="text" name="sibling_nameupdate[]" class="form-control" >
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>Marriage status</label>
                           <select class="form-control" name="sibling_marriageupdate[]">
                              <option value="Unmarried">Unmarried</option>
                              <option value="Married">Married</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group ">
                           <label>oucption</label>
                           <input type="text"name="sibling_ocuupdate[]" class="form-control" >
                        </div>
                     </div>
                     <fieldset class="UPS">
                        <div class="repeatable pt-5"></div>
                        <div class="form-group col-lg-12">
                           <input type="button" value="+" class="btn btn-primary add ">
                        </div>
                     </fieldset>
                  </div>
               </div>
               <center> <input type="submit" class="btn btn-danger" name="submit" value="Submit"/></center>
            </form>
         </div>
      </div>
   </div>
</div>
<?php } else{ ?>
<div class="modal fade" id="editfamliy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block modal-lg " role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Family Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="edufamliy" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <input type="hidden" name="ferid" value="<?php echo $data['id'];?>">
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <label>Family Values</label>
                        <select name="familyvalue" class="form-control" required="required">
                           <option value="Traditional">Traditional</option>
                           <option value="Orthodox">Orthodox</option>
                           <option value="Liberal">Liberal</option>
                           <option value="Moderate">Moderate</option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label>Family Type </label>
                        <select name="familytype" class="form-control" required="required">
                           <option value="Joint">Joint </option>
                           <option value="Nuclear">Nuclear</option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label>Family Status
                        </label>
                        <select name="familystatus" class="form-control" required="required">
                           <option  value="Rich">Rich</option>
                           <option  value="Upper-Middle-Class">Upper Middle Class</option>
                           <option   value="Lower-Middle-Class">Lower Middle Class </option>
                           <option  value="High-Class">High Class</option>
                           <option value="Middle-Class">Middle Class</option>
                           <option  value="No_Interest_to_tell_at_this_time">No Interest to tell at this time</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <div class="row">
                     <div class="col-md-4">
                        <label>Residential Address </label>
                        <textarea name="faddress" class="form-control address"  required="required"></textarea>
                     </div>
                     <div class="col-md-4">
                        <label>Family Income (per annum)
                        </label>
                        <select name="fincomes" class="form-control" required="required">
                           <option value="0-50k">0 - 50k</option>
                           <option value="0-1lac">0 - 1 lac</option>
                           <option value="1lac-2lac">1 lac - 2 lac</option>
                           <option value="2lac-3lac">2 lac - 3 lac</option>
                           <option value="3lac-4lac">3 lac - 4 lac</option>
                           <option value="4lac-5lac">4 lac - 5 lac</option>
                           <option value="5lac-6lac">5 lac - 6 lac</option>
                           <option value="6lac-7lac">6 lac - 7 lac</option>
                           <option value="7lac-8lac">7 lac - 8 lac</option>
                           <option value="8lac-9lac">8 lac - 9 lac</option>
                           <option value="9lac-10lac">9 lac - 10 lac</option>
                           <option value="10lac-12lac">10 lac - 12 lac</option>
                           <option value="12lac-15lac">12 lac - 15 lac</option>
                           <option value="morethan_15lac">more than 15 lac</option>
                        </select>
                     </div>
                     <div class="col-md-4" >
                        <label>Family Business</label>
                        <select name="familyb" class="form-control" id = "ddlPassport" onchange = "ShowHideDiv()">
                           <option value="No">No</option>
                           <option value="Yes">Yes</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12"  id="dvPassport" style="display:none;">
                  <label>Famliy Biuseens</label>
                  <input type="file" name="bimage" class="form-control"  id="showMe">
               </div>
               <div class="col-md-12">
                  <label>Famliy Image</label>
                  <input type="file" name="famliyimgs" class="form-control" >
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Grand Father Name</label>
                        <input type="text" name="grandm" class="form-control" list="gm">
                        <datalist id="gm">
                           <option value="Mr."></option>
                           <option value="Dr."></option>
                           <option value="Late Mr."></option>
                        </datalist>
                     </div>
                     <div class="col-md-6">
                        <label>Grand Father Image</label>
                        <input type="file" name="grfimg" class="form-control" >
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Grand Mother Name</label>
                        <input type="text" name="gramnae" class="form-control" list="gms">
                        <datalist id="gms">
                           <option value="Mrs."></option>
                           <option value="Dr."></option>
                           <option value="Late Mrs."></option>
                        </datalist>
                     </div>
                     <div class="col-md-6">
                        <label>Grand  Mother Image</label>
                        <input type="file" name="grmimg" class="form-control" >
                     </div>
                  </div>
               </div>
               <hr>
               <div class="col-md-12 ">
                  <center>
                     <h1>Father Detail</h1>
                  </center>
                  <div class="row mt-5">
                     <div class="col-md-6">
                        <label>Father Name</label>
                        <input type="text" name="fname" class="form-control" list="gm">
                        <datalist id="gm">
                           <option value="Mr."></option>
                           <option value="Dr."></option>
                           <option value="Late Mr."></option>
                        </datalist>
                     </div>
                     <div class="col-md-6">
                        <label>Father Image</label>
                        <input type="file" name="fimg" class="form-control" >
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-5">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Father  Occupation</label>
                        <select name="foc" class="form-control">
                           <option value="Business">Business</option>
                           <option value="Job">Job</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label>Father  Occupation Detail</label>
                        <input type="text" name="focd" class="form-control" >
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <label>Father  Conttact</label>
                  <input type="number" name="fmnumber" class="form-control" >
               </div>
               <hr>
               <div class="col-md-12 ">
                  <center>
                     <h1>Mother Detail</h1>
                  </center>
                  <div class="row mt-5">
                     <div class="col-md-6">
                        <label>Mother Name</label>
                        <input type="text" name="mname" class="form-control" list="gmm">
                        <datalist id="gmm">
                           <option value="Mrs."></option>
                           <option value="Dr."></option>
                           <option value="Late Mrs."></option>
                        </datalist>
                     </div>
                     <div class="col-md-6">
                        <label>Mother Image</label>
                        <input type="file" name="mimg" class="form-control" >
                     </div>
                  </div>
               </div>
               <div class="col-md-12 mt-5">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Mother  Occupation</label>
                        <select name="moc" class="form-control">
                           <option value="Housewife">Housewife</option>
                           <option value="Job">Job/Business</option>
                           <option value="Job1">Housewife & Job</option>
                           <option value="Job2">Housewife & Business</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label>Mother  Occupation Detail</label>
                        <input type="text" name="mocd" class="form-control" >
                     </div>
                  </div>
               </div>
               <hr>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Family Whatsup Conttact</label>
                        <input type="number" name="fwnumber" class="form-control" >
                     </div>
                     <div class="col-md-6">
                        <label>Email id</label>
                        <input type="email" name="femail" class="form-control" >
                     </div>
                  </div>
               </div>
               <hr>
               <div class="col-md-12">
                  <center>
                     <h1> Brother's</h1>
                  </center>
                  <div class="row" >
                     <input type="hidden" value="brother" name="sibling_gen[]">
                     <div class="col-md-3">
                        <label >Brother's </label>
                        <select class="form-control" name="siblingstatus[]">
                           <option value="Younger">Younger</option>
                           <option value="Elder">Elder</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label >Brother's Name</label>
                        <input type="text" name="siblingname[]" class="form-control" placeholder="Enter name">
                     </div>
                     <div class="col-md-3">
                        <label>Marital Status</label>
                        <select name="bms[]" class="form-control">
                           <option value="Unmarried">Unmarried</option>
                           <option value="Married">Married</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Brother's Ocupation</label>
                        <input type="text" name="bo[]" class="form-control" placeholder="Enter Ocupation">
                     </div>
                  </div>
                  <fieldset class="TS">
                     <div class="repeatable"></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add">
                     </div>
                  </fieldset>
               </div>
               <hr>
               <div class="col-md-12">
                  <center>
                     <h1> Sister</h1>
                  </center>
                  <div class="row" >
                     <div class="col-md-3">
                        <input type="hidden" value="sister" name="sibling_gen[]">
                        <label >Sister's </label>
                        <select class="form-control" name="siblingstatus[]">
                           <option value="Younger">Younger</option>
                           <option value="Elder">Elder</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label >Sister's Name</label>
                        <input type="text" name="siblingname[]" class="form-control" placeholder="Enter name">
                     </div>
                     <div class="col-md-3">
                        <label>Marital Status</label>
                        <select name="bms[]" class="form-control">
                           <option value="Unmarried">Unmarried</option>
                           <option value="Married">Married</option>
                        </select>
                     </div>
                     <div class="col-md-3">
                        <label>Sister's Ocupation</label>
                        <input type="text" name="bo[]" class="form-control" placeholder="Enter Ocupation">
                     </div>
                  </div>
                  <fieldset class="st">
                     <div class="repeatable"></div>
                     <div class="form-group col-lg-12">
                        <input type="button" value="+" class="btn btn-primary add">
                     </div>
                  </fieldset>
               </div>
               <center> <input type="submit" class="btn btn-danger" name="submit" value="Submit"/></center>
            </form>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<div class="modal fade" id="editAbout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered d-block modal-lg " role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" >Family Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form enctype="multipart/form-data" id="editaboutinfo" method="POST" >
               <h4>Personal Information:</h4>
               <div class="form-group">
                  <label>Profile created by: <span>*</span></label>
                  <select class="form-control " name="updateprofilecreated" required/ >
                     <option <?php if($data['profilecreated']=="Self")echo 'selected="selected"';?>  value="Self">Self</option>
                     <option <?php if($data['profilecreated']=="Mother")echo 'selected="selected"';?> value="Mother">Mother</option>
                     <option <?php if($data['profilecreated']=="Father")echo 'selected="selected"';?> value="Father">Father</option>
                     <option <?php if($data['profilecreated']=="Sister")echo 'selected="selected"';?> value="Sister">Sister</option>
                     <option <?php if($data['profilecreated']=="Brother")echo 'selected="selected"';?> value="Brother">Brother</option>
                     <option <?php if($data['profilecreated']=="Friend")echo 'selected="selected"';?> value="Friend">Friend</option>
                     <option <?php if($data['profilecreated']=="Guadian")echo 'selected="selected"';?> value="Guadian">Guadian</option>
                  </select>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label> (Bride/Groom) First Name: <span>*</span></label>
                           <input type="text" name="updateFirstName" placeholder="First Name" class="form-control " value="<?php echo  $data['firstName']?>" >
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label> (Bride/Groom) Last Name: <span>*</span></label>
                           <input type="text" name="updateLastName" placeholder="Last Name" class="form-control " value="<?php echo  $data['lastName']?>" >
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Gender : <span>*</span></label>
                           <select class="form-control" name="updategender">
                              <option <?php if($data['gender']=="Male")echo 'selected="selected"';?> value="Male">Male</option>
                              <option <?php if($data['gender']=="Female")echo 'selected="selected"';?>value="Female">Female</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <label> Date of Birth: <span>*</span></label>
                        <input type="date" name="updatedob" placeholder="Date of Birth" class="form-control required" value="<?php echo  $data['dob']?>">
                     </div>
                     <div class="col-md-4">
                        <label> Mother Tongue: <span>*</span></label>
                        <select class="form-control " name="updatemothertongue">
                           <option <?php if($data['mothertongue']=="Hindi")echo 'selected="selected"';?> value="Hindi"> Hindi</option>
                           <option <?php if($data['mothertongue']=="Sindhi")echo 'selected="selected"';?> value="Sindhi"> Sindhi </option>
                           <option <?php if($data['mothertongue']=="Assamese")echo 'selected="selected"';?> value="Assamese">Assamese</option>
                           <option <?php if($data['mothertongue']=="Bengali")echo 'selected="selected"';?> value="Bengali">Bengali</option>
                           <option <?php if($data['mothertongue']=="Marathi")echo 'selected="selected"';?> value="Marathi">Marathi</option>
                           <option <?php if($data['mothertongue']=="Nepali")echo 'selected="selected"';?>  value="Nepali">Nepali </option>
                           <option <?php if($data['mothertongue']=="Bihari")echo 'selected="selected"';?>  value="Bihari">Bihari </option>
                           <option <?php if($data['mothertongue']=="Maithli")echo 'selected="selected"';?>  value="Maithli">Maithli</option>
                           <option <?php if($data['mothertongue']=="Punjabi")echo 'selected="selected"';?>  value="Punjabi">Punjabi</option>
                           <option <?php if($data['mothertongue']=="Tamil")echo 'selected="selected"';?>  value="Tamil">Tamil</option>
                           <option <?php if($data['mothertongue']=="Kannar")echo 'selected="selected"';?>  value="Kannar">Kannar</option>
                           <option <?php if($data['mothertongue']=="Malyalam")echo 'selected="selected"';?>  value="Malyalam">Malyalam</option>
                           <option <?php if($data['mothertongue']=="Telgu")echo 'selected="selected"';?>  value="Telgu">Telgu</option>
                           <option <?php if($data['mothertongue']=="Gujrati")echo 'selected="selected"';?>  value="Gujrati">Gujrat</option>
                           <option <?php if($data['mothertongue']=="Rajasthani")echo 'selected="selected"';?>  value="Rajasthani">Rajasthani</option>
                           <option <?php if($data['mothertongue']=="Hariyanvi")echo 'selected="selected"';?>  value="Hariyanvi">Hariyanvi</option>
                           <option <?php if($data['mothertongue']=="Uriya")echo 'selected="selected"';?>  value="Uriya">Uriya</option>
                           <option <?php if($data['mothertongue']=="Kashmiri")echo 'selected="selected"';?>  value="Kashmiri">Kashmiri </option>
                           <option <?php if($data['mothertongue']=="English")echo 'selected="selected"';?>  value="English">English</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Languages known: <span>*</span></label>
                           <select class="form-control " name="updatelanguages">
                              <option <?php if($data['languages']=="Hindi")echo 'selected="selected"';?> value="Hindi"> Hindi</option>
                              <option <?php if($data['languages']=="Sindhi")echo 'selected="selected"';?> value="Sindhi"> Sindhi </option>
                              <option <?php if($data['languages']=="Assamese")echo 'selected="selected"';?> value="Assamese">Assamese</option>
                              <option <?php if($data['languages']=="Bengali")echo 'selected="selected"';?> value="Bengali">Bengali</option>
                              <option <?php if($data['languages']=="Marathi")echo 'selected="selected"';?> value="Marathi">Marathi</option>
                              <option <?php if($data['languages']=="Nepali")echo 'selected="selected"';?>  value="Nepali">Nepali </option>
                              <option <?php if($data['languages']=="Bihari")echo 'selected="selected"';?>  value="Bihari">Bihari </option>
                              <option <?php if($data['languages']=="Maithli")echo 'selected="selected"';?>  value="Maithli">Maithli</option>
                              <option <?php if($data['languages']=="Punjabi")echo 'selected="selected"';?>  value="Punjabi">Punjabi</option>
                              <option <?php if($data['languages']=="Tamil")echo 'selected="selected"';?>  value="Tamil">Tamil</option>
                              <option <?php if($data['languages']=="Kannar")echo 'selected="selected"';?>  value="Kannar">Kannar</option>
                              <option <?php if($data['languages']=="Malyalam")echo 'selected="selected"';?>  value="Malyalam">Malyalam</option>
                              <option <?php if($data['languages']=="Telgu")echo 'selected="selected"';?>  value="Telgu">Telgu</option>
                              <option <?php if($data['languages']=="Gujrati")echo 'selected="selected"';?>  value="Gujrati">Gujrat</option>
                              <option <?php if($data['languages']=="Rajasthani")echo 'selected="selected"';?>  value="Rajasthani">Rajasthani</option>
                              <option <?php if($data['languages']=="Hariyanvi")echo 'selected="selected"';?>  value="Hariyanvi">Hariyanvi</option>
                              <option <?php if($data['languages']=="Uriya")echo 'selected="selected"';?>  value="Uriya">Uriya</option>
                              <option <?php if($data['languages']=="Kashmiri")echo 'selected="selected"';?>  value="Kashmiri">Kashmiri </option>
                              <option <?php if($data['languages']=="English")echo 'selected="selected"';?>  value="English">English</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Marital Status : <span>*</span></label>
                           <select class="form-control " name="updatemarital">
                              <option <?php if($data['marital']=="NeverMarried")echo 'selected="selected"';?> value="NeverMarried">Never Married</option>
                              <option <?php if($data['marital']=="AwaitingDivorce")echo 'selected="selected"';?> value="AwaitingDivorce">Awaiting Divorce</option>
                              <option <?php if($data['marital']=="Divorced")echo 'selected="selected"';?> value="Divorced">Divorced </option>
                              <option <?php if($data['marital']=="Widowed")echo 'selected="selected"';?> value="Widowed">Widowed </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Resident : <span>*</span></label>
                           <select name="updateresident" class="form-control" required="required">
                              <option <?php if($data['resident']=="Citizen")echo 'selected="selected"';?> value="Citizen">Citizen </option>
                              <option <?php if($data['resident']=="Student_Visa")echo 'selected="selected"';?>value="Student_Visa">Student Visa </option>
                              <option <?php if($data['resident']=="Permanent_Resident")echo 'selected="selected"';?>value="Permanent_Resident">Permanent Resident </option>
                              <option <?php if($data['resident']=="Temporary_Visa")echo 'selected="selected"';?>value="Temporary_Visa">Temporary Visa </option>
                              <option <?php if($data['resident']=="Work_Permit")echo 'selected="selected"';?> value="Work_Permit">Work Permit </option>
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
                           <input type="text" name="updatecity" placeholder="City/village" class="form-control " value="<?php echo  $data['city']?>" >
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label> Pin Code: <span>*</span></label>
                           <input type="text" name="updatepincode" placeholder="Pin Code"pattern="[0-9]{6}" maxlength="6"class="form-control" value="<?php echo  $data['pincode']?>"  >
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label> Full address: <span>*</span></label>
                           <textarea name="updateaddress" placeholder="Full address" class="form-control"  ><?php echo  $data['address']?></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <label>Height</label>
                        <select name="updateheight" class="form-control " >
                           <option <?php if($data['height']=="4 foot 0 inch")echo 'selected="selected"';?> value="4 foot 0 inch"> 4 foot 0 inch </option>
                           <option <?php if($data['height']=="4 foot 1 inch")echo 'selected="selected"';?>  value="4 foot 1 inch"> 4 foot 1 inch </option>
                           <option <?php if($data['height']=="4 foot 2 inch")echo 'selected="selected"';?> value="4 foot 2 inch"> 4 foot 2 inch </option>
                           <option <?php if($data['height']=="4 foot 3 inch")echo 'selected="selected"';?>  value="4 foot 3 inch"> 4 foot 3 inch </option>
                           <option <?php if($data['height']=="4 foot 4 inch")echo 'selected="selected"';?> value="4 foot 4 inch"> 4 foot 4 inch </option>
                           <option <?php if($data['height']=="4 foot 5 inch")echo 'selected="selected"';?> value="4 foot 5 inch"> 4 foot 5 inch </option>
                           <option <?php if($data['height']=="4 foot 6 inch")echo 'selected="selected"';?> value="4 foot 6 inch"> 4 foot 6 inch </option>
                           <option <?php if($data['height']=="4 foot 7 inch")echo 'selected="selected"';?> value="4 foot 7 inch"> 4 foot 7 inch </option>
                           <option <?php if($data['height']=="4 foot 8 inch")echo 'selected="selected"';?> value="4 foot 8 inch"> 4 foot 8 inch </option>
                           <option <?php if($data['height']=="4 foot 9 inch")echo 'selected="selected"';?> value="4 foot 9 inch"> 4 foot 9 inch </option>
                           <option <?php if($data['height']=="4 foot 10 inch")echo 'selected="selected"';?> value="4 foot 10 inch"> 4 foot 10 inch </option>
                           <option <?php if($data['height']=="4 foot 11 inch")echo 'selected="selected"';?> value="4 foot 11 inch"> 4 foot 11 inch </option>
                           <option <?php if($data['height']=="4 foot 12 inch")echo 'selected="selected"';?> value="4 foot 12 inch"> 4 foot 12 inch </option>
                           <option <?php if($data['height']=="5 foot 0 inch")echo 'selected="selected"';?> value="5 foot 0 inch"> 5 foot 0 inch </option>
                           <option <?php if($data['height']=="5 foot 1 inch")echo 'selected="selected"';?> value="5 foot 1 inch"> 5 foot 1 inch </option>
                           <option <?php if($data['height']=="5 foot 2 inch")echo 'selected="selected"';?> value="5 foot 2 inch"> 5 foot 2 inch </option>
                           <option <?php if($data['height']=="5 foot 3 inch")echo 'selected="selected"';?> value="5 foot 3 inch"> 5 foot 3 inch </option>
                           <option <?php if($data['height']=="5 foot 4 inch")echo 'selected="selected"';?> value="5 foot 4 inch"> 5 foot 4 inch </option>
                           <option <?php if($data['height']=="5 foot 5 inch")echo 'selected="selected"';?> value="5 foot 5 inch"> 5 foot 5 inch </option>
                           <option <?php if($data['height']=="5 foot 6 inch")echo 'selected="selected"';?> value="5 foot 6 inch"> 5 foot 6 inch </option>
                           <option <?php if($data['height']=="5 foot 7 inch")echo 'selected="selected"';?> value="5 foot 7 inch"> 5 foot 7 inch </option>
                           <option <?php if($data['height']=="5 foot 8 inch")echo 'selected="selected"';?> value="5 foot 8 inch"> 5 foot 8 inch </option>
                           <option <?php if($data['height']=="5 foot 9 inch")echo 'selected="selected"';?> value="5 foot 9 inch"> 5 foot 9 inch </option>
                           <option <?php if($data['height']=="5 foot 10 inch")echo 'selected="selected"';?> value="5 foot 10 inch"> 5 foot 10 inch </option>
                           <option <?php if($data['height']=="5 foot 11 inch")echo 'selected="selected"';?> value="5 foot 11 inch"> 5 foot 11 inch </option>
                           <option <?php if($data['height']=="5 foot 12 inch")echo 'selected="selected"';?> value="5 foot 12 inch"> 5 foot 12 inch </option>
                           <option <?php if($data['height']=="6 foot 0 inch")echo 'selected="selected"';?> value="6 foot 0 inch"> 6 foot 0 inch </option>
                           <option <?php if($data['height']=="6 foot 1 inch")echo 'selected="selected"';?> value="6 foot 1 inch"> 6 foot 1 inch </option>
                           <option <?php if($data['height']=="6 foot 2 inch")echo 'selected="selected"';?> value="6 foot 2 inch"> 6 foot 2 inch </option>
                           <option <?php if($data['height']=="6 foot 3 inch")echo 'selected="selected"';?> value="6 foot 3 inch"> 6 foot 3 inch </option>
                           <option <?php if($data['height']=="6 foot 4 inch")echo 'selected="selected"';?> value="6 foot 4 inch"> 6 foot 4 inch </option>
                           <option <?php if($data['height']=="6 foot 5 inch")echo 'selected="selected"';?> value="6 foot 5 inch"> 6 foot 5 inch </option>
                           <option <?php if($data['height']=="6 foot 6 inch")echo 'selected="selected"';?> value="6 foot 6 inch"> 6 foot 6 inch </option>
                           <option <?php if($data['height']=="6 foot 7 inch")echo 'selected="selected"';?> value="6 foot 7 inch"> 6 foot 7 inch </option>
                           <option <?php if($data['height']=="6 foot 8 inch")echo 'selected="selected"';?> value="6 foot 8 inch"> 6 foot 8 inch </option>
                           <option <?php if($data['height']=="6 foot 9 inch")echo 'selected="selected"';?> value="6 foot 9 inch"> 6 foot 9 inch </option>
                           <option <?php if($data['height']=="6 foot 10 inch")echo 'selected="selected"';?> value="6 foot 10 inch"> 6 foot 10 inch </option>
                           <option <?php if($data['height']=="6 foot 11 inch")echo 'selected="selected"';?> value="6 foot 11 inch"> 6 foot 11 inch </option>
                           <option <?php if($data['height']=="6 foot 12 inch")echo 'selected="selected"';?> value="6 foot 12 inch"> 6 foot 12 inch </option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label>Weight Between</label>
                        <select name="updateweight" class="form-control" required="required" aria-required="true">
                           <option <?php if($data['weight']=="less>50kg")echo 'selected="selected"';?> value="less>50kg">less&gt;50kg </option>
                           <option  <?php if($data['weight']=="between_50kg-55kg")echo 'selected="selected"';?> value="between_50kg-55kg">between 50kg-55kg </option>
                           <option  <?php if($data['weight']=="between_55kg-60kg")echo 'selected="selected"';?> value="between_55kg-60kg">between 55kg-60kg </option>
                           <option  <?php if($data['weight']=="between_60kg-65kg")echo 'selected="selected"';?> value="between_60kg-65kg">between 60kg-65kg </option>
                           <option  <?php if($data['weight']=="between_65kg-70kg")echo 'selected="selected"';?> value="between_65kg-70kg">between 65kg-70kg </option>
                           <option  <?php if($data['weight']=="between_75kg-80kg")echo 'selected="selected"';?> value="between_75kg-80kg">between 75kg-80kg </option>
                           <option  <?php if($data['weight']=="between_80kg-85kg")echo 'selected="selected"';?> value="between_80kg-85kg">between 80kg-85kg </option>
                           <option  <?php if($data['weight']=="between_85kg-90kg")echo 'selected="selected"';?> value="between_85kg-90kg">between 85kg-90kg </option>
                           <option  <?php if($data['weight']=="more_than_90kg")echo 'selected="selected"';?> value="more_than_90kg">more than 90kg </option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label>Body Type</label>
                        <select name="updatebody" class="form-control " >
                           <option  <?php if($data['body']=="Slim")echo 'selected="selected"';?> value="Slim">Slim </option>
                           <option  <?php if($data['body']=="Average")echo 'selected="selected"';?> value="Average">Average </option>
                           <option  <?php if($data['body']=="Athletic")echo 'selected="selected"';?> value="Athletic">Athletic </option>
                           <option  <?php if($data['body']=="Fat")echo 'selected="selected"';?> value="Fat">Fat </option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <?php  $hobbys=json_decode($data['hobby']);
                           if(empty($hobbys)){
                             $hobbys=[];
                           } ?>
                        <div class="form-group">
                           <label>Hobby</label>
                           <br />
                           <select name="updatehobby[]" class="form-control" multiple="multiple"  id="newhobby">
                              <option <?php echo (in_array('Acting',$hobbys))? "selected" :"" ?> value="Acting">Acting</option>
                              <option <?php echo (in_array('Astronomy',$hobbys))? "selected" :"" ?> value="Astronomy">Astronomy</option>
                              <option  <?php echo (in_array('Astrology',$hobbys))? "selected" :"" ?>value="Astrology">Astrology</option>
                              <option <?php echo (in_array('Collectibles',$hobbys))? "selected" :"" ?> value="Collectibles">Collectibles</option>
                              <option <?php echo (in_array('Cooking',$hobbys))? "selected" :"" ?> value="Cooking">Cooking </option>
                              <option <?php echo (in_array('Cross-Words',$hobbys))? "selected" :"" ?> value="Cross-Words">Cross-Words</option>
                              <option <?php echo (in_array('Dancing',$hobbys))? "selected" :"" ?> value="Dancing">Dancing</option>
                              <option <?php echo (in_array('Film_Making',$hobbys))? "selected" :"" ?> value="Film_Making">Film Making</option>
                              <option <?php echo (in_array('Fishing',$hobbys))? "selected" :"" ?> value="Fishing">Fishing</option>
                              <option <?php echo (in_array('Gardening',$hobbys))? "selected" :"" ?> value="Gardening">Gardening</option>
                              <option <?php echo (in_array('Graphology',$hobbys))? "selected" :"" ?> value="Graphology">Graphology</option>
                              <option <?php echo (in_array('Nature',$hobbys))? "selected" :"" ?> value="Nature">Nature</option>
                              <option <?php echo (in_array('Neumerology',$hobbys))? "selected" :"" ?> value="Neumerology">Neumerology</option>
                              <option <?php echo (in_array('Painting',$hobbys))? "selected" :"" ?> value="Painting">Painting</option>
                              <option <?php echo (in_array('Pets',$hobbys))? "selected" :"" ?> value="Pets">Pets</option>
                              <option <?php echo (in_array('Palmistry',$hobbys))? "selected" :"" ?> value="Palmistry">Palmistry</option>
                              <option <?php echo (in_array('Photography',$hobbys))? "selected" :"" ?> value="Photography">Photography</option>
                              <option <?php echo (in_array('Playing_Musical_Instruments',$hobbys))? "selected" :"" ?> value="Playing_Musical_Instruments">Playing Musical Instruments</option>
                              <option <?php echo (in_array('Puzzle',$hobbys))? "selected" :"" ?> value="Puzzle">Puzzle</option>
                              <option <?php echo (in_array('Writing',$hobbys))? "selected" :"" ?> value="Writing">Writing</option>
                              <option <?php echo (in_array('Driving',$hobbys))? "selected" :"" ?> value="Driving">Driving</option>
                              <option <?php echo (in_array('No_Hobbies',$hobbys))? "selected" :"" ?> value="No_Hobbies">No Hobbies</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <?php  $interests=json_decode($data['interest']);
                           if(empty($interests)){
                             $interests=[];
                           } ?>
                        <div class="form-group">
                           <label>Interest </label>
                           <select name="updateinterest[]" class="form-control interest" multiple="multiple"  id="newinterest">
                              <option <?php echo (in_array('Adventure_Sports',$interests))? "selected" :"" ?> value="Adventure_Sports">Adventure Sports</option>
                              <option <?php echo (in_array('Book_Club',$interests))? "selected" :"" ?> value="Book_Club">Book Club</option>
                              <option  <?php echo (in_array('Computer_Game',$interests))? "selected" :"" ?> value="Computer_Game">Computer Game</option>
                              <option <?php echo (in_array('Health_&_Fitness',$interests))? "selected" :"" ?> value="Health_&_Fitness">Health & Fitness</option>
                              <option <?php echo (in_array('Internet',$interests))? "selected" :"" ?> value="Internet">Internet</option>
                              <option <?php echo (in_array('Learning_New_Language',$interests))? "selected" :"" ?> value="Learning_New_Language">Learning New Language</option>
                              <option <?php echo (in_array('Movie',$interests))? "selected" :"" ?> value="Movie">Movie</option>
                              <option <?php echo (in_array('Music',$interests))? "selected" :"" ?> value="Music">Music</option>
                              <option <?php echo (in_array('Politics',$interests))? "selected" :"" ?> value="Politics">Politics</option>
                              <option <?php echo (in_array('Reading',$interests))? "selected" :"" ?> value="Reading">Reading</option>
                              <option <?php echo (in_array('Social_Service',$interests))? "selected" :"" ?> value="Social_Service">Social Service</option>
                              <option <?php echo (in_array('Sports',$interests))? "selected" :"" ?> value="Sports">Sports</option>
                              <option <?php echo (in_array('Television',$interests))? "selected" :"" ?> value="Television">Television</option>
                              <option <?php echo (in_array('Acting',$interests))? "selected" :"" ?> value="Acting">Acting</option>
                              <option <?php echo (in_array('Theatre',$interests))? "selected" :"" ?> value="Theatre">Theatre</option>
                              <option <?php echo (in_array('Travel',$interests))? "selected" :"" ?> value="Travel">Travel</option>
                              <option <?php echo (in_array('Writing',$interests))? "selected" :"" ?> value="Writing">Writing</option>
                              <option <?php echo (in_array('Yoga',$interests))? "selected" :"" ?> value="Yoga">Yoga</option>
                              <option <?php echo (in_array('Cooking',$interests))? "selected" :"" ?> value="Cooking">Cooking</option>
                              <option <?php echo (in_array('Alternating_Healing',$interests))? "selected" :"" ?> value="Alternating_Healing">Alternating Healing/Medicine</option>
                              <option <?php echo (in_array('No_Interest',$interests))? "selected" :"" ?> value="No_Interest">No Interest</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Other Interests </label>
                           <input type="text" name="updateotherinterest" class="form-control" value="<?php echo  $data['otherinterest']?>">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Other Hobbies </label>
                           <input type="text" name="updateotherhobby" class="form-control"  value="<?php echo  $data['otherhobby']?>">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <label>Complexion</label>
                        <select name="updateskin" class="form-control skin" >
                           <option <?php if($data['skin']=="Very_Fair")echo 'selected="selected"';?> value="Very_Fair">Very Fair </option>
                           <option <?php if($data['skin']=="Fair")echo 'selected="selected"';?> value="Fair">Fair </option>
                           <option <?php if($data['skin']=="Whitish_Brown")echo 'selected="selected"';?> value="Whitish_Brown">Whitish Brown </option>
                           <option <?php if($data['skin']=="Whitish_Medium")echo 'selected="selected"';?> value="Whitish_Medium">Whitish Medium </option>
                           <option <?php if($data['skin']=="Whitish")echo 'selected="selected"';?> value="Whitish">Whitish </option>
                           <option <?php if($data['skin']=="Dark")echo 'selected="selected"';?> value="Dark">Dark </option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label>About</label>
                     <textarea name="updateabout" placeholder="About" class="form-control form-control-lg mb-3" rows="3"  ><?php echo  $data['about']?></textarea>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>Special Case</label>
                        <select name="updatedisability" class="form-control " >
                           <option <?php if($data['disability']=="None")echo 'selected="selected"';?> value="None">None </option>
                           <option <?php if($data['disability']=="Physically_Challenged_from_Birth")echo 'selected="selected"';?> value="Physically_Challenged_from_Birth">Physically Challenged from Birth </option>
                           <option <?php if($data['disability']=="Physically_Challenged_Due_to_Accident")echo 'selected="selected"';?> value="Physically_Challenged_Due_to_Accident">Physically Challenged Due to Accident </option>
                           <option <?php if($data['disability']=="Mentally_Challenged_from_birth")echo 'selected="selected"';?> value="Mentally_Challenged_from_birth">Mentally Challenged from birth </option>
                           <option <?php if($data['disability']=="Mentally_Challenged_Due_to_Accident")echo 'selected="selected"';?> value="Mentally_Challenged_Due_to_Accident">Mentally Challenged Due to Accident </option>
                           <option <?php if($data['disability']=="Physically_Abnormility_Affecting_from_Looks")echo 'selected="selected"';?> value="Physically_Abnormility_Affecting_from_Looks">Physically Abnormility Affecting from Looks</option>
                           <option <?php if($data['disability']=="Physically_Abnormility_Affecting_from_Bodily_Funtion")echo 'selected="selected"';?> value="Physically_Abnormility_Affecting_from_Bodily_Funtion">Physically Abnormility Affecting from Bodily Funtion</option>
                           <option <?php if($data['disability']=="Physically_&amp;_Mentally_Challenged")echo 'selected="selected"';?> value="Physically_&amp;_Mentally_Challenged">Physically &amp; Mentally Challenged</option>
                           <option <?php if($data['disability']=="HIV_Positive")echo 'selected="selected"';?> value="HIV_Positive">HIV Positive</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Blood Group</label>
                           <select name="updatebloodgroup" class="form-control">
                              <option <?php if($data['bloodgroup']=="(A+)")echo 'selected="selected"';?> value="(A+)">(A+)</option>
                              <option <?php if($data['bloodgroup']=="(A-)")echo 'selected="selected"';?> value="(A-)">(A-)</option>
                              <option <?php if($data['bloodgroup']=="(B+)")echo 'selected="selected"';?> value="(B+)">(B+)</option>
                              <option <?php if($data['bloodgroup']=="(B-)")echo 'selected="selected"';?> value="(B-)">(B-)</option>
                              <option <?php if($data['bloodgroup']=="(O+)")echo 'selected="selected"';?> value="(O+)"> (O+)</option>
                              <option <?php if($data['bloodgroup']=="(O-)")echo 'selected="selected"';?> value="(O-)"> (O-)</option>
                              <option <?php if($data['bloodgroup']=="(AB+)")echo 'selected="selected"';?> value="(AB+)"> (AB+)</option>
                              <option <?php if($data['bloodgroup']=="(AB-)")echo 'selected="selected"';?> value="(AB-)"> (AB-)</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <?php  $diets=json_decode($data['diet']);
                           if(empty($diets)){
                             $diets=[];
                           } ?>
                        <div class="form-group">
                           <label>Diet</label>
                           <select name="updatediet[]" class="form-control" multiple="multiple"  id="newdiet">
                              <option <?php echo (in_array('veg',$diets))? "selected" :"" ?> value="veg" >Veg </option>
                              <option <?php echo (in_array('non-veg',$diets))? "selected" :"" ?> value="non-veg">Non-veg </option>
                              <option <?php echo (in_array('Eggetarian',$diets))? "selected" :"" ?> value="Eggetarian">Eggetarian </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Smoke/Drink</label>
                           <select name="updatesmoke" class="form-control" required="required" >
                              <option  <?php if($data['smoke']=="No")echo 'selected="selected"';?> value="No">No </option>
                              <option <?php if($data['smoke']=="Yes")echo 'selected="selected"';?>  value="Yes">Yes </option>
                              <option <?php if($data['smoke']=="Occasionally")echo 'selected="selected"';?> value="Occasionally">Occasionally </option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <h4>Astrology Details</h4>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Birth place</label>
                           <input type="text" name="updatebirthplace" class="form-control"  value="<?php echo $data['birthplace']?>" >
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Gotra</label>
                           <input type="text" name="updategotra" class="form-control"  value="<?php echo $data['gotra']?>" >
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Mama gotra</label>
                           <input type="text" name="updatemamagotra" class="form-control"  value="<?php echo $data['mamagotra']?>">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Manglik</label>
                           <select name="updatemanglik" class="form-control">
                              <option <?php if($data['manglik']=="Yes")echo 'selected="selected"';?> value="Yes">Yes</option>
                              <option <?php if($data['manglik']=="No")echo 'selected="selected"';?> value="No">No</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Shani</label>
                           <select name="updateshani" class="form-control">
                              <option <?php if($data['shani']=="Yes")echo 'selected="selected"';?>value="Yes">Yes</option>
                              <option <?php if($data['shani']=="No")echo 'selected="selected"';?>value="No">No</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Moon sign</label>
                           <input type="text" name="updatemoonsign" class="form-control"  value="<?php echo $data['moonsign']?>">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-wizard-buttons mb-3">
                  <input type="submit" name="submit" value="Submit" class="btn btn-primary" id="send_form"> 
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div id="modals" class="modals">
   <span id="modal-close" class="modal-close">&times;</span>
   <img id="modal-content" class="modal-content">
   <div id="modal-caption" class="modal-caption"></div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" >
   // add eduction//
   
   $("#epinu").submit(function (e) {
    e.preventDefault();
    $.ajax({
        // url:'<?php echo base_url();?>Matrimony/educationinformations/<?php echo $data['id']; ?>',
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 0) {
                toastr.error(data["message"], "User not ragister");
                $("#epinu").trigger("reset");
            } else if (data["success"] == 2) {
                toastr.success(data["message"], " Successfully");
                $("#epinu").trigger("reset");
            }

            document.getElementById("epinu").reset();
        },
    });
});

   // end eduction//
   // statrt dsier //
   $("#editdepst").submit(function (e) {
    e.preventDefault();
    $.ajax({
        // url:'<?php echo base_url();?>Matrimony/diser/<?php echo $data['id']; ?>',
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,

        success: function (data) {
            console.log(data);
            if (data["error"] == 0) {
                toastr.error(data["message"], "User not ragister");
                $("#editdepst").trigger("reset");
            } else if (data["success"] == 2) {
                toastr.success(data["message"], " Successfully");
                $("#editdepst").trigger("reset");
            }

            document.getElementById("editdepst").reset();
        },
    });
});

        // end dsier //
$("#addimages").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: "<?php echo base_url();?>Matrimony/garllyimages",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#addimages").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Image Successfully Add");

                $("#addimage").modal("toggle");
                $("#addimages").trigger("reset");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

$(".userinfo").on("click", function () {
    var userid = $(this).data("id");
    console.log("id: " + userid);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo base_url();?>Matrimony/editgr/" + userid,

        success: function (data) {
            // var result = JSON.parse(data);
            console.log([data.id]);
            $("#updateimage").modal("show");
            // $('[name="id"]').val(data.id);
            $("#uid").val(data.id);
            $("#ueimage").attr("src", "<?php echo base_url()?>./" + data.gimages);
            $("#ueuim").val(data.gimages);
        },
    });
});
$("#euimages").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/updateimagess",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#euimages").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Image Successfully update");
                $("#updateimage").modal("toggle");
                $("#euimages").trigger("reset");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});
$(".eprogileimage").on("click", function () {
    var pid = $(this).data("id");
    console.log("id: " + pid);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo base_url();?>Matrimony/editprofile/" + pid,

        success: function (data) {
            // var result = JSON.parse(data);
            console.log([data.id]);
            $("#updateproimage").modal("show");
            // $('[name="id"]').val(data.id);
            $("#pid").val(data.id);
            $("#peimage").attr("src", "<?php echo base_url()?>./" + data.userprofileimage);
            $("#upeuim").val(data.userprofileimage);
        },
    });
});
$("#epuimages").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/updateproimagess",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#epuimages").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Image Successfully update");
                $("#updateproimage").modal("toggle");
                $("#epuimages").trigger("reset");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});
$(".coverpimage").on("click", function () {
    var pid = $(this).data("id");
    console.log("id: " + pid);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo base_url();?>Matrimony/editprofile/" + pid,

        success: function (data) {
            // var result = JSON.parse(data);
            console.log([data.id]);
            $("#euprogileimage").modal("show");
            // $('[name="id"]').val(data.id);
            $("#cpid").val(data.id);
            $("#cpeimage").attr("src", "<?php echo base_url()?>./" + data.coveimage);
            $("#cupeuim").val(data.coveimage);
        },
    });
});
$("#coverepuimages").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/updatecoverproimagess",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#epuimages").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "Image Successfully update");
                $("#euprogileimage").modal("toggle");
                $("#epuimages").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

$("#edufamliy").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/addfamliy",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#edufamliy").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], " Successfully ");
                $("#editfamliy").modal("toggle");
                $("#edufamliy").trigger("reset");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

   $("#upadeuserfamliy").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: "<?php echo base_url();?>Matrimony/updatefamliy",
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#upadeuserfamliy").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "update user Successfully ");
                $("#updatefamliynew").modal("toggle");
                $("#upadeuserfamliy").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

   $("#editaboutinfo").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url:'<?php echo base_url();?>Matrimony/updateabout/<?php echo $data['id']; ?>',
        type: "POST",
        dataType: "json",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
                $("#editaboutinfo").trigger("reset");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "update user Successfully ");
                $("#editAbout").modal("toggle");
                $("#editaboutinfo").trigger("reset");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});

   $("#contacthide").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/contacthide",
        type: "POST",
        dataType: "json",
        data: {
            contactid: $("#contactid").val(),
        },

        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "update Contact ");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});
$("#uncontacthide").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: "<?php echo base_url();?>Matrimony/uncontacthide",
        type: "POST",
        dataType: "json",
        data: {
            uncontactid: $("#uncontactid").val(),
        },

        success: function (data) {
            console.log(data);
            if (data["error"] == 1) {
                toastr.error(data["message"], "User alredy ragister");
            } else if (data["success"] == 1) {
                toastr.success(data["message"], "update Contact ");

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
    });
});
var modal = document.getElementById("modals");

var modalClose = document.getElementById("modal-close");
modalClose.addEventListener("click", function () {
    modal.style.display = "none";
});

// global handler
document.addEventListener("click", function (e) {
    if (e.target.className.indexOf("modal-target") !== -1) {
        var img = e.target;
        var modalImg = document.getElementById("modal-content");
        var captionText = document.getElementById("modal-caption");
        modal.style.display = "block";
        modalImg.src = img.src;
        captionText.innerHTML = img.alt;
    }
});

function ShowHideDiv() {
    var ddlPassport = document.getElementById("ddlPassport");
    var dvPassport = document.getElementById("dvPassport");
    dvPassport.style.display = ddlPassport.value == "Yes" ? "block" : "none";
}
function ShowHidenewDiv() {
    var ddlPassport = document.getElementById("Passport");
    var dvPassport = document.getElementById("dPassport");
    dvPassport.style.display = ddlPassport.value == "Yes" ? "block" : "none";
}

</script>
<script type="text/template" id="TS">
<div class="field-group row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <input type="hidden" value="brother" name="sibling_gen[]" />
                <label>Brother's </label>
                <select class="form-control" name="siblingstatus[]">
                    <option value="Younger">Younger</option>
                    <option value="Elder">Elder</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Brother's Name</label>
                <input type="text" name="siblingname[]" class="form-control" placeholder="Enter name" />
            </div>
            <div class="col-md-3">
                <label>Marital Status</label>
                <select name="bms[]" class="form-control">
                    <option value="Unmarried">Unmarried</option>
                    <option value="Married">Married</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Brother's Ocupation</label>
                <input type="text" name="bo[]" class="form-control" placeholder="Enter Ocupation" />
            </div>
        </div>
    </div>
    <input type="button" class="btn btn-danger delete" value="x" />
</div>

</script>
<script>
   $(function() {
     $(".TS .repeatable").repeatable({
         addTrigger: ".TS .add",
         deleteTrigger: ".TS .delete",
         template: "#TS",
         startWith: 1,
         max:4
     });
   });
</script>
<script type="text/template" id="st">
<div class="field-group row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <input type="hidden" value="sister" name="sibling_gen[]" />
                <label>Sister's </label>
                <select class="form-control" name="siblingstatus[]">
                    <option value="Younger">Younger</option>
                    <option value="Elder">Elder</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Sister's Name</label>
                <input type="text" name="siblingname[]" class="form-control" placeholder="Enter name" />
            </div>
            <div class="col-md-3">
                <label>Marital Status</label>
                <select name="bms[]" class="form-control">
                    <option value="Unmarried">Unmarried</option>
                    <option value="Married">Married</option>
                </select>
            </div>
            <div class="col-md-3">
                <label>Sister's Ocupation</label>
                <input type="text" name="bo[]" class="form-control" placeholder="Enter Ocupation" />
            </div>
        </div>
    </div>
    <input type="button" class="btn btn-danger delete" value="x" />
</div>

                  
                           
                       
           
</script>
<script>
   $(function() {
     $(".st .repeatable").repeatable({
         addTrigger: ".st .add",
         deleteTrigger: ".st .delete",
         template: "#st",
         startWith: 1,
         max:4
     });
   });
   
</script>
<script type="text/template" id="UPS">
    <div class="field-group row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>status</label>
                        <select class="form-control" name="sibling_statusupdate[]">
                            <option value="Younger">Younger</option>
                            <option value="Elder">Elder</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control" name="sibling_genupdate[]">
                            <option value="brother">brother</option>
                            <option value="sister">sister</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="sibling_nameupdate[]" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Marriage status</label>
                        <select class="form-control" name="sibling_marriageupdate[]">
                            <option value="Unmarried">Unmarried</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>oucption</label>
                        <input type="text" name="sibling_ocuupdate[]" class="form-control" />
                    </div>
                </div>
            </div>
            <input type="button" class="btn btn-danger delete" value="x" />
        </div>
    </div>    
</script>
<script>
   $(function() {
     $(".UPS .repeatable").repeatable({
         addTrigger: ".UPS .add",
         deleteTrigger: ".UPS .delete",
         template: "#UPS",
         startWith: 1,
         max:4
     });
   });
   
</script>