const linksMenu = document.getElementsByClassName('links-menu');
const recipes = document.getElementsByClassName('recipes');


for (let i = 0; i < linksMenu.length; i++) {

    linksMenu[i].addEventListener('click', function (e) {
        e.preventDefault();
        openMenu(i);
    });

    linksMenu[i].addEventListener('mouseenter', function (e) {
        openMenu(i);
    });
}

for (let i = 0; i < recipes.length; i++) {
    recipes[i].addEventListener('click', function () {
        closeMenu();
    });
    recipes[i].addEventListener('mouseenter', function () {
        closeMenu();
    });


}


   


function openMenu(i) {
    // on recupere l'id du menu a ouvrir
    const target = linksMenu[i].getAttribute('target');

    // on recupere et ouvre le bon menu
    const recetteMenu = document.getElementById(target);

    if (recetteMenu.classList.contains('active')) {
        // on ferme tous les menus precedamment ouverts
        closeMenu();
    } else {
        closeMenu();
        recetteMenu.classList.add('active');
    }
}

function closeMenu() {
    for (let i = 0; i < linksMenu.length; i++) {
        // on recupere l'id du menu a ouvrir
        const target = linksMenu[i].getAttribute('target');

        // on recupere et ouvre le bon menu
        const recetteMenu = document.getElementById(target);
        recetteMenu.classList.remove('active');
    }
}