<?= $this->extend('partial-layout/template'); ?>
<?= $this->section('page-content'); ?>

<!-- <section class="hero is-link is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title">
                Half height hero
            </p>
            <p class="subtitle">
                Half height subtitle
            </p>
        </div>
    </div>
</section> -->
<div class="container my-5">
    <nav class="breadcrumb has-succeeds-separator m-5" aria-label="breadcrumbs">
        <ul>
            <li>
                <a href="/">
                    <span class="icon is-small">
                        <i class="fa-solid fa-house-chimney"></i>
                    </span>
                    <span>

                        Beranda
                    </span>
                </a>
            </li>
            <li class="is-active">
                <a href="#" aria-current="page">
                    <span class="icon is-small">
                        <i class="fa-solid fa-newspaper"></i>
                    </span>
                    <span>

                        Konteks
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="m-5 content">
        <div class="has-text-centered">
            <h2 class="title is-2">
            Awas Salah Download, Apps Jenis Ini Rawan Trojan Terselubung
            </h2>
            <p class="subtitle">
            Aplikasi/Software
            </p>
        </div>
        <figure class="">
            <img src="https://news-cdn.softpedia.com/images/news2/android-trojan-can-buy-and-install-apps-from-google-play-store-507012-2.jpg" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Contoh aplikasi Trojan yang bersembunyi di antara aplikasi normal.
            </figcaption>
        </figure>
        <p>
        "Mereka biasanya tersebar di Google Play, tempat para scammers mengunduh aplikasi yang sah dari toko, menambahkan kode berbahaya ke dalamnya, lalu mengunggahnya kembali dengan nama yang berbeda. 
        Dalam kebanyakan kasus, aplikasi yang terinfeksi Trojan ini memenuhi tujuannya dan pengguna tidak pernah curiga bahwa mereka adalah sumber ancaman," tulis Kasperksy.
        </p>
        <p>
        Kaspersky menyatakan aplikasi dengan Trojan di dalamnya akan meminta akses ke pesan dan notifikasi pengguna. Dengan begitu para scammers dapat mencegat pesan yang berisi kode konfirmasi.
        Pengguna juga tidak sadar didaftarkan untuk ikut layanan berlangganan. Misalnya, karena luput membaca cetakan kecil dan sebelum menyadarinya telah membayar untuk sebuah aplikasi, Mereka baru menyadarinya saat ponsel menunjukkan kejanggalan.
        </p>
        <p>Berikut rekomendasi dari Kaspersky:</p>
        <ol>
            <li>
            Tetap waspada saat memasang aplikasi dari Google Play. Baca juga ulasan untuk mencari tahu soal pengembang, persyaratan pengguna dan detail pembayaran. Selain itu pilih aplikasi terkenal dengan ulasan positif.
            </li>
            <li>
            Memeriksa izin aplikasi dan pikirkan lebih dulu sebelum memberikan izin tambahan.
            </li>
            <li>
            Menggunakan solusi keamanan untuk membantu mendeteksi aplikasi dan adware berbahaya sebelum mencapai tujuannya.
            </li>
            <li>
            Memperbarui sistem operasi dan aplikasi penting saat pembaruan tersedia. Banyak masalah keamanan bisa diselesaikan dengan menginstal versi perangkat lunak yang diperbarui.
            </li>
        </ol>
        <p>
        Sumber dari
        <a href="https://www.cnbcindonesia.com/tech/20220509123325-37-337427/awas-salah-download-apps-jenis-ini-rawan-trojan-terselubung" target="_blank">CNBC Indonesia</a>
        </p>
    </div>
    <div class="is-flex is-justify-content-center ">

        <a href="/" class="button is-medium is-link is-light ">
            <span class="icon is-small">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </span>
            <span>
                <strong>Kembali</strong>
            </span>

        </a>
    </div>

</div>
<?= $this->endSection(); ?>