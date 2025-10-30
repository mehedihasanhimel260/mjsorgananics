async function reverseGeocode(lat, lon) {
    const addressInput = document.getElementById('address');
    const meta = document.getElementById('meta');

    const endpoint = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lon}&addressdetails=1`;

    if (meta) {
        meta.textContent = `Fetching address for ${lat}, ${lon}...`;
    }
    try {
        const res = await fetch(endpoint, {
            headers: { 'Accept': 'application/json' }
        });
        const data = await res.json();
        if (addressInput) {
            addressInput.value = data.display_name || 'Address not found';
        }
        if (meta) {
            meta.textContent = '✅ Address detected (data © OpenStreetMap contributors)';
        }
    } catch (err) {
        console.error("Error fetching address:", err);
        if (meta) {
            meta.textContent = '❌ Error fetching address: ' + err.message;
        }
        if (addressInput) {
            addressInput.value = 'Could not fetch address.';
        }
    }
}

function getLocation() {
    const meta = document.getElementById('meta');
    if (meta) {
        meta.textContent = '📍 Getting your current location...';
    }
    if (!navigator.geolocation) {
        if (meta) {
            meta.textContent = '❌ Geolocation not supported by your browser.';
        }
        return;
    }

    navigator.geolocation.getCurrentPosition(
        pos => {
            const { latitude, longitude } = pos.coords;
            reverseGeocode(latitude, longitude);
        },
        err => {
            console.error("Geolocation Error:", err);
            if (meta) {
                meta.textContent = '❌ Permission denied or error: ' + err.message;
            }
            const addressInput = document.getElementById('address');
            if (addressInput) {
                addressInput.value = 'Error getting GPS location: ' + err.message;
            }
        }
    );
}

document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity');
    const plusButton = document.getElementById('button-plus');
    const minusButton = document.getElementById('button-minus');
    const modalQuantityInput = document.getElementById('modalQuantity');

    if(modalQuantityInput){
        modalQuantityInput.value = 1;
    }


    if (plusButton) {
        plusButton.addEventListener('click', function () {
            if (quantityInput) {
                let quantity = parseInt(quantityInput.value);
                quantity++;
                quantityInput.value = quantity;
                if(modalQuantityInput){
                    modalQuantityInput.value = quantity;
                }
            }
        });
    }

    if (minusButton) {
        minusButton.addEventListener('click', function () {
            if (quantityInput) {
                let quantity = parseInt(quantityInput.value);
                if (quantity > 1) {
                    quantity--;
                    quantityInput.value = quantity;
                    if(modalQuantityInput){
                        modalQuantityInput.value = quantity;
                    }
                }
            }
        });
    }

    const orderButtons = document.querySelectorAll('.order-now-btn');
    const orderModalEl = document.getElementById('orderModal');
    
    if (orderButtons.length > 0 && orderModalEl) {
        const orderModal = new bootstrap.Modal(orderModalEl);
        const productNameInput = document.getElementById('productName');
        const modalProductNameInput = document.getElementById('modalProductName');

        orderButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const card = this.closest('.card');
                if (card) {
                    const productName = card.querySelector('.card-title').innerText;
                    if(productNameInput){
                        productNameInput.value = productName;
                    }
                    if(modalProductNameInput){
                        modalProductNameInput.value = productName;
                    }
                    orderModal.show();
                }
            });
        });

        orderModalEl.addEventListener('show.bs.modal', function (event) {
            // Call getLocation when modal is shown
            getLocation();
            // No detect button in this version, so no event listener for it.
        });
    }
});