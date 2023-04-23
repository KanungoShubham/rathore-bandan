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
               ?>"   alt="" class="user-profile modal-target " />
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
                  <?php  if($fditslis!=NUll) { 
                     if($fditslis["hide"]==1){
                     ?>
                  <div class="row">
                     <div class="col-12">
                        <div class="social-info">
                           <i class="fas fas fa-mobile mr-2"></i>
                           <span><?php 
                              $famliycont =$fditslis; 
                              if ($famliycont) {
                              $cont= $fditslis["fcontactnumber"];             
                              echo substr($cont, 0, 4) . "****" . substr($cont, 7, 4);  
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
                              $wt=$fditslis["whatsapp_number"];
                              echo  substr($wt, 0, 4) . "****" . substr($wt, 7, 4);  
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
                              $em=$fditslis["emailid"]  ;
                              echo substr($em, 0, 4) . "****" . substr($em, 7, 4);   
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
                              $ad=$fditslis["address"]  ;
                              echo  substr($ad, 0, 4) . "****" . substr($ad, 7, 4);  
                              } else {
                              echo 'please fill out the form first';
                              }  ?></span>
                        </div>
                     </div>
                  </div>
                  <?php }  else {?>
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
                  <?php } } else{?>
                  <h4>No Record Found</h4>
                  <?php } ?>
               </div>
            </div>
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
                              <br>
                              <div class="col-md-12 mt-5 my-5">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="card famliyinfocard" >
                                          <img  src="<?php $imgs = $fditslis; 
                                             if ($imgs) {
                                             echo base_url().''.$fditslis['grandfatherimage'];
                                             } else {
                                             echo base_url().'assets/usercover/rathore.png';
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
                                             echo base_url().'assets/usercover/rathore.png';
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
                                             echo base_url().'assets/usercover/rathore.png';
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
                                             echo base_url().'assets/usercover/rathore.png';
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
                                             echo 'please fill out the form first      ';
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
                                 echo 'please fill out the form first';
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
                                             <!--  <i class="fa fa-camera userinfo" aria-hidden="true" data-toggle="modal" data-target="#updateimage" data-id="<?php $rows->id ?>"></i> -->
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

<div id="modals" class="modals">
<span id="modal-close" class="modal-close">&times;</span>
<img id="modal-content" class="modal-content">
<div id="modal-caption" class="modal-caption"></div>
</div>

<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script>

var modal = document.getElementById('modals');

var modalClose = document.getElementById('modal-close');
modalClose.addEventListener('click', function() { 
modal.style.display = "none";
});

// global handler
document.addEventListener('click', function (e) { 
if (e.target.className.indexOf('modal-target') !== -1) {
var img = e.target;
var modalImg = document.getElementById("modal-content");
var captionText = document.getElementById("modal-caption");
modal.style.display = "block";
modalImg.src = img.src;
captionText.innerHTML = img.alt;
}
});
</script>