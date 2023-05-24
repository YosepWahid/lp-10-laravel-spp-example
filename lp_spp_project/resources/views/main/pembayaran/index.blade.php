@extends('layouts.app')

@section('title', 'Pembayaran')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h6>Pembayaran Sumbangan</h6>
                        <button class="btn btn-primary btn-sm" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                            data-bs-target="#modalId">Tambah</button>
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
                                        Detail Pembayaran
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Sumbangan
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Siswa
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Created_at
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                {{ $loop->index + 1 }}
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                bayar : {{ number_format($item->dibayarkan, 2, '.', ',') }}</p>
                                            @if ($item->kembalian > 0)
                                                <p class="text-xs text-secondary mb-0">
                                                    Kembalian : {{ number_format($item->kembalian, 2, '.', ',') }}
                                                </p>
                                            @endif
                                            @if ($item->kekurangan > 0)
                                                <p class="text-xs text-secondary mb-0">
                                                    kekurangan : {{ number_format($item->kekurangan, 2, '.', ',') }}
                                                </p>
                                            @endif
                                            @if ($item->potongan > 0)
                                                <p class="text-xs text-secondary mb-0">
                                                    potongan : {{ number_format($item->potongan, 2, '.', ',') }}
                                                </p>
                                            @endif
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ number_format($item->sumbangan->total, 2, '.', ',') }}
                                                - {{ $item->sumbangan->tahun }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $item->siswa->nama_siswa }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="{{ $item->status_sumbangan == 0 ? 'text-primary' : 'text-secondary' }}
                                                text-xs
                                                font-weight-bold">{{ $item->status_sumbangan == 0 ? 'belum lunas' : 'lunas' }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('pembayaran.print', $item->id) }}"
                                                class="text-secondary font-weight-bold text-xs me-2">
                                                Print
                                            </a>
                                            <a href="{{ route('pembayaran.detail', $item->id) }}"
                                                class="text-secondary font-weight-bold text-xs me-2">
                                                Detail
                                            </a>
                                            <a href="{{ route('pembayaran.edit', $item->id) }}"
                                                class="text-secondary font-weight-bold text-xs me-2">
                                                Edit
                                            </a>
                                            <a href="{{ route('pembayaran.delete', $item->id) }}"
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

                @include('main.pembayaran.create')
            </div>
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
