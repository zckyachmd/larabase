<!doctype html>

<html
        lang="en"
        class="light-style layout-wide customizer-hide"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="vuexy/assets/"
        data-template="vertical-menu-template"
        data-style="light">
<head>
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Login Basic - Pages | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('vuexy/assets/img/favicon/favicon.ico')); ?>"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
            rel="stylesheet"/>

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/fonts/fontawesome.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/fonts/tabler-icons.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/fonts/flag-icons.css')); ?>"/>

    <!-- Core CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/rtl/core.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/rtl/theme-default.css')); ?>"/>

    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/css/demo.css')); ?>"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/node-waves/node-waves.css')); ?>"/>

    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/typeahead-js/typeahead.css')); ?>"/>
    <!-- Vendor -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/libs/@form-validation/form-validation.css')); ?>"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?php echo e(asset('vuexy/assets/vendor/css/pages/page-auth.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('auth/css/sweetalert2.min.css')); ?>">

    <!-- Helpers -->
    <script src="<?php echo e(asset('vuexy/assets/vendor/js/helpers.js')); ?>"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?php echo e(asset('vuexy/assets/vendor/js/template-customizer.js')); ?>"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo e(asset('vuexy/assets/js/config.js')); ?>"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-6">
                        <a href="#" class="app-brand-link">
                  <span class="app-brand-logo demo">
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                              fill="#7367F0"/>
                      <path
                              opacity="0.06"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                              fill="#161616"/>
                      <path
                              opacity="0.06"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                              fill="#161616"/>
                      <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                              fill="#7367F0"/>
                    </svg>
                  </span>
                            <span class="app-brand-text demo text-heading fw-bold">Vuexy</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1">Welcome to Vuexy! 👋</h4>
                    <p class="mb-6">Please sign-in to your account and start the adventure</p>

                    <form id="formAuthentication" class="mb-4" action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-6">
                            <label for="email" class="form-label">Username</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="username"
                                    placeholder="username"
                                    autofocus/>
                        </div>
                        <div class="mb-6 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"/>
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <div class="my-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-0 ms-2">
                                    <input class="form-check-input" type="checkbox" id="remember-me"/>
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                                <a href="#">
                                    <p class="mb-0">Forgot Password?</p>
                                </a>
                            </div>
                        </div>
                        <div class="mb-6">


                            <button class="btn btn-primary d-grid w-100">Login</button>
                        </div>
                    </form>


                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="<?php echo e(asset('vuexy/assets/vendor/libs/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/popper/popper.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/node-waves/node-waves.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/hammer/hammer.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/i18n/i18n.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/typeahead-js/typeahead.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/js/menu.js')); ?>"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/@form-validation/popular.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/@form-validation/bootstrap5.js')); ?>"></script>
<script src="<?php echo e(asset('vuexy/assets/vendor/libs/@form-validation/auto-focus.js')); ?>"></script>

<!-- Main JS -->
<script src="<?php echo e(asset('vuexy/assets/js/main.js')); ?>"></script>

<!-- Page JS -->
<script src="<?php echo e(asset('vuexy/assets/js/pages-auth.js')); ?>"></script>
<script src="<?php echo e(asset('lib/sweetalert2/sweetalert2.js')); ?>"></script>


<?php if($message): ?>
    <script>
        setTimeout(function () {
            Swal.fire({
                icon: `error`,
                title: `Login Failed`,
                html: 'Kombinasi username dan password tidak sesuai',
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonColor: "#DD6B55",
                // timer: 2000,
            })
        }, 1000);
    </script>
<?php endif; ?>

</body>
</html>
<?php /**PATH /home/dodi/Project/GITHUB/larabase/resources/views/auth/loginv2.blade.php ENDPATH**/ ?>