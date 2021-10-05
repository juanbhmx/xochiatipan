<?php
    require('ok.php');
    $query=mysql_query("select * from tbl_sevac where <año> LIKE '%{$ar}%'");
    while($row=mysql_fetch_assoc($conn, $query))
    {
      $array[] = $row['doc'];
    }
    echo json_encode($array);
?>