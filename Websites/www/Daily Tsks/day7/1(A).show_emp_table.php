<?php
    $link=mysql_connect("localhost","root","");
    echo "link value is : ".$link."<br>";
    if(!$link)
    {
        echo "Ops..!!!!!!"."<br>"."My Sql Not connected";
    }
    else
    {
        echo "Connected to My Sql....."."<br>";       
    }
    if(!mysql_select_db("ankit"))
    {
        echo "Cannot conect to database....";
    }
    else
    {
        echo "Conected to database....";
        $qr="select * from login";
        $execute=mysql_query($qr);
?>

        <body background="j1.jpg"></body>
        <hr />
        <center><h1 style="color: silver;">Showing Login Table</h1>
        <hr />
        <br />
        <br />
        <table border="4"  style="table-layout: auto;color: white;" width="30%" align="left">
        <tr >
        <td colspan="2" align="center">Login Table</td>
        </tr>
        <tr><td>User name</td><td>password</td></tr>
<?php
        while($row=mysql_fetch_row($execute))
        {
            echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
        
?>
        </table></center>
<?php
}
    mysql_close($link);
?>