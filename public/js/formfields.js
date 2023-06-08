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