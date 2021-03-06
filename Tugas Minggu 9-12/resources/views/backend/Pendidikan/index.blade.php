@extends('backend/layouts.template')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Pendidikan</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pendidikan
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <a href="{{ route('pendidikan.create') }}"><button class="btn btn-primary" type="button">
                                    <i class="fa fa-plus"> Tambah</i></button></a> 
                        <br><br>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_bag"></i> Nama</th>
                                    <th><i class="icon_document_alt"></i> Tingkatan</th>
                                    <th><i class="icon_calendar"></i> Tahun Masuk</th>
                                    <th><i class="icon_calendar"></i> Tahun Selesai</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                @foreach ($pendidikan as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        @if ($item->tingkatan==1) 
                                            TK
                                        @elsif($item->tingkatan==2) 
                                            SD
                                        @elsif ($item->tingkatan==3)
                                            SMP        
                                        @elsif ($item->tingkatan==4) 
                                            SMA/SMK
                                        @elsif ($item->tingkatan==5) 
                                            D3 
                                        @elsif ($item->tingkatan==6)
                                            D4/S1
                                        @elsif ($item->tingkatan==7) 
                                            S2
                                        @elsif ($item->tingkatan==8)
                                            S3
                                        @endif
                                    </td>
                                    <td>{{$item->tahun_masuk}}</td>
                                    <td>{{$item->tahun_keluar}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-warning" href="{{ route('pendidikan.edit',$item->id) }}">
                                                <i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                        <form action="{{ route('pendidikan.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-warning" href="{{ route('pendidikan.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin mengahapus data ini?')">
                                                <i class="fa fa-trash-o"></i></button>
                                            </form>    
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@endsection