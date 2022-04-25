@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                            {{-- <li class="breadcrumb-item active">Главная v1</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST"
                        class="w-50">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Текст</label>
                            <textarea class="form-control" name="message" cols="30" rows="3">{{ $comment->message }}</textarea>
                            @error('message')
                                <div class="text-danger">Это поле необходимо для заполения</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Обновить">

                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
