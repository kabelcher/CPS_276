<?php
require_once 'Pdo_methods.php';

class Date_Proc {

    public function getDateTimeNote(){
        $pdo = new PdoMethods();
        
        $sql = "SELECT date_time, note FROM notes WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";

        $records = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been an error processing your request';
        }
        else {
            if(count($records) != 0){
                return $this->makeTable($records);
                
            }
            else {
                return 'No notes found';
            }
        }
    }

    public function checkSubmit(){

        if(isset($_POST['submit'])){
            if(empty($_POST['note'])){
                return  'There has been and error processing your request';
            }
            else{
                
                $this->addNote();
                return 'Note Added';
            }
          
        }
    }

    
	public function addNote(){
	
		$pdo = new PdoMethods();
        $date_time = strtotime('dateTime');
        


		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO notes (date_time, note) VALUES (:date_time, :note)";
        

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
            [':dateTime',$_POST['dateTime'],'str'],
			[':note',$_POST['note'],'str'],
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the note';
		}
		else {
			return 'Note added successfully';
		}
	}

    private function makeTable($records){
        $output = "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Date and Time</th><th>Note</th></tr><tbody>";
		foreach ($records as $row){
            $date = getDate('date_time');
            $output .= "<tr><td>{$row[$date]}</td>";
            
            $output .= "<td>{$row['note']}</td>";
		}
		
		$output .= "</tbody></table>";
		return $output;
    }
}

?>
