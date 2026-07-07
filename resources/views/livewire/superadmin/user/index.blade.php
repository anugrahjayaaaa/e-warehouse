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
                            {{ $title }}
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
                            <li class="breadcrumb-item active">{{ $title }}</li>
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
                            {{-- target modal use id --}}
                            <button wire:click="create" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                                <i class="fas fs-plus mr-1"></i>
                                Add User
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

                    {{-- paginate and search --}}
                    <div class="mb-3 d-flex justify-content-between">
                        {{-- paginate --}}
                        <div class="col-2">
                            {{-- call livewire model get paginate number, add .live to make it instan change. make sure the name is same in controller --}}
                            <select wire:model.live="paginate" class="form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        {{-- search --}}
                        <div>
                            {{-- call livewire model get user input, add .live to make it instan change. make sure the name is same in controller --}}
                            <input wire:model.live="search" type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>

                    {{-- users data table --}}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $users->firstItem() + $loop->index }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->role == 'Super Admin')
                                            <span class="badge badge-info">
                                                {{ $user->role }}
                                            </span>
                                        @else
                                            <span class="badge badge-primary">
                                                {{ $user->role }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- pagination --}}
                        {{ $users->links() }}
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->

        {{-- Create Modal --}}
        @include('livewire.superadmin.user.create')

        {{-- Close Create Modal --}}
        @script
            <script>
                $wire.on('closeCreateModal', () => {
                    $('#createModal').modal('hide');
                });
            </script>
        @endscript
    </div>
    <!-- /.content-wrapper -->
</div>
