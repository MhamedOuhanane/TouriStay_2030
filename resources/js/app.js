import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


function previewImage(event) {
    const file = event.target.files[0]; 
    const reader = new FileReader();  
    
    reader.onload = function(e) {  
        const imgPreview = document.getElementById('profilePhotoPreview');  
        imgPreview.src = e.target.result;  
    };

    if (file) {
        reader.readAsDataURL(file);  
    }
}

document.querySelector('label[for="profileImage"]').addEventListener('click', (event) => {previewImage(event)});