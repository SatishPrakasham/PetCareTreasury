let list = document.querySelector('.list');

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
        price: 100
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

function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCart(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    });
}

initApp();

function addToCart(key) {
    // You can add logic here to handle the "Add to Cart" functionality
    // For example, redirecting to another page with the selected product details
    let selectedProduct = products[key];
    localStorage.setItem('selectedProduct', JSON.stringify(selectedProduct));
    window.location.href = 'userloginpage.php';
}
