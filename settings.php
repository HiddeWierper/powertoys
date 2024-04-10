<!DOCTYPE html>
<html lang="en">
<head>
  <title>Settings</title>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.css"/>
  <script src="https://cdn.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.js"></script>
  <script src="https://kit.fontawesome.com/75e154bde7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="sidebar" >
  <span class="logo"><h1>Power <strong>Toys</strong></h1></span>
      <ul>
        <li onclick="show('account-privacy')" >
          <a href="#"><i class="fa-solid fa-lock"></i> Account & Privacy</a>
        </li>
        <li onclick="show('color-theme')">
          <a href="#"><i class="fa-solid fa-paintbrush"></i> Color Theme</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-image"></i></a>
        </li>
        <li>
          <a href="#"><i class="fas fa-paint-brush"></i> </a>
        </li>

        </ul>
        
        <ul class="info">
        <li>
          <a href="index.html"><i class="fa-solid fa-house"></i> Go Back</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-info-circle"></i> About</a>
        </li>
      </ul>
    </div>

    <div class="account-privacy" id="account-privacy">
      <h1>Account & Privacy</h1>
      <div class="account-privacy-content">
      </div>
    </div> 

    <div class="color-theme" id="color-theme">
      <h1>Color Theme</h1>
      <div class="most-used">
        <h2>Most Used</h2>
        <div class="most-used-colors">
          <div class="color" style="background-color: #f1c40f;" onclick="changeTheme('#f1c40f')"></div>
          <div class="color" style="background-color: #e74c3c;" onclick="changeTheme('#e74c3c')"></div>
          <div class="color" style="background-color: #3498db;" onclick="changeTheme('#3498db')"></div>
          <div class="color" style="background-color: #2ecc71;" onclick="changeTheme('#2ecc71')"></div>
          <div class="color" style="background-color: #9b59b6;" onclick="changeTheme('#9b59b6')"></div>
          <div class="color" style="background-color: #34495e;" onclick="changeTheme('#34495e')"></div>
          <input type="text" value="" placeholder="#" id="custom-color"><button onclick="customColor()"> joo</button>
        </div> 
      </div>
    </div>


    <div class="overlay">
      <div class="overlay-content">
        <h1>invalid color...</h1>
        <button onclick="closeOverlay()">Close</button>
      </div>
    </div>
</body>
<script src="script.js"></script>
<script>
  var inputElement = document.getElementById('custom-color');

// Voeg een event listener toe aan het input event
inputElement.addEventListener('input', function() {
  // Controleer of de waarde begint met een #
  if (inputElement.value.length > 0 && inputElement.value[0] !== '#') {
    // Voeg een # toe aan het begin van de waarde
    inputElement.value = '#' + inputElement.value;
  }
});
</script>
</html>