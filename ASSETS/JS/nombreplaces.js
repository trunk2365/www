document.addEventListener('DOMContentLoaded', function() {
    const siegesContainer = document.getElementById('sieges-container');
    const sieges = siegesContainer.querySelectorAll('.siege');
    let nombreSiegesSelectionnes = 0;

    sieges.forEach(siege => {
        siege.addEventListener('click', () => {
            const siegeIndex = parseInt(siege.dataset.siegeIndex);
            nombreSiegesSelectionnes = siegeIndex + 1;
            document.getElementById('nombre_places').value = nombreSiegesSelectionnes;
            console.log('Nombre de sièges sélectionnés :', nombreSiegesSelectionnes);
            console.log('Siège cliqué :', siegeIndex);

            sieges.forEach((s, index) => {
                if (index <= siegeIndex) {
                    s.src = '/ASSETS/IMGS/siege-noir.png';
                    s.classList.remove('gris');
                    s.classList.add('noir');
                } else {
                    s.src = '/ASSETS/IMGS/siege-gris.png';
                    s.classList.remove('noir');
                    s.classList.add('gris');
                }
            });
        });
    });
});