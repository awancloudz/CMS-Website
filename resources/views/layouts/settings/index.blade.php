@extends('layouts.index')

@section('content')
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Pengaturan</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{ url('user/admin') }}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Pengaturan
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header>PENGATURAN</header>
                                </div>
                                <div class="card-body ">
                                <form id="settings" class="form-style" name="sentMessage"  novalidate="" action="settings" method="PATCH">    
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <button id="addRow1" class="btn btn-success" type="submit" >
                                                    Simpan <i class="fa fa-save"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class = "mdl-tabs mdl-js-tabs">
                                        <div class = "mdl-tabs__tab-bar tab-left-side">
                                            <a href = "#tab1-panel" class = "mdl-tabs__tab tabs_three is-active">Umum</a>
                                            <a href = "#tab2-panel" class = "mdl-tabs__tab tabs_three">Halaman</a>
                                            <a href = "#tab3-panel" class = "mdl-tabs__tab tabs_three">Konfigurasi</a>
                                            <a href = "#tab4-panel" class = "mdl-tabs__tab tabs_three">Server Mail</a>
                                        </div>
                                        <!-- TAB #1 -->
                                        <div class = "mdl-tabs__panel is-active p-t-20" id = "tab1-panel">
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="webname">Nama Website</label>
                                                    <input type="text" class="form-control" id="webname" name="webname" placeholder="Masukkan nama website">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="weburl">URL Website</label>
                                                    <input type="text" class="form-control" id="weburl" name="weburl" placeholder="Masukkan url website">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="owner">Owner Website</label>
                                                    <input type="text" class="form-control" id="owner" name="owner" placeholder="Masukkan owner">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan phone">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fax">Fax</label>
                                                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Masukkan fax">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <textarea class="form-control" id="address" name="address" placeholder="Masukkan alamat"></textarea>
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country">Negara</label>
                                                    <input type="text" class="form-control" id="country" name="country" placeholder="Masukkan negara">
                                                </div>
                                            </div></div>
                                        </div>
                                        <!-- TAB #2 -->
                                        <div class = "mdl-tabs__panel p-t-20" id = "tab2-panel">
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fax">Logo</label><br>
                                                    <img src="{{ asset('/logo.png') }}" width="100">
                                                    <input type="file" class="default" name="logo" multiple>
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fax">Icon</label><br>
                                                    <img src="{{ asset('/favicon.ico') }}" width="100">
                                                    <input type="file" class="default" name="icon" multiple>
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="keyword">Meta Keyword</label>
                                                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Masukkan meta keyword">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="metadescription">Meta Description</label>
                                                    <input type="text" class="form-control" id="metadescription" name="metadescription" placeholder="Masukkan meta description">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="geocode">Geocode / Geolocation</label>
                                                    <input type="text" class="form-control" id="geocode" name="geocode" placeholder="Masukkan geocode">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="region">Region</label>
                                                    <input type="text" class="form-control" id="region" name="region" placeholder="Masukkan region">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timezone">Zona Waktu</label>
                                                    <input type="text" class="form-control" id="timezone" name="timezone" placeholder="Masukkan timezone">
                                                </div>
                                            </div></div>
                                        </div>
                                        <!-- TAB #3 -->
                                        <div class = "mdl-tabs__panel p-t-20" id = "tab3-panel">
                                            <div class="row">
                                                <div class="col-md-3">
                                                Maintenance
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="height:75px;">
                                                        <label class="switchToggle">
                                                            <input type="checkbox" name="maintenance" checked>
                                                            <span class="slider green round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                Registrasi Member
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="height:75px;">
                                                        <label class="switchToggle">
                                                            <input type="checkbox" name="registration" checked>
                                                            <span class="slider green round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                Izinkan Komentar
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="height:75px;">
                                                        <label class="switchToggle">
                                                            <input type="checkbox" name="comment" checked>
                                                            <span class="slider green round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="itemperpage">Item per Halaman</label>
                                                    <input type="text" class="form-control" id="itemperpage" name="itemperpage" placeholder="Item per Halaman">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="googleanalytics">ID Google Analytics</label>
                                                    <input type="text" class="form-control" id="googleanalytics" name="googleanalytics" placeholder="ID google analytics">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="recaptchasitekey">Recaptcha Sitekey</label>
                                                    <input type="text" class="form-control" id="recaptchasitekey" name="recaptchasitekey" placeholder="Recaptcha Sitekey">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="recaptchasecretkey">Recaptcha Secretkey</label>
                                                    <input type="text" class="form-control" id="recaptchasecretkey" name="recaptchasecretkey" placeholder="Recaptcha Secretkey">
                                                </div>
                                            </div></div>
                                        </div>
                                        <!-- TAB #4 -->
                                        <div class = "mdl-tabs__panel p-t-20" id = "tab4-panel">
                                            <div class="row"><div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="mailprotocol">Mail Protocol</label>
                                                    <select class="form-control select2" name="mailprotocol">
                                                    <option value="SMTP">SMTP</option>
                                                    <option value="Mail">Mail</option>
                                                    </select>
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mailhostname">Mail Hostname</label>
                                                    <input type="text" class="form-control" id="mailhostname" name="mailhostname" placeholder="Mail Hostname">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mailusername">Mail Username</label>
                                                    <input type="text" class="form-control" id="mailusername" name="mailusername" placeholder="Mail Username">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mailpassword">Mail Password</label>
                                                    <input type="password" class="form-control" id="mailpassword" name="mailpassword" placeholder="Mail Password">
                                                </div>
                                            </div></div>
                                            <div class="row"><div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mailport">Mail Port</label>
                                                    <input type="text" class="form-control" id="mailport" name="mailport" placeholder="Mail Port">
                                                </div>
                                            </div></div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection