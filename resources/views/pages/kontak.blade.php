<x-app-layout>
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
</x-app-layout>
