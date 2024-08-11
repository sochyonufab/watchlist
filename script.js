// script.js

document.addEventListener('DOMContentLoaded', function () {
    const paymentRadios = document.querySelectorAll('input[name="paymentInterest"]');
    const budgetGroup = document.getElementById('budget-group');

    paymentRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (document.querySelector('input[name="paymentInterest"]:checked')?.value === 'yes') {
                budgetGroup.style.display = 'block';
            } else {
                budgetGroup.style.display = 'none';
            }
        });
    });
});
