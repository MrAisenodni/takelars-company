@extends('admin.layouts.main')

@section('styles')
    <link href="{{ asset('/admin/plugins/jquery-ui/smoothness/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{ asset('/admin/plugins/datepicker/css/datepicker.css') }}" rel="stylesheet" type="text/css" media="screen"/>   
    <link href="{{ asset('/admin/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" media="screen"/>    
@endsection

@section('scripts')
    <script src="{{ asset('/admin/plugins/jquery-ui/smoothness/jquery-ui.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('/admin/plugins/datepicker/js/datepicker.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('/admin/plugins/autosize/autosize.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/admin/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
@endsection

@section('content')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Profil Perusahaan</h1>                            
                </div>

                <div class="float-right d-none">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/"><i class="fa fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Profil Perusahaan</a>
                        </li>
                        <li class="active">
                            <strong>Profil Perusahaan</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        @if (session()->get('status'))
            <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
        <div class="col-xl-12 col-lg-12 col-12 col-md-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title float-left">Informasi Perusahaan</h2>
                    <div class="actions panel_actions float-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        {{-- <i class="box_close fa fa-times"></i> --}}
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <form action="{{ $path }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $provider->id }}">
                            <input type="hidden" name="segment" value="company">
                            <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                <div class="form-group">
                                    <label class="form-label" for="company_name">Nama Perusahaan</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="{{ old('company_name', $provider->company_name) }}" name="company_name" class="form-control" id="company_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="company_birth_place">Lokasi Didirikan</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="{{ old('company_birth_place', $provider->company_birth_place) }}" name="company_birth_place" class="form-control" id="company_birth_place">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="company_birth_date">Tanggal Didirikan</label>
                                            <span class="desc">e.g. "04/03/2015"</span>
                                            <div class="controls">
                                                <input id="company_birth_date" type="text" class="form-control datepicker" name="company_birth_date" data-format="mm/dd/yyyy" 
                                                    @if ($provider->company_birth_date)
                                                        value="{{ old('company_birth_date', date('d/m/Y', strtotime($provider->company_birth_date))) }}" 
                                                    @else
                                                        value="{{ old('company_birth_date') }}"
                                                    @endif
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="company_logo_text">Logo Utama</label>
                                            <span class="desc"></span>
                                            <img class="img-fluid" src="{{ $provider->company_logo_text }}" alt="" style="max-width:120px; max-height: 30px">
                                            <div class="controls">
                                                <input type="hidden" name="old_company_logo_text" value="{{ $provider->company_logo_text }}">
                                                <input type="file" name="company_logo_text" class="form-control" id="company_logo_text" value="{{ old('company_logo_text') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="company_logo">Logo Icon</label>
                                            <span class="desc"></span>
                                            <img class="img-fluid" src="{{ $provider->company_logo }}" alt="" style="max-width:120px; max-height: 30px">
                                            <div class="controls">
                                                <input type="hidden" name="old_company_logo" value="{{ $provider->company_logo }}">
                                                <input type="file" name="company_logo" class="form-control" id="company_logo" value="{{ old('company_logo') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="company_email">Email</label>
                                            <span class="desc">e.g. "example@exam.com"</span>
                                            <div class="controls">
                                                <input type="email" value="{{ old('company_email', $provider->company_email) }}" name="company_email" class="form-control" id="company_email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="company_phone_number">Nomor Telepon</label>
                                            <span class="desc">e.g. "6285889784451"</span>
                                            <div class="controls">
                                                <input type="text" value="{{ old('company_phone_number', $provider->company_phone_number) }}" name="company_phone_number" class="form-control" id="company_phone_number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="company_address">Alamat Perusahaan</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <textarea class="form-control autogrow" name="company_address" cols="5" id="company_address">{{ old('company_address', $provider->company_address) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="company_description">Deskripsi</label>
                                    <span class="desc">e.g. "Masukkan deskripsi"</span>
                                    <div class="controls">
                                        <textarea class="form-control autogrow" name="company_description" cols="5" id="company_description">{{ old('company_description', $provider->company_description) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-xl-12 col-lg-12 col-12 col-md-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title float-left">Informasi Pemilik Perusahaan</h2>
                    <div class="actions panel_actions float-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        {{-- <i class="box_close fa fa-times"></i> --}}
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <form action="{{ $path }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $provider->id }}">
                            <input type="hidden" name="segment" value="owner">
                            <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                <div class="form-group">
                                    <label class="form-label" for="owner_name">Nama Lengkap</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="{{ old('owner_name', $provider->owner_name) }}" name="owner_name" class="form-control" id="owner_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="owner_position">Posisi</label>
                                    <span class="desc"></span>
 
                                    <div class="controls">
                                        <select class="select2" id="owner_position" name="owner_position">
                                            @if ($positions)
                                                @foreach ($positions as $position)
                                                    <option value="{{ $position->id }}"
                                                        @if (old('owner_position', $provider->owner_position_id) == $position->id)
                                                            selected
                                                        @endif
                                                    >{{ $position->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="owner_birth_place">Tempat Lahir</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="{{ old('owner_birth_place', $provider->owner_birth_place) }}" name="owner_birth_place" class="form-control" id="owner_birth_place">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="owner_birth_date">Tanggal Lahir</label>
                                            <span class="desc">e.g. "04/03/2015"</span>
                                            <div class="controls">
                                                <input id="owner_birth_date" type="text" class="form-control datepicker" name="owner_birth_date" data-format="mm/dd/yyyy" 
                                                    @if ($provider->owner_birth_date)
                                                        value="{{ old('owner_birth_date', date('d/m/Y', strtotime($provider->owner_birth_date))) }}" 
                                                    @else
                                                        value="{{ old('owner_birth_date') }}"
                                                    @endif
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="owner_photo">Foto Pemilik</label>
                                    <span class="desc"></span>
                                    <img class="img-fluid" src="{{ $provider->owner_photo }}" alt="" style="max-width:120px; max-height: 30px">
                                    <div class="controls">
                                        <input type="hidden" name="old_owner_photo" value="{{ $provider->owner_photo }}">
                                        <input type="file" name="owner_photo" class="form-control" id="owner_photo" value="{{ old('owner_photo') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="owner_email">Email</label>
                                            <span class="desc">e.g. "example@exam.com"</span>
                                            <div class="controls">
                                                <input type="email" value="{{ old('owner_email', $provider->owner_email) }}" name="owner_email" class="form-control" id="owner_email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="owner_phone_number">Nomor Telepon</label>
                                            <span class="desc">e.g. "6285889784451"</span>
                                            <div class="controls">
                                                <input type="text" value="{{ old('owner_phone_number', $provider->owner_phone_number) }}" name="owner_phone_number" class="form-control" id="owner_phone_number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="owner_address">Alamat</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <textarea class="form-control autogrow" name="owner_address" cols="5" id="owner_address">{{ old('owner_address', $provider->owner_address) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section></div>

        <div class="col-xl-12 col-lg-12 col-12 col-md-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title float-left">Informasi Sosial Media</h2>
                    <div class="actions panel_actions float-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        {{-- <i class="box_close fa fa-times"></i> --}}
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <form action="{{ $path }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $provider->id }}">
                            <input type="hidden" name="segment" value="social">
                            <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                <div class="form-group">
                                    <label class="form-label" for="company_facebook">URL Facebook</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="{{ old('company_facebook', $provider->company_facebook) }}" name="company_facebook" class="form-control" id="company_facebook">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="company_twitter">URL Twitter</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="{{ old('company_twitter', $provider->company_twitter) }}" name="company_twitter" class="form-control" id="company_twitter">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="company_instagram">URL Instagram</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="{{ old('company_instagram', $provider->company_instagram) }}" name="company_instagram" class="form-control" id="company_instagram">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="company_linkedin">URL LinkedIn</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="{{ old('company_linkedin', $provider->company_linkedin) }}" name="company_linkedin" class="form-control" id="company_linkedin">
                                    </div>
                                </div>

                                <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </section></div>

    </section>
</section>
@endsection