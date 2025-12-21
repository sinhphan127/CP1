<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
        <!-- Import CSS for Toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    {{-- Custom css by DevDien  --}}
    <link href="{{ asset('admin/assets/css/custom-css.css') }}" rel="stylesheet" />
</head>

<body class="login">
    <style>
        body.login {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
        }

        .login_wrapper {
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
            padding-top: 8%;
        }

        .login_form {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            padding: 35px 30px;
        }

        .login_content h1 {
            font-weight: 700;
            margin-bottom: 25px;
            color: #2a5298;
        }

        .login_content input.form-control {
            height: 45px;
            font-size: 14px;
            border-radius: 6px;
        }

        .login_content .submit {
            width: 100%;
            background: #2a5298;
            border: none;
            color: #fff;
            font-weight: 600;
            padding: 12px;
            border-radius: 6px;
            transition: background 0.3s ease;
        }

        .login_content .submit:hover {
            background: #1e3c72;
        }
    </style>
    <div>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{ route('admin.login-account') }}" method="POST" id="formLoginAdmin">
                        <h1>Admin Login</h1>
                        <p style="color:#777;margin-bottom:25px;">
                            Vui lòng đăng nhập để tiếp tục
                        </p>
                        @csrf
                        <div>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Tài khoản" required />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Mật khẩu" required />
                        </div>
                        <div>
                            <button class="btn btn-default submit" type="submit">Đăng nhập</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>

                </section>
            </div>
        </div>
    </div>
    @include('admin.blocks.footer')
