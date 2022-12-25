<form id="editForm">
    <div class="modal fade text-left w-100" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-full" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Blog</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="title-edit" class="form-control">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="body">Deskripsi</label>
                        <textarea name="body" id="body-edit" class="form-control"></textarea>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image-edit" name="image" data-show-loader="false"
                               class="form-control" required data-allowed-file-extensions="jpg png"
                               data-max-file-size-preview="3M" data-max-file-size="3M" value="">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary" id="editSubmit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
