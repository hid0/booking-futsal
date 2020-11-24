<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? 'Home' ?> | SIFutsal</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/site.webmanifest') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

<body>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="assets/img/logo.png" alt="logo" width="100" class="rounded-circle">
                    </div>
                    <?= $contents; ?>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="<?= base_url('auth/registration'); ?>">Create One</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Si Futsal ~ <?= date('Y') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <script>
        window.onload = function() {
            <?php if ($this->session->flashdata('msg') != '') {
                echo "effect_msg();";
            } ?>
        }

        function effect_msg_form() {
            $('.form-msg').slideDown(1000),
                setTimeout(function() {
                    $('.form-msg').slideUp(1000);
                }, 3000)
        }

        function effect_msg() {
            $('.msg').show(1000),
                setTimeout(function() {
                    $('.msg').fadeOut(1000);
                }, 3000)
        }
    </script>
</body>

</html>