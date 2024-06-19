
@include('layouts.mainsite.header')
    <!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Contact</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    
    <!-- Contact start -->
    <section class="contact nb4-bg pt-120 pb-120">
        <div class="container ">
            <div class="row gy-18 justify-content-between">
                <div class="col-12 col-lg-5 col-xl-5">
                    <div class="submissions-area d-flex flex-column gap-8 gap-lg-10">
                        <div class="submissions">
                            <h3>Business submissions</h3>
                            <p class="fs-six-up mt-4">For business plan submissions. Please submit using this</p>
                        </div>
                        <div class="contact__mail d-flex flex-column gap-5 gap-lg-6 pb-8 pb-lg-10 border-bottom border-color four">
                            <div class="d-flex align-items-center gap-3">
                                <span class="box_12 p1-bg rounded-circle d-center"><i class="ti ti-message-2 fs-four-up nb4-color"></i></span>
                                <span class="fs-six-up"><a href="#" class="__cf_email__" data-cfemail="345051555a5a551a574146405d4774514c55594458511a575b59">info@mimtrading.co</a></span>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="box_12 p1-bg rounded-circle d-center"><i class="ti ti-phone fs-four-up nb4-color"></i></span>
                                <span class="fs-six-up">(555) 555-555</span>
                            </div>
                        </div>
                        <div class="submissions">
                            <h3>Our socials media</h3>
                            <ul class="social-area d-center justify-content-start gap-2 gap-md-3 mt-7 mt-lg-8">
                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-twitch"></i></a>
                                </li>
                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-discord-filled"></i></a>
                                </li>
                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="#"><i class="ti ti-brand-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <form method="POST" autocomplete="off" id="frmContactus" class="contact__form alt_form px-4 px-lg-8">
                        <h3 class="contact__title mb-7 mb-md-10 mb-lg-15">Enquiry Form</h3>
                        <div class="d-flex gap-3 gap-sm-5 gap-lg-8 flex-column">
                            <div class="row gap-3 gap-sm-0">
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="text" class="fs-six-up" name="fname" placeholder="Fast Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="text" class="fs-six-up" name="lname" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row gap-3 gap-sm-0 ">
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="email" class="fs-six-up" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="text" class="fs-six-up" name="Phone" placeholder="Phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-single">
                                <textarea class="fs-six-up" name="message" rows="4" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <span id="msg"></span> 
                        <button type="submit" class="cmn-btn py-3 px-5 px-lg-6 mt-8 mt-lg-10 d-flex ms-auto" name="submit" id="submit">Send Message<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>
                <div class="col-12">
                    <iframe class="cus-rounded-1 cus_map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5156.793422135061!2d-105.02171047857397!3d39.77899593135569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1699354709950!5m2!1sen!2sbd"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->

   
@include('layouts.mainsite.footer')