<!--<!DOCTYPE html>
<html>
    <head>
        <title>Upload a CSV  title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" type="text/css" href="style.css"/>
        
    </head>
    <body>
        <div id="box">
        <div class="form">
            <form enctype="mulipart/form-data" method="post" action="upload.php">
                <label for="filename"><h3>Please Upload your CSV file here:</h3></label>
                <br><br>
                <input type="file" name="filename"  >
                <br><br>
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>
            </div>
    </body>
</html>-->


<?php
 echo"<link rel='stylesheet' type='text/css' href='style.css'/>";
 echo "<div id='box'>";
 echo"<div class='form'>";
 echo "<h3>"."Upload new csv by browsing to file and clicking on Upload<br />\n"."</h3>";

	echo "<form enctype='multipart/form-data' action='upload.php' method='post'>";

	//echo "File name to import:<br />\n";

	echo "<input size='50' type='file' name='filename'><br />\n";

	echo "<input type='submit' name='submit' value='Upload'></form>";
        echo"</div>";
        echo"</div>";
        
?>