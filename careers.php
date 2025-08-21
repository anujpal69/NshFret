<?php $title = 'Carrers';
$headerBg = '';
include_once 'public/common/header.php' ?>

<section class="nsh-home-wrapper nsh-sec nsh-about-wrapper" style="background-image: url('./public/assets/images/nsh-careers/career-form.jpg');">
    <div class="container-fluid container-lg">
        <div class="nsh-home-content text-center">
            <h1 class="title mb-0">CAREERS AT NSH</h1>
            <h2 class="title"><strong>A World Of opportunities</strong></h2>
           
        </div>
    </div>
</section>

<section class="breadcrumb_line">
    <div class="container">
        <ul>
            <li><a href="./index">Home</a></li>
            <li><i class="fa-solid fa-angle-right"></i></li>
            <li>Careers</li>
        </ul>
    </div>
</section>




<section class="container-fluid carrer-contact-form">
    <div class="container-solution">
        <form>
            <h4>All fields are manditory.</h4>
            <hr>
            <div class="row gx-5 gy-4 mt-2">
                <div class="col-md-6">
                    <div class="input-field"><select name="designation" id="" class="form-control">
                            <option value="" disabled="" selected="">Select Designation* </option>
                            <option value="engineer">Engineer</option>
                            <option value="1">E</option>
                        </select></div>
                </div>
                <div class="col-md-6">
                    <div class="input-field"><select name="qualification" class="form-control">
                            <option disabled="" value="" selected="">Qualifications*</option>
                            <option value="btech">B.Tech</option>
                            <option value="bca">BCA</option>
                        </select></div>
                </div>
                <div class="col-md-6">
                    <div class="input-field"><input type="text" class="form-control" id="" placeholder="First Name*" name="firstName" value=""></div>
                </div>
                <div class="col-md-6">
                    <div class="input-field"><input type="text" class="form-control" id="" placeholder="Last Name" name="lastName" value=""></div>
                </div>
                <div class="col-md-6">
                    <div class="input-field"><input type="email" class="form-control" id="" placeholder="Email Id*" name="email" value=""></div>
                </div>
                <div class="col-md-6">
                    <div class="input-field"><input type="text" class="form-control" placeholder="Contact No.*" name="contactNo" value=""></div>
                </div>
                <div class="col-md-12">
                    <div class="input-field"><textarea class="form-control" name="reason" rows="1" placeholder="Why are you applying this job?*" style="height: 54px;"></textarea>
                        <div class="text-end"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field upload-resume"><label for="resume">Upload Resume</label><input type="file" id="resume" class="d-none" name="resume"></div>
                </div>
                <div class="col-md-6 forn-btn-submit"><div class="text-center">
                    <a href="javascript:Void(0)" class="btn btn-default all-solutions-btn _btn">
                        Submit
                    </a>
                </div><div class="text-center">
                    <a href="javascript:Void(0)" class="btn btn-default all-solutions-btn _btn">
                         Clear form
                    </a>
                </div></div>
            </div>
        </form>
    </div>
</section>


<?php include_once 'public/common/footer.php' ?>
<script src="public/assets/js/tabs.js"></script>
<script src="public/assets/js/accordion.js"></script>