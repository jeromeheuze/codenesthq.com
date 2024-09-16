<?php
include "./../includes/global.php";
/** SEO **/
$title = "URL Encoder / URL Decoder - CodeNestHQ";
$desc = "Prepare URLs for transmission over the internet, or decode them to read the original text.";
$url = "https://codenesthq.com/tools/encodeDecodeURL.php";
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
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">URL Encoder &amp; URL Decoder</span></h1>
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

                                    <label for="loremWords">Encode or decode a URL</label>
                                    <div class="form-floating mb-3"><textarea placeholder="Encode or decode a URL"
                                                                              style="width: 100%"
                                                                              id="urlInput"></textarea></div>
                                    <button class="btn btn-primary px-4 py-3 mb-4" onclick="encodeDecodeURL()">Generate</button>
                                    <div class="output" id="urlOutput">
                                        <strong>Result:</strong>
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
                                <div class="col-lg-12 mb-3"><div>The URL Encoder & URL Decoder tool is a versatile utility designed to convert characters into a format that can be safely transmitted over the Internet. This tool ensures that URLs are encoded correctly by replacing unsafe ASCII characters with a "%" followed by two hexadecimal digits. It also provides decoding functionality, reversing the process to restore the original URL from its encoded state.</div></div>
                                <div class="col-lg-12 mb-3"><div>Features:</div></div>
                                <div class="col-lg-12 mb-3"><div>
                                        <ul>
                                            <li>Encoding: Converts special characters in a URL into a universally accepted format to prevent misinterpretation by browsers and servers.</li>
                                            <li>Decoding: Transforms encoded URLs back to their original format for readability and use.</li>
                                            <li>User-Friendly Interface: Simple and intuitive design for easy use by anyone, regardless of technical expertise.</li>
                                            <li>Instant Results: Provides quick conversion, saving time and enhancing efficiency.</li>
                                            <li>Compatibility: Supports all standard web browsers and platforms.</li>
                                            <li>Security: Ensures that URLs are encoded safely, preventing issues like broken links or improper data handling.</li>
                                        </ul>
                                    </div></div>
                                <div class="col-lg-12"><div>This tool is essential for web developers, digital marketers, and anyone who works with URLs, ensuring smooth and error-free internet communications.</div></div>
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
<script src="/js/encodeDecodeURL.script.js"></script>
</body>
</html>