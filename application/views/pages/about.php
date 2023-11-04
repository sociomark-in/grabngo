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
								<p class="title-heading heading-font m-0">Lorem ipsum dolor sit.</p>
								<h2 class="mb-3" data-aos="fade-up">Fresh Ingredients Tasty Meals</h2>
								<p data-aos="fade-up" data-aos-delay="300">
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, aliquid.
								</p>
							</div>
							<div class="text-content" data-aos="fade-up" data-aos-delay="300">
								<div class="row m-0 justify-content-center">
									<div class="col-md-auto col-12 mb-3">
										<a href="<?= base_url("food-menu") ?>" target="" class="btn btn_icon-left btn-primary"><i class="fa-regular fa-eye icon"></i>View&nbsp;Food&nbsp;Menu</a>
									</div>
									<div class="col-md-auto col-12">
										<a href="<?= base_url("drinks-menu") ?>" target="" class="btn btn_icon-left btn-primary"><i class="fa-regular fa-eye icon"></i>View&nbsp;Drinks&nbsp;Menu</a>
									</div>
								</div>
								<!-- <a href="<?= base_url() ?>" class="btn btn-primary btn_icon-right btn-lg">Discover&nbsp;Our&nbsp;Menu<i class="fa-solid fa-arrow-right icon"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="intro">
			<div class="container">
				<div class="row m-0 flex-row-reverse align-items-center">
					<div class="col-md-6">
						<div class="media-content" data-aos="fade-left">
							<div class="dual-img">
								<div class="row m-0 align-items-center">
									<div class="col-lg-6 col-12">
										<div class="tile tile-lg tile-01">
										</div>
									</div>
									<div class="col-lg-6 d-none d-lg-block">
										<div class="tile tile-01">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-content" data-aos="fade-right">
							<div class="card">
								<div class="card-body">
									<div class="title">
										<p class="heading-font m-0">Lorem ipsum dolor sit amet.</p>
										<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, placeat.</h3>
									</div>
									<div class="desc">
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum voluptates cumque quae quis asperiores accusamus velit voluptas ducimus dolores eos saepe, veritatis, minus sequi recusandae officia impedit incidunt. Eaque dolorum perspiciatis a voluptatem ex odit iure odio eius? Nemo, sed quidem maxime eius harum sit praesentium ea aliquid delectus blanditiis tempora optio, aperiam placeat totam similique quas ducimus eos corporis quibusdam fuga dignissimos dolore? Consectetur dolorum molestias iste iusto in.
										</p>
										<a href="<?= base_url("contact-us") ?>" class="btn btn_icon-right btn-primary">Contact&nbsp;Us <i class="fa-solid fa-arrow-right icon"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<?php $this->load->view('components/_common_footer') ?>
	</footer>
	<?php $this->load->view('components/_common_js') ?>
</body>

</html>

