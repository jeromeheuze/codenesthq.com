<?php
include "./../includes/global.php";
/** SEO **/
$title = "CodeNestHQ – Your Ultimate Hub for Free Online Tools and Calculators!";
$desc = "At CodeNestHQ, we are dedicated to providing a comprehensive suite of free online tools and calculators designed to make your life easier.";
$url = "https://codenesthq.com/tools/";
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
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Tools / Forms</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Reading Time Calculator</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/calculateReadingTime.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>The Reading Time Calculator is a user-friendly tool designed to estimate the time required to read a given text based on its length and the reader's average reading speed.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Divider-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Random Word Generator</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/generateRandomWord.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>Stimulate creativity and brainstorming sessions by generating random words. Generate a random word from a predefined list.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Divider-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Text to Binary/Binary to Text</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/convertTextBinary.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>Convert text to binary code and vice versa, helping in various coding and encryption tasks.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Divider-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Text to Slug</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/convertToSlug.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>Create SEO-friendly URLs by converting text into slugs, making your links cleaner and more readable.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Divider-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Lorem Ipsum Generator</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/generateLoremIpsum.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>Generate placeholder text for your designs, helping you visualize how the final text will look.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Divider-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">HTML Encoder/Decoder</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/encodeDecodeHTML.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>Securely encode your HTML to prevent XSS attacks, or decode HTML to read the content easily.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Divider-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">URL Encoder &amp; URL Decoder</h2>
                        <a class="btn btn-primary px-4 py-3" href="/tools/encodeDecodeURL.php">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Use Tool
                        </a>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col-lg-12"><div>Prepare URLs for transmission over the internet, or decode them to read the original text.</div></div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

</main>

<?php include "./../includes/footer.php"; ?>

<?php include "./../includes/global_footer.php"; ?>
</body>
</html>