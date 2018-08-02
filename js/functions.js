function submitContactForm(e) {
  e.preventDefault();
  if (grecaptcha.getResponse().length < 1) {
    alert("Confirma que no eres un robot primero");
    return;
  }

  $('#submitContactForm').hide();
  $('#sendingFormSpinner').show();

  let data = Object.create(null);
  // data['firstName'] = $('#first-name').val();
  // data['lastName'] = $('#last-name').val();
  // data['email'] = $('#email').val();
  // data['phone'] = $('#phone').val();
  // data['message'] = $('#message').val();
  // data['lang'] = $('#lang').val();
  // data['google'] = grecaptcha.getResponse();

  function sendContactForm (data) {
    fetch("mail.php", {
      headers : {
        "Content-Type": "application/json",
        "Accept": "application/json"
      },
      method: "POST",
      body: JSON.stringify(data)
    }).then( res => {
      if (res.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
          res.status);
        return;
      }

      return res.json();
    }, err => {
      console.log(err);
      swal("Mensaje no enviado", "Hubo un error enviando el mensaje, intente de nuevo más tarde.", "error");

      $('#submitContactForm').show();
      $('#sendingFormSpinner').hide();
    })
    .then( res => {
      if (res.message === "success") handleResponse(res);
      else console.log(res.message);
    });
  }

  function handleResponse(res) {
    swal("¡Mensaje enviado!", "Nos contactaremos contigo lo antes posible", "success");
    $('.contact100-form').trigger("reset");
    $('#submitContactForm').show();
    $('#sendingFormSpinner').hide();
  }

  sendContactForm(data);
}

function activateLinks() {
  if (typeof pageName !== "undefined") {
    $('nav a[href=\'' + pageName + '\']').addClass("active");
    $('nav a[href=\'' + pageName + '\']').parent().siblings().find($('a')).addClass("inactive");
  }
}
