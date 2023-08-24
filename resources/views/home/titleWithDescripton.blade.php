@php
    // Ambil judul pertama dan deskripsi pertama dari array $titles
    $title = $title ?? '';
    $description = $description ?? '';
@endphp

<div class="pl-3 flex flex-col">
    <div class="pt-10 flex-col w-min gap-5 justify-center flex h-screen">
        <div class="flex h-fit items-center gap-2">
            <h2 class="text-5xl font-semibold">{{ $title }}</h2>
            <div class="w-80 h-[2px] mt-3 bg-cyan-500"></div>
        </div>
        <p class="leading-relaxed text-slate-900 text-base">{{ $description }}</p>
        <a href="/{{ Str::lower($title) }}"
            class="btn uppercase text-lg bg-slate-900 hover:bg-slate-950 text-white w-max">selengkapnya
            <span class="hover:pl-3 duration-150 transition-all ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </span>
        </a>
    </div>
</div>
