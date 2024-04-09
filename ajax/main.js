
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {

    $(document).on('click', '#register', function () {
        var name = $('#name').val();
        var mob = $('#phone').val();
        var email = $('#email').val();
        var pass = $('#password').val();
        if (name != '', mob != '', email != '', pass != '') {
            $('#register-alert').hide();
            $.ajax({
                method: 'post',
                url: url + '/admin-register',
                data: { name: name, mob: mob, email: email, pass: pass },
                success: function (result) {
                    if (result != 1) {
                        $('#register-alert').text(result);
                        $('#register-alert').show();
                    } else if (result == 1) {
                        window.location.href = url;
                    }
                }
            })
        } else {
            $('#register-alert').show();
        }

    });

    $(document).on('click', '#log-in', function () {
        var email = $("#email").val();
        var pass = $("#password").val();
        if (email != '', pass != '') {
            $('#login-alert').hide();
            $.ajax({
                method: 'post',
                url: url + '/admin-login',
                data: { email: email, pass: pass },
                success: function (result) {
                    if (result != 1) {
                        ('#login-alert').text(result);
                        $('#login-alert').show();
                    } else if (result == 1) {
                        window.location.href = url + '/admin-dashboard';
                    }
                }
            })

        } else {
            $('#login-alert').show();

        }

    });
});