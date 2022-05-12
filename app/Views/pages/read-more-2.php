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
            Ameca, Robot Humanoid yang Mampu Tampilkan Ekspresi Wajah
            </h2>
            <p class="subtitle">
            Teknologi
            </p>
        </div>
        <figure class="">
            <img src="https://media.suara.com/pictures/970x544/2022/01/09/80805-ameca-robot-yang-bisa-tampilkan-ekspresi-wajah.jpg" style="border-radius: 4px; margin-bottom: 1.5rem;" width="720px" height="400px">
            <figcaption>
            Para peserta berfoto dan berinteraksi dengan robot Humanoid Engineered Arts Ameca dengan kecerdasan buatan yang diperagakan selama Consumer Electronics Show (CES) di Las Vegas, Nevada, Amerika Serikat
            </figcaption>
        </figure>
        <p>
        Untuk bisa mengekspresikan emosi, Ameca dilengkapi oleh 17 motor di bagian kepala. Emosi wajah itu didapatkan dari sistem hybrid yang menggabungkan AI dan juga operator manusia yang menentukan ekspresi serta ucapan Ameca.
        Menurut penciptanya, Ameca mungkin tidak akan digunakan di level rumah tangga dalam beberapa dekade ke depan, tapi di industri jasa pelayanan seperti hotel dan restoran. Mereka menargetkan Ameca versi berjalan bisa tercipta dalam dua tahun ke depan.    
        </p>
        <p>
        Engineered Arts mengatakan, saat ini robotnya tidak dapat berjalan meski ke depannya ingin memberikan kemampuan tersebut.
        Apakah Ameca beroperasi menggunakan AI? Engineered Arts menjelaskan, kemampuan AI diserahkan kepada pengembang, karena pihaknya hanya menangani pembuatan bodi menjadi sangat realistis.
        Engineered Arts berfokus pada pembuatan robot humanoid untuk hiburan. Oleh karenanya, mungkin Ameca dan Mesmer akan menjadi pusat perhatian di tempat acara, ketimbang robot yang dirancang untuk melakukan pekerjaan tertentu, atau mengambil alih urusan seluruh manusia.
        </p>
        <p>
        Sumber dari
        <a href="https://www.suara.com/foto/2022/01/09/133505/inilah-ameca-robot-humanoid-yang-mampu-tampilkan-ekspresi-wajah" target="_blank">Suara.com</a>
        dan
        <a href="https://www.liputan6.com/tekno/read/4729354/berkenalan-dengan-ameca-robot-yang-punya-ekspresi-wajah" target="_blank">Liputan6</a>
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