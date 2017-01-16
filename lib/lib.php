<?php
require('config.php');

session_start();

try {
    $db = new pdo( $CFG->dbDSN, $CFG->dbUserName, $CFG->dbPassword);
} catch ( PDOException $ex ) {
    die("Failed to connect to the database.");
}

$USER = new stdClass();

update_info();

function output_header($pageid = false) {
    global $USER;
    include('header.php');
}

function update_info() {
    global $USER;
    // Check the session.
    if (isset($_SESSION['User_ID'])) {
        $USER->User_ID = $_SESSION['User_ID'];
    } else {
        $USER->User_ID = false;
    }
    if (isset($_SESSION['User_Name'])) {
        $USER->User_Name = $_SESSION['User_Name'];
    } else {
        $USER->User_Name = false;
    }
    if (isset($_SESSION['Password'])) {
        $USER->Password = $_SESSION['Password'];
    } else {
        $USER->Password = false;
    }
    if (isset($_SESSION['First_Name'])) {
        $USER->First_Name = $_SESSION['First_Name'];
    } else {
        $USER->First_Name = false;
    }
    if (isset($_SESSION['Last_Name'])) {
        $USER->Last_Name = $_SESSION['Last_Name'];
    } else {
        $USER->Last_Name = false;
    }
    if (isset($_SESSION['Email'])) {
        $USER->Email = $_SESSION['Email'];
    } else {
        $USER->Email = false;
    }
    if (isset($_SESSION['ClassID_1'])) {
        $USER->ClassID_1 = $_SESSION['ClassID_1'];
    } else {
        $USER->ClassID_1 = false;
    }
    if (isset($_SESSION['ClassID_2'])) {
        $USER->ClassID_2 = $_SESSION['ClassID_2'];
    } else {
        $USER->ClassID_2 = false;
    }
    if (isset($_SESSION['ClassID_3'])) {
        $USER->ClassID_3 = $_SESSION['ClassID_3'];
    } else {
        $USER->ClassID_3 = false;
    }
    if (isset($_SESSION['ClassID_4'])) {
        $USER->ClassID_4 = $_SESSION['ClassID_4'];
    } else {
        $USER->ClassID_4 = false;
    }
    if (isset($_SESSION['ClassID_5'])) {
        $USER->ClassID_5 = $_SESSION['ClassID_5'];
    } else {
        $USER->ClassID_5 = false;
    }
    if (isset($_SESSION['ClassID_6'])) {
        $USER->ClassID_6 = $_SESSION['ClassID_6'];
    } else {
        $USER->ClassID_6 = false;
    }
    if (isset($_SESSION['ClassID_7'])) {
        $USER->ClassID_7 = $_SESSION['ClassID_7'];
    } else {
        $USER->ClassID_7 = false;
    }
    if (isset($_SESSION['ClassID_8'])) {
        $USER->ClassID_8 = $_SESSION['ClassID_8'];
    } else {
        $USER->ClassID_8 = false;
    }
    if (isset($_SESSION['ClassID_9'])) {
        $USER->ClassID_9 = $_SESSION['ClassID_9'];
    } else {
        $USER->ClassID_9 = false;
    }
    if (isset($_SESSION['ClassID_10'])) {
        $USER->ClassID_10 = $_SESSION['ClassID_10'];
    } else {
        $USER->ClassID_10 = false;
    }
    if (isset($_SESSION['ClassID_11'])) {
        $USER->ClassID_11 = $_SESSION['ClassID_11'];
    } else {
        $USER->ClassID_11 = false;
    }
    if (isset($_SESSION['ClassID_12'])) {
        $USER->ClassID_12 = $_SESSION['ClassID_12'];
    } else {
        $USER->ClassID_12 = false;
    }
    if (isset($_SESSION['ClassID_13'])) {
        $USER->ClassID_13 = $_SESSION['ClassID_13'];
    } else {
        $USER->ClassID_13 = false;
    }
    if (isset($_SESSION['ClassID_14'])) {
        $USER->ClassID_14 = $_SESSION['ClassID_14'];
    } else {
        $USER->ClassID_14 = false;
    }
    if (isset($_SESSION['ClassID_15'])) {
        $USER->ClassID_15 = $_SESSION['ClassID_15'];
    } else {
        $USER->ClassID_15 = false;
    }
    if (isset($_SESSION['ClassID_16'])) {
        $USER->ClassID_16 = $_SESSION['ClassID_16'];
    } else {
        $USER->ClassID_16 = false;
    }
    if (isset($_SESSION['ClassID_17'])) {
        $USER->ClassID_17 = $_SESSION['ClassID_17'];
    } else {
        $USER->ClassID_17 = false;
    }
    if (isset($_SESSION['ClassID_18'])) {
        $USER->ClassID_18 = $_SESSION['ClassID_18'];
    } else {
        $USER->ClassID_18 = false;
    }
    if (isset($_SESSION['ClassID_19'])) {
        $USER->ClassID_19 = $_SESSION['ClassID_19'];
    } else {
        $USER->ClassID_19 = false;
    }
    if (isset($_SESSION['ClassID_20'])) {
        $USER->ClassID_20 = $_SESSION['ClassID_20'];
    } else {
        $USER->ClassID_20 = false;
    }
    if (isset($_SESSION['ClassID_21'])) {
        $USER->ClassID_21 = $_SESSION['ClassID_21'];
    } else {
        $USER->ClassID_21 = false;
    }
    if (isset($_SESSION['ClassID_22'])) {
        $USER->ClassID_22 = $_SESSION['ClassID_22'];
    } else {
        $USER->ClassID_22 = false;
    }
    if (isset($_SESSION['ClassID_23'])) {
        $USER->ClassID_23 = $_SESSION['ClassID_23'];
    } else {
        $USER->ClassID_23 = false;
    }
}



?>

