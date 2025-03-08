@extends('dashboard.master')

@section('content')
  <!-- Bagian Salam -->
  <div class="bg-gray-50 p-4 rounded-md mb-4">
    <h2 class="text-xl font-bold">Salam, Alfariz Muhan Mandega</h2>
    <p class="text-sm text-gray-600">Info Profil & Email UIN, Klik <a href="#" class="text-blue-600">Di Sini</a></p>
    <!-- ... daftar link ubah password, buka email, dsb. -->
  </div>

  <!-- Grid 2 Kolom -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <!-- Card Profil -->
    <div class="bg-white p-4 rounded-md shadow">
      <div class="flex items-center space-x-4">
        <img src="{{ asset('storage/img/Alfariz.png') }}" alt="Foto Profil" class="w-20 h-20 rounded-md">
        <div>
          <h3 class="text-lg font-bold">Alfariz Muhan Mandega</h3>
          <p class="text-sm">Mahasiswa Aktif</p>
        </div>
      </div>
      <!-- Mungkin info singkat email, dsb. -->
    </div>

    <!-- Card Free Access Journal -->
    <div class="bg-white p-4 rounded-md shadow">
      <h3 class="text-lg font-bold mb-2">Free Access Journal</h3>
      <ul class="space-y-2">
        <li><a href="#" class="text-blue-600 hover:underline">Link Springer</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Emerald Insight</a></li>
        <li><a href="#" class="text-blue-600 hover:underline">Cambridge Core</a></li>
      </ul>
    </div>
  </div>

  <!-- Grid 2 Kolom untuk Data Akademik & Jadwal Kuliah -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
    <!-- Card Data Akademik -->
    <div class="bg-white p-4 rounded-md shadow">
      <h3 class="text-lg font-bold mb-2">Data Akademik</h3>
      <div class="space-y-2">
        <p><strong>NIM:</strong> 220605110131</p>
        <p><strong>Status Studi:</strong> Mahasiswa Aktif</p>
        <p><strong>Jurusan:</strong> S1 Teknik Informatika</p>
        <p><strong>Akreditasi:</strong> Unggul (040/SK/LAM-INFOKOM/Ak/S/III/2024)</p>
        <p><strong>Dosen Wali:</strong> Dr. Zainal Abidin M.kom</p>
        <p><strong>Semester:</strong> VI (Enam)</p>
      </div>
    </div>

    <!-- Card Jadwal Kuliah -->
    <div class="bg-white p-4 rounded-md shadow">
      <h3 class="text-lg font-bold mb-2">Jadwal Kuliahmu Hari Ini</h3>
      <p class="text-gray-500">Tidak Ada Jadwal Kuliah, saatnya kamu eksplorasi pengalaman baru</p>
    </div>
  </div>

  <!-- Quotes -->
  <div class="mt-4 bg-white p-4 rounded-md shadow">
    <blockquote class="italic text-gray-600">"Lelah hadir untuk menjadi pengingat seberapa besar perjuanganmu. Kalau kamu lelah, rehat sejenak."</blockquote>
    <span class="text-sm text-gray-500">Positive Quotes</span>
  </div>
@endsection
