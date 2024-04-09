<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            My Account
                        </li>
                    </ol>
                </div>
            </nav>

            <h1>My Account</h1>
        </div>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Login</h2>
                        </div>

                        <form action="#">
                            <label for="login-email">
                                Username or email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" id="email" required />

                            <label for="login-password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="password" required />

                            <div class="form-footer">
                                <div class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" id="lost-password" />
                                    <label class="custom-control-label mb-0" for="lost-password">Remember
                                        me</label>
                                </div>

                                <a href="forgot-password.html" class="forget-password text-dark form-footer-right">Forgot
                                    Password?</a>
                            </div>
                            <button id="login" type="button" class="btn btn-dark btn-md w-100">
                                LOGIN
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '#login', function() {
                var email = $('#email').val();
                var password = $('#password').val();
                if (email != '' && password != '') {
                    $.ajax({

                        method: 'post',
                        url: "{{url('weblogin')}}",
                        data: {

                            email: email,
                            password: password
                        },
                        success: function(data) {
                            if (data == 1) {
                                window.location.href = "{{url('/')}}";
                            } else {
                                alert("Invalid Email or Password");
                            }
                        }



                    })
                }
            });




        })
    </script>
</main>