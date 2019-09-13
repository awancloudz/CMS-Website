@extends('layouts.index')

@section('content')
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Slider Images</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('user/admin') }}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Frontpage Website</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Slider Images</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        @include('_partial.flash_message')
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>DAFTAR SLIDER IMAGE</header>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a class="btn btn-info" href="{{ url('user/admin/slider/create') }}">
                                                    Slide Baru <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover table-checkable order-column" style="width: 100%" id="example4">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> Gambar </th>
                                                <th> Judul </th>
                                                <th> Link </th>
                                                <th> Status </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($data) > 0)
                                            @foreach($data as $slide)
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><img src="{{ asset('slider/'.$slide->picture)}}" width="100" heigth="100"></td>
                                                <td> {{ $slide->title }} </td>
                                                <td>{{ $slide->link }}</td>
                                                <td>
                                                    @if($slide->active == 'Y')
                                                    <span class="label label-sm label-success"> Aktif </span>
                                                    @else
                                                    <span class="label label-sm label-danger"> NonAktif </span>
                                                    @endif
                                                </td>
                                                <td >
                                                    <a class="btn btn-primary btn-xs" href="{{ url('user/admin/slider/edit/'.$slide->id) }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a class="btn btn-danger btn-xs" href="{{ url('user/admin/slider/id/'.$slide->id) }}">
                                                        <i class="fa fa-trash-o "></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection