<?php
$db=new SQLite3('testing.db');
$db->exec('DELETE FROM uploads');//empty the table of its current records
   
//Upload File to sqlite database.
if (isset($_POST['submit'])) {
    	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {		
	
	//Import uploaded file to Database
	$file = fopen($_FILES['filename']['tmp_name'], "r");       
            if ($file){ 
            $fline=0;
                while ( ($data = fgetcsv($file)) !== false ){ 
                if($fline==0){//avoid csv file heading,escape first iteration;
                $fline++;
                continue;
                            }
        //print_r($data); 
                $id=$data[0];
                $first_name=$data[1];
                $middle_name=$data[2];
                $last_name=$data[3];
                $payroll_ref=$data[4];
                $date=  strtotime("$data[5] 24.00"); 
                           
                $import="INSERT into UPLOADS(ID,FIRST_NAME,MIDDLE_NAME,LAST_NAME,PAYROLL_REF,DATE)".
                        "values('$id','$first_name','$middle_name','$last_name','$payroll_ref','$date')";
               $ret = $db->exec($import);
               
               if(!$ret){
                echo $db->lastErrorMsg();
                        }
                }
             }
}    
 $db->close();
fclose($handle);
header('location:view.php');
        
}
	