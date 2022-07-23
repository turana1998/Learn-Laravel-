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
                                    <h6 class="mb-0">Kateqoriya Yarat</h6>
                                    <button type="button"
                                            class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="See traffic channels">
                                        <i class="material-icons text-sm">priority_high</i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body pb-0 p-3 mt-4">
                                <form
                                   method="post"
                                   action="{{route('subcategories.store')}}">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Title en</label>
                                        <input type="text" name="title_en" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Title ru</label>
                                        <input type="text" name="title_ru" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <select name="category_id" class="form-control">
                                            <option selected disabled="disabled">Kateqoriyalar</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
