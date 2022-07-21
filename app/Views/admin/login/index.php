<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= public_url('admin') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= admin_url('login') ?>"><b>Admin</b>Panel</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <div name="name_error" class="error login-box-msg">
                    <small style="color:red"><?= isset($error_login) ? $error_login : "" ?></small>
                </div>

                <form id="form" action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= set_value('username') ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= public_url('admin') ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= public_url('admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= public_url('admin') ?>/dist/js/adminlte.min.js"></script>
    <script src="<?= public_url('admin') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?= public_url('admin') ?>/plugins/jquery-validation/additional-methods.min.js"></script>
    <script>
        $(function() {
            $('#form').validate({
                rules: {
                    username: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    username: {
                        required: "Please enter a username",
                    },
                    password: {
                        required: "Please provide a password",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>