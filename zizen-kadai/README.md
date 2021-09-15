# 事前課題

## 課題0
講義では次のソフトウェアを用いる予定です。それぞれを使っているパソコンにインストールしておいてください。

- PHP
  - [PHP: インストールと設定 - Manual](https://www.php.net/manual/ja/install.php)
- Python
  - [Python モジュールのインストール — Python 3.9.4 ドキュメント](https://docs.python.org/ja/3/installing/index.html)
- Docker
  - [Docker のインストール — Docker-docs-ja 19.03 ドキュメント](http://docs.docker.jp/engine/installation/)

## 課題1
本講義ではXMLファイルの扱いの不備に関する攻撃手法を扱います。
Ghidraというリバースエンジニアリングツールには、XMLファイル関連のCVEがついている脆弱性がいくつかあります。
いずれか好きなものを選び、実際に脆弱性を攻撃してください。
脆弱性に該当するバージョンのGhidraをダウンロード(https://ghidra-sre.org/releaseNotes_9.1.html )し、インストールすることで、再現環境を作成できます。
また、どのように脆弱性を攻撃したのかWriteupを書いてください。

- CVE-2019-13625（https://github.com/NationalSecurityAgency/ghidra/issues/71 ）
- CVE-2019-16941（https://github.com/purpleracc00n/CVE-2019-16941 ）

### 参考
- [Ghidra Installation Guide](https://ghidra-sre.org/InstallationGuide.html#InstallationNotes)

※ 講義中ではGhidraを使ったり、リバースエンジニアリングをしたりしないので安心してください。

## 課題2
講義中にDockerによる演習環境を使って貰う予定です。
そのため、Dockerの使い方に慣れておいてほしいです。
PHPファイルをDockerfileを書いて実行してください。
DockerfileはDockerイメージを作成するための設定を記述しておくファイルです。

次のDockerfileでは`/usr/src/myapp`に現在いるディレクトリの内容をコピーしたあと、
script.phpを実行しています。
ベースとなるDockerイメージにはDocker公式のイメージ（https://hub.docker.com/_/php ） を用いています。

```
FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./script.php" ]
```

script.phpは、`Hello World!\n`と出力する次のようなスクリプトにしておきましょう。

```
<?php 
echo "Hello World!\n";
```

このDockerfileとscript.phpを作成したディレクトリでコマンドを実行することでDockerイメージを作成できます。

```
$ docker build -t hello-app .
```

作成したイメージは次のコマンドで確認できます。

```
$ docker images
REPOSITORY      TAG       IMAGE ID       CREATED         SIZE
hello-app       latest    2b1a37473724   9 seconds ago   420MB
```

次のコマンドでイメージからコンテナを起動できます。

```
$ docker run hello-app
Hello World!
```

起動中のコンテナは次のコマンドで確認できます。
今回作成したコンテナはscript.phpを実行したあとすぐに終了しているでしょう。

```
$ docker ps -a
CONTAINER ID   IMAGE           COMMAND                  CREATED          STATUS                      PORTS                      NAMES
50892905f3d5   hello-app       "docker-php-entrypoi…"   47 seconds ago   Exited (0) 46 seconds ago                              brave_cohen
```

`docker start <コンテナID>`で作成済みのコンテナを再度実行できます。
コンテナIDは上記の`docker ps -a`で確認できます。

```
$ docker start a9057a892f90
a9057a892f90
```

Dockerの操作に慣れたらイメージとコンテナを削除してください。
イメージIDは`docker images`で確認できます。

```
$ docker rmi <イメージID>
$ docker rm <コンテナID>
```

この課題では提出物はありません。

## 課題3
応募課題にあって選択問題Eを解いてください。
応募時に解いた人はこの課題はスキップしてもらって大丈夫です。
以下選択問題Eの問題文です。小問1、小問2の解答を提出してください。

Pythonにはpickleという標準モジュールがあります。[pickleの公式ドキュメント](https://docs.python.org/ja/3/library/pickle.html)に記載されているように、pickleで信頼できない値をデシリアライズすることは脆弱性の原因となり得ます。その理由および攻撃手法について、以下の小問(1)(2)に回答してください。

**小問(1)** 何故、脆弱性となるのかを説明してください（必須回答）

**小問(2)** 以下のPythonのソースコードには上記の脆弱性が存在します。この脆弱性を用いて、TCPの1234番ポートに対するリバースシェルを作成してください。netcatで1234番ポートを待ち受けておき、接続が確立した後、lsなどのコマンドを打ち込み結果が返ってくれば正解です。リバースシェルを確立させることのできるBase64文字列と、この文字列を生成するPoC（実証コード）の両方を提出してください（必須回答）

```
#!/usr/bin/env python3
import sys
import base64
import pickle

args = sys.argv
if len(args) != 2:
    print('第一引数にBase64エンコードされた文字列を指定してください')

try:
    data = base64.urlsafe_b64decode(args[1])
    deserialized = pickle.loads(data)
    print('deserialized: {0}'.format(deserialized))
except:
    print('Failed to deserialize')
```

