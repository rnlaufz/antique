// Enable map
const getMap = document.getElementById('map');

function myMap() {
    let mapProps = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 12,
        scrollwheel: false,
        draggable: false
    };

    let map = new google.maps.Map(getMap, mapProps);
};

// Styling image input
const inputs = document.querySelectorAll('.input__file');
const input = document.getElementsByClassName('input__file');
Array.prototype.forEach.call(inputs, function (input) {
  let label = input.nextElementSibling,
    labelVal = label.querySelector('.input__file-button-text').innerText;

  input.addEventListener('change', function (e) {
    let countFiles = '';
    if (this.files && this.files.length >= 1)
      countFiles = this.files.length;

    if (countFiles)
      label.querySelector('.input__file-button-text').innerText = 'Files selected: ' + countFiles;
    else
      label.querySelector('.input__file-button-text').innerText = labelVal;
  });
});
console.log(input)
console.log(inputs)

// Get buttons
const addNew = document.getElementById('add-button');
const editBtn = document.getElementById('edit-button');
const deleteBtn = document.getElementById('delete-button');

// Get forms
const addForm = document.getElementById('add-form-container');
const editForm = document.getElementById('edit-form-container');
const deleteForm = document.getElementById('delete-form-container');


// Get submits
const submitAdd = document.getElementById('subAdd');

// Add event listeners
addNew.addEventListener('click', () => {
    addForm.classList.toggle('hide')
    editForm.classList.add('hide')
    deleteForm.classList.add('hide')
});
editBtn.addEventListener('click', () => { 
    editForm.classList.toggle('hide')
    addForm.classList.add('hide')
    deleteForm.classList.add('hide')
});
deleteBtn.addEventListener('click', () => { 
    deleteForm.classList.toggle('hide')
    addForm.classList.add('hide')
    editForm.classList.add('hide')
});

