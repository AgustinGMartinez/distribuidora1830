import * as functions from "firebase-functions"
// import * as nodemailer from "nodemailer"
import * as sgMail from "@sendgrid/mail"

/* const transporter = nodemailer.createTransport({
  service: "gmail",
  auth: {
    user: functions.config().gmail.user,
    pass: functions.config().gmail.password,
  },
}) */

export const mail = functions.https.onRequest(async (req, res) => {
  res.set("Access-Control-Allow-Origin", "https://distribuidora1830.com")

  if (req.method === "OPTIONS") {
    res.sendStatus(200)
    return
  }

  if (req.method !== "POST") {
    res.sendStatus(405)
    return
  }

  if (!req.body.email || !req.body.name || !req.body.subject || !req.body.message) {
    res.sendStatus(400)
    return
  }

  try {
    sgMail.setApiKey(functions.config().email.api_key)
    const msg = {
      to: functions.config().email.to,
      from: `Web de 1830 <no-responder@distribuidora1830.com>`,
      subject: "Contacto desde la página web 1830",
      html: `Importante: No responder este mail. Enviar nuevo mail al email del cliente a continuación.:
    
    Email: ${req.body.email}
    Nombre: ${req.body.name}
    ${req.body.phone ? `Telefono: ${req.body.phone}` : ""}
    Email: ${req.body.email}
    Asunto: ${req.body.subject}

    Mensaje:
    
    ${req.body.message}
    `,
    }
    await sgMail.send(msg)
    res.send("Sended!")
    return
  } catch (e) {
    res.status(500).send(e.toString())
    return
  }

  /* const sender = req.body.email

  const mailOptions = {
    from: `${req.body.name} <${sender}>`,
    to: functions.config().email.to,
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
  }) */
})
