@include('clients.blocks.header_home')
@include('clients.blocks.banner_home')

<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Destinations Area start -->
<section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá kho báu việt nam cùng Ecotour</h2>
                    <p>Website<span class="count-text plus" data-speed="3000" data-stop="24080">0</span>
                        phổ biến nhất mà bạn sẽ nhớ</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($tours as $tour)
                <div class="col-xxl-3 col-xl-4 col-md-6" style="margin-bottom: 30px">
                    <div class="destination-item block_tours" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> {{ number_format($tour->rating, 1) }}</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('admin/assets/images/gallery-tours/' . $tour->images[0] . '') }}"
                                alt="Destination">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i>{{ $tour->destination }}</span>
                            <h5><a href="{{ route('tour-detail', ['id' => $tour->tourId]) }}">{{ $tour->title }}</a>
                            </h5>
                            <span class="time">{{ $tour->time }}</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>{{ number_format($tour->priceAdult, 0, ',', '.') }}</span> VND /
                                người</span>
                            <a href="{{ route('tour-detail', ['id' => $tour->tourId]) }}" class="read-more">Đặt ngay <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Destinations Area end -->


<!-- About Us Area start -->
<section class="about-us-area py-100 rpb-90 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-25">
                        <h2>Du lịch với sự tự tin Lý do hàng đầu để chọn công ty chúng tôi</h2>
                    </div>
                    <p>Chúng tôi sẽ nỗ lực hết mình để biến giấc mơ du lịch của bạn thành hiện thực những viên ngọc ẩn
                        và những điểm tham quan không thể bỏ qua</p>
                    <div class="divider counter-text-wrap mt-45 mb-55"><span>Chúng tôi có <span><span
                                    class="count-text plus" data-speed="3000" data-stop="5">0</span>
                                Năm</span> kinh nghiệm</span></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="2000" data-stop="1">0</span>
                                <span class="counter-title">Điểm đến phổ biến</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text m-plus" data-speed="3000" data-stop="8">0</span>
                                <span class="counter-title">Khách hàng hài lòng</span>
                            </div>
                        </div>
                    </div>
                    <a href="destination1.html" class="theme-btn mt-10 style-two">
                        <span data-hover="Khám phá Điểm đến">Khám phá Điểm đến</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="about-us-image">
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape1.png') }}" alt="Shape">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape2.png') }}" alt="Shape">
                    </div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape3.png') }}"
                            alt="Shape"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape4.png') }}"
                            alt="Shape"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape5.png') }}"
                            alt="Shape"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape6.png') }}"
                            alt="Shape"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape7.png') }}"
                            alt="Shape"></div>
                    <img src="{{ asset('clients/assets/images/about/about.png') }}" alt="About">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area end -->


<!-- Popular Destinations Area start -->
<section class="popular-destinations-area rel z-1">
    <div class="container-fluid">
        <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Khám phá các điểm đến phổ biến</h2>
                        <p>Website <span class="count-text plus" data-speed="3000" data-stop="24080">0</span> trải
                            nghiệm phổ biến nhất</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    @php $count = 0; @endphp
                    @foreach ($toursPopular as $tour)
                        @if ($count == 2 || $count == 3)
                            <!-- Cột thứ 3 và thứ 4 sẽ là col-md-6 -->
                            <div class="col-md-6 item ">
                            @else
                                <!-- Các cột còn lại sẽ là col-xl-3 col-md-6 -->
                                <div class="col-xl-3 col-md-6 item ">
                        @endif

                        <div class="destination-item style-two" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image" style="max-height: 250px">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('admin/assets/images/gallery-tours/' . $tour->images[0]) }}"
                                    alt="Destination">
                            </div>
                            <div class="content">
                                <h6 class="tour-title"><a
                                        href="{{ route('tour-detail', ['id' => $tour->tourId]) }}">{{ $tour->title }}</a>
                                </h6>
                                <span class="time">{{ $tour->time }}</span>
                                <a href="{{ route('tour-detail', ['id' => $tour->tourId]) }}" class="more"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>

                </div> <!-- Đóng div col-md-6 hoặc col-xl-3 col-md-6 -->

                @php $count++; @endphp
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Popular Destinations Area end -->


<!-- Features Area start -->
<section class="features-area pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-60">
                        <h2>Trải nghiệm du lịch tuyệt đỉnh mang đến sự khác biệt cho công ty chúng tôi</h2>
                    </div>
                    <div class="features-customer-box">
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/features/features-box.jpg') }}" alt="Features">
                        </div>
                        <div class="content">
                            <div class="feature-authors mb-15">
                                <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}"
                                    alt="Author">
                                <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}"
                                    alt="Author">
                                <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}"
                                    alt="Author">
                                <span>4k+</span>
                            </div>
                            <h6>850K+ Khách hàng hài lòng</h6>
                            <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                        data-speed="3000" data-stop="5">0</span>
                                    Năm</span></div>
                            <p>Chúng tôi tự hào cung cấp các hành trình được cá nhân hóa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="row pb-25">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tours') }}">Chinh Phục Cảnh Quan Việt Nam</a></h5>
                                <p>Khám phá những cảnh đẹp hùng vĩ và tuyệt vời của đất nước Việt Nam.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tours') }}">Trải Nghiệm Đặc Sắc Việt Nam</a></h5>
                                <p>Trải nghiệm những hoạt động và lễ hội đặc trưng của văn hóa Việt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item mt-20">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tours') }}">Khám Phá Di Sản Việt Nam</a></h5>
                                <p>Khám phá các di sản thế giới và những kỳ quan thiên nhiên nổi tiếng.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="{{ route('tours') }}">Vẻ Đẹp Thiên Nhiên Việt </a></h5>
                                <p>Chinh phục vẻ đẹp tự nhiên hoang sơ và kỳ vĩ của Việt Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->

