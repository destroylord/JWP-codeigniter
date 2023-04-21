
## Installation

Install JWP-codeigniter dengan composer

```bash
  cd JWP-codeigniter
  composer Install
```
Kemudian copypaste env
```bash
  cp env .env
```
cek file .env and Kemudian Samakan dengan nama database.default.database dengan nama database di MySql

Jalankan migrate
```bash
  php spark migrate -all
```
## Configuration Email

Anda wajib menggunakan https://mailtrap.io/ Kemudian buka Inbox dan SMTP Setting lalu integrations pilih Codeigniter

Buka File ```App/Config/Email.php``` kemudian ubah username dan password disesuaikan dengan SMTP username dan password pada website tersebut.

## Running Application

Ketik pada terminal ```php spark serve```

Buka browser and menjalankan Codeigniter
```bash
  http://127.0.0.1:8080/
```
## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)

