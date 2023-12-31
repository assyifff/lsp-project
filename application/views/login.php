<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JeWePe | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo_circle.png'); ?>">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f7f7f7;
        }
        .login-box {
            width: 300px;
            margin: 10% auto;
        }
        .login-logo {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .login-box-msg {
            margin-bottom: 20px;
            color: #555;
        }
        .form-control {
            border-radius: 20px;
            border-color: #ccc;
        }
        .btn-primary {
            background-color: #183114; /* Ganti warna sesuai keinginan (#183114) */
            border-color: #183114;
            border-radius: 20px;
            color: #fff;
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #0f1f0c; /* Warna saat hover atau focus (#0f1f0c) */
            border-color: #0f1f0c;
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo base_url(); ?>assets/index2.html"><b>JeWePe</b></a>
        </div>

        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">
                Log in to start your session
            </p>

            <?php echo show_err_msg($this->session->flashdata('error_msg')); ?>

            <form action="<?php echo base_url('Auth/login'); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>

    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
