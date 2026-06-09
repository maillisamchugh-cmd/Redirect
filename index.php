<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Protected Link</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body style="text-align:center; margin-top:50px; font-family:Arial;">
<h2>Click the checkbox to access the link:</h2>

<form id="captcha-form">
  <div class="g-recaptcha" data-sitekey="6LfK8xUtAAAAAJ0trGPbHd65cZ3C38mfbvYBfUze"></div>
  <br>
  <button type="button" onclick="verifyCaptcha()">Go to Link</button>
</form>

<script>
function verifyCaptcha() {
    const response = grecaptcha.getResponse();
    if(response.length === 0){
        alert('Please complete the CAPTCHA!');
    } else {
        window.location.href = 'https://hsovtier.top'; // replace with your actual link
    }
}
</script>

</body>
</html>
