@extends('layout/main')

@section('title', 'List Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Table Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>No. </th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>
                            <a href=""><span class="badge bg-primary">Edit</span></a>
                            <a href=""><span class="badge bg-danger">Delete</span></a>
                            @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection