<?php
//open sqilite database and create table uploads;
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('testing.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
 $sql =<<<EOF
      CREATE TABLE UPLOADS
      (ID INT PRIMARY KEY NOT NULL,
      FIRST_NAME TEXT NOT NULL,
      MIDDLE_NAME TEXT NOT NULL,
      LAST_NAME TEXT NOT NULL, 
      PAYROLL_REF TEXT NOT NULL, 
      DATE INT NOT NULL
      
      );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>
   
   
   
   
   
   