@extends('layouts.app')
@section('content')
<h1>Edit Data Donor Darah</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/c
ss/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="an
onymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" cross
origin="anonymous">
<body>

<div class="container">
 @if(session('sukses'))
 <div class="alert alert-success" role="alert">
 {{session('sukses')}}
 </div>
 @endif
 
 <div class="row">
 <form action="/donordarah/{{$donordarah->id}}/update" method="POST">
 {{csrf_field()}}
 <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIK</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nik" class="form-control" size="4" value = "{{$donordarah
->nik}}" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama" class="form-control"  value = "{{$donordarah
->nama}}" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tgllahir" class="form-control" value = "{{$donordarah
->tgllahir}}" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="sex" value="L" value = "{{$donordarah
->jeniskelamin}}" required>L
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="sex" value="P" value = "{{$donordarah
->jeniskelamin}}" required>P
						</label>
					</div>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="alamat" class="form-control" value = "{{$donordarah
->alamat}}"required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telpon</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="telpon" class="form-control" value = "{{$donordarah
->telpon}}" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Golongan Darah</label>
				<div class="col-md-6 col-sm-6">
					<select name="golongandarah" class="form-control" value = "{{$donordarah
->golongandarah}}" required>
						<option value="">Pilih Golongan Darah</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
				</div>
			</div>
 <div class="form-group">
 <button type="submit" class="btn btn-warning">Update</button>
 </div>
 </form>
</div>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="an
onymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.m
in.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="an
onymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.mi
n.js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="an
onymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross
origin="anonymous"></script>
</body>
@endsection