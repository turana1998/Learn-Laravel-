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
                                                Name
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Position
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Office
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Age
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Start date
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Salary
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
                                        <tr>
                                            <td class="text-sm font-weight-normal">Garrett Winters</td>
                                            <td class="text-sm font-weight-normal">Accountant</td>
                                            <td class="text-sm font-weight-normal">Tokyo</td>
                                            <td class="text-sm font-weight-normal">63</td>
                                            <td class="text-sm font-weight-normal">2011/07/25</td>
                                            <td class="text-sm font-weight-normal">$170,750</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">Ashton Cox</td>
                                            <td class="text-sm font-weight-normal">
                                                Junior Technical Author
                                            </td>
                                            <td class="text-sm font-weight-normal">San Francisco</td>
                                            <td class="text-sm font-weight-normal">66</td>
                                            <td class="text-sm font-weight-normal">2009/01/12</td>
                                            <td class="text-sm font-weight-normal">$86,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">Cedric Kelly</td>
                                            <td class="text-sm font-weight-normal">
                                                Senior Javascript Developer
                                            </td>
                                            <td class="text-sm font-weight-normal">Edinburgh</td>
                                            <td class="text-sm font-weight-normal">22</td>
                                            <td class="text-sm font-weight-normal">2012/03/29</td>
                                            <td class="text-sm font-weight-normal">$433,060</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">Airi Satou</td>
                                            <td class="text-sm font-weight-normal">Accountant</td>
                                            <td class="text-sm font-weight-normal">Tokyo</td>
                                            <td class="text-sm font-weight-normal">33</td>
                                            <td class="text-sm font-weight-normal">2008/11/28</td>
                                            <td class="text-sm font-weight-normal">$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">Brielle Williamson</td>
                                            <td class="text-sm font-weight-normal">
                                                Integration Specialist
                                            </td>
                                            <td class="text-sm font-weight-normal">New York</td>
                                            <td class="text-sm font-weight-normal">61</td>
                                            <td class="text-sm font-weight-normal">2012/12/02</td>
                                            <td class="text-sm font-weight-normal">$372,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">Herrod Chandler</td>
                                            <td class="text-sm font-weight-normal">Sales Assistant</td>
                                            <td class="text-sm font-weight-normal">San Francisco</td>
                                            <td class="text-sm font-weight-normal">59</td>
                                            <td class="text-sm font-weight-normal">2012/08/06</td>
                                            <td class="text-sm font-weight-normal">$137,500</td>
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
