import { createCardItemTemplate } from "./template-creator";

const managementAllContents = document.querySelector('.management__contents__1');
const managementFoodContents = document.querySelector('.management__contents__2');
const managementBeverageContents = document.querySelector('.management__contents__3');
const managementSnackContents = document.querySelector('.management__contents__4');
const popupAddDiscount = document.querySelector('.popup-add-card');
const closePopupAddDiscount = popupAddDiscount.querySelector('button');

const discounts = [
  {
    name: 'Healthy noodle with spinach leaf',
    category: 'Makanan',
    priceBefore: 40000,
    priceAfter: 20000,
  },
  {
    name: 'Grilled chicken with vegetables',
    category: 'Makanan',
    priceBefore: 45000,
    priceAfter: 30000,
  },
  {
    name: 'Pasta with marinara sauce',
    category: 'Makanan',
    priceBefore: 50000,
    priceAfter: 35000,
  },
  {
    name: 'Vegetable salad with dressing',
    category: 'Makanan',
    priceBefore: 30000,
    priceAfter: 18000,
  },
  {
    name: 'Iced tea',
    category: 'Minuman',
    priceBefore: 15000,
    priceAfter: 10000,
  },
  {
    name: 'Lemonade',
    category: 'Minuman',
    priceBefore: 12000,
    priceAfter: 8000,
  },
  {
    name: 'Fruit smoothie',
    category: 'Minuman',
    priceBefore: 25000,
    priceAfter: 18000,
  },
  {
    name: 'Black coffee',
    category: 'Minuman',
    priceBefore: 10000,
    priceAfter: 7000,
  },
  {
    name: 'Potato chips',
    category: 'Snack',
    priceBefore: 10000,
    priceAfter: 7000,
  },
  {
    name: 'Chocolate bar',
    category: 'Snack',
    priceBefore: 8000,
    priceAfter: 5000,
  },
  {
    name: 'Cookies',
    category: 'Snack',
    priceBefore: 12000,
    priceAfter: 8000,
  },
  {
    name: 'Peanuts',
    category: 'Snack',
    priceBefore: 15000,
    priceAfter: 10000,
  },
];

const createAddCard = () => {
    const button = document.createElement('button');
    button.textContent = 'Tambah Diskon';
    button.className = 'add-card';
    button.addEventListener('click', () => popupAddDiscount.style.top = '0');
    return button;
};

discounts.forEach((item) => {
    managementAllContents.innerHTML += createCardItemTemplate(item);
    if (item.category === 'Makanan') {
        managementFoodContents.innerHTML += createCardItemTemplate(item);
    } else if (item.category === 'Minuman') {
        managementBeverageContents.innerHTML += createCardItemTemplate(item);
    } else if (item.category === 'Snack') {
        managementSnackContents.innerHTML += createCardItemTemplate(item);
    }
});

managementAllContents.prepend(createAddCard());
managementFoodContents.prepend(createAddCard());
managementBeverageContents.prepend(createAddCard());
managementSnackContents.prepend(createAddCard());

closePopupAddDiscount.addEventListener('click', () => popupAddDiscount.style.top = '-100%');
