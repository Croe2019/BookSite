<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Book Site</title>
  </head>
  <body>
    
    <div class="container-fluid">
        <nav class="navbar navbar-dark mx-auto bg-dark w-100">
            <h1 class="text-white" href="#">Book Site</h1>

            <!-- 検索バーを表示 -->
            <nav class="navbar navbar-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="検索" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" href="#" type="submit">検索</button>
                </form>
            </nav>
        </nav>

        <!-- トレンド又は、おすすめの本の一覧を表示
                ここでは、データベースから取得した本のデータを表示し、詳細画面のURLを設置する(後でソースコードを修正) -->
        <div class="card-group mx-auto mt-3 mb-3 w-75">
            <div class="row row-cols-2 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card  border-primary">
                        <!-- この画像は、サンプルなので本の画像を取得したら本の画像に変更する -->
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="image/sample.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">本のタイトル</h5>
                            </div>
                        </a>
                        <div class="card-footer text-center">
                            <small class="text-muted">○○分前に更新</small>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card  border-primary">
                        <!-- この画像は、サンプルなので本の画像を取得したら本の画像に変更する -->
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="image/sample.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">本のタイトル</h5>
                            </div>
                        </a>
                        <div class="card-footer text-center">
                            <small class="text-muted">○○分前に更新</small>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card  border-primary">
                        <!-- この画像は、サンプルなので本の画像を取得したら本の画像に変更する -->
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="image/sample.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">本のタイトル</h5>
                            </div>
                        </a>
                        <div class="card-footer text-center">
                            <small class="text-muted">○○分前に更新</small>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card  border-primary">
                        <!-- この画像は、サンプルなので本の画像を取得したら本の画像に変更する -->
                        <a href="#" class="text-dark text-decoration-none">
                            <img class="card-img-top" src="image/sample.jpg">
                            <div class="card-body">
                                <h5 class="card-title text-center">本のタイトル</h5>
                            </div>
                        </a>
                        <div class="card-footer text-center">
                            <small class="text-muted">○○分前に更新</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ページネーションの数は、コントローラー側での処理と同じにする -->
        <nav aria-label="...">
            <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="前">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="次">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>