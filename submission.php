
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- :start of optional css-->

    <!-- font-awesome for icon -->
    <link rel="stylesheet" href="asset/font-awesome/css/all.min.css">

    <!-- animation css -->
    <link rel="stylesheet" href="asset/css/animate.css">

    <!-- hover css animations -->
    <link rel="stylesheet" href="asset/css/hover-min.css">

    <!-- :end of optional css -->
    <script type="text/javascript">
        
function addNums(){

	var answer = document.getElementById("answer").value;

	var digit1 = parseInt(document.getElementById("digit1").innerHTML);

	var digit2 = parseInt(document.getElementById("digit2").innerHTML);

	var sum = digit1 + digit2;

	if(answer == ""){

		alert("Please enter captcha answer");

	}else if(answer != sum){

		alert("Your answer is wrong");
	}else{

		// all good now! //

		document.getElementById("status").innerHTML = "Correct, it is now safe to submit the form";

		document.getElementById("answer").value = "";

	}

}

function randomNums(){

	var rand_num1 = Math.floor(Math.random() * 10) + 1;

	var rand_num2 = Math.floor(Math.random() * 10) + 1;

	document.getElementById("digit1").innerHTML = rand_num1;

	document.getElementById("digit2").innerHTML = rand_num2;

}

</script>

    <title>Submission form</title>
 </head>
  <body  onload="randomNums();">

    <div class="modal-content modal-dialog p-5 mt-5">
     
        <form action="" method="GET">      
                <div class="card-header"><center>Animal Regitration</center></div>
                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light">Name of the animal:</span>
                            </div>
                                <input name="name" type="text" class="form-control" placeholder="Enter animal name" required> </input>
                            </div>
                            <div class="input-group-prepend mt-4">
                                <span class="input-group-text bg-light">Category:</span>
                                <select name="category" class="form-control">
                                    <option value="Herbivores">Herbivores</option>
                                    <option value="Omnivores">Omnivores</option>
                                    <option value="Carnivores">Carnivores</option>
                                </select>
                            </div>
                            <div class="input-group-prepend mt-4">
                                <span class="input-group-text bg-light">Select Image:</span>
                                <input name="image" class="form-control" type="file" id="myFile" accept=".jpeg, .jpg, .png" required>
                            </div>
                            <div class="input-group-prepend mt-4">
                                <span class="input-group-text bg-light">Description: </span>
                                <textarea name="descri" class="form-control" placeholder="Enter Description" required> </textarea>
                            </div>
                            <div class="input-group-prepend mt-4">
                                <span class="input-group-text bg-light">Life expectancy:</span>
                                <select name="exept" class="form-control">
                                    <option value="0-1 year">0-1 year</option>
                                    <option value="1-5 year">1-5 years</option>
                                    <option value="5-10 year">5-10 years</option>
                                    <option value="10+ year">10+ years</option>
                                </select>
                                
                            </div> 
                            <div class="input-group-prepend mt-4"> 
                                <span class="input-group-text bg-light">Solve Captcha:</span>.
                                <label class="input-group-text bg-light"  id="digit1"></label> +

                                    <span class="input-group-text bg-light"  id="digit2"></span>
                                = 
                                <input type="text" class="form-control" id="answer" placeholder="Enter Answer" required/>
    </div>


<br>
                        <div class="mt-4"></div>
                        <input class="btn btn-block btn-outline-danger" type="submit" value="Submit" onclick="addNums();"  name="submit"/>
            </div>
    </div>

</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.4.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
include_once 'connect.php';
if(isset($_GET['submit']))
{    
    $fn=$_GET['name'];
    $bn=$_GET['category'];
    $ln=$_GET['image'];
    $cc=$_GET['descri'];
    $pn=$_GET['exept'];
     $sql = "INSERT INTO registration values('$fn','$bn','$ln','$cc','$pn')";
     if (mysqli_query($conn, $sql)) {
      
        echo "<script> alert('Stored successfully'); </script>";
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
     header("Location: animal.php"); 
}
?>

