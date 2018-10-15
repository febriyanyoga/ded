<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/basic/favicon.ico" type="image/x-icon">
    <title>SIM
        <?php echo getInfoRS('nama_sistem')?>
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">

</head>

<body class="light">
    <!-- Pre loader -->
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <main>
            <div id="primary" class="blue4 p-t-b-100 height-full ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo base_url(); ?>assets/img/aceh.png" width='350px' height='90%' alt="">
                        </div>
                        <div class="class=col-lg-6 p-t-100 ">
                            <div class="text-center text-white">
                                <h3 class="mt-2 text-white">
                                    <?php echo getInfoRS('nama_sistem')?>
                                </h3>
                                <?php
                $status_login = $this->session->userdata('status_login');
                if (empty($status_login)) {
                    $message = "Silahkan login untuk masuk ke aplikasi";
                } else {
                    $message = $status_login;
                }
                ?>
                                    <p class="login-box-msg">
                                        <?php echo $message; ?>
                                    </p>
                            </div>
                            <form <?php echo form_open('auth/cheklogin');?>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Masuk">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #primary -->
        </main>
    </div>
    <!--/#app -->
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
</body>
</html>