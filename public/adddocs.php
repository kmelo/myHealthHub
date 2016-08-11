<?php

// configuration
require("../includes/config.php"); 



if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    // render user's current medication list
    render("adddoc_form.php", ["title" => "Add Doctor"]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    //add new medication to user's medication list
        
    CS50::query("INSERT INTO doctors (userId, doctorName, specialty, number, address) VALUES(?, ?, ?, ?, ?)", $_SESSION["id"], $_POST["doctorName"], $_POST["specialty"], $_POST["number"], $_POST["address"]);
    
        //redirect user to current list of doctors
        header("Location: doctors.php");
        // stop running this script
        exit;
    
}

?>