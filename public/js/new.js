const cartValue = document.querySelector("[data-cart-value]");
const productPrice = document.querySelector("[data-product-price]");

cartValue.addEventListener("click", function () {
    const newProductPrice = cartValue * productPrice;

    console.log(newProductPrice);

    productPrice.textContent = newProductPrice;
});
