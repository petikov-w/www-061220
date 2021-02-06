// Ждем полной загрузки страницы
let sssss = '';

window.onload = function () {
    // Выбираем все карточки меток
    let card = document.querySelectorAll('.card-theme');
    let link = document.querySelectorAll('.link');

    console.log(card.length+' card');
    console.log(link.length+' link');

    // Вешаем на них нужные события
    for (i = 0; i < card.length; i++) {
        card[i].addEventListener('click', handler_card_onclick, false);
    }

}
// =============================================================================

//let link_template = `<a href="${$resp[i]['url']}" class="link"><span class="name-link">${$resp[i]['title']}</span></a><br>`;


// =============================================================================





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
          var $resp=JSON.parse(this.responseText)
            sssss = $resp;
            links_list();
        }
    }
}

function links_list() {
    let sds = document.querySelector('.view-list');
    sds.innerHTML = '';
    for (i=0; i<sssss.length; i++) {
        // =====================================================================================

        let link_template = `<a href="${sssss[i]['url']}" class="link"><span class="name-link">${sssss[i]['title']}</span></a><br>`;
        const myFragment = document.createRange().createContextualFragment(link_template);
        console.log(myFragment.querySelector('.name-link').textContent);
        console.log(myFragment.querySelector('.link').getAttribute('href'));
        myFragment.querySelector('.name-link').addEventListener('contextmenu', handler_link_onclick);
        document.querySelector('.view-list').appendChild(myFragment);

        //======================================================================================
    }
}

function handler_link_onclick(event) {
     event.preventDefault();
     console.log('Привет --> ' + event.target.textContent);
}

