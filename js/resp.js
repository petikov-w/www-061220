let provs = document.querySelector('.exs');

provs.addEventListener('click', function (event){
   // 'http://www-061220/expx.php'

    let ss01 = {'mas' : 'Привет от клиента '};
    ajax('http://www-061220/expx.php', 'POST', showsas, ss01);
});

function showsas(date) {
    // console.log(date);
    console.log( JSON.parse(date.responseText));

}

