@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD DATA MAHASISWA</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>NIM</th>
            <th width="280px"class="text-center">Nama Mahasiswa</th>
            <th width="280px"class="text-center">Prodi</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($mahasiswa as $mahasiswa)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $mahasiswa->NIM }}</td>
            <td>{{ $mahasiswa->NamaMahasiswa }}</td>
            <td>{{ $mahasiswa->Prodi }}</td>
            <td class="text-center">
                <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('mahasiswa.show',$mahasiswa->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit',$mahasiswa->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection