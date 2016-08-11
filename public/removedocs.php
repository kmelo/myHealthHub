<?php

// configuration
require("../includes/config.php"); 

if ($_SERVER["REQUEST_METHOD"] == "GET")
{

    //retrieve user's current list of medications 
    $doctors = CS50::query("SELECT doctorName FROM doctors WHERE userId=?",$_SESSION["id"]);


    // render user's current medication list
    render("remove_doc.php", ["title" => "Remove Doctor", "doctors" => $doctors]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
     CS50::query("DELETE FROM doctors WHERE userId=? AND doctorName=?",$_SESSION["id"], $_POST["doctorName"]);
    
     //redirect user to portfolio page
        header("Location: doctors.php");
        // stop running this script
        exit;
}


?>