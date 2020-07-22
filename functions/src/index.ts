import * as functions from "firebase-functions"
import * as sgMail from "@sendgrid/mail"
import * as cors from "cors"

const config = functions.config()
const isDev = Boolean(config.isDev)

export const mail = functions.https.onRequest(async (req, res) => {
  const isOriginAllowed: boolean = req.header("Origin") === "https://distribuidora1830.com" || isDev
  cors({ origin: isOriginAllowed })(req, res, async () => {
    if (req.method !== "POST") {
      res.sendStatus(405)
      return
    }

    if (!req.body.email || !req.body.name || !req.body.subject || !req.body.message) {
      res.status(400).send({ message: "invalid data" })
      return
    }

    try {
      sgMail.setApiKey(config.email.api_key)
      const msg = {
        to: config.email.to,
        from: `Web de 1830 <no-responder@distribuidora1830.com>`,
        subject: "Contacto desde la página web 1830",
        html: `Importante: No responder este mail. Enviar nuevo mail al email del cliente a continuación:<br>
      <br>
      Email: ${req.body.email}<br>
      Nombre: ${req.body.name}<br>
      ${req.body.phone ? `Telefono: ${req.body.phone}<br>` : ""}
      Asunto: ${req.body.subject}<br>
      <br>
      Mensaje:<br>
      <br>
      ${req.body.message}
      `,
      }
      await sgMail.send(msg)
      res.send({
        message: "success",
      })
    } catch (e) {
      res.status(500).send({ message: "not sent", error: e.toString() })
    }
  })
})
