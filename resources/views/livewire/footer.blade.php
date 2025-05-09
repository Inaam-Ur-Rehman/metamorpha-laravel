<footer class="border-t-2 border-theme-blue">
    <div
        class="py-12 !font-v400 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 justify-items-start mx-auto max-w-8xl px-4">
        <div class="flex flex-col lg:items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="w-64 lg:w-72 object-fill mx-auto block" />
            <p class="flex flex-col mt-4">
                <span>Pastoor Dergentlaan 216</span>
                <span>3200 Aarschot</span>
                <span>0475/20.84.60</span>
            </p>
        </div>
        <div>
            <h2 class="font-bold !font-vp400 text-theme-blue">Handige links</h2>
            <div class="flex flex-col gap-2 mt-4">
                <a href="/bedrijfsinformatie"
                    class="block hover:underline underline-offset-4 decoration-2">Bedrijfsinformatie</a>
                <a href="/kmo-portefeuille"
                    class="block hover:underline underline-offset-4 decoration-2">KMO-portefeuille</a>
                <a href="/wettelijke-informatie"
                    class="block hover:underline underline-offset-4 decoration-2">Wettelijke
                    informatie</a>
                <a href="mailto:Bart@Metamorpha.be" class="block">
                    <span class="flex items-center gap-2">
                        <i class="fa fa-envelope"></i>
                        Bart@Metamorpha.be
                    </span>
                </a>
                <a href="https://www.christageeroms.com/" target="_blank"
                    class="block hover:underline underline-offset-4 decoration-2">Foto’s:
                    www.christageeroms.com</a>
                <a href="https://www.instagram.com/Christa_Geeroms_photo" class="block">
                    <span class="flex items-center gap-2">
                        <i class="fa fa-instagram"></i>

                        @Christa_Geeroms_photo
                    </span>
                </a>
            </div>
        </div>
        <div>
            <h2 class="font-bold !font-vp400 text-theme-blue">Informatie</h2>
            <div class="flex flex-col gap-2 mt-4">
                @foreach ($menu as $link)
                   <a href="{{$link['slug']}}" class="block hover:underline underline-offset-4 decoration-2">
                        {{ $link['name'] }}
                   </a>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="font-bold !font-vp400 text-theme-blue">Aanbod</h2>
            <div class="flex flex-col gap-2 mt-4">
                @foreach ($subMenu as $link)
                    <a href="{{$link['slug']}}" class="block hover:underline underline-offset-4 decoration-2">
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="font-bold !font-vp400 text-theme-blue">Neem contact op</h2>
            <div class="flex items-center gap-2 mt-4">
                <a href="/contact"
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-theme-blue hover:scale-105">
                    <i class="flex items-center justify-center text-xl text-white fa-solid fa-phone "></i>
                </a>
                <a href="mailto:bart@metamorpha.be" target="_blank"
                    class="flex items-center justify-center w-10 h-10 p-2 rounded-full bg-theme-blue hover:scale-105">
                    <i class="flex items-center justify-center text-2xl text-white fa-solid fa-envelope"></i>
                </a>
                <a href="https://www.linkedin.com/in/bart-van-der-herten/" target="_blank"
                    class="flex items-center justify-center w-10 h-10 p-2 rounded-full bg-theme-blue hover:scale-105">
                    <i class="flex items-center justify-center w-5 text-2xl text-white fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
