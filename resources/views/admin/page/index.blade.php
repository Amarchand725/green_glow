@extends('admin.layouts.app')
@section('title', $page_title)
@section('content')
    <input type="hidden" id="page_url" value="{{ route('page.index') }}">
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>{{ $page_title }}</h2>
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
                                                        <th>Title</th>
                                                        <th>Meta Title</th>
                                                        <th>Meta Keyword</th>
                                                        <th>Meta Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="body">
                                                    @foreach ($models as $model)
                                                        <tr>
                                                            <td>{{ $model->title }}</td>
                                                            <td>{{ $model->meta_title }}</td>
                                                            <td>{{ $model->meta_keyword }}</td>
                                                            <td>{{ $model->meta_description }}</td>
                                                            <td>
                                                                @if($model->status)
                                                                    <span class="badge badge-success">Active</span>
                                                                @else
                                                                    <span class="badge badge-danger">In-Active</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('page.edit', $model->slug) }}" data-toggle="tooltip" data-placement="top" title="Edit Page" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                                <a href="{{ route('page.show', $model->slug) }}" data-toggle="tooltip" data-placement="top" title="Show Page Details" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                                <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Record" data-slug="{{ $model->slug }}" data-del-url="{{ url('blog', $model->slug) }}"><i class="fa fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="9">
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
