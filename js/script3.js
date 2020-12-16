let fileInput = document.querySelector('#file-input');
let buttonLoad =document.querySelector('.test');


fileInput.addEventListener('change', function (event) {
    for (let i = 0; i < fileInput.files.length; i++) {
        let file = fileInput.files[i];
        let reader = new FileReader();
        reader.onload = function (event){
            console.log(file);
            console.log(ExtractUrl(reader.result));
            // document.querySelector('#link').href =  ExtractUrl(reader.result);
            // document.querySelector('.name-link').innerHTML +=  delete_extension(file.name)+'</br>';

            let elem = document.createElement("a");
            elem.href = ExtractUrl(reader.result);
            elem.className = 'link';
            elem.innerHTML = delete_extension(file.name);
            document.body.append(elem);
        };
        reader.readAsText(file);
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


buttonLoad.addEventListener('click', function (event) {
    alert('Произошло событие <-> ')
});

