{{-- <x-app-layout>
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold text-red-700 mb-6">Kontak Kami</h1>
            <p class="text-gray-700 mb-6">
                Ingin tahu lebih lanjut tentang karier di Sosro? Hubungi kami melalui form di bawah ini.
            </p>

            <form class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
                <div class="mb-4">
                    <input type="text" placeholder="Nama Lengkap" 
                           class="w-full border-gray-300 rounded-md p-2 focus:ring-red-600 focus:border-red-600">
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email" 
                           class="w-full border-gray-300 rounded-md p-2 focus:ring-red-600 focus:border-red-600">
                </div>
                <div class="mb-4">
                    <textarea placeholder="Pesan" rows="4" 
                              class="w-full border-gray-300 rounded-md p-2 focus:ring-red-600 focus:border-red-600"></textarea>
                </div>
                <button type="submit" 
                        class="bg-red-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>
</x-app-layout> --}}

<x-app-layout>
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold text-red-700 mb-6">Kontak Kami</h1>
            <p class="text-gray-700 mb-6">
                Ingin tahu lebih lanjut tentang karier di Sosro? Hubungi kami melalui form di bawah ini.
            </p>

            {{-- Formulir Kontak --}}
            <form class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mb-20">
                <div class="mb-4">
                    <input type="text" placeholder="Nama Lengkap" 
                           class="w-full border-gray-300 rounded-md p-2 focus:ring-red-600 focus:border-red-600">
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email" 
                           class="w-full border-gray-300 rounded-md p-2 focus:ring-red-600 focus:border-red-600">
                </div>
                <div class="mb-4">
                    <textarea placeholder="Pesan" rows="4" 
                              class="w-full border-gray-300 rounded-md p-2 focus:ring-red-600 focus:border-red-600"></textarea>
                </div>
                <button type="submit" 
                        class="bg-red-700 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-800 transition">
                    Kirim Pesan
                </button>
            </form>

            {{-- START: Bagian FAQ (Accordion) --}}
            <h2 class="text-3xl font-bold text-red-700 mb-10 mt-10">
                Pertanyaan yang Sering Diajukan (FAQ)
            </h2>

            <div class="max-w-3xl mx-auto space-y-4 text-left" x-data="faqsData()">

                <template x-for="(faq, index) in faqs" :key="index">
                    <div class="border border-gray-200 rounded-lg shadow-sm bg-white">

                        {{-- Header --}}
                        <button @click="faq.open = !faq.open"
                            class="flex justify-between items-center w-full p-4 font-semibold text-gray-800 hover:bg-red-50 transition">
                            <span x-text="faq.q"></span>

                            <svg :class="{ 'rotate-180': faq.open }"
                                class="w-5 h-5 text-red-700 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        {{-- Isi --}}
                        <div x-show="faq.open" x-collapse 
                            class="p-4 border-t border-gray-200 text-gray-600 leading-relaxed">
                            <p x-text="faq.a"></p>
                        </div>

                    </div>
                </template>

            </div>
            {{-- END FAQ --}}

        </div>
    </section>
</x-app-layout>

{{-- Pastikan Alpine.js tersedia di proyek Anda untuk x-data, x-show, x-collapse, dll. --}}
<script>
    // Data FAQ yang akan di-looping oleh Alpine.js
    document.addEventListener('alpine:init', () => {
        Alpine.data('faqsData', () => ({
            faqs: [
                { q: 'Tahapan apa saja jika ingin melamar di PT Sinar Sosro Gunung Slamat?', a: 'Tahapan umumnya: Pendaftaran Akun, Melengkapi Profil, Pemilihan Lowongan, Seleksi oleh HRD/User, hingga Offering.' },
                { q: 'Apa yang harus dilakukan jika lupa password?', a: 'Gunakan fitur "Lupa Kata Sandi" di halaman login. Masukkan email terdaftar Anda, dan ikuti instruksi yang dikirimkan ke email Anda untuk membuat password baru.' },
                { q: 'Dokumen apa saja yang harus dipersiapkan sebelum membuat akun?', a: 'Siapkan CV terbaru, Ijazah Pendidikan Terakhir, Transkrip Nilai, dan KTP dalam format digital (misalnya PDF) untuk diunggah.' },
                { q: 'Mengapa saya gagal menyimpan data?', a: 'Cek koneksi internet Anda. Pastikan format file dokumen sudah benar (misalnya PDF) dan ukurannya tidak melebihi batas maksimum yang ditetapkan.' },
                { q: 'Apakah saya bisa melamar lebih dari satu posisi?', a: 'Ya, pada umumnya diperbolehkan, namun kami sangat menyarankan Anda fokus melamar pada posisi yang paling sesuai dengan kualifikasi dan minat Anda.' },
                { q: 'Setelah selesai melamar posisi yang dituju, apakah tahapan selanjutnya?', a: 'Tahap selanjutnya adalah Seleksi Administrasi (Review CV) oleh Tim Rekrutmen. Kandidat yang lolos akan dihubungi untuk tahapan tes/wawancara.' },
                { q: 'Apa saja tahapan proses seleksi yang harus diikuti?', a: 'Tahapan seleksi meliputi Seleksi Administrasi, Psikotes, Wawancara HRD, Wawancara User, dan Tes Kesehatan (MCU). Tahapan bisa bervariasi per posisi.' },
                { q: 'Berapa jangka waktu dari masing-masing tahapan proses seleksi?', a: 'Jangka waktu proses seleksi dapat memakan waktu 2 hingga 4 minggu sejak tanggal penutupan lamaran. Mohon menunggu informasi resmi dari HRD.' },
                { q: 'Bagaimana cara saya melihat status proses untuk setiap posisi yang sudah saya lamar?', a: 'Anda dapat melihat status terbaru melalui menu "Riwayat Lamaran" setelah Anda masuk ke akun pelamar.' },
                { q: 'Apakah saya bisa melakukan update terhadap profil dan CV saya?', a: 'Ya, Anda dapat memperbarui data profil dan mengunggah CV terbaru di akun Anda. Perubahan akan berlaku untuk lamaran yang akan datang.' },
                { q: 'Apakah ada pungutan biaya dalam proses seleksi?', a: 'TIDAK ADA. Seluruh proses rekrutmen PT Sinar Sosro Gunung Slamat bersifat GRATIS. Harap abaikan segala permintaan pembayaran yang mengatasnamakan perusahaan.' }
            ]
        }))
    })
</script>
