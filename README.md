# nada-sc 🌏

## はじめに

使用方法です。

## 必要なもの

### git

gitをインストールしてください。

### docker

お使いの環境にあったdockerをインストールしてください。

[dockerのインストール](https://www.docker.com/get-started)

## 実行

※ 安定版を動かす際は後述の方法でmasterブランチに切り替えてください。

### dockerを走らせる

以下のコマンドでを実行することができます。

```bash
$ git clone https://github.com/medamawa/nada-sc.git
$ cd nada-sc
$ git checkout -b develop origin/develop          // developブランチを作成&クローン&チェックアウト
$ make init
```

※ laravelのバージョンは6系を指定しています。（Makefileで変更可能）

※ ポート番号は8000番です。（docker-composer.ymlで変更可能）

http://127.0.0.1:8000

### DBのマイグレート

初めての場合は以下のコマンドで初期化してからマイグレーションを行います。

```bash
$ make fresh
```

２回目以降は以下のコマンドで追加マイグレーションを行います。

```bash
$ make migrate
```


※ DBのポート番号は3306番です。（docker-composer.ymlで変更可能）

※ 画像はMySQL Workbenchで開く場合の設定です。

（passwordは secret です）
![Imgur](https://i.imgur.com/XvmrPvv.png)

### 認証系に修正が入った場合

プルをした後、以下のコマンドを実行してください。

```bash
// $ cd nada-sc
// $ git pull origin develop

// appのコンソールに移動
$ make app

# composer auto-dumpload

// appのコンソールを出る
# exit
```

### 安定版確認

上記の操作（「実行」参照）をdevelopブランチで行ってください。

```bash
$ cd nada-sc
$ git checkout master
$ make init
```

## その他

### ファイル構成について

laravelのプロジェクトファイルはbackendフォルダです。

### コマンドについて

Makefileを開いてもらえればだいたいわかると思います。

## 参考

[Qiita参考記事](https://qiita.com/ucan-lab/items/5fc1281cd8076c8ac9f4)


## License

```
The MIT License (MIT)

Copyright (c) 2020 ucan-lab/docker-laravel

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

[docker-laravel](https://github.com/ucan-lab/docker-laravel/)
