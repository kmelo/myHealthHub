<?php

// configuration
require("../includes/config.php"); 

if ($_SERVER["REQUEST_METHOD"] == "GET")
{

    //retrieve user's current list of medications 
    $appointments = CS50::query("SELECT doctor FROM appointments WHERE userId=?",$_SESSION["id"]);


    // render user's current medication list
    render("remove_appt.php", ["title" => "Remove Appointment", "appointments" => $appointments]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
     CS50::query("DELETE FROM appointments WHERE userId=? AND doctor=?",$_SESSION["id"], $_POST["doctor"]);
    
     //redirect user to portfolio page
        header("Location: appointments.php");
        // stop running this script
        exit;
}


?>