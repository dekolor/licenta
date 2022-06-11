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
                                    <h4 class="card-title">Pas 2</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class=" row mb-4">
                                            <label for="inputTemp" class="col-md-3 form-label">Temperatura</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" id="inputTemp" placeholder="30°C">
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label for="inputOra" class="col-md-3 form-label">Ruleaza daca</label>
                                            <div class="col-md-9">
                                                <select name="country" class="form-control form-select" data-bs-placeholder="e mai cald fata de temperatura aleasa">
                                                    <option value="hot">e mai cald fata de temperatura aleasa</option>
                                                    <option value="cold">e mai frig fata de temperatura aleasa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h3>Device-uri:</h3>

                                        <?php foreach($devices as $device) {
                                            ?>
                                            <div class=" row mb-4">
                                                <label for="inputOra" class="col-md-3 form-label"><?php echo $device['name']; ?></label>
                                                <div class="col-md-9">
                                                    <select name="setare_<?php echo $device['deviceid']; ?>" class="form-control form-select" data-bs-placeholder="Nu schimba">
                                                        <option value="0">Nu schimba</option>
                                                        <option value="turnon">Porneste</option>
                                                        <option value="turnoff">Opreste</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <div class="mb-0 mt-4 row justify-content-end">
                                            <div class="col-md-9">
                                                <button class="btn btn-primary">Adauga</button>
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