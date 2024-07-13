<h1>Project Laravel Konsultasi Kesehatan</h1>
<p>Project ini diajukan untuk memenuhi tugas kelompok dari mata kuliah Pemrograman Framework</p>

<h2>Persyaratan yang harus dipenuhi</h2>
<ol>
    <li>PHP (version 8.2 or higher)</li>
    <li>Composer <a href="https://getcomposer.org">https://getcomposer.org</a> </li>
</ol>

<h2>Langkah langkah penginstalan project</h2>
<ol>
    <li>Clone project = git clone https://github.com/massiki/laravel-konsultasi-kesehatan.git</li>
    <li>Masuk kedirectory project = cd konsultasi_kesehatan</li>
    <li>Install PHP dependencies = composer install</li>
    <li>Mengcopy file .env.example dan mengubahnya menjadi .env = cp .env.example .env</li>
    <li>Generaty application key = php artisan key:generate</li>
    <li>Sebelum melakukan migrate configurasi dulu file .env</li>
    <li>Menjalankan databases migrations = php artisan migrate --seed</li>
    <li>Jalankan server =  php artisan serve</li>
</ol>
