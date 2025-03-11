const siegesContainer = document.getElementById('sieges-container');
const sieges = siegesContainer.querySelectorAll('.siege');

sieges.forEach(siege => {
    siege.addEventListener('click', () => {
        const siegeIndex = parseInt(siege.dataset.siegeIndex);
        console.log('Siège cliqué :', siegeIndex);

        sieges.forEach((s, index) => {
            console.log('Siège index :', index);
            console.log('Siège :', s);

            if (index <= siegeIndex) {
                console.log('Changer en noir :', s);
                s.src = '/ASSETS/IMGS/siege-noir.png'; // Chemin corrigé
                console.log('Nouveau src :', s.src);
                s.classList.remove('gris');
                s.classList.add('noir');
                console.log('Classes :', s.classList);
            } else {
                console.log('Changer en gris :', s);
                s.src = '/ASSETS/IMGS/siege-gris.png'; // Chemin corrigé
                console.log('Nouveau src :', s.src);
                s.classList.remove('noir');
                s.classList.add('gris');
                console.log('Classes :', s.classList);
            }
        });
    });
});