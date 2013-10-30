<html> 
    <body> 
        <table border="0" cellspacing="0" cellpadding="0"> 
            <tr> 
                <td> 
                    Friend ID 
                </td> 
                <td> 
                    First Name 
                </td> 
                <td> 
                    Email Address 
                </td> 
            </tr> 
        <?php 
        $db = pg_connect('host=localhost port=5432 dbname=bktamu user=postgres password=sakana'); 

        $query = "SELECT * FROM mycandy"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $myrow['id'], htmlspecialchars($myrow['nama']), htmlspecialchars($myrow['email']));
        } 
        ?> 
        </table> 
    </body> 
</html> 
