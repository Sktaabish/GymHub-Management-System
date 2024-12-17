let carts = document.querySelectorAll('.add-cart');

let products = [
        {
                name: 'Black Pant',
                tag: 'blackpant',
                price: 20,
                inCart: 0
        },
        {
                name: 'Black Shot',
                tag: 'blackshot',
                price: 15,
                inCart: 0
        },
        {
                name: 'Black T-Shirt',
                tag: 'blacktshirt',
                price: 15,
                inCart: 0
        },
        {
                name: 'Grey T-Shirt',
                tag: 'greytshirt',
                price: 20,
                inCart: 0
        },
        {
                name: 'Pink T-Shirt',
                tag: 'pinktshirt',
                price: 15,
                inCart: 0
        }
];


for (let i = 0; i < carts.length; i++) {
        carts[i].addEventListener('click', () => {
                cartNumbers(products[i]);
                totalCost(products[i]);
        })
}

function onLoadCartNumber() {
        let productNumbers = localStorage.getItem('cartNumbers');

        // if (productNumbers) {
        //         document.querySelector('.cart span').textContent = productNumbers;
        // }

        // productNumbers = parseInt(productNumbers);
}


function cartNumbers(product) {

        let productNumbers = localStorage.getItem('cartNumbers');

        productNumbers = parseInt(productNumbers);


        if (productNumbers) {
                localStorage.setItem('cartNumbers', productNumbers + 1);
                document.querySelector('.cart span').textContent = productNumbers + 1;
        } else {
                localStorage.setItem('cartNumbers', 1);
                document.querySelector('.cart span').textContent = 1;
        }

        setItems(product);
}
function setItems(product) {
        let cartItems = localStorage.getItem('productsInCart');
        cartItems = JSON.parse(cartItems);

        if (cartItems != null) {
                if (cartItems[product.tag] == undefined) {
                        cartItems = {
                                ...cartItems,
                                [product.tag]: product
                        }
                }
                cartItems[product.tag].inCart += 1;
        } else {
                product.incart = 1;
                cartItems = {
                        [product.tag]: product
                }
        }

        localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
        // console.log("The product price is", product.price);
        let cartCost = localStorage.getItem('totalCost');

        // console.log("My cartCost is", cartCost);
        // console.log(typeof cartCost);


        if (cartCost != null) {
                cartCost = parseInt(cartCost);
                localStorage.setItem("totalCost", cartCost + product.price);
        } else {
                localStorage.setItem("totalCost", product.price);
        }

        // localStorage.setItem("totalCost", product.price);
}

function displayCart() {
        let cartItems = localStorage.getItem("productsInCart");
        cartItems = JSON.parse(cartItems);
        let productContainer = document.querySelector(".products-container");
        let cartCost = localStorage.getItem('totalCost');

        console.log(cartItems);
        if (cartItems && productContainer) {
                productContainer.innerHTML = '';
                Object.values(cartItems).map(item => {
                        productContainer.innerHTML += `
                        <div class = "product">
                         <ion-icon name="close-circle"></ion-icon>
                         <img src="./product-images/${item.tag}.jpg">
                         <span>${item.name}</span>
                        </div>
                        <div class="price">$${item.price},00</div>
                        <div class="quantity">
                                <ion-icon name="caret-back-circle"></ion-icon>
                                <span>${item.inCart}</span>
                                <ion-icon name="caret-forward-circle"></ion-icon>
                        </div>
                        <div class="total">
                                $${item.inCart * item.price},00
                        </div>
                        `

                });

                productContainer.innerHTML += `
                        <div class="basketTotalContainer">
                                <h4 class="basketTotalTitle">
                                Basket Total 
                                </h4>
                                <h4 class="basketTotal">
                                        $${cartCost},00
                                </h4>
                `
        }


}


onLoadCartNumber();
displayCart();