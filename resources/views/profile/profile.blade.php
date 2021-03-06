@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header card d-block px-5">
        <div class="rounded p-2">
            <div class="mb-2 text-center">
                <h4><marquee>Tentang Kami, Perpustakaan SMK Wikrama</marquee></h4>
            </div>
            
             <img class="mr-2" src="/assets/img/baner.png" class="rounded d-block shadow-sm" height="600">
            <br>
        </div>
        <div class="px-2 mt-3">
            <h4 class=" text-primary">Identitas Perpustakaan</h4>
            <table class="mb-5">
                <tr>
                    <th>Nama Perpustakaan</th>
                    <td class="px-3">:</td>
                    <td>Perpustakaan SMK Wikrama</td>
                </tr>
                <tr>
                    <th>Nama Kepala Perpustakaan</th>
                    <td class="px-3">:</td>
                    <td>Jakaria, S.E</td>
                </tr>
                <tr>
                    <th>Nama Pustakawati</th>
                    <td class="px-3">:</td>
                    <td>Danang Andrian Wicaksana</td>
                </tr>
                <tr>
                    <th>Nomor SK Pendirian Perpustakaan</th>
                    <td class="px-3">:</td>
                    <td>421.5/0036/SMK Wikrama/IX/2008</td>
                </tr>

                <tr class="text-white">
                    <th>.</th>
                    <td class="px-3">:</td>
                    <td>.</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td class="px-3">:</td>
                    <td>Jl. Raya Wangun Kel. Sindangsari Bogor</td>
                </tr>
                <tr>
                    <th>Kecamatan</th>
                    <td class="px-3">:</td>
                    <td>Bogor Timur</td>
                </tr>
                <tr>
                    <th>Kabupaten/Kota</th>
                    <td class="px-3">:</td>
                    <td>Bogor</td>
                </tr>
                <tr>
                    <th>Provinsi</th>
                    <td class="px-3">:</td>
                    <td>Jawa Barat</td>
                </tr>
                <tr>
                    <th>Kode Pos</th>
                    <td class="px-3">:</td>
                    <td>16146</td>
                </tr>

                <tr class="text-white">
                    <th>.</th>
                    <td class="px-3">:</td>
                    <td>.</td>
                </tr>

                <tr>
                    <th>Telepon & Faksimili</th>
                    <td class="px-3">:</td>
                    <td>(0251) 8242411</td>
                </tr>

                <tr class="text-white">
                    <th>.</th>
                    <td class="px-3">:</td>
                    <td>.</td>
                </tr>

                <tr>
                    <th>Luas Gedung Perpustakaan</th>
                    <td class="px-3">:</td>
                    <td>96 m<sup>2</sup></td>
                </tr>
                <tr>
                    <th>Status Kepemilikan Gedung Perpustakaan</th>
                    <td class="px-3">:</td>
                    <td>Milik Yayasan Prawitama</td>
                </tr>
                <tr>
                    <th>Lokasi Perpustakaan</th>
                    <td class="px-3">:</td>
                    <td>Jarak di Pusat kegiatan pembelajaran</td>
                </tr>
            </table>
        </div>

        <hr><br>
        <div class="mb-3 ">
            <h4 class="text-primary">Sejarah Perpustakaan</h4>
            <p class="text-justify">
                Perpustakaan SMK Wikrama Bogor berada di Kampus SMK Wikrama Bogor Kelurahan Sindangsari, Kecamatan Bogor Timur, Kota Bogor didirikan pada tahun 1996.  Secara fisik perpustakaan sekolah terletak di lantai 2 (dua) gedung Pajajaran yang merupakan gedung pertama yang dibangun, tepatnya berada di area bangunan seluas 96 m<sup>2</sup>. Lokasi ini berada dipusat kegiatan pembelajaran yang mudah dijangkau oleh peserta didik, pendidik dan tenaga kependidikan. Semenjak didirikan, keberadaan ruang perpustakaan SMK Wikrama Bogor memberikan manfaat bagi sivitas akademik sekolah bahkan masyarakat sekitar sekolah.
            </p>
        </div><br>
        <hr><br>

        <div class="mb-3 ">
            <h4 class="text-primary">Visi, Misi dan Motto Perpustakaan Serta Sasaran</h4><br>
            <h6 class="text-dark"> Visi: </h6>
            <ul>
                <li>Menjadi perpustakaan sekolah teladan berbasis Teknologi Informasi dan Komunikasi</li>
            </ul>

            <h6 class="text-dark mt-3"> Misi: </h6>
            <ul>
                <li> Menjadikan perpustakaan sebagai sumber informasi bagi sivitas sekolah dan masyarakat </li>
                <li> Menjadikan budaya membaca sebagai bagian dari budaya sekolah</li>
            </ul>

            <h6 class="text-dark mt-3"> Motto: </h6>
            <blockquote class="blockquote text-italic">
                <p class="mt-2 text-italic"><i> "Melayani dengan Hati dan Teknologi"</i></p>
            </blockquote>

            <h6 class="text-dark mt-3">Sasaran: </h6>
            <ol>
                <li>Meningkatnya budaya membaca masyarakat sekolah</li>
                <li>Meningkatnya masyarakat pengunjung perpustakaan</li>
                <li>Meningkatnya pelayanan perpustakaan</li>
                <li>Terpenuhinya fungsi perpustakaan sebagai pusat informasi masyarakat sekolah</li>
            </ol>
        </div>
        <br>
        <hr><br>
        <div class="mb-3 ">
            <h4 class="text-primary">Struktur Organisasi</h4>
            <img class="rounded mx-auto d-block" src="assets/img/org.png"  height="2    00px" alt="desain web">
        </div>     

    </div>
</section>
@endsection