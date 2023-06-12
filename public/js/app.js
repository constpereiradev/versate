var cartBtn = document.querySelector('#cart-btn');
var cart = document.querySelector('#cart');
var cartProduct = document.querySelector('.cart-product');
var closeCartBtn = document.querySelector('#close-cart');

var productQuantity = document.querySelector("#product-quantity");
var addProductBtn = document.querySelector('#add-product');
var rmProcuctBtn = document.querySelector('#rm-product');
var deleteProcuctBtn = document.querySelector('#delete-product');

var cartTotal = document.querySelector('#cart-total');
var cartProductPrice = document.querySelector('#cart-product-price');


cartBtn.addEventListener('click', () => {

    cart.style.display = "block";
    
});

closeCartBtn.addEventListener('click', () => {
    cart.style.display = "none";
});

addProductBtn.addEventListener('click', () => {
    productQuantity.innerText = parseInt(productQuantity.innerText) + 1;

    cartTotal.innerText = "$" +parseInt(cartProductPrice.innerText) * productQuantity.innerText  + ".00";
    
});

rmProcuctBtn.addEventListener('click', () => {

    var quantity = parseInt(productQuantity.innerText);
    if (quantity > 0) {
        productQuantity.innerText = quantity - 1;

        cartTotal.innerText = "$" + parseInt(cartProductPrice.innerText) * productQuantity.innerText + ".00";
    
    }

    
});