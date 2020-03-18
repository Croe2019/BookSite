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

        <!-- ここでは、検索結果を一覧で表示する(後でソースコードを修正し、ページネーションにする) -->
        <!-- 詳細画面へのURLを必ず設置する -->
        <div class="card-group mx-auto mt-3 mb-3 w-75">
            <div class="card  border-primary">
                <!-- この画像は、サンプルなので本の画像を取得したら本の画像に変更する -->
                <img class="card-img-top" src="image/sample.jpg">
                <div class="card-body">
                    <!-- タイトル、テキストも取得した本のタイトル、テキストに変更する -->
                    <h5 class="card-title text-center">本のタイトル</h5>
                    <p class="card-text">本の説明文を表示ここに本の説明部分を表示していく</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-outline-primary d-block" href="#" role="button">詳細画面へ</a>
                </div>
            </div>

            <div class="card border-primary">
                <img class="card-img-top" src="image/sample.jpg">
                <div class="card-body">
                    <h5 class="card-title text-center">本のタイトル2</h5>
                    <p class="card-text">本の説明文を表示2別の本の説明部分を表示するようにする</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-outline-primary d-block" href="#" role="button">詳細画面へ</a>
                </div>
            </div>

            <div class="card  border-primary">
                <img class="card-img-top" src="image/sample.jpg">
                <div class="card-body">
                    <h5 class="card-title text-center">本のタイトル3</h5>
                    <p class="card-text">本の説明文を表示3上記と同じようにして表示していく</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-outline-primary d-block" href="#" role="button">詳細画面へ</a>
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