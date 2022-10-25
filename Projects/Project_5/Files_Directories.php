<?php
    
    $output ="";
    $msg = "";
    $path = "";
    $directoryPath = "";
    $folderName = "";
    $fileText = "";


    if(isset($_POST['submitButton'])){
        $directory = new Directories;
        $directory->create_directory();
        $directory->create_file();

        $output = <<<HTML
                <p>$msg</p>
                <a href= "https://russet-v8.wccnet.edu/~kabelcher/CPS_276/Projects/Project_5/Directories/$folderName/" >Path where the file is located</a>
                HTML;

        
    }
   
    class Directories {

        
        public function create_directory() {
            
            $folderName = $_POST["folderName"];

            if(!is_dir($folderName)){ 
                
                $path = "https://russet-v8.wccnet.edu/~kabelcher/CPS_276/Projects/Project_5/Directories/$folderName/readme.txt";
                $directoryPath = dirname($path);
                $success = mkdir($directoryPath, 0777, true);

                chmod('https://russet-v8.wccnet.edu/~kabelcher/CPS_276/Projects/Project_5', 0777);
                chmod('https://russet-v8.wccnet.edu/~kabelcher/CPS_276/Projects/Project_5/Directories', 0777);
                chmod('https://russet-v8.wccnet.edu/~kabelcher/CPS_276/Projects/Project_5/Directories/$folderName/', 0777);
            }
            else{
                $msg = "A directory already exists with that name";
            }
        }

        public function create_file() {
            
            $fileText = $_POST["fileText"];

            if($success){
                $readMe = fopen($path.readme.txt,"w") or die("Unable to open the file.");
                fwrite($readMe, $fileText);
                fclose($readMe);
                $msg = "Directory and file created";
                
        
     
            }
            else{
                $msg = "There was an issue";
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>File and Directory Assignment</title>
    </head>

    <body>
        <main class="container">
            <h1>File and Directory Assignment</h1>
            <?php echo $output?>
            <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>
            
                <form action="Files_Directories.php" method="post">
                    <div class="form-group">
                        <label for="folderName">Folder Name</label>
                        <input type="text" class="form-control" name="folderName" id="folderName">
                    </div>
                    <div class="form-group">
                        <label for="fileText">File Content</label>
                        <textarea name="fileText" class="form-control" id="fileText" rows="10" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="submitButton" id="submitButton" value="Submit">
                    </div>
                </form>
        </main>
    </body>
</html>