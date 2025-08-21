<?php $title = 'Queries qoute';
$headerBg = 'header_bg';
include_once 'public/common/header.php'
?>
<section class="top-header-space"></section>

<section class="connect-form-seaction">
    <div class="col-xl-8 col-md-10 connect-form-inputs offset-xl-2 offset-md-1">
        <div class="row d-flex justify-content-center fs28 pb-5">
            <h4 class="borderLine text-center">Quick Quote</h4>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="connect-form-gp">
                    <label for="port_looding" class="pb-1">Port of loading</label>
                    <input type="text" id="port_looding" name="port_looding" placeholder="Enter port of loading">
                </div>
            </div>
            <div class="col-md-6">
                <div class="connect-form-gp">
                    <label for="port_departure" class="pb-1">Port of departure</label>
                    <input type="text" id="port_departure" name="port_departure" placeholder="Enter port of departure">
                </div>
            </div>
        </div>
        <div class="d-flex gap-2">
        <div class="form-check mb-3">
                <input class="form-check-input" type="radio" checked value="fcl" name="LCLFCL" id="FCL"
                    onclick="toggleLCLFCL()">
                <label class="form-check-label" for="FCL">
                    <div class="radio-circle"></div>FCL
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" value="lcl"  name="LCLFCL" id="LCL"
                    onclick="toggleLCLFCL()">
                <label class="form-check-label" for="LCL">
                    <div class="radio-circle"></div>LCL
                </label>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" value="air-track"  name="LCLFCL" id="air_tracking"
                    onclick="toggleLCLFCL()">
                <label class="form-check-label" for="air_tracking">
                    <div class="radio-circle"></div>Air Tracking
                </label>
            </div>
        
        </div>

        <div class="row">
            <!-- lcl -->
            <div class="col-md-6" id="fclSection">
                <div class="connect-form-gp">
                    <label for="fcl" class="pb-1">Choose</label>
                    <select id="fcl" name="fcl" class="form-control">
                        <option value="48hp">4HQ</option>
                        <option value="20gp">20GP</option>
                        <option value="reefer">Reefer</option>
                    </select>
                </div>
            </div>
            <!-- fcl -->
            <div class="col-md-6 lclSection">
                <div class="connect-form-gp">
                    <label for="weight" class="pb-1">Weight*</label>
                    <input id="weight" type="text" placeholder="Enter weight">
                </div>
            </div>
            <div class="col-md-6 lclSection">
                <div class="connect-form-gp">
                    <label for="cbm" class="pb-1">CBM*</label>
                    <input id="cbm" type="text" placeholder="Enter CBM">
                </div>
            </div>
            <div class="col-md-6 lclSection">
                <div class="connect-form-gp">
                    <label for="commodity" class="pb-1">Commodity*</label>
                    <input type="text" id="Commodity" placeholder="Enter commodity">
                </div>
            </div>

            <!-- fcl -->
            <div class="col-md-6">
                <div class="connect-form-gp">
                    <label for="name" class="pb-1">Name</label>
                    <input id="name" type="text" placeholder="Enter name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="connect-form-gp">

                    <label for="phone" class="pb-1">Phone</label>
                    <input id="phone" type="text" placeholder="Enter phone">
                </div>
            </div>

            <div class="col-md-6">
                <div class="connect-form-gp">
                    <label for="email" class="pb-1">Email</label>
                    <input type="email" id="email" placeholder="Enter email">
                </div>
            </div>

            <div class="col-md-12">
                <div class="connect-form-gp">
                <label for="message" class="pb-1">Message</label>
                    <div class="form-floating">
                        <textarea id="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            rows="5"></textarea>
                        <label for="floatingTextarea2">Message</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <a href="javascript:void(0)"  class="btn btn-default all-solutions-btn _btn">
                    <i class="fa-solid fa-angle-right"></i> Send Now
                </a>
            </div>
        </div>
    </div>
    </div>

</section>

<section class="connect-information">
    <div class="connect-info-details">
        <div class="connect-info-column connect-partition">
            <span><img src="./public/assets/images/icons/call.png" alt=""></span>
            <h6>CALL US</h6>
            <span><a href="tel:9899122363">+91 9899122363</a></span>
            <!-- <span><a href="tel:0120 4380794">+ 91 0120 4380794</a></span> -->

        </div>
        <div class="connect-info-column connect-partition">
            <span><img src="./public/assets/images/icons/email.png" alt=""></span>
            <h6>MAIL US</h6>
            <span><a href="mailto:info@nshfret.com">info@nshfret.com</a></span>
            <span><a href="mailto:customer.care@nshfret.com">customer.care@nshfret.com</a></span>

        </div>
        <div class="connect-info-column ">
            <span><img src="./public/assets/images/icons/location.png" alt=""></span>
            <h6>ADDRESS</h6>
            <a href="https://maps.app.goo.gl/2hyz9w9K8LFjbwDn8">
                <span>A-228, 2nd Floor, Pacific Business Park, 37/1
Sahibabad Industrial Area,
Site-IV, Ghaziabad (U.P.)-201010</span>
            </a>
        </div>
    </div>
</section>

<section class="latest-news-search inner-news-top">
    <div class="container-fluid">
        <div class="inner-latest-news-area">

            <div class="inner-news-social">
                <ul>
                    <li><a href="https://www.facebook.com/profile?id=100077124921179&mibextid=ZbWKwL" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/nshfretindia?igsh=cDkyczNtODI2cngw" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)" target="_blank"><i class="fa-brands fa-weixin"></i></a></li>
                </ul>
            </div>


        </div>
    </div>

</section>

<section class="connect-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.2011374263657!2d77.32434387409528!3d28.653695583121905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfaf0b3a11937%3A0xaade41a2d38fb0fd!2sPacific%20Business%20Park!5e0!3m2!1sen!2sin!4v1747724849737!5m2!1sen!2sin"
        width="100%" height="350" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include_once 'public/common/footer.php' ?>
<script>
function toggleLCLFCL() {
    var fclSection = document.getElementById('fclSection');
    var lclSection = document.querySelectorAll('.lclSection');

    var lclRadio = document.getElementById('LCL').checked;
    var fclRadio = document.getElementById('FCL').checked;
    var airRadio = document.getElementById('air_tracking').checked;

    if (fclRadio) {
        fclSection.style.display = "block";
        lclSection.forEach((el)=>{
            el.style.display = "none";
        })
    } else if (lclRadio || airRadio) {
        fclSection.style.display = "none";
        lclSection.forEach((el)=>{
            el.style.display = "block";
        })
    }
}
toggleLCLFCL();
</script>