<!doctype html>
<head>
    <title>Добавить новость</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/headers.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
@include('layouts.header')
<div class="container">
    <div class="row">
        <h3>Добавить новость</h3>
        <form>
            <div class="form-group">
                <label for="header_news">Заголовок</label>
                <input type="text" class="form-control" id="header_news" />
            </div>

            <div class="form-group">
                <label for="text_news">Текст</label>
                <textarea class="form-control" id="text_news" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="file_news">Картинка</label>
                <input type="file" class="form-control" id="file_news" />
            </div>
            <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Опубликовать новость</button>
        </form>
    </div>
    <div class="row mt-5 mb-5">
        <h2>Мои новости</h2>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div><div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://sun3-16.userapi.com/impg/isLJ1CJ7bfDKbob3VCjNosUhosD_Di0OOgQTBw/CXXqVvn5wpw.jpg?size=670x440&quality=95&sign=4aec0a3df51dce04db3cb1533b9a9144&type=album" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


    </div>

</div>
</body>
</html>
