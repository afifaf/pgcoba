<html> 
    <body> 
        <?php 
        $db = pg_connect('host=localhost port=5432 dbname=bktamu user=postgres password=sakana'); 

        $firstname = pg_escape_string($_POST['firstname']); 
        $emailaddress = pg_escape_string($_POST['emailaddress']); 

        $query = "INSERT INTO mycandy(nama, email) VALUES('" . $firstname . "', '" . $emailaddress . "')";
        $result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage; 
            exit(); 
        } 
        printf ("These values were inserted into the database - %s %s", $firstname, $emailaddress); 
        pg_close(); 
        ?> 
    </body> 
</html> 
