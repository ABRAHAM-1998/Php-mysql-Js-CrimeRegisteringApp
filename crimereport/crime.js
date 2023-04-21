
const form = document.querySelector('form');
const crimeType = document.querySelector('#crime_type');
const date = document.querySelector('#date');
const location = document.querySelector('#location');
const description = document.querySelector('#description');

form.addEventListener('submit', function(event) {
	event.preventDefault();
	
	if (!validateInput()) {
		return false;
	}
	
});

function validateInput() {
	let isValid = true;
	
	if (crimeType.value === '') {
		alert('Please select a crime type');
		isValid = false;
	}
	
	if (date.value === '') {
		alert('Please select a date');
		isValid = false;
	}
	
	if (location.value === '') {
		alert('Please enter a location');
		isValid = false;
	}
	
	if (description.value === '') {
		alert('Please enter a description');
		isValid = false;
	}
	
	return isValid;
}
