let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
});
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
});

let products = [
    {
        id: 1,
        name: 'Adult Dog Food',
        image: 'dryfood1.png',
        price: 80
        
    },
    {
        id: 2,
        name: 'Dental Care Dog Food',
        image: 'dryfood2.jpeg',
        price: 90
    },
    {
        id: 3,
        name: 'Digestive Care Dog Food',
        image: 'dryfood3.jpeg',
        price:100
    },
    {
        id: 4,
        name: 'Frisbee',
        image: 'toy3.jpg',
        price: 25
    },
    {
        id: 5,
        name: 'Dog Leash',
        image: 'dogleash1.jpg',
        price: 20
    },
    {
        id: 6,
        name: 'Dog Collar',
        image: 'dogcollar2.jpg',
        price: 30
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    });
}
initApp();
function addToCard(key) {
    if (listCards[key] == null) {
        // Copy product from list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();

    // Save the selected items in local storage
    saveItemsToLocalStorage(listCards);

    // Add this line for debugging
    console.log("Items in local storage:", JSON.parse(localStorage.getItem('cartItems')));
}


function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        if (value != null) {
            totalPrice = totalPrice + value.price;
            count = count + value.quantity;
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    });
    total.innerText = 'RM' + totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(productId, newQuantity) {
    if (newQuantity === 0) {
        delete listCards[productId];
    } else {
        listCards[productId].quantity = newQuantity;
        listCards[productId].price = newQuantity * products.find(product => product.id === (productId + 1)).price;
    }

    // Save the updated selected items in local storage
    saveItemsToLocalStorage(listCards);

    reloadCard();
}
function saveItemsToLocalStorage(items) {
    localStorage.setItem('cartItems', JSON.stringify(Object.values(items)));
}
// ... (your existing code)

function placeOrder() {
    // Retrieve order details from local storage
    let orderDetails = JSON.parse(localStorage.getItem('cartItems'));

    // Fetch API to send order details to PHP script
    fetch('ordersumcheck.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(orderDetails)
    })
        .then(response => response.json())
        .then(data => {
            // Handle the response from the PHP script
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}




