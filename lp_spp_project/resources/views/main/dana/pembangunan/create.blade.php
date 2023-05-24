<div class="modal fade" id="modalIdtwo" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah Dana Pembangunan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pembangunan.create') }}" method="Post">

                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <select name="angkatan_id" id="angkatan_id" class="form-select">
                            <option value="" selected>-</option>
                            @foreach ($side as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->jurusan->nama_jurusan }} -
                                    {{ $data->tahun_mulai }}/{{ $data->tahun_berakhir }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="number" name="dana" id="dana" class="form-control"
                            placeholder="dana praktek">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
