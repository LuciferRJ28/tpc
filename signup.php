<?php

include("./database.php");

$user = isset($_GET["user"]) ? isset($_GET["user"]) : 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("./core/header.php")    ?>
    <link rel="stylesheet" href="./css/signup.css">

    <title>Home</title>
</head>

<body>
    <!-- Navigation bar -->
    <?php require_once("./core/nav.php") ?>

    <!-- Signup -->
    <div class="container">


        <?php if ($user == 0) { ?>
            <div class="title">Student Registration</div>
            <div class="content">
                <form action="./addUser.php" method="POSt">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">After 12th or D2D Student</span>
                            <select name="typeStudent" id="typeStudent">
                                <option value="1">After 12th</option>
                                <option value="2">Diploma to Degree (D2D)</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">ID Number</span>
                            <input type="text" name="id" id="idnumber" onkeyup="check_id()" placeholder="Enter your ID number" required>
                            <span id="idmessage"></span>

                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" id="email" onkeyup="check_email()" placeholder="Enter your email" required>
                            <span id="emailmessage"></span>
                        </div>
                        <div class="input-box">
                            <span class="details">Mobile Number</span>
                            <input type="number" name="mobile" id="mobile" onkeyup="check_mobile()" placeholder="Enter your number" required>
                            <span id="mobilemessage"></span>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="password" id="password" placeholder="Enter your password" onkeyup="validate_password()" required>
                            <span class="extra" id="eightCharacter">Must be atleat 8 characters long</span><br>
                            <span class="extra" id="oneDigit">Must include 1 digit</span> <br>
                            <span class="extra" id="oneCapital">Must include 1 Capital Letter</span> <br>
                            <span class="extra" id="oneSpecial">Must include 1 Special Character </span>



                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" id="cPassword" placeholder="Confirm your password" onkeyup="check_password()" required>
                            <span id="message"></span>
                        </div>
                        <div class="input-box">
                            <span class="details">Department</span>
                            <select name="department" id="dept">
                                <option value="0" selected>Select Your Department</option>
                                <?php
                                $dept = "SELECT * FROM department";
                                $result = mysqli_query($conn, $dept);
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $row["dept_id"] ?>"><?php echo $row["dept_name"] ?></option>
                                <?php

                                }

                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" value="male" id="dot-1">
                        <input type="radio" name="gender" value="female" id="dot-2">
                        <input type="radio" name="gender" value="other" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="registerStudent" value="Register">
                    </div>
                    <div class="row d-flex">
                        <div class="col-sm-6">

                            <div class="signup-link">Already Registered <a href="./login.php">Login now</a></div>
                        </div>
                        <div class="col-sm-6">

                            <div class="signup-link">Company Registeration <a href="./signup.php?user=1">I'm Company</a></div>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
        <?php if ($user == 1) { ?>
            <div class="title">Company Registration</div>
            <div class="content">
                <form action="./addUser.php" method="POSt">
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">Company Name</span>
                            <input type="text" name="id" placeholder="Enter Company Name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Company Email</span>
                            <input type="email" name="email" placeholder="Enter Company Email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Company Location (Headquaters)</span>
                            <input type="number" name="text" placeholder="Enter Company Location" required>
                        </div>
                        <div class="input-box">
                            <span class="details">HR Name</span>
                            <input type="number" name="text" placeholder="Enter HR Name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">HR Email</span>
                            <input type="number" name="email" placeholder="Enter HR Email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">HR Number</span>
                            <input type="number" name="mobile" placeholder="Enter HR Number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="password" id="password" placeholder="Enter your password" onkeyup="validate_password()" required>
                            <span class="extra" id="eightCharacter">Must be atleat 8 characters long</span><br>
                            <span class="extra" id="oneDigit">Must include 1 digit</span> <br>
                            <span class="extra" id="oneCapital">Must include 1 Capital Letter</span> <br>
                            <span class="extra" id="oneSpecial">Must include 1 Special Character </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" id="cPassword" placeholder="Confirm your password" onkeyup="check_password()" required>
                            <span id="message"></span>

                        </div>

                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" value="male" id="dot-1">
                        <input type="radio" name="gender" value="female" id="dot-2">
                        <input type="radio" name="gender" value="other" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="registerStudent" value="Register">
                    </div>
                    <div class="row d-flex">
                        <div class="col-sm-6">

                            <div class="signup-link">Already Registered <a href="./login.php">Login now</a></div>
                        </div>
                        <div class="col-sm-6">

                            <div class="signup-link">Student Registeration <a href="./signup.php">I'm Students</a></div>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
    <!-- <span class="extra" id="eightCharacter">Must be atleat 8 characters long</span><br>
    <span class="extra" id="oneDigit">Must include 1 digit</span> <br>
    <span class="extra" id="oneCapital">Must include 1 Capital Letter</span> <br>
    <span class="extra" id="oneSpecial">Must include 1 Special Character </span> -->
    <!-- Footer -->
    <?php require_once("./core/footer.php") ?>

    <!-- JS -->
    <script>
        var finalSubmit = 0;
        var checkPassword = 0;
        var checkCPassword = 0;
        var checkEmail = 0;
        var checkId = 0;
        var checkMobile = 0;
        var checkDept = 0;
        var checkGender = 0;

        function validate_password() {

            var eightCharacter = document.getElementById('eightCharacter');
            var oneCapital = document.getElementById('oneCapital');
            var oneDigit = document.getElementById('oneDigit');
            var oneSpecial = document.getElementById('oneSpecial');
            var pass = document.getElementById('password').value;
            // var confirm_pass = document.getElementById('cPassword').value;
            if (pass.length > 8) {
                eightCharacter.classList.remove("extra");
                eightCharacter.classList.add("done");
            }
            if (pass.length <= 8) {
                eightCharacter.classList.remove("done");
                eightCharacter.classList.add("extra");
            }
            if (pass.match(/[A-Z]+/)) {
                oneCapital.classList.remove("extra");
                oneCapital.classList.add("done");
            }
            if (!pass.match(/[A-Z]+/)) {
                oneCapital.classList.remove("done");
                oneCapital.classList.add("extra");
            }
            if (pass.match(/[0-9]+/)) {
                oneDigit.classList.remove("extra");
                oneDigit.classList.add("done");
            }
            if (!pass.match(/[0-9]+/)) {
                oneDigit.classList.remove("done");
                oneDigit.classList.add("extra");
            }
            if (pass.match(/[-’/`~!#*$@_%+=.,^&(){}[\]|;:”<>?\\]+/)) {
                oneSpecial.classList.remove("extra");
                oneSpecial.classList.add("done");
            }
            if (!pass.match(/[-’/`~!#*$@_%+=.,^&(){}[\]|;:”<>?\\]+/)) {
                oneSpecial.classList.remove("done");
                oneSpecial.classList.add("extra");
            }


        }

        function check_password() {
            var pass = document.getElementById('password').value;
            var confirm_pass = document.getElementById('cPassword').value;
            if (pass != confirm_pass) {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = '☒ Use same password';

            } else {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = '🗹 Password Matched';

            }
        }

        function check_id() {
            var id = document.getElementById('idnumber').value;

            if (id.match(/[0-9]{2}[A-Za-z]{2}[0-9]{3}/)) {
                document.getElementById('idmessage').style.color = 'green';
                document.getElementById('idmessage').innerHTML = '🗹 Valid ID';

            }
        }

        function check_email() {
            var email = document.getElementById('email').value;

            if (email.match(/[0-9A-Za-z]+@bvmengineering.ac.in/)) {
                document.getElementById('emailmessage').style.color = 'green';
                document.getElementById('emailmessage').innerHTML = '🗹 Valid Email';
            }
            if (!email.match(/[0-9A-Za-z]+@bvmengineering.ac.in/)) {
                document.getElementById('emailmessage').style.color = 'red';
                document.getElementById('emailmessage').innerHTML = '☒ InValid Email';
            }
        }

        function check_mobile() {
            var mobile = document.getElementById('mobile').value;

            if (mobile.match(/^[0-9]{10}$/)) {
                document.getElementById('mobilemessage').style.color = 'green';
                document.getElementById('mobilemessage').innerHTML = '🗹 Valid Mobile';
            }
            if (!mobile.match(/^[0-9]{10}$/gm)) {
                document.getElementById('mobilemessage').style.color = 'red';
                document.getElementById('mobilemessage').innerHTML = '☒ InValid Mobile';
            }
        }
    </script>

    </script>

</body>

</html>