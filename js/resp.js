let provs = document.querySelector('.exs');

provs.addEventListener('click', function (event){
    // fetch('https://jsonplaceholder.typicode.com/posts/1')
    //     .then((response) => response.json())
    //     .then((json) => console.log(json));
    fetch('http://www-061220/expx.php')
        .then((response) => response.status)
        //.then((json) => console.log(json));
});