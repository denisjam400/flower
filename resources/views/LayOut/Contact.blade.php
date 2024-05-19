<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-map-marker"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>Our Location</h4>
                        <p>(800) 123 456 789 / (800) 123 456 789 info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-smartphone"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>Contact us Anytime</h4>
                        <p>Mobile: 012 345 678<br>Fax: 123 456 789</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-custom text-align-center">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="lnr lnr-envelope"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>Support Overall</h4>
                        <p>Support24/7@example.com <br> info@example.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch contact-small">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <img src="/images/category/home1-category-3.jpg" alt="contact-img"
                            style="border: 0; width: 100%; height: 290px" class="contact-img-hidden" />
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form class="php-email-form" method="POST" action="{{ URL('/mail') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required />
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- End Contact Section -->