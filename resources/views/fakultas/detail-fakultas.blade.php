<x-layout>
    <div class="container py-4">

        {{-- Header --}}
        <div class="mb-4">
            <h2 class="fw-bold mb-1">Detail Fakultas</h2>
            <p class="text-muted mb-0">
                Informasi lengkap data fakultas
            </p>
        </div>

        {{-- Card Detail --}}
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">

                <table class="table table-borderless align-middle mb-0">

                    <tbody>

                        {{-- Nama Fakultas --}}
                        <tr>
                            <th width="25%" class="fw-semibold text-dark">
                                Nama Fakultas
                            </th>

                            <td width="5%" class="text-muted">
                                :
                            </td>

                            <td>
                                <span class="text-secondary">
                                    {{ $fakulta->nama_fakultas ?? '-' }}
                                </span>
                            </td>
                        </tr>

                        {{-- Nama Dekan --}}
                        <tr>
                            <th class="fw-semibold text-dark">
                                Nama Dekan
                            </th>

                            <td class="text-muted">
                                :
                            </td>

                            <td>
                                <span class="text-secondary">
                                    {{ $fakulta->nama_dekan ?? '-' }}
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

                {{-- Button --}}
                <div class="mt-4 d-flex gap-2">

                    <a href="/fakultas/{{ $fakulta->id }}/edit"
                       class="btn btn-warning rounded-3 px-4">
                        Edit
                    </a>

                    <a href="/fakultas"
                       class="btn btn-light border rounded-3 px-4">
                        Kembali
                    </a>

                </div>

            </div>
        </div>

    </div>
</x-layout>