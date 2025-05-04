// Function to fetch product data from the backend
function fetchProducts() {
  fetch('get_products.php')
    .then(response => response.json())
    .then(data => {
      // Loop through the product data and display it in the cart
      data.forEach(product => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
          <img src="images/${product.productId}.jpg" alt="${product.productName}">
          <div class="cart-item-details">
            <span class="cart-item-name">${product.productName}</span>
            <span class="cart-item-price">Price: ₹${product.price}</span>
          </div>
          <div class="cart-item-actions">
            <button>Add to Cart</button>
          </div>
        `;
        document.getElementById('cartItems').appendChild(cartItem);
      });
    });
}

// Call fetchProducts function when the page loads
window.onload = fetchProducts;
