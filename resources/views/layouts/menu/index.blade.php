@extends('layouts.index')

@section('content')
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Menu Manager</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('user/admin') }}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Menu Manager
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>MENU MANAGER</header>
                                </div>
                                <div class="card-body ">
                                    <div class = "mdl-tabs mdl-js-tabs">
                                        <div class = "mdl-tabs__tab-bar tab-left-side">
                                            <a href = "#tab1-panel" class = "mdl-tabs__tab tabs_three is-active">Group Menu</a>
                                            <a href = "#tab2-panel" class = "mdl-tabs__tab tabs_three">Menu Navigasi</a>
                                        </div>
                                        <!-- TAB #1 -->
                                        <div class = "mdl-tabs__panel is-active p-t-20" id = "tab1-panel">
                                            <div class="row p-b-20">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <button id="addRow1" class="btn btn-info">
                                                            Group Menu Baru <i class="fa fa-plus"></i>
                                                        </button>
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
                                                        <th> Grup / Penempatan Menu </th>
                                                        <th> Status </th>
                                                        <th> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $datagrup = App\Groupmenu::all();
                                                ?>
                                                @if(count($data) > 0)
                                                    @foreach($datagrup as $grup)
                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td> {{ $grup->title }} </td>
                                                        <td>
                                                            @if($grup->active == 'Y')
                                                            <span class="label label-sm label-success"> Aktif </span>
                                                            @else
                                                            <span class="label label-sm label-danger"> NonAktif </span>
                                                            @endif
                                                        </td>
                                                        <td >
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- TAB #2 -->
                                        <div class = "mdl-tabs__panel p-t-20" id = "tab2-panel">
                                            <div class="row p-b-20">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <button id="addRow1" class="btn btn-info">
                                                            Menu Navigasi Baru <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover table-checkable order-column" style="width: 100%" id="example5">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                                <span></span>
                                                            </label>
                                                        </th>
                                                        <th> Group</th>
                                                        <th> Judul</th>
                                                        <th> Link</th>
                                                        <th> Status </th>
                                                        <th> Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($data) > 0)
                                                    @foreach($data as $nav)
                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                                <input type="checkbox" class="checkboxes" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td> {{ $nav->groupmenu->title }} </td>
                                                        <td> {{ $nav->title }} </td>
                                                        <td> {{ $nav->link }} </td>
                                                        <td>
                                                            @if($nav->active == 'Y')
                                                            <span class="label label-sm label-success"> Aktif </span>
                                                            @else
                                                            <span class="label label-sm label-danger"> NonAktif </span>
                                                            @endif
                                                        </td>
                                                        <td >
                                                            <button class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-xs">
                                                                <i class="fa fa-trash-o "></i>
                                                            </button>
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
                </div>
            </div>
@endsection