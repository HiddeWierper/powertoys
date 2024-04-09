function show(id){
var element = document.getElementById(id);
element.style.display = 'flex';


var otherElements = ['color-picker', 'pass-gen'];

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