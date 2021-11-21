Link project trên github: https://github.com/lamhoangvu217/vinmartplus

Các bước chạy project:
1 - Tạo cơ sở dữ liệu ql_vinmart trong mysql

2 - Trong mysql import file ql_vinmart để tạo bảng

3 - Mở project ở IDE rồi mở Terminal gõ các lệnh sau: 
composer install
npm install 

4 - Thực hiện lệnh sau để copy ra file env:
cp .env.example .env

5 - Tạo ra key cho project:
php artisan key:generate

6 - Tạo ra các bảng và dữ liệu mẫu cho database
php artisan migrate
php artisan db:seed

7 - Storage link
php artisan storage:link

8 - Chạy project
php artisan serve
