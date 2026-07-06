<div> {{-- dont remove first div --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <i class="fas fa-user mr-2"></i>
                            @yield('title')
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="fas fa-home mr-1"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <button class="btn btn-primary">
                                <i class="fas fs-plus mr-1"></i>
                                Add Category
                            </button>
                        </div>

                        <!-- Default dropleft button, bootstrap -->
                        <div class="btn-group dropleft">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-print mr-1"></i>
                                Export
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-success" href="#">
                                    <i class="fas fa-file-excel mr-1"></i>
                                    Excel
                                </a>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="fas fa-file-pdf mr-1"></i>
                                    PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    {{-- Content --}}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
