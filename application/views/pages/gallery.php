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
								<p class="title-heading heading-font m-0 d-none">Lorem ipsum dolor sit.</p>
								<h2 class="mb-3" data-aos="fade-up">Gallery</h2>
								<p data-aos="fade-up" data-aos-delay="300">
									Connect with us today, we're here to help!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="gallery-masonry">
					<?php for ($i = 1; $i < count($gallery['thumbnails']); $i++) : ?>
						<figure>
							<picture>
								<img class="w-100" src="<?= base_url('assets/media/images/gallery/thumbnails/') . $gallery['thumbnails'][$i] ?>" alt="Gallery Image <?= $i ?>" loading="lazy">
							</picture>
							<figcaption></figcaption>
						</figure>
					<?php endfor ?>
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
