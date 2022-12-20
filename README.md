# Tugas Sesi 10 Laravel Authentication w/ Socialite
Berikut adalah hasil kodingan tugas sesi 10, untuk autentikasi bisa manual atau menggunakan platform lain seperti Google atau Github. Satu user bisa sign in ke multiple platform jadi disini ada relationship one to many antara user dengan social account.

## Installation & Setup
1. Clone project dari repository Github 
```sh
git clone https://github.com/ervin-sungkono/Socialite-Auth.git
```

2. Setup Laravel & install npm dependencies
```sh
composer install
npm install
```

3. Copy .env file and add credentials
```sh
cp .env.example .env
```
| Variable | Description |
| :--- | :--- |
| `DB_DATABASE` | Your database name |
| `MAIL_USERNAME` | Your email username* |
| `MAIL_PASSWORD` | Your email password* |
| `MAIL_ENCRYPTION` | Mail encryption type* |
| `MAIL_FROM_ADDRESS` | Your email address |
| `GITHUB_CLIENT_ID` | Your Github Client ID |
| `GITHUB_CLIENT_SECRET` | Your Github Client Secret |
| `GOOGLE_CLIENT_ID` | Your Google Client ID |
| `GOOGLE_CLIENT_SECRET` | Your Google Client Secret |
*You can find these credentials in https://mailtrap.io

4. Generate application key
 ```sh
php artisan key:generate
```

5. Migrate Database
 ```sh
php artisan migrate:fresh
```

6. Run app
```sh
php artisan serve
```
