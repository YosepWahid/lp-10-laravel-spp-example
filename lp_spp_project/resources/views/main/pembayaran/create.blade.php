<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="overflow: auto">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pembayaran.create') }}" method="Post">

                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <input type="number" name="dibayarkan" id="dibayarkan" class="form-control"
                            placeholder="nominal">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Siswa</label>
                        <select name="siswa_id" id="id_siswa" class="form-select">
                            <option value="" selected>-</option>
                            @foreach ($side as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_siswa }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="tanggal" class="form-label">Tanggal Bayar</label>
                            <input type="date" name="tanggal_bayar" id="tanggal" class="form-control"
                                placeholder="tanggal bayar">
                        </div>

                        <div class="col-6">
                            <label for="tanggal" class="form-label">Bulan</label>
                            <select name="bulan" id="bulan" class="form-select">
                                <option value="" selected>-</option>
                                <option value="Januari">Januari</option>
                                <option value="Febuari">Febuari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">

                        <div class="col-6">
                            <label for="detail_bayar" class="form-label">Detail Pembayaran</label>
                            <select name="keterangan_pembayaran" id="detail_bayar" class="form-select">
                                <option value="" selected>-</option>
                                <option value="manual">manual</option>
                                <option value="digital">digital</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label for="id_sumbangan" class="form-label">Sumbangan</label>
                            <select name="sumbangan_id" id="id_sumbangan" class="form-select">
                                <option value="" selected>-</option>
                                @foreach ($side_two as $item)
                                    <option value="{{ $item->id }}">{{ number_format($item->total, 2, '.', ',') }} -
                                        {{ $item->tahun }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="form-info">bisa dilewat (default tahun berjalan)</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea name="detail_keterangan" id="detail_keterangan" cols="5" rows="3" class="form-control"
                            placeholder="detail keterangan"></textarea>
                        <small class="form-info">bisa dilewat (default kosong)</small>
                    </div>

                    <hr>
                    {{--
                    <h6 class="text-primary">bisa di lewat</h6>

                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="tanggal" class="form-label">Tipe Potongan</label>
                            <select name="detail_potongan" id="detal_potongan" class="form-select">
                                <option value="" selected>-</option>
                                <option value="prestasi">prestasi</option>
                                <option value="rangking">rangking</option>
                                <option value="bantuan">bantuan</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="tanggal" class="form-label">Nominal Potongan</label>
                            <input type="number" name="potongan" id="potongan" class="form-control"
                                placeholder="nominal">
                        </div>
                    </div>
                </div> --}}

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
