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
								From our famous fish and chips to salads, tacos, bowls and smoked meats, our food menu is 100% gluten free. Sourcing the best ingredients to create delicious dishes you'll love. Our unique batter, in house smoked meats, desserts are just of some of our homemade items.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<article>

		</article>
		<?php for ($i = 0; $i < count($page['menu']); $i++) : ?>
			<?php if ($page['menu'][$i]['cat_title'] == "Pastas") : continue;
			else : ?>
			<?php endif ?>
			<article id="menuCategory<?= $i ?>">
				<section class="banner-lg menu-title">
					<div class="banner-content">
						<div class="row m-0 align-items-end justify-content-center h-100">
							<div class="col-md-6 col-12">
								<div class="text-center text-white">
									<div class="page-title mb-5">
										<h2 class="mb-3" data-aos="fade-up"><?= $page['menu'][$i]['cat_title'] ?></h2>
										<p data-aos="fade-up" data-aos-delay="300" class="title-heading heading-font m-0"><?= ($page['menu'][$i]['cat_description']) == "" ? "" : $page['menu'][$i]['cat_description'] ?></p>
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
									<div class="card mb-3 mb-md-5 d-none">
										<div class="card-body p-3 p-md-5">
											<div class="row m-0">
												<div class="col-12 mb-3">
													<div class="menu__item">
														<div class="row m-0">
															<div class="col-12">
																<div class="">
																	<h4 class="text-primary">
																		Salad Add Ons
																	</h4>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<div class="menu__item">
														<div class="row m-0">
															<div class="col-md col-12">
																<div class="">
																	<strong>
																		Marinated Tofu
																	</strong>
																</div>
															</div>
															<div class="col-md-auto col-12">
																<h5 class="text-ochre">&dollar;5</h5>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<div class="menu__item">
														<div class="row m-0">
															<div class="col-md col-12">
																<div class="">
																	<strong>
																		Smoked Tiger Prawns
																	</strong>
																</div>
															</div>
															<div class="col-md-auto col-12">
																<h5 class="text-ochre">&dollar;5</h5>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<div class="menu__item">
														<div class="row m-0">
															<div class="col-md col-12">
																<div class="">
																	<strong>
																		Roasted Chicken Breast
																	</strong>
																</div>
															</div>
															<div class="col-md-auto col-12">
																<h5 class="text-ochre">&dollar;8</h5>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<div class="menu__item">
														<div class="row m-0">
															<div class="col-md col-12">
																<div class="">
																	<strong>
																		Wild Sockeye Salmon
																	</strong>
																</div>
															</div>
															<div class="col-md-auto col-12">
																<h5 class="text-ochre">&dollar;10</h5>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card mb-3 mb-md-5">
										<div class="card-body p-3 p-md-5">
											<div class="row m-0">
												<?php foreach ($page['menu'][$i]['menu_items'] as $menuitem) : ?>
													<div class="col-md-6 mb-3">
														<div class="menu__item">
															<div class="row m-0">
																<div class="col-md col-12">
																	<div class="">
																		<strong>
																			<?= $menuitem['item_title'] ?>
																		</strong>
																		<p class="m-0">
																			<small>
																				<?= $menuitem['item_description'] ?>
																			</small>
																		</p>
																	</div>
																</div>
																<div class="col-md-auto col-12">
																	<h5>
																		<span class="text-ochre"><?= $menuitem['item_price'] == "" ? "" : "&dollar;" . $menuitem['item_price'] ?></span>
																	</h5>
																</div>
															</div>
														</div>
													</div>
												<?php endforeach ?>
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
