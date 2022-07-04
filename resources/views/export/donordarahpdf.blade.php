<table class="table" style="border:1px solid #ddd"> 
<thead>
<tr>
<th>NIK</th>
 <th>Nama</th>
 <th>TglLahir</th>
 <th>JenisKelamin</th>
 <th>Alamat</th>
 <th>Telpon</th>
 <th>Golongan Darah</th>
 </tr>
 @foreach($data_donordarah as $dnrdarah)
 <tr>
 <td>{{$dnrdarah->nik}}</td>
 <td>{{$dnrdarah->nama}}</td> 
 <td>{{$dnrdarah->tgllahir}}</td>
 <td>{{$dnrdarah->jeniskelamin}}</td>
 <td>{{$dnrdarah->alamat}}</td> 
 <td>{{$dnrdarah->telpon}}</td>
 <td>{{$dnrdarah->golongandarah}}</td>
</tr>
@endforeach 
</tbody>
</table>
