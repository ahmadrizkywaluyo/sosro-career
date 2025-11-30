<x-app-layout>

    {{-- HERO SECTION DENGAN CAROUSEL --}}
    <section 
        x-data="{ current: 0, slides: [
            { img: '../assets/images/beranda sosro.png', caption: 'Selamat Datang di Sosro Karier', subcaption: 'Dapatkan informasi lowongan pekerjaan terbaru disini' },
            {{-- { img: '../assets/images/beranda sosro new.png', caption: 'Bersama Sosro Membangun Karier Cerah', subcaption: 'Dapatkan informasi lowongan pekerjaan terbaru disini' }, --}}
            { img: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1400&q=80', caption: 'Program Pelatihan dan Pengembangan', subcaption: 'Mendukung pengembangan karyawan' },
            { img: '../assets/images/our_program.png', caption: 'Jadilah Bagian dari Keluarga Sosro', subcaption: 'Untuk masa depan yang lebih cerah'}
        ] }"
        x-init="setInterval(() => current = (current + 1) % slides.length, 4000)"
        class="relative w-full h-[90vh] overflow-hidden"
    >
        <template x-for="(slide, index) in slides" :key="index">
            <div 
                x-show="current === index"
                class="absolute inset-0 transition-all duration-700"
                x-transition:enter="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="opacity-100"
                x-transition:leave-end="opacity-0"
            >
                <img :src="slide.img" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
                <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center">
                    <h2 x-text="slide.caption" class="text-3xl md:text-5xl text-white font-bold text-center"></h2>
                    <p x-text="slide.subcaption" class="text-lg md:text-xl text-white text-center mt-5"></p> 
                </div>
            </div>
        </template>

        {{-- Tombol navigasi manual --}}
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-3">
            <template x-for="(slide, index) in slides" :key="index">
                <button 
                    @click="current = index"
                    :class="current === index ? 'bg-white' : 'bg-gray-400'"
                    class="w-3 h-3 rounded-full focus:outline-none transition"></button>
            </template>
        </div>
    </section>

    {{-- BAGIAN KONTEN UTAMA --}}
    <section class="py-20 bg-white text-center">
        <div class="max-w-5xl mx-auto px-6">
            <h1 class="text-4xl font-bold text-red-700 mb-6">Selamat Datang di Sosro Karier</h1>
            <p class="text-gray-700 text-lg leading-relaxed mb-10">
                Di Sosro, kami percaya bahwa kesuksesan berasal dari kolaborasi, inovasi, dan semangat keluarga. 
                Kami terus berkembang untuk menciptakan lingkungan kerja yang mendorong kreativitas dan pertumbuhan karier setiap individu.
            </p>

            <div class="grid md:grid-cols-4 gap-8 mt-12">
                <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="w-16 mx-auto mb-4" alt="Karier">
                    <h3 class="text-xl font-bold text-red-700 mb-2">Niat Baik Hasil Baik</h3>
                    <p class="text-gray-200">_______________</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/1055/1055646.png" class="w-16 mx-auto mb-4" alt="Karier">
                    <h3 class="text-xl font-bold text-red-700 mb-2">TERUJI</h3>
                    <p class="text-gray-600">Tekad, Rencana, Ulet, Jeli, Iman</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/3062/3062634.png" class="w-16 mx-auto mb-4" alt="Karier">
                    <h3 class="text-xl font-bold text-red-700 mb-2">ACC</h3>
                    <p class="text-gray-600">Accountable, Care, Credible</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/1055/1055646.png" class="w-16 mx-auto mb-4" alt="Karier">
                    <h3 class="text-xl font-bold text-red-700 mb-2">3H</h3>
                    <p class="text-gray-600">Humble, Humility, Humanity</p>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN PROGRAM UNGGULAN --}}
    <section class="bg-red-50 py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-red-700 mb-8">Program Unggulan Kami</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Management Trainee</h3>
                    <p class="text-gray-600">Program intensif untuk mengembangkan calon pemimpin masa depan di berbagai divisi perusahaan.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Internship Program</h3>
                    <p class="text-gray-600">Kesempatan bagi mahasiswa untuk memperoleh pengalaman kerja profesional dan pembelajaran langsung di industri F&B.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Professional Growth</h3>
                    <p class="text-gray-600">Sosro memberikan ruang bagi karyawan untuk mengasah kemampuan dan mencapai potensi terbaiknya.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN AJAKAN BERGABUNG --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-red-700 mb-4">Bergabunglah Bersama Kami</h2>
            <p class="text-gray-700 mb-8">Temukan berbagai peluang karier yang sesuai dengan minat dan bakatmu.  
                Kami menantikan kontribusimu untuk tumbuh bersama keluarga besar Sosro.</p>
            <a href="{{ route('lowongan') }}" 
               class="inline-block bg-red-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-800 transition">
                Lihat Lowongan
            </a>
        </div>
    </section>

    {{-- SECTION TESTIMONI SLIDER --}}
