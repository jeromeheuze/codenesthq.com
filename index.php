<?php
include "./includes/global.php";
/** SEO **/
$title = "CodeNestHQ – Your Ultimate Hub for Free Online Tools and Calculators!";
$desc = "At CodeNestHQ, we are dedicated to providing a comprehensive suite of free online tools and calculators designed to make your life easier.";
$url = "https://codenesthq.com/";
$og = "https://codenesthq.com/assets/bg/1.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="canonical" href="<?=$url?>" />
    <title><?=$title?></title>
    <meta name="description" content="<?=$desc?>">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="<?=$url?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$desc?>">
    <meta property="og:image" content="<?=$og?>">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="codenesthq.com">
    <meta property="twitter:url" content="<?=$url?>">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$desc?>">
    <meta name="twitter:image" content="<?=$og?>">

    <?php include "./includes/global_header.php"; ?>
    <?php include "./includes/sa.php"; ?>
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
        <?php include "./includes/header.php"; ?>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Free &middot; Online &middot; Calculators</div></div>
                            <div class="fs-3 fw-light text-muted">Your Ultimate Hub for Free Online Tools and Calculators</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Welcome to CodeNestHQ</span></h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a target="_blank" class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/tools/">Explore</a>
                                <!--<a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/register/">Register</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile">
                                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                <img class="profile-img" src="/assets/img/codenesthq-bg.jpg" alt="..." style="border-radius: 10px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Why Choose CodeNestHQ?</span></h2>
                            <p class="lead fw-light mb-4">Your Ultimate Hub for Free Online Tools and Calculators</p>
                            <p class="text-muted">User-Friendly Interface: Our tools are designed with a simple and intuitive interface, making it easy for anyone to use.</p>
                            <p class="text-muted">Wide Range of Tools: From financial calculators and conversion tools to coding utilities and data analysis tools, we have a diverse selection to meet your needs.</p>
                            <p class="text-muted">Accurate and Reliable: Our calculators and tools are built with precision in mind, ensuring accurate results every time.</p>
                            <p class="text-muted">Completely Free: Enjoy all our online tools and calculators without any cost or subscription.</p>
                            <p class="text-muted">Regular Updates: We constantly update our tools and add new features to provide you with the best possible experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About CodeNestHQ</span></h2>
                            <p class="lead text-light mb-4">Your Ultimate Hub for Free Online Tools and Calculators</p>
                            <p class="text-light">At CodeNestHQ, we are dedicated to providing a comprehensive suite of free online tools and calculators designed to make your life easier. Whether you need to perform complex calculations, convert units, analyze data, or optimize your projects, we have the right tools for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "./includes/footer.php"; ?>

<?php include "./includes/global_footer.php"; ?>
</body>
</html>