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
                                <h2 class="mb-3" data-aos="fade-up">Contact Us</h2>
                                <p data-aos="fade-up" data-aos-delay="300">
                                    Connect with us today, we're here to help!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact__cta">
            <div class="container">
                <div class="row m-0">
                    <div class="col-md-6">
                        <div class="row m-0">
                            <div class="col-12 mb-3">
                                <p>
                                    Babette was the first restaurant to open in Egypt, the resturant was designed with the history in mind we have created a soft industrial dining room, combined with an open kitchen, coffee take out bar and on site coffee roastery.
                                </p>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <h5>Our Address</h5>
                                <p>
                                    22 Alnahas Building, 2 AlBahr St, Tanta Al-Gharbia Governorate, Egypt
                                </p>
                                <a href="" class="btn btn-sm btn-foggy btn_icon-left"><i class="fa-solid fa-location-dot icon"></i>Get&nbsp;Directions</a>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <h5>Opening Hours</h5>
                                <ul class="list-unstyled">
                                    <li>Mon - Fri: 10 AM - 11 PM</li>
                                </ul>
                                <a href="" class="btn btn-sm btn-foggy btn_icon-left"><i class="fa-solid fa-phone icon"></i>Call&nbsp;Us</a>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <h5>Our Email</h5>
                                <p>
                                    Main Email: <a href="">Babette@7oroof.com</a>
                                </p>
                                <p>
                                    Phone: <a href="">02 0101236547</a>
                                </p>
                                <a href="" class="btn btn-sm btn-foggy btn_icon-left"><i class="fa-solid fa-envelope icon"></i>Send&nbsp;Message</a>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <h5>Follow Us</h5>
                                <div class="d-flex gap-3">
                                    <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="nav-link" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="row m-0">
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Your Name</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Your Name</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Your Name</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Your Name</label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Your Name</label>
                                        <textarea name="" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <button type="submit" class="btn btn-primary btn_icon-left"><i class="fa-solid fa-envelope icon"></i>Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="map__fulw pt-0">
            <div class="container">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.1520693014118!2d73.00094767502712!3d19.0570504525676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b0d769ff69%3A0xf839749e6fda79fc!2sSociomark!5e0!3m2!1sen!2sin!4v1696416266194!5m2!1sen!2sin" height="400" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.5738602148335!2d-124.8098472542803!3d49.25897840835823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5488f726b9b5a7d1%3A0x2091df51be3086cd!2sIsland%20Tropics%20Tanning%20Studio!5e1!3m2!1sen!2sin!4v1696483372303!5m2!1sen!2sin" height="400" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
</body>
</html>
