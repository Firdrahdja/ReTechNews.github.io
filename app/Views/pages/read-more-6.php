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
            Penghentian Siaran TV Analog Tahap I Dimulai di Wilayah Ini
            </h2>
            <p class="subtitle">
            Tekno
            </p>
        </div>
        <figure class="">
            <img src="https://akcdn.detik.net.id/visual/2022/05/05/kick-off-penghentian-siaran-tv-analog_169.jpeg?w=715&q=90" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
            </figcaption>
        </figure>
        <p>
        Penghentian dimulai dari tiga wilayah siaran, tepatnya di Provinsi Riau untuk Kota Dumai, Kabupaten Bengkalis dan Meranti, wilayah siaran Riau-4. Lalu, wilayah siaran Nusa Tenggara Timur-3 di 3 kabupaten yakni Kabupaten Timor Tengah Utara, Belu dan Malaka. Dan wilayah siaran Papua Barat-1 di Kota Sorong dan Kabupaten Sorong.
        </p>
        <p>
        Pemerintah mulai mengimplementasikan penghentian total siaran analog dan digital penuh atau Analog Switch Off (ASO) Tahap I. Sesuai Undang-Undang Nomor 11 Tahun 2022 tentang Cipta Lapangan Kerja dan Peraturan Pemerintah Nomor 46 Tahun 2021, penghentian siaran analog dimulai tanggal 30 April 2022.
        </p>
        <p>
        Langkah itu diambil agar pelaksanaan Tahap II dan Tahap III ASO dapat berjalan baik dengan dukungan infrastruktur multipleksing. Johnny bilang, total masih perlu dibangun 32 infrastruktur MUX, yang direncanakan akan siap untuk ASO Tahap II dan siap pada saat siaran digital penuh pada tanggal 2 November Tahun 2022.
        Kepada masyarakat yang mempunyai televisi dan belum bisa menerima siaran digital, Menkominfo mengharapkan segera memasang perangkat Set-Top-Box (STB) agar bisa menerima siaran digital.
        </p>
        <p>
        Sumber dari
        <a href="https://www.cnbcindonesia.com/tech/20220505113632-37-336833/penghentian-siaran-tv-analog-tahap-i-dimulai-di-wilayah-ini" target="_blank">CNBC Indonesia</a>
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