<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <img src="{{ asset('img/footer-logo.png') }}" alt="Footer Logo" style="width: 220px; margin-top: -17px;">
                        <p>{{ __('messages.footer_about') }}</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="https://www.instagram.com/intermedms?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/intermedms/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/intermed-medical-systems/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://x.com/intermedms" target="_blank"><i class="fa fa-x-twitter"></i></a></li>
                            <li><a href="mailto:info@intermedms.com"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>{{ __('messages.quick_links') }}</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.home') }}</a></li>
                                    <li><a href="/about"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.about') }}</a></li>
                                    <li><a href="/services"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.services') }}</a></li>
                                    <li><a href="/products"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.products') }}</a></li>
                                    <li><a href="/contact"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.contact') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.consulting') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.satisfaction') }}</a></li>
                                    <li><a href="/blogs"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.blogs') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.faq') }}</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>{{ __('messages.privacy_policy') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>{{ __('messages.working_hours') }}</h2>
                        <p>{{ __('messages.working_hours_text') }}</p>
                        <ul class="time-sidual">
                            <li class="day">{{ __('messages.monday_friday') }} <span>09:00 - 18:00</span></li>
                            <li class="day">{{ __('messages.saturday_sunday') }} <span>{{ __('messages.closed') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>{{ __('messages.newsletter') }}</h2>
                        <p>{{ __('messages.newsletter_text') }}</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="{{ __('messages.email_placeholder') }}" class="common-input" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{ __('messages.email_placeholder') }}'" required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>{{ __('messages.copyright') }} <a href="https://harpysocial.com" target="_blank">Harpy Social</a> {{ __('messages.rights_reserved') }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->