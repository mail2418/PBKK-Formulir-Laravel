<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Account Shopee</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font-Style --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body style="font-family: Roboto Slab; color:white; background-color: white ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <p style="text-align: center"><img src="/img/shopee-logo.png" alt="Logo Shopee" width="200px"></p>
                        <h3 class="text-center" style="font-weight: bold">Register Account Shopee</h3>
                        <br/>
                        <!-- form validasi -->
                        <form action="/hasil" method="post" enctype="multipart/form-data" style="font-size: 1.2em">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nama_depan">Nama Depan</label>
                                <input class="form-control" type="text" name="nama_depan" value="{{ old('nama_depan') }}" class="@error('nama_depan') is-invalid @enderror">
                                @error('nama_depan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input class="form-control" type="text" name="nama_belakang" value="{{ old('nama_belakang') }}" class="@error('nama_belakang') is-invalid @enderror">
                                @error('nama_belakang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin(L/P)</label>
                                <input class="form-control" type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" class="@error('jenis_kelamin') is-invalid @enderror">
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" class="@error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon">Nomor Telepon</label>
                                <input class="form-control" type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}" class="@error('nomor_telepon') is-invalid @enderror">
                                @error('nomor_telepon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">KTP</label>
                                <input class="form-control-file" type="file" id="ktp" name="ktp" accept="image/png, image/jpg, image/jpeg" class="@error('ktp') is-invalid @enderror">
                                @error('ktp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group" style="text-align: center">
                                <input class="btn btn-primary" type="submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>