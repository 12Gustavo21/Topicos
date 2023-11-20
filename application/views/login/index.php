<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login | ThemeKit - Admin Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="favicon.ico" type="<?php echo base_url() ?>public/image/x-icon" />

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/icon-kit/dist/css/iconkit.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/ionicons/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/plugins/c3/c3.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>public/dist/css/theme.min.css">
  <script src="<?php echo base_url() ?>public/src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="auth-wrapper">
    <div class="container-fluid h-100">
      <div class="row flex-row h-100 bg-white">
        <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
          <div class="lavalite-bg" style="background-image: url('<?php echo base_url() ?>public/img/auth/login-bg.jpg')">
            <div class="lavalite-overlay"></div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
          <div class="authentication-form mx-auto">
            <div class="logo-centered">
              <a href="<?php echo base_url() ?>public/plugins/index.html"><img src="<?php echo base_url() ?>public/src/img/brand.svg" alt=""></a>
            </div>
            <h3>Acessar o sistema</h3>
            <form action="<?php echo base_url($this->router->fetch_class() . '/logar/'); ?>" method="POST">
              <div class="form-group">
                <label for="exampleInputUsername">E-mail</label>
                <div class="position-relative has-icon-right">
                  <input type="email" name="identity" class="form-control input-shadow" placeholder="Ex: johndoe@admin.com" required>
                  <i class="ik ik-user"></i>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <div class="position-relative has-icon-right">
                  <input type="password" name="password" class="form-control" placeholder="Ex: 123456" required>
                  <i class="ik ik-lock"></i>
                </div>
              </div>
              <div class="sign-btn text-center">
                <button class="btn btn-theme">Acessar</button>
              </div>
              <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible fade show my-5" role="alert">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: currentColor; --darkreader-inline-stroke: currentColor;">
                    <path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM13 17h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                  </svg>
                  <strong><?php echo $this->session->flashdata('error'); ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="<?php echo base_url() ?>public/plugins/src/js/vendor/jquery-3.3.1.min.js"><\/script>')
  </script>
  <script src="<?php echo base_url() ?>public/plugins/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url() ?>public/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>public/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url() ?>public/plugins/screenfull/dist/screenfull.js"></script>
  <script src="<?php echo base_url() ?>public/plugins/dist/js/theme.js"></script>
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    (function(b, o, i, l, e, r) {
      b.GoogleAnalyticsObject = l;
      b[l] || (b[l] =
        function() {
          (b[l].q = b[l].q || []).push(arguments)
        });
      b[l].l = +new Date;
      e = o.createElement(i);
      r = o.getElementsByTagName(i)[0];
      e.src = 'https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
  </script>
</body>

</html>