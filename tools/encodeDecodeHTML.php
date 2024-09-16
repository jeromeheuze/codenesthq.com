<?php
include "./../includes/global.php";
/** SEO **/
$title = "HTML Encoder/Decoder - CodeNestHQ";
$desc = "Securely encode your HTML to prevent XSS attacks, or decode HTML to read the content easily.";
$url = "https://codenesthq.com/tools/encodeDecodeHTML.php";
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
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">HTML Encoder/Decoder</span></h1>
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

                                    <label for="loremWords">Encode or decode HTML entities</label>
                                    <div class="form-floating mb-3"><textarea placeholder="Encode or decode HTML entities"
                                                                              style="width: 100%"
                                                                              id="htmlInput"></textarea></div>
                                    <button class="btn btn-primary px-4 py-3 mb-4" onclick="encodeDecodeHTML()">Generate</button>
                                    <div class="output" id="htmlOutput">
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
                                <div class="col-lg-12 mb-3"><div>The HTML Encoder/Decoder is a powerful and essential tool for web developers and content creators. This utility enables users to convert special characters in HTML code into their corresponding HTML entities and vice versa.</div></div>
                                <div class="col-lg-12 mb-3"><div>Key Features:</div></div>
                                <div class="col-lg-12 mb-3"><div>
                                        <ul>
                                            <li>Encoding: The encoder transforms characters such as <, >, &, " into their HTML entity equivalents (&amp;lt;, &amp;gt;, &amp;amp;, &amp;quot;, etc.), ensuring that the content is safely rendered in web browsers without causing unintended HTML or script execution.</li>
                                            <li>Decoding: The decoder converts HTML entities back into their original characters, making the content readable and editable as plain text.</li>
                                            <li>User-Friendly Interface: With a simple and intuitive interface, users can easily input their HTML code and receive the encoded or decoded result instantly.</li>
                                            <li>Bulk Processing: The tool supports bulk encoding and decoding, allowing users to process large blocks of HTML code efficiently.</li>
                                            <li>Cross-Platform Compatibility: Available as a web-based application, it can be accessed from any device with an internet connection, providing flexibility and convenience.</li>
                                        </ul>
                                    </div></div>
                                <div class="col-lg-12 mb-3"><div>Use Cases:</div></div>
                                <div class="col-lg-12 mb-3"><div>
                                        <ul>
                                            <li>Web Development: Prevents code injection attacks by encoding special characters, ensuring secure and proper rendering of web pages.</li>
                                            <li>Content Management: Assists content creators in preparing HTML code for safe inclusion in web platforms, blogs, and forums.</li>
                                            <li>Data Handling: Helps in processing and storing HTML content in databases without risking data corruption or security issues.</li>
                                        </ul>
                                    </div></div>
                                <div class="col-lg-12"><div>The HTML Encoder/Decoder is a reliable and indispensable tool for anyone working with HTML, ensuring that web content is both secure and correctly displayed.</div></div>
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
<script src="/js/encodeDecodeHTML.script.js"></script>
</body>
</html>