let fileInput = document.querySelector('#file-input');
let Pink = [];


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


