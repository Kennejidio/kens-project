<?php include('../App/user-functions.php') ?>

<!-- //! Login for student -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../../Public/images/aa-icon.png" />
    <title>Student Portal</title>

    <!-- //* Styling -->
    <link rel="stylesheet" href="../../Frontend/css/login-signup.css" />
    <link href="../../Frontend/bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../Frontend/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- //* Styling -->
</head>

<body>
    <!-- //* Form Design Starts Here -->

    <div class="d-flex aligns-items-center justify-content-center">
        <div class="shadow mt-5 pb-5" style="background-color: white; min-height: auto; width: 25rem">
            <div class="aaimage">
                <div class="image-overlay"></div>
            </div>
            <div class="mt-3">
                <img src="../../Public/images/student.png" alt="Student" style="height: 45px; width: 50px"
                    class="center" />
                <div style="text-align: center">
                    <h4 class="text-color">STUDENT PORTAL</h4>
                </div>
            </div>

            <!-- //* Form Sign-in Starts Here -->

            <form action="sign-in-s.php" method="post">
                <?php echo display_error(); ?>
                <div class="mb-3 mt-3 m-3">
                    <input type="text" class="form-control" name="username" placeholder="username"/>
                </div>
                <div class="mb-3 m-3">
                    <input type="password" class="form-control" name="password" placeholder="Password"/>
                </div>
                <!-- //*Button -->
                <div class="d-grid m-3">
                    <button type="submit" name="login_btn" class="button-pink">LOGIN</button>
                </div>
                <!-- //*Support and others-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="link-color">Forgot password?</a>
                        </div>
                        <div class="col">
                            <span style="font-size: 13px">New? </span>
                            <a href="sign-up-s.php" class="link-color">Register</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="welcome.php" class="link-color">Back to homepage</a>
                        </div>
                    </div>
                </div>
            </form>

            <!-- //* Form Sign-in Ends Here -->
        </div>
    </div>
    <!-- //* Form Design Ends Here -->
</body>

</html>