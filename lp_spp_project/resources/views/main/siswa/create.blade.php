<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah Jurusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('siswa.create') }}" method="Post">

                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <select name="angkatan_id" id="angkatan_id" class="form-select">
                            <option value="" selected>-</option>
                            @foreach ($side as $item)
                                <option value="{{ $item->id }}">{{ $item->angkatan }} -
                                    {{ $item->jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <select name="kelas_id" id="kelas_id" class="form-select">
                            <option value="" selected>-</option>
                            @foreach ($side_two as $item)
                                <option value="{{ $item->id }}">{{ $item->tingkatan_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="number" name="nisn" id="nia" class="form-control" placeholder="NISN">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="wali_kelas" id="wali" class="form-control"
                            placeholder="wali kelas">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="nama_siswa" id="wali" class="form-control"
                            placeholder="nama siswa">
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
