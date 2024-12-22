# アプリ名「Rese」
飲食店予約アプリ

## 作成目的
自社で予約サービス保持のため

## 機能一覧
お気に入り登録
エリア/ジャンル検索

## 使用技術(実行環境)
PHP8.3.0
Laravel8.83.27
MySQL8.0.26

## 環境構築
Dockerビルド
1.git clone git@github.com:estra-inc/confirmation-test-contact-form.git
2.DockerDesktopアプリを立ち上げる
3.docker-compose up -d --build
mysql:
platform: linux/x86_64(この文追加)
image: mysql:8.0.26
environment:

Laravel環境構築
1.docker-compose exec php bash
2.composer install
3.「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
4..envに以下の環境変数を追加
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db

DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
5.アプリケーションキーの作成
php artisan key:generate
6.マイグレーションの実行
php artisan migrate

## URL
開発環境：http://localhost/
phpMyAdmin:：http://localhost:8080/

## ER図
![ER図(上級模擬案件)](https://github.com/user-attachments/assets/5b49c9c2-522c-4c0d-9253-78c1ed2ee236)
