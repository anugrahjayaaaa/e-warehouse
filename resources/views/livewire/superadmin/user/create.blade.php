<!-- Modal -->
{{-- ignore after save not close --}}
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            {{-- modal header --}}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-plus mr-1"></i>
                    Add User Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- modal body --}}
            <div class="modal-body">
                {{-- name --}}
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="name" class="form-label">Name</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-8">
                        <input wire:model="name" type="text" class="form-control" placeholder="Input Name">
                        @error('name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                {{-- email --}}
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="email" class="form-label">E-mail</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-8">
                        <input wire:model="email" type="text" class="form-control" placeholder="Input E-mail">
                        @error('email')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                {{-- Role --}}
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="role" class="form-label">Role</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-8">
                        <select wire:model="role" name="role" id="role" class="form-control">
                            <option value="" disabled>Select Role</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                        </select>
                        @error('role')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                {{-- password --}}
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="password" class="form-label">Password</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-8">
                        <input wire:model="password" type="password" class="form-control" placeholder="Input Password">
                        @error('password')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
                {{-- password confirmation --}}
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="col-8">
                        <input wire:model="password_confirmation" type="password" class="form-control"
                            placeholder="Input Password Confirmation">
                        @error('password_confirmation')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- modal footer --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times mr-1"></i>
                    Close
                </button>
                {{-- call store function in index.php --}}
                <button wire:click="store" type="button" class="btn btn-primary">
                    <i class="fas fa-save mr-1"></i>
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
