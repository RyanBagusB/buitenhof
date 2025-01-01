import { createAddCard } from "./template-creator";

const managementServiceContents = document.querySelector('.management__contents__1');
const popupAddDiscount = document.querySelector('.popup-add-card');
const closePopupAddDiscount = popupAddDiscount.querySelector('button');
const addServicetButton = createAddCard(popupAddDiscount);

managementServiceContents.prepend(addServicetButton);

closePopupAddDiscount.addEventListener('click', () => popupAddDiscount.style.top = '-100%');