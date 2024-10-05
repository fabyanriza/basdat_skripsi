<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="bg-purple-200">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gradient-to-r from-blue-800 to-purple-700 text-white h-screen p-8">
            <h2 class="text-2xl font-semibold mb-8">Kelompok 7</h2>
            <ul class="space-y-4">
                <li class="bg-white text-black rounded-lg px-4 py-2 shadow">
                    Pengajuan Skripsi
                </li>
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('status-skripsi') }}">Status Skripsi</a>
                </li>
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('pengajuan-bimbingan') }}">Pengajuan Bimbingan</a>
                </li>
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('pengajuan-seminar-proposal') }}">Pengajuan Seminar Proposal</a>
                </li>
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{  route('pengajuan-seminar-hasil') }}">Pengajuan Seminar Hasil</a>
                </li>
            </ul>
        </div>
    
        <!-- Main Content -->
        <div class="w-3/4 p-10 flex h-full">
            <!-- Form Pengajuan Skripsi -->
            <div class="w-2/3 overflow-y-auto">
                <h1 class="text-3xl font-bold mb-6">Pengajuan Skripsi</h1>
    
                <div class="bg-purple-400 p-8 rounded-lg shadow-lg h-screen">
                    <!-- Judul Skripsi -->
                    <div class="mb-6">
                        <label for="judul" class="block text-lg font-semibold mb-2">Judul Skripsi (max. 25 kata)</label>
                        <input type="text" id="judul" name="judul" class="w-full p-3 rounded-lg border border-gray-300" placeholder="Masukkan judul skripsi">
                    </div>
    
                    <!-- Deskripsi -->
                    <div class="mb-6">
                        <label for="deskripsi" class="block text-lg font-semibold mb-2">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full p-3 rounded-lg border border-gray-300" placeholder="Deskripsikan topik skripsi"></textarea>
                    </div>
    
                    <!-- Bidang yang Dipilih -->
                    <div class="mb-6">
                        <label for="bidang" class="block text-lg font-semibold mb-2">Bidang yang Dipilih</label>
                        <select id="bidang" name="bidang" class="w-full p-3 rounded-lg border border-gray-300">
                            <option value="ekonomi">Ekonomi</option>
                            <option value="teknologi">Teknologi</option>
                            <option value="sains">Sains</option>
                        </select>
                    </div>
    
                    <!-- Dosen Pembimbing I -->
                    <div class="mb-6">
                        <label for="pembimbing1" class="block text-lg font-semibold mb-2">Dosen Pembimbing I</label>
                        <select id="pembimbing1" name="pembimbing1" class="w-full p-3 rounded-lg border border-gray-300">
                            <option value="dosen1">Dosen A</option>
                            <option value="dosen2">Dosen B</option>
                        </select>
                    </div>
    
                    <!-- Dosen Pembimbing II -->
                    <div class="mb-6">
                        <label for="pembimbing2" class="block text-lg font-semibold mb-2">Dosen Pembimbing II</label>
                        <select id="pembimbing2" name="pembimbing2" class="w-full p-3 rounded-lg border border-gray-300">
                            <option value="dosen1">Dosen C</option>
                            <option value="dosen2">Dosen D</option>
                        </select>
                    </div>
                    <div class="text-right mt-8">
                        <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- Sidebar Right (Calendar and Notifications) -->
            <div class="flex flex-col w-1/3 space-y-6 pl-10">
                <!-- Calendar -->
                <div class="bg-blue-600 text-white p-6 rounded-lg">
                    <h4 class="mb-3 text-lg font-semibold">September 2024</h4>
                    <div class="grid grid-cols-7 gap-1 text-center">
                        <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                        <span class="text-gray-400">1</span><span class="text-gray-400">2</span><span class="text-gray-400">3</span><span class="text-gray-400">4</span><span class="text-gray-400">5</span><span class="text-gray-400">6</span><span class="text-gray-400">7</span>
                        <span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span>
                        <span>15</span><span>16</span><span>17</span><span>18</span><span class="bg-white text-blue-600 font-bold rounded-full px-2 py-1">19</span><span>20</span><span>21</span>
                        <span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span><span>28</span>
                        <span>29</span><span>30</span>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="bg-purple-400 text-white p-6 rounded-lg">
                    <h4 class="text-lg font-semibold mb-3">Notifikasi</h4>
                    <div class="bg-gray-200 text-black p-2 rounded-lg mb-2">
                        <p>Seminar Hasil</p>
                        <p class="text-sm">Mon, 25 Jan 2025</p>
                    </div>
                    <div class="bg-gray-200 text-black p-2 rounded-lg mb-2">
                        <p>Yudisium Periode V</p>
                        <p class="text-sm">Mon, 22 Feb 2025</p>
                    </div>
                    <div class="bg-gray-200 text-black p-2 rounded-lg">
                        <p>Wisuda 130</p>
                        <p class="text-sm">Thu, 06 Mar 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>