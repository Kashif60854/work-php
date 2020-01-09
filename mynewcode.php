<!DOCTYPE html>
<html>
<head>
<title>Font Awesome Icons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php

    echo '<style>
    
    .div2{
        color: white;
        padding-top: 10px;

    }
    
    .text_right {
        text-align: right;
        margin-bottom: 10px;
        font-size: 17px;
    }
    
    .div_container {
        display: flex;
    }

    .div_left {
        width: 1000px;
        height: 320px;
        // background-color: red;
    }

    .div_right {
        width: 400px;
        height: 320px;
        color: darkgreen;
        // background-color: blue;
    }



    </style>';

    echo '
    <div class="div2">
         <div class="div3"><center>
         <p style="font-size: 60px;color:darkgreen;">CV</p>
         <div class="div_container">
            <div class="div_left">
                <table border="0" style="color: black;width: 100%;">
                    <tr style="color: #fff">
                        <td style="font-size: 50px;color: darkgreen;">Dania Musharraf</td>
                    <tr>
                        <td style="color: black;font-size: 50px;">General Manager-Hospital Industry</td>
                    </tr>
                    <tr style="color:grey;font-size: 30px;">
                        <td> An Executive MBA Graduate from ESSEC Business School.<br>
                        Result-driven professional with proven business developmant<br>
                        and managment experience.Accomplished in determning<br>
                        most optimal operational practices, achieving all objectives and<br>
                        ensuring smooth operations.</td>
                    </tr>
                </table>
            </div>
            <div class="div_right">
                <p class="text_right">dania.musharraf@gmail.com<i class="fa fa-envelope" style="margin-left: 12px"></i></p>
                <p class="text_right">0300-4188841<i class="fa fa-phone"style="margin-left: 12px" ></i></p>
                <p class="text_right">Lahore, Pakistan<i class="fa fa-map-marker"style="margin-left: 12px" ></i></p>
            </div>
        </div>
         </center>	
         </div>
    </div>
        
    </div></center>

        


    ';


?>