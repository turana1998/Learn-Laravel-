@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="row mt-4">
                    <div class="col-12 ">
                        <div class="card h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0">Kateqoriyalar</h6>
                                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add</a>
                                </div>
                            </div>
                            @if(Session::has('success'))
                                <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
                            <div class="card-body pb-0 p-3 mt-4">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-basic">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Title
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Slug
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td class="text-sm font-weight-normal">{{$category->title}}</td>
                                            <td class="text-sm font-weight-normal">{{$category->slug}}</td>
                                            <td class="text-sm font-weight-normal">
                                                <a href="" class="btn btn-danger">Delete</a>
                                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
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
@endsection
