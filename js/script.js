let themes = ["Верстка сайтов",
              "Веб-дизайн",
              "Веб-разработка",
              "Тренды IT",
              "Полезные online сервисы",
              "Копирайтинг",
              "Новости IT технологий"];

for (let theme of themes) {
    document.querySelector('.list-themes').innerHTML += '<div class="card-theme">'+theme+'</div>';
}


function showFile(input) {
    let file = input.files[0];
    console.log(`File name: ${file.name}`); // например, my.png

    var reader = new FileReader();

    reader.onload = function(event) {
        var contents = event.target.result;
        console.log("Содержимое файла: " + contents);
        document.querySelector('.info-file').innerHTML += '<p>'+contents+'</p>';
    };

    reader.onerror = function(event) {
        console.error("Файл не может быть прочитан! код " + event.target.error.code);
    };

     reader.readAsText(file);


}


// document.querySelector('.test').onclick = function (){
//     console.log('Нажата кнопка "Загрузить"');
// };

