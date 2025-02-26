const rangeMin = document.getElementById('rangeMin');
const rangeMax = document.getElementById('rangeMax');
const rangeMinValue = document.getElementById('rangeMinValue');
const rangeMaxValue = document.getElementById('rangeMaxValue');

rangeMin.addEventListener('input', () => {
  rangeMinValue.textContent = rangeMin.value;
  if (parseInt(rangeMin.value) > parseInt(rangeMax.value)) {
    rangeMax.value = rangeMin.value;
    rangeMaxValue.textContent = rangeMin.value;
  }
});