<?php
include "./../includes/global.php";
/** SEO **/
$title = "Random Word Generator - CodeNestHQ";
$desc = "Stimulate creativity and brainstorming sessions by generating random words. Generate a random word from a predefined list";
$url = "https://codenesthq.com/tools/generateRandomWord.php";
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
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Random Word Generator</span></h1>
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

                                    <button class="btn btn-primary px-4 py-3 mb-4" onclick="generateRandomWord()">Generate Word</button>
                                    <div class="output" id="randomWordOutput">
                                        <strong>Random Word:</strong>
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
                                <div class="col-lg-12"><div>A Random Word Generator is a tool designed to produce random words from a specified language or set of parameters. It can be used for various purposes, such as generating ideas for writing, creating unique names, learning new vocabulary, or even for fun and entertainment. The generator can be customized to output words based on different criteria, such as word length, part of speech, or specific starting and ending letters. It is commonly used in creative fields, education, and games to stimulate imagination and creativity.</div></div>
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
<script src="/js/generateRandomWord.script.js"></script>
</body>
</html>