<!DOCTYPE html>
<html>
 <head>
 <title>
 </title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap
/4.1.3/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="an
onymous">
 </head>
 <body>
 
 <div class="container">
 @if(session('sukses')) 
 <div class="alert alert-success" role="alert">
 {{session('sukses')}} 
 </div>
 @endif 
 <div class="row">
 <div class="col-6">
 <h1>Data Donor Darah</h1>
 </div>
 <div class="col-md-6">
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-primary my-2 my-sm-0 float-right" data-toggle="modal" data-target="#exampleModal">
 Tambah Data 
 </button>
 <form class="form-inline my-2 my-lg-0" method="GET" action="/donordarah">
 <input name="cari" class="form-control w-75 mr-sm-2" id="search" placeholder="Cari">
 <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0">Cari</button>
 </form>
 </div>
 <table class="table table-hover">
 <tr>
 <th>NIK</th>
 <th>Nama</th>
 <th>TglLahir</th>
 <th>JenisKelamin</th>
 <th>Alamat</th>
 <th>Telpon</th>
 <th>Golongan Darah</th>
 </tr>
 @foreach($data_donordarah as $donordarah)
 <tr>
 <td>{{$donordarah->nik}}</td>
 <td>{{$donordarah->nama}}</td> 
 <td>{{$donordarah->tgllahir}}</td>
 <td>{{$donordarah->jeniskelamin}}</td>
 <td>{{$donordarah->alamat}}</td> 
 <td>{{$donordarah->telpon}}</td>
 <td>{{$donordarah->golongandarah}}</td>
 <td>
     <a href="/donordarah/{{$donordarah->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
     <a href="/donordarah/delete/{{$donordarah->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
</td>
 </tr>
 @endforeach 
 </table>
 </div>
 <a a href="/donordarah/exportpdf" class="btn btn-sm btn-success">Export PDF</a>
 </div>
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-body">
 <form action="/donordarah/create" method="POST">
 {{csrf_field()}} 
 <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIK</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nik" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama" class="form-control"  required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tgllahir" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="sex" value="L" required>L
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="sex" value="P" required>P
						</label>
					</div>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telpon</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="telpon" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
				<div class="col-md-6 col-sm-6">
					<select name="golongandarah" class="form-control" required>
						<option value="">Pilih Golongan Darah</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
				</div>
			</div>

 
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="an
onymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.m
in.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="an
onymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.
js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="an
onymous"></script>
 </body>
 
</html>