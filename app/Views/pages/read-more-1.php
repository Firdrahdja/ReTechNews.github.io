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
            Teleskop Luar Angkasa James Webb Siap Amati Alam Semesta
            </h2>
            <p class="subtitle">
            Teknologi
            </p>
        </div>
        <figure class="">
            <img src="https://imageio.forbes.com/specials-images/imageserve/61c83b194f45d9382b554661/The-last-view-of-Webb-as-it-separated-from-the-Ariane-5-launch-vehicle-and-started/960x0.jpg" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Foto terakhir teleskop James Webb di angkasa pada bulan Desember 2021 lalu sebelum pergi meluncur keluar dari orbit bumi
            </figcaption>
        </figure>
        <p>
        Setelah mencapai orbit yang berjarak 1,5 juta kilometer dari Bumi pada bulan Januari, Webb memulai proses yang cermat untuk membuka dan menyelaraskan cermin-cermin itu.
        Dari hasil tes pengambilan gambar yang dirilis menunjukkan, hasil gambar yang jelas dan fokus dengan baik serta mampu ditangkap oleh empat instrumen observatorium.
        </p>
        <p>
        Bersama-sama, gambar-gambar ini berbagi bidang penuh teleskop. Cermin Webb mengarahkan cahaya terfokus dari luar angkasa ke setiap instrumen dan instrumen tersebut menangkap gambar. 
        Untuk pengujian itu, Webb melakukan pengamatan terhadap galaksi satelit kecil terdekat yang disebut Large MagellanicCloud. Bidang padat galaksi yang terdiri dari ratusan ribu bintang itu dapat dilihat pada gambar uji.
        </p>
        <p>
        Sebagai informasi, setiap instrumen memiliki sejumlah detektor khusus dengan peralatan khusus untuk membantu mencapai tujuan teleskop. 
        Dan semua instrumen ini harus dikonfigurasi sebelum dapat dinyatakan siap. 
        Terlepas dari itu, harapannya tak lama lagi kita bisa melihat bagaimana James Webb membuka tabir misteri alam semesta.
        </p>
        <p>
        Sumber dari
        <a href="https://www.kompas.com/sains/read/2022/05/10/080500423/teleskop-luar-angkasa-james-webb-siap-amati-alam-semesta?page=all" target="_blank">Kompas.com</a>
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