yii-accounting-module
=====================

Modul akuntansi untuk Yii

Modul ini memerlukan

1. Treetable [https://github.com/ludo/jquery-treetable](https://github.com/ludo/jquery-treetable)
2. Bootstrap 2.3
3. Jquery
4. File image sembarang untuk place holder

Semuanya tidak saya masukan karena masalah lisensi

Cara Instalasi:

1. Salin modul ke direktori module di yii
2. Buat Direktori Accounting/assets
3. Letakan file dari JQuery Treetable disana
4. Tambahkan Accounting di config/main.php pada bagian modules 


```php
'modules'=>array(
    'Accounting'=>array(
        "params"=>array(
             "uploadPath"=>"/var/www/yii_erp/accounting/upload/",
         ),
    )
);
```

