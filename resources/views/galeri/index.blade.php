@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-info"  >Galeri</div>
                <div class="card-body bg-white">
                <a href="{!! route('galeri.create')!!}" class="btn btn-primary ">{{ __('Tambah Data')}}</a>
                <a href="{!! route('kategori_galeri.index')!!}" class="btn btn-primary">{{ __('Lihat Kategori Galeri')}}</a>
                <a href="{!! route('home')!!}" class="btn btn-info">{{ __('Home')}}</a>

                <div class="col text-center">
                <br>
                <table class="table table-bordered bg-white">
                    <thead class ="bg-info">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">nama</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">path</th>
                                <th scope="col">User_id</th>
                                <th scope="col">Kategori_galeri_id</th>
                                <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($Galeri as $item)
                            <tr>
                               
                                <td>{!! $item->id!!}</td>
                                <td>{!! $item->nama!!}</td>
                                <td>{!! $item->keterangan!!}</td>
                                <td>{!! $item->path!!}</td>
                                <td>{!! $item->users_id!!}</td>
                                <td>{!! $item->kategori_galeri_id!!}</td>
                                <td>
                                <a href="{!! route('galeri.show',[$item-> id]) !!}" button class="btn btn-sm btn-info" >Lihat Detail</a>
                                
                                <a href="{!! route('galeri.edit',[$item-> id]) !!}" button class="btn btn-sm btn-warning btn-info" >Edit</a>
                             
                                {!! Form::open(['route' => ['galeri.destroy', $item->id],'method' => 'delete']) !!}

                                {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                                {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                    </div>
</div>
</div>
</div>
</div>
@endsection