const inputFile      = document.getElementById( 'inputFile' );
const outputTextarea = document.getElementById( 'outputTextarea' );
const fileReader     = new FileReader();

fileReader.onload = function( event ) {

    const file     = event.target.result;
    const allLines = file.split( /\r\n|\n/ );
    console.log(allLines);
    document.querySelector('.info-file').innerHTML += '<p>'+file+'</p>';
    // Выводим имя файла
    //outputTextarea.value = inputFile.files[ 0 ].name;

    // Читаем из файла строка за строкой

    allLines.forEach( function( line ) {

        if( line.substring( 0, 4 ) === 'URL=' ) {
            document.querySelector('.info-file').innerHTML += '<p>'+line+'</p>';
        }

    } );

};

fileReader.onerror = function( event ) {

    alert( event.target.error.name );

};

inputFile.onchange = function( event ) {

    // If the file is of the right type, then read its contents ...

    if( inputFile.files[ 0 ].name.substr( -4, 4 ) === '.url' ) {

        fileReader.readAsText( event.target.files[ 0 ] );
    }
    else {

        outputTextarea.value = 'The selected file is not an internet shortcut link file: ' + inputFile.files[ 0 ].name;

    }

}

