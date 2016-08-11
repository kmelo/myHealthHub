<?php

// configuration
require("../includes/config.php"); 



if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    // render user's current medication list
    render("weight_form.php", ["title" => "Add Weight"]);

}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    //add new medication to user's medication list
        
    CS50::query("INSERT INTO vitals (userId, date, weight) VALUES(?, ?, ?)", $_SESSION["id"], $_POST["date"], $_POST["weight"]);
    
        //redirect user to weight chart
        header("Location: vitals.php");
        // stop running this script
        exit;
    
}

?>