<section 
    x-data="carousel()" 
    x-init="startAutoSlide()" 
    class="bg-gradient-to-b from-red-50 to-white py-24 relative"
>
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-red-700 mb-12 text-center">
            Apa Kata Karyawan Kami
        </h2>

        {{-- WRAPPER --}}
        <div 
            class="overflow-hidden relative"
        >
            {{-- SLIDER TRACK --}}
            <div 
                class="flex transition-transform duration-700 ease-out"
                :style="`transform: translateX(-${active * 100}%);`"
                x-ref="track"
            >
                <template x-for="(t, i) in testimonials" :key="i">
                    {{-- CARD --}}
                    <div class="min-w-full px-4 flex justify-center">
                        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md w-full 
                                    border border-red-100 hover:shadow-xl transition">
                            
                            <div class="flex flex-col items-center space-y-5">
                                <img :src="t.img" 
                                     class="w-28 h-28 rounded-full border-4 border-red-700 shadow-md object-cover"/>

                                <p class="text-gray-700 text-center leading-relaxed italic text-lg">
                                    “<span x-text="t.text"></span>”
                                </p>

                                <div class="text-center">
                                    <h4 class="text-xl font-semibold text-red-700" x-text="t.name"></h4>
                                    <p class="text-gray-500" x-text="t.role"></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </template>
            </div>

            {{-- BUTTON PREV --}}
            <button 
                @click="prev()"
                class="absolute top-1/2 -translate-y-1/2 left-0 bg-red-700 text-white 
                       w-10 h-10 rounded-full flex items-center justify-center shadow-lg
                       hover:bg-red-800 transition"
            >
                ❮
            </button>

            {{-- BUTTON NEXT --}}
            <button 
                @click="next()"
                class="absolute top-1/2 -translate-y-1/2 right-0 bg-red-700 text-white 
                       w-10 h-10 rounded-full flex items-center justify-center shadow-lg
                       hover:bg-red-800 transition"
            >
                ❯
            </button>
        </div>

        {{-- DOTS --}}
        <div class="flex justify-center space-x-3 mt-8">
            <template x-for="(t, i) in testimonials" :key="i">
                <button 
                    @click="active = i"
                    :class="active === i ? 'bg-red-700 w-4' : 'bg-gray-300 w-3'"
                    class="h-3 rounded-full transition-all duration-300"
                ></button>
            </template>
        </div>
    </div>
</section>

    {{-- ALPINE JS LOGIC --}}
    <script>
    function carousel() {
        return {
            active: 0,
            interval: null,
            testimonials: [
                { 
                    name: 'Rina Kusuma', 
                    role: 'Staff HRD', 
                    text: 'Bekerja di Sosro membuat saya belajar tentang arti kolaborasi dan profesionalitas. Setiap hari selalu ada hal baru yang menantang.', 
                    img: 'https://randomuser.me/api/portraits/women/44.jpg'
                },
                { 
                    name: 'Andi Pratama', 
                    role: 'Sales Executive', 
                    text: 'Budaya kerja di Sosro sangat positif. Dukungan tim dan peluang pengembangan diri membuat saya terus bersemangat.', 
                    img: 'https://randomuser.me/api/portraits/men/46.jpg'
                },
                { 
                    name: 'Dewi Anggraini', 
                    role: 'Marketing Analyst', 
                    text: 'Lingkungan kerja yang mendukung membuat ide saya dihargai dan memberikan ruang untuk berkembang.', 
                    img: 'https://randomuser.me/api/portraits/women/68.jpg'
                }
            ],

            next() {
                this.active = (this.active + 1) % this.testimonials.length;
            },

            prev() {
                this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length;
            },

            startAutoSlide() {
                this.interval = setInterval(() => {
                    this.next();
                }, 6000);
            }
        };
    }
    </script>

</x-app-layout>