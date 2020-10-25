<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ロビー nada-sc+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/global/reset.css" rel="stylesheet" media="all">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="css/global/font.css" rel="stylesheet" media="all">
    <link href="css/global/size.css" rel="stylesheet" media="all">
    <link href="css/global/size-template/center.css" rel="stylesheet" media="all">
    <link href="css/global/size-template/fullheight.css" rel="stylesheet" media="all">
    <link href="css/global/style/style.css" rel="stylesheet" media="all">
    <link href="css/global/style/header.css" rel="stylesheet" media="all">
    <link href="css/global/style/footer.css" rel="stylesheet" media="all">
    <link href="css/global/utility.css" rel="stylesheet" media="all">
    @yield('css')
</head>

<body>
    <div id="fullscreen" class="fullheight">
        <div id="blockskip"><a href="#main">このページの本文へ移動</a></div>
        <header id="body-header">
            <nav class="navbar navbar-default navbar-expand-lg py-0 navbar-light color__navi ">
                <div class="container-fluid font-weight-bold">
                    <a class="navbar-brand" href="#">
                        <h1 class="mb-0 font-weight-bold">
                            <img src="img/nada-sc.png">
                        </h1>
                    </a>
                </div>
            </nav>
        </header>

        <div id="contents-wrapper">
            @yield('content')
        </div>
    </div>

    <footer id="body-footer" class="outer-block footer">
        <div class="logo">
            <h1 class="mb-0 font-weight-bold">
                灘校生徒会サイト
            </h1>
        </div>
        <ul class="body-footer-nav">
            <li><a href="">ABOUT</a></li>
            <li><a href="">CONTACT</a></li>
        </ul>
        <p class="copyright">
            <a href="https://twitter.com/rxr6ep9" target="_blank">COPYRIGHT © 2020 Sogo Nishihara. All rights Reserved.</a>
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>