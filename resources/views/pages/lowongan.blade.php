<x-app-layout>

    {{-- ALERT HATI-HATI PENIPUAN --}}
    <div 
        x-data="{ open: true }"
        x-show="open"
        x-cloak
        class="fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm flex justify-center items-center z-50"
    >
        <div class="bg-white max-w-lg mx-auto p-6 rounded-xl shadow-xl border-l-8 border-red-700 relative">
            
            <button 
                @click="open = false"
                class="absolute right-3 top-3 text-gray-500 hover:text-gray-700 text-xl font-bold"
            >
                &times;
            </button>

            <h2 class="text-2xl font-bold text-red-700 mb-3">⚠ Waspada Penipuan!</h2>
            
            <p class="text-gray-700 leading-relaxed">
                <strong>HATI-HATI TERHADAP PENIPUAN LOWONGAN PEKERJAAN!</strong>
                <br><br>
                Waspadalah terhadap pihak yang mengatasnamakan 
                <strong>PT Sinar Sosro Gunung Slamat</strong>.
                Kami <strong>tidak pernah</strong> meminta pelamar membayar biaya apapun selama proses rekrutmen.
                <br><br>
                Pastikan hanya mengikuti prosedur resmi melalui:
                <br>
                • LinkedIn: <strong>PT Sinar Sosro Gunung Slamat</strong>  
                <br>
                • Instagram: <strong>@sosrocareer</strong>
                <br>
                • Tiktok: <strong>@lifeatsosro</strong>
                <br><br>
                Jika Anda menerima tawaran mencurigakan, segera laporkan!
            </p>
        </div>
    </div>

    {{-- SECTION LOWONGAN --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">

            {{-- JUDUL --}}
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-red-700 mb-4">Lowongan Karier Terbaru</h1>
                <p class="text-gray-700 text-lg">
                    Temukan posisi yang sesuai dengan keahlian dan minat kamu.
                </p>
            </div>

            {{-- SEARCH + FILTER --}}
            <div class="flex flex-col md:flex-row gap-4 justify-center mb-10">

                {{-- INPUT SEARCH --}}
                <input 
                    id="searchInput"
                    type="text" 
                    placeholder="🔍 Cari posisi…"
                    class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-700"
                />

                {{-- FILTER LOKASI --}}
                <select 
                    id="filterLocation"
                    class="w-full md:w-1/4 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-700"
                >
                    <option value="">Semua Lokasi</option>
                    <option value="Jakarta Timur">Jakarta Timur</option>
                    <option value="Cikarang">Cikarang</option>
                    <option value="Bali">Bali</option>
                    <option value="Pangkal Pinang">Pangkal Pinang</option>
                </select>
            </div>

            {{-- GRID JOB LIST --}}
            <div id="jobList" class="grid md:grid-cols-2 gap-6">

                {{-- ITEM 1 --}}
                <div class="job-card border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-lg transition"
                     data-title="Staff Administrasi"
                     data-location="Jakarta Timur">

                    <h3 class="text-xl font-semibold text-red-700 mb-1">Staff Administrasi</h3>
                    <p class="text-gray-600 mb-3">Penempatan: Jakarta Timur</p>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Kualifikasi</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Minimal D3 Administrasi</li>
                            <li>Menguasai Microsoft Office</li>
                            <li>Komunikatif & rapi dalam dokumentasi</li>
                        </ul>
                    </details>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Jobdesk</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Mengelola dokumen administrasi</li>
                            <li>Membuat laporan bulanan</li>
                            <li>Mendukung kebutuhan operasional divisi</li>
                        </ul>
                    </details>

                    <a href="{{ route('login') }}" 
                        class="inline-block mt-4 bg-red-700 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-800 transition">
                        Lamar
                    </a>
                </div>

                {{-- ITEM 2 --}}
                <div class="job-card border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-lg transition"
                     data-title="Quality Control"
                     data-location="Cikarang">

                    <h3 class="text-xl font-semibold text-red-700 mb-1">Quality Control</h3>
                    <p class="text-gray-600 mb-3">Penempatan: Cikarang</p>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Kualifikasi</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Minimal D3 Kimia Pangan/Teknik Industri</li>
                            <li>Mengerti standar QC</li>
                        </ul>
                    </details>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Jobdesk</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Pengecekan kualitas bahan baku</li>
                            <li>Pelaporan hasil analisa</li>
                        </ul>
                    </details>

                    <a href="{{ route('login') }}" 
                        class="inline-block mt-4 bg-red-700 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-800 transition">
                        Lamar
                    </a>
                </div>

                {{-- ITEM 3 --}}
                <div class="job-card border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-lg transition"
                     data-title="Sales Supervisor"
                     data-location="Bali">

                    <h3 class="text-xl font-semibold text-red-700 mb-1">Sales Supervisor</h3>
                    <p class="text-gray-600 mb-3">Penempatan: Bali</p>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Kualifikasi</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Pengalaman 2 tahun Sales</li>
                            <li>Target oriented</li>
                        </ul>
                    </details>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Jobdesk</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Mengawasi tim sales</li>
                            <li>Mencapai target bulanan</li>
                        </ul>
                    </details>

                    <a href="{{ route('login') }}" 
                        class="inline-block mt-4 bg-red-700 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-800 transition">
                        Lamar
                    </a>
                </div>

                {{-- ITEM 4 --}}
                <div class="job-card border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-lg transition"
                     data-title="Unit Manager"
                     data-location="Pangkal Pinang">

                    <h3 class="text-xl font-semibold text-red-700 mb-1">Unit Manager</h3>
                    <p class="text-gray-600 mb-3">Penempatan: Pangkal Pinang</p>

                    <details class="mb-3">
                        <summary class="cursor-pointer font-semibold">Kualifikasi</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Pemimpin yang baik</li>
                            <li>Paham operasional distribusi</li>
                        </ul>
                    </details>

                    <details>
                        <summary class="cursor-pointer font-semibold">Jobdesk</summary>
                        <ul class="list-disc ml-5 text-gray-600">
                            <li>Mengelola cabang</li>
                            <li>Monitoring kinerja tim</li>
                        </ul>
                    </details>

                    <a href="{{ route('login') }}" 
                        class="inline-block mt-4 bg-red-700 text-white px-5 py-2 rounded-lg font-semibold hover:bg-red-800 transition">
                        Lamar
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- SCRIPT SEARCH & FILTER --}}
    <script>
        const searchInput = document.getElementById("searchInput");
        const filterLocation = document.getElementById("filterLocation");
        const jobCards = document.querySelectorAll(".job-card");

        function filterJobs() {
            const keyword = searchInput.value.toLowerCase();
            const location = filterLocation.value;

            jobCards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const loc = card.dataset.location;

                const matchKeyword = title.includes(keyword);
                const matchLocation = location === "" || loc === location;

                card.style.display = matchKeyword && matchLocation ? "block" : "none";
            });
        }

        searchInput.addEventListener("input", filterJobs);
        filterLocation.addEventListener("change", filterJobs);
    </script>

</x-app-layout>
