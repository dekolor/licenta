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
                        <h1 class="page-title">Automatizari</h1>
                        <div>
                            <a class="btn btn-primary" href="<?php echo base_url('auto/add'); ?>">Adauga</a>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <!-- Row -->
                    <div class="row ">
                        <div class="col-md-12">
                            <?php
                            foreach ($autos as $auto) {
                                $devicedata = json_decode($auto['devices'], TRUE);
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <?php
                                            $i = 0;
                                            foreach ($devicedata as $device) {
                                                if($device['setting']=="on") {
                                                    ?><span class="tag tag-rounded tag-green">Porneste <?php }
                                                elseif($device['setting']=="off") {
                                                    ?><span class="tag tag-rounded tag-red">Opreste <?php
                                                }
                                                echo $device['devicename'];
                                                echo "</span>&nbsp;";
                                                $i++;
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if($auto['trigger_setting']=='time') {
                                            $ora = date('H:i', strtotime($auto['time_trigger']));
                                            if($auto['zilnic']) {
                                                echo "Ruleaza zilnic la ora " . $ora;
                                            } else {
                                                echo "Ruleaza pe " . $auto['day_trigger'] . " la ora " . $ora;
                                            }
                                        } ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
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