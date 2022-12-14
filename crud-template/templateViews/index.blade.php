@extends('admin.layouts.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('{index_route}.index') }}">
    <div class="container body">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>{{ $page_title }}</h2>
                                @if (session('success'))
                                    <div class="callout callout-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li>
                                        <a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <p class="text-muted font-13 m-b-30">
                                               <input type="text" class="form-control" id="search" placeholder="search...">
                                               <input type="hidden" class="form-control" id="status" value="">
                                            </p>
                                            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        {tcolumns}
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="body">
                                                    @foreach($models as $key=>$model)
                                                        <tr id="id-{{ $model->id }}">
                                                            <td>{{  $models->firstItem()+$key }}.</td>
                                                            {index}
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="{totalColumns}">
                                                            Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
                                                            <div class="d-flex justify-content-center">
                                                                {!! $models->links('pagination::bootstrap-4') !!}
                                                            </div>
                                                        </td>
                                                    </tr>
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
        </div>
    </div>
@endsection
@push('js')
@endpush
