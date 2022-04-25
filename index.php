<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card form">
            <div class="card-body" id="form">
                <h5 class="font-weight-bolder">Параметры таблицы</h5>
                <div class="form-group">
                    <input type="text" placeholder="Название таблицы" name="table-name" class="form-control mt-2">
                </div>
                <h5 class="font-weight-bolder mt-4">Поля таблицы</h5>
                <div class="form-group mt-2" id="columns">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" placeholder="Название столбца" name="columns[]" class="form-control">
                        </div>
                        <div class="col-6">
                            <select name="type" id="" class="form-control">
                                <option value="varchar(255)">Строка</option>
                                <option value="int">Число</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success mt-2" onclick="addColumn()">Добавить столбец</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body code-zone" id="code-zone">
                SQL
            </div>
        </div>
    </div>

    <script src="/assets/js/script.js"></script>
</body>
</html>