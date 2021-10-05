<?php

require("ok.php");
$email =$_POST['email'];
$motivo     =$_POST['motivo'];
$mensaje  =$_POST['mensaje'];

$censuradas=array('Argüendero', 'coscolino', 'traqueteado', 'aguado', 'fodongo', 'mamón','chingaquedito', 'fufurufo', 'malacopa', 'chachalaco', 'mitotero', 'farol', 'pichicato','mafufo',
'Pinche', 'a huevo', 'huevos', 'pendejo', 'mamon', 'cabron', 'chingadera', 'chinga tu madre', 'culero', 'madrazo', 'mamada', 'pinche', 'puto', 'puta', 'putiza', 'joto', 'verga', 'wey',
'Maricon', 'argüendero', 'coscolino', 'traqueteado', 'aguado', 'fodongo', 'mamón','mamon','chingaquedito', 'fufurufo', 'malacopa', 'chachalaco', 'mitotero', 'farol', 'pichicato','mafufo',
'Pinche', 'a huevo', 'huevos', 'pendejo', 'mamon', 'cabron', 'chingadera', 'chinga tu madre', 'culero', 'madrazo', 'mmada', 'pinche', 'puto', 'puta', 'putiza', 'joto', 'verga', 'wey','cagaste',
'Maricon','la cagas', 'gay', 'gay', 'mamadas', 'mamadas', 'me la pelas', 'me la pelas', 'ctm', 'ctm', 'ctm', 'ojete', 'ojete', 'mayate', 'mayate', 'cara de culo', 'alv', 'puñetas', 'puñetas', 'marica', 'marica',
'Put0', 'put0', 'pito', 'pito', 'ARGÜENDERO', 'COSCOLINO', 'TRAQUETEADO', 'AGUADO', 'FODONGO', 'MAMÓN','CHINGAQUEDITO', 'FUFURUFO', 'MALACOPA', 'CHACHALACO', 'MITOTERO', 'FAROL', 'PICHICATO','MAFUFO',
'PINCHE', 'A HUEVO', 'HUEVOS', 'PENDEJO', 'MAMON', 'CABRON', 'CHINGADERA', 'CHINGA TU MADRE', 'CULERO', 'MADRAZO', 'MAMADA', 'PINCHE', 'PUTO', 'PUTA', 'PUTIZA', 'JOTO', 'VERGA', 'WEY',
'MARICON', 'ARGÜENDERO', 'COSCOLINO', 'TRAQUETEADO', 'AGUADO', 'FODONGO', 'MAMÓN','MAMON','CHINGAQUEDITO', 'FUFURUFO', 'MALACOPA', 'CHACHALACO', 'MITOTERO', 'FAROL', 'PICHICATO','MAFUFO',
'PINCHE', 'A HUEVO', 'HUEVOS', 'PENDEJO', 'MAMON', 'CABRON', 'CHINGADERA', 'CHINGA TU MADRE', 'CULERO', 'MADRAZO', 'MMADA', 'PINCHE', 'PUTO', 'PUTA', 'PUTIZA', 'JOTO', 'VERGA', 'WEY','CAGASTE',
'MARICON','LA CAGAS', 'GAY', 'GAY', 'MAMADAS', 'MAMADAS', 'ME LA PELAS', 'ME LA PELAS', 'CTM', 'CTM', 'CTM', 'OJETE', 'OJETE', 'MAYATE', 'MAYATE', 'CARA DE CULO', 'ALV', 'PUÑETAS', 'PUÑETAS', 'MARICA', 'MARICA',
'PUT0', 'PUT0', 'PITO', 'PITO', 'Argüendero', 'Coscolino', 'Traqueteado', 'Aguado', 'Fodongo', 'Mamón','Chingaquedito', 'Fufurufo', 'Malacopa', 'Chachalaco', 'Mitotero', 'Farol', 'Pichicato','Mafufo',
'Pinche', 'A Huevo', 'Huevos', 'Pendejo', 'Mamon', 'Cabron', 'Chingadera', 'Chinga Tu Madre', 'Culero', 'Madrazo', 'Mamada', 'Pinche', 'Puto', 'Puta', 'Putiza', 'Joto', 'Verga', 'Wey',
'Maricon', 'Argüendero', 'Coscolino', 'Traqueteado', 'Aguado', 'Fodongo', 'Mamón','Mamon','Chingaquedito', 'Fufurufo', 'Malacopa', 'Chachalaco', 'Mitotero', 'Farol', 'Pichicato','Mafufo',
'Pinche', 'A Huevo', 'Huevos', 'Pendejo', 'Mamon', 'Cabron', 'Chingadera', 'Chinga Tu Madre', 'Culero', 'Madrazo', 'Mmada', 'Pinche', 'Puto', 'Puta', 'Putiza', 'Joto', 'Verga', 'Wey','Cagaste',
'Maricon','La Cagas', 'Gay', 'Gay', 'Mamadas', 'Mamadas', 'Me La Pelas', 'Me La Pelas', 'Ctm', 'Ctm', 'Ctm', 'Ojete', 'Ojete', 'Mayate', 'Mayate', 'Cara De Culo', 'Alv', 'Puñetas', 'Puñetas', 'Marica', 'Marica',
'Put0', 'Put0', 'Pito', 'Pito', 'aRGÜENDERO', 'cOSCOLINO', 'tRAQUETEADO', 'aGUADO', 'fODONGO', 'mAMÓN','cHINGAQUEDITO', 'fUFURUFO', 'mALACOPA', 'cHACHALACO', 'mITOTERO', 'fAROL', 'pICHICATO','mAFUFO',
'pINCHE', 'a hUEVO', 'hUEVOS', 'pENDEJO', 'mAMON', 'cABRON', 'cHINGADERA', 'cHINGA tU mADRE', 'cULERO', 'mADRAZO', 'mAMADA', 'pINCHE', 'pUTO', 'pUTA', 'pUTIZA', 'jOTO', 'vERGA', 'wEY',
'mARICON', 'aRGÜENDERO', 'cOSCOLINO', 'tRAQUETEADO', 'aGUADO', 'fODONGO', 'mAMÓN','mAMON','cHINGAQUEDITO', 'fUFURUFO', 'mALACOPA', 'cHACHALACO', 'mITOTERO', 'fAROL', 'pICHICATO','mAFUFO',
'pINCHE', 'a hUEVO', 'hUEVOS', 'pENDEJO', 'mAMON', 'cABRON', 'cHINGADERA', 'cHINGA tU mADRE', 'cULERO', 'mADRAZO', 'mMADA', 'pINCHE', 'pUTO', 'pUTA', 'pUTIZA', 'jOTO', 'vERGA', 'wEY','cAGASTE',
'mARICON','lA cAGAS', 'gAY', 'gAY', 'mAMADAS', 'mAMADAS', 'mE lA pELAS', 'mE lA pELAS', 'cTM', 'cTM', 'cTM', 'oJETE', 'oJETE', 'mAYATE', 'mAYATE', 'cARA dE cULO', 'aLV', 'pUÑETAS', 'pUÑETAS', 'mARICA', 'mARICA',
'pUT0', 'pUT0', 'pITO', 'pITO','chingadamadre', 'CHINGADAMADRE', 'CHINGADA', 'chingada', 'Chingad', 'cHINGADA');

$partes=count($censuradas);
$frasecompleta=$mensaje;

for($i=0; $i<$partes; $i++){
    if(strpos($frasecompleta,$censuradas[$i]) !==false){
        $frasecompleta=str_replace($censuradas[$i], '******',$frasecompleta);
    }
}

$sql="INSERT INTO tbl_buzon (email, motivo, mensaje, fecha) values (AES_ENCRYPT('$email', '$email'), '$motivo', '$frasecompleta', NOW())";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
?>