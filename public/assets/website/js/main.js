window.onload = function() {
    getLocation();
};

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error, {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 0
        });
    } else {
        document.getElementById('address').value = "Geolocation not supported by this browser.";
    }
}

function success(position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;

    const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lon}`;

    fetch(url, {
        headers: {
            "Accept": "application/json",
            "User-Agent": "MyWebsiteApp"
        }
    })
    .then(res => res.json())
    .then(data => {
        const address = data.display_name || "Address not found";
        document.getElementById('address').value = address;
    })
    .catch(err => {
        console.error("Fetch Error:", err);
        document.getElementById('address').value = "Error fetching location from OSM.";
    });
}

function error(err) {
    console.error("Geolocation Error:", err);
    document.getElementById('address').value = "Error getting GPS location: " + err.message;
}

document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity');
    const plusButton = document.getElementById('button-plus');
    const minusButton = document.getElementById('button-minus');

    if (plusButton) {
        plusButton.addEventListener('click', function () {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
        });
    }

    if (minusButton) {
        minusButton.addEventListener('click', function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
            }
        });
    }
});