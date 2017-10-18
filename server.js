const express = require('express');
const bodyParser = require('body-parser');
const PORT = process.env.PORT || 8080;
const nodemailer = require('nodemailer');

// create reusable transporter object using the default SMTP transport
let transporter = nodemailer.createTransport({
    host: 'smtp.ffs-company.com',
    port: 587,
    secure: false, // true for 465, false for other ports
    // auth: {
    //     user: account.user, // generated ethereal user
    //     pass: account.pass  // generated ethereal password
    // }
});


const server = express();

server.use(bodyParser.urlencoded({ extended: false }));

server.get('/mail', (req, res) => {
   res.send('MAIL')
});

server.post('/mail', (req, res) => {
    const data = req.body;

    // setup email data with unicode symbols
    let mailOptions = {
        from: `"${data.name}" <${data.email}>`, // sender address
        to: 'r.tokarska@ffs-company.com', // list of receivers
        subject: 'FFS', // Subject line
        text: data.msg // plain text body
    };

    // send mail with defined transport object
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
    });

    res.status(200).end();
});

server.listen(PORT, () => {
    console.log(`Server started at ${PORT} port!`);
});