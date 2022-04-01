<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/jpg" href="./img/favicon.ico" />
    <link href="./css/style.css" rel="stylesheet" />
    <title>Grey Gato Media</title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/small-cat.png" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                id="homeLink"
                >Home</a
              >
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
    </div>
    <article id="aboutSection" class="col-sm-11 col-md-10 mx-auto my-3 px-3">
      <h3>What's with the name?</h3>
      <p>
        In 2018, a whole bunch of things came into my life that happened to be
        cool... and grey. My wife and I bought a house in the quaint little town
        of Newmarket NH, and it is a weathered grey cedar shake house.<br /><br />
        Shortly before that we got a small cat and he developed the nickname
        'Don Gato', he was also grey.<br /><br />When we moved into our house,
        there is a semi-finished garage (Its pictured above) and I wanted to
        turn it into a pseudo pub/hangout room. Searching for a cool old-school
        british-ey name... The Grey Gato was born.<br />
        <strong
          >Grey Gato Media is a Full-Stack web development enclave nestled in an
          old house on an old street in an old town. Run by an
          almost-middle-aged man.</strong
        >
      </p>
    </article>
    <article id="servicesSection" class="col-sm-11 col-md-10 mx-auto my-3 px-3">
      <h3>What do we do?</h3>
      <p>We make websites... this section is under construction</p>
    </article>
    <article id="contactSection" class="col-sm-11 col-md-10 mx-auto my-3 px-3">
      <h3>Get Ahold of Us</h3>
      <div
        id="contactBox"
        class="col-sm-10 col-md-9 mx-auto d-flex flex-row flex-wrap justify-content-evenly"
      >
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
      crossorigin="anonymous"
    ></script>
    <script src="./js/script.js"></script>
  </body>
</html>
