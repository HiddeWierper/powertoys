

function show(id) {
  var element = document.getElementById(id);
  element.style.display = "flex";



var otherElements = ['color-picker', 'pass-gen', 'account-privacy', 'color-theme'];

// Verberg alle andere elementen
otherElements.forEach(function(otherId) {
  if (otherId !== id) {
    var otherElement = document.getElementById(otherId);
    if (otherElement) {
      otherElement.style.display = 'none';
    }
  }
});
}
function customColor(){
if (document.getElementById('custom-color').value === '') {
  return;
}

var inputElement = document.getElementById('custom-color');

// Haal de waarde van het input element op
var color = inputElement.value;

// Verander de kleur
changeTheme(color);
}

function changeTheme(color){
  const textElements = document.querySelectorAll('a');
  const strongElements = document.querySelectorAll('strong');
  const liElements = document.querySelectorAll('li');
  const button = document.querySelector('.overlay-content button');

  textElements.forEach(element => element.style.color = color);
  if (button) {
    button.style.color = color;
  }


  strongElements.forEach(element => {
    if (color === '#ffffff') {
      element.style.color = 'black';
    } else {
      element.style.color = 'white';
    }
    element.style.backgroundColor = color;
  });

  const rgbColor = hexToRgb(color);

  liElements.forEach(element => {
    element.style.background = `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, 0.1)`;
  });
  button.style.backgroundColor = `rgba(${rgbColor.r}, ${rgbColor.g}, ${rgbColor.b}, 0.1)`

  localStorage.setItem('themeColor', color);
}


// Functie om hex kleur naar RGB te converteren
function hexToRgb(hex) {
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  if (result) {
    return {
      r: parseInt(result[1], 16),
      g: parseInt(result[2], 16),
      b: parseInt(result[3], 16)
    };
  } else {
    // Toon de overlay als de hex kleur ongeldig is
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'flex';
    return null;
  }
  
}
window.onload = function() {
  const savedColor = localStorage.getItem('themeColor');
  if (savedColor) {
    changeTheme(savedColor);
  }
};


function closeOverlay() {
  var overlay = document.querySelector('.overlay');
  overlay.style.display = 'none';
}



// Haal het input element op
