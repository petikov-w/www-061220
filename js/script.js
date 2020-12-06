let themes = ["Верстка сайтов", "Веб-дизайн", "Веб-разработка", "Тренды IT", "Полезные online сервисы", "Копирайтинг", "Новости IT технологий"];

for (let theme of themes) {
    document.querySelector('.list-themes').innerHTML += '<div class="card-theme">'+theme+'<h2> \n';
}


// document.querySelector('.test').onclick = function (){
//     console.log('Нажата кнопка "Загрузить"');
// };

