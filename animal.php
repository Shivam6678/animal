<?php
include("connect.php");
error_reporting(0);
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `registration` WHERE CONCAT('category') LIKE '%".$valueToSearch."%'";
    $data = filterTable($sql);
    
}
 else {
$sql = "SELECT * FROM registration ORDER BY name";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
 }
if ($total !=0)
{
?>
    <html>
    <script LANGUAGE="JavaScript">
function GetCookie (name) { 
var arg = name + "="; 
var alen = arg.length; 
var clen = document.cookie.length; 
var i = 0; 
while (i < clen) {
var j = i + alen;   
if (document.cookie.substring(i, j) == arg)     
return getCookieVal (j);   
i = document.cookie.indexOf(" ", i) + 1;   
if (i == 0) break;  
} 
return null;
}
function SetCookie (name, value) { 
var argv = SetCookie.arguments; 
var argc = SetCookie.arguments.length; 
var expires = (argc > 2) ? argv[2] : null; 
var path = (argc > 3) ? argv[3] : null; 
var domain = (argc > 4) ? argv[4] : null; 
var secure = (argc > 5) ? argv[5] : false; 
document.cookie = name + "=" + escape (value) +
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
((path == null) ? "" : ("; path=" + path)) + 
((domain == null) ? "" : ("; domain=" + domain)) +   
((secure == true) ? "; secure" : "");
}
function DeleteCookie (name) { 
var exp = new Date(); 
exp.setTime (exp.getTime() - 1);  
var cval = GetCookie (name); 
document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}
var expDays = 30;
var exp = new Date();
exp.setTime(exp.getTime() + (expDays*24*60*60*1000));
function amt(){
var count = GetCookie('count')
if(count == null) {
SetCookie('count','1')
return 1
}
else {
var newcount = parseInt(count) + 1;
DeleteCookie('count')
SetCookie('count',newcount,exp)
return count
   }
}
function getCookieVal(offset) {
var endstr = document.cookie.indexOf (";", offset);
if (endstr == -1)
endstr = document.cookie.length;
return unescape(document.cookie.substring(offset, endstr));
}
// End -->
</script>

    <body >
    <div align="center" class="col-lg-12 text-center">
    <br>
    </div>
    <a href="submission.php"> <input class="btn btn-default submit " type="button" value="<back"> </a>
    <br/>
    <br/><script LANGUAGE="JavaScript">

document.write("Total Vistor <b>" + amt() + " times.")
// End -->
</script>

<html>
    <body>     
        <br>
<form action="" method="post">
<br> <br>
            <div class="input-group-prepend mt-4">
                <span class="input-group-text bg-light">Category:</span>
                <select name="valueToSearch" class="form-control">
                    <option value="Herbivores">Herbivores</option>
                    <option value="Omnivores">Omnivores</option>
                    <option value="Carnivores">Carnivores</option>
                </select>
            </div>  
            <div>
                <span class="input-group-text bg-light">Life expectancy:</span>
                <select name="exept" class="form-control">
                    <option value="0-1 year">0-1 year</option>
                    <option value="1-5 year">1-5 years</option>
                    <option value="5-10 year">5-10 years</option>
                    <option value="10+ year">10+ years</option>
                </select>
                
            </div> 
            
<input type="submit" name="search" value="Filter">   <div class="input-group-prepend mt-4">
            <br><br>
    <hr><br>
    <table align="center" border="5" cellpadding="8">
    <tr bgcolor="skyblue">
        <th width="15%">Name of Animal</th>
        <th>Category</th>
        <th>Image</th>
        <th>Description</th>
        <th>Year Expectancy</th>
    </tr>
    <?php
            while($row = mysqli_fetch_array($data))
            {
            echo "<tr>";
                    echo"<td>".$row['name']."</td>";
                    echo"<td>".$row['category']."</td>";
                    echo"<td>". "<img src=image/".$row['image'].' width=200px height="200px">' ." </td>";
                    echo"<td>".$row['descri']."</td>";
                    echo"<td>".$row['experience']."</td>";
            
            echo"</tr>";
            }
            }
            else
            {
            echo "No Record Found";
            }
            ?>
            </table>
       </body>
    </html>
    