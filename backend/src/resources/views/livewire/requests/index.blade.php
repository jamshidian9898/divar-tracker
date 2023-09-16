<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Requests List</h3>
                <p class="text-subtitle text-muted">
                    see your request tracking list and manage those
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Requests List
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">list of requests that you registered</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            {{-- <p class="card-text">
                                Using the most basic table up, here’s how
                                <code>.table</code>-based tables look in Bootstrap. You
                                can use any example of below table for your table and it
                                can be use with any type of bootstrap tables.
                            </p> --}}
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>#uid</th>
                                            <th>status</th>
                                            <th>price</th>
                                            <th>time spent</th>
                                            <th>finished time</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">12542</td>
                                            <td>done</td>
                                            <td class="text-bold-500">10.25$</td>
                                            <td class="text-bold-500">{{ now() }}</td>
                                            <td class="text-bold-500">{{ now() }}</td>
                                            <td class="text-bold-500">
                                                <a href="{{ route('request.show',1) }}" type="button" class="btn btn-primary">
                                                    show
                                                </a>
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
    </section>
</div>
