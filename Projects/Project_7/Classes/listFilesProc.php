<?php

require_once "Classes/fileUploadProc.php";

public function getFileNames($type){
		
    /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
    $pdo = new PdoMethods();

    /* CREATE THE SQL */
    $sql = "SELECT * FROM files";

    //PROCESS THE SQL AND GET THE RESULTS
    $records = $pdo->selectNotBinded($sql);

    /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
    if($records == 'error'){
        return 'There has been and error processing your request';
    }
    else {
        if(count($records) != 0){
            if($type == 'list'){return $this->createList($records);}
            if($type == 'input'){return $this->createInput($records);}	
        }
        else {
            return 'No files found';
        }
    }
}
?>