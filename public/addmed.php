<?php

// configuration
require("../includes/config.php"); 



if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    // render user's current medication list
    render("addmed_form.php", ["title" => "Add Medication"]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    //add new medication to user's medication list
        
    CS50::query("INSERT INTO medication (userId, drugName, dose, route, timesDue) VALUES(?, ?, ?, ?, ?)", $_SESSION["id"], $_POST["drugName"], $_POST["dose"], $_POST["route"], $_POST["timesDue"]);
    
        //redirect user to portfolio page
        header("Location: medications.php");
        // stop running this script
        exit;
    
}

?>