// Define an array to store the ads
let ads = [];

// Get the form for creating a new ad
const newAdForm = document.getElementById('new-ad-form');

// Add an event listener to the form for creating a new ad
newAdForm.addEventListener('submit', (event) => {
	event.preventDefault();

	// Get the values from the form fields
	const title = document.getElementById('title').value;
	const description = document.getElementById('description').value;
	const price = document.getElementById('price').value;

	// Create a new ad object
	const newAd = {
		title: title,
		description: description,
		price: price
	};

	// Add the new ad object to the ads array
	ads.push(newAd);

	// Clear the form fields
	document.getElementById('title').value = '';
	document.getElementById('description').value = '';
	document.getElementById('price').value = '';

	// Update the table of ads
	updateAdsTable();
});

// Function to update the table of ads
function updateAdsTable() {
	const adsTable = document.getElementById('ads-table');
	const adsTableBody = adsTable.getElementsByTagName('tbody')[0];
	adsTableBody.innerHTML = '';

	ads.forEach((ad, index) => {
		// Create a new row in the table for the ad
		const newRow = adsTableBody.insertRow();

		// Add the title, description, and price cells to the row
		const titleCell = newRow.insertCell();
		titleCell.innerHTML = ad.title;

		const descriptionCell = newRow.insertCell();
		descriptionCell.innerHTML = ad.description;

		const priceCell = newRow.insertCell();
		priceCell.innerHTML = ad.price;

		// Add an "Edit" button to the row
		const editButtonCell = newRow.insertCell();
		const editButton = document.createElement('button');
		editButton.innerText = 'Edit';
		editButton.addEventListener('click', () => {
			// Fill in the form for editing the ad
			document.getElementById('edit-title').value = ad.title;
			document.getElementById('edit-description').value = ad.description;
			document.getElementById('edit-price').value = ad.price;
			document.getElementById('edit-ad-id').value = index;

			// Show the edit form and hide the ads table and payment form
			document.getElementById('new-ad-form').style.display = 'none';
			document.getElementById('ads-table').style.display = 'none';
			document.getElementById('edit-ad-form').style.display = 'block';
			document.getElementById('payment-form').style.display = 'none';
		});
		editButtonCell.appendChild(editButton);
	});
}

// Get the form for editing an existing ad
const editAdForm = document.getElementById('edit-ad-form');

// Add an event listener to the form for editing an existing ad
editAdForm.addEventListener('submit', (event) => {
	event.preventDefault();

	// Get the values from the form fields
	const title = document.getElementById('edit-title').value;
	const description = document.getElementById('edit-description').value;
	const price = document.getElementById('edit-price').value;
	const adId = document.getElementById('edit-ad-id').value;

	// Update the ad object in the ads array
	ads[adId].title = title;
	ads[adId].description = description;
	ads[adId].price = price;

	//