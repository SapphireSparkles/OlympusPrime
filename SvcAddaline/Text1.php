<span style='font-family: Georgia, "Times New Roman", "Bitstream Charter", Times, serif; font-size: small;'><span style="line-height: 19px;"> </span></span><?php
      include "config.php";  // including configuration file
?>
 <html>
 <body>
     <form name="frmdropdown" method="post" action="emp_dd_display.php">
     <center>
            <h2 align="center">Employee Data</h2>
         
            <strong> Select Designation : </strong> 
            <select name="empName"> 
               <option value=""> -----------ALL----------- </option> 
            <?php
  
                 $dd_res=mysql_query("Select DISTINCT Element from oe_scv_addaline");
                 while($r=mysql_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
     <input type="submit" name="find" value="find"/> 
     <br><br>
  
   <table border="1">
 <tr align="center">
     <th>Emp_Id </th>      <th>Emp_name </th>     <th>Age</th>    <th>Designation</th>    <th>Salary</th>
 </tr> 
 
 <?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
         $des=$_POST["empName"]; 
         if($des=="")  // if ALL is selected in Dropdown box
         { 
             $res=mysql_query("Select * from oe_scv_addaline");
         }
         else
         { 
             $res=mysql_query("Select * from oe_scv_addaline where Element='".$des."'");
         }
  
         echo "<tr><td colspan='5'></td></tr>";
         while($r=mysql_fetch_row($res))
         {
                 echo "<tr>";
                 echo "<td align='center'>$r[0]</td>";
                 echo "<td width='200'>$r[1]" . " $r[2]</td>";
                 echo "<td alig='center' width='40'> $r[3]</td>";
                 echo "<td align='center' width='200'>$r[4]</td>";
                 echo "<td width='100' align='center'>$r[5]</td>";
                 echo "</tr>";
        }
    }
?>
  </table>
 </center>
</form>
</body>
</html>
