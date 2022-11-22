<?php
require_once 'Classes/dateProc.php';
$dt = new Date_Proc();
$output = $dt->checkSubmit();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Add Note</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
    </head>

    <body>
        <div id="wrapper">
            <header>
            <h1>Add Note</h1>
            </header>

        <main>
            <p class="error"><?php echo $output; ?></p>
            <a href="displayNote.php">Display Notes</a>
            <br><br>
            <form action="addNote.php" method="post">
            <div class="form-group">
                <label>Date and Time<input type="datetime-local" class="form-control" id="dateTime" name="dateTime"></label>
                <label>Notes: <textarea id="note" name="note" class="form-control" cols="30" rows="10"></textarea></label>
                <input type="submit" name="submit" value="Add Note" class="btn btn-primary">
            </div>

            </form> 
        </main>
    
        </div>
    </body>
</html>
