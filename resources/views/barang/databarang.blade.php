
@extends('layout.app')

@section('main')
<div class="container mt-5 flex-grow-1">
    <div class="row">
        <div class="col text-start">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#tambahModal">
                Tambah
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahModalLabel">Tambah Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form content -->
                        <form action="{{ route('barang.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="namaBarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="namaBarang"
                                    placeholder="Masukkan nama barang" name="nama_barang">
                            </div>
                            <div class="mb-3">
                                <label for="kategoriBarang" class="form-label">Kategori</label>
                                <select class="form-select form-select-sm"
                                aria-label="Small select example" name="kategori_id">
                                <option selected disabled>Pilih kategori</option>`
                                @foreach ($kategori as $kategoris)
                                    <option value="{{ $kategoris->id }}">
                                        {{ $kategoris->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="hargaBarang" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="hargaBarang"
                                    placeholder="Masukkan harga" name="harga">
                            </div>
                            <div class="mb-3">
                                <label for="stokBarang" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stokBarang"
                                    placeholder="Masukkan stok" name="stok">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $barangs)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $barangs->nama_barang }}</td>
                                    <td>{{ $barangs->kategori->nama_kategori }}</td>
                                    <td>{{ 'Rp ' . number_format($barangs->harga, 0, ',', '.') }}</td>
                                    <td>{{ $barangs->stok }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <!-- Edit Button -->
                                            <button type="button" class="btn btn-primary btn-sm me-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $barangs->id }}">
                                                Edit
                                            </button>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal{{ $barangs->id }}"
                                                tabindex="-1" aria-labelledby="editModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit
                                                                Barang</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Form content -->
                                                            <form
                                                                action="{{ route('barang.update', $barangs->id) }}"
                                                                method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="editNamaBarang"
                                                                        class="form-label">Nama
                                                                        Barang</label>
                                                                    <input type="text" class="form-control"
                                                                        id="editNamaBarang"
                                                                        placeholder="Masukkan nama barang"
                                                                        value="{{ old('name', $barangs->nama_barang) }}"
                                                                        name="nama_barang">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="editKategoriBarang"
                                                                        class="form-label">Kategori</label>
                                                                    <select class="form-select form-select-sm"
                                                                        aria-label="Small select example">
                                                                        <option disabled>Pilih Kategori</option>
                                                                        @foreach ($kategori as $kategoris)
                                                                            <option value="{{ $kategoris->id }}"
                                                                                @if ($kategoris->kategori_id == $kategoris->id) selected @endif>
                                                                                {{ $kategoris->nama_kategori }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="editHargaBarang"
                                                                        class="form-label">Harga</label>
                                                                    <input type="number" class="form-control"
                                                                        id="editHargaBarang" name="harga"
                                                                        placeholder="Masukkan harga" value="{{ old('name', $barangs->harga) }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="editStokBarang"
                                                                        class="form-label">Stok</label>
                                                                    <input type="number" class="form-control"
                                                                        id="editStokBarang" name="stok"
                                                                        placeholder="Masukkan stok" value="{{ old('name', $barangs->stok) }}">
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="{{ route('barang.destroy', $barangs->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
