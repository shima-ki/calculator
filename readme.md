## 構築環境

- Laravel 5.4
- vue.js 2.0.8
- SQLite3

## 必要なソフト
- Composer(https://getcomposer.org/)

## 動作手順

1.任意のフォルダにgit cloneを実施  
	- git clone https://github.com/shima-ki/calculator.git  
2.コンソールを起動し、cloneしたフォルダに移動する  
3.以下のコマンドを実行する  
	- composer install  
	- php artisan serve  
4.http://localhost:8000 にアクセスをする

## 未実装部分
1. 数式の計算をJavaScriptのeval関数を使用せずに実装  
	- 17桁以上の計算が正常に行われないため  
2. 計算式の入力フォームで、数字と「+-*/」以外の文字の入力不可にする  
3. 計算式が正常でない場合のエラーハンドリングの実装  
	 - 正常でない場合にコンソールにvue.jsのエラーメッセージが都度表示されてしまうため  
4. ページリロード時の履歴の保持  
	- 案1 JavaScriptでWebストレージ利用  
	- 案2 DBを利用  
