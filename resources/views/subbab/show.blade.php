<x-app-layout>
        <div class="max-w-7xl mx-auto px-8 py-8">
        <a href="{{ route('materi.show', $subbab->materi->slug) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </a>
    </div>

    <div class="py-2">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 md:p-10 text-gray-900">

                    <h1 class="text-4xl font-bold mb-4">
                        {!! $subbab->judul !!}
                    </h1>

                    <hr class="my-4">

                    <div class="prose max-w-none">
                        {!! $subbab->isi !!}
                    </div>

                    <div class="mt-10 pt-6 border-t border-gray-200 text-center">
                        <a id="btnComplete"
                            href="#"
                            class="inline-block bg-green-500 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-green-600 transition-colors">
                            Tandai Selesai Belajar
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Popup -->
        <div id="achievementPopup"
            style="display:none; position:fixed; top:30%; left:50%; transform:translate(-50%,-50%);
                    background:white; padding:20px; border-radius:10px; box-shadow:0 0 20px rgba(0,0,0,0.3);
                    transition: opacity .3s;">
            <h3 style="font-size:18px; font-weight:bold;">🎉 Achievement Baru!</h3>
            <p id="popupText" style="margin-top:5px;"></p>
            
        </div>

        <!-- Confetti -->
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

        <script>
        document.getElementById('btnComplete').addEventListener('click', function(e) {
            e.preventDefault();

            fetch(`/materi/{{ $subbab->materi->materi_id }}/complete`, {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {

                
                    const pop = document.getElementById('achievementPopup');
                    document.getElementById('popupText').innerText = data.message;
                    pop.style.display = 'block';
                    pop.style.opacity = 1;

                    fireConfetti();

                    
                    setTimeout(() => {
                        pop.style.opacity = 0;
                        setTimeout(() => { pop.style.display = 'none'; }, 300);
                    }, 2500);
                }
            });
        });

        function fireConfetti() {
            const duration = 1000; // 1 sec
            const end = Date.now() + duration;

            (function frame() {
                confetti({
                    particleCount: 5,
                    startVelocity: 45,
                    spread: 60,
                    ticks: 50,
                    origin: {
                        x: Math.random(),
                        y: Math.random() - 0.2
                    }
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            }());
        }
        </script>
    </div>
</x-app-layout>
