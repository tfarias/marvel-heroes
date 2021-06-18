@extends('layouts.lte.template')
@section('content_lte')
    <div class="this-place area">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Histórias</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Histórias</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" style="max-width: 140px"
                                         src="{{$heroi->thumbnail->path}}.{{$heroi->thumbnail->extension}}"
                                         alt="{{$heroi->name}}">
                                </div>

                                <h3 class="profile-username text-center">{{$heroi->name}}</h3>

                                <p class="text-muted text-center">{{$heroi->description}}</p>

                            </div>
                        </div>

                    </div>

                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header p-2">
                                <h2>Histórias</h2>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    @forelse($historias as $h)
                                        <div class="post">
                                                @if($h->thumbnail)
                                                    <img class="img-circle img-bordered-sm" style="max-width: 120px"
                                                         src="{{$h->thumbnail->path}}.{{$h->thumbnail->extension}}"
                                                         alt="{{$h->title}}">
                                                @endif
                                                <span class="username">
                                                 <strong>
                                                    <i class="fas fa-book mr-1"></i>
                                                    {{$h->title}}
                                                 </strong>

                                                </span>
                                            <p class="text-muted">
                                                {{$h->description}}
                                            </p>

                                            <div class="row">
                                                <div class="col-1">
                                                    <p class="text-muted">Elenco:</p>
                                                </div>
                                                @forelse($h->characters->items as $c)
                                                    <div class="col-2">
                                                        <strong>
                                                            <i class="fas fa-user"></i>
                                                            {{$c->name}}
                                                        </strong>
                                                    </div>
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch flex-column">
                                            <div class="alert alert-warning">
                                                Nenhuma história encontrada!
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
