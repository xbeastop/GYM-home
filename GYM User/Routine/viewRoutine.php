<?php 

$dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}
$name = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine</title>
    <link rel="stylesheet" href="routine.css">
</head>
<body>
   
<div class="home-short">
<ul>
    <li>
          <a href="../HomePage/index.php">Home<a>
    </li>
 </ul>

</div>
    <form>
       
        <div class="container">

            <div class="regform">
                <h1>
                    <?php echo $name; ?>
                </h1>
            </div>

            <?php 
            $row = mysqli_query($dataBase,"SELECT * FROM routine WHERE routineName ='$name'");
           
            foreach($row as $fields){
                 foreach($fields as $key => $field){
                echo '
                <div class="input-field">
                <label for="'.$key.'">'.$key.'</label>
                <input value="'.$field.'" class="'.$key.'" type="text" id="'.$key.'" name="'.$key.'">
            </div>';
                 }
            }
            ?>
            

            <!-- <div class="input-field">
                <label for="day2">Day 2: </label>
                <input type="text" id="day2" name="day2">
            </div>
            <div class="input-field">
                <label for="day3">Day 3: </label>
                <input type="text" id="day3" name="day3">
            </div>
            <div class="input-field">
                <label for="day4">Day 4: </label>
                <input type="text" id="day4" name="day4">
            </div>
           
           
            <div class="input-field">
                <label for="day5">Day 5: </label>
                <input type="text" id="day5" name="day5">
            </div>
            <div class="input-field">
                <label for="day6">Day 6: </label>
                <input type="text" id="day6" name="day6">
            </div>
          -->
           
           
        </div>
    </form>


</body>
</html>