# 趣味と実益のための著名なOSSライブラリ起因の脆弱性の探求
[セキュリティ・キャンプ全国大会2021オンライン](https://www.ipa.go.jp/jinzai/camp/2021/zenkoku2021_program_list.html#list_b5)

## 講義概要

```
各プログラミング言語で標準的に用いられているライブラリには、セキュリティを考慮していないものが多く見受けられます。
例えば、各プログラミング言語に標準で備わっているXMLパーサは、セキュリティを考慮していないものが多いです。
本講義では、XMLファイルの扱いの不備に関する攻撃手法/対策方法を一例として取り上げ、各プログラミング言語の標準ライブラリの問題点を見ていきます。
また、実際にOSSの脆弱性を見つける演習を実施したいと考えています。
この講義を受けることで、脆弱性を生み出さないよう気をつけるポイント、脆弱性を見つけるためのポイントを学べるでしょう。
```

## 参考資料
- [Insecure deserialization | Web Security Academy](https://portswigger.net/web-security/deserialization)
- [What is XXE (XML external entity) injection? Tutorial & Examples | Web Security Academy](https://portswigger.net/web-security/xxe)
- [Utilizing Code Reuse/ROP in PHP Application Exploits | OWASP](https://owasp.org/www-pdf-archive/Utilizing-Code-Reuse-Or-Return-Oriented-Programming-In-PHP-Application-Exploits.pdf)
- [Practical PHP Object Injection | INSOMNIA](https://insomniasec.com/downloads/publications/Practical%20PHP%20Object%20Injection.pdf)
- [A Hands-on XML External Entity Vulnerability Training Module | SANS](https://www.sans.org/reading-room/whitepapers/application/hands-on-xml-external-entity-vulnerability-training-module-34397)
- [defusedxml · PyPI](https://pypi.org/project/defusedxml/#python-xml-libraries)
