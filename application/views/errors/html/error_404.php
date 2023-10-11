<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<?php $this->load->view('components/_common_css') ?>
	<title>404 Page Not Found!</title>
</head>

<body>
	<header>
		<?php $this->load->view('components/_common_nav') ?>
	</header>
	<main>
		<section class="banner-lg">
			<div class="container">
				<div class="row justify-content-center mt-5">
					<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9 col-11">
						<div class="card" data-aos="fade-up" data-aos-delay="300">
							<div class="card-body">
								<div class="text-content">
									<h1><?php echo $heading; ?></h1>
									<p>
										<?php echo $message; ?>
									</p>
									<a href="" class="btn btn-primary btn_icon-right">Discover&nbsp;Our&nbsp;Menu<i class="fa-solid fa-arrow-right icon"></i></a>
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