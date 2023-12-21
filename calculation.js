const form = document.getElementById('waitingListForm');
    const counters = {};


    form.addEventListener('change', function() {
        const selectedStation = form.elements.station.value;
        if (selectedStation) {
            const counterValue = counters[selectedStation] || 0;
            console.log(`Counter for ${selectedStation}: ${counterValue}`);
        }
    });


    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        

        const selectedStation = form.elements.station.value;
        if (selectedStation) {
            // Increment the counter for the selected station
            counters[selectedStation] = (counters[selectedStation] || 0) + 1;
            console.log(counters);
            updateCounterDisplay();
        } else {
            console.log('Please select a station');
        }
    });

    
    function updateCounterDisplay() {
        const counterContainer = document.getElementById('counterContainer');
        counterContainer.innerHTML = '';

        for (const station in counters) {
            const counter = counters[station];
            const counterElement = document.createElement('p');
            counterElement.textContent = `${station}: ${counter}`;
            counterContainer.appendChild(counterElement);
        }
    }