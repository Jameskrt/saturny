const product = [
    {
        id: 0,
        image: 'images/PremiumPizza.jpeg',
        title: 'Premium cheese',
        details: 'Italian flour, sauce based on cream and parmesan, mozzarella, DorBlu, parmesan, walnut, cranberry',
        price: 300,
    },
    {
        id: 1,
        image: 'images/MultiMeat.jpeg',
        title: 'Multi meat',
        details: 'Italian flour, whole tomato sauce, mozzarella, beef, beef, pepperoni, hunting sausages, bell pepper, Crimean onion, barbecue sauce, oregano',
        price: 400,
    },
    {
        id: 2,
        image: 'images/Withsalmon.jpeg',
        title: 'With salmon and spinach',
        details: 'Italian flour, whole tomato sauce, mozzarella, salmon, tomatoes, spinach, Dorblu, garlic, lemon, pine nuts, olives, oregano.',
        price: 450,
    },
    {
        id: 3,
        image: 'images/Marrakech.jpeg',
        title: 'Marrakech',
        details: 'Italian flour, truffle sauce, mozzarella, duck fillet (sous-style), figs, brie, almonds, pomegranate sauce',
        price: 400,
    },
    {
        id: 4,
        image: 'images/HolyMollusks.jpeg',
        title: 'Holy mollusks',
        details: 'Italian flour, cream sauce, mozzarella, shrimp, mussels, avocado, arugula, secret sauce',
        price: 340,
    },
    {
        id: 5,
        image: 'images/Salami.jpeg',
        title: 'Salami',
        details: 'Italian flour, mozzarella, whole tomato sauce, premium salami, oregano',
        price: 200,
    },
    {
        id: 6,
        image: 'images/withlambs.jpeg',
        title: 'With lambs',
        details: 'Italian flour, whole tomato sauce, mozzarella, lamb, baked eggplant, tomato salsa, sweet onion, basil, secret sauce',
        price: 300,
    },
    {
        id: 7,
        image: 'images/Porcinimushrooms.jpeg',
        title: 'Porcini mushrooms',
        details: 'Italian flour, truffle sauce, mozzarella, porcini mushrooms, chanterelles, mushrooms, sweet onion, green onion',
        price: 250,
    },
    {
        id: 8,
        image: 'images/pepperoni.jpeg',
        title: 'Pepperoni',
        details: 'Italian flour, mozzarella, whole tomato sauce, real Italian pepperoni, hot pepper, capers, oregano',
        price: 200,
    },
    {
        id: 9,
        image: 'images/margarita.jpeg',
        title: 'Margarita',
        details: 'Italian flour, whole tomato sauce, mozzarella, tomatoes, pesto sauce, oregano',
        price: 150,
    },
    {
        id: 10,
        image: 'images/proshuto.jpeg',
        title: 'Proshuto',
        details: 'Italian flour, whole tomato sauce, mozzarella, prossuitto, arugula, cherries, sun-dried tomato, capers, oregano, parmesan',
        price: 305,
    },
    {
        id: 11,
        image: 'images/somegame.jpeg',
        title: 'Some Game',
        details: 'Italian flour, whole tomato sauce, mozzarella, duck fillet (sous-type) secret sauces from abroad, including nut, leek, cucumber, cilantro',
        price: 355,
    },
    {
        id: 12,
        image: 'images/withturkey.jpeg',
        title: 'With Turkey',
        details: 'Italian flour, mozzarella, cream sauce, turkey, orange, almonds, mixed greens/arugula, cranberries, orange mustard',
        price: 305,
    },
    {
        id: 13,
        image: 'images/Withgoatcheese.jpeg',
        title: 'With goat cheese',
        details: 'Italian flour, cream sauce according to someones grandmothers secret recipe, mozzarella, goat cheese, root vegetables, pine nuts',
        price: 295,
    },
    {
        id: 14,
        image: 'images/Witbacon.jpeg',
        title: 'With Bacon',
        details: 'Italian flour, whole tomato sauce, mozzarella, dorblu, browned bacon, hot pepper, oregano',
        price: 305,
    },
    {
        id: 15,
        image: 'images/Bavarian.png',
        title: 'Bavarian',
        details: 'Italian flour, whole tomato sauce, mozzarella, pepperoni, hunting sausages, bell pepper, olives, Pesto sauce, oregano',
        price: 250,
    },
    {
        id: 16,
        image: 'images/Capricciosaclassic.jpeg',
        title: 'Capricciosa classic',
        details: 'Italian flour, whole tomato sauce, mozzarella, bacon, tomatoes, mushrooms, olives',
        price: 250,
    },
    {
        id: 17,
        image: 'images/Chickenwithpineapples.jpeg',
        title: 'Chicken with pineapples',   
        details: 'Italian flour, whole tomato sauce, mozzarella, roasted chicken, pineapple, bell pepper, orange mustard, cranberry, oregano',
        price: 250,
    },
    {
        id: 18,
        image: 'images/Withroastbeefandporcinimushrooms.jpeg',
        title: 'Roast beef and porcinimushrooms',
        details: 'Italian flour, truffle sauce, mozzarella, roast beef, porcini mushrooms, tomatoes, green onions',
        price: 360,
    },
    {
        id: 19,
        image: 'images/Chickenwithmushrooms.jpeg',
        title: 'Chicken with mushrooms',
        details: 'Italian flour, sauce based on parmesan and cream, mozzarella, Dorblu, roasted chicken, mushrooms, bell pepper, oregano',
        price: 310,
    },
    {
        id: 20,
        image: 'images/chukasalad.jpeg',
        title: 'Chuka salad',
        details: 'Chuka salad, nut sauce, sesame',
        price: 50,
    },
    {
        id: 21,
        image: 'images/saladwithturkey.jpeg',
        title: 'Salad with turkey',
        details: 'Caramelized turkey, salad mix, cherries, orange, caesar sauce',
        price: 90,
    },
    {
        id: 22,
        image: 'images/Saladwithprosciutto.jpeg',
        title: 'Salad with prosciutto',
        details: 'Prosciutto, salad mix, parmesan, salad mix, cherries, basil sauce',
        price: 90,
    },
    {
        id: 23,
        image: 'images/caesar.jpeg',
        title: 'Caesar',
        details: 'Chicken fillet, cherries, salad mix, quail egg, Parmesan, Caesar sauce',
        price: 85,
    },
    {
        id: 24,
        image: 'images/Greeksalad.jpeg',
        title: 'Greek salad',
        details: 'Cherries, cucumber, pepper, feta, olives, olives, salad mix, olive oil',
        price: 85,
    },
    {
        id: 25,
        image: 'images/bonaqua.jpeg',
        title: 'BonAqua (Water)',
        details: '',
        price: 20,
    },
    {
        id: 26,
        image: 'images/Cola.jpeg',
        title: 'Cola',
        details: '',
        price: 90,
    },
    {
        id: 27,
        image: 'images/Burn.jpeg',
        title: 'Burn',
        details: '',
        price: 50,
    },
    {
        id: 28,
        image: 'images/Basiliclemonade.png',
        title: 'Basilic lemonade 0.5l',
        details: '',
        price: 30,
    },
    {
        id: 29,
        image: 'images/Richjuice.jpeg',
        title: 'Rich juice',
        details: '',
        price: 80,
    }
]

