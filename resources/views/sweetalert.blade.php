<link rel="stylesheet" href="sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>

@if (session('success'))
    <script>
        let timerInterval;
        Swal.fire({
            icon: "success",
            title: "Berhasil!",
            html: "{{ session('success') }}",
            timer: 2500,
            timerProgressBar: true,
            confirmButtonText: "Yes, accept!"
        })
    </script>
@endif


@if (session('error'))
    <script>

    </script>
@endif
