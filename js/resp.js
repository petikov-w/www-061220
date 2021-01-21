let provs = document.querySelector('.exs');

provs.addEventListener('click', function (event){
   // 'http://www-061220/expx.php'
   //
   //  let ss01 = {'mas' : 'Привет от клиента ', 'pas' : 'Пока'};


    var data = JSON.stringify({'mas' : 'Привет от клиента ', 'pas' : 'Пока'});
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'http://www-061220/expx.php', true);

    xhttp.setRequestHeader('Content-type', 'application/json');
    xhttp.send(data);

    xhttp.onreadystatechange = function () {
        if (this.readyState==4 && this.status==200) {
            // functionName(this);
            this.responseText;
            console.log(this.responseText);
        }
    }




    // ajax('http://www-061220/expx.php', 'POST', showsas, ss01);
});

function showsas(date) {
    // console.log(date);
    // console.log( JSON.parse(date.responseText));

}

