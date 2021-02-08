let fileInput = document.querySelector('#file-input');
let dataLabel = document.querySelector('.if-button');
let info = document.querySelector('.info-button');
let Pink = [];

fileInput.addEventListener('change', function (event) {
    console.log(fileInput.files);
    for (let i = 0; i < fileInput.files.length; i++) {
        let file = fileInput.files[i];
        let reader = new FileReader();
        reader.onload = function (event){
            // // Создаем новые элементы
            // let link_a = document.createElement('a');
            // link_a.href = ExtractUrl(reader.result);
            // link_a.className = 'link';
            // let div_a = document.createElement('div')
            // div_a.className = 'name-link';
            // div_a.innerHTML = delete_extension(file.name);
            // // Добавляем созданные элементы на страницу
            // let main = document.querySelector('main');
            // link_a.appendChild(div_a);
            // main.appendChild(link_a);
            Pink.push({
                name: delete_extension(file.name),
                url: ExtractUrl(reader.result)
            });
            //console.log(Pink);
        };
        reader.readAsText(file);
    }

    add_class(dataLabel, 'hidden');
    rem_class(info, 'hidden');
    add_class(dataLabel, 'last');
    rem_class(info, 'last');
    add_class(info, 'first');
    rem_class(dataLabel, 'first');
    info.innerHTML = `Выбрано :&nbsp  <span class="e45">${fileInput.files.length}</span>
                            ${numerals(fileInput.files.length)}.  &nbsp
                            Добавить в копилку? <button onclick="add_links()" class="z-yes">Да</button>
                            <button onclick="cansel_links()" class="z-no">Нет</button>`;
});









