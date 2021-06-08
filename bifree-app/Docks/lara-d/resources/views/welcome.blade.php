@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>ようこそBifree</h1>
    </div>
    <div class="d-flex flex-column align-items-center mt-5">
        <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
            <div class="card">
                <div class="card-header">
                    投稿の新規作成
                </div>
                <div class="card-body">
                    <form action="" class="upload">
                        <div class="md-form">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Text</label>
                            <textarea name="" id="" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="text-right mt-2">
                            <button class="btn btn-primary">投稿</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Sample</th>
                <th scope="col">Sample</th>
                <th scope="col">Sample</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Sample</th>
                <td>Sample</td>
                <td>Sample</td>
            </tr>
            <tr>
                <th scope="row">Sample</th>
                <td>Sample</td>
                <td>Sample</td>
            </tr>
            <tr>
                <th scope="row">Sample</th>
                <td>Sample</td>
                <td>Sample</td>
            </tr>
            <tr>
                <th scope="row">Sample</th>
                <td>Sample</td>
                <td>Sample</td>
            </tr>
        </tbody>
    </table>
    </div>
    
@endsection