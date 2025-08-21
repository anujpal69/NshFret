<?php
$title = 'Events';
$headerBg = '';
include_once 'public/common/header.php'
?>

<style>
    .nav-item .nav-link{
        color: #495057 !important;
    }
    .nav-item .nav-link.active{
        color: #fff !important;
        background-color: #7ac4e9;
        border-color: #dee2e6 #dee2e6 #7ac4e9;
    }
    
</style>

<section class="nsh-about-wrapper  nsh-home-wrapper nsh-sec"
    style="background-image:url('./public/assets/images/nsh-home/events.jpg')">
    <div class="container-fluid container-lg">
        <div class="nsh-home-content">
            <h1 class="title mb-0">Photo Gallery</h1>
            <h2 class="title"><strong></strong></h2>
        </div>
    </div>
</section>

<section class="nsh-sec featued_gallery">
    <div class="container-fluid p-0">
        <div class="container-solution">
            <div class="solution-header mb-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-filter="fun">Fun Moments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" data-filter="business">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-filter="exhibition">Exhibition</a>
                    </li>
                </ul>
                <!-- <h2 class="title">Trip</h2> -->
            </div>

            <div class="gallery">
                <a href="./public/assets/images/gallery/gallery-1.jpeg" class="item image-popup gallery-item" data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-1.jpeg" alt="Image 1">
                </a>
                <a href="./public/assets/images/gallery/gallery-2.jpeg" class="item image-popup gallery-item" data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-2.jpeg" alt="Image 2">
                </a>
                <a href="./public/assets/images/gallery/gallery-3.jpeg" class="item image-popup gallery-item" data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 3">
                </a>
                <!-- Add more with respective categories -->
                 <a href="./public/assets/images/gallery/gallery-4.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-4.jpeg" alt="featured">
                </a>
                <a href="./public/assets/images/gallery/gallery-5.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-5.jpeg" alt="featured">
                </a>
                <a href="./public/assets/images/gallery/gallery-6.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-6.jpeg" alt="featured">
                </a>
                <a href="./public/assets/images/gallery/gallery-7.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-7.jpeg" alt="featured">
                </a>
                <a href="./public/assets/images/gallery/gallery-8.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-8.jpeg" alt="featured">
                </a>
                <a href="./public/assets/images/gallery/gallery-9.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-9.jpeg" alt="featured">
                </a>
                <a href="./public/assets/images/gallery/gallery-10.jpeg" class="item image-popup gallery-item"
                    data-fancybox="gallery" data-category="fun">
                    <img src="./public/assets/images/gallery/gallery-10.jpeg" alt="featured">
                </a>
            </div>
            <div id="no-images-message" style="display:none; text-align:center; margin-top:4rem; color: #888;">
                No images found.
            </div>

            <!-- <div class="gallery-section">
                <div class="gallery">
 
                        <a href="./public/assets/images/gallery/gallery-1.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-1.jpeg" alt="Image 1">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-2.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-2.jpeg" alt="Image 1">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-3.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-3.jpeg" alt="Image 2">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-4.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-4.jpeg" alt="Image 2">
                        </a>
 
                        <a href="./public/assets/images/gallery/gallery-5.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-5.jpeg" alt="Image 3">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-6.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-6.jpeg" alt="Image 3">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-7.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-7.jpeg" alt="Image 4">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-9.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-9.jpeg" alt="Image 5">
                        </a>

                        <a href="./public/assets/images/gallery/gallery-8.jpeg" class="item image-popup gallery-item"
                            data-fancybox="gallery">
                            <img src="./public/assets/images/gallery/gallery-8.jpeg" alt="Image 4">
                        </a>

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
                </div> -->

        </div>
    </div>
</section>

<?php include_once 'public/common/footer.php'?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.nav-link');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const noImagesMessage = document.getElementById('no-images-message');

    function filterGallery(category) {
        let hasVisible = false;

        galleryItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            if (itemCategory === category) {
                item.style.display = 'inline-block';
                hasVisible = true;
            } else {
                item.style.display = 'none';
            }
        });

        noImagesMessage.style.display = hasVisible ? 'none' : 'block';
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault();

            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const selectedCategory = this.getAttribute('data-filter');
            filterGallery(selectedCategory);
        });
    });

    // ✅ Show "Trip" on load
    filterGallery('fun');
});
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>