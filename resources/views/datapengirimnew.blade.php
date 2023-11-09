<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Pengirim</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .centered-table {
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-links {
            text-align: center;
        }

        .action-links a {
            margin: 0 5px;
            text-decoration: none;
        }

        .back-button {
            margin-top: 20px; 
        }

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
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Form Biodata</h3>
                <form action="/datapengirim" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon:</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label><br>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">Pilih Gender</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select><br>
                    </div>
                    <button type="submit" class="btn btn-success" name="tambah">Simpan</button>
                    <button onclick="goBack()">Kembali</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>
  </head>
</html>