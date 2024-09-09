@extends('layout.app')

@section('title', 'List Kategori')

@section('main')

@include('sweetalert')
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Data Kategori</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All </span><span
                        class="text-700 fw-semi-bold">({{ $kategori->count() }})</span></a></li>
        </ul>
        <div id="products"
            data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":5,"pagination":true}'>
            <div class="mb-4">
                <div class="d-flex flex-wrap gap-3">
                    <div class="search-box">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                class="form-control search-input search" type="search" placeholder="Cari kategori"
                                aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <div class="ms-xxl-auto">
                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" id="addBtn" data-bs-toggle="modal"
                        data-bs-target="#tambahModal">
                            <span class="fas fa-plus me-2"></span>
                            Tambah Kategori
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
                                        <form action="{{ route('kategori.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="namaKategori" class="form-label">Nama Kategori</label>
                                                <input type="text" class="form-control" id="namaKategori"
                                                    placeholder="Masukkan nama kategori" name="nama_kategori">
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
                                <th class="sort align-middle ps-4" scope="col" style="width:150px;">
                                    NAMA KATEGORI</th>
                                <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                            @if ($kategori->isEmpty())
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px; height: auto;">
                                        <img src="{{ asset('assets/img/storyset/No data-amico (1).svg') }}" alt="No data" style="width: 300px; height: auto; max-width: 100%;">
                                        <h3 class="mt-3 mb-0">Belum ada data kategori</h3>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @foreach ($kategori as $kategoris)
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
                                <td class="vendor align-middle text-start fw-bold ps-4">{{ $kategoris->nama_kategori }}</td>
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
                                            <button type="button" class="dropdown-item text-warning"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $kategoris->id }}">
                                                Edit
                                            </button>

                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('kategori.destroy', $kategoris->id) }}" method="POST">
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
                                <div class="modal fade" id="editModal{{ $kategoris->id }}"
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
                                                    action="{{ route('barang.update', $kategoris->id) }}"
                                                    method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="editNamaBarang"
                                                            class="form-label">Nama
                                                            Kategori</label>
                                                        <input type="text" class="form-control"
                                                            id="editNamaBarang"
                                                            placeholder="Masukkan nama barang"
                                                            value="{{ old('name', $kategoris->nama_kategori) }}"
                                                            name="nama_kategori">
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($kategori->count() > 0)
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
