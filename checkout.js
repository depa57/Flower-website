// Function to retrieve the total amount from the "shop.js" file
function retrieveTotalAmountFromShop() {
    return totalAmount;
}

// Function to update the total amount in the "Total Amount" field
function updateTotalAmountInCheckout() {
    const totalAmount = retrieveTotalAmountFromShop();
    const cartTotal = document.getElementById("total");
    cartTotal.value = `$ ${totalAmount.toFixed(2)}`;
}

// Function to validate the checkout form
function validateForm() {
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const addressInput = document.getElementById("address");

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const address = addressInput.value.trim();

    if (name === "" || email === "" || address === "") {
        alert("Please fill in all the required fields.");
        return false;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    return true;
}

// Function to handle checkout
function handleCheckout() {
    // Validate the form
    if (!validateForm()) {
        return;
    }

    // Retrieve and update the total amount in the "Total Amount" field
    updateTotalAmountInCheckout();

    // Handle the checkout process here
    // For this example, we'll just display an alert with the order details.
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const address = document.getElementById("address").value;
    const totalAmount = retrieveTotalAmountFromShop();

    alert(`Order Details:\n\nName: ${name}\nEmail: ${email}\nAddress: ${address}\nTotal Amount: $${totalAmount.toFixed(2)}`);
}

// Event Listener for the checkout form submission
document.addEventListener("DOMContentLoaded", () => {
    const checkoutForm = document.getElementById("checkoutForm");
    checkoutForm.addEventListener("submit", (event) => {
        event.preventDefault();
        handleCheckout();
    });

    // Update the total amount when the page loads
    updateTotalAmountInCheckout();
});
