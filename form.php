<?php
    if (isset($_POST['submit'])){
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $DiscUserName = $_POST['DisUsername'];
        $DateOfBirth = $_POST['dateOfBirth'];
        $Gender = $_POST['Gender'];
        $HomeTown = $_POST['HomeTown'];
        $FavTeam = $_POST['FavTeam'];
        $Message = $_POST['Message'];

        $mailTo = "mitja.leban8@gmail.com";
        $headers = "From: ".$FirstName." with your website";
        $txt = "You have recieved an e-mail from ".$FirstName." ".$LastName.".\n\n".$DiscUserName.".\n\n".
        $DateOfBirth.".\n\n".$Gender.".\n\n".$HomeTown.".\n\n".$FavTeam.".\n\n".$Message;
        mail($mailTo, $FirstName, $txt, $headers);
        
        header("Location: https://discord.gg/f9pr8syMQG");
    }
?>