<div id="wrapper">
    <div class="content-area">
        <div class="container-fluid">
            <div class="main">
                <div class="row sparkboxes mt-4 mb-4">
                    <h2>Top 3 services</h2>
                    @foreach ($topServices as $index => $service)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center py-1" style="min-height: 100px">
                                    <h3>{{ $service->name }}</h3>
                                    <i class="ti ti-rosette-number-{{ $index + 1 }} fs-2"></i>
                                </div>
                                <div class="card-body p-0" id="spark{{ $index + 1 }}"></div>
                            </div>
                        </div>
                    @endforeach
                    <h2 class="mt-3">Earnigns by Category</h2>
                    <div id="donut" class="p-4 card w-100 my-2"></div>
                    <div class="row mt-4 mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body" id="bar"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Top Clients</h3>
                                    <ol>
                                        @foreach ($topClients as $client)
                                            <li>
                                                {{ $client->name . ' - $' . number_format($client->total_revenue, 2) }}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
