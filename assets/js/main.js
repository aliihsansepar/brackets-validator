var element = document.getElementById('validate');

element.addEventListener('click', function (e) {
    e.preventDefault();

    let input = document.getElementById('bracketsInput');

    console.log(input.value);

});