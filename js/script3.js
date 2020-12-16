//console.log('Привет!');

const inputFile      = document.getElementById( 'inputFile' );
console.log(inputFile);

const fileReader     = new FileReader();
fileReader.onload = function( event ) {
    const file = event.target.result;
    document.querySelector('.info-file').innerHTML += '<p>' + 'hrtjhrjhrjhrjrj' + '</p>';

};

