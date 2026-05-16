<x-layout>
    <div class="container py-5">

        {{-- Hero Section --}}
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            <div class="card-body p-5 text-center">

                {{-- Title --}}
                <h1 class="fw-bold mb-3">
                    Welcome 👋
                </h1>

                {{-- Subtitle --}}
                <p class="text-muted mb-4">
                    Selamat datang di sistem manajemen data fakultas.
                    Kelola data fakultas dengan mudah dan cepat.
                </p>

                {{-- Action Button --}}
                <div class="d-flex justify-content-center gap-3 flex-wrap">

                    <a href="/fakultas"
                       class="btn btn-primary px-4 py-2 rounded-3">
                        List Fakultas
                    </a>

                    <a href="/fakultas/create"
                       class="btn btn-light border px-4 py-2 rounded-3">
                        Tambah Fakultas
                    </a>

                </div>

            </div>

        </div>

    </div>
</x-layout>