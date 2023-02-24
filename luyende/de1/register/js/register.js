window.document('load')
var inputs = document.querySelectorAll('input');

for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('input', function() {
    if (this.value) {
      this.classList.add('color-input');
    } else {
      this.classList.remove('color-input');
    }
  });
}
