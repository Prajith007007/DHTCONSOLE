<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Display</title>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <link rel="stylesheet" href="Assets/display_file.css">
    </head>

    <body>
        <header>
            <div id="header">
                <i class="material-icons" id="description_icon">description</i>
                Display Files
            </div>
        </header>
        <form method="POST">
            <input type="submit" class="display_button" name="displaybutton" value="Display Files">
        </form>
        <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>S.No.</th>
                <th>File Name</th>
                <th>Extension</th>
            </tr>
            </thead>
            <tbody>
        <?php
        if(isset($_POST['displaybutton']))
        {
            $dir_path="Fodgers_DHT-master/utils/deploy/";

            if(is_dir($dir_path))
            {
                $files=scandir($dir_path);

                for($i=0; $i < count($files); $i++)
                {
                    if($files[$i] !='.' && $files[$i] !='..')
                    {
                        ?>
                        
                        <tr>
                            <td><?php echo ($i-1);?></td>
                            <td><?php echo $files[$i];?></td>
                            <td><?php $file = pathinfo($files[$i]);
                                    $extension = $file['extension'];
                                    echo $extension;?></td>
                        </tr>   
                    <?php               
                    }
                }
            }
        }
        ?>
        </tbody>
        </table>
    </div>
    </body>
</html>