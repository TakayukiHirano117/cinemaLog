import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// const sample = document.getElementById('sample')
// sample.addEventListener('click', (e) => {
//     console.log(e.target.value)
// })

const category = document.getElementById('category')
category.onclick = (e) => {
    console.log(category.selectedIndex)
}