<!-- CTA Area start -->
<section class="cta-area pt-100 rel z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url( {{ asset('clients/assets/images/cta/cta1.jpg') }});">
                    <span class="category">Khám Phá Vẻ Đẹp Văn Hóa Việt</span>
                    <h2>Tìm hiểu những giá trị văn hóa độc đáo của các vùng miền Việt Nam.</h2>
                    <a href="{{ route('tours') }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url( {{ asset('clients/assets/images/cta/cta2.jpg') }});">
                    <span class="category">Bãi biển Sea</span>
                    <h2>Bãi trong xanh dạt dào ở Việt Nam</h2>
                    <a href="{{ route('tours') }}" class="theme-btn style-two">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url( {{ asset('clients/assets/images/cta/cta3.jpg') }});">
                    <span class="category">Thác nước</span>
                    <h2>Thác nước lớn nhất Việt Nam</h2>
                    <a href="{{ route('tours') }}" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá">Khám phá</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CHAT POPUP -->
<div id="chat-btn">💬</div>

<div id="chat-box">
    <div class="chat-header">
        <span>Ecotour Support</span>
        <span id="chat-close">✕</span>
    </div>

    <div class="chat-body">
        <div class="msg admin">👋 Xin chào! Tôi có thể hỗ trợ gì?</div>
    </div>

    <div class="chat-footer">
        <input type="text" id="chat-input" placeholder="Nhập tin nhắn...">
        <button id="chat-send">Gửi</button>
    </div>
</div>

<script>
    const chatBtn   = document.getElementById('chat-btn');
    const chatBox   = document.getElementById('chat-box');
    const chatClose = document.getElementById('chat-close');
    const chatSend  = document.getElementById('chat-send');
    const chatInput = document.getElementById('chat-input');
    const chatBody  = document.querySelector('.chat-body');

    chatBtn.onclick = () => chatBox.style.display = 'flex';
    chatClose.onclick = () => chatBox.style.display = 'none';

    chatSend.onclick = sendMessage;
    chatInput.addEventListener('keypress', e => {
        if (e.key === 'Enter') sendMessage();
    });

    function sendMessage() {
        let text = chatInput.value.trim();
        if (!text) return;

        chatBody.innerHTML += `<div class="msg user">${text}</div>`;
        chatInput.value = '';
        chatBody.scrollTop = chatBody.scrollHeight;

        fetch("{{ route('chatbot.reply') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json"
            },
            body: JSON.stringify({
                message: text
            })
        })
        .then(res => res.json())
        .then(data => {
            console.log(data);
        chatBody.innerHTML += `<div class="msg admin">${data.reply}</div>`;
        chatBody.scrollTop = chatBody.scrollHeight;
    })
        .catch(() => {
        chatBody.innerHTML += `<div class="msg admin">❌ Lỗi kết nối, vui lòng thử lại</div>`;
    });
    }
</script>

<style>
    /* CHAT BUTTON */
    #chat-btn {
        position: fixed;
        right: 25px;
        bottom: 25px;
        width: 56px;
        height: 56px;
        background: #28a745;
        color: #fff;
        font-size: 26px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 9999;
        box-shadow: 0 4px 12px rgba(0,0,0,.3);
    }

    /* CHAT BOX */
    #chat-box {
        position: fixed;
        right: 25px;
        bottom: 95px;
        width: 640px; /* rộng gấp 2 lần */
        max-width: 95vw; /* tránh tràn màn hình nhỏ */
        background: #fff;
        border-radius: 12px;
        display: none;
        flex-direction: column;
        z-index: 9999;
        box-shadow: 0 10px 40px rgba(0,0,0,.25);
        font-family: Arial, sans-serif;
    }

    /* HEADER */
    .chat-header {
        background: #28a745;
        color: #fff;
        padding: 12px;
        border-radius: 12px 12px 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
    }

    #chat-close {
        cursor: pointer;
    }

    /* BODY */
    .chat-body {
        padding: 10px;
        height: 300px;
        overflow-y: auto;
        background: #f4f6f8;
    }

    /* MESSAGE */
    .msg {
        padding: 7px 10px;
        border-radius: 6px;
        margin-bottom: 6px;
        max-width: 80%;
        font-size: 14px;
    }

    .msg.admin {
        background: #e1f5e9;
    }

    .msg.user {
        background: #d1e7ff;
        margin-left: auto;
    }

    /* FOOTER */
    .chat-footer {
        padding: 10px;
        display: flex;
        gap: 6px;
        border-top: 1px solid #eee;
    }

    .chat-footer input {
        flex: 1;
        padding: 6px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .chat-footer button {
        background: #28a745;
        color: #fff;
        border: none;
        padding: 6px 14px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<!-- CTA Area end -->


@include('clients.blocks.footer_home')
