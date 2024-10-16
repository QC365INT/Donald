// script.js
document.getElementById('paymentForm').addEventListener('submit', function(event) {
    const clientPhone = document.getElementById('clientPhone').value;
    const phonePattern = /^\+254\d{9}$/; // Kenyan phone number format

    if (!phonePattern.test(clientPhone)) {
        alert('Please enter a valid Kenyan phone number.');
        event.preventDefault();
    }
});
