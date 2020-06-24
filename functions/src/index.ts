import * as functions from "firebase-functions"
//import * as admin from "firebase-admin"
import * as nodemailer from "nodemailer"
import * as cors from "cors"

const testing = true

cors({ origin: true })
//admin.initializeApp()

const transporter = nodemailer.createTransport({
  service: "gmail",
  auth: {
    user: functions.config().gmail.user,
    pass: functions.config().gmail.password,
  },
})

export const mail = functions.https.onRequest((req, res) => {
  const sender = req.body.email

  const mailOptions = {
    from: `${req.body.name} <${sender}>`,
    to: testing ? "zhuclam@gmail.com" : "pedidos1830@gmail.com",
    subject: "Contacto desde la página web 1830",
    html: `Nombre: ${req.body.name}
    ${req.body.phone ? `Telefono: ${req.body.phone}` : ""}
    Email: ${req.body.email}
    Asunto: ${req.body.subject}

    Mensaje:
    
    ${req.body.message}
    `,
  }

  transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
      return res.send(error.toString())
    }
    return res.send("Sended")
  })
})
