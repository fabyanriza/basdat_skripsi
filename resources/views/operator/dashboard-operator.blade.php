<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen bg-gray-100 p-6 flex">
    <!-- Sidebar -->
    <div class="w-1/6 bg-indigo-500 rounded-r-lg p-4">
        <!-- Sidebar content (optional) -->
    </div>

    <!-- Main Content -->
    <div class="flex-1 ml-6">
        <!-- Header -->
        <div class="bg-white p-6 rounded-lg shadow-md flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard Operator</h1>
            <div class="w-10 h-10 rounded-full bg-gray-300"></div>
        </div>

        <!-- Welcome Banner -->
        <div class="my-6 bg-gradient-to-r from-blue-400 to-purple-500 text-white p-6 rounded-lg shadow-md flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold">Selamat Datang di Website Skripsi!</h2>
            </div>
            <div class="w-20 h-20 rounded-full bg-gray-300"></div>
        </div>

        <!-- Feature Section -->
        <h3 class="text-xl font-bold mb-4">Feature</h3>
        <div class="grid grid-cols-2 gap-6">
            <!-- Data Mahasiswa -->
            <a href="{{ route('data-mahasiswa') }}" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-6 rounded-lg shadow-md">
                <h4 class="text-lg font-bold">Data Mahasiswa</h4>
            </a>

            <!-- Verifikasi Pengajuan Seminar -->
            <a href="{{ route('verifikasi-pengajuan-skripsi') }}" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-6 rounded-lg shadow-md">
                <h4 class="text-lg font-bold">Verifikasi Pengajuan Skripsi</h4>
            </a>

            <!-- Jadwal Seminar -->
            <a href="{{ route('jadwal-seminar') }}" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-6 rounded-lg shadow-md">
                <h4 class="text-lg font-bold">Jadwal Seminar</h4>
            </a>

            <!-- Jadwal Bimbingan -->
            <a href="{{ route('jadwal-bimbingan') }}" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-6 rounded-lg shadow-md">
                <h4 class="text-lg font-bold">Jadwal Bimbingan</h4>
            </a>

            <!-- Evaluasi -->
            <a href="{{ route('evaluasi') }}" class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-6 rounded-lg shadow-md">
                <h4 class="text-lg font-bold">Evaluasi</h4>
            </a>
        </div>
    </div>

    <!-- Right Section (Calendar and Notifications) -->
    <div class="w-1/3 ml-6 space-y-6">
        <!-- Date Range Boxes -->
        <div class="grid grid-cols-2 gap-4">
            <!-- From Date -->
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <h4 class="text-lg font-bold">From: 1 September</h4>
            </div>
            <!-- To Date -->
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
                <h4 class="text-lg font-bold">To: 30 September</h4>
            </div>
        </div>

        <!-- Calendar -->
        <div class="bg-purple-500 p-6 rounded-lg shadow-md">
            <h4 class="text-lg font-bold text-white mb-4 text-center">September 2024</h4>
            <div class="grid grid-cols-7 gap-1 text-center text-white">
                <span>Sun</span> <span>Mon</span> <span>Tue</span> <span>Wed</span> <span>Thu</span> <span>Fri</span> <span>Sat</span>
                <!-- Add dates -->
                <span class="text-gray-400">1</span>
                <span class="text-gray-400">2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>
                <span>8</span>
                <span>9</span>
                <span>10</span>
                <span>11</span>
                <span>12</span>
                <span class="bg-red-500 text-white rounded-full p-2">19</span>
                <span>20</span>
                <span>21</span>
                <span>22</span>
                <span>23</span>
                <span>24</span>
                <span>25</span>
                <span>26</span>
                <span>27</span>
                <span>28</span>
                <span>29</span>
                <span>30</span>
            </div>
        </div>

        <!-- Notification Section -->
        <div class="bg-purple-500 p-6 rounded-lg shadow-md">
            <h4 class="text-lg font-bold text-white mb-4 text-center">Notifikasi</h4>
            <ul class="space-y-4">
                <li class="bg-white p-4 rounded-lg flex justify-between items-center">
                    <span class="text-purple-500 font-bold">Seminar Hasil</span>
                    <span class="text-xs text-gray-500">Mon, 25 Jan 2025</span>
                </li>
                <li class="bg-white p-4 rounded-lg flex justify-between items-center">
                    <span class="text-purple-500 font-bold">Yudisium Periode V</span>
                    <span class="text-xs text-gray-500">Mon, 22 Feb 2025</span>
                </li>
                <li class="bg-white p-4 rounded-lg flex justify-between items-center">
                    <span class="text-purple-500 font-bold">Wisuda 130</span>
                    <span class="text-xs text-gray-500">Thu, 06 Mar 2025</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
