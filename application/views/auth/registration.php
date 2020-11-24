<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo') ?>" type="image/x-icon">
</head>

<body>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" width="150" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <form method="POST" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
                                    <div class="invalid-feedback"></div>
                                    <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password1" class="d-block">Password</label>
                                        <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password1">
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                        <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Password Confirmation</label>
                                        <input id="password2" type="password" class="form-control" name="password2">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                                <div class="text-center">
                                    <a href="<?= base_url('auth'); ?>"> Already have an account? Login!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Si Futsal ~ 2020
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>