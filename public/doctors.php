<?php

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
    
    //retrieve the current user's medication list
    $rows = CS50::query("SELECT * FROM doctors WHERE userId=?",$_SESSION["id"]);

    //define a variable to hold relevant variables
    $doctors = [];
    
    
    //iterate over user's stock portfolio row by row
    foreach ($rows as $row)
    {
            $doctors[] = [
            "doctorName" => $row["doctorName"],
            "specialty" => $row["specialty"],
            "number" => $row["number"],
            "address" => $row["address"],
            ];
    }

     
    // render user's current medication list
    render("doctor_table.php", ["doctors" => $doctors, "title" => "Doctors"]);
    
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        
    }

?>
