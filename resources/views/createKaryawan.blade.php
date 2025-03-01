<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profil Karyawan</title>
</head>
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <form action="/add-karyawan-post" method="POST">
        @csrf
        <div class="form-group">
         <label for="nama">Nama Karyawan</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
        </div>
         <div class="form-group">
            <label for="umur">Umur Karyawan</label>
             <input type="number" class="form-control" id="exampleInputPassword1" name="umur">
         </div>
        <div class="form-group">
            <label for="alamat">Alamat Karyawan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="alamat">
         </div>
         <div class="form-group">
             <label for="telp">Nomor Telepon Karyawan</label>
             <input type="number" class="form-control" id="exampleInputPassword1" name="telp">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>