<?php 
	include('../../App/user-functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../sign-in-s.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>

    <!-- //* Style -->
    <link rel="stylesheet" href="../../Frontend/css/w3.css" />
    <link rel="stylesheet" href="../../Frontend/css/student-home.css" />
    <!-- //* Style -->
</head>

<body>
    <!-- //*SIDEBAR Start-->
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left w3-black side-bar-width" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">
            Close &times;
        </button>
        <img src="../../Public/images/student.jpg" alt="student" class="profile-image" />
        <p class="w3-center">
            <?php if (isset($_SESSION['success'])) : ?>
            <?php 
		echo $_SESSION['success']; 
		unset($_SESSION['success']);
	    ?>
        </p>
        <?php endif ?>
        <?php  if (isset($_SESSION['user'])) : ?>
        <a href="#"
            class="w3-bar-item w3-button w3-hover-text-pink w3-hover-none w3-center"><?php echo $_SESSION['user']['username']; ?></a>
        <p class="w3-center"><?php echo ucfirst($_SESSION['user']['user_type']); ?></p>
        <hr class="w3-red w3-border-pink" />
        <a href="#" class="w3-bar-item w3-button w3-hover-text-pink w3-hover-none w3-center">Dashboard</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-text-pink w3-hover-none w3-center">Payment Status</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-text-pink w3-hover-none w3-center">Pending Payment</a>
        <a href="home.php?logout='1'"
            class="w3-bar-item w3-button w3-hover-text-pink w3-hover-none w3-center log-out-mt">Logout</a>
        <?php endif ?>
    </div>

    <!-- //*SIDEBAR End-->

    <!-- //*DASHBOARD Start -->

    <div class="w3-main dashboard-ml">
        <div class="w3-white">
            <button class="w3-button w3-white w3-xlarge w3-hide-large" onclick="w3_open()">
                &#9776;
            </button>
            <div class="w3-container w3-row w3-white">
                <div class="w3-twothird w3-container">
                    <h2 class="student-dashboard">
                        STUDENT DASHBOARD
                    </h2>
                </div>
                <div class="w3-third w3-container">
                    <div class="w3-panel w3-card-4 w3-green w3-center status-card">
                        <p>Status</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- //*Container-->
        <div class="w3-container">
            <div>
                <select name="quarter" id="quarter">
                    <option value="0">Quarter</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

                <select name="acad-year" id="acad-year">
                    <option value="0">S.Y.</option>
                    <option value="1">2022-2023</option>
                    <option value="2">2023-2024</option>
                </select>
            </div>
            <br />

            <!-- //*Table-->

            <table class="w3-table-all w3-striped w3-hoverable">
                <tr class="w3-pink">
                    <th>Subject</th>
                    <th>Time</th>
                    <th>Hour</th>
                    <th>Teacher</th>
                </tr>
                <tr>
                    <td>English</td>
                    <td>6:00-7:00</td>
                    <td>1 hour</td>
                    <td>Crisostomo Arias</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>6:00-7:00</td>
                    <td>1 hour</td>
                    <td>Crisostomo Arias</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>6:00-7:00</td>
                    <td>1 hour</td>
                    <td>Crisostomo Arias</td>
                </tr>
            </table>

            <!-- //*Table-->
        </div>

        <!-- //*Container-->
    </div>

    <!-- //*DASHBOARD End -->

    <script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>
</body>

</html>