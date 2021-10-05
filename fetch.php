<?php 
    if(isset($_GET['filter'])){
        $filter = trim($_GET['filter']);
        if(!empty($_GET['filter'])){
            $con = mysqli_connect('localhost','root','','hh20202024');
            if($filter == 'all'){
                $stmnt = $con->prepare('select * from tbl_sevaco');
            }else {
                $stmnt = $con->prepare('select * from tbl_sevaco where año=?');
                $stmnt->bind_param('s',$filter);
            };
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($id,$nombre,$doc,$año,$trimestre);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'id'=>$id,
                    'nombre'=>$nombre,
                    'doc'=>$doc,
                    'año'=>$año,
                    'trimestre'=>$trimestre
                );
                array_push($final,$each);
            };
            echo json_encode($final);
            $stmnt->close();
            $con->close();
        };
    };
?>

