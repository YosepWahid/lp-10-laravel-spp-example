<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah Jurusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('jurusan.create') }}" method="Post">

                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="nama_jurusan" id="jurusan" class="form-control"
                            placeholder="Nama Jurusan">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="kepanjangan" id="kepanjangan" class="form-control"
                            placeholder="Kepanjangan">
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
