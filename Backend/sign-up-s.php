<?php include('../App/user-functions.php') ?>

<!-- //! Sign-up for student -->
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
                <img src="../../Public/images/register_form.png" alt="Form" style="height: 45px; width: 50px"
                    class="center" />
                <div style="text-align: center">
                    <h4 class="text-color">REGISTER</h4>
                </div>
            </div>

            <!-- //* Form Sign-in Starts Here -->

            <form action="sign-up-s.php" method="post" >
                <?php echo display_error(); ?>
                <div class="mb-3 mt-3 m-3">
                    <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $username; ?>"/>
                </div>
                <div class="mb-3 mt-3 m-3">
                    <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $email; ?>"/>
                </div>
                <div class="mb-3 m-3">
                    <input type="password" class="form-control" name="password_1" placeholder="Password"/>
                </div>
                <div class="mb-3 m-3">
                    <input type="password" class="form-control" name="password_2" placeholder="Re-Enter Password"/>
                </div>
                <!-- //* Button -->
                <div class="d-grid m-3">
                    <button type="submit" class="button-pink" name="stud_register_btn">REGISTER</button>
                </div>
                <!-- //* Support and others-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <span style="font-size: 13px">Already have an account? </span><a href="sign-in.php"
                                class="link-color">Login</a>
                        </div>
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