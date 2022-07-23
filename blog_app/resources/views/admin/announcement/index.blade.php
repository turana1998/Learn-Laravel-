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
                                    <h6 class="mb-0">Elanlar</h6>
                                    <a href="{{ route('announcement.create') }}" class="btn btn-primary">Add</a>
                                </div>
                            </div>
                            <div class="card-body pb-0 p-3 mt-4">
                                <div class="table-responsive">
                                    <table class="table table-flush" id="datatable-basic">
                                        <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Id
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                category
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                SubCategory
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Company Name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Title
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-sm font-weight-normal">Tiger Nixon</td>
                                            <td class="text-sm font-weight-normal">System Architect</td>
                                            <td class="text-sm font-weight-normal">Edinburgh</td>
                                            <td class="text-sm font-weight-normal">61</td>
                                            <td class="text-sm font-weight-normal">2011/04/25</td>
                                            <td class="text-sm font-weight-normal">$320,800</td>
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
@endsection
