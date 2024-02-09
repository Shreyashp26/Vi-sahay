

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vi-Sahay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <nav class="navbar  navbar-expand-lg "  >
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">Vi-Sahay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link "  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="donate1.php">Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="message.php">Alert Message</a>
        </li>
    </div>
  </div>
</nav>


<div class="bg-img">

<div class="container1">
<form  class="form1" method="post" action="send-sms.php">
  <h4>Send Disaster Alerts</h4>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br>

  <label for="number">Phone Number:</label>
  <input type="text" id="number" name="number" required><br>

  <label for="message">Message:</label>
  <textarea id="message" name="message" required></textarea><br>

  <button type="button"  id="addLocationBtn">Add Location</button>
  <button type="submit"  id="sendBtn">Send</button>
</form>
</div>




<script>
  const addLocationBtn = document.getElementById('addLocationBtn');
  const sendBtn = document.getElementById('sendBtn');

  addLocationBtn.addEventListener('click', () => {
    navigator.geolocation.getCurrentPosition((position) => {
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;
      const location = `https://www.google.com/maps?q=${latitude},${longitude}`;
      const messageInput = document.getElementById('message');
      messageInput.value = `Disaster location: ${location}\n\n${messageInput.value}`;
    });
  });
</script>

 

