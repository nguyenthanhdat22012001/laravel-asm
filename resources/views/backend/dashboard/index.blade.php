@extends('layout.backend')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Popover & Tooltip</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        components
                    </li>
                    <li class="breadcrumb-item" aria-current="page">popover-tooltip</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Popover Basic</h2>
                    </div>
                    <div class="card-body">
                        <p class="pb-5">
                            Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site. Read bootstrap documentation for
                            <a href="https://getbootstrap.com/docs/4.1/components/popovers/" target="_blank">more details.</a>
                        </p>
                        <button type="button" class="btn mb-1 btn-primary btn-pill" data-toggle="popover" title="Popover Title" data-content="Lorem ipsum dolor sit amet consectetur elit sed do.">Launch popover</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <table id="basic-data-table" class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Extn.</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Tiger</td>
                            <td>Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>5421</td>
                            <td>t.nixon@datatables.net</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop