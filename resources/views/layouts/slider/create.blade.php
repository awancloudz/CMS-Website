@extends('layouts.index')

@section('content')
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Tambah slider images</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('user/admin') }}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Frontpage Website</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Tambah slider images</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>TAMBAH SLIDER IMAGE</header>
                                </div>
                                <div class="card-body ">
                                <form id="slider" class="form-style" name="inputslider"  novalidate="" action="{{ url('user/admin/slider') }}" method="POST" enctype="multipart/form-data">
                                @include('layouts.slider.form',['submitButtonText' => 'Simpan Slider'])
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection