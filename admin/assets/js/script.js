const passwordInput = $('#newPassword');
const confirmPasswordInput = $('#renewPassword');
const form = $('#changePassword');
const btn= $('#btnChPass');

form.on('submit', (event) => {
  if (passwordInput.val() !== confirmPasswordInput.val()) {
    event.preventDefault();
    $('#smallModalOnPass').modal('show');
    //alert('Паролі не співпадають');
  }
});

// button.on('mouseover', () => {
// form.on('submit', (event) => {

