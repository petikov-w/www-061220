// Ждем полной загрузки страницы
window.onload = function () {
    // Выбираем все карточки меток
    let card = document.querySelectorAll('.card-theme');

    console.log(card.length);

    // Вешаем на них нужные события
    for (i = 0; i < card.length; i++) {
        card[i].addEventListener('click', handler_card_onclick, false);
    }
}

// Обработчик события клика по карточке метки
function handler_card_onclick () {
    let view_main = document.querySelector('.view-main');
    let view_list = document.querySelector('.view-list');
    //console.log(this.innerHTML);
    var data = JSON.stringify({'name_card' : this.innerHTML});
   // console.log(data);
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'http://www-061220/listlinks.php', true);
    xhttp.setRequestHeader('Content-type', 'application/json');
    xhttp.send(data);
    add_class(view_main, 'hidden');
    rem_class(view_list, 'hidden');


    xhttp.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            this.responseText;
           // console.log(this.responseText);
            $resp=JSON.parse(this.responseText);
            let sds = document.querySelector('.view-list');
            sds.innerHTML = '';
            for (i=0; i<$resp.length; i++) {
                document.querySelector('.view-list').innerHTML += '<a href="' + $resp[i]['url'] +
                    '" class="link"><span class="name-link">' + $resp[i]['title']  + '</span></a><br>';
            }
        }
    }

}

// function handler_card_onclick () {
//     console.log(this.innerHTML);
// }

