<?php 
include 'databaseConnect.php';

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

    $sql = "INSERT INTO `GUESSES`(`drawingMonth`,`name`, `guess`) VALUES ('$drawingMonth','$newName','$newGuess')";
    $result = $conn->query($sql);
    
}

$conn->close();
include_once '/header.php';
?>


<div id="topSection" class="container-fluid">
    <h1 id="headerText" class="text-light m-3 p-3"></h1>
    <div class="guessSection">
        <h2><?php echo ($result) ? "Congrats $newName, your guess was added for $drawingMonth." : "Unfortunately Someone already guessed that amount"; ?>
        </h2>
        <?php if (!$result) {
                echo "<a href='/guess'>Try Again</a>";
            } ?>
    </div>
</div>
<div class="guessSectionMobile">
    <h2><?php echo ($result) ? "Congrats $newName, your guess was added for $drawingMonth." : "Unfortunately Someone already guessed that amount"; ?>
    </h2>
    <?php if (!$result) {
                echo "<a href='/guess'>Try Again</a>";
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
        <form class="text-center" id="emailForm">
            <label for="emailInput">Enter Email to Stay up to date!:</label><br />
            <input type="email" name="emailInput" id="emailInput" />
            <input type="submit" id="emailSubmit" class="btn btn-primary my-3" />
        </form>
    </div>
</article>
<?php include_once '/footer.php'; ?>