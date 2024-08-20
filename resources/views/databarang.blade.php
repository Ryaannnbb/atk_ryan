<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Toko ATK Ryan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <h3 class="text-center">Aplikasi Toko ATK Ryan</h3>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="https://prium.github.io/phoenix/v1.13.0/assets/img/icons/logo.png" style="height: 30px;"
                    alt="logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('barang') }}">Data Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                                    <input type="text" class="form-control" id="kategoriBarang"
                                        placeholder="Masukkan kategori" name="kategori">
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
                                @foreach($barang as $barangs)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $barangs->nama_barang }}</td>
                                    <td>{{ $barangs->kategori }}</td>
                                    <td>{{ 'Rp ' . number_format($barangs->harga, 0, ',', '.') }}</td>
                                    <td>{{ $barangs->stok }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            Edit
                                        </button>

                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal" tabindex="-1"
                                            aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Edit Barang</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Form content -->
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="editNamaBarang" class="form-label">Nama
                                                                    Barang</label>
                                                                <input type="text" class="form-control"
                                                                    id="editNamaBarang"
                                                                    placeholder="Masukkan nama barang">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="editKategoriBarang"
                                                                    class="form-label">Kategori</label>
                                                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                                                        <option selected>Open this select menu</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="editHargaBarang"
                                                                    class="form-label">Harga</label>
                                                                <input type="number" class="form-control"
                                                                    id="editHargaBarang" placeholder="Masukkan harga">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="editStokBarang"
                                                                    class="form-label">Stok</label>
                                                                <input type="number" class="form-control"
                                                                    id="editStokBarang" placeholder="Masukkan stok">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('barang.destroy', $barangs->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
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

    <footer class="bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; 2024 Aplikasi Toko ATK Ryan. All Rights Reserved.
        </div>
    </footer>
</body>

</html>
