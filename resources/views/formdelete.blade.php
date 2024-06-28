<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background */
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #ffffff; /* White background for the container */
            padding: 2cm 1cm;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 2cm;
        }
        h2 {
            color: #333;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center">
            <div class="card-body">
                <h2 class="card-title">Hapus Data</h2>
                <p class="card-text">Anda yakin ingin menghapus data ini?</p>
                <form action="{{ route('destroy') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $pegawai->id }}">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="{{ route('index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
