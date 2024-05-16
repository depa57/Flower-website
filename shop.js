// shop.js

// Cart Items
let cartItems = [];

// Function to add item to cart
function addToCart(item) {
    cartItems.push(item);
    updateCartCount();
    updateCartTotal();
}

// Function to update cart count in the header
function updateCartCount() {
    const cartCount = document.getElementById("count");
    cartCount.textContent = cartItems.length;
}

// Function to update the cart total amount
function updateCartTotal() {
    const cartTotal = document.getElementById("total");
    let totalAmount = 0;

    cartItems.forEach(item => {
        totalAmount += item.price;
    });

    cartTotal.textContent = `$ ${totalAmount.toFixed(2)}`;
}

// Event Listener for Add to Cart button click
document.addEventListener("DOMContentLoaded", () => {
    const addToCartButtons = document.querySelectorAll(".flower-detail a");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const flowerName = event.target.parentNode.querySelector("h3").textContent;
            const flowerPrice = parseFloat(event.target.parentNode.querySelector("p").textContent.slice(1));
            const flowerItem = { name: flowerName, price: flowerPrice };

            addToCart(flowerItem);
            updateCartItems();
        });
    });
});

// Function to update the cart items in the sidebar
function updateCartItems() {
    const cartItemContainer = document.getElementById("cartItem");
    if (cartItems.length === 0) {
        cartItemContainer.textContent = "Your cart is empty";
    } else {
        cartItemContainer.innerHTML = "";
        cartItems.forEach((item, index) => {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");
            cartItem.innerHTML = `<span>${item.name}</span><span>$${item.price.toFixed(2)}</span><button onclick="deleteFromCart(${index})">Delete</button>`;
            cartItemContainer.appendChild(cartItem);
        });
    }
}

// Function to delete item from cart
function deleteFromCart(index) {
    cartItems.splice(index, 1);
    updateCartCount();
    updateCartTotal();
    updateCartItems();
}
