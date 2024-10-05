<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="bg-bgColor flex flex-row">
    
    
    <div class="h-screen bg-loginColor rounded-r-3xl w-[600px] flex pt-36 pl-16 flex-col font-istok z-10">
        <h1 class="text-4xl text-white font-semibold pb-6">Login</h1>
        <h3 class="text-white text-sm pb-16">Masukkan identitas anda</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <input type="text" id="username" placeholder="Username" 
                class="w-3/4 p-2 pl-0 text-gray-300 bg-loginColor border-b-2 border-gray-600 outline-none focus:border-gray-500 placeholder-gray-500">            </div>
            <div class="mb-6">
                <input type="text" id="password" placeholder="Password" 
                    class="w-3/4 p-2 pl-0 text-gray-300 bg-loginColor border-b-2 border-gray-600 outline-none focus:border-gray-500 placeholder-gray-500">            </div>
            <div class="flex justify-between items-center mb-14">
                <a href="#" class="text-gray-300 text-sm hover:text-purple-400 hover:underline">Lupa Password?</a>
            </div>
            <button type="submit" onclick="{{ url('dasboard') }}" class="w-3/4 bg-purple-500 hover:bg-purple-600 text-white py-3 rounded-2xl transition-colors">Login</button>
        </form>
    </div>
    

     <!-- Bagian kanan (Teks dan Ilustrasi) -->
     <div class="h-full w-full bg-bgColor flex flex-col justify-center items-center relative">
        
        <img src="{{ asset('images/asset-bg.png') }}" alt="Background Image" class="w-[550px] mt-20 z-10">

        <div class="absolute top-32  left-32 z-10">
            <h1 class="text-6xl text-white font-semibold mb-2 justify-start ">Selamat Datang!</h1>
            <p class="text-white text-lg flex justify-normal">di Website Portal Skripsi</p>
          </div>
    </div>
    <img src="{{ asset('images/asset1.png') }}" alt="" class="absolute right-0 bottom-0 opacity-65 z-0">
    <img src="{{ asset('images/asset2.png') }}" alt="" class="absolute bottom-0 left-60 opacity-65 z-0">
    <img src="{{ asset('images/asset3.png') }}" alt="" class="absolute right-0 top-0 opacity-65 z-0">
    <img src="{{ asset('images/asset4.png') }}" alt="" class="absolute top-8 left-60 opacity-65 z-0">
</body>

</html>