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
                        <h1 class="page-title">Lista Lumini</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Acasa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lumini</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <!-- Row -->
                    <div class="row ">
                        <div class="col-md-12">
                            <?php
                            foreach ($devices as $device) {
                                ?><a href="<?php echo base_url('/toggledevice/' . $device['deviceid']); ?>">
                                <div class="card <?php if ($device['status'] == 0) {
                                    //echo 'text-bg-danger';
                                } ?>">
                                    <div class="card-body">
                                        <?php echo $device['name']; ?>

                                        <div style="float: right;">
                                            <img width="40" src="<?php echo $device['brandlogo']; ?>" />

                                            <?php if ($device['status']==0) { ?>
                                                <span class="tag tag-orange">Off</span>
                                            <?php } elseif ($device['status']==1) {
                                                ?>
                                                <span class="tag tag-green">On</span>
                                                <?php
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                </a>
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