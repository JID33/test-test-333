document.addEventListener('DOMContentLoaded', function () {
    const paymentMethodRadios = document.querySelectorAll('input[name="methode_paiement"]');
    const cardDetailsDiv = document.getElementById('card-details');

    paymentMethodRadios.forEach(radio => {
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
        const numberOfPeople = parseFloat(document.getElementById('nombre_personnes').value);

        if (isNaN(numberOfPeople) || numberOfPeople < 10) {
            alert("Please enter a valid number of people (10 or more).");
            return;
        }

        const baseGain = 70;
        const gainPerPerson = 7;

        const totalGain = baseGain + ((numberOfPeople - 10) * gainPerPerson);
        document.getElementById('gain_final').value = totalGain.toFixed(2) + " $";
    });
});
