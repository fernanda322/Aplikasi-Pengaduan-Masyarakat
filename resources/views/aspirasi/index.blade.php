@extends('layouts.app')
@section('content')

<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id Kategori</th>
        <th scope="col">Id Penduduk</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Lokasi</th>
        <th scope="col">Status</th>
        <th scope="col">Feedback</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
      <tr>
        <th scope="row">1</th>
        <td><a href="/riwayat/{{$data->id}}/aspirasi" style="color:white; font-weight:bold;">{{$data->nama}}</a></td>
        <td>{{$data->nik}}</td>
        <td>{{$data->alamat}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection