<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah Angkatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('angkatan.create') }}" method="Post">

                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="angkatan" id="angkatan" class="form-control"
                            placeholder="Nama Angkatan">
                    </div>

                    <div class="mb-3">
                        <select name="jurusan_id" id="id_jurusan" class="form-select">
                            <option value="" selected>-</option>
                            @foreach ($side as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <input type="text" name="tahun_mulai" id="tahun_mulai" class="form-control"
                                placeholder="tahun mulai">
                        </div>

                        <div class="col-6"><input type="text" name="tahun_berakhir" id="tahun berakhir"
                                class="form-control" placeholder="tahun berakhir">
                        </div>
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
