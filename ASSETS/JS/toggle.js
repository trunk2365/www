function toggleUpdateForm(field) {
    const form = document.getElementById('update-' + field);
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
    // Ferme les autres formulaires ouverts
    document.querySelectorAll('.update-form').forEach(otherForm => {
        if (otherForm.id !== 'update-' + field) {
            otherForm.style.display = 'none';
        }
    });
}

document.addEventListener('click', function(event) {
    const updateForms = document.querySelectorAll('.update-form');
    const editIcons = document.querySelectorAll('.edit-icon');
    let targetIsUpdateForm = false;
    let targetIsEditIcon = false;

    // Vérifie si le clic est à l'intérieur d'un formulaire de mise à jour
    updateForms.forEach(form => {
        if (form.contains(event.target)) {
            targetIsUpdateForm = true;
        }
    });

    // Vérifie si le clic est sur une icône d'édition
    editIcons.forEach(icon => {
        if (icon.contains(event.target)) {
            targetIsEditIcon = true;
        }
    });

    // Si le clic n'est ni dans un formulaire de mise à jour ni sur une icône d'édition,
    // alors ferme tous les formulaires de mise à jour ouverts
    if (!targetIsUpdateForm && !targetIsEditIcon) {
        updateForms.forEach(form => {
            form.style.display = 'none';
        });
    }
});