@extends('layout.app')

@section('title', 'List Data Barang')

@section('main')

@include('sweetalert')
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Data Barang</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All </span><span
                        class="text-700 fw-semi-bold">({{ $barang->count() }})</span></a></li>
        </ul>
        <div id="products"
            data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":5,"pagination":true}'>
            <div class="mb-4">
                <div class="d-flex flex-wrap gap-3">
                    <div class="search-box">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                class="form-control search-input search" type="search" placeholder="Cari Barang"
                                aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <div class="ms-xxl-auto">
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" id="addBtn" data-bs-toggle="modal"
                        data-bs-target="#tambahModal">
                            <span class="fas fa-plus me-2"></span>
                            Tambah Barang
                        </button>

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
                                                <label for="kodeBarang" class="form-label">Kode Barang</label>
                                                <input type="text" class="form-control" id="kodeBarang"
                                                    placeholder="Masukkan kode barang" name="kode_barang">
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label for="kategoriBarang" class="form-label mb-0">Kategori</label>
                                                    <a class="fw-bold fs--1" href="{{ route('kategori') }}">Tambah Kategori?</a>
                                                </div>
                                                <select class="form-select form-select-sm mt-2" id="kategoriBarang" aria-label="Small select example" name="kategori_id">
                                                    <option selected disabled>Pilih kategori</option>
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
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0">
                        <thead>
                            <tr>
                                {{-- <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input"
                                            id="checkbox-bulk-products-select" type="checkbox"
                                            data-bulk-select='{"body":"products-table-body"}' /></div>
                                </th> --}}
                                <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">NO</th>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;">
                                </th>
                                <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;">
                                    NAMA BARANG</th>
                                <th class="sort align-middle ps-4" scope="col" style="width:150px;">
                                    KODE BARANG</th>
                                <th class="sort align-middle ps-4" scope="col" style="width:150px;">
                                    KATEGORI</th>
                                <th class="sort align-middle text-end ps-4" scope="col"
                                    style="width:150px;">HARGA</th>
                                <th class="sort align-middle text-center ps-4" scope="col" style="width:125px;">STOK
                                </th>
                                <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                            @if ($barang->isEmpty())
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px; height: auto;">
                                        <img src="{{ asset('assets/img/storyset/No data-amico (1).svg') }}" alt="No data" style="width: 300px; height: auto; max-width: 100%;">
                                        <h3 class="mt-3 mb-0">Belum ada data barang</h3>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @foreach ($barang as $barangs)
                            <tr class="position-static">
                                {{-- <td class="fs--1 align-middle">
                                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"
                                            data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...","productImage":"/products/1.png","price":"$39","category":"Plants","tags":["Health","Exercise","Discipline","Lifestyle","Fitness"],"star":false,"vendor":"Blue Olive Plant sellers. Inc","publishedOn":"Nov 12, 10:45 PM"}' />
                                    </div>
                                </td> --}}
                                <td class="fs--1 align-middle fw-bold">{{ $loop->iteration }}</td>
                                <td class="align-middle white-space-nowrap py-0">
                                    {{-- <a class="d-block border rounded-2"
                                        href="../landing/product-details.html"><img src="../../../assets/img/products/1.png"
                                            alt="" width="53" /></a> --}}
                                </td>
                                <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0"
                                        href="../landing/product-details.html">{{ $barangs->nama_barang }}</a></td>
                                <td class="vendor align-middle text-start fw-bold ps-4">{{ $barangs->kode_barang }}</td>
                                <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">{{ $barangs->kategori->nama_kategori }}</td>
                                <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">{{ 'Rp ' . number_format($barangs->harga, 0, ',', '.') }}</td>
                                <td class="price align-middle white-space-nowrap fw-bold text-700 ps-4 text-center ps-4">{{ $barangs->stok }}</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="font-sans-serif btn-reveal-trigger position-static">
                                        <button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            data-boundary="window"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-bs-reference="parent"
                                        >
                                            <span class="fas fa-ellipsis-h fs--2"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <!-- Button trigger modal -->
                                            <button class="dropdown-item text-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $barangs->id }}"
                                                data-bs-backdrop="static" data-bs-keyboard="false">Edit</button>

                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('barang.destroy', $barangs->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item text-danger hapus">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $barangs->id }}" tabindex="-5" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit Barang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form content -->
                                                <form action="{{ route('barang.update', $barangs->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="editNamaBarang" class="form-label">Nama Barang</label>
                                                        <input type="text" class="form-control" id="editNamaBarang" placeholder="Masukkan nama barang"
                                                            value="{{ old('nama_barang', $barangs->nama_barang) }}" name="nama_barang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editKodeBarang" class="form-label">Kode Barang</label>
                                                        <input type="text" class="form-control" id="editKodeBarang" placeholder="Masukkan kode barang"
                                                            value="{{ old('kode_barang', $barangs->kode_barang) }}" name="kode_barang">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editKategoriBarang" class="form-label">Kategori</label>
                                                        <select class="form-select form-select-sm" aria-label="Small select example" name="kategori_id">
                                                            <option disabled>Pilih Kategori</option>
                                                            @foreach ($kategori as $kategoris)
                                                                <option value="{{ $kategoris->id }}" @if ($kategoris->id == $barangs->kategori_id) selected @endif>
                                                                    {{ $kategoris->nama_kategori }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editHargaBarang" class="form-label">Harga</label>
                                                        <input type="number" class="form-control" id="editHargaBarang" name="harga" placeholder="Masukkan harga"
                                                            value="{{ old('harga', $barangs->harga) }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editStokBarang" class="form-label">Stok</label>
                                                        <input type="number" class="form-control" id="editStokBarang" name="stok" placeholder="Masukkan stok"
                                                            value="{{ old('stok', $barangs->stok) }}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($barang->count() > 0)
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info">
                        </p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                            class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                            data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        $('.hapus').click(function(event) {
            event.preventDefault();

            var form = $(this).closest('form');

            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Anda akan menghapus produk ini. Tindakan ini tidak dapat dibatalkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
