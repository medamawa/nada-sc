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

```bash
$ git clone https://github.com/medamawa/nada-sc.git
$ cd nada-sc
$ make init
```

※ laravelのバージョンは6系を指定しています。（Makefileで変更可能）

※ ポート番号は8000番です。（docker-composer.ymlで変更可能）

http://127.0.0.1:8000

## ファイル構成について

laravelのプロジェクトファイルはbackendフォルダです。

## コマンドについて

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
