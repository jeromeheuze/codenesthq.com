<?php
include "./../includes/global.php";
/** SEO **/
$title = "Lorem Ipsum Generator - CodeNestHQ";
$desc = "Generate placeholder text for your designs, helping you visualize how the final text will look.";
$url = "https://codenesthq.com/tools/generateLoremIpsum.php";
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
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Lorem Ipsum Generator</span></h1>
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

                                    <label for="loremParagraphs">Number of Paragraphs:</label>
                                    <div class="form-floating mb-3"><input type="number" id="loremParagraphs" value="1" min="1"></div>
                                    <br>
                                    <label for="loremWords">Number of Words (per paragraph):</label>
                                    <div class="form-floating mb-3"><input type="number" id="loremWords" value="50" min="1"></div>
                                    <button class="btn btn-primary px-4 py-3 mb-4" onclick="generateLoremIpsum()">Generate</button>
                                    <div class="output">
                                        <strong>Result:</strong>
                                        <div id="loremOutput"></div>
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
                                <div class="col-lg-12 mb-3"><div>The Lorem Ipsum Generator is a tool designed to produce placeholder text used in the publishing and web design industries. Derived from a scrambled section of Cicero's classical Latin literature, "Lorem Ipsum" has been the industry's standard dummy text since the 1500s. This generator creates blocks of text that simulate natural language patterns, allowing designers, developers, and content creators to visualize the layout and typography of a project without being distracted by meaningful content.</div></div>
                                <div class="col-lg-12 mb-3"><div>Key features of the Lorem Ipsum Generator include:</div></div>
                                <div class="col-lg-12 mb-3"><div>
                                        <ul>
                                            <li>Customizable Output: Choose the amount of text needed, from a single sentence to multiple paragraphs.</li>
                                            <li>Language Variations: Generate text in traditional Latin or select from modern translations and thematic variants.</li>
                                            <li>Format Options: Output text in plain text, HTML, or Markdown for easy integration into various projects.</li>
                                            <li>User-Friendly Interface: Simple and intuitive design for quick and effortless text generation.</li>
                                            <li>Copy & Paste Functionality: Easily copy the generated text to clipboard for immediate use.</li>
                                        </ul>
                                </div></div>
                                <div class="col-lg-12"><div>Whether you are working on a print layout, website design, or any other project requiring placeholder text, the Lorem Ipsum Generator is an essential tool to streamline your workflow and enhance your creative process.</div></div>
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
<script src="/js/generateLoremIpsum.script.js"></script>
</body>
</html>