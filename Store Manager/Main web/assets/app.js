const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

// CurrentDate

var currentDate = new Date();
var dateString = currentDate.toDateString();
$('.current-date').innerHTML = dateString;

var listFunction = $$('.list-function li');
const menuHeader = $('.container header h2');

const mainMenu = $('.main-menu');
const mainTable = $('.main-table');
const mainKitchen = $('.main-kitchen');
const mainMaterial = $('.main-material');
const mainStaff = $('.main-staff');
const mainStatistical = $('.main-statistical');


// appear menu

const mainWorking = $('.main');
const mainButton = $('.main-introduce button');
const mainIntro = $('.main-introduce');

mainButton.addEventListener('click', function() {
    mainWorking.classList.remove('hide');
    mainIntro.classList.add('hide');
    mainMenu.classList.remove('hide');
})




//switch menu

var menuFunction = [
    mainMenu,
    mainTable,
    mainKitchen,
    mainMaterial,
    mainStaff,
    mainStatistical
];


listFunction.forEach( btn => {
    btn.addEventListener('click', e => {
        let type = e.currentTarget.getAttribute('type');
        $('.list-function li.choose').classList.remove('choose');
        e.currentTarget.classList.add('choose');
        menuHeader.textContent = $('.list-function li.choose h3').innerText;


        menuFunction.forEach(item => {
            let mType = item.getAttribute('type');

            if( mType == type) {
                item.classList.remove('hide');
            }
            else {
                item.classList.add('hide');
            }
        })
    })
})

// add food

const foodOrder = $('.food-order');

var foodArray = [];

function addFood(x) {
    var boxFood = x.parentElement.children;
    const nameFood = boxFood[1].innerText;
    const priceFood = boxFood[2].innerText;

    var itemFood = {
        name: nameFood,
        quantity: 1,
        price: priceFood
    }

    var duplicate = false;

    for(let i = 0; i < foodArray.length; i++) {
        if(foodArray[i].name === itemFood.name) {
            foodArray[i].quantity++;
            duplicate = true;
            break;
        }
    }

    if(duplicate == false) {
        foodArray.push(itemFood);
    }
    showOrder();
    
}

function showOrder() {
    var orderList = foodArray.map( dish => {
        return `
        <div class="order-item">
            <div onclick="delProduct(this)" class="order-item_icon">
                <i class="fa-regular fa-square-minus"></i>
            </div>

            <div class="order-item_name">
                ${dish.name}
            </div>

            <div class="order-item_quantity">
                ${dish.quantity}
            </div>

            <div class="order-item_price">
                ${dish.price}
            </div>
        </div>


        `
        
    })

    foodOrder.innerHTML = orderList.join('');

    totalMoney.innerHTML = showTotal();
}

//delete food

function delProduct(x) {
    var boxOrder = x.parentElement.children;
    const nameOrder = boxOrder[1].innerText;

    var delLocation;

    for(let i = 0; i < foodArray.length; i++) {
        if(nameOrder === foodArray[i].name) {
            foodArray[i].quantity--;
            if(foodArray[i].quantity === 0) {
                delLocation = i;
            }
        }
    }

    if (delLocation > -1 && delLocation < foodArray.length) {
        foodArray.splice(delLocation, 1);
    }

    showOrder();
}

function deleteAll() {
    foodArray = [];
    showOrder();
}

var totalMoney = $('.total-money');

function showTotal() {
    var total = 0;
    for(let i = 0; i < foodArray.length; i++) {
        var priceString = foodArray[i].price;
        total += (foodArray[i].quantity * parseInt(priceString.slice(0, priceString.length - 4)));
    }

    

    return total + ' VNĐ';
}





