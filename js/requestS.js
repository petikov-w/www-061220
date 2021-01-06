let buttonLoad = document.querySelector('.test');

buttonLoad.addEventListener('click', function (event) {

    // let mLink = {
    //     'websites' : [
    //         {'name' : 'Отличия webpack и gulp- — Хабр Q&A',
    //             'url' : 'https://qna.habr.com/q/668899'},
    //         {'name' : 'Введение в Ajax',
    //             'url' : 'http://javascript.ru/ajax/intro#chto-takoe-ajax-primer-realizacii'},
    //         {'name' : 'Уроки Laravel - YouTube',
    //             'url' : 'https://www.youtube.com/playlist?list=PLVfMKQXDAhGUO-r2UPv3VszEwn_edFVC6'},
    //     ]
    // };
    let mLink = {Pink};
    console.log(mLink);

    // var Sit = {mlink};
    // let jsonLink = JSON.stringify(mLink);
    let jsonLink = JSON.stringify(mLink);
    console.log(jsonLink);
    let result = document.querySelector('.result');
    let requestIntoServer = new XMLHttpRequest();

    // const params = "s=" + id + "&m=" + qty;
     requestIntoServer.open('POST',"http://www061220/index2.php", true)
    // устанавливаем заголовок — выбираем тип контента, который отправится на сервер,
    // в нашем случае мы явно пишем, что это JSON
     requestIntoServer.setRequestHeader('Content-Type', 'application/json');
     requestIntoServer.send(jsonLink);



// Создаем экземпляр объекта запроса на сервер,
// когда придёт ответ на наше обращение к серверу, мы его обработаем здесь
// Создаем реакцию объекта на изменение состояния
    requestIntoServer.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            result.innerHTML = this.responseText;
        }
    }

});



