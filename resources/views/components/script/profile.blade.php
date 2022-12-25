<script>
    let user_id;

    const create = () => {
        $('#createForm').trigger('reset');
        $('#body').summernote({
            height: 300
        });
        $('#body').summernote('reset');

        $(".dropify-clear").click();
        $('#createModal').modal('show');
    }

    $('#createSubmit').click(function(e) {
        e.preventDefault();

        var formData = new FormData($("#createForm")[0]);

        Swal.fire({
            title: 'Mohon tunggu',
            showConfirmButton: false,
            allowOutsideClick: false,
            willOpen: () => {
                Swal.showLoading()
            }
        });

        $.ajax({
            type: "post",
            url: "/products",
            data: formData,
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                Swal.close();

                if (data.status) {
                    Swal.fire(
                        'Success!',
                        data.msg,
                        'success'
                    )
                    $('#createModal').modal('hide');
                    $('#table').DataTable().ajax.reload();
                } else {
                    Swal.fire(
                        'Error!',
                        data.msg,
                        'warning'
                    )
                }
            }
        });
    });

    const edit = (id) => {
        Swal.fire({
            title: 'Mohon tunggu',
            showConfirmButton: false,
            allowOutsideClick: false,
            willOpen: () => {
                Swal.showLoading()
            }
        });
        user_id = id;

        $.ajax({
            type: "get",
            url: `/products/${user_id}`,
            dataType: "json",
            success: function(response) {
                $('#title-edit').val(response.title);
                $('#category-edit').val(response.category);
                // $('#edit-image').val(response.file);

                Swal.close();
                $('#editModal').modal('show');
            }
        });

    }
    const deleteData = (id) => {
        Swal.fire({
            title: 'Apa anda yakin untuk menghapus products ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            Swal.close();

            if (result.value) {
                Swal.fire({
                    title: 'Mohon tunggu',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    willOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    type: "delete",
                    url: `/products/${id}`,
                    dataType: "json",
                    success: function(response) {
                        Swal.close();
                        if (response.status) {
                            Swal.fire(
                                'Success!',
                                response.msg,
                                'success'
                            )
                            $('#table').DataTable().ajax.reload();
                        } else {
                            Swal.fire(
                                'Error!',
                                response.msg,
                                'warning'
                            )
                        }
                    }
                });
            }
        });

    }
    $(function() {

        $('#body-edit').summernote();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        $('#editSubmit').click(function(e) {
            e.preventDefault();

            var formData = new FormData($('#editForm')[0]);

            Swal.fire({
                title: 'Mohon tunggu',
                showConfirmButton: false,
                allowOutsideClick: false,
                willOpen: () => {
                    Swal.showLoading()
                }
            });

            $.ajax({
                type: "post",
                url: `/products/${user_id}`,
                data: formData,
                dataType: "json",
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    Swal.close();
                    if (data.status) {
                        Swal.fire(
                            'Success!',
                            data.msg,
                            'success'
                        )

                        $('#editModal').modal('hide');
                        $('#table').DataTable().ajax.reload();
                    } else {
                        Swal.fire(
                            'Error!',
                            data.msg,
                            'warning'
                        )
                    }
                }
            })
        });
        $('#table').DataTable({
            dom: 'Bfrtip',
            // Configure the drop down options.
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength', 'excel', 'pdf', 'print'
            ],
            filter: true,
            processing: true,
            responsive: true,
            serverSide: true,
            ajax: {
                url: '/products/all'
            },
            "columns": [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
                {
                    data: 'title',

                },
                {
                    data: 'category',

                },
                {
                    data: 'image',
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                },

            ]
        });
    });
</script>
