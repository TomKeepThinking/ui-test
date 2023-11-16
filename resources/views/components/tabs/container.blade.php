<div x-data="{ activeTab: 1 }">

    <!-- Buttons -->
    <div class="flex justify-center">
        <div class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-8 min-[480px]:mb-12">
            <!-- Button #1 -->
            <button
                id="tab-1"
                class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                :class="activeTab === 1 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                @click="activeTab = 1"
            >Lassen Peak</button>
            <!-- Button #2 -->
            <button
                id="tab-2"
                class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                :class="activeTab === 2 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                @click="activeTab = 2"
            >Mount Shasta</button>
            <!-- Button #3 -->
            <button
                id="tab-3"
                class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out"
                :class="activeTab === 3 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                @click="activeTab = 3"
            >Eureka Peak</button>
        </div>
    </div>

    <!-- Tab panels -->
    <div class=" x">
        <div class="relative flex flex-col">

            <x-tabs.panel :tab="1">
                <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3">
                    <div class="flex justify-between mb-1">
                        <header>
                            <div class="font-caveat text-xl font-medium text-sky-500">Mountain</div>
                            <h1 class="text-xl font-bold text-slate-900">Lassen Peak</h1>
                        </header>
                        <button class="shrink-0 h-[30px] w-[30px] border border-slate-200 hover:border-slate-300 rounded-full shadow inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out" aria-label="Like">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14" height="13">
                                <path d="M6.985 1.635C5.361.132 2.797.162 1.21 1.7A3.948 3.948 0 0 0 0 4.541a3.948 3.948 0 0 0 1.218 2.836l5.156 4.88a.893.893 0 0 0 1.223 0l5.165-4.886a3.925 3.925 0 0 0 .061-5.663C11.231.126 8.62.094 6.985 1.635Zm4.548 4.53-4.548 4.303-4.54-4.294a2.267 2.267 0 0 1 0-3.275 2.44 2.44 0 0 1 3.376 0c.16.161.293.343.398.541a.915.915 0 0 0 .766.409c.311 0 .6-.154.767-.409.517-.93 1.62-1.401 2.677-1.142 1.057.259 1.797 1.181 1.796 2.238a2.253 2.253 0 0 1-.692 1.63Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="text-slate-500 text-sm line-clamp-3 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                    <div class="text-right">
                        <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-out" href="#0">Read more -&gt;</a>
                    </div>
                </div>
            </x-tabs.panel>

            <!-- Panel #2 -->
            <x-tabs.panel :tab="2">
                <figure class="min-[480px]:w-1/2 p-2">
                    <img class="w-full h-[180px] min-[480px]:h-full object-cover rounded-lg" width="304" height="214" src="./tabs-image-02.jpg" alt="Tab 02" />
                </figure>
                <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3">
                    <div class="flex justify-between mb-1">
                        <header>
                            <div class="font-caveat text-xl font-medium text-sky-500">Mountain</div>
                            <h1 class="text-xl font-bold text-slate-900">Mount Shasta</h1>
                        </header>
                        <button class="shrink-0 h-[30px] w-[30px] border border-slate-200 hover:border-slate-300 rounded-full shadow inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out" aria-label="Like">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14" height="13">
                                <path d="M6.985 1.635C5.361.132 2.797.162 1.21 1.7A3.948 3.948 0 0 0 0 4.541a3.948 3.948 0 0 0 1.218 2.836l5.156 4.88a.893.893 0 0 0 1.223 0l5.165-4.886a3.925 3.925 0 0 0 .061-5.663C11.231.126 8.62.094 6.985 1.635Zm4.548 4.53-4.548 4.303-4.54-4.294a2.267 2.267 0 0 1 0-3.275 2.44 2.44 0 0 1 3.376 0c.16.161.293.343.398.541a.915.915 0 0 0 .766.409c.311 0 .6-.154.767-.409.517-.93 1.62-1.401 2.677-1.142 1.057.259 1.797 1.181 1.796 2.238a2.253 2.253 0 0 1-.692 1.63Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="text-slate-500 text-sm line-clamp-3 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                    <div class="text-right">
                        <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-out" href="#0">Read more -&gt;</a>
                    </div>
                </div>
            </x-tabs.panel>

            <x-tabs.panel :tab="3">
                <figure class="min-[480px]:w-1/2 p-2">
                    <img class="w-full h-[180px] min-[480px]:h-full object-cover rounded-lg" width="304" height="214" src="./tabs-image-03.jpg" alt="Tab 03" />
                </figure>
                <div class="min-[480px]:w-1/2 flex flex-col justify-center p-5 pl-3">
                    <div class="flex justify-between mb-1">
                        <header>
                            <div class="font-caveat text-xl font-medium text-sky-500">Mountain</div>
                            <h1 class="text-xl font-bold text-slate-900">Eureka Peak</h1>
                        </header>
                        <button class="shrink-0 h-[30px] w-[30px] border border-slate-200 hover:border-slate-300 rounded-full shadow inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-in-out" aria-label="Like">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="14" height="13">
                                <path d="M6.985 1.635C5.361.132 2.797.162 1.21 1.7A3.948 3.948 0 0 0 0 4.541a3.948 3.948 0 0 0 1.218 2.836l5.156 4.88a.893.893 0 0 0 1.223 0l5.165-4.886a3.925 3.925 0 0 0 .061-5.663C11.231.126 8.62.094 6.985 1.635Zm4.548 4.53-4.548 4.303-4.54-4.294a2.267 2.267 0 0 1 0-3.275 2.44 2.44 0 0 1 3.376 0c.16.161.293.343.398.541a.915.915 0 0 0 .766.409c.311 0 .6-.154.767-.409.517-.93 1.62-1.401 2.677-1.142 1.057.259 1.797 1.181 1.796 2.238a2.253 2.253 0 0 1-.692 1.63Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="text-slate-500 text-sm line-clamp-3 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                    <div class="text-right">
                        <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 transition-colors duration-150 ease-out" href="#0">Read more -&gt;</a>
                    </div>
                </div>
            </x-tabs.panel>

        </div>
    </div>

</div>
