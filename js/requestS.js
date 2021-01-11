//let buttonLoad = document.querySelector('.test');
let buttonLoad2 = document.querySelector('.test2');
// let path_to_handler = 'http://www-061220/index2.php';

// buttonLoad.addEventListener('click', function (event) {
//
//     let mLink = {Pink};
//     //console.log(mLink);
//     let jsonLink = JSON.stringify(mLink);
//     //console.log(jsonLink);
//     let result = document.querySelector('.result');
//     let requestIntoServer = new XMLHttpRequest();
//
//     requestIntoServer.open('POST',path_to_handler, true)
//
//     // устанавливаем заголовок — выбираем тип контента, который отправится на сервер,
//     // в нашем случае мы явно пишем, что это JSON
//      requestIntoServer.setRequestHeader('Content-Type', 'application/json');
//      requestIntoServer.send(jsonLink);
//
//
//
// // Создаем экземпляр объекта запроса на сервер,
// // когда придёт ответ на наше обращение к серверу, мы его обработаем здесь
// // Создаем реакцию объекта на изменение состояния
//     requestIntoServer.onreadystatechange = function () {
//         if (this.readyState==4 && this.status==200) {
//             result.innerHTML = this.responseText;
//         }
//     }
//
// });


buttonLoad2.addEventListener('click', function (event) {
    let tes = 1;
    numerals(tes);
    console.log(`${tes} ${numerals(tes)}`);
});