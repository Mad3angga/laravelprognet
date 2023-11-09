<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Pengirim</title>
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="meyawo.css">
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
        
    </style>
  </head>
  <body>
    <h1 class="text-center mb-4">Hasil Data</h1>

    <div class="container">
        <form action="/datapengirim/create" method="get">
        <button type="submit" class="btn btn-success mb-2">Tambah +</button>
        
    </form>
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telepon</th>
      <th scope="col">Gender</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        <tr>
        @foreach ($data as $datapengirim)
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $datapengirim->nama }}</td>
        <td>{{ $datapengirim->alamat }}</td>
        <td>{{ $datapengirim->telepon }}</td>
        <td>{{ $datapengirim->gender }}</td>
        <td>
        
                    <form action="/datapengirim/{{ $datapengirim->id }}/edit" method="get">
                <button type="submit" class="btn btn-success">Edit</button>
            </form>
            <form action="/datapengirim/{{ $datapengirim->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
             </form>
        </td>
        </tr>
        @endforeach
  </tbody>
</table>

  </body>
</html>