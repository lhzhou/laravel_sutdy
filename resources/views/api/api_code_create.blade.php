@extends('layout.layout')
@section('content')
    <form class="form-horizontal" method="post" action="{{url('api_code')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label  class="col-sm-2 control-label">Code</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="code" placeholder="code" required>
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="message" placeholder="Message" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">创建代码</button>
            </div>
        </div>

    </form>
@endsection