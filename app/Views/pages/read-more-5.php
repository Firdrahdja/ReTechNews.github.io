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
            Tanda ATM yang Dipasang Alat Skimming
            </h2>
            <p class="subtitle">
            Kejahatan Tekno
            </p>
        </div>
        <figure class="">
            <img src="https://image.made-in-china.com/2f0j00blQroMvFLdzC/Buy-ATM-Parts-NCR-5875-Card-Skimmer-Skimming-Device-NCR-Skimmers-for-Sale.jpg" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Macam-macam bentuk skimmer ATM yang sering digunakan
            </figcaption>
        </figure>
        <p>
        Untuk melakukan kejahatan ini, pelaku akan memasang alat khusus bernama scammer. Alat tersebut mirip dengan bentuk mulut slot kartu ATM. Saat kartu dimasukkan ke dalam scammer, alat itu akan merekam informasi dari kartu secara otomatis.
        </p>
        <p>
        Ada beberapa hal yang bisa menjadi pertanda mesin ATM sudah dipasangi alat penipuan atau skimming. Ciri pertama, sebuah alat biasanya terpasang di bagian mulut tempat memasukkan kartu ATM. Pada bagian atas penutup tombol ATM, diletakkan kamera untuk menangkap pin ATM nasabah.
        </p>
        <p>
        Pakar keamanan siber dan pendiri Ethical Hacker Indonesia, Teguh Aprianto mengimbau untuk masyarakat dapat mengecek terlebih dahulu mesin ATM sebelum melakukan transaksi.
        Menurutnya mesin ATM yang jadi sasaran pelaku kejahatan biasanya berada di tempat sepi. Salah satunya yang ditempatkan pada stasiun pengisian bahan bakar umum (SPBU).
        </p>
        <p>
        Sumber dari
        <a href="https://www.cnbcindonesia.com/tech/20220508095727-37-337180/banyak-di-spbu-ini-tanda-atm-yang-dipasang-alat-skimming" target="_blank">CNBC Indonesia</a>
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