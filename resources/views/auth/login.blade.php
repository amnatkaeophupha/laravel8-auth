
<!DOCTYPE html>
<html>
<head>
    <title>Phranakhon Si Ayutthaya Rajabhat University </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('admire/img/logo1.ico') }}"/>
    <!--Global styles -->
    <link rel="stylesheet" href="{{ asset('admire/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admire/css/custom.css') }}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admire/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('wow/css/libs/animate.css') }}"/>
    <!--End of Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admire/css/pages/login_aru.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Niramit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{ asset('loader.gif') }}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1 bg-info">
                        <h3 class="text-center" style="padding-top:20px;font-family: 'Sarabun', sans-serif;">
                            <span class="text-white"> ระบบสารสนเทศ Laravel 8</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif

                        @error('status')<div class="alert alert-success">{{ $message }}</div>@enderror

                        <form action="{{ url('auth/login')}}" method="post" id="login_validator" class="login_validator">
                         @csrf
                        <div class="form-group">
                                <label for="email" class="col-form-label"> E-mail</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left input_email"><i
                                            class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input form-control">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">Keep me logged in</a>
                                    </label>
                                </div>
                                <div class="col-6 text-right forgot_pwd">
                                    <a href="{{ url('auth/forgotfrom') }}" class="custom-control-description forgottxt_clr">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm m-t-10">
                                    <div class="icon-white btn-facebook icon_padding loginpage_border">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
                                    </div>
                                </div>
                                <div class="col-sm m-t-10">
                                    <div class="icon-white btn-google icon_padding loginpage_border">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <span class="text-white icon_padding question_mark">Log In With Google+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Don't you have an Account? </label>
                            <a href='{{ url('auth/signup') }}' class="text-primary">Sign Up</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- global js -->
<script src="{{ asset('admire/js/jquery.min.js') }}"></script>
<script src="{{ asset('admire/js/popper.min.js') }}"></script>
<script src="{{ asset('admire/js/bootstrap.min.js') }}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script src="{{ asset('admire/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
<script src="{{ asset('wow/dist/wow.min.js') }}"></script>

<script>
    'use strict';
    $(window).on("load", function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    $(document).ready(function() {
        new WOW().init();
        $('#login_validator').bootstrapValidator({
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        regexp: {
                            regexp: /^\S+@\S{1,}\.\S{1,}$/,
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a password'
                        }
                    }
                }
            }
        });

    });
</script>
</body>

</html>
