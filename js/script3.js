let fileInput = document.querySelector('#file-input');
let buttonLoad =document.querySelector('.test');

fileInput.addEventListener('change', function (event) {
    let file = fileInput.files[0];
    let reader = new FileReader();
    //const arrayS = file.split( /\r\n|\n/ );

    reader.onload = function (event){
        console.log(reader.result);

        console.log(detectsub(reader.result,'URL')+'     '+detectsub(reader.result,'/?'));
    };
    reader.readAsText(file);
});

function  detectsub(source, cut){
    return source.indexOf(cut);
}

buttonLoad.addEventListener('click', function (event) {
    alert('Произошло событие <-> ')
});



// const inputFile      = document.getElementById( 'inputFile' );
// console.log(inputFile);
//
// const fileReader     = new FileReader();
// fileReader.onload = function( event ) {
//     const file = event.target.result;
//     document.querySelector('.info-file').innerHTML += '<p>' + 'hrtjhrjhrjhrjrj' + '</p>';
//
// };
//
