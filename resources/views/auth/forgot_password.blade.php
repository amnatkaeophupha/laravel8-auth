
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password 1 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ asset('img_admin/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('img_admin/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('img_admin/favicon//favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img_admin/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('img_admin/favicon/site.webmanifest') }}" />
    <!--Global styles -->
    <link rel="stylesheet" href="{{ asset('admire/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admire/css/custom.css') }}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admire/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('wow/css/libs/animate.css') }}"/>
    <!--End of Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admire/css/pages/login_aru.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Niramit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body>
<div class="container wow slideInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4 col-sm-8 col-md-6 mx-auto forgotpwd_margin">
                    <div class="login_logo login_border_radius1 bg-mint" >
                        <h3 class="text-center" style="padding-top:20px;font-family: 'Sarabun', sans-serif;">
                            <span class="text-white"> ระบบสารสนเทศ Laravel 8</span>
                        </h3>
                    </div>

                    <form action="{{ url('auth/forgot-password') }}" id="login_validator1" method="post" class="form-group  login_validator">
                        @csrf
                        <div class="bg-white login_content login_border_radius">
                            <div class="form-group">
                                @error('email')<label class="text-danger">{{ $message }}</label>@enderror
                                @error('status')<label class="text-danger">{{ $message }}</label>@enderror
                                <label for="email_modal">Please enter your email to reset the password</label>
                                <div class="input-group input-group-prepend">
                            <span class="input-group-text border-right-0 addon_email"><i
                                    class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control email_forgot form-control-md"
                                           id="email" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <button type="submit" class="btn btn-primary submit_email login_button" onclick="window.location.href='login1.html'">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- global js -->
<script src="{{ asset('admire/js/jquery.min.js')}}"></script>
<script src="{{ asset('admire/js/index.js')}}"></script>
<script src="{{ asset('admire/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script src="{{ asset('admire/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script src="{{ asset('wow/dist/wow.min.js') }}"></script>
<!--End of plugin js-->
<script src="{{ asset('admire/js/pages/forgot_password.js')}}"></script>
</body>

</html>
