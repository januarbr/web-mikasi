@extends('layouts.app')

@section('content')

<div class="container">
<h2><strong>PENGERTIAN SISTEM TERSEBAR PADA SISTEM OPERASI KOMPUTER</strong></h2>
    <ol class="ordered">
        <li >System tersebar /terdistribusi berasal dari dua kata, <span>Sistem</span> dan <span>tersebar</span>.</li>
        <li>System merupakan sekumpulan elemen yg saling tergantung satu sama lain dan membentuk suatu kesatuan untuk menyelesaikan suatu tujuan secara spesifik untu menjalankan suatu fungsi.</li>
        <li>Tersebar/terdistribusi yang artinya <span>penyebaran, sirkulasi, penyerahan pembagian    </span> menjadi bagian-bagian yg lebih kecil.</li>
        <li><b>SISTEM TERSEBAR </b>adalah sekumpulan komputer atau elemen-elemen yg saling berinteraksi secara sistematis untuk mendistribusikan data, informasi, proses, objek dan layanan dari dan kepada pengguna yg terkait didalamnya ,sehingga menghasilkan satu fasilitas komputasi terpadu.</li>
    </ol>

    <p>contoh Sistem Tersebar <strong>internet, mobile computing, sistem otomasi bank, dll.</strong></p>

    <h4><strong>ALASAN DITERAPKAN SISTEM TERDISTRIBUSI</strong></h4>
    <ol class="ordered">
        <li>Berbagi pakai sumber daya, akses terhadap sumber daya jarak jauh sama dengan        sumber daya local.</li>
        <li>Mengatasi bottleneck(kemacetan), untuk mempercepat proses komputasi</li>
        <li>Reliability,(yg dapat di uji atau terpercaya) melakukan proses penanganan dalam        mendeteksi dan menangani kesalahan pada lokasi tertentu</li>
        <li>Komunikasi , dengan system terdistribusi memungkinkan mampu untuk melakukan   proses pengiriman pesan jauh lebih baik.</li>
    </ol>


<h4><strong>KARAKTERISTIK SISTEM TERSEBAR</strong></h4>
<ol>
    <li>
    <details>
        <summary>Resource Sharing</summary>
        <p class="summary"> Setiap sumber daya dapat diakses dan dimanipulasi dengan handal dan konsisten.</p>

</details>  
    </li>

    <li>
        <details>
            <summary>Openness ( keterbukaan)</summary>
            <p> Kemampuan untuk memperluas sistem dengan berbagai cara dengan mudah.artinya penambahan komponen baru dapat dilakukan oleh programer yg berbeda-beda.</p>
        </details>
    </li>

    <li>
        <details>
            <summary>Concurency (kebersamaan)</summary>
            <p> Banyak proses yang bisa di eksekusi secara bersama, membutuhkan sinkronisasi dalam mengakses sumber daya bersama serta dapat saling bekerjasama.</p>
        </details>
    </li>

    <li>
        <details>
            <summary>Scalability</summary>
            <p>  Sistem tersebar dapat di ubah dan tetap berjalan dengan baik</p>
        </details>
    </li>

    <li>
        <details>
            <summary>Fault-Tolerance</summary>
            <p>  Sistem tersebar diharapkan dapat bertahan terhadap kegagalan, dan tidak mempengaruhi kinerja sistem secara keseluruhan.</p>
        </details>
    </li>

    <li>
        <details>
            <summary>Transparancy(penyembunyian)</summary>
            <p>Hal yg menjadi pokok utama dalam Sistem tersebar adalah transparancy. penggunaan banyak pemroses dan data remote tidak terlihat oleh pengguna, pengguna melihat sistem sebagai uniprosesor maya tunggal, bukan kumpulan mesin terpisah.</p>
        </details>
    </li>
</ol>

<h5><strong>System tersebar memiliki dua batasan pokok, yaitu :</strong></h5>
    <ul>
        <li>Tidak clock global atau tidak dapat diperolehnya clock global tersinkronisasi secara sempurna </li>
        <li>Tidak ada memori bersama.  Dengan tidak adanya memori bersama mengakibatkan state system terbaru tidak tersedia untuk setiap proses</li>
    </ul>

    <h5><strong>KELEBIHAN DAN KEKURANGAN SISTEM TERSEBA</strong></h5>
        <details>
            <summary>KELEBIHAN</summary>
           <ol>
               <li>Pembagian sumber daya antar komputer dibuat lebih mudah.</li>
               <li>Sistem terdistribusi menyediakan kinerja yang baik dengan mendistribusikan beban kerja </li>
               <li>Menjadikan sistem keseluruhan lebih handal.</li>
           </ol>
        </details>

        <details>   
        <summary>KEKURANGAN</summary>
           <ol>
               <li>Energi yang digunakan untuk ‘menghidupkan’ komputer-komputer yang digunakan sebagai cluster.</li>
               <li>Dari sisi teknis yang melibatkan banyak komponen </li>
               <li>Komputer saling terhubung dengan ethernet card..</li>
           </ol>
        </details>
</div>


@endsection