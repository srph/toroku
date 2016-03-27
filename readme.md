## toroku
Web user registration for Valiant ROSE Online

## Installation
- Clone the repository
- Install dependencies
```bash
$composer install
```
- Migrate database
```
$ artisan migrate
```
- Copy `.env.example` to `.env`.
```
$ cp .env.example .env
```
- Then configure (especially the email configuration).
```bash
MAIL_USERNAME=<YOUR_EMAIL>
MAIL_PASSWORD=<YOUR_PASSWORD>
```

## Preview
![preview](preview.png)