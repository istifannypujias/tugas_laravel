<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Tentang</p>
	<p>
		Hallo, ini blog pertama saya dan masih ngikutin tutorial. Nama saya Tia Delia Maydina saya sekolah di SMKN 1 Subang,
        duduk dikelas XI dan mengambil jurusan RPL. Saya anak pertama dari tiga bersaudara, saya lahir pada tanggal 30 mei 2002.
        Saya berumur 16 tahun. 
	</p>
 
@endsection