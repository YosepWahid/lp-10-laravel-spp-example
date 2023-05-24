<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h6>Dana Pembangunan</h6>
                    <button class="btn btn-primary btn-sm" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                        data-bs-target="#modalIdtwo">Tambah</button>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No
                                </th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Dana Pembangunan
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Angkatan
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Created_at
                                </th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_two as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            {{ $loop->index + 1 }}
                                        </div>
                                    </td>

                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">
                                            {{ number_format($item->dana, '2', '.', ',') }}</p>
                                    </td>

                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->angkatan->angkatan }} -
                                            {{ $item->angkatan->jurusan->nama_jurusan }}</p>
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $item->angkatan->tahun_mulai }} / {{ $item->angkatan->tahun_berakhir }}
                                        </p>
                                    </td>

                                    <td>
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('pembangunan.edit', $item->id) }}"
                                            class="text-secondary font-weight-bold text-xs me-2">
                                            Edit
                                        </a>
                                        <a href="{{ route('pembangunan.delete', $item->id) }}"
                                            class="text-secondary font-weight-bold text-xs">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>

            @include('main.dana.pembangunan.create')
        </div>
        {{ $data_two->links('pagination::bootstrap-5') }}
    </div>
</div>
