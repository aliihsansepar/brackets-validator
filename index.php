<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brackets Checker</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Main Css -->
    <link rel="alternate" href="assets/css/main.css">
</head>
<body>
   

<div class="container">
    <div class="row d-flex">
        <div class="justify-content-evenly align-items-center">
            <div class="row my-5 p-1">
                <div class="col-10">  
                    <div class="mb-3 row">
                        <label for="bracketsInput" class="col-sm-2 col-form-label">Enter Brackets</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="bracketsInput" placeholder='e.g : "[[({()})]]" '>
                        </div>
                    </div>                
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary btn-lg" id="validate">Validate</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>
</html>