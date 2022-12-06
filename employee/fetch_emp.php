<?php
    header("Content-Type:application/json");
	include('../connection.php');
	$sql = "SELECT * FROM emp_table";
    $result = $connectNow->query($sql);


	if($result->num_rows > 0){
	$rows = array();
    while($row = $result->fetch_assoc())
    {
        $rows[] = $row;
    }

    echo json_encode($rows);
}

?>