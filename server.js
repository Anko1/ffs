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

//server `settings`
const server = express();
server.use(bodyParser.urlencoded({ extended: false }));

//for test only
server.get('/mail', (req, res) => {
   res.send('MAIL')
});

//route for both forms
server.post('/mail', (req, res) => {
    const data = req.body;

    // setup email data with unicode symbols
    let mailOptions = {
        from: `franchising@ffs-company.com`, // sender address
        to: 'franchising@ffs-company.com', // list of receivers
        subject: `From FFS "${data.name}" <${data.email}>`, // Subject line
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

//server start
server.listen(PORT, () => {
    console.log(`Server started at ${PORT} port!`);
});