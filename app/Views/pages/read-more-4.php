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
            Iklan Lazada Dituding Hina Putri Kerajaan Thailand
            </h2>
            <p class="subtitle">
            Kasus Tekno
            </p>
        </div>
        <figure class="">
            <img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/05/09/3742259013.png" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
                Iklan Lazada (Kiri) & Foto keluarga kerajaan Thailand (Kanan)
            </figcaption>
        </figure>
        <p>
        Tagar Twitter #BanLazada pun menjadi tren di Thailand setelah promosi yang di-posting oleh influencer Aniwat "Nara" Prathumthin yang menunjukkan dirinya dan Thidaporn "Nurat" Chaokuwiang mengenakan pakaian tradisional Thailand. 
        Nurat berada di kursi roda sementara Nara berperan sebagai ibunya.    
        </p>
        <p>
        Dalam video tersebut memang tidak disebutkan mengenai anggota keluarga kerajaan atau menyebut salah satu anggota keluarga kerajaan. Namun, beberapa pihak menilai iklan tersebut sangat terlihat dan dapat langsung dikenali oleh masyarakat.
        </p>
        <p>
        Lazada, cabang Asia Tenggara dari Alibaba Group Holding, dalam sebuah pernyataan meminta maaf atas kasus tersebut yang disebabkan oleh video iklan promosi dan dan mengatakan mereka seharusnya lebih berhati-hati, demikian dikutip dari Reuters. Saat ini, video tersebut sudah diturunkan.
        </p>
        <p>
        Sumber dari
        <a href="https://www.cnbcindonesia.com/tech/20220509101016-37-337350/heboh-iklan-lazada-dituding-hina-putri-kerajaan-thailand" target="_blank">CNBC Indonesia</a>
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