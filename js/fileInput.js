let fileInput = document.querySelector('#file-input');
let Pink = [];
let dataLabel = document.querySelector('.if-button')

fileInput.addEventListener('change', function (event) {
    for (let i = 0; i < fileInput.files.length; i++) {
        let file = fileInput.files[i];
        let reader = new FileReader();
        reader.onload = function (event){
            // Создаем новые элементы
            let link_a = document.createElement('a');
            link_a.href = ExtractUrl(reader.result);
            link_a.className = 'link';
            let div_a = document.createElement('div')
            div_a.className = 'name-link';
            div_a.innerHTML = delete_extension(file.name);
            // Добавляем созданные элементы на страницу
            let main = document.querySelector('main');
            link_a.appendChild(div_a);
            main.appendChild(link_a);


            Pink.push({
                name: delete_extension(file.name),
                url: ExtractUrl(reader.result)
            });
            console.log(Pink);
        };
        reader.readAsText(file);
        // let jsonLink = JSON.stringify(mLink);
        // console.log(jsonLink);
    }
    dataLabel.innerHTML = `Выбрано :&nbsp  <span class="e45">${fileInput.files.length}</span> 
                            ${numerals(fileInput.files.length)}.  &nbsp
                            Добавить в копилку? <span class="z-yes">Да</span><span class="z-no">Нет</span>`;
});

function delete_extension(source) {
    let end_pos = source.indexOf('.url');
    return source.slice(0,end_pos);
}

function ExtractUrl(source) {
    let start_pos = source.indexOf('URL');
    let end_pos = source.indexOf('/?');
    let result = '';
    if (start_pos>0 && end_pos>0) {
        result = source.slice(start_pos+4, end_pos+1)
    } else if (start_pos>0 && end_pos<0) {
        result = source.slice(start_pos+4)
    }
    return result;
}

function numerals (number) {
    let s_num=0;
    let flag_11_19 = true;
    if (number>10) {
       jn0 = Number(number.toString().slice(-2));
        console.log(number.toString().slice(-2));
        if(jn0>10 && jn0<20) {
            s_num='ссылок'
        } else {flag_11_19 = false}
    }


    if (!flag_11_19) {
        let je1 = number.toString().substr(-1,1);

        switch (je1){
            case '1':
                s_num = 'ссылка';
                break;
            case '2':
            case '3':
            case '4':
                s_num = 'ссылки';
                break;
            case '5':
            case '6':
            case '7':
            case '8':
            case '9':
            case '0':
                s_num = 'ссылок';
                break;
        }
    }


        return s_num;
}
