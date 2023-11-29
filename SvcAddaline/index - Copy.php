<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Q2220229 - Pivot table</title>
    <style>
      td {
        border-bottom: 1px solid grey;
        width: 10em;
      }
    </style>
  </head>

  <body>
<?php
 include "config.php";  // including configuration file
 
 ?>
<form name="frmdropdown" method="post" >
     <center>
            <h2 align="center">Pick Your Operation</h2>
         
            <strong> Select Operation SLIC : </strong> 
            <select name="OpName" > 
             <option value=""></option> 
            <option value="All"> -----------ALL----------- </option> 
            <?php
  $query = "Select SLIC, Ctr from t_SLIC_List ORDER by Ctr"; 
 $dd_res = $db->query($query); 
                // $dd_res=mysqli_query("Select SLIC from oe_scv_addaline");
                 while($r=mysqli_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[1] </option>";
                 }
             ?>
              </select>
              <strong> Select Time : </strong> 
            <select name="Optm"> 
             <option value=""></option> 
           
            <?php
  $query = "Select TimePeriod from oe_scv_addaline Group By TimePeriod"; 
 $dd_res = $db->query($query); 
                // $dd_res=mysqli_query("Select SLIC from oe_scv_addaline");
                 while($r=mysqli_fetch_row($dd_res))
                 { 
                       echo "<option value='$r[0]'> $r[0] </option>";
                 }
             ?>
              </select>
              
     <input type="submit" name="find" value="find"/> 
     <br><br>
     <?php 
     if($_SERVER['REQUEST_METHOD'] == "POST")
  {
        
         $op=$_POST["OpName"];
         if (! empty($_POST['OpName'])) 
         { $des= $op;
         } elseif ($_POST['OpName'] =="All") {
	         $des= "";
         }else  { $des= "";  }
     if (! empty($_POST['Optm'])) 
         { $tmpr= $_POST["Optm"];
         } else { $tmpr= "Daily";  }
         
$db->query('SET @sql = NULL');
$db->query("
SELECT GROUP_CONCAT(DISTINCT CONCAT(
      'MAX(IF(CurrDate = ''',
      CurrDate,
      ''', ROUND(Freq,0), NULL)) AS ''',
      CurrDate
    ,'''' )
order by CurrDate  ) INTO @sql
FROM oe_scv_addaline  WHERE TimePeriod = '$tmpr';
");
if ($_POST['OpName'] =="All") {
          //$ele=$_POST["OpElement"]; 
	      $db->query("SET @sql = CONCAT('SELECT SLIC, Element,  ', @sql, ' FROM oe_scv_addaline  GROUP BY  SLIC, Element   ');");
   } else{
	  $db->query("SET @sql = CONCAT('SELECT SLIC, Element,  ', @sql, ' FROM oe_scv_addaline where SLIC = ', $des,' GROUP BY  SLIC, Element   ');");
 
	  }
} else  { 
	$db->query('SET @sql = NULL');
$db->query("
SELECT GROUP_CONCAT(DISTINCT CONCAT(
      'MAX(IF(CurrDate = ''',
      CurrDate,
      ''', ROUND(Freq,0), NULL)) AS ''',
      CurrDate
    ,'''' )
order by CurrDate  ) INTO @sql
FROM oe_scv_addaline  WHERE TimePeriod = 'Daily';
");
 
$db->query("SET @sql = CONCAT('SELECT SLIC, Element,  ', @sql, ' FROM oe_scv_addaline GROUP BY  SLIC, Element   ');");

}
$db->query("PREPARE stmt FROM @sql");

$res = $db->query("EXECUTE stmt");
?> <table border="1">
 <tr align="center"> <?php 
while ($finfo = mysqli_fetch_field($res)) {
        echo "<th>", $finfo->name ,"</th>";
       
    }
   

?> </tr> <?php 
 while ( $row =  mysqli_fetch_row($res) ) { 
	 

	
	   echo "<tr>";
                 echo "<td align='center'>$row[0]</td>";
                 echo "<td width='200'>$row[1]</td>";
                 echo "<td alig='center' width='40'> $row[2]</td>";
                 echo "<td align='center' width='200'>$row[3]</td>";
                 echo "<td width='100' align='center'>$row[4]</td>";
                //echo "<td width='100' align='center'>$row[5]</td>";
                // echo "<td width='100' align='center'>$row[7]</td>";
                 echo "</tr>";
 }
 
 $values = $res->fetch_all(MYSQLI_ASSOC);
$columns = array();

if(!empty($values)){
    $columns = array_keys($values[0]);
}
//echo $columns;
//mysqli_fetch_field(result);

//var_dump($values);	