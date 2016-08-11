<?php

// configuration
require("../includes/config.php"); 

if ($_SERVER["REQUEST_METHOD"] == "GET")
{

    //retrieve user's current list of medications 
    $drugs = CS50::query("SELECT drugName FROM medication WHERE userId=?",$_SESSION["id"]);


    // render user's current medication list
    render("remove_med.php", ["title" => "Remove Medication", "drugs" => $drugs]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
     CS50::query("DELETE FROM medication WHERE userId=? AND drugName=?",$_SESSION["id"], $_POST["drug"]);
    
     //redirect user to portfolio page
        header("Location: medications.php");
        // stop running this script
        exit;
}


?>