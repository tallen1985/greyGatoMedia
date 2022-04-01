const express = require("express");
const bodyParser = require("body-parser");
const path = require("path");
const mailer = require("nodemailer");

const app = express();
const PORT = process.env.PORT || 3001;

app.use(express.static("public"));
app.use(bodyParser.text());

if (process.env.LE_URL && process.env.LE_CONTENT) {
  app.get(process.env.LE_URL, function (req, res) {
    return res.send(process.env.LE_CONTENT);
  });
}

function sendMail(email) {
  const transporter = mailer.createTransport({
    service: "gmail",
    auth: {
      user: "jake@greygato.com",
      pass: "GreyGato39",
    },
  });

  var mailOptions = {
    from: "jake@greygato.com",
    to: "jake.allen@me.com",
    subject: "New Contact List Request",
    text: email,
  };

  transporter.sendMail(mailOptions, function (error, info) {
    if (error) {
      console.log(error);
    } else {
      console.log("Email sent: " + info.response);
    }
  });
}

app.get("/", (req, res) => {
  res.send(path.join(__dirname, "public/index.html"));
});

app.post("/api/email", (req, res) => {
  const email = req.body;

  console.log(email);
  sendMail(email);
  res.status(200).send(`Thanks for submitting ${email}`);
});

app.listen(PORT, () => {
  console.log(`Server started and ready at http://localhost:${PORT}`);
});
