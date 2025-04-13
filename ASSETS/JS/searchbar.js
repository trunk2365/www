const searchInput = document.getElementById('searchInput');
const optionsList = document.getElementById('optionsList');

searchInput.addEventListener('click', () => {
  optionsList.style.display = 'block';
});

optionsList.addEventListener('blur', () => {
  // Délai pour permettre au clic sur une option de se déclencher avant de masquer la liste
  setTimeout(() => {
    optionsList.style.display = 'none';
  }, 100);
});

optionsList.addEventListener('change', () => {
  searchInput.value = optionsList.value;
  optionsList.style.display = 'none';
});