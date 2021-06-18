@extends('layouts.lte.template')
@section('content_lte')
    <div class="this-place area">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Favoritos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @forelse($herous as $h)
                                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="card-header text-muted border-bottom-0">
                                                <h1>{{$h->name}}</h1>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p class="text-muted text-sm">{{$h->description}}</p>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <img src="{{$h->thumbnail->path}}.{{$h->thumbnail->extension}}" alt="{{$h->name}}" style="max-width: 100px" class="img-circle img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a href="{{route('heroi.historias',$h->id)}}" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-history"></i> Histórias
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                        <div class="alert alert-warning">
                                            Erro ao carregar heróis!
                                        </div>
                                    </div>
                                @endforelse

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
