<?php
    require_once 'Classes/dateProc.php';
    $dt = new Date_Proc();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Display Notes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
    </head>

    <body>
        <div id="wrapper">
            <header>
            <h1>Display Notes</h1>
            </header>

            <main>
                <a href="addNote.php">Add Note</a>
                <br><br>
                <form action="displayNote.php" method="post">
                    <div class="form-group">
                        <label>Beginning Date<input type="date" class="form-control" id="begDate" name="begDate"></label>
                        <label>End Date<input type="date" class="form-control" id="endDate" name="endDate"></label>
                        <input type="submit" name="submit" value="Get Notes" class="btn btn-primary">
                    </div>
                </form> 
                <div id="dateTable"><?php echo $dt->getDateTimeNote(); ?></div>
            </main> 
        </div>
    </body>
</html>