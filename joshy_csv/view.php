<?php
//viewing the uploaded data from sqlite database.
 echo"<link rel='stylesheet' type='text/css' href='style.css'/>";
 echo "<div id='view'>";
$db=new SQLite3('testing.db');
    $sql ="SELECT * from uploads";
   
         $ret = $db->query($sql);
            if(!$ret){
                 echo $db->lastErrorMsg();
                    }
                  else {
                      $i=0;
                    while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
                    $i++;
                    echo "$i)&nbsp&nbsp&nbsp"."ID = ". $row['ID'] . "<br>";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp".
                         "FIRSTNAME = ". $row['FIRST_NAME'] ."<br>";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp".
                          "MIDDLENAME = ". $row['MIDDLE_NAME'] ."<br>";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp".
                            "LASTNAME = ". $row['LAST_NAME'] ."<br>";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp".
                            "PAYROLL_REF = ". $row['PAYROLL_REF'] ."<br>";
                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp".
                            "DATE =  ". gmdate('jS F Y',$row['DATE']) .
                            "<br>"."<br>"."<hr>";
                              }
             }
                 echo "<h3>Thank You.You are successfully uploaded this data.".
                         "<a href='index.php'>upload more</a></h3>\n";
   $db->close();
   echo"</div>";
?>