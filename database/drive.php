<?php

include("../database.php");

function create_drive($conn)
{
    $create = "CREATE TABLE IF NOT EXISTS drive(
        drive_id int(10) PRIMARY KEY,
        company_id int(10),
        drive_deadline date,
        job_location varchar(60),
        internship int(10),
        stipend int(10),
        internship_duration int(10),
        bond_period decimal(2,1),
        internship_included int(10),
        bonus_amount int(10),
        included_ctc int(10),
        hsc_criteria int(10),
        ssc_criteria int(10),
        cpi_criteria decimal(4,2),
        active_backlog int(10),
        dead_backlog int(10),
        dept_eligible json,
        no_of_job_role int(10),
        job_role json,
        FOREIGN KEY (company_id) REFERENCES company(company_id)
        
    )";
    if ($conn->query($create)) {
        $result = array("message" => "Successfully created STUDENT Placed table");
        return json_encode($result);
    } else {
        $result = array("message" => "Error Occured on creating STUDENT placed table");
        return json_encode($result);
    }
}

function insert_data_drive($conn)
{

    $insert = "INSERT INTO tpc (`tpc_id`,`tpc_fname`,`tpc_lname`,`tpc_email`,`tpc_mobile`,`tpc_password`,`tpc_department`,`is_active`,`academic_year`) values ('19CP015','Jimish','Ravat','jimish@bvm.com','9876543211','ZTM4OGYwMmY3NTBlNjVlYmJhOTVhYjk0OTNjZGEwMWU=',3,1,2019),('18CP013','Mehul','Parmar','shah@bvm.com','9876543211','ZTM4OGYwMmY3NTBlNjVlYmJhOTVhYjk0OTNjZGEwMWU=',3,0,2018)";

    if ($conn->query($insert)) {
        $result = array("message" => "Successfully added STUDENT Placed Data");
        return json_encode($result);
    } else {
        $result = array("message" => "Error Occured on adding STUDENT Placed Data");
        return json_encode($result);
    }
}
