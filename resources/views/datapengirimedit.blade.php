<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-top: 50px; /* Jarak dari atas */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        select {
            height: 35px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Edit Form</h3>
    <form action="/datapengirim/{{ $datapengirim->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $datapengirim->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $datapengirim->alamat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon:</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $datapengirim->telepon }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label><br>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">Pilih Gender</option>
                            <option value="pria" @if($datapengirim->gender=='Pria') {{ "Selected" }} @endif >Pria</option>
                            <option value="wanita" @if($datapengirim->gender=='Wanita') {{ "Selected" }} @endif >Wanita</option>
                        </select><br>
                    </div>
                    <button type="submit" class="btn btn-success" name="tambah">Simpan</button>
                    <button onclick="goBack()">Kembali</button>
    </form>
</body>
</html>
