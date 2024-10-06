<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar Kiri -->
        <div class="w-1/12 bg-purple-600 flex flex-col items-center py-10 space-y-8">
            <a href="{{ route('dashboard-operator') }}" class="text-white">
                <img src="{{ asset('images/home.png') }}" alt="Home" class="w-8 h-8 mb-4">
            </a>
            <a href="{{ route('data-mahasiswa') }}" class="text-white">
                <img src="{{ asset('images/clipboard.png') }}" alt="Daftar Mahasiswa" class="w-8 h-8 mb-4">
            </a>
            <a href="{{ route('verifikasi-pengajuan-skripsi') }}" class="text-white">
                <img src="{{ asset('images/thesis.png') }}" alt="Skripsi" class="w-8 h-8 mb-4">
            </a>
            <a href="{{ route('jadwal-seminar') }}" class="text-white">
                <img src="{{ asset('images/public-speaking.png') }}" alt="Seminar" class="w-8 h-8 mb-4">
            </a>
            <a href="{{ route('jadwal-bimbingan') }}" class="text-white">
                <img src="{{ asset('images/talk.png') }}" alt="Konsultasi" class="w-8 h-8 mb-4">
            </a>
            <a href="{{ route('evaluasi') }}" class="text-white">
                <img src="{{ asset('images/evaluation.png') }}" alt="Evaluasi" class="w-8 h-8 mb-4">
            </a>
        </div>

        <!-- Main Content -->
        <div class="w-8/12 p-8">
            <h1 class="text-2xl font-bold mb-4">Jadwal Bimbingan</h1>

            <!-- Table Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-purple-400 text-white">
                            <th class="p-4">Nama Mahasiswa</th>
                            <th class="p-4">Program Studi</th>
                            <th class="p-4">Dosen Pembimbing</th>
                            <th class="p-4">Tanggal Bimbingan</th>
                            <th class="p-4">Hasil Bimbingan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="p-4">Sinta Dian Monica</td>
                            <td class="p-4">Sastra Mesin</td>
                            <td class="p-4">Dwi Rantini</td>
                            <td class="p-4">1 September 2024</td>
                            <td class="p-4">
                                <ul>
                                    <li>BAB 1 - Selesai</li>
                                    <li>BAB 2 - Progress</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="p-4">Fabyan Riza Kiram</td>
                            <td class="p-4">Teknologi Sapi</td>
                            <td class="p-4">Dwi Rantini</td>
                            <td class="p-4">1 September 2024</td>
                            <td class="p-4">
                                <ul>
                                    <li>BAB 1 - Selesai</li>
                                    <li>BAB 2 - Progress</li>
                                </ul>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="p-4">Taushiyah Virgi Eka Zahra</td>
                            <td class="p-4">Kedokteran Pastry</td>
                            <td class="p-4">Dwi Rantini</td>
                            <td class="p-4">2 September 2024</td>
                            <td class="p-4">
                                <ul>
                                    <li>BAB 1 - Progress</li>
                                    <li>BAB 2 - Belum Mulai</li>
                                </ul>
                            </td>
                        </tr>
                        <!-- More rows can be added here -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="w-3/15 p-8 flex flex-col space-y-6">
            <!-- Calendar and Date Range -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex justify-center items-center space-x-4 mb-4">
                    <div class="text-center">
                        <label for="from-date" class="block text-lg font-bold">From:</label>
                        <select id="from-date" class="bg-white border border-gray-300 rounded p-2">
                            <option value="1 September">1 September</option>
                            <option value="2 September">2 September</option>
                            <option value="3 September">3 September</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <label for="to-date" class="block text-lg font-bold">To:</label>
                        <select id="to-date" class="bg-white border border-gray-300 rounded p-2">
                            <option value="30 September">30 September</option>
                            <option value="29 September">29 September</option>
                            <option value="28 September">28 September</option>
                        </select>
                    </div>
                </div>

                <!-- Calendar -->
                <div class="bg-purple-500 p-6 rounded-lg shadow-md w-full">
                    <h4 class="text-lg font-bold text-white mb-4 text-center">September 2024</h4>
                    <div class="grid grid-cols-7 gap-2 text-center text-white text-sm">
                        <span>Sun</span> <span>Mon</span> <span>Tue</span> <span>Wed</span> <span>Thu</span> <span>Fri</span> <span>Sat</span>
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