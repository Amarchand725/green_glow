@extends('admin.layouts.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('menu.index') }}">
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
                                                        <th>SL</th>
                                                        <th>Menu of</th>
                                                        <th>Icon</th>
                                                        <th>Label</th>
                                                        <th>Parent</th>
                                                        <th>Menu</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="body">
                                                    @foreach($models as $key=>$menu)
                                                        <tr id="id-{{ $menu->id }}" class="id-{{ $menu->id }}">
                                                            <td>{{  $models->firstItem()+$key }}.</td>
                                                            <td>{{ Str::ucfirst($menu->menu_of) }}</td>
                                                            <td>{!! $menu->icon !!}</td>
                                                            <td>{{ Str::ucfirst($menu->label) }}</td>
                                                            <td>{{ isset($menu->hasParent)?$menu->hasParent->menu:'--' }}</td>
                                                            <td>{{$menu->menu}}</td>
                                                            <td>
                                                                @if($menu->status)
                                                                    <span class="badge badge-success">Active</span>
                                                                @else
                                                                    <span class="badge badge-danger">In-Active</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                                @if($menu->menu != 'Menu' && $menu->menu != 'Role' && $menu->menu != 'Page')
                                                                    <button class="btn btn-danger btn-sm delete" data-slug="{{ $menu->id }}" data-del-url="{{ route('menu.destroy', $menu->id) }}"><i class="fa fa-trash"></i> Delete</button>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="8">
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
