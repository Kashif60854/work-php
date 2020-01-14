<?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $submit=$_POST['submit'];
        $result="";
        
        switch ($submit) {
            case 'Add' :
            $result=$num1+$num2;
            break;
            case 'Subtract' :
            $result=$num1-$num2;
            break;
            case 'Multiply' :
            $result=$num1*$num2;
            break;
           /*  case 'Divide'*/
            $result=$num1/$num2;
            break;
            /*case 'Modulas'*/
            $result=$num1%$num2;
            break;


            default:
            $result="error";
            break;
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Simple Calculater Using PHP Switch Statement</title>
	<style type="text/css">
	 *{
	 	margin: 0;
	 	padding: 0;
	 	/*box-sizing: border-box;*/
	 	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	 }
	 body{
	 	background-color: #666;
	 }
	 .main{
	 	width: 400px;
	 	margin: 50px auto;
	 	background-color: #1a4ce0;
	 	box-shadow: 0 0 10px 1px #000;
	 }
	 h2{
	 	width: 360px;
	 	padding: 20px;
	 	background-color: #1a4ce0;
	 	color: #fff;
	 	text-align: center;
	 	text-shadow: 1px 1px 1px #000;	
	 }
	 #form-box{
	 	padding: 15px;
	 }
     .inp{
         width: 92%;
         padding: 15px;
         font-size: 20px;
         margin-bottom: 10px;
         border: none;
         color: #ae9797;
         border-radius:10px;
     }
     .btn{
         width: 80%;
         padding: 10px;
         margin-bottom:5px;
         border: none;
         cursor: pointer;
         box-shadow: 0 0 25px #352727f0 inset, 1px 1px 1px #928b8b;
         border-radius: 20px;
         font-size: 15px;
         margin-left: 32px;
     }
     .btn:focus{
         outline: none;
         background-color: grey;
         color: black;
         border-color:grey;   
     }
     .result{
         width: 96%;
         text-align: center;
         background-color: #1603ca;
         color: #fff;
         padding: 8px;
     }
	</style>
	</head>
<body>
     <div class="main">
     	<h2>Simple Calculater Using PHP Switch Statement</h2>
     	<form action="" method="post" id="form-box">
     	     <input type="number" class="inp" name="num1" placeholder="Enter first digit..." required><br>
     	     <input type="number" class="inp" name="num2" placeholder="Enter second digit..." required><br>
     	     <input type="submit" name="submit" class="btn" value="Add">
     	     <input type="submit" name="submit" class="btn" value="Subtract">
     	     <input type="submit" name="submit" class="btn" value="Multiply">
     	     <input type="submit" name="submit" class="btn" value="Divide">
     	     <input type="submit" name="submit" class="btn" value="Modulas">
     	</form>
     	<h1 class="result">result :<?php if(isset($result)){echo $result;} ?></h1>
     </div>

</body>
</html>