<x-layout>
    <div class="container py-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">List Fakultas</h2>
                <p class="text-muted mb-0">
                    Data seluruh fakultas kampus
                </p>
            </div>

            <a href="/fakultas/create" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i>
                Tambah Fakultas
            </a>
        </div>

        {{-- Card Table --}}
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">

                        {{-- Table Head --}}
                        <thead class="bg-dark text-white">
                            <tr>
                                <th class="px-4 py-3 text-center" width="5%">
                                    NO
                                </th>

                                <th class="py-3">
                                    Nama Fakultas
                                </th>

                                <th class="py-3">
                                    Nama Dekan
                                </th>

                                <th class="py-3 text-center" width="25%">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        {{-- Table Body --}}
                        <tbody>

                            @forelse ($fakultas as $item)
                                <tr>

                                    {{-- No --}}
                                    <td class="text-center px-4 fw-semibold">
                                        {{ $loop->iteration }}
                                    </td>

                                    {{-- Fakultas --}}
                                    <td>
                                        <div class="fw-semibold text-dark">
                                            {{ $item->nama_fakultas }}
                                        </div>
                                    </td>

                                    {{-- Dekan --}}
                                    <td>
                                        <span class="text-muted">
                                            {{ $item->nama_dekan }}
                                        </span>
                                    </td>

                                    {{-- Action --}}
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">

                                            <a href="/fakultas/{{ $item->id }}"
                                               class="btn btn-sm btn-outline-info rounded-pill px-3">
                                                Detail
                                            </a>

                                            <a href="/fakultas/{{ $item->id }}/edit"
                                               class="btn btn-sm btn-outline-warning rounded-pill px-3">
                                                Edit
                                            </a>

                                            <form action="/fakultas/{{ $item->id }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5">

                                        <div class="text-muted">
                                            <h5 class="mb-1">
                                                Data kosong
                                            </h5>

                                            <small>
                                                Belum ada data fakultas
                                            </small>
                                        </div>

                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</x-layout>