<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    //check to see if username field is filled
    if(empty($_POST["username"]) )
    {
        apologize("You must type in a username.");
    }
    
    //check to see if password field is filled
    if (empty($_POST["password"]) )
    {
        apologize("You must type in a password");
    }
    
    //check to see if passwords match 
    if ($_POST["password"] != $_POST["confirmation"])
    {
        apologize("Your passwords do not match.");
    }
         
    }

    //create a new user in the database 
    
    $result = CS50::query("INSERT IGNORE INTO users (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
    
    if ($result === false)
    {
        apologize("That username already exits. Please try another one.");
    }
    else 
    {
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        
        //store id into sessions superglobal variable
        $_SESSION["id"] = $id;
        
        //redirect user to log in page
        header("Location: index.php");
        // stop running this script
        exit;
    }
?>