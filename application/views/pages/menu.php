<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
</head>

<body>
    <header>
        <?php $this->load->view('components/_common_nav') ?>
    </header>
    <main>
        <section class="banner-lg">
            <div class="banner-content">
                <div class="row m-0 align-items-center justify-content-center h-100">
                    <div class="col-md-6 col-12">
                        <div class="text-center text-white">
                            <div class="page-title mb-5">
                                <p class="title-heading heading-font m-0">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <h2 class="mb-3" data-aos="fade-up">Discover Our Menu</h2>
                                <p data-aos="fade-up" data-aos-delay="300">
                                    Connect with us today, we're here to help!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu__brief bg-foggy-subtle">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-10 col-11">
                        <div class="section-title text-center mb-3 mb-md-5">
                            <p data-aos="fade-up" class="m-0 heading-font title-heading">
                                Lorem ipsum dolor, sit amet, nesciunt?
                            </p>
                            <h2 data-aos="fade-up" data-aos-delay="300">
                                Discover Our Menu
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure explicabo veritatis perspiciatis iste exercitationem expedita ducimus corporis voluptate reprehenderit ratione, animi aspernatur quas quia ipsa enim? Assumenda quia est ad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php for ($j = 1; $j <= 4; $j++) : ?>
            <article id="menuCategory<?=$j?>">
                <section class="banner-lg">
                    <div class="banner-content">
                        <div class="row m-0 align-items-end justify-content-center h-100">
                            <div class="col-md-6 col-12">
                                <div class="text-center text-white">
                                    <div class="page-title mb-5">
                                        <h2 class="mb-3" data-aos="fade-up">Category <?= $j ?></h2>
                                        <p data-aos="fade-up" data-aos-delay="300" class="title-heading heading-font m-0">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="menu__brief bg-foggy-subtle">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-md-10 col-11">
                                <div class="menu__tabnav">
                                    <div class="card mb-3 mb-md-5">
                                        <div class="card-body p-3 p-md-5">
                                            <div class="row m-0">
                                                <?php for ($i = 0; $i < 10; $i++) : ?>
                                                    <div class="col-md-6 mb-3">
                                                        <div class="menu__item">
                                                            <div class="row m-0">
                                                                <div class="col-md col-12">
                                                                    <div class="">
                                                                        <strong>
                                                                            Lorem ipsum dolor
                                                                        </strong>
                                                                        <p class="m-0">
                                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, dolorum!
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-auto col-12">
                                                                    Lorem, ipsum.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endfor ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        <?php endfor ?>
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
</body>

</html>