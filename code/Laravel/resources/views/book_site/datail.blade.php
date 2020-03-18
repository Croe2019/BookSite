<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Book Site</title>
  </head>
  <body>
    
    <div class="container-fluid">
        <nav class="navbar navbar-dark mx-auto bg-dark w-100">
            <h1><a href="/home" class="text-white text-decoration-none">Book Site</a></h1>

            <!-- 検索バーを表示 -->
            <nav class="navbar navbar-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="検索" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" href="#" type="submit">検索</button>
                </form>
            </nav>
        </nav>

        <div class="card-group mx-auto mt-3 w-50">
            <div class="card border-primary">
                <!-- 本の情報を取得したら、取得した本の画像を表示する -->
                <img class="card-img-top mx-auto" src="image/sample.jpg"  style="height: 200px; width: 200px;">
                <div class="card-body">
                    <!-- 取得した本のタイトル、説明文を表示する -->
                    <h5 class="card-title text-center">本のタイトル</h5>
                    <p class="card-text text-center">本の説明文が入ります。情報を取得したら、取得した説明文が入ります。</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>