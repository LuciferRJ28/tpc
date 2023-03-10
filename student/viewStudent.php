<?php

include("../database.php");

// Helper variables

// Edit variable
$isEdit = false;

// if edit button is clicked 
if (isset($_GET["editAccess"])) {
    $isEdit = true;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./helper/sidebar.css">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="./helper/index.css">
    <link rel="stylesheet" href="./helper/sidebar.css">
    <link rel="stylesheet" href="./helper/viewStudent.css">
    <title>View Student</title>
</head>

<body>
    <?php include("./helper/sidebar.php") ?>

    <div class="container">
        <main>

            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row  d-flex justify-content-center">
                        <div class="">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                                <img src="http://localhost/tpc/images/Dhyey.png" class="img-radius" alt="User-Profile-Image"> <button class="text-center btn my-2 btn-success">Upload</button>
                                            </div>
                                            <p>
                                                <span class="badge text-white badge-lg badge-dot">
                                                    <i class="bg-warning"></i> Pending
                                                </span>
                                            </p>
                                            <h2 class="f-w-600">Dhyey Badheka</h2>
                                            <p>19IT450@bvmengineering.ac.in</p>
                                            <p>19IT450</p>
                                            <!-- <p>Information Technology</p> -->
                                            <div class="row">

                                                <div class="col-sm-5">
                                                    <p class="m-b-10 f-w-600">Regular</p>
                                                    <!-- <h6 class="f-w-400">f_name</h6> -->
                                                </div>
                                                <div class="col-sm-5">
                                                    <p class="m-b-10 f-w-600">Computer</p>
                                                    <!-- <h6 class="f-w-400">f_name</h6> -->
                                                </div>
                                                <div class="col-sm-2">
                                                    <a href="http://localhost/tpc/student/viewStudent.php?editAccess=true" class="text-reset">
                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h6>
                                            <div class="row m-b-20">
                                                <div class="col-sm-6 ">
                                                    <p class="m-b-5 f-w-600">First Name</p>
                                                    <?php if (!$isEdit) : ?>
                                                        <h6 class="text-muted f-w-400">f_name</h6>
                                                    <?php else : ?>
                                                        <input type="text" class="m-b-5 form-control" name="" id="" value="f_name">
                                                    <?php endif ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Middle Name</p>
                                                    <?php if (!$isEdit) : ?>
                                                        <h6 class="text-muted f-w-400">m_name</h6>
                                                    <?php else : ?>

                                                        <input type="text" class="m-b-5 form-control" name="" id="" value="m_name">
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                            <div class="row m-b-20">
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Last Name</p>
                                                    <?php if (!$isEdit) : ?>

                                                        <h6 class="text-muted f-w-400">l_name</h6>
                                                    <?php else : ?>

                                                        <input type="text" class="m-b-5 form-control" name="" id="" value="l_name">
                                                    <?php endif ?>

                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Phone</p>
                                                    <?php if (!$isEdit) : ?>

                                                        <h6 class="text-muted f-w-400">phone</h6>
                                                    <?php else : ?>

                                                        <input type="number" class="m-b-5 form-control" name="" id="" value="7984528154">
                                                    <?php endif ?>

                                                </div>
                                            </div>
                                            <div class="row m-b-20">
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400">e-mail</h6>

                                                    <input type="email" class="m-b-5 form-control" name="" id="" value="badheka15@gmail.com">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Gender</p>
                                                    <h6 class="text-muted f-w-400">gender</h6>

                                                    <p> <input type="radio" id="Male" name="gender" value="male" checked> Male</input> </p>

                                                    <p>
                                                        <input type="radio" id="Female" name="gender" value="female"> Female</input>
                                                    </p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Linkedin URL</p>
                                                    <h6 class="text-muted f-w-400">Linkedin URL</h6>

                                                    <input type="text" class="m-b-5 form-control" name="" id="" value="www.linked.in.com">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Date of Birth</p>
                                                    <h6 class="text-muted f-w-400">D_O_B</h6>

                                                    <input type="date" class="m-b-5 form-control" name="" id="" value="23-10-2001">
                                                </div>
                                            </div>

                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Other Details </h6>
                                            <div class="row m-b-20">
                                                <div class="col-sm-4">
                                                    <p class="m-b-5 f-w-600">Enrollment Number</p>
                                                    <h6 class="text-muted f-w-400">enrollment</h6>

                                                    <input type="text" class="m-b-5 form-control" name="" id="" value="190080116006">
                                                </div>
                                                <div class="col-sm-3">
                                                    <p class="m-b-5 f-w-600">Category</p>
                                                    <h6 class="text-muted f-w-400">category</h6>

                                                    <p> <input type="radio" id="general" name="category" value="general" checked> General</input> </p>
                                                    <p> <input type="radio" id="scst" name="category" value="scst"> SC/ST</input> </p>
                                                    <p> <input type="radio" id="obc" name="category" value="obc"> OBC</input> </p>


                                                </div>
                                                <div class="col-sm-5">
                                                    <p class="m-b-5 f-w-600">Future Goals(1st Priority)</p>
                                                    <h6 class="text-muted f-w-400">future_goal</h6>

                                                    <p> <input type="radio" id="pplacement" name="pgoal" value="pplacement" checked> Campus Placement</input> </p>
                                                    <p> <input type="radio" id="pstudy" name="pgoal" value="pstudy"> Further Studies</input> </p>
                                                </div>

                                            </div>
                                            <div class="row m-b-20">
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Permanent Address</p>
                                                    <h6 class="text-muted f-w-400">permanent address</h6>

                                                    <input type="text" placeholder="Plot No and Landmark" class="m-b-5 form-control" name="" id="" value="C-1512">
                                                    <input type="text" placeholder="City" class="m-b-5 form-control" name="" id="" value="Bhavnagar">
                                                    <input type="text" placeholder="District" class="m-b-5 form-control" name="" id="" value="Bhavnagar">
                                                    <input type="number" placeholder="pincode" class="m-b-5 form-control" name="" id="" value="364002">
                                                    <input type="number" placeholder="State" class="m-b-5 form-control" name="" id="" value="Gujarat">
                                                    <input type="number" placeholder="Country" class="m-b-5 form-control" name="" id="" value="India">
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-5 f-w-600">Current Address</p>
                                                    <h6 class="text-muted f-w-400">current address</h6>

                                                    <input type="text" placeholder="Plot No and Landmark" class="m-b-5 form-control" name="" id="" value="C-1512">
                                                    <input type="text" placeholder="City" class="m-b-5 form-control" name="" id="" value="Bhavnagar">
                                                    <input type="text" placeholder="District" class="m-b-5 form-control" name="" id="" value="Bhavnagar">
                                                    <input type="number" placeholder="pincode" class="m-b-5 form-control" name="" id="" value="364002">
                                                    <input type="number" placeholder="State" class="m-b-5 form-control" name="" id="" value="Gujarat">
                                                    <input type="number" placeholder="Country" class="m-b-5 form-control" name="" id="" value="India">
                                                </div>
                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">SSC Details </h6>
                                                <div class="row m-b-20">
                                                    <div class="col-sm-3">
                                                        <p class="m-b-5 f-w-600">Passing Year</p>
                                                        <h6 class="text-muted f-w-400">passing year</h6>

                                                        <input type="text" class="m-b-5 form-control" name="" id="" value="2019">
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <p class="m-b-5 f-w-600">Percentage</p>
                                                        <h6 class="text-muted f-w-400">percentage</h6>

                                                        <input type="text" class="m-b-5 form-control" name="" id="" value="99%">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="m-b-5 f-w-600">out of 600
                                                            or out of 10(other board)
                                                        </p>
                                                        <h6 class="text-muted f-w-400">out of 100</h6>

                                                        <input type="text" class="m-b-5 form-control" name="" id="" value="" placeholder="Write 550/600 or 9/10">
                                                    </div>
                                                    <div class="row m-b-20">
                                                        <div class="col-sm-3">
                                                            <p class="m-b-5 f-w-600">Board of SSC</p>
                                                            <h6 class="text-muted f-w-400">SSC BOARD</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="GSEB">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-5 f-w-600">School Name</p>
                                                            <h6 class="text-muted f-w-400">School name</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="Gyanmanjari Vidyapith">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <p class="m-b-5 f-w-600">Upload Marksheet</p>
                                                            <a href="http://localhost/tpc/uploads/demo.pdf" target="_blank" rel="noreferrer noopener"><button class="text-center btn btn-success">Upload</button></a>
                                                            <!-- <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc/uploads/demo.pdf"></a> -->
                                                        </div>
                                                        <div class="row m-b-20">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">Educational Gaps after SSC(0 if NA)</p>
                                                                <h6 class="text-muted f-w-400">gap</h6>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="0">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">HSC/Diploma</p>
                                                                <p> <input type="radio" id="isdiploma" name="isdiploma" value="0" checked> HSC</input> </p>
                                                                <p> <input type="radio" id="isdiploma" name="isdiploma" value="1"> Diploma</input> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">HSC Details </h6>
                                                    <div class="row m-b-20">
                                                        <div class="col-sm-3">
                                                            <p class="m-b-5 f-w-600">Passing Year</p>
                                                            <h6 class="text-muted f-w-400">passing year</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="2019">
                                                        </div>

                                                        <div class="col-sm-4">
                                                            <p class="m-b-5 f-w-600">Percentage(Theory+Practical)</p>
                                                            <h6 class="text-muted f-w-400">percentage t+p</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="99%">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <p class="m-b-5 f-w-600">Percentage(Theory)</p>
                                                            <h6 class="text-muted f-w-400">percentage t</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="99%">
                                                        </div>
                                                        <div class="row m-b-20">
                                                            <div class="col-sm-7">
                                                                <p class="m-b-5 f-w-600">Theory Marks out of 500(410 if CBSE)
                                                                </p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="" placeholder="Write 450/500 or 390/410">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">Board of HSC</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="GSEB">
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-20">

                                                            <div class="col-sm-7">
                                                                <p class="m-b-5 f-w-600">Theory+Practical Marks out of 650(500 if CBSE)
                                                                </p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="" placeholder="Write 550/650 or 490/500">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="m-b-5 f-w-600">Upload Marksheet</p>
                                                                <a href="http://localhost/tpc/uploads/demo.pdf" target="_blank" rel="noreferrer noopener"><button class="text-center btn btn-success">Upload</button></a>

                                                                <!-- <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a> -->
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <p class="m-b-5 f-w-600">School Name</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="Gyanmanjari Vidyapith">
                                                            </div>

                                                            <div class="col-sm-5">
                                                                <p class="m-b-5 f-w-600">Educational Gaps after HSC(0 if NA)</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">D2D Details </h6>
                                                    <div class="row m-b-20">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-5 f-w-600">Passing Year</p>
                                                            <h6 class="text-muted f-w-400">School name</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="2019">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-5 f-w-600">Final CGPA</p>
                                                            <h6 class="text-muted f-w-400">School name</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="9.33">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-5 f-w-600">Final CPI</p>
                                                            <h6 class="text-muted f-w-400">School name</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="9.33">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-5 f-w-600">College Name</p>
                                                            <h6 class="text-muted f-w-400">School name</h6>

                                                            <input type="text" class="m-b-5 form-control" name="" id="" value="Gyanmanjari Vidyapith">
                                                        </div>
                                                        <div class="row m-b-20">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 1 SPI</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 2 SPI</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 3 SPI</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 4 SPI</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 5 SPI</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 6 SPI</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-20">

                                                            <div class="col-sm-3">
                                                                <p class="m-b-5 f-w-600">Total Backlogs</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="number" class="m-b-5 form-control" name="" id="" value="0">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="m-b-5 f-w-600">Diploma Certificate</p>
                                                                <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="m-b-5 f-w-600">Educational Gaps after Diploma(0 if NA)</p>
                                                                <h6 class="text-muted f-w-400">School name</h6>

                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="0">
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">College Details</h6>
                                                    <div class="row m-b-20">
                                                        <div class="row m-b-20">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 1 SPI</p>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 2 SPI</p>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 3 SPI</p>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 4 SPI</p>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 5 SPI</p>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-5 f-w-600">SEM 6 SPI</p>
                                                                <input type="text" class="m-b-5 form-control" name="" id="" value="9.1"> <button class="text-center btn btn-success">Upload</button> <a href="http://localhost/tpc-main/demopdf/1.pdf"></a>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-20">
                                                            <div class="row m-b-20">
                                                                <div class="col-sm-4">
                                                                    <p class="m-b-5 f-w-600">Current CPI</p>
                                                                    <input type="text" class="m-b-5 form-control" name="" id="" value="9.1">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="m-b-5 f-w-600">Active Backlog</p>
                                                                    <input type="text" class="m-b-5 form-control" name="" id="" value="9.1">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="m-b-5 f-w-600">Cleared Backlog</p>
                                                                    <input type="text" class="m-b-5 form-control" name="" id="" value="9.1">
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <p class="m-b-5 f-w-600">Total Backlog</p>
                                                                    <input type="text" class="m-b-5 form-control" name="" id="" value="9.1">
                                                                </div>



                                                            </div>

                                                        </div>

                                                    </div>
                                                    <button class="text-center btn btn-primary">Update and Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </main>

    </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./helper/sidebar.js"></script>

</body>

</html>