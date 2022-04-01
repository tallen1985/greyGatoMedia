const mailer = require('nodemailer');

function sendMail(email) {
    const transporter = mailer.createTransport({
        service: 'gmail',
        auth: {
          user: 'jake@greygato.com',
          pass: 'GreyGato39'
        }
      });
      
      var mailOptions = {
        from: 'jake@greygato.com',
        to: 'jake.allen@me.com',
        subject: 'New Contact List Request',
        text: email
      };
      
      transporter.sendMail(mailOptions, function(error, info){
        if (error) {
          console.log(error);
        } else {
          console.log('Email sent: ' + info.response);
        }
      });
}

module.exports = {sendMail}