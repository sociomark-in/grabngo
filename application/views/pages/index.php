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
		<section class="banner-lg banner-md-auto">
			<div class="banner-content">
				<div class="row m-0 align-items-center justify-content-center h-100">
					<div class="col-md-6 col-12">
						<div class="text-center text-white">
							<div class="page-title mb-5">
								<p class="title-heading heading-font m-0">Welcome to, <?= APP_NAME ?></p>
								<h2 class="mb-3" data-aos="fade-up">Fresh Ingredients Tasty Meals</h2>
								<p data-aos="fade-up" data-aos-delay="300">
									A casual seafood restaurant with gluten-free options...
								</p>
							</div>
							<div class="text-content" data-aos="fade-up" data-aos-delay="300">
								<div class="row m-0 justify-content-center">
									<div class="col-md-auto col-12 mb-3">
										<a href="<?= base_url("food-menu") ?>" target="" class="btn btn_icon-left btn-primary"><i class="fa-regular fa-eye icon"></i>View&nbsp;Food&nbsp;Menu</a>
									</div>
									<div class="col-md-auto col-12">
										<a href="<?= base_url("food-menu-pdf") ?>" target="" class="btn btn_icon-left btn-primary"><i class="fa-regular fa-file-pdf icon"></i>Download&nbsp;Full&nbsp;Menu</a>
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
					<div class="col-lg-5 col-md-6">
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
					<div class="col-lg-7 col-md-6">
						<div class="text-content" data-aos="fade-right">
							<div class="card">
								<div class="card-body">
									<div class="title mb-3">
										<p class="heading-font m-0">Warm and Inviting our spaces beauty and history are humbling.</p>
										<h3>
											A casual seafood restaurant with gluten-free options, pre-ordering, and gift cards.</h3>
									</div>
									<div class="desc">
										<p>
											Bare Bones is a restaurant specializing in contemporary seafood driven menu. You can enjoy your favorite menu item in our relaxed dine-in or outdoor seating or in the comfort of our home.
										</p>
										<p class="d-none">
											Our globally inspired 100% gluten free food menu showcases a diverse range of fish, quality in house smoked meats, tacos, burgers and bowls.
										</p>
										<p>
											Reservations along with pre-ordering will be available for our guests and we will be to accommodate large groups.
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
		<section class="menu__brief bg-foggy-subtle">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-9 col-md-10 col-11">
						<div class="section-title text-center mb-3 mb-md-5">
							<p class="m-0 heading-font title-heading d-none">
								Lorem ipsum dolor, sit amet, nesciunt?
							</p>
							<h2>
								Discover Our Menu
							</h2>
						</div>
						<div class="menu__categories d-none">
							<div class="row m-0">
								<?php for ($i = 1; $i <= 7; $i++) : ?>
									<div class="col-xxl-3 col-xl-4 col-md-6 col-sm-6 col-12">
										<div class="card mb-3 mb-md-5">
											<div class="card-header">
												<strong>
													Category <?= $i ?>
												</strong>
											</div>
											<div class="card-body">
												<div class="row m-0">
													<div class="col-12 mb-3">
														<div class="">
															Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, nobis!
														</div>
													</div>
													<div class="col-12">
														<a href="<?= base_url('menu#menuCategory' . $i) ?>" class="btn btn-sm btn-ochre">Lorem, ipsum.</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endfor ?>
							</div>
						</div>
						<div class="row m-0 justify-content-center">
							<div class="col-md-auto col-12 mb-3">
								<a href="<?= base_url("food-menu") ?>" target="" class="btn btn_icon-left btn-primary"><i class="fa-regular fa-eye icon"></i>View&nbsp;Food&nbsp;Menu</a>
							</div>
							<div class="col-md-auto col-12">
								<a href="<?= base_url("drinks-menu") ?>" target="" class="btn btn_icon-left btn-primary"><i class="fa-regular fa-eye icon"></i>View&nbsp;Drinks&nbsp;Menu</a>
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
