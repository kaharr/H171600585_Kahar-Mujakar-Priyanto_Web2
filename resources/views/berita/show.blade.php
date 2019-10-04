@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Berita</div>
                
                <div class="card-body">
                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">ID</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $berita->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Judul</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $berita->judul !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Isi</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $berita->isi !!}</label>
                    </div>

                     <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">User Id</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $berita->users_id !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-2 col-form-label text-md-right">Create</label>
                         <label  class="col-md-10 col-form-label text-md-left">{!! $berita->created_at->format('d/m/Y H:i:s') !!}</label>
                    </div>

                    
                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <a href="{!! route('berita.index')!!}" class="btn btn-success">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection