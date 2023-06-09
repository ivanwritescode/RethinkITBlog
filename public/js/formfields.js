// JavaScript code to add or remove the 'active' class based on form field focus
const formGroups = document.querySelectorAll('.form-group');
formGroups.forEach(formGroup => {
    const inputField = formGroup.querySelector('input, textarea');
    const label = formGroup.querySelector('label');

    inputField.addEventListener('focus', () => {
        label.classList.add('active');
    });

    inputField.addEventListener('blur', () => {
        label.classList.remove('active');
    });
});


// JavaScript code that dynamically updates textarea height based on the content
function adjustTextareaHeight() {
  const textarea = document.getElementById('content');
  textarea.style.height = 'auto'; // Reset height to auto to recalculate height based on content
  textarea.style.height = textarea.scrollHeight + 'px'; // Set the height to match the content
}

window.addEventListener('DOMContentLoaded', () => {
  adjustTextareaHeight(); // Adjust the textarea height on page load

  const textarea = document.getElementById('content');
  textarea.addEventListener('input', adjustTextareaHeight); // Adjust the textarea height on input
});