<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #ffffff; /* Set background color to white */
    }
    .sidebar-item {
      transition: background-color 0.3s, color 0.3s;
    }
    .sidebar-item:hover {
      background-color: #4A5568; /* Darker gray */
      color: white;
    }
    .card {
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .responsive-image {
      width:30%; /* Gambar menyesuaikan lebar kontainer */
      height: 30%; /* Mempertahankan rasio gambar */
    }
  </style>
</head>
<body class="bg-white">
<div class="min-h-screen p-6 flex">
    <!-- Sidebar Kiri -->
    <div class="w-1/6">
        <div class="bg-white rounded-lg shadow-md border border-blue-400"> <!-- White background -->
            <div class="bg-gradient-to-t from-blue-300 to-white p-6 rounded-t-lg"> <!-- Blue gradient at the top -->
                <h2 class="text-lg font-bold text-black text-center">Menu</h2>
            </div>
            <div class="flex flex-col space-y-16 p-4">
                <a href="{{ route('dashboard-operator') }}" class="sidebar-item flex items-center p-2 rounded-lg">
                    <img src="{{ asset('images/home.png') }}" alt="Logo 1" class="w-6 h-6">
                    <span class="ml-2">Home</span>
                </a>
                <a href="{{ route('judul-skripsi-operator') }}" class="sidebar-item flex items-center p-2 rounded-lg">
                    <img src="{{ asset('images/thesis.png') }}" alt="Logo 2" class="w-6 h-6">
                    <span class="ml-2">Judul Skripsi</span>
                </a>
                <a href="{{ route('seminar-proposal-operator') }}" class="sidebar-item flex items-center p-2 rounded-lg">
                    <img src="{{ asset('images/public-speaking.png') }}" alt="Logo 3" class="w-6 h-6">
                    <span class="ml-2">Seminar Proposal</span>
                </a>
                <a href="{{ route('seminar-hasil-operator') }}" class="sidebar-item flex items-center p-2 rounded-lg">
                    <img src="{{ asset('images/talk.png') }}" alt="Logo 4" class="w-6 h-6">
                    <span class="ml-2">Seminar Hasil</span>
                </a>
                <a href="{{ route('evaluasi') }}" class="sidebar-item flex items-center p-2 rounded-lg">
                    <img src="{{ asset('images/clipboard.png') }}" alt="Logo 5" class="w-6 h-6">
                    <span class="ml-2">Evaluasi</span>
                </a>
            </div>
        </div>
    </div>


    <!-- Main Content -->
    <div class="flex-1 ml-6">
      <!-- Header -->
      <div class="mb-6">
        <h1 class="text-2xl font-bold">Judul Skripsi</h1>
      </div>

      <!-- Table Section -->
      <div class="bg-white p-1 rounded-lg shadow-md">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gradient-to-t from-blue-300 to-white p-4 rounded-t-lg">
              <th class="p-4">Nama Mahasiswa</th>
              <th class="p-4">Program Studi</th>
              <th class="p-4">Judul</th>
              <th class="p-4">Dosen Pembimbing</th>
              <th class="p-4">Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example row for Sinta Dian Monica -->
            <tr class="bg-white">
              <td class="p-4">Sinta Dian Monica</td>
              <td class="p-4">Sastra Mesin</td>
              <td class="p-4">Analisis kekuatan kaki bangunan menggunakan Cox Regression</td>
              <td class="p-4">Dwi Rantini</td>
              <td class="p-4">
                <div class="flex space-x-2">
                  <span class="bg-green-500 text-white px-4 py-2 rounded-full">ACC</span>
                  <span class="bg-red-500 text-white px-4 py-2 rounded-full">Decline</span>
                </div>
              </td>
            </tr>
            <!-- Example row for Fabyan Riza Kiram -->
            <tr class="bg-gray-100">
              <td class="p-4">Fabyan Riza Kiram</td>
              <td class="p-4">Teknologi Sapi</td>
              <td class="p-4">Evaluasi Keuangan Bank Sejahtera menggunakan metode Social Network</td>
              <td class="p-4">Dwi Rantini</td>
              <td class="p-4">
                <div class="flex space-x-2">
                  <span class="bg-green-500 text-white px-4 py-2 rounded-full">ACC</span>
                  <span class="bg-red-500 text-white px-4 py-2 rounded-full">Decline</span>
                </div>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Right Sidebar -->
    <div class="w-1/4 ml-6 space-y-6">
        <!-- Date Range -->
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-center items-center space-x-4 mb-4">
            <div class="text-center">
                <label for="from-date" class="block text-lg font-bold">From:</label>
                <select id="from-date" class="bg-white border border-gray-300 rounded p-2">
                    <option value="1 September">1 September</option>
                    <option value="2 September">2 September</option>
                    <option value="3 September">3 September</option>
                <!-- Add more options as needed -->
                </select>
            </div>
            <div class="text-center">
                <label for="to-date" class="block text-lg font-bold">To:</label>
                <select id="to-date" class="bg-white border border-gray-300 rounded p-2">
                    <option value="30 September">30 September</option>
                    <option value="29 September">29 September</option>
                    <option value="28 September">28 September</option>
                <!-- Add more options as needed -->
                </select>
            </div>
        </div>
        
        <!-- Calendar -->
        <div class="bg-white rounded-lg shadow-md border border-blue-400">
            <div class="bg-gradient-to-t from-blue-300 to-white p-4 rounded-t-lg">
                <h4 class="text-lg font-bold text-black text-center">September 2024</h4>
            </div>
            <div class="grid grid-cols-7 gap-2 text-center text-black p-4">
                <span>Sun</span> <span>Mon</span> <span>Tue</span> <span>Wed</span> <span>Thu</span> <span>Fri</span> <span>Sat</span>
                <span>1</span>
                <span>2</span>
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
                <span class="bg-gradient-to-r from-blue-400 to-white text-black font-bold rounded-full p-2">19</span>
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
        <div class="bg-white rounded-lg shadow-md">
            <div class="bg-gradient-to-t from-blue-300 to-white p-4 rounded-t-lg">
                <h4 class="text-lg font-bold text-black  text-center">Notifikasi</h4>
            </div>
            <ul class="space-y-4 p-4">
                <li class="bg-white text-black p-4 rounded-lg flex justify-between items-center border border-blue-400">
                    <span class="font-bold">Seminar Hasil</span>
                    <span class="text-xs">Mon, 25 Jan 2025</span>
                </li>
                <li class="bg-white text-black p-4 rounded-lg flex justify-between items-center border border-blue-400">
                    <span class="font-bold">Yudisium Periode V</span>
                    <span class="text-xs">Mon, 22 Feb 2025</span>
                </li>
                <li class="bg-white text-black p-4 rounded-lg flex justify-between items-center border border-blue-400">
                    <span class="font-bold">Wisuda 130</span>
                    <span class="text-xs">Thu, 06 Mar 2025</span>
                </li>
            </ul>
        </div>
    </div>
  </div>

</body>

</html>
