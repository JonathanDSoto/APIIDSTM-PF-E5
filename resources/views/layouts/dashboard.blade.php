<div id="wrapper">
    <div class="content-area">
        <div class="container-fluid">
            <div class="main">
                <div class="row sparkboxes mt-4 mb-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div
                                class="card-header d-flex justify-content-between py-1"
                            >
                                <h3>Senderismo</h3>
                                <i
                                    class="ti ti-rosette-number-{{ 1 }} fs-2"
                                ></i>
                            </div>
                            <div class="card-body p-0" id="spark1"></div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-md-4">
                        <div class="card">
                            <div
                                class="card-header d-flex justify-content-between py-1"
                            >
                                <h3>Senderismo</h3>
                                <i
                                    class="ti ti-rosette-number-{{ 2 }} fs-2"
                                ></i>
                            </div>
                            <div class="card-body p-0" id="spark2"></div>
                        </div>
                    </div>
                    <!-- / -->

                    <!--  -->
                    <div class="col-md-4">
                        <div class="card">
                            <div
                                class="card-header d-flex justify-content-between py-1"
                            >
                                <h3>Senderismo</h3>
                                <i
                                    class="ti ti-rosette-number-{{ 3 }} fs-2"
                                ></i>
                            </div>
                            <div class="card-body p-0" id="spark3"></div>
                        </div>
                    </div>
                    <!--  -->
                </div>

                <div class="row mt-5 mb-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body" id="bar"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body" id="donut"></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-4">
                    <div class="col-md-6">
                        <div class="box">
                            <div id="area"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div id="line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
