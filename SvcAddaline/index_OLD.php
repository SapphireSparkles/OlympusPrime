<span style='font-family: Georgia, "Times New Roman", "Bitstream Charter", Times, serif; font-size: small;'><span style="line-height: 19px;"> </span></span>
<?php
      include "config.php";  // including configuration file
?>
 <html>
 <body>
	<form name = "frmdropdown" method = "POST" >
     <center>
            <h2 align="center">Pick Your Operation</h2>
         
            <strong> Select SLIC : </strong> 
            <select name="OpName"> 
               <option value=""> -----------ALL----------- </option> 
            <?php
  				$query = "Select DISTINCT SLIC from oe_scv_addaline";
                 $dd_res= $db->query($query); //mysqli_query(Selecting);
                 while($r=mysqli_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="find"/> 
     <br><br>
  
   <table border="1">
 <tr align="center">
     <th>Element</th>      <th>Date</th>     <th>Time Period</th>    <th>SLIC</th>    <th>Freq</th>
 </tr> 
 
 <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des=$_POST["OpName"]; 
         if($des=="")  // if ALL is selected in Dropdown box
         { 
             $query = "Select * from oe_scv_addaline";
	         $res= $db->query($query); //mysqli_query("Select * from oe_scv_addaline");
         }
         else
         { 
             $query = "Select * from oe_scv_addaline where SLIC='".$des."'";
	         $res= $db->query($query); //mysqli_query("Select * from oe_scv_addaline where SLIC='".$des."'");
         }
  
         echo "<tr><td colspan='5'></td></tr>";
         //while($r=mysqli_fetch_row($res))
         while($row = $res->fetch_assoc() )
         {
                 echo "<tr>";
                 echo "<td align='center'>$row[Element]</td>";
                 echo "<td width='200'>$row[CurrDate]</td>";
                 echo "<td align='center' width='40'> $row[TimePeriod]</td>";
                 echo "<td align='center' width='200'>$row[SLIC]</td>";
                 echo "<td width='50' align='center'>$row[Freq]</td>";
                 echo "</tr>";
        }
    }
?>
  </table>
 </center>
</form>
</body>
</html>