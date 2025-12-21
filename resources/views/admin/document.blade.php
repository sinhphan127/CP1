@include('admin.blocks.header')

<style>
    .doc-card {
        background: #fff;
        border-radius: 6px;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: all 0.2s ease;
    }

    .doc-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }

    .doc-card img {
        width: 120px;
        height: auto;
        margin-bottom: 15px;
    }

    .doc-card h4 {
        font-weight: 600;
        margin-bottom: 10px;
        color: #34495E;
    }

    .doc-card p {
        font-size: 14px;
        color: #555;
        min-height: 60px;
    }

    .doc-card .btn {
        margin-top: 10px;
    }
</style>

<div class="container body">
    <div class="main_container">
        @include('admin.blocks.sidebar')

        <div class="right_col" role="main">
            <div class="page-title">
                <h3>📄 Tài liệu hệ thống</h3>
            </div>

            <div class="row">

                {{-- Document 1 --}}
                <div class="col-md-4">
                    <div class="doc-card">
                        <img src="{{ asset('admin/assets/images/pdf.png') }}" alt="PDF">

                        <h4>Hướng dẫn sử dụng</h4>

                        <p>
                            Tài liệu hướng dẫn sử dụng hệ thống quản lý dành cho Admin.
                        </p>

                        <a href=""
                           class="btn btn-primary btn-sm">
                            <i class="glyphicon glyphicon-download"></i> Download
                        </a>
                    </div>
                </div>

                {{-- Document 2 --}}
                <div class="col-md-4">
                    <div class="doc-card">
                        <img src="{{ asset('admin/assets/images/pdf.png') }}" alt="DOC">

                        <h4>Quy trình nghiệp vụ</h4>

                        <p>
                            Mô tả chi tiết quy trình nghiệp vụ nội bộ và các lưu ý quan trọng.
                        </p>

                        <a href=""
                           class="btn btn-success btn-sm">
                            <i class="glyphicon glyphicon-download"></i> Download
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('admin.blocks.footer')
