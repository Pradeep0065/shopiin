<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<head>

    <meta charset="utf-8" />
    <title>Reset Password | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('public/assetsimages/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{url('public/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('public/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{url('public/assetsimages/logo-light.png')}}" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Forgot Password?</h5>
                                    <p class="text-muted">Reset password with velzon</p>

                                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl"></lord-icon>

                                </div>

                                <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                                    Enter your email and instructions will be sent to you!
                                </div>
                                <div class="p-2">
                                    <form>
                                        <div class="mb-4">
                                            <label class="form-label">New Password</label>
                                            <input type="mob" class="form-control" id="new" placeholder="Enter Password">
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="mob" class="form-control" id="password" placeholder="Enter Password">
                                        </div>

                                        <div class="text-center mt-4">
                                            <button id="change" class="btn btn-success w-100" type="button">Change Password</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Wait, I remember my password... <a href="{{url('admin')}}" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('public/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('public/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{url('public/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{url('public/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{url('public/assets/js/plugins.js')}}"></script>

    <!-- particles js -->
    <script src="{{url('public/assets/libs/particles.js/particles.js')}}"></script>

    <!-- particles app js -->
    <script src="{{url('public/assets/js/pages/particles.app.js')}}"></script>
</body>
<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $(document).on('click','#change', function(){
            var pass = $('#new').val();
            var password = $('#password').val();
            if(pass !='', password !=''){
                if(pass = password){
                    $.ajax({
                        method :'post',
                        url: "{{url('change-password')}}",
                        data:{pass:pass},
                        success: function(result){
                            if(result == 1){
                                alert('Your password changed successfully');
                                window.location.href = "{{url('admin')}}";

                            }
                        }
                    })
                }
            }
        });
    });
</script>

</html>