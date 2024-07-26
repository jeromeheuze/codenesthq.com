<?php
include "./../includes/global.php";
/** SEO **/
$title = "Reading Time Calculator - CodeNestHQ";
$desc = "The Reading Time Calculator is a user-friendly tool designed to estimate the time required to read a given text based on its length and the reader's average reading speed.";
$url = "https://codenesthq.com/tools/calculateReadingTime.php";
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

    <?php include "./../includes/global_header.php"; ?>
    <?php include "./../includes/sa.php"; ?>
</head>
<body class="d-flex flex-column h-100">

<main class="flex-shrink-0">
    <?php include "./../includes/header.php"; ?>
    <!-- Header-->
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Reading Time Calculator</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Use now</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-1 mb-4">

                                    <label class="mb-2" for="readingTimeInput">Enter your text below:</label>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="readingTimeInput" type="text" placeholder="Estimate the time it takes to read a text..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                    </div>
                                    <button class="btn btn-primary px-4 py-3 mb-4" onclick="calculateReadingTime()">Calculate Reading Time</button>
                                    <div class="output" id="readingTimeOutput">
                                        <strong>Estimated Reading Time:</strong>
                                        <span></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Experience Section-->
                <section>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>The Reading Time Calculator is a user-friendly tool designed to estimate the time required to read a given text based on its length and the reader's average reading speed. By inputting the total word count and selecting an average reading speed (typically measured in words per minute), users can quickly determine how long it will take to complete the reading material. This tool is particularly useful for students, researchers, and professionals who need to manage their reading schedules efficiently, plan study sessions, or allocate time for comprehensive content review. The Reading Time Calculator enhances productivity by providing a clear and concise time estimate, allowing users to better organize their tasks and meet deadlines.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Skills Section-->

            </div>
        </div>
    </div>

</main>

<?php include "./../includes/footer.php"; ?>

<?php include "./../includes/global_footer.php"; ?>
<script src="/js/calculateReadingTime.script.js"></script>
</body>
</html>