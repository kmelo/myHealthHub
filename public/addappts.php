<?php

// configuration
require("../includes/config.php"); 



if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    // render user's current medication list
    render("addappt_form.php", ["title" => "Add Appointment"]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    //add new medication to user's medication list
        
    CS50::query("INSERT INTO appointments (userId, apptDate, time, doctor) VALUES(?, ?, ?, ?)", $_SESSION["id"], $_POST["apptDate"], $_POST["time"], $_POST["doctor"]);
    
        //redirect user to portfolio page
        header("Location: appointments.php");
        // stop running this script
        exit;
    
}

?>