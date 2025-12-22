<!-- footer area start -->
<footer class="main-footer bgs-cover overlay rel z-1 pb-25"
    style="background-image: url({{ asset('clients/assets/images/backgrounds/footer.jpg') }});">
    <style>
#chatbot-toggle {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: #28a745;
    color: #fff;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    cursor: pointer;
    z-index: 9999;
}

#chatbot-box {
    position: fixed;
    bottom: 100px;
    right: 25px;
    width: 320px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,.2);
    display: none;
    flex-direction: column;
    z-index: 9999;
}

#chatbot-header {
    background: #28a745;
    color: #fff;
    padding: 12px;
    font-weight: bold;
    border-radius: 12px 12px 0 0;
}

#chatbot-messages {
    padding: 10px;
    height: 260px;
    overflow-y: auto;
    font-size: 14px;
}

#chatbot-input {
    display: flex;
    border-top: 1px solid #ddd;
}

#chatbot-input input {
    flex: 1;
    padding: 10px;
    border: none;
    outline: none;
}

#chatbot-input button {
    padding: 10px 15px;
    background: #28a745;
    color: #fff;
    border: none;
}
</style>
    <div class="container">
        <div class="footer-top pt-100 pb-30">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-text">
                        <div class="footer-logo mb-25">
                            <a href="index.html"><img src="{{ asset('clients/assets/images/logos/logo.png') }}"
                                    alt="Logo"></a>
                        </div>
                        <p>Chúng tôi biên soạn các hành trình riêng biệt phù hợp với sở thích của bạn, đảm bảo mọi
                            chuyến đi đều
                            liền mạch và làm phong phú thêm những viên ngọc ẩn giấu</p>
                        <div class="social-style-one mt-15">
                            <a href="https://www.facebook.com/tran.thi.thuy.duong.614149"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-35">
                        <h2>Đăng ký nhận bản tin</h2>
                        <p>Website <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải
                            nghiệm phổ biến nhất mà bạn sẽ nhớ</p>
                    </div>
                    <form class="newsletter-form mb-50" action="#">
                        <input id="news-email" type="email" placeholder="Email Address" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Đăng ký">Đăng ký</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area pt-95 pb-45">
        <div class="container">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                <div class="col col-small" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Dịch vụ</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="{{ route('team') }}">Hướng dẫn viên du lịch tốt nhất</a></li>
                            <li><a href="{{ route('tours') }}">Đặt tour</a></li>
                            <li><a href="{{ route('tours') }}">Đặt vé</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-small" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Công ty</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="{{ route('about') }}">Giới thiệu về công ty</a></li>
                            <li><a href="{{ route('contact') }}">Việc làm và nghề nghiệp</a></li>
                            <li><a href="{{ route('contact') }}">Liên hệ với chúng tôi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-small" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Điểm đến</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="{{ route('destination') }}">Miền Bắc</a></li>
                            <li><a href="{{ route('destination') }}">Miền Trung</a></li>
                            <li><a href="{{ route('destination') }}">Miền Nam</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-small" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="footer-widget footer-links">
                        <div class="footer-title">
                            <h5>Thể loại</h5>
                        </div>
                        <ul class="list-style-three">
                            <li><a href="{{ route('contact') }}">Phiêu lưu</a></li>
                            <li><a href="{{ route('contact') }}">Tour gia đình</a></li>
                            <li><a href="{{ route('contact') }}">Tour động vật hoang dã</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-6 col-10 col-small" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="footer-widget footer-contact">
                        <div class="footer-title">
                            <h5>Liên hệ</h5>
                        </div>
                        <ul class="list-style-one">
                            <li><i class="fal fa-map-marked-alt"></i> 120 Hoang Minh Thao, Hoa Khanh Nam, Da Nang</li>
                            <li><i class="fal fa-envelope"></i> <a
                                    href="mailto:C1SE.dev@gmail.com">C1SE.dev@gmail.com</a></li>
                            <li><i class="fal fa-clock"></i> Thứ 2 - Thứ 6, 08am - 05pm</li>
                            <li><i class="fal fa-phone-volume"></i> <a href="callto:+88012334577">+880 (123)
                                    345 77</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-20 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="copyright-text text-center text-lg-start">
                        <p>@Copy 2025 <a href="{{ route('home') }}">Ecotour</a>, All rights reserved</p>
                    </div>
                </div>
                <div class="col-lg-7 text-center text-lg-end">
                    <ul class="footer-bottom-nav">
                        <li><a href="{{ route('about') }}">Điều khoản</a></li>
                        <li><a href="{{ route('about') }}">Chính sách bảo mật</a></li>
                        <li><a href="{{ route('about') }}">Thông báo pháp lý</a></li>
                        <li><a href="{{ route('about') }}">Khả năng truy cập</a></li>
                    </ul>
                </div>
            </div>
            <!-- Scroll Top Button -->
            <button class="scroll-top scroll-to-target" data-target="html"><img
                    src="{{ asset('clients/assets/images/icons/scroll-up.png') }}" alt="Scroll  Up"></button>
        </div>
    </div>
    <!-- CHATBOT BUTTON -->
<div id="chatbot-toggle">💬</div>

<!-- CHATBOT BOX -->
<div id="chatbot-box">
    <div id="chatbot-header">🤖 Ecotour AI</div>

    <div id="chatbot-messages"></div>

    <div id="chatbot-input">
        <input type="text" id="chatbot-text" placeholder="Bạn muốn hỏi gì về tour?" />
        <button onclick="sendMessage()">Gửi</button>
    </div>
</div>

</footer>
<!-- footer area end -->

</div>
<!--End pagewrapper-->

@if (session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
<!-- Jquery -->
<script src="{{ asset('clients/assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('clients/assets/js/bootstrap.min.js') }}"></script>
<!-- Appear Js -->
<script src="{{ asset('clients/assets/js/appear.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('clients/assets/js/slick.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('clients/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('clients/assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Image Loader -->
<script src="{{ asset('clients/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Skillbar -->
<script src="{{ asset('clients/assets/js/skill.bars.jquery.min.js') }}"></script>
<!-- Jquery UI -->
<script src="{{ asset('clients/assets/js/jquery-ui.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('clients/assets/js/isotope.pkgd.min.js') }}"></script>
<!--  AOS Animation -->
<script src="{{ asset('clients/assets/js/aos.js') }}"></script>
<!-- Custom script -->
<script src="{{ asset('clients/assets/js/script.js') }}"></script>
{{-- jquery-toast  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- paypal-payment  --}}
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>

<script src="{{ asset('clients/assets/js/chat-gemini.js') }}"></script>
<!-- Custom script by Dev dien-->
<script src="{{ asset('clients/assets/js/custom-js.js') }}"></script>
<script src="{{ asset('clients/assets/js/jquery.datetimepicker.full.min.js') }}"></script>

</body>

</html>
