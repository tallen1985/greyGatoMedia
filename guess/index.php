<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/jpg" href="./img/favicon.ico" />
    <link href="./css/style.css" rel="stylesheet" />
    <title>Grey Gato Media</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/small-cat.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" id="homeLink">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="servicesLink">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="contactLink">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
            <form class="text-center" id="emailForm">
                <label for="emailInput">Enter Email to Stay up to date!:</label><br />
                <input type="email" name="emailInput" id="emailInput" />
                <input type="submit" id="emailSubmit" class="btn btn-primary my-3" />
            </form>
        </div>
    </article>
    <footer>
        <p class="text-center">&copy <?php echo date("Y"); ?> - Grey Gato Media</p>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
</body>

</html>