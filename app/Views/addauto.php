<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <h1 class="page-title">Adauga Automatizare</h1>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <!-- Row -->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pas 1</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="row mb-4">
<!--                                            <label for="inputName" class="col-md-3 form-label">User Name</label>-->
<!--                                            <div class="col-md-9">-->
<!--                                                <div class="btn-group radiobtns" role="group" aria-label="Basic radio toggle button group">-->
<!--                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio111" checked="">-->
<!--                                                    <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>-->
<!---->
<!--                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio112">-->
<!--                                                    <label class="btn btn-outline-primary br-0" for="btnradio2">Radio 2</label>-->
<!---->
<!--                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio113">-->
<!--                                                    <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                            <h3 style="text-align:center;">Alege cum vrei sa ruleze automatizarea:</h3>
                                            <div class="d-flex justify-content-center">
                                                <a href="<?php echo base_url('auto/add/time'); ?>" class="btn btn-info" style="margin: 10px;">La o anumita ora</a>
                                                <a href="<?php echo base_url('auto/add/sunset'); ?>" class="btn btn-info" style="margin: 10px;">La rasarit/apus</a>
                                                <a href="<?php echo base_url('auto/add/temp'); ?>" class="btn btn-info" style="margin: 10px;">In functie de temperatura</a>
                                                <a href="<?php echo base_url('auto/add/device'); ?>" class="btn btn-info" style="margin: 10px;">In functie de alt device</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!--app-content closed-->
    </div>
</div>