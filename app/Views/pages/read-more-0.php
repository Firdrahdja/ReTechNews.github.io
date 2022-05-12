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
            Elon Musk Resmi Rilis Teknologi Implan Otak
            </h2>
            <p class="subtitle">
            Teknologi
            </p>
        </div>
        <figure class="">
            <img src="https://www.inceptivemind.com/wp-content/uploads/2019/07/neuralink-brain-chip.jpg" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Letak Penempatan Chip
            </figcaption>
        </figure>
        <p>
        Penemuan yang mengontrol pikiran ini dimaksudkan untuk mencapai simbiosis manusia dengan kecerdasan buatan. 
        Adapun cara kerjanya menghilangkan potongan tengkorak seseorang yang seukuran koin lalu menyuntikkan chip kecil untuk membantu kontrol motorik dan fungsi lainnya, menurut Musk.
        </p>
        <p>
        Demo Musk juga memamerkan robot mirip mesin jahit yang memasang microchip dengan menjahitnya ke otak menggunakan kabel bertabur elektroda tipis. 
        Startup yang berbasis di San Francisco itu mengatakan bahwa alat buatan Neuralink bisa menunjukkan neuron yang aktif secara real-time.
        </p>
        <p>
        Musk, yang juga CEO Tesla dan SpaceX, mengatakan microchip dibuat khusus untuk menerima dan memproses lonjakan neurologis di otak, dan mesin robotik diprogram untuk menghindari pembuluh darah sensitif.
        </p>
        <p>
        Sumber dari
        <a href="https://www.cnbcindonesia.com/news/20200829124533-4-182954/elon-musk-resmi-rilis-teknologi-implan-otak-apa-itu" target="_blank">CNBC Indonesia</a>
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