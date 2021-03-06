@extends('admin.dashboard')
@section('content')

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong><h3>Sửa thông tin</h3></strong></div>

                    <div class="card-body" >
                        <form method="POST" action="" enctype="multipart/form-data" >
                            @csrf
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8" style="background-color:#f2f2f2;border:inset"><br>
                            <div class="form-group row">

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Source</label>
                                <div class="col-md-12">
                                    <input id="source"  type="text" class="form-control @error('source') is-invalid @enderror" name="source" value="{{ $user->source }}" required autocomplete="" autofocus>

                                    @error('source')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">

                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Member_id</label>
                                <div class="col-md-12">
                                    <input id="member_id"   type="text" class="form-control @error('member_id') is-invalid @enderror" name="member_id" value="{{ $user->member_id }}" required autocomplete="member_id" >

                                    @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Username</label>
                                <div class="col-md-12">
                                    <input id="username"   type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user-> username }}" required autocomplete="username" >

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                            <label for="name" class="col-md-2col-form-label text-md-right">&emsp;Action</label>

                                <div class="col-md-12">
                                    <select id="action"   type="text" class="form-control @error('action') is-invalid @enderror" name="action" value="{{ $user->action }}" required autocomplete="action" >
                                    <option value="0">Click</option>
                                    <option value="1">Đăng ký</option>
                                    <option value="2">Đăng nhập</option>
                                    </select><br>

                                    @error('action')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" style="width:75px;height:50px" class="btn btn-success">
                                       SAVE
                                    </button>

                                </div>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
