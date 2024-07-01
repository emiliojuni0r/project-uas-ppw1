// Function to get cart from localStorage
function getCart() {
    return JSON.parse(localStorage.getItem('cart')) || [];
}

// Function to save cart to localStorage
function saveCart(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Function to add item to cart
function addToCart(productId, productName, productPrice, productImage) {
    let cart = getCart();
    let existingItem = cart.find(item => item.productId === productId);

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            productId,
            productName,
            productPrice,
            productImage,
            quantity: 1
        });
    }

    saveCart(cart);
    alert("Product added to cart!");
}

// Function to display cart items
function displayCartItems() {
    let cart = getCart();
    let cartContainer = document.getElementById('cartItems');
    let totalPrice = 0;
    cartContainer.innerHTML = '';

    cart.forEach(item => {
        totalPrice += item.productPrice * item.quantity;
        cartContainer.innerHTML += `
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="${item.productImage}" class="img-fluid rounded-start" alt="${item.productName}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">${item.productName}</h5>
                            <p class="card-text"><strong>Price: $${item.productPrice.toFixed(2)}</strong></p>
                            <div class="d-flex align-items-center">
                                <label for="quantity${item.productId}" class="form-label me-2">Quantity:</label>
                                <input type="number" class="form-control w-25" id="quantity${item.productId}" value="${item.quantity}" min="1" onchange="updateQuantity(${item.productId}, this.value)">
                            </div>
                            <button class="btn btn-danger mt-3" onclick="removeFromCart(${item.productId})">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });

    document.getElementById('cartTotal').innerText = `$${totalPrice.toFixed(2)}`;
}

// Function to update item quantity in cart
function updateQuantity(productId, quantity) {
    let cart = getCart();
    let item = cart.find(item => item.productId === productId);

    if (item) {
        item.quantity = parseInt(quantity, 10);
        saveCart(cart);
        displayCartItems();
    }
}

// Function to remove item from cart
function removeFromCart(productId) {
    let cart = getCart();
    cart = cart.filter(item => item.productId !== productId);
    saveCart(cart);
    displayCartItems();
}

// Function to handle checkout (you can expand this to handle payment)
function handleCheckout() {
    let cart = getCart();

    if (cart.length === 0) {
        alert("Your cart is empty!");
        return;
    }

    // Process payment (this is just a placeholder
    alert("Payment successful!");

    // Clear the cart after successful payment
    localStorage.removeItem('cart');
    displayCartItems();
}

// Initialize cart display on page load
document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('cartItems')) {
        displayCartItems();
    }
});
