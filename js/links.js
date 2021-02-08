// window.onload = function () {
//     // Выбираем все ссылки
    let menu_item = document.querySelectorAll('.mi-link');

    for (i = 0; i < menu_item.length; i++) {
        menu_item[i].addEventListener('click', handler_menu_item_onclick, false);
    }
// }

function handler_menu_item_onclick() {
    document.querySelector('.menu-context-link').classList.add('hidden');
}

function handler_menulink_onclick(event) {
    event.preventDefault();
    // console.log('Привет --> ' + event.target.textContent);
    document.querySelector('.menu-context-link').classList.remove('hidden');
}