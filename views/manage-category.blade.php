<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <button class="btn btn-success mb-2" id="add-category">Add category</button>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Category Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="data">

                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="adddatamodal" tabindex="-1" aria-labelledby="adddatamodalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="adddatamodalLabel">Category form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="">Add Category</label>
                            <input type="text" id="category" placeholder="add category" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="adddata" data-id="0">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deletedatamodal" tabindex="-1" aria-labelledby="adddatamodalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="adddatamodalLabel">Delete Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Do You Want to delete data?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" id="deletedata" data-id="0">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    getdata();

                    $('#add-category').click(function() {
                        $('#adddatamodal').modal('show');
                        $(this).attr('data-id', 0);
                    });
                    $('#adddata').on('click', function() {
                        var c_name = $('#category').val();
                        $('.form-control').val('');
                        var id = $(this).attr('data-id');
                        
                        if (c_name != '') {
                            $.ajax({
                                method: 'post',
                                url: "{{url('add-category')}}",
                                data: {
                                    c_name: c_name,
                                    id: id
                                },
                                success: function(result) {
                                    $('#adddatamodal').modal('hide');
                                    alert(result);
                                    getdata();
                                }
                            })
                        } else {
                            alert('All fields are required');
                        }
                    });

                    function getdata() {
                        var html = '';
                        $.ajax({
                            method: 'post',
                            url: "{{url('category-data')}}",
                            success: function(result) {
                                $.each(result, function(key, value) {
                                    html += `<tr>
                                            <td>${key + 1}</td>
                                            <td>${value.c_name}</td>
                                            <td><button type="button" class="btn btn-success btn-edit btn-sm"  data-id="${value.c_id}"><i class="fa-solid fa-pencil"></i></button></td>                                           
                                            <td><button type="button" class="btn btn-danger btn-delete btn-sm"  data-id="${value.c_id}"><i class="fa-solid fa-trash"></i></button></td>
                                         </tr>`
                                });
                                $('#data').html(html);
                            }
                        })
                    }
                    $(document).on('click', '.btn-edit', function() {
                        var id = $(this).attr('data-id');
                        $.ajax({
                            method: 'post',
                            url: "{{url('get-single-category')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $('#adddatamodal').modal('show');
                                $('#category').val(result.c_name);
                                $('#adddata').attr('data-id', result.c_id);
                            }
                        })
                    });

                    $(document).on('click', '.btn-delete', function() {
                        var id = $(this).attr('data-id');
                        $('#deletedatamodal').modal('show');
                        $('#deletedata').attr('data-id', id);


                    });
                    $('#deletedata').click(function() {
                        var id = $(this).attr('data-id');
                        $.ajax({
                            method: 'post',
                            url: "{{url('delete-category')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $('#deletedatamodal').modal('hide');
                                alert('Data Deleted')
                                getdata();
                            }
                        })
                    });

                });
            </script>
        </div>
    </div>
</div>