<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brackets Checker</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="alternate" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <div class="row d-flex h-100">
        <div class="justify-content-evenly align-items-center">
            <div class="row my-5 p-1">
                <div class="col-10">
                    <div class="mb-3 row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control form-control-lg" id="bracketsInput"
                                   placeholder='e.g : "[[({()})]]" '>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary btn-lg" id="validate">Validate</button>
                </div>
                <div class="col-11 p-3 mx-3 text-center d-none h3 alert alert-secondary">
                    <span class="p-1"> Result : </span>
                    <span class="p-1 fw-bold" id="result"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- Main JS -->
<script>
    var button = $('#validate'),
        input = $('#bracketsInput');

    button.on('click', function (e) {
        e.preventDefault();
        validate(input);
    });

    input.on('keypress', function (e) {
        debounce(function() {
            validate(input)
        }, 1000);
    })

    function validate(val) {
        $('#result').html('').closest('div').addClass('d-none');
        $.post('/check-input', {input: input.val()}, function (result) {
            $('#result').html(result).closest('div').removeClass('d-none');
        });
    }
    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };
</script>
</body>
</html>