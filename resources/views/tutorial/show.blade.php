@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <table id="order-listing" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title </th>
                        <th>Category_id</th>
                        <th>description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$tutorial->title}}</td>
                        <td>{{$tutorial->category_id}}</td>
                        <td>{{$tutorial->description}}</td>
                    </tr>
                    </tbody>
                </table>
            {{--<div>--}}
                {{--Tutorial Title--}}
                {{--Category-id--}}
                {{--Description--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--{{ $tutorial->title }}--}}
                {{--{{ $tutorial->category_id }}--}}
                {{--{{ $tutorial->description }}--}}
            {{--</div>--}}
            </div>
</div>
</div>
</div>
@endsection