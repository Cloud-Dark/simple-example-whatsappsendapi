
# contoh sederhana menggunakan api whatsapp gateway (WAGEBLAST)

![Logo](https://wablast.syahdanfilsafan.my.id//img/logo/logohitam.png)


## isi file

- Config.json (untuk konfigurasi whatsapp api whatsapp)
- fungsi.php (untuk memproses data dengan curl)
- proses.php (untuk pemrosesan data)
- simpleform.php (tampilan form sederhana)



## Refrensi API

#### URL api Parameter

```http
  POST /api/send-message.php?api_key="api_key"
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **Required**. Your API key |

#### Kirim Whastapp text

```http
  POST /api/send-message.php?api_key="api_key"
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `username`      | `string` | **Required**. username akun anda |
| `sender`      | `number` | **Required**. nomor pengirim yang sudah di daftarkan di aplikasi |
| `number`      | `number` | **Required**. nomor penerima yang ingin dikirim chat |
| `pesan`      | `string` | **Required**. isi pesan |

#### Kirim Whastapp media

```http
  POST /api/sendmedia.php?api_key="api_key"
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `username`      | `string` | **Required**. username akun anda |
| `sender`      | `number` | **Required**. nomor pengirim yang sudah di daftarkan di aplikasi |
| `number`      | `number` | **Required**. nomor penerima yang ingin dikirim chat |
| `pesan`      | `string` | **Required**. isi pesan |
| `urlgambar`      | `url` | **Required**. isi pesan |

## Authors

- [@Cloud-Dark](https://www.github.com/Cloud-Dark)


## Badges

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Support

For support, email syahdanfilsafan58@gmail.com or [whats app](https://wa.me/628998937095/) .

