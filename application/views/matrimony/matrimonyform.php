<style>
    .error {
        color: red;
    }
    .was-validated .form-check-input:valid ~ .form-check-label,
    .form-check-input.is-valid ~ .form-check-label {
        color: #000;
    }
</style>

<section class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12 card">
                <!-- Form Wizard -->

                <!-- Form progress -->
                <div>
                    <div>
                        <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
                    </div>
                    <!-- Step 1 -->
                </div>

                <!-- Step 5 -->

                <!-- Form progress -->

                <!-- Form Step 1 -->

                <form enctype="multipart/form-data" id="formone" method="POST" class="was-validated">
                    <h4>Personal Information:</h4>

                    <div class="form-group">
                        <label>Profile created by: <span>*</span></label>
                        <select class="form-control" name="profilecreated" required>
                            <option value="Self">Self</option>
                            <option value="Mother">Mother</option>
                            <option value="Father">Father</option>
                            <option value="Sister">Sister</option>
                            <option value="Brother">Brother</option>
                            <option value="Friend">Friend</option>
                            <option value="Guadian">Guadian</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> (Bride/Groom) First Name: <span>*</span></label>
                                    <input type="text" name="FirstName" placeholder="First Name" class="form-control " required/ >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> (Bride/Groom) Last Name: <span>*</span></label>
                                    <input type="text" name="LastName" placeholder="Last Name" class="form-control " required/ >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender : <span>*</span></label>
                                    <select class="form-control" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label> Date of Birth: <span>*</span></label>
                                <input type="date" name="dob" placeholder="Date of Birth" class="form-control required" />
                            </div>
                            <div class="col-md-4">
                                <label> Mother Tongue: <span>*</span></label>
                                <select class="form-control" name="mothertongue">
                                    <option value="Hindi">Hindi</option>
                                    <option value="Sindhi">Sindhi </option>
                                    <option value="Assamese">Assamese</option>
                                    <option value="Bengali">Bengali</option>
                                    <option value="Marathi">Marathi</option>
                                    <option value="Nepali">Nepali </option>
                                    <option value="Bihari">Bihari </option>
                                    <option value="Maithli">Maithli</option>
                                    <option value="Punjabi">Punjabi</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Kannar">Kannar</option>
                                    <option value="Malyalam">Malyalam</option>
                                    <option value="Telgu">Telgu</option>
                                    <option value="Gujrati">Gujrat</option>
                                    <option value="Rajasthani">Rajasthani</option>
                                    <option value="Hariyanvi">Hariyanvi</option>
                                    <option value="Uriya">Uriya</option>
                                    <option value="Kashmiri">Kashmiri </option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Languages known: <span>*</span></label>
                                    <input list="languages" name="languages" class="form-control" />
                                    <datalist id="languages" name="languages">
                                        <option value="Hindi">Hindi</option>
                                        <option value="Sindhi">Sindhi </option>
                                        <option value="Assamese">Assamese</option>
                                        <option value="Bengali">Bengali</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Nepali">Nepali </option>
                                        <option value="Bihari">Bihari </option>
                                        <option value="Maithli">Maithli</option>
                                        <option value="Punjabi">Punjabi</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="Kannar">Kannar</option>
                                        <option value="Malyalam">Malyalam</option>
                                        <option value="Telgu">Telgu</option>
                                        <option value="Gujrati">Gujrati</option>
                                        <option value="Rajasthani">Rajasthani</option>
                                        <option value="Hariyanvi">Hariyanvi</option>
                                        <option value="Uriya">Uriya</option>
                                        <option value="Kashmiri">Kashmiri </option>
                                        <option value="English">English</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Marital Status : <span>*</span></label>
                                    <select class="form-control" name="marital">
                                        <option value="NeverMarried">Never Married</option>
                                        <option value="AwaitingDivorce">Awaiting Divorce</option>
                                        <option value="Divorced">Divorced </option>
                                        <option value="Widowed">Widowed </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Resident : <span>*</span></label>
                                    <select name="resident" class="form-control" required="required">
                                        <option value="Citizen">Citizen </option>
                                        <option value="Student_Visa">Student Visa </option>
                                        <option value="Permanent_Resident">Permanent Resident </option>
                                        <option value="Temporary_Visa">Temporary Visa </option>
                                        <option value="Work_Permit">Work Permit </option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> City/village: <span>*</span></label>
                                    <input type="text" name="city" placeholder="City/village" class="form-control " required/ >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Pin Code: <span>*</span></label>
                                    <input type="text" name="pincode" placeholder="Pin Code"pattern="[0-9]{6}" maxlength="6"class="form-control" required/ >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Full address: <span>*</span></label>
                                    <textarea name="address" placeholder="Full address" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Height</label>
                                <select name="height" class="form-control">
                                    <option value="4 foot 0 inch"> 4 foot 0 inch </option>
                                    <option value="4 foot 1 inch"> 4 foot 1 inch </option>
                                    <option value="4 foot 2 inch"> 4 foot 2 inch </option>
                                    <option value="4 foot 3 inch"> 4 foot 3 inch </option>
                                    <option value="4 foot 4 inch"> 4 foot 4 inch </option>
                                    <option value="4 foot 5 inch"> 4 foot 5 inch </option>
                                    <option value="4 foot 6 inch"> 4 foot 6 inch </option>
                                    <option value="4 foot 7 inch"> 4 foot 7 inch </option>
                                    <option value="4 foot 8 inch"> 4 foot 8 inch </option>
                                    <option value="4 foot 9 inch"> 4 foot 9 inch </option>
                                    <option value="4 foot 10 inch"> 4 foot 10 inch </option>
                                    <option value="4 foot 11 inch"> 4 foot 11 inch </option>
                                    <option value="4 foot 12 inch"> 4 foot 12 inch </option>
                                    <option value="5 foot 0 inch"> 5 foot 0 inch </option>
                                    <option value="5 foot 1 inch"> 5 foot 1 inch </option>
                                    <option value="5 foot 2 inch"> 5 foot 2 inch </option>
                                    <option value="5 foot 3 inch"> 5 foot 3 inch </option>
                                    <option value="5 foot 4 inch"> 5 foot 4 inch </option>
                                    <option value="5 foot 5 inch"> 5 foot 5 inch </option>
                                    <option value="5 foot 6 inch"> 5 foot 6 inch </option>
                                    <option value="5 foot 7 inch"> 5 foot 7 inch </option>
                                    <option value="5 foot 8 inch"> 5 foot 8 inch </option>
                                    <option value="5 foot 9 inch"> 5 foot 9 inch </option>
                                    <option value="5 foot 10 inch"> 5 foot 10 inch </option>
                                    <option value="5 foot 11 inch"> 5 foot 11 inch </option>
                                    <option value="5 foot 12 inch"> 5 foot 12 inch </option>
                                    <option value="6 foot 0 inch"> 6 foot 0 inch </option>
                                    <option value="6 foot 1 inch"> 6 foot 1 inch </option>
                                    <option value="6 foot 2 inch"> 6 foot 2 inch </option>
                                    <option value="6 foot 3 inch"> 6 foot 3 inch </option>
                                    <option value="6 foot 4 inch"> 6 foot 4 inch </option>
                                    <option value="6 foot 5 inch"> 6 foot 5 inch </option>
                                    <option value="6 foot 6 inch"> 6 foot 6 inch </option>
                                    <option value="6 foot 7 inch"> 6 foot 7 inch </option>
                                    <option value="6 foot 8 inch"> 6 foot 8 inch </option>
                                    <option value="6 foot 9 inch"> 6 foot 9 inch </option>
                                    <option value="6 foot 10 inch"> 6 foot 10 inch </option>
                                    <option value="6 foot 11 inch"> 6 foot 11 inch </option>
                                    <option value="6 foot 12 inch"> 6 foot 12 inch </option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Weight Between</label>
                                <select name="weight" class="form-control" required="required" aria-required="true">
                                    <option value="less>50kg">less&gt;50kg </option>
                                    <option value="between_50kg-55kg">between 50kg-55kg </option>
                                    <option value="between_55kg-60kg">between 55kg-60kg </option>
                                    <option value="between_60kg-65kg">between 60kg-65kg </option>
                                    <option value="between_65kg-70kg">between 65kg-70kg </option>
                                    <option value="between_75kg-80kg">between 75kg-80kg </option>
                                    <option value="between_80kg-85kg">between 80kg-85kg </option>
                                    <option value="between_85kg-90kg">between 85kg-90kg </option>
                                    <option value="more_than_90kg">more than 90kg </option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Body Type</label>
                                <select name="body" class="form-control">
                                    <option value="Slim">Slim </option>
                                    <option value="Average">Average </option>
                                    <option value="Athletic">Athletic </option>
                                    <option value="Fat">Fat </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Complexion</label>
                                <select name="skin" class="form-control skin">
                                    <option value="Very_Fair">Very Fair </option>
                                    <option value="Fair">Fair </option>
                                    <option value="Whitish_Brown">Whitish Brown </option>
                                    <option value="Whitish_Medium">Whitish Medium </option>
                                    <option value="Whitish">Whitish </option>
                                    <option value="Dark">Dark </option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Special Case</label>
                                <select name="disability" class="form-control">
                                    <option value="None">None </option>
                                    <option value="Physically_Challenged_from_Birth">Physically Challenged from Birth </option>
                                    <option value="Physically_Challenged_Due_to_Accident">Physically Challenged Due to Accident </option>
                                    <option value="Mentally_Challenged_from_birth">Mentally Challenged from birth </option>
                                    <option value="Mentally_Challenged_Due_to_Accident">Mentally Challenged Due to Accident </option>
                                    <option value="Physically_Abnormility_Affecting_from_Looks">Physically Abnormility Affecting from Looks</option>
                                    <option value="Physically_Abnormility_Affecting_from_Bodily_Funtion">Physically Abnormility Affecting from Bodily Funtion</option>
                                    <option value="Physically_&amp;_Mentally_Challenged">Physically &amp; Mentally Challenged</option>
                                    <option value="HIV_Positive">HIV Positive</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hobby</label>
                                    <br />
                                    <select name="hobby[]" class="form-control" multiple="multiple" id="hobby">
                                        <option value="Acting">Acting</option>
                                        <option value="Astronomy">Astronomy</option>
                                        <option value="Astrology">Astrology</option>
                                        <option value="Collectibles">Collectibles</option>
                                        <option value="Cooking">Cooking </option>
                                        <option value="Cross-Words">Cross-Words</option>
                                        <option value="Dancing">Dancing</option>
                                        <option value="Film_Making">Film Making</option>
                                        <option value="Fishing">Fishing</option>
                                        <option value="Gardening">Gardening</option>
                                        <option value="Graphology">Graphology</option>
                                        <option value="Nature">Nature</option>
                                        <option value="Neumerology">Neumerology</option>
                                        <option value="Painting">Painting</option>
                                        <option value="Pets">Pets</option>
                                        <option value="Palmistry">Palmistry</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Playing_Musical_Instruments">Playing Musical Instruments</option>
                                        <option value="Puzzle">Puzzle</option>
                                        <option value="Writing">Writing</option>
                                        <option value="Driving">Driving</option>
                                        <option value="No_Hobbies">No Hobbies</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Other Hobbies </label>
                                    <input type="text" name="otherhobby" class="form-control" required/ >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Interest </label>
                                    <select name="interest[]" class="form-control interest" multiple="multiple" id="interest">
                                        <option value="Adventure_Sports">Adventure Sports</option>
                                        <option value="Book_Club">Book Club</option>
                                        <option value="Computer_Game">Computer Game</option>
                                        <option value="Health_&_Fitness">Health & Fitness</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Learning_New_Language">Learning New Language</option>
                                        <option value="Movie">Movie</option>
                                        <option value="Music">Music</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Reading">Reading</option>
                                        <option value="Social_Service">Social Service</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Television">Television</option>
                                        <option value="Acting">Acting</option>
                                        <option value="Theatre">Theatre</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Writing">Writing</option>
                                        <option value="Yoga">Yoga</option>
                                        <option value="Cooking">Cooking</option>
                                        <option value="Alternating_Healing">Alternating Healing/Medicine</option>
                                        <option value="No_Interest">No Interest</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Other Interests </label>
                                    <input type="text" name="otherinterest" class="form-control" required/ >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Diet</label>
                                    <select name="diet[]" class="form-control" multiple="multiple" id="diet">
                                        <option value="veg" selected="selected">Veg </option>
                                        <option value="non-veg">Non-veg </option>
                                        <option value="Eggetarian">Eggetarian </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Smoke/Drink</label>
                                    <select name="smoke" class="form-control" required="required">
                                        <option value="No">No </option>
                                        <option value="Yes">Yes </option>
                                        <option value="Occasionally">Occasionally </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Belongs To</label>
                                    <select class="form-control" name="belongs">
                                        <option value="Kshtriya-Rathore/Rathod">Kshtriya Rathore/Rathod</option>
                                        <option value="Kshtriya-Teli-Rathore/Rathod">Kshtriya Teli Rathore/Rathod</option>
                                        <option value="Sahu-Rathore/Rathod">Sahu Rathore/Rathod</option>
                                        <option value="Sahu-Teli-Rathore/Rathod">Sahu Teli Rathore/Rathod</option>
                                        <option value="Banjara-Rathore/Rathod">Banjara Rathore/Rathod</option>
                                        <option value="Banjara-Teli-Rathore/Rathod">Banjara Teli Rathore/Rathod</option>

                                        <option value="Other">Other </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>About</label>
                            <textarea name="about" placeholder="About" class="form-control form-control-lg mb-3" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Religion </label>
                                    <select class="form-control" name="religion">
                                        <option value="Hindu"> Hindu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bride/Groom Profile Image</label>

                                    <input type="file" name="proimage" class="form-control required" multiple="multiple" required/ >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bride/Groom Aadhar Image</label>

                                    <input type="file" name="adharimage" class="form-control required" multiple="multiple" required/ >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bride/Groom Aadhar Number</label>
                                    <input type="number" name="adharnumber" class="form-control " pattern="[0-9]{12}"maxlength="12" required/ >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select name="bloodgroup" class="form-control">
                                        <option value="(A+)">A RhD positive(A+)</option>
                                        <option value="(A-)">A RhD negative(A-)</option>
                                        <option value="(B+)">B RhD positive(B+)</option>
                                        <option value="(B-)">B RhD negative(B-)</option>
                                        <option value="(O+)">O RhD positive (O+)</option>
                                        <option value="(O-)">O RhD negative (O-)</option>
                                        <option value="(AB+)">AB RhD positive (AB+)</option>
                                        <option value="(AB-)">AB RhD negative (AB-)</option>
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
                                    <label>Birth time</label>
                                    <input type="time" name="birthtime" class="form-control" required/ >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Birth place</label>
                                    <input type="text" name="birthplace" class="form-control" required/ >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gotra</label>
                                    <input type="text" name="gotra" class="form-control" required/ >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mama gotra</label>
                                    <input type="text" name="mamagotra" class="form-control" required/ >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Manglik</label>
                                    <select name="manglik" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Shani</label>
                                    <select name="shani" class="form-control">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Moon sign</label>
                                    <input type="text" name="moonsign" class="form-control" required/ >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-wizard-buttons mb-3">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" id="send_form" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo base_url('assets/js/drop.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>

<script type="text/javascript">
    $("#formone").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "<?php echo base_url();?>Matrimony/fristfrom",
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
                    $("#formone").trigger("reset");
                } else if (data["success"] == 1) {
                    toastr.success(data["message"], "User registered Successfully");
                    $("#formone").trigger("reset");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }
            },
        });
    });
</script>