const categories = [...new Set(product.map((item) => { return item }))]
let i = 0;

document.getElementById('searchBar').addEventListener('keyup', (e) => {
    const searchData = e.target.value.toLowerCase();
    const filterData = product.filter((item) => {
        return item.title.toLowerCase().startsWith(searchData);
    });
    displayItem(filterData);
});

const displayItem = (items) => {
    document.getElementById('dashboard').innerHTML = items.map((item) => {
        var { id, image, title, details, price } = item;
        return (
            `<div class='product-box'>
                <img src=${image} alt=${title}>
                <h3>${title}</h3>
                <p>${details}</p>
                <h4>₱ ${price}.00</h4>
                <button onclick='addtocart(${id})'>Add to cart</button>
            </div>`
        );
    }).join('');
};
displayItem(product);

var cart =[];

function addtocart(id) {
    const selectedItem = product.find(item => item.id === id);
    cart.push(selectedItem);
    displaycart();
}

function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart() {
    let j = 0;
    total = 0;
    document.getElementById("count").innerHTML = cart.length;

    if (cart.length === 0) {
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "₱ " + 0 + ".00";
    } else {
        document.getElementById("cartItem").innerHTML = cart.map((items) => {
            var { image, title, price } = items;
            total = total + price;
            document.getElementById("total").innerHTML = "₱ " + total + ".00";
            return (
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>₱ ${price}.00</h2>` +
                "<i class='fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
            );
        }).join('');
    }
}


function toggleSection(sectionId) {
    var sections = ['dashboard', 'orders', 'products', 'customers'];
    
    for (var i = 0; i < sections.length; i++) {
        var section = document.getElementById(sections[i]);
        if (sectionId === sections[i]) {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    }
}

/* Scroll to top */

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}