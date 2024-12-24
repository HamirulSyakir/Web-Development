function checkLoyaltyPoints() {
    const mobileNumber = document.querySelector('input').value;
    if (mobileNumber) {
        alert('Checking loyalty points for ' + mobileNumber);
        // You can add your actual logic to check loyalty points here
    } else {
        alert('Please enter a mobile number');
    }
}
