<x-layout>
    <!-- Your content goes here -->
    <section class="pb-10">
        <div class="pt-36">
            <div class="mx-auto px-6 max-w-7xl">
                <div class="text-center">
                    <h4 class="text-2xl text-gray-950 dark:text-white font-semibold">Pilih bagian di bawah untuk lihat
                        selengkapnya </h4>
                    <p class="mt-6 text-gray-700 dark:text-gray-300"></p>
                </div>
                <div class="grid grid-cols-1 gap-4  md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 justify-center">

                    <x-selectbox id="1" lable="Pilih Kabupaten">

                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            1</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            2</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            3</a>
                    </x-selectbox>
                    <x-selectbox id="2" lable="Pilih Kecamatan">

                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            1</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            2</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            3</a>
                    </x-selectbox>
                    <x-selectbox id="3" lable="Pilih Desa">

                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            1</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            2</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer rounded-md">Option
                            3</a>
                    </x-selectbox>
                </div>
                <div class="mt-12 relative w-full h-fit sm:mx-auto sm:px-0 -mx-6 px-6 ">
                    <div>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://kupangkota.go.id/wp-content/uploads/2022/09/Lambang_Kota_Kupang-LOGO-KECIL.png"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kota Kupang</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://alorkab.go.id/x/wp-content/uploads/2024/09/KabupatenAlor.png"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kab. Alor</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="data:image/jpeg;base64,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"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kab. Belu</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Lambang_Kabupaten_Ende.png"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kab. Ende</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/Lambang_Kabupaten_Flores_Timur.jpg"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kab. Flores Timur</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCKeYpqJdViuHnwconY2oWLDnn-CkxBLjobQ&s"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kab. Lembata</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Lambang_Kabupaten_Malaka.png"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kab. Malaka</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="#">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="https://www.manggaraikab.go.id/wp-content/uploads/2020/10/Lambang-Kabupaten-Manggarai.png"
                                                    alt="" height="10">
                                            </div>
                                            <span class="font-medium">Kab. Manggarai</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const kab = document.querySelector("select[name='kab']");
        const kec = document.querySelector("select[name='kec']");
        const desa = document.querySelector("select[name='desa]");
        let option = ""
        async function getkab() {
            const response = await fetch("https://open-api.my.id/api/wilayah/regencies/53", {
                    method: "GET",
                    // ...
                }).then(response => response.json())
                .then(data => {
                    data.forEach(data => {
                        option += `<option value="${data.id}">${data.name} </option>`

                    });
                });
            kab.innerHTML = option
        }
        getkab()
        kab.addEventListener('input', () => {
            const value = kab.value;
            console.log(value)
            async function getkec() {
                const response = await fetch("https://open-api.my.id/api/wilayah/regencies/53", {
                        method: "GET",
                        // ...
                    }).then(response => response.json())
                    .then(data => {
                        data.forEach(data => {
                            option += `<option value="${data.id}">${data.name} </option>`

                        });
                    });
                kab.innerHTML = option
            }
        })
    </script>
</x-layout>
