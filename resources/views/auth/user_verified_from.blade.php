

<!DOCTYPE html>
<html>
<head>
    <title>Register 1 | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('admire/img/logo1.ico') }}"/>
    <!-- Global styles -->
    <link rel="stylesheet" href="{{ asset('admire/css/components.css') }}" />
    <link rel="stylesheet" href="{{ asset('admire/css/custom.css') }}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link rel="stylesheet" href="{{ asset('admire/vendors/datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admire/vendors/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admire/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/wow/css/libs/animate.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Niramit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link rel="stylesheet" href="{{ asset('admire/css/pages/signup_aru.css') }}"/>
    <!--End of Page level styles-->
</head>
<body>
<div class="preloader" style=" position: fixed;width: 100%;
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
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row login_top_bottom">
        <div class="col-12 mx-auto">
            <div class="row">
                <div class="col-lg-5 col-sm-12  col-md-8 mx-auto">
                    <div class="login_logo login_border_radius1 bg-info">
                        <h3 class="text-center" style="padding-top:10px;font-family: 'Sarabun', sans-serif;">
                            <span class="text-white"> Verify your App Account </span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form class="form-horizontal login_validator m-b-20" id="register_valid" action="{{ url('auth/VerifyUser')}}" method="post">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success') }}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="email" class="col-form-label">Email *</label>
                                    <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left">
                                        <i class="fa fa-envelope text-primary"></i>
                                    </span>
                                        <input type="hidden" name="email_verified" value="{{ $email_verified }}">
                                        <input type="text" placeholder="Email Address"  name="email" id="email" value="{{ request('email') }}" class="form-control" readonly/>
                                    </div>
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="password" class="col-form-label text-sm-right">{{ __('New Password *') }}</label>
                                    <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-key text-primary"></i></span>
                                        <input type="password" placeholder="Password"  id="password" name="password" class="form-control" autofocus />
                                    </div>
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="confirmpassword" class="col-form-label">{{ __('Confirm Password *') }}</label>
                                    <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left">
                                        <i class="fa fa-key text-primary"></i>
                                    </span>
                                        <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-danger">{{ __('Verify Account') }}</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <label class="col-form-label">Already have an account?</label> <a href="{{ url('auth')}}" class="text-primary login_hover">Log In</a>
                                </div>
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
<script src="{{ asset('admire/vendors/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admire/vendors/select2/js/select2.js') }}"></script>
<script src="{{ asset('admire/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
<script src="{{ asset('wow/dist/wow.min.js') }}"></script>
<!--End of plugin js-->
<script>
    new WOW().init();
    $(window).on("load", function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    $(document).ready(function() {
        $('#register_valid').bootstrapValidator({
            fields: {
                UserName: {
                    validators: {
                        notEmpty: {
                            message: 'The user name is required and cannot be empty'
                        }
                    }
                },
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
                },
                confirmpassword: {
                    validators: {
                        notEmpty: {
                            message: 'The confirm password is required and can\'t be empty'
                        },
                        identical: {
                            field: 'password',
                            message: 'Please enter the same password as above'
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter valid phone number'
                        },
                        regexp: {
                            regexp: /^[0-9]{10}$/,
                            message: 'The phone number can only consist of numbers with 10 digits'
                        }
                    }
                },
                check: {
                    validators: {
                        notEmpty: {
                            message: 'Check on the field'
                        }
                    }
                }
            }
        });
        $("button[type='reset']").on("click",function () {
            $("#register_valid").bootstrapValidator("resetForm",true);
        })
    });
</script>
<!-- end of page level js -->


</body>

</html>
