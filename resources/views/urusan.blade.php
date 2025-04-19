<x-admin>
    <!-- Your content goes here -->
    
    <section class="pt-5">
          
        <div class="relative max-w-7xl mx-auto px-6 py-10 lg:py-10">
            <div class="lg:flex lg:items-center lg:gap-12">
                <div class="relative z-10 mt-10 items-center text-center  max-w-5xl mx-auto lg: lg:w-full">
                  
                    <h1 class="mt-10 text-title font-bold text-balance text-4xl md:text-5xl xl:text-5xl">Sistem
                        Analisis dan Statistik Data Integrasi Online</h1>
                    <p class="mt-8 text-body">Temukan dataset,
                        visualisasi, infografik, artikel, dan mapset dengan cepat, mudah, dan akurat</p>
                    <div>
                        <form action="" class="max-w-xl mx-auto  my-10 lg:my-12">
                            <div
                                class="relative grid bg-ui [grid-template-columns:1fr_auto] items-center border pr-3 shadow shadow-gray-950/5 rounded-[calc(var(--btn-radius)+0.75rem)] outline-2 outline-offset-2 outline-primary-400 has-[input:focus]:outline">

                                <svg class="absolute inset-y-0 left-5 my-auto size-5 pointer-events-none text-caption"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg>


                                <input autocomplete="search" placeholder="Masukan Kata Kunci Pencarian.."
                                    class="pl-12 h-14 w-full bg-transparent focus:outline-none" type="text">
                                <div class="md:pr-1.5 lg:pr-0">
                                    <button title="Start buying"
                                        class="btn w-fit bg-primary-400 text-white variant-soft sz-md">
                                        <span class="btn-label hidden md:block">
                                            Cari
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="relative size-5 mx-auto md:hidden" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                       

                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="pb-10">
        <div class="pt-0">

                

            <div class="mx-auto px-6 max-w-7xl">
                <div class="text-center">
                    <h4 class="text-2xl text-gray-950 dark:text-white font-semibold">Pilih bagian di bawah untuk lihat selengkapnya </h4>
                    <p class="mt-6 text-gray-700 dark:text-gray-300"></p>
                </div>

                <div class="mt-12 relative w-full h-fit sm:mx-auto sm:px-0 -mx-6 px-6 ">
                    <div>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach ($data as $item)
                            <?php 
                                            
                            $url = "https://satudataalor.id/api/3/action/group_show?id=$item";
                            $response = $client->request('GET', $url);
                            $content =  $response->getBody();
                            $contentArray = json_decode($content, true);
                                ?>
                           
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <div class=" pe-auto h-12 w-12 rounded-lg card bg-cover bg-"
                                                    style="background-image: url('{{ $contentArray['result']['image_display_url'] }}'); background-position: center;margin:auto;" >
                                                </div>
                                            </div>
                                           
                                            <span class="font-medium">{{ $contentArray['result']['display_name'] }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach

                           
                            {{-- <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <div class=" pe-auto h-12 w-12 rounded-lg card bg-cover bg-"
                                                    style="background-image: url('img/kesehatan.svg'); background-position: center;margin:auto;" >
                                                </div>
                                            </div>
                                            <span class="font-medium">Kesehatan</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <div class=" pe-auto h-12 w-12 rounded-lg card bg-cover bg-"
                                                    style="background-image: url('img/infras.svg'); background-position: center;margin:auto;" >
                                                </div>
                                            </div>
                                            <span class="font-medium">Pekerjaan Umum</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <div class=" pe-auto h-12 w-12 rounded-lg card bg-cover bg-"
                                                    style="background-image: url('img/infras.svg'); background-position: center;margin:auto;" >
                                                </div>
                                            </div>
                                            <span class="font-medium">Perumahan Rakyat</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="img/lingkunganalam.svg"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Lingkungan</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="img/pemdes.jpg"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Pemerintahan Desa</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="img/kependudukan.svg"
                                                    alt="">
                                            </div>
                                            <span class="font-medium">Kependudukan</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div style="opacity: 1; filter: blur(0px); transform: none;">
                                <a class="block" href="/dataset?topik=Ekonomi dan Industri">
                                    <div
                                        class="rounded-xl border bg-card  text-card-foreground shadow transition-all hover:shadow-lg">
                                        <div class="flex items-center gap-4 p-6">
                                            <div class="w-[50px] h-auto rounded-lg p-1 text-red-500">
                                                <img src="img/kemiskinan.svg"
                                                    alt="" height="10">
                                            </div>
                                            <span class="font-medium">Kemiskinan</span>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                  
                </div>
              <div class="mt-3">  {{ $data->links() }}  </div>
            </div>
        </div>
    </section>

</x-admin>
