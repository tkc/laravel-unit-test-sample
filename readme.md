# Laravel Testing Decoded

## 何をテストすべきか？

基本的なルール、この本の中で何度も繰りかえすことになりますが、壊れる可能性があれば
どんなものもテストしましょう。ある一つのルートが壊れ、４０４ページが表示される可能性が
ありますか？ありますよね？ですから、できるだけ早く、どこが壊れても確実に補足できるよう
に、テストを書くのです。テーブルからデーターを取得し、レポートとしてファイルに書き出すカ
スタムクラスはどうでしょう？テストすべきでしょうか？もちろんです。ウェブサイトのサイドバー
に、最新のツイートを取得し表示する、ユーティリティーはどうでしょうか？もしも、代替え案が
Google Chorme を開き、サイドバーをチェックすることなら、明らかに答えは「はい」です。
欠点は、少なくとも最初の頃、全てをテストするマントラに、すぐ圧倒されてしまうことでしょう。
学習曲線は緩やかです。でも大丈夫、一段ずつ上がって行きましょう。どのようにモデルをテ
ストするか、学んで下さい。この手順に慣れたら、次へ進みます。よちよち歩きで行くのです。
数を数え始める時に、指を折るのとおなじ理由です。

Codeception
http://codeception.com/

## 1.失敗するテストを書く:
最初に失敗するテストを書くことをせずに、
プロダクションコードを一行でも書いてはいけません。


## 2. パスさせる:
一度テストを定義したら、テストをパスさせるために、出来るだけ最低限度のコードを書きます。
それぞれの失敗しているテストに対して「このテストをパスさせる 一番シンプルな方法は何かな?」
という観点で考えるアプローチです。

##  3. リファクタリング:
テストに合格したら(グリーンになったら) 、
コードをリファクタリングできます。


Codeception.docs.ja
http://piccagliani.github.io/Codeception.docs.ja_JP/02-GettingStarted.html

Laravelでアプリケーションテストをする際のモックの話
http://sota1235.hatenablog.com/entry/2015/10/12/210000


satooshi/php-coveralls
https://github.com/satooshi/php-coveralls


// tests配下全部実行(設定ファイルはphpunit.xml)
% php vendor/bin/phpunit


// 指定ディレクトリ配下全部実行
% php vendor/bin/phpunit tests/Http


// クラス名で絞り込んで実行
% php vendor/bin/phpunit --filter=SampleTest


// メソッド名で絞り込んで実行
% php vendor/bin/phpunit --filter=visit_sample_page


Laravel and CircleCI
https://github.com/mistakevin/old-site/wiki/Laravel-and-CircleCI
