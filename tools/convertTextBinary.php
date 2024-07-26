<?php
include "./../includes/global.php";
/** SEO **/
$title = "Text to Binary/Binary to Text - CodeNestHQ";
$desc = "Convert text to binary code and vice versa, helping in various coding and encryption tasks.";
$url = "https://codenesthq.com/tools/convertTextBinary.php";
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
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Text to Binary/Binary to Text</span></h1>
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

                                    <label class="mb-2" for="textBinaryInput">Enter your text below:</label>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" placeholder="Convert text to binary or binary to text" id="textBinaryInput">
                                    </div>
                                    <button class="btn btn-primary px-4 py-3 mb-4" onclick="convertTextBinary()">Convert</button>
                                    <div class="output" id="textBinaryOutput">
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
                                <div class="col-lg-12"><div>"Text to Binary/Binary to Text" is a process that involves converting textual data into binary code and vice versa. This conversion is fundamental in computing and digital communication. Text to Binary translation transforms standard text (characters, numbers, symbols) into binary code, which consists of only two symbols: 0 and 1. This is essential because digital systems and computers operate using binary data.</div></div>
                                <div class="col-lg-12"><div>Conversely, Binary to Text conversion takes binary data and translates it back into readable text. This process is crucial for interpreting the data stored in or processed by computers and other digital devices. The ability to convert between text and binary allows for efficient data storage, transmission, and processing, ensuring that information can be communicated and understood by both machines and humans.</div></div>
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
<script src="/js/convertTextBinary.script.js"></script>
</body>
</html>