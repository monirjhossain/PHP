

<table border="5">
<tr>
	<th>ID</th>
    <th>Name</th>
    <th>MCQ</th>
    <th>Descriptive</th>
    <th>Evidence</th>
    <th>Result</th>

</tr>

<?php

$resultSheet = array();
$resultSheet[]= array("ID"=>1, "Name"=>"Student1", "MCQ"=>"40", "Descriptive"=>"37", "Evidence"=>"30");
$resultSheet[]= array("ID"=>2, "Name"=>"Student2", "MCQ"=>"28", "Descriptive"=>"40", "Evidence"=>"40");
echo "<pre>";
//print_r($resultSheet);
foreach($resultSheet as $result){
	$total = $result["MCQ"] + $result["Descriptive"]; 
	$eve = $result["Evidence"];
	if($total>=70){
		$res = "Passed";
		}else{
		$res = "Failed";	
			}?>
         <tr>
         	<td><?php echo $result["ID"]; ?></td>
            <td><?php echo $result["Name"]; ?></td>
            <td><?php echo $result["MCQ"]; ?></td>
            <td><?php echo $result["Descriptive"]; ?></td>
            <td><?php echo $result["Evidence"]; ?></td>
            <td><?php echo $res; ?></td>
         </tr>
       
<?php	
	}
?>
</table>
