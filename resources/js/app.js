import './bootstrap';


window.addEventListener('load', function() {

    let containers = document.getElementsByClassName('container');
    let loaders = document.getElementsByClassName('load');

    // Itera attraverso gli elementi selezionati e imposta lo stile di visualizzazione per ciascuno di essi
    for (let i = 0; i < containers.length; i++) {
        containers[i].style.display = 'block';
    }

    for (let i = 0; i < loaders.length; i++) {
        loaders[i].style.display = 'none';
    }
});
