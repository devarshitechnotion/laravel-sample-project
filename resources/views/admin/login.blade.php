<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <title>Admin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- plugins:css -->
        <link rel="stylesheet" href="public/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="public/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="./public/css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="./public/images/favicon.png" />
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center"><h3>Hello, Admin. Please login to access your dashbord</h3></div>
       
            <div class="content">
             
                <div class="container-scroller">
                    <div class="container-fluid page-body-wrapper full-page-wrapper">
                    <div class="content-wrapper d-flex align-items-center auth">
                        <div class="row w-100">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left p-5">
                            <div class="brand-logo" align="center">
                                <img src="./public/images/favicon.png">
                            </div>
                           <!--  {* wrong username or password message *} -->
                            @if ($status == 1)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$message}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            
                            
                            <form class="pt-3" method="post" action="login/index">
                                <div class="form-group">
                                <input type="text" name="user_name" id="user_name" class="form-control form-control-lg" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
                                </div>
                                <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium" id="login_btn" type="submit">SIGN IN</button>
                                </div>
                              <!-- <div class="my-2" align="right" style="padding-top:4% !important;padding-bottom:-2% !important">                  
                                <a href="login/forgot_password" class="auth-link text-black mr-2">Forgot password?</a>
                                </div> -->                    
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="public/vendors/js/vendor.bundle.base.js"></script>
            <script src="public/vendors/js/vendor.bundle.addons.js"></script>
            <!-- endinject -->
            <!-- inject:js -->
            <script src="public/js/off-canvas.js"></script>
            <script src="public/js/misc.js"></script>
            <!-- endinject -->
            <script>
                $(document).ready(function(){
                    $('#login_btn').click(function(){
                    var user_name = $('#user_name').val();
                    var password = $('#password').val();
                    if(user_name != '' && password != '')
                    {
                        $('#login_btn').attr('disable',true);
                        $('#login_btn').html('Processing...');  
                    }
                    
                    });
                });
            </script>    
        </div>
    </div>
</body>
</html>
