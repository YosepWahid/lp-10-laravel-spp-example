<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('user.create') }}" method="Post">

                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="roles" class="form-label">Peran</label>
                        <select name="role_id" id="roles" class="form-select">
                            <option value="" selected>-</option>
                            @foreach ($side as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="name" name="name">
                    </div>


                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="username" name="username">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="email" name="email">
                    </div>


                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>


                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="password confirm" name="password_two">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
