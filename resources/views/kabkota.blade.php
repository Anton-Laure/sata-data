<x-layout>
    <main class="overflow-hidden mb-10">
        <section class="overflow-hidden mt-10">
          
            <div class="relative max-w-7xl mx-auto px-6 py-10 lg:py-10">
                <div class="lg:flex lg:items-center lg:gap-12">
                    <div class="relative z-10 items-center text-center  max-w-4xl mx-auto lg: lg:w-full">
                      
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


                                    <input autocomplete="search" placeholder="Cari Dataset.."
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
        <section class="mb-10">
            <div class="pt-0 mb-10">
                
                <div class="mx-auto border-t-4 px-6 max-w-6xl bg-gray-50 pb-7">
                    <span class="text-caption -ml-6 -mt-3.5 block w-max bg-gray-50 px-6 dark:bg-gray-950">Pilih Kategori</span>
                    {{-- <div class="mt-24 gap-4 sm:grid sm:grid-cols-2">
                        <div class="sm:w-2/5">
                            <h2 class="text-title text-3xl font-bold sm:text-4xl">Kategori Data</h2>
                        </div>
                        <div class="mt-6 sm:mt-0">
                            <p>“Data adalah kunci dalam membuat kebijakan pemerintahan, dan kebijakan yang benar didasarkan pada data yang benar dan akurat.”</p>
                        </div>
                    </div> --}}
                    <div class="text-center">
                        {{-- <h2 class="text-3xl text-title font-semibold">Kategori Data</h2>
                        <p class="mt-6 text-body"></p> --}}
                    </div>
                    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-16 ">
                        



                        <div class="relative group overflow-hidden  variant-outlined">
                            <a href="../urusan"> 
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-white-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative ">
                                <div class="bg-ui rounded-card border p-5 shadow shadow-gray-950/5"> 
                                    <img class="aspect-square rounded-[calc(var(--card-radius)-4px)] object-cover" src="urusan.jpg" alt="Méschac Irung" height="460" width="460" loading="lazy"> 
                                    {{-- <span class="text-title block px-1 pb-0.5 pt-1.5 text-xs">M.Irung <span class="text-caption"> - Creator</span></span>  --}}
                                    <h3 class="text-center  font-medium text-title pt-4">Urusan</h3>
                                </div>

                               
                            </div>
                            </a>
                        </div>

                        <div class="relative group overflow-hidden  variant-outlined">
                            <a href="../kabkota"> 
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-white-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative ">
                                <div class="bg-ui rounded-card border p-5 shadow shadow-gray-950/5"> 
                                    <img class="aspect-square rounded-[calc(var(--card-radius)-4px)] object-cover" src="ntt5.jpg" alt="Méschac Irung" height="460" width="460"  loading="lazy"> 
                                    {{-- <span class="text-title block px-1 pb-0.5 pt-1.5 text-xs">M.Irung <span class="text-caption"> - Creator</span></span>  --}}
                                    <h3 class="text-center font-medium text-title pt-4">Kabupaten/Kota</h3>
                                </div>

                               
                            </div>
                        </a>
                        </div>

                        <div class="relative group overflow-hidden  variant-outlined">
                            <div aria-hidden="true"
                                class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-white-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-0 dark:group-hover:opacity-5">
                            </div>
                            <div class="relative ">
                                <div class="bg-ui rounded-card border p-5 shadow shadow-gray-950/5"> 
                                    <img class="aspect-square rounded-[calc(var(--card-radius)-4px)] object-cover" src="unit.jpg" alt="Méschac Irung" height="460" width="460" loading="lazy"> 
                                    {{-- <span class="text-title block px-1 pb-0.5 pt-1.5 text-xs">M.Irung <span class="text-caption"> - Creator</span></span>  --}}
                                    <h3 class="text-center font-medium  text-title pt-4">Perangkat Daerah</h3>
                                </div>

                               
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
        </section>
      
       
    </main>
</x-layout>
