@extends('site.layouts.app')

@section('title', 'Home')

@section('extra-css')
    <!-- start here -->

@endsection

@section('extra-styles')
    <!-- start here -->

    <style>
        body {
            width: 100%;
            height: 100px;

            background-image: url(2121.jpg);
        }

        table {
            border-radius: 4px;
            width: 70%;
            margin: 10px auto;
            background-color: white;
            border-collapse: collapse;
        }

        tr {
            border: 1px solid transparent;
            z-index: 7;
        }

        td {
            text-align: left;
            padding: 20px;
            transition: all 0.2s ease-in-out;
        }

        td.highlight {
            padding: 0;
            width: 4px;
        }

        td.highlight div {
            width: 4px;
            height: 60px;
            border-radius: 4px;
            background-color: white;
            transition: all 0.2s ease-in-out;
        }

        tr:hover {
            box-shadow: 0px 9px 4px -6px grey;
        }

        tr:hover td {
            cursor: pointer;
            color: red;
            border-top: 1px solid grey;
            border-bottom: 1px solid grey;
        }

        /* tr:first-child:hover td {
                border-top: none;
              }
              tr:last-child:hover td {
                border-bottom: none;
              } */
        tr:hover td.highlight div {
            transform: scaleX(3);
        }

        .kkk {
            width: 100%;
        }

        .isitabel {
            transform: translateY(-800px);
            height: -1000px
        }
    </style>

@endsection

@section('content')

    <div class="isitabel">


        <div class="container mt-5">
            <h1 class="text-center mb-5 text-light bg-dark">
                Data Mahasiswa

            </h1>
            <a href="{{ route('mahasiswa.create') }}" class=" btn btn-primary mb-3"> Tambah Data</a>
            <a class=" btn btn-primary mb-3 float-end" href="{{ route('site.home.getIndex') }}">Kembali</a>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif



            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <td class="highlight">
                                <div></div>
                            </td>
                            <th>No</th>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>JURUSAN</th>
                            <th>AKSI </th>
                            <td class="highlight">
                                <div></div>
                            </td>
                        </thead>
                        <tbody>

                            @foreach ($mahasiswa as $no => $hasil)
                                <tr>
                                    <td class="highlight">
                                        <div></div>
                                    </td>
                                    <th>{{ $no + 1 }}</th>
                                    <td>{{ $hasil->nim }}</td>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->jurusan }}</td>
                                    <td>
                                        <form action="{{ route('mahasiswa.destroy', $hasil->id) }}" method="POST">
                                            @csrf
                                            @method('delete')

                                            <a href="{{ route('mahasiswa.edit', $hasil->id) }}"
                                                class="btn btn-success btn-sm"> Edit</a>
                                            <button href="" class="btn btn-danger btn-sm"> Hapus</button>
                                        </form>
                                    </td>
                                    <td class="highlight">
                                        <div></div>
                                    </td>
                                </tr>
                            @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Container End -->


    @endsection

    @section('extra-content')
        <!-- start here -->
    @endsection

    @section('extra-js')
        <!-- start here -->
    @endsection

    @section('extra-script')
        <!-- start here -->
    @endsection
