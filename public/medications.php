<?php

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
    
    //retrieve the current user's medication list
    $rows = CS50::query("SELECT * FROM medication WHERE userId=?",$_SESSION["id"]);

    //define a variable to hold relevant variables
    $drugs = [];
    
    
    //iterate over user's stock portfolio row by row
    foreach ($rows as $row)
    {
            $drugs[] = [
            "drugName" => $row["drugName"],
            "dose" => $row["dose"],
            "route" => $row["route"],
            "timesDue" => $row["timesDue"],
            ];
    }

     
    // render user's current medication list
    render("medication_table.php", ["drugs" => $drugs, "title" => "Medication"]);
    
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
    }

?>
