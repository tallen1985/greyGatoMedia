<?php include '../header.php'; ?>
<div id="topSection" class="container-fluid">
    <h1 id="headerText" class="text-light m-3 p-3"></h1>
    <div class="guessSection">
        <h2>Let's Play "Guess Ann's check this month!"</h2>

        <form action="insert.php" method="POST">
            <div>
                <label>Name: </label>
                <input type="text" name="newName" id="newName" />
            </div>
            <div>
                <label>Amount: </label>
                <input type="text" name="newGuess" id="newGuess" />
            </div>
            <input type="submit" name="submitBtn" value="Add Guess"></input>
        </form>
    </div>
</div>
<div class="guessSectionMobile">
    <h2>Let's Play "Guess Ann's check this month!"</h2>

    <form action="insert.php" method="POST">
        <div>
            <label>Name: </label>
            <input type="text" name="newName" id="newName" />
        </div>
        <div>
            <label>Amount: </label>
            <input type="text" name="newGuess" id="newGuess" />
        </div>
        <input type="submit" name="submitBtn" value="Add Guess"></input>
    </form>
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