function submitContactForm(e) {
  e.preventDefault()

  $("#submitContactForm").hide()
  $("#sendingFormSpinner").show()

  let data = Object.create(null)
  data["name"] = $("#name").val()
  data["email"] = $("#email").val()
  data["phone"] = $("#phone").val()
  data["message"] = $("#message").val()
  data["subject"] = $("#subject").val()

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    return re.test(String(email).toLowerCase())
  }

  for (let key in data) {
    if (key === "phone") continue
    if (typeof data[key] === "undefined" || data[key] === "") {
      handleError("", "Debes rellenar todos los campos obligatorios.")
      return
    }
  }

  if (!validateEmail(data["email"])) {
    handleError("mail invalido", "El mail es inválido.")
    return
  }

  function sendContactForm(data) {
    fetch("https://us-central1-distribuidora1830-8141d.cloudfunctions.net/mail", {
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      method: "POST",
      body: JSON.stringify(data),
    })
      .then((res) => {
        if (res.status !== 200) {
          handleError("Looks like there was a problem. Status Code: " + res.status)

          $("#submitContactForm").show()
          $("#sendingFormSpinner").hide()
          return
        }

        return res.json()
      })
      .then(
        (res) => {
          switch (res.message) {
            case "success":
              handleSuccess(res)
              break
            case "invalid data":
              handleError(res.message, "Asegurate de rellenar todos los campos obligatorios.")
              break
            case "not sent":
              handleError(res.message, "Servidor incapaz de enviar mail, intente mas tarde.")
              break
            default:
              handleError(res.message)
          }
        },
        (err) => {
          handleError(err)
          console.log("Check PHP")
        }
      )
  }

  function handleError(err, msg = "nope") {
    console.log(err)
    if (msg === "nope") msg = "Hubo un error enviando el mensaje, intente de nuevo más tarde."
    swal("Mensaje no enviado", msg, "error")

    $("#submitContactForm").show()
    $("#sendingFormSpinner").hide()
  }

  function handleSuccess(res) {
    swal("¡Mensaje enviado!", "Nos contactaremos contigo lo antes posible", "success")
    $(".contact100-form").trigger("reset")
    $("#submitContactForm").show()
    $("#sendingFormSpinner").hide()
  }

  sendContactForm(data)
}

function activateLinks() {
  if (typeof pageName !== "undefined") {
    $("nav a[href='" + pageName + "']").addClass("active")
    $("nav a[href='" + pageName + "']")
      .parent()
      .siblings()
      .find($("a"))
      .addClass("inactive")
  }
}
