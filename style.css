document.addEventListener('DOMContentLoaded', function () {
    const methodePaiementRadios = document.querySelectorAll('input[name="methode_paiement"]');
    const cardDetailsDiv = document.getElementById('card-details');

    methodePaiementRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.value === 'carte') {
                cardDetailsDiv.style.display = 'block';
                cardDetailsDiv.querySelectorAll('input').forEach(input => input.setAttribute('required', 'true'));
            } else {
                cardDetailsDiv.style.display = 'none';
                cardDetailsDiv.querySelectorAll('input').forEach(input => input.removeAttribute('required'));
            }
        });
    });

    document.getElementById('calculer_gain').addEventListener('click', function () {
        const nombrePersonnes = parseFloat(document.getElementById('nombre_personnes').value);

        if (isNaN(nombrePersonnes) || nombrePersonnes < 10) {
            alert("Veuillez entrer un nombre de personnes valide (10 ou plus).");
            return;
        }

        const baseGain = 70;
        const gainPerPerson = 7;

        const gain = baseGain + ((nombrePersonnes - 10) * gainPerPerson);
        document.getElementById('gain_final').value = gain.toFixed(2) + " $";
    });
});
