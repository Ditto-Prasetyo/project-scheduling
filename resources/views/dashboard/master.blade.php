<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Akademik Universitas</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="storage/img/UIN-2.1.png" rel='shortcut icon'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Kontainer utama, min-h-screen agar tinggi minimal = tinggi layar -->
  <div class="min-h-screen flex">
    <!-- SIDEBAR -->
    <aside class="w-64 bg-indigo-900 text-white flex flex-col">
      <!-- Letakkan logo, menu, dll. di sini -->
      @include('partials.sidebar')
    </aside>

    <!-- BAGIAN KANAN: HEADER + MAIN + FOOTER -->
    <!-- flex-1 agar kolom kanan memenuhi sisa ruang -->
    <div class="flex-1 flex flex-col">
      <!-- HEADER -->
      @include('partials.header')

      <!-- MAIN: flex-1 agar mendorong footer ke bawah jika konten tinggi -->
      <main class="flex-1 p-4">
        @yield('content')
      </main>

      <!-- FOOTER: tetap di bawah konten, masih dalam flex container -->
      @include('partials.footer')
    </div>
  </div>
</body>
</html>
