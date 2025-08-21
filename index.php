    <?php
    $title = 'NSH Web';
    $headerBg = '';
    include_once 'public/common/header.php'
    ?>

    <section class="nsh-home-wrapper nsh-sec">
        <div class="nsh-home-video">
            <video autoplay playsinline loop muted poster="./public/assets/images/header/video-poster.jpg">
                <source src="public/assets/images/header/home-slide.mp4">
            </video>
        </div>
        <div class="container-fluid container-lg">
            <div class="nsh-home-content text-center ">
                <h1 class="title"><strong> NSH FREIGHTERS PVT LTD.</strong></h>
                    <h2 class="mt-2 mb-0">Where Innovation Meets Logistics</h2>
                    <button class="mt-4 btn btn-default all-solutions-btn _btn" data-bs-toggle="modal"
                        data-bs-target="#trackModal">Track your shipment</button>
                    <!-- <button class="mt-4 btn btn-default all-solutions-btn _btn" onclick="openFullScreen()">Track your shipment</button> -->
            </div>
        </div>
    </section>

    <section class="nsh-sec nsh-our-solutions">
        <div class="container-fluid">
            <div class="container-solution nshpy">
                <div class="solution-header text-center">
                    <h2 class="title fw800 borderLine">ABOUT US</h2>
                    <p>NSH Freighters Pvt. Ltd. is your trusted partner for all international shipping needs, offering
                        unparalleled expertise and reliability. Our company has experienced dynamic growth over the
                        years,
                        expanding our range of logistical services to meet the demands of a growing roster of satisfied
                        clients worldwide. We are dedicated to our goal of delivering the very best logistical
                        solutions,
                        enabling our customers to manage their supply chains with a high degree of efficiency and
                        quality.
                        With a strong commitment to innovation and customer satisfaction, we continually strive to
                        enhance
                        our services, ensuring seamless, end-to-end support for all your global shipping requirements.
                        At
                        NSH Freighters Pvt. Ltd., your success is our priority.
                    </p>
                    <div class="text-center">
                        <a href="./about.php" class="btn btn-default all-solutions-btn _btn">
                            <i class="fa-solid fa-angle-right"></i> Learn more
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <section class="nsh-sec nsh-our-solutions">
        <div class="container-fluid">
            <div class="container-solution nshpy">
                <div class="solution-header text-center">
                    <h2 class="title fw800 borderLine text-center">OUR SERVICES</h2>
                </div>
                <div class="solution-block-bg" id="our_solutions-container">
                    <div class="solution-block-row">
                        <div class="solution-block-col"
                            onmouseenter="imageChnage('./public/assets/images/nsh-home/services/shipping-solution.jpg')">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <img src="public/assets/images/icons/ship.png" alt="shiping solutions">
                                </div>
                                <h3 class="_card-title fw800 fs17"><a href="./shippingsolution.php"
                                        class="_white">Shipping
                                        Solutions</a></h3>
                                <ul>
                                    <li> <a href="./fcl-lcl.php"><span><i class="fa-solid fa-angle-right"></i></span>
                                            <span> FCL/LCL</span></a></li>
                                    <li> <a href="./dry-cargo.php"><span><i class="fa-solid fa-angle-right"></i></span>
                                            <span>Dry
                                                Cargo</span></a></li>
                                    <li> <a href="./reefer.php"><span><i class="fa-solid fa-angle-right"></i></span>
                                            <span>Reefer
                                                Cargo</span></a></li>
                                    <li> <a href="./haz-cargo.php"><span><i class="fa-solid fa-angle-right"></i></span>
                                            <span>Haz
                                                Cargo</span></a></li>

                                    <li> <a href="./bulk-cargo.php"><span><i class="fa-solid fa-angle-right"></i></span>
                                            <span>Bulk cargo</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="solution-block-col"
                            onmouseenter="imageChnage('./public/assets/images/nsh-home/services/logistic.png')">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <img src="public/assets/images/icons/solution/logistics.png"
                                        alt="shiping solutions">
                                </div>
                                <h3 class="_card-title fw800 fs17"><a href="./transportation.php" class="_white">Our
                                        logistic solutions</a></h3>
                                <ul>
                                    <li> <a href="./transportation.php"><span><i
                                                    class="fa-solid fa-angle-right"></i></span>
                                            <span>Inland/Local transportation
                                            </span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="solution-block-col"
                            onmouseenter="imageChnage('./public/assets/images/nsh-home/services/clearance.png')">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <img src="public/assets/images/icons/solution/custom-clearance.png"
                                        alt="shiping solutions">
                                </div>
                                <h3 class="_card-title fw800 fs17"><a href="./custom-clearence.php"
                                        class="_white">Custom
                                        clearance</a></h3>
                            </div>
                        </div>
                        <div class="solution-block-col"
                            onmouseenter="imageChnage('public/assets/images/nsh-home/services/legal.jpg')">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <img src="public/assets/images/icons/solution/legal-documentation.png"
                                        alt="shiping solutions">
                                </div>
                                <h3 class="_card-title fw800 fs17"><a href="./legal-documantation.php"
                                        class="_white">Legal
                                        documentation</a></h3>

                            </div>
                        </div>
                        <div class="solution-block-col"
                            onmouseenter="imageChnage('public/assets/images/nsh-home/services/air-cargo.png')">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <img src="public/assets/images/icons/airplane.png" alt="shiping solutions">
                                </div>
                                <h3 class="_card-title fw800 fs17"><a href="./air-cargo.php" class="_white">Air
                                        cargo</a>
                                </h3>

                            </div>
                        </div>
                        <div class="solution-block-col"
                            onmouseenter="imageChnage('public/assets/images/nsh-home/services/international.jpg')">
                            <div class="solution-card">
                                <div class="solution-img">
                                    <img src="public/assets/images/icons/solution/international.png"
                                        alt="shiping solutions">
                                </div>
                                <h3 class="_card-title fw800 fs17"><a href="./international-courier.php"
                                        class="_white">International
                                        courier</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="nsh-sec nsh-biofuel-solutions  banner-solutions container_992">
        <div class="container-fluid container-lg">
            <div class="container-solution nshpy">
                <div class="cargo-owl owl-carousel owl-theme">

                    <div class="item"><img src="public/assets/images/nsh-home/solutions-1.png" alt=""></div>
                    <div class="item"><img src="public/assets/images/nsh-home/services-banner2.png" alt=""></div>
                    <div class="item"><img src="public/assets/images/nsh-home/services-banner.png" alt=""></div>
                    <div class="item"><img src="public/assets/images/nsh-home/solution-4.png" alt=""></div>
                </div>

            </div>
        </div>
    </section>

    <section class="nsh-sec nsh-biofuel-solutions nsh-shipping-needs specialation_sec container_992">
        <div class="container-fluid container-lg">
            <div class="container-solution nshpy">
                <div class="solution-header">
                    <h2 class="title fw800 borderLine text-center">OUR SPECIALIZATION</h2>
                </div>
                <div class="shipping-need owl-carousel owl-theme mt-5">
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/machine.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./machines-shipping.php" class="_black12">MACHINES</a></h6>
                            <p>Devices or systems that utilize energy to perform specific tasks, automating manual
                                labour and increasing efficiency. Various forms: mechanical, electrical, electronic etc.
                            </p>
                            <a href="./machines-shipping.php" class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block image-block-shade">
                            <img src="public/assets/images/specialization/printing.jpeg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./packaging-printing-logistics.php"
                                    class="_black12">Packaging and printing
                                    industry </a></h6>
                            <p>Packaging and printing are essential services that enhance product appeal, protection,
                                and brand recognition. E.g.: Protective wrapping Visual communication Branding etc. </p>
                            <a href="./packaging-printing-logistics.php" class="btn btn-default learn-more-btn fs14"
                                style="visibility: visible;"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block image-block-shade">
                            <img src="public/assets/images/specialization/skd.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./skd-auto-parts-logistics.php" class="_black12">SKD/AUTO
                                    PARTS</a></h6>
                            <p>SKD and auto parts unite to drive efficiency in the automotive industry. SKD's partial
                                assembly enables localized customization, reducing costs and compliance hurdles......
                            </p>
                            <a href="./skd-auto-parts-logistics.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/fabric.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./fabric.php" class="_black12">FABRIC</a></h6>
                            <p>Fabric a textile material constructed from threads or fibers, woven, knitted, or bonded
                                together. Fabric is a versatile material used in various industries, providing comfort.
                            </p>
                            <a href="./fabric.php" class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/polyester.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./fiber-logistics-specialist.php" class="_black12">FIBER</a>
                            </h6>
                            <p>Defined as a natural material available as a raw in the form of the tiny, thread-like
                                strands which are converted into the yarn. There're two types: Natural fibre & Synthetic
                                fibre.</p>
                            <a href="./fiber-logistics-specialist.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block image-block-shade">
                            <img src="public/assets/images/specialization/wooden.png" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./wooden-cutlery-sets-logistics-specialist.php"
                                    class="_black12">WOODEN CUTLERY SETS</a>
                            </h6>
                            <p>Wooden cutlery sets offer a sustainable alternative to plastic utensils, promoting
                                eco-friendly practices and enhancing the dining experience. Types: Forks, Knives,
                                Spoons.</p>
                            <a href="./wooden-cutlery-sets-logistics-specialist.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/filterpaper.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./automotive-filter-paper-logistics-specialist.php"
                                    class="_black12">FILTER PAPER</a></h6>
                            <p>Filter paper ensures clean fluids and air, safeguarding vehicle performance, fuel
                                efficiency, and longevity. Types: Air filters, Oil filters, Fuel filters, Cabin air
                                filters.</p>
                            <a href="./automotive-filter-paper-logistics-specialist.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>

                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/rmg.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./readymade-garment-logistics-specialist.php"
                                    class="_black12">RMG</a></h6>
                            <p>Pre-manufactured clothing, available for immediate purchase and wear... Factory-made
                                apparel, designed to fit standard sizes, eliminating the need for custom tailoring...
                            </p>
                            <a href="./readymade-garment-logistics-specialist.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/chemical.jpg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./chemical-shipping-solutions.php"
                                    class="_black12">CHEMICALS</a></h6>
                            <p> Chemicals play a vital role in various industries, transforming raw materials into
                                valuable products and improving daily life. Types: Organic, Inorganic, Acids, Bases,
                                Salts. </p>
                            <a href="./chemical-shipping-solutions.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/specialized.jpeg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./specialized-parts.php" class="_black12">SPECIALIZED
                                    PARTS</a></h6>
                            <p>Deliver superior results in critical applications, requiring expertise in design,
                                materials, and manufacturing. Types: Aerospace Medical devices Industrial machinery etc.
                            </p>
                            <a href="./specialized-parts.php" class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/ev-parts.jpeg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./ev-parts-logistics-exprts.php" class="_black12">EV
                                    PARTS</a></h6>
                            <p>Enable the transition to sustainable transportation, reducing environmental impact while
                                providing exceptional driving experiences. Types: Batteries Electric Motors etc.</p>
                            <a href="./ev-parts-logistics-exprts.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/polymer.jpeg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./pvc-polymers-shipping.php" class="_black12">PVC &
                                    POLYMERS</a></h6>
                            <p> PVC (Polyvinyl Chloride) and Polymers are synthetic materials used in various
                                applications. Used in: - Construction, Packaging, Automotive, Medical devices, Consumer
                                goods.</p>
                            <a href="./pvc-polymers-shipping.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item">
                        <div class="image-block">
                            <img src="public/assets/images/specialization/louvers.jpeg" alt="">
                        </div>
                        <div class="shipping-body">
                            <h6 class="fs17 fw800"><a href="./acrylic-sheet-louvers-shipping.php"
                                    class="_black12">ACRYLIC SHEETS &
                                    LOUVERS</a></h6>
                            <p>An acrylic sheet for kitchen interiors is made of polymer fibre and is similar to
                                lacquer. A louver is a window blind or shutter with horizontal slats that are angled to
                                admit light.</p>
                            <a href="./acrylic-sheet-louvers-shipping.php"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nsh-sec nsh-our-solutions nsh-moving-the-world" id="unparalleled_sec">
        <div class="container-fluid container-lg">
            <div class="container-solution nshpy">
                <div class="solution-header text-center">
                    <h2 class="title fw800 borderLine">Serving you with Unparalleled Efficiency</h2>
                </div>
                <div class="feature-list-grid moving-world-row">
                    <ul>
                        <li class="list-item">
                            <img src="public/assets/images/icons/client-say-2.png" alt="">
                            <h3 class="fw800 title mb-0" id="years">15</h3>
                            <p>Year of Exprience</p>
                        </li>
                        <li class="dots-separator"></li>
                        <li class="list-item">
                            <img src="public/assets/images/icons/client-say-3.png" alt="">
                            <h3 class="fw800 title mb-0" id="sqft">50</h3>
                            <p>Expert Team</p>
                        </li>
                        <li class="dots-separator"></li>
                        <li class="list-item">
                            <img src="public/assets/images/icons/client-say-1.png" alt="">
                            <h3 class="fw800 title mb-0" id="projects">200</h3>
                            <p>Happy Client</p>
                        </li>
                        <li class="dots-separator"></li>
                        <li class="list-item">
                            <img src="public/assets/images/icons/client-say-4.png" alt="">
                            <h3 class="fw800 title mb-0" id="team_members">45</h3>
                            <p>Countries</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <section class="nsh-sec nsh-shipping-needs nsh-latest-news container_992">
        <div class="container-fluid container-lg">
            <div class="container-solution nshpy">
                <div class="solution-header">
                    <h2 class="title fw800 borderLine text-center">STAY INFORMED</h2>
                </div>

                <div class="shipping-need latest-news-owl owl-carousel owl-theme mt-5">
                    <div class="shipping-item"
                        style="background:url('public/assets/images/nsh-home/inland.jpg'); background-size:contain">
                        <div class="shipping-body">
                            <span class="category"><a href="javascript:void(0)" class="_black">ECONOMY</a></span>
                            <p>02/07/2024</p>
                            <h6 class="fs18 fw800 _white">India’s exim trade totters on freight hike, congestion,
                                container
                                shortage </h6>
                            <a href="https://search.app/J2ZyGafqbEtYHUgJ7 " target="_blank"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item"
                        style="background:url('public/assets/images/nsh-home/news2.webp');  background-size:contain">
                        <div class="shipping-body">
                            <span class="category"><a href="javascript:void(0)" class="_black">LOGISTICS</a></span>
                            <p>21/06/2024</p>
                            <h6 class="fs18 fw800 _white">Congestions at global transhipment ports force shipping lines
                                to
                                pause cargo bookings</h6>
                            <a href="https://search.app/6vZ4KyH1tp4QiARs8 " target="_blank"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item"
                        style="background:url('public/assets/images/nsh-home/shipping-solution.jpg'); background-size:contain">
                        <div class="shipping-body">
                            <span class="category"><a href="javascript:void(0)" class="_black">LOGISTICS</a></span>
                            <p>12/06/2024</p>
                            <h6 class="fs18 fw800 _white">Record high ocean freight rates amidst Red Sea crisis</h6>
                            <a href="https://search.app/uNYPu67TLAQk9S378 " target="_blank"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item"
                        style="background:url('public/assets/images/nsh-home/inland.jpg');  background-size:contain">
                        <div class="shipping-body">
                            <span class="category"><a href="javascript:void(0)" class="_black"> ECONOMY</a></span>
                            <p>02/07/2024</p>
                            <h6 class="fs18 fw800 _white">India’s exim trade totters on freight hike, congestion,
                                container
                                shortage </h6>
                            <a href="https://www.thehindubusinessline.com/economy/indias-exim-trade-totters-on-freight-hike-congestion-container-shortage/article68358294.ece "
                                target="_blank" class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>
                    <div class="shipping-item"
                        style="background:url('public/assets/images/nsh-home/india-russia.webp')">
                        <div class="shipping-body">
                            <span class="category"><a href="javascript:void(0)" class="_black">EVENT</a></span>
                            <p>27/06/2024</p>
                            <h6 class="fs18 fw800"><a href="javascript:void(0)" class="_white"> The train from Russia:
                                    How a
                                    new route can change things for India</a> </h6>
                            <a href="https://m.economictimes.com/news/economy/foreign-trade/the-train-from-russia-how-a-new-route-can-change-things-for-india/articleshow/111290149.cms"
                                class="btn btn-default learn-more-btn fs14"><span>Learn
                                    more</span><span class="arrow-icon"><i
                                        class="fa-solid fa-angle-right"></i></span></a>
                        </div>
                    </div>

                </div>
                <div class="text-center mt-5">
                    <a href="https://nshfret.com/blog/" class="btn btn-default all-solutions-btn _btn"><i
                            class="fa-solid fa-angle-right"></i> See all
                        news</a>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="nsh-sec featued_gallery">
        <div class="container-fluid p-0">
            <div class="container-solution">
                <div class="solution-header mb-5">
                    <h2 class="title fw800 borderLine text-center">Photo Gallery</h2>
                </div>
                <div class="gallery-section">
                    <div class="gallery">
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 1"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 1"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 2"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 2"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 3"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 3"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 4"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 4"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 5"></div>
                        <div class="gallery-item"><img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 5"></div>
                    </div>
                </div>
                <div id="gallery" class="photos-grid-container gallery">
                    <div class="main-photo img-box">
                        <a class="glightbox" ><img
                                src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1800&h=1800&&q=80"
                                alt="image" />
                            <div class="transparent-box"><div class="caption">Exhibition</div></div>
                        </a>
                    </div>
                    <div>
                        <div class="sub">
                            <div class="img-box">
                                <a href="#" class="glightbox">
                                    <img src="https://images.unsplash.com/photo-1588186941799-f9a4fc54ff1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHdvbWVuJTIwc2hvcHBpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=900&h=900&q=80"
                                        alt="image" />
                                    <div class="transparent-box"><div class="caption">Exhibition</div></div>
                                </a>
                            </div>
                            <div class="img-box"><a class="glightbox">
                                    <img src="https://images.unsplash.com/photo-1593409981958-562665d407cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDF8fHdvbWVuJTIwc2hvcHBpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=900&h=900&q=60"
                                        alt="image" />
                                    <div class="transparent-box"><div class="caption">Exhibition</div></div>
                                </a>
                            </div>
                            <div class="img-box"><a class="glightbox">
                                    <img src="https://images.unsplash.com/photo-1587538639284-aec1076ba9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTB8fHdvbWVuJTIwc2hvcHBpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=900&h=900&q=60"
                                        alt="image" />
                                    <div class="transparent-box"><div class="caption">Exhibition</div></div>
                                </a>
                            </div>
                            <div id="multi-link" class="img-box">
                                <a class="glightbox">
                                    <img src="https://images.unsplash.com/photo-1591557304122-513e396f9feb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NzZ8fHdvbWVuJTIwc2hvcHBpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=900&h=900&q=80"
                                        alt="image" />
                                    <div class="transparent-box"><div class="caption">Exhibition</div></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
    <!-- <div class="featured-gallery">
                    <a href="./public/assets/images/gallery/gallery-1.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-1.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-2.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-2.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-3.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-3.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-4.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-4.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-5.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-5.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-6.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-6.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-7.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-7.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-8.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-8.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-9.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-9.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                    <a href="./public/assets/images/gallery/gallery-10.jpeg" class="item image-popup"
                        data-fancybox="gallery">
                        <img src="./public/assets/images/gallery/gallery-10.jpeg" alt="featured">
                        <h2>Event</h2>
                    </a>
                </div> 
                
            </div>
        </div>
    </section> -->


    <section class="nsh-sec customer-advisories container_992">
        <div class="container-fluid container-lg">
            <div class="container-solution nshpy">
                <div class="solution-header text-center">
                    <h2 class="title fw800 borderLine text-center">Our Clients</h2>
                </div>
                <div class="customer-advisories-owl owl-carousel owl-theme mt-3">
                    <div class="advisories-item"><img src="./public/assets/images/nsh-home/partners/fidato.png"
                            alt="fadato"></div>
                    <div class="advisories-item"><img src="./public/assets/images/nsh-home/partners/g.png" alt="g">
                    </div>
                    <div class="advisories-item"><img src="./public/assets/images/nsh-home/partners/gps.png" alt="gps">
                    </div>
                    <div class="advisories-item"><img
                            src="./public/assets/images/nsh-home/partners/harshita-partner.png" alt="harshita"></div>
                    <div class="advisories-item"><img src="./public/assets/images/nsh-home/partners/hi-tech.png"
                            alt="hi-tech"></div>
                    <div class="advisories-item"><img src="./public/assets/images/nsh-home/partners/newow.png"
                            alt="newow">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="nsh-sec testimonial-section"
        style="background-image:url('./public/assets/images/testimonial_bg.png')">
        <div class="row _row">
            <div class="col-lg-8">
                <div class="testimonial-content owl-carousel owl-theme">
                    <div class="row g-3 item">
                        <div class="col-sm-7">
                            <div class="testimonial-slide testimo_logo">
                                <span class="qoutes"><img src="./public/assets/images/icons/qoute.png" alt=""></span>
                                <div class="description">
                                    <p>Thanks again for your time and the kind reception, the interesting
                                        presentation
                                        and discussions, the drive and visit to the warehouse where our material is
                                        stored. NSH is clearly a top-class company striving for the highest
                                        standards in
                                        all it does. We look forward to working with you.</p>
                                </div>
                                <div class="testimonial-pic">
                                    <img src="./public/assets/images/nsh-home/partners/user-placeholder.png" alt="">
                                    <h3 class="testimonial-title">MR. SANJAY CHOPRA</h3>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-5 _author_logo">
                            <div class="testimo_logo ">
                                <img src="./public/assets/images/nsh-home/partners/fidato.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 item">
                        <div class="col-sm-7">
                            <div class="testimonial-slide testimo_logo">
                                <span class="qoutes"><img src="./public/assets/images/icons/qoute.png" alt=""></span>
                                <div class="description">
                                    <p>
                                        I want to thank you and your team for the relocation that was done
                                        yesterday, we
                                        greatly appreciate it. The team was extremely professional, friendly and
                                        very
                                        helpful, and it was an absolute pleasure working with them.</p>
                                </div>
                                <div class="testimonial-pic">
                                    <img src="./public/assets/images/nsh-home/partners/user-placeholder.png" alt="">
                                    <h3 class="testimonial-title">MR. PRADEEP AGGARWAL</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 _author_logo">
                            <div class="testimo_logo ">
                                <img src="./public/assets/images/nsh-home/partners/gps.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 item">
                        <div class="col-sm-7">
                            <div class="testimonial-slide testimo_logo">
                                <span class="qoutes"><img src="./public/assets/images/icons/qoute.png" alt=""></span>
                                <div class="description">
                                    <p>Thank you very much for your team's excellent assistance during the move.
                                        They
                                        were fantastic and it is by far and beyond the best move, we have ever
                                        experienced. Great piece of work done by NSH on anniversary orders
                                        scheduling
                                        and deliveries.</p>
                                </div>
                                <div class="testimonial-pic">
                                    <img src="./public/assets/images/nsh-home/partners/user-placeholder.png" alt="">
                                    <h3 class="testimonial-title">MR. RAJEEV AGGARWAL</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 _author_logo">
                            <div class="testimo_logo ">
                                <img src="./public/assets/images/nsh-home/partners/newow.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-heading">
                    <div class="solution-header">
                        <h2 class="title fw800 borderLine text-center">Testimonial</h2>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <div class="modal fade" id="trackModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Track Your Shipment </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div id="nsh-home-tab">
                        <div class="content">
                            <!-- Tab links -->
                            <div class="tabs">
                                <button class="tablinks active" data-country="TRACKING">SEA TRACKING</button>
                                <button class="tablinks" data-country="SCHEDULES">INLAND TRACKING</button>
                                <button class="tablinks" data-country="CONTACTS">AIR TRACKING</button>
                            </div>

                            <!-- Tab content -->
                            <div class="traval-tab">
                                <div id="TRACKING" class="tabcontent active">
                                    <form action="https://connect.track-trace.com/for/nshfret" method="post" target="_blank" class="tracking-content d-flex">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" checked type="radio" name="bill-number"
                                                id="bill-number">
                                            <label class="form-check-label" for="bill-number">
                                                <div class="radio-circle"></div>
                                                Container / Bill of Lading Number
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="bill-number"
                                                id="booking-number">
                                            <label class="form-check-label" for="booking-number">
                                                <div class="radio-circle"></div>

                                                Booking Number
                                            </label>
                                        </div> -->
                                        <div class="input-group">
                                            <span class="search-icon">
                                                <i class="fa-solid fa-magnifying-glass"></i></span>
                                            <input class="form-control w-100" type="hidden" name="shipper" value="container">
                                            <input type="text" name="number" class="form-control w-100">
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn">Track</button>
                                    </form>

                                </div>

                                <div id="SCHEDULES" class="tabcontent ">
                                    <form action="https://connect.track-trace.com/for/nshfret" method="post" target="_blank" class="tracking-content d-flex">
                                        <div class="input-group">
                                            <span class="search-icon">
                                                <i class="fa-solid fa-magnifying-glass"></i></span>
                                            <input class="form-control w-100" type="hidden" name="shipper" value="container">
                                            <input type="text" name="number" class="form-control w-100">
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn">Track</button>
                                    </form>
                                </div>

                                <div id="CONTACTS" class="tabcontent">
                                <form action="https://connect.track-trace.com/for/nshfret" method="post" target="_blank" class="tracking-content d-flex">
                                        <div class="input-group">
                                            <span class="search-icon">
                                                <i class="fa-solid fa-magnifying-glass"></i></span>
                                            <input class="form-control w-100" type="hidden" name="shipper" value="aircargo">
                                            <input type="text" name="number" class="form-control w-100">
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn">Track</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <?php include_once 'public/common/footer.php' ?>
    <script src="public/assets/js/tabs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        // tabs
        document.addEventListener('DOMContentLoaded', () => {
            function animateCounter(id, start, end, duration) {
                const element = document.getElementById(id);
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    element.textContent = Math.floor(progress * (end - start) + start);
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            }

            const section = document.getElementById('unparalleled_sec');
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    animateCounter('years', 0, 15, 2000);
                    animateCounter('sqft', 0, 50, 2000);
                    animateCounter('projects', 0, 200, 2000);
                    animateCounter('team-members', 0, 45, 2000);
                    observer.unobserve(section);
                }
            }, {
                threshold: 0.5
            });

            observer.observe(section);
        });

        // backgound set image  here//
        function imageChnage(img) {
            const Image = img;
            var container_bg = document.getElementById('our_solutions-container');
            container_bg.style.backgroundImage = `url('${Image}')`;
        }

        $('.cargo-owl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            responsive: {
                0: {
                    nav: false,
                    items: 1
                },
                992: {
                    items: 1,
                    nav: true,
                },
            }
        })
        $('.latest-news-owl').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    nav: false,
                    items: 1
                },
                480: {
                    nav: false,
                    items: 2
                },
                768: {
                    nav: false,
                    items: 3
                },
                992: {
                    nav: true,
                },
                1200: {
                    items: 4
                },
            }
        })

        $('.shipping-need').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    nav: false,
                    items: 1,
                    dots: false
                },
                480: {
                    items: 2,
                    nav: false,
                    dots: false
                },
                768: {
                    items: 3,
                    nav: false,

                },
                992: {
                    nav: true,
                },
                1200: {
                    items: 4
                },
            }
        })

        $('.customer-advisories-owl').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 4000,
            autoplaySpeed: 4000,
            responsive: {
                0: {
                    nav: false,
                    items: 1
                },
                480: {
                    nav: false,
                    items: 3
                },
                768: {
                    nav: false,
                    items: 4
                },
                992: {
                    nav: true,
                    items: 5,
                },
                1200: {
                    items: 6
                },
            }
        })

        function openShipmentTracking(index) {
            var screenWidth = screen.width * 0.8;
            var screenHeight = screen.height * 0.7;
            var left = (screen.width - screenWidth) / 2;
            var top = (screen.height - screenHeight) / 2;
            urls = [
                'https://www.track-trace.com/container',
                'https://www.ldb.co.in/ldb/containersearch',
                'https://www.track-trace.com/aircargo',
            ];

            window.open(urls[index], '_blank', `width=${screenWidth},height=${screenHeight},top=${top},left=${left}`);
        }

        // airCargoTracking //

        // function airCargo() {
        //     var cargo_no = document.getElementById('air_cargo').value;
        //     if (cargo_no) {
        //         $.ajax({
        //             url: `https://connect.track-trace.com/for/nshfret/aircargo/${cargo_no}`,
        //             method: 'GET',
        //             success: function(response) {
        //                 console.log('Success:', response);
        //             },
        //             error: function(xhr, status, error) {
        //                 console.error('Error:', error);
        //             }
        //         });
        //     } else {
        //         alert("Please enter a valid cargo number.");
        //     }
        // }
    </script>