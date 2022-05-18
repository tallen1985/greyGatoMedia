<?php 
include 'databaseConnect.php';
include '../header.php';

$anne = false;
function decideMonth ($currentDate) {
    $currentMonth = date('m');
    if ($currentDate > 15) {
        $currentMonth++;
    } 

    
  
// Use mktime() and date() function to
// convert number to month name
    return date("F", mktime(0, 0, 0, $currentMonth, 10));
  
}



if (isset($_POST['submitBtn'])) {
    $newName = $_POST['newName'];
    $newGuess = $_POST['newGuess'];
    $drawingMonth = decideMonth(date('d'));
    
    if (($newName == 'anne') && ($newGuess == 'thomas')) {
        $anne = true;
        $sql = "SELECT * FROM GUESSES WHERE drawingMonth='$drawingMonth'";
        $result = $conn->query($sql);
        $resultMobile = $result;
        
    } else {
        
    $sql = "INSERT INTO `GUESSES`(`drawingMonth`,`name`, `guess`) VALUES ('$drawingMonth','$newName','$newGuess')";
    $result = $conn->query($sql);
    
    }
    
}

?>


<div id="topSection" class="container-fluid guess">
    <h1 id="headerText" class="text-light m-3 p-3 guess"></h1>
    <div class="guessSection <?php echo ($anne) ? 'anne' : ' ' ?>">
        <?php if ($anne) {
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="anne"<p>'.$row["drawingMonth"].'</p><p>'.$row["name"].'</p><p> Guess: '.$row["guess"].'</p></div>';
                }
                mysqli_data_seek($result ,0);
            } else {
                echo "0 results";
            }
        } else { 
            echo ($result) ? "<h2>Congrats $newName, your guess was added for $drawingMonth." : "Unfortunately Someone already guessed that amount</h2><a href='/guess'>Try Again</a>";
        } ?>
    </div>
</div>
<div class="guessSectionMobile">
    <?php if ($anne) {
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="anne"<p>'.$row["drawingMonth"].'</p><p>'.$row["name"].'</p><p> Guess: '.$row["guess"].'</p></div>';
                }
                
            } else {
                echo "0 results";
            }
        } else { 
            echo ($result) ? "<h2>Congrats $newName, your guess was added for $drawingMonth." : "Unfortunately Someone already guessed that amount</h2><a href='/guess'>Try Again</a>";
        } ?>
</div>
<article id="contactSection" class="col-sm-11 col-md-10 mx-auto my-3 px-3">
    <h3>Get Ahold of Us</h3>
    <div id="contactBox" class="col-sm-10 col-md-9 mx-auto d-flex flex-row flex-wrap justify-content-evenly">
        <div>
            <p>
                <em>Grey Gato Media</em> <br />39 Elm Street <br />Newmarket NH
                03857
            </p>
        </div>
        <div class="text-center">
            <p>Email: <a href="mailto:jake@greygato.com">Jake@greygato.com</a></p>
        </div>
    </div>
</article>
<?php include_once '../footer.php'; ?>