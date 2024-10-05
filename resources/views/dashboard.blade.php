<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">
  
</head>
<body class="bg-purple-200 font-istok flex flex-row">
    <div class="h-screen w-1/12 flex justify-center items-center">
        <div class="bg-dashboard rounded-2xl h-5/6 w-2/4"></div>
    </div>
    <div class="h-screen w-8/12  flex flex-col">
        <h1 class="p-8 text-3xl font-bold">Dashboard Mahasiswa</h1>
        <div class="bg-dashboard max-w-[800px] h-[180px] rounded-2xl ml-8 mr-8 flex flex-col">
            <h1 class="">Selamat Datang!</h1>
            <h1 class="">Nama</h1>
            <h1>NIM</h1>
            <H1>Prodi</H1>
        </div>
        <h1 class="p-8 text-3xl font-bold pb-4">Feature</h1>
        <div class=" max-w-[830px] h-[130px] rounded-2xl ml-4 mr-4 flex flex-row">
            <a href="{{ route('pengajuan-skripsi') }}" class="bg-dashboard m-4 h-5/6 w-1/2 rounded-xl pt-4 pl-4 text-2xl text-white font-bold">Pengajuan Skripsi</a>
            <a href="{{ route('pengajuan-seminar-proposal') }}" class="bg-dashboard m-4 h-5/6 w-1/2 rounded-xl pt-4 pl-4 text-2xl text-white font-bold">Pengajuan Seminar Proposal</a>
        </div>
        <div class=" max-w-[830px] h-[130px] rounded-2xl ml-4 mr-4 flex flex-row">
            <a href="{{ route('pengajuan-seminar-hasil') }}" class="bg-dashboard m-4 h-5/6 w-1/2 rounded-xl pt-4 pl-4 text-2xl text-white font-bold">Pengajuan Seminar Hasil</a>
            <a href="{{ route('pengajuan-bimbingan') }}" class="bg-dashboard m-4 h-5/6 w-1/2 rounded-xl pt-4 pl-4 text-2xl text-white font-bold">Pengajuan Bimbingan</a>

        </div>
        <div></div>
    </div>
    <div class="h-screen w-3/12 "></div>

</body>
</html>