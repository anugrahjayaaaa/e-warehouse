<!-- Delete Confirmation Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            {{-- Modal Header --}}
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    Delete User
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            {{-- Modal Body --}}
            <div class="modal-body">

                <div class="text-center mb-4">
                    <i class="fas fa-user-times fa-4x text-danger mb-3"></i>

                    <h5>Are you sure?</h5>

                    <p class="text-muted mb-0">
                        This action will permanently delete the following user.
                    </p>
                </div>

                <div class="card border-danger">
                    <div class="card-body py-3">

                        <dl class="row mb-0">

                            <dt class="col-4">Name</dt>
                            <dd class="col-8">{{ $name }}</dd>

                            <dt class="col-4">Email</dt>
                            <dd class="col-8">{{ $email }}</dd>

                            <dt class="col-4">Role</dt>
                            <dd class="col-8">
                                @if ($role == 'Super Admin')
                                    <span class="badge badge-info">
                                        {{ $user->role }}
                                    </span>
                                @else
                                    <span class="badge badge-primary">
                                        {{ $user->role }}
                                    </span>
                                @endif
                            </dd>

                        </dl>

                    </div>
                </div>

            </div>

            {{-- Modal Footer --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times mr-1"></i>
                    Cancel
                </button>

                <button wire:click="destroy({{ $user_id }})" type="button" class="btn btn-danger">
                    <i class="fas fa-trash mr-1"></i>
                    Delete
                </button>
            </div>

        </div>
    </div>
</div>
