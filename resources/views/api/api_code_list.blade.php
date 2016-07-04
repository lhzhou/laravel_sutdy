@extends('layout.layout')
@section('content')
    <div class="jumbotron" id="jumbotron">
        <form class="form-horizontal col-lg-12"  action="{{url('/api_code')}}" method="get">

            <div class="col-lg-4">

                <div class="form-group col-lg-12">
                    <label>ID</label>
                    <input type="text" class="form-control" name="id" placeholder="id" value="{{Request::input('id')}}">
                </div>

            </div>

            <div class="col-lg-4">

                <div class="form-group col-lg-12">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code" placeholder="code" value="{{Request::input('code')}}">
                </div>

            </div>

            <div class="col-lg-4">

                <div class="form-group col-lg-12">
                    <label>Message</label>
                    <input type="text" class="form-control" name="message" placeholder="message" value="{{Request::input('message')}}">
                </div>

            </div>


            <div class="col-lg-push-8 col-lg-4">
                <div class="col-lg-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">查询</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <div class="row">
        <div class="col-lg-2">
            <a class="btn btn-success btn-block" href="{{url('api_code/create')}}">添加消息</a>
        </div>
    </div>

    <div class="clearfix"></div>
    </br>
    <table class="table table-bordered table-striped">
        <thead>
        <td>ID</td>
        <td>Code</td>
        <td>消息</td>
        <td>创建时间</td>
        </thead>
        <tbody>
        @foreach($results AS $value )
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->code}}</td>
                <td>{{$value->message}}</td>
                <td>{{$value->created_at}}</td>
            </tr>
        @endforeach

        </tbody>

    </table>

@endsection