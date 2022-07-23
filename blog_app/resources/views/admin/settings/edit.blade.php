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
                                    <h6 class="mb-0">Settings</h6>
                                    <button type="button"
                                            class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="See traffic channels">
                                        <i class="material-icons text-sm">priority_high</i>
                                    </button>
                                </div>
                            </div>
                            @if(Session::has('success'))
                                <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
                            <div class="card-body pb-0 p-3 mt-4">
                                <form enctype="multipart/form-data"
                                      method="post"
                                      action="{{route('settings.update',$setting->id)}}" >
                                    @csrf
                                    @method('put')
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Current logo</label>
                                        <img  src="{{asset('storage/settings/'.$setting->logo)}}" width="150px "/>
                                    </div>
                                    <div class="">
                                        <label class="form-label">Logo</label>
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" value="{{$setting->title}}" name="title" class="form-control">
                                    </div>
                                    @error('title')
                                      <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Description</label>
                                        <input type="text" value="{{$setting->description}}" name="description" class="form-control">
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Description En</label>
                                        <input type="text" value="{{$setting->description_en}}" name="description_en" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Description Ru</label>
                                        <input type="text" value="{{$setting->description_ru}}" name="description_ru" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Keywords</label>
                                        <input type="text" value="{{$setting->keywords}}" name="keywords" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" value="{{$setting->phone}}" name="phone" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Location</label>
                                        <input type="text" value="{{$setting->location}}" name="location" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Location En</label>
                                        <input type="text" value="{{$setting->location_en}}" name="location_en" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Location Ru</label>
                                        <input type="text" value="{{$setting->location_ru}}" name="location_ru" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" value="{{$setting->email}}" name="email" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" value="{{$setting->facebook}}" name="facebook" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Instagram</label>
                                        <input type="text" value="{{$setting->instagram}}" name="instagram" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" value="{{$setting->twitter}}" name="twitter" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Linkedin</label>
                                        <input type="text" value="{{$setting->linkedin}}" name="linkedin" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
