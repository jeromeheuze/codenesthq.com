<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="/"><span class="fw-bolder text-primary">CodeNestHQ</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <?php if (!isset($_SESSION['userSession'])) { ?>
                <li class="nav-item"><a class="nav-link" href="/tools/">All Tools</a></li>
                <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="/profile/">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile/settings/">Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout/">Logout</a></li>
                <?php } ?>
                <!--<li class="nav-item"><a class="nav-link" href="/register/">Register</a></li>-->
            </ul>
        </div>
    </div>
</nav>
