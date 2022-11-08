<?php
require 'Pdo_Methods.php';
class FilesUploadProc extends PdoMethods{

	public function addFileName(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO FILES (filename, file) VALUES (:filename, :file)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':filename',$_POST['filename'],'str'],
			['file',$_POST['file'],'str']
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the file';
		}
		else {
			return 'File has been added';
		}
	}

	/*THIS FUNCTION TAKES THE DATA FROM THE DATABASE AND RETURN AN UNORDERED LIST OF THE DATA*/
	private function createList($records){
		$list = '<ul>';
		foreach ($records as $row){
			$list .= "<li><a target='_blank' href='PDF_Files/{$row['file']}'>{$row[filename]}</a></li>;";
		}
		$list .= '</ul>';
		return $list;
	}

	public function backToMain() {
		if($result != 'error') {
		
		}
	}
}