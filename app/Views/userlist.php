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
                        <h1 class="page-title">Lista utilizatori</h1>
                        <div>
                            <button class="btn btn-primary">Adauga</button>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <!-- Row -->
                    <div class="row row-cards">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card">
                                <div class="card-header border-bottom-0 p-4">
                                    <h2 class="card-title"><?php echo count($users); ?> utilizatori</h2>
                                </div>
                                <div class="e-table px-5 pb-5">
                                    <div class="table-responsive table-lg">
                                        <table class="table border-top table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-center">

                                                </th>
                                                <th class="text-center">Photo</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($users as $user) {
                                                ?>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                        <input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center"><img alt="image" class="avatar avatar-md br-7" src="https://dekolor.ro/assets/images/users/16.jpg"></td>
                                                <td class="text-nowrap align-middle"><?php echo $user['name']; ?></td>
                                                <td class="text-nowrap align-middle"><span><?php echo $user['created_at']; ?></span></td>

                                                <td class="text-center align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-bs-toggle="" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COL-END -->
                    </div>
                    <!-- /Row -->
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!--app-content closed-->
    </div>
</div>