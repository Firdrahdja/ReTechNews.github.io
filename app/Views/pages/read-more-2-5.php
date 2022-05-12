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
            Apa Itu Teknologi 5G? Cara Kerja hingga Manfaat bagi Pengguna
            </h2>
            <p class="subtitle">
            Teknologi
            </p>
        </div>
        <figure class="">
            <img src="https://indonesiabaik.id/public/uploads/post/4768/4768-1619627484-210426_IPP_Segera-Hadir-Layanan-5G-di-Indonesia_AN.png" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Salah satu poster iklan resmi tentang teknologi 5G di Indonesia
            </figcaption>
        </figure>
        <p>
        Telkomsel dan Smartfren masing masing mendapat tambahan spektrum frekuensi sebesar 20 MHz dan 10 MHz. Alhasil, di rentang pita frekuensi radio 2,3 GHz, Telkomsel akan beroperasi dengan pita sebesar 50MHz dan Smartfren sebesar 40MHz
        Uji coba tersebut juga dikonfirmasi langsung oleh Menteri Komunikasi dan Informatika Johnny G. Plate. Rencananya, pada tahap awal Telkomsel akan menyediakan jaringan 5G di sejumlah lokasi kawasan DKI Jakarta.    
        </p>
        <p>
        Teknologi 5G akan memperkenalkan kemajuan di seluruh arsitektur jaringan. Radio Baru 5G, standar global untuk antarmuka udara nirkabel 5G yang lebih mampu, akan mencakup spektrum yang tidak digunakan dalam 4G. 
        Antena baru akan menggabungkan teknologi yang dikenal sebagai MIMO masif (beberapa masukan, banyak keluaran), yang memungkinkan banyak pemancar dan penerima untuk mentransfer lebih banyak data pada saat yang bersamaan.
        </p>
        <p>
        Teknologi 5G tidak hanya mengantarkan era baru kinerja dan kecepatan jaringan yang ditingkatkan, tetapi juga pengalaman terhubung baru bagi pengguna. 
        Dalam perawatan kesehatan, teknologi 5G dan konektivitas Wi-Fi 6 akan memungkinkan pasien dipantau melalui perangkat terhubung yang terus-menerus mengirimkan data tentang indikator kesehatan utama, seperti detak jantung dan tekanan darah. 
        Dalam industri otomotif, 5G yang dikombinasikan dengan algoritma yang digerakkan oleh ML akan memberikan informasi tentang lalu lintas, kecelakaan, dan banyak lagi; kendaraan akan dapat berbagi informasi dengan kendaraan dan entitas lain di jalan raya, seperti lampu lalu lintas.
        </p>
        <p>
        Sumber dari
        <a href="https://teknologi.bisnis.com/read/20210520/101/1396206/apa-itu-teknologi-5g-cara-kerja-hingga-manfaat-bagi-pengguna" target="_blank">Teknologi.bisnis.com</a>
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