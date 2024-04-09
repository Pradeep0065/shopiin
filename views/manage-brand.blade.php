<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <button class="btn btn-success mb-2" id="add-brand">Add Brand</button>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>category</th>
                                <th>color Name</th>
                                <th>Brand Name</th>
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
                            <h5 class="modal-title" id="adddatamodalLabel">Brand form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="">Select Category</label>
                            <select name="" id="category" class="form-control">
                            </select>
                            <input type="hidden" class="form-control" id="col" placeholder="Enter color">
                            <label for="">Select color</label>
                            <select name="" id="color" class="form-control">
                            </select>

                            <label for="">Choose Brand</label>
                            <input type="text" id="brand" placeholder="add brand" class="form-control">
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
                    getallcategory();
                    getdata();


                    function getallcategory() {
                        var html = '<option value="">Select Category</option>';
                        $.ajax({
                            method: 'post',
                            url: "{{url('category-data')}}",
                            success: function(result) {
                                $.each(result, function(index, value) {
                                    html += `<option value="${value.c_id}">${value.c_name}</option>`;
                                });
                                $('#category').html(html);
                            }
                        })
                    }

                    $(document).on('change', '#category', function() {
                        var id = $(this).val();
                        getcolor(id);
                    });

                    function getcolor(id) {
                        var html = '<option value="">Select color</option>';
                        $.ajax({
                            method: 'post',
                            url: "{{url('get-colorname')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $.each(result, function(index, value) {
                                    html += `<option value="${value.co_id}">${value.co_name}</option>`;
                                });
                                $('#color').html(html);
                                if ($('#col').val() != '') {
                                    $('#color').val($('#col').val());
                                }
                            }
                        })
                    }

                    $('#add-brand').click(function() {
                        $('#adddatamodal').modal('show');
                        $('.form-control').val('');
                        $(this).attr('data-id', 0);
                    });
                    $('#adddata').on('click', function() {
                        var c_id = $('#category').val();
                        var co_id = $('#color').val();
                        var b_name = $('#brand').val();
                        var id = $(this).attr('data-id');

                        if (c_id != '', co_id != '', b_name !='') {
                            $.ajax({
                                method: 'post',
                                url: "{{url('add-brand')}}",
                                data: {
                                    c_id: c_id,
                                    co_id: co_id,
                                    b_name: b_name,
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
                            url: "{{url('get-all-data')}}",
                            success: function(result) {
                                $.each(result, function(key, value) {
                                    html += `<tr>
                                            <td>${key + 1}</td>
                                            <td>${value.c_name}</td>
                                            <td>${value.co_name}</td>
                                            <td>${value.b_name}</td>
                                            <td><button type="button" class="btn btn-success btn-edit btn-sm"  data-id="${value.b_id}"><i class="fa-solid fa-pencil"></i></button></td>                                           
                                            <td><button type="button" class="btn btn-danger btn-delete btn-sm"  data-id="${value.b_id}"><i class="fa-solid fa-trash"></i></button></td>
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
                            url: "{{url('get-single-brand')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $('#adddatamodal').modal('show');
                                getcolor(result.b_c_id);
                                $('#category').val(result.b_c_id);
                                $('#color').val(result.b_co_id);
                                $('#col').val(result.b_co_id);
                                $('#brand').val(result.b_name);
                                $('#adddata').attr('data-id', result.b_id);
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
                            url: "{{url('delete-brand')}}",
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