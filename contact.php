<?php include 'layout/header.php'; ?>

<main class="main contact-us">
    <div class="col-md-12 contact-heading d-flex align-items-center justify-content-center">
        <div class="text-center">
            <h1 class="mb-10 text-white">Contact Us</h1>
            <div class="breadcrumb-custom text-white">
                <a href="index.html">Home</a>
                <span class="separator">></span>
                <span>Contact</span>
            </div>
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">


                <div class="col-md-4 mb-4 theme-color">
                    <div class="mb-3">
                        <i class="fa-solid fa-phone fa-2x"></i>
                    </div>
                    <h5>Call us</h5>
                    <p class="text-muted mb-0">678 698 2150</p>
                </div>


                <div class="col-md-4 mb-4 theme-color">
                    <div class="mb-3">
                        <i class="fa-solid fa-location-dot fa-2x"></i>
                    </div>
                    <h5>Location</h5>
                    <p class="text-muted mb-0">
                        8130 Majors Glen Ct, Cumming, Georgia 30041, United States
                    </p>
                </div>


                <div class="col-md-4 mb-4 theme-color">
                    <div class="mb-3">
                        <i class="fa-solid fa-envelope fa-2x"></i>
                    </div>
                    <h5>Email</h5>
                    <p class="text-muted mb-0">info@jwinjeet.com</p>
                </div>

            </div>
        </div>
    </section>

    <?php include 'components/contact-form.php'; ?>

    

    <section class="section-border pt-50 pb-50 ">
        <div class="container-fluid map-container">
            <iframe src="https://maps.google.com/maps?q=Karachi&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                height="100%" style="border:0; filter: grayscale(100%);" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>
</main>

<?php include 'layout/footer.php'; ?>
<script src="assets/js/customJs/contact.js"></script>