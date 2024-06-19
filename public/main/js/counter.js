
const exchangeItems = document.querySelectorAll('.mus__exchange-item');


function changeValue(input, isIncrement) {
  const currentValue = parseInt(input.value, 10);
  const newValue = isIncrement ? currentValue + 5 : currentValue - 5;
  if (newValue >= 0 && newValue <= 100) {
    input.value = newValue + '%';
  }
}



function handlePercentButtonClick(event) {
  const button = event.target;
  const input = button.closest('.mus__exchange-item').querySelector('.count');
  input.value = button.textContent;
}


for (let i = 0; i < exchangeItems.length; i++) {
  const exchangeItem = exchangeItems[i];
  const plusBtn = exchangeItem.querySelector('.plusBtn');
  const minusBtn = exchangeItem.querySelector('.minusBtn');
  const percentButtons = exchangeItem.querySelectorAll('.mus__range-select-list button');

  for (let j = 0; j < percentButtons.length; j++) {
    percentButtons[j].addEventListener('click', handlePercentButtonClick);
  }
}