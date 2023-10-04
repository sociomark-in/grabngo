<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?= put_link("Home", "") ?>
                </li>
                <li class="nav-item">
                    <?= put_link("About", "about-us") ?>
                </li>
                <li class="nav-item">
                    <?= put_link("Menu", "menu") ?>
                </li>
                <li class="nav-item">
                    <?= put_link("Gallery", "gallery") ?>
                </li>
                <li class="nav-item">
                    <?= put_link("Contact&nbsp;Us", "contact-us") ?>
                </li>
                <li class="nav-item dropdown d-none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    $(window).on("scroll", function() {
        var navbar = $('nav.navbar'),
            scroll = $(window).scrollTop();

        if (scroll >= 190) {
            navbar.addClass('light');
        } else {
            navbar.removeClass('light');
        }
    });
</script>