<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Panou</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Acasa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Panou</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Device-uri pornite</h6>
                                            <h2 class="mb-0 number-font"><?php echo $onlinedevices; ?></h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="saleschart"
                                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
<!--                                    <span class="text-muted fs-12"><span class="text-secondary"><i-->
<!--                                                class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>-->
<!--                                                    Last week</span>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Apa consumata flori</h6>
                                            <h2 class="mb-0 number-font">10L</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="leadschart"
                                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
<!--                                    <span class="text-muted fs-12"><span class="text-pink"><i-->
<!--                                                class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>-->
<!--                                                    Last 6 days</span>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Poarta</h6>
                                            <h2 class="mb-0 number-font">Inchisa</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="profitchart"
                                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-muted fs-12">Ultima data deschisa acum 3 ore</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Temperatura curenta</h6>
                                            <h2 class="mb-0 number-font"><?php echo round(intval($temperatura['main']['temp'])) ?>°C</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="costchart"
                                                        class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-muted fs-12"><?php echo $temperatura['weather'][0]['description']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 END -->

            <!-- ROW-2 -->
<!--            <div class="row">-->
<!--                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">-->
<!--                    <div class="card">-->
<!--                        <div class="card-header">-->
<!--                            <h3 class="card-title">Sales Analytics</h3>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <div class="d-flex mx-auto text-center justify-content-center mb-4">-->
<!--                                <div class="d-flex text-center justify-content-center me-3"><span-->
<!--                                        class="dot-label bg-primary my-auto"></span>Total Sales</div>-->
<!--                                <div class="d-flex text-center justify-content-center"><span-->
<!--                                        class="dot-label bg-secondary my-auto"></span>Total Orders</div>-->
<!--                            </div>-->
<!--                            <div class="chartjs-wrapper-demo">-->
<!--                                <canvas id="transactions" class="chart-dropshadow"></canvas>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">-->
<!--                    <div class="card overflow-hidden">-->
<!--                        <div class="card-body pb-0 bg-recentorder">-->
<!--                            <h3 class="card-title text-white">Recent Orders</h3>-->
<!--                            <div class="chartjs-wrapper-demo">-->
<!--                                <canvas id="recentorders" class="chart-dropshadow"></canvas>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div id="flotback-chart" class="flot-background"></div>-->
<!--                        <div class="card-body">-->
<!--                            <div class="d-flex mb-4 mt-3">-->
<!--                                <div-->
<!--                                    class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">-->
<!--                                    <i class="fe fe-check"></i>-->
<!--                                </div>-->
<!--                                <div class="">-->
<!--                                    <h6 class="mb-1 fw-semibold">Delivered Orders</h6>-->
<!--                                    <p class="fw-normal fs-12"> <span class="text-success">3.5%</span>-->
<!--                                        increased </p>-->
<!--                                </div>-->
<!--                                <div class=" ms-auto my-auto">-->
<!--                                    <p class="fw-bold fs-20"> 1,768 </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="d-flex">-->
<!--                                <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">-->
<!--                                    <i class="fe fe-x"></i>-->
<!--                                </div>-->
<!--                                <div class="">-->
<!--                                    <h6 class="mb-1 fw-semibold">Cancelled Orders</h6>-->
<!--                                    <p class="fw-normal fs-12"> <span class="text-success">1.2%</span>-->
<!--                                        increased </p>-->
<!--                                </div>-->
<!--                                <div class=" ms-auto my-auto">-->
<!--                                    <p class="fw-bold fs-20 mb-0"> 3,675 </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- ROW-2 END -->

            <!-- ROW-3 -->
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title fw-semibold">Loguri</h4>
                        </div>
                        <div class="card-body pb-0">
                            <ul class="task-list">
                                <?php foreach ($logs as $log) { ?>
                                    <li class="d-sm-flex">
                                        <div>
                                            <?php switch ($log['action']) {
                                                case 'turnon':
                                                    ?><i class="task-icon bg-success"></i><?php
                                                    break;
                                                case 'turnoff':
                                                    ?><i class="task-icon bg-danger"></i><?php
                                                    break;
                                                default:
                                                    ?><i class="task-icon bg-primary"></i><?php
                                                    break;
                                            } ?>
                                            <h6 class="fw-semibold"><?php echo $log['device']; ?><span
                                                        class="text-muted fs-11 mx-2 fw-normal"><?php echo $log['timestamp']; ?></span>
                                            </h6>
                                            <p class="text-muted fs-12"><?php echo $log['message']; ?></p>
                                        </div>
<!--                                        <div class="ms-auto d-md-flex">-->
<!--                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"-->
<!--                                               data-bs-placement="top" title="Edit" aria-label="Edit"><span-->
<!--                                                        class="fe fe-edit"></span></a>-->
<!--                                            <a href="javascript:void(0)" class="text-muted"><span-->
<!--                                                        class="fe fe-trash-2"></span></a>-->
<!--                                        </div>-->
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
<!--                <div class="col-xl-4 col-lg-6 col-md-12">-->
<!--                    <div class="card overflow-hidden">-->
<!--                        <div class="card-header">-->
<!--                            <div>-->
<!--                                <h3 class="card-title">Sales Report by Locations with Devices</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="card-body p-0 mt-2">-->
<!--                            <div class="">-->
<!--                                <div id="world-map-markers1" class="worldh world-map h-250"></div>-->
<!--                            </div>-->
<!--                            <div class="table-responsive mt-2 text-center">-->
<!--                                <table class="table text-nowrap border-dashed mb-0">-->
<!--                                    <thead>-->
<!--                                    <tr>-->
<!--                                        <th class="text-start">Device</th>-->
<!--                                        <th class="">USA</th>-->
<!--                                        <th class="">India</th>-->
<!--                                        <th class="">Bahrain</th>-->
<!--                                    </tr>-->
<!--                                    </thead>-->
<!--                                    <tbody>-->
<!--                                    <tr>-->
<!--                                        <td class="text-start p-4"><span-->
<!--                                                class="sales-icon text-primary mx-2 brround bg-primary-transparent p-2"><svg-->
<!--                                                    xmlns="http://www.w3.org/2000/svg" width="18"-->
<!--                                                    height="18" fill="currentColor" class="bi-->
<!--                                    bi-phone" viewBox="0 0 16 16">-->
<!--                                                                    <path-->
<!--                                                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />-->
<!--                                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />-->
<!--                                                                </svg></span><span class="mobile">Mobiles</span>-->
<!--                                        </td>-->
<!--                                        <td class="p-4">17%</td>-->
<!--                                        <td class="p-4">22%</td>-->
<!--                                        <td class="p-4">11%</td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->
<!--                                        <td class="text-start p-4"><span-->
<!--                                                class="sales-icon text-secondary mx-2 brround bg-secondary-transparent p-2"><svg-->
<!--                                                    xmlns="http://www.w3.org/2000/svg" width="18"-->
<!--                                                    height="18" fill="currentColor-->
<!--                                " class="bi bi-display" viewBox="0 0 16 16">-->
<!--                                                                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46-->
<!--                                    0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757-->
<!--                                    0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />-->
<!--                                                                </svg></span>Desktops</td>-->
<!--                                        <td class="p-4">34%</td>-->
<!--                                        <td class="p-4">76%</td>-->
<!--                                        <td class="p-4">58%</td>-->
<!--                                    </tr>-->
<!--                                    <tr>-->
<!--                                        <td class="text-start p-4"><span-->
<!--                                                class="sales-icon text-danger mx-2 brround bg-danger-transparent p-2"><svg-->
<!--                                                    xmlns="http://www.w3.org/2000/svg" width="18"-->
<!--                                                    height="18" fill="currentColor" class="bi bi-tablet-->
<!--                                " viewBox="0 0 16 16">-->
<!--                                                                    <path-->
<!--                                                                        d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />-->
<!--                                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />-->
<!--                                                                </svg></span>Tablets</td>-->
<!--                                        <td class="p-4">56%</td>-->
<!--                                        <td class="p-4">83%</td>-->
<!--                                        <td class="p-4">66%</td>-->
<!--                                    </tr>-->
<!--                                    </tbody>-->
<!--                                </table>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-xl-4 col-lg-6 col-md-12">-->
<!--                    <div class="card">-->
<!--                        <div class="card-header">-->
<!--                            <h4 class="card-title fw-semibold">Browser Usage</h4>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <div class="browser-stats">-->
<!--                                <div class="row mb-4">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/chrome.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">Chrome</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">35,502 <span-->
<!--                                                    class="text-success fs-11">(<i-->
<!--                                                        class="fe fe-arrow-up"></i>12.75%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-primary" style="width: 70%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mb-4">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/opera.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">Opera</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">12,563 <span-->
<!--                                                    class="text-danger fs-11">(<i-->
<!--                                                        class="fe fe-arrow-down"></i>15.12%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-secondary" style="width: 40%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mb-4">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/ie.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">IE</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">25,364 <span-->
<!--                                                    class="text-success fs-11">(<i-->
<!--                                                        class="fe fe-arrow-down"></i>24.37%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-success" style="width: 50%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mb-4">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/firefox.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">Firefox</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">14,635 <span-->
<!--                                                    class="text-success fs-11">(<i-->
<!--                                                        class="fe fe-arrow-down"></i>15.63%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-danger" style="width: 50%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mb-4">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/edge.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">Edge</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">15,453 <span-->
<!--                                                    class="text-danger fs-11">(<i-->
<!--                                                        class="fe fe-arrow-down"></i>23.70%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-warning" style="width: 10%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row mb-4">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/safari.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">Safari</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">10,054 <span-->
<!--                                                    class="text-success fs-11">(<i-->
<!--                                                        class="fe fe-arrow-up"></i>11.04%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-info" style="width: 40%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">-->
<!--                                        <img src="../assets/images/browsers/netscape.svg" class="img-fluid"-->
<!--                                             alt="img">-->
<!--                                    </div>-->
<!--                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">-->
<!--                                        <div class="d-flex align-items-end justify-content-between mb-1">-->
<!--                                            <h6 class="mb-1">Netscape</h6>-->
<!--                                            <h6 class="fw-semibold mb-1">35,502 <span-->
<!--                                                    class="text-success fs-11">(<i-->
<!--                                                        class="fe fe-arrow-up"></i>12.75%)</span></h6>-->
<!--                                        </div>-->
<!--                                        <div class="progress h-2 mb-3">-->
<!--                                            <div class="progress-bar bg-green" style="width: 30%;"-->
<!--                                                 role="progressbar"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <!-- ROW-3 END -->

        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<!--app-content close-->
<!-- SPARKLINE JS-->
<script src="https://dekolor.ro/assets/js/jquery.sparkline.min.js"></script>
<!-- CHART-CIRCLE JS-->
<script src="https://dekolor.ro/assets/js/circle-progress.min.js"></script>

<!-- PIETY CHART JS-->
<script src="https://dekolor.ro/assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="https://dekolor.ro/assets/plugins/peitychart/peitychart.init.js"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="https://dekolor.ro/assets/plugins/chart/Chart.bundle.js"></script>
<script src="https://dekolor.ro/assets/plugins/chart/rounded-barchart.js"></script>
<script src="https://dekolor.ro/assets/plugins/chart/utils.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="https://dekolor.ro/assets/plugins/select2/select2.full.min.js"></script>

<!-- INTERNAL Data tables js-->
<script src="https://dekolor.ro/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="https://dekolor.ro/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="https://dekolor.ro/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="https://dekolor.ro/assets/js/apexcharts.js"></script>
<script src="https://dekolor.ro/assets/plugins/apexchart/irregular-data-series.js"></script>

<!-- C3 CHART JS -->
<script src="https://dekolor.ro/assets/plugins/charts-c3/d3.v5.min.js"></script>
<script src="https://dekolor.ro/assets/plugins/charts-c3/c3-chart.js"></script>

<!-- CHART-DONUT JS -->
<script src="https://dekolor.ro/assets/js/charts.js"></script>

<!-- INTERNAL Flot JS -->
<script src="https://dekolor.ro/assets/plugins/flot/jquery.flot.js"></script>
<script src="https://dekolor.ro/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="https://dekolor.ro/assets/plugins/flot/chart.flot.sampledata.js"></script>
<script src="https://dekolor.ro/assets/plugins/flot/dashboard.sampledata.js"></script>

<!-- INTERNAL Vector js -->
<script src="https://dekolor.ro/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="https://dekolor.ro/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="https://dekolor.ro/assets/js/index1.js"></script>
