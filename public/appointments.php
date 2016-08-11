<?php

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
    
    //retrieve the current user's medication list
    $rows = CS50::query("SELECT * FROM appointments WHERE userId=?",$_SESSION["id"]);

    //define a variable to hold relevant variables
    $appointments = [];
    
    
    //iterate over user's stock portfolio row by row
    foreach ($rows as $row)
    {
            $appointments[] = [
            "apptDate" => $row["apptDate"],
            "time" => $row["time"],
            "doctor" => $row["doctor"],
            ];
    }

     
    // render user's current medication list
    render("appt_list.php", ["appointments" => $appointments, "title" => "Appointments"]);
    
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
    }

?>
