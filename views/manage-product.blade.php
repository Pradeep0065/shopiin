<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="{{url('add-product-data')}}"><button class="btn btn-success mb-2" id="add-product">Add Product</button></a>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Category</th>
                                <th>color Name</th>
                                <th>Brand Name</th>
                                <th>Size</th>
                                <th>Product Name</th>
                                <th>Product Comment</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="data">

                        </tbody>
                    </table>
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
                                $('#Category').html(html);
                            }
                        })
                    }

                    $(document).on('change', '#Category', function() {
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
                    $(document).on('change', '#color', function() {
                        var id = $(this).val();
                        getbrand(id);
                    });

                    function getbrand(id) {
                        var html = '<option value="">Select Brand</option>';
                        $.ajax({
                            method: 'post',
                            url: "{{url('get-brandname')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $.each(result, function(index, value) {
                                    html += `<option value="${value.b_id}">${value.b_name}</option>`;
                                });
                                $('#brand').html(html);
                                if ($('#bar').val() != '') {
                                    $('#brand').val($('#bar').val());
                                }
                            }
                        })
                    }

                    $(document).on('change', '#brand', function() {
                        var id = $(this).val();
                        getsize(id);
                   
                    });

                    function getsize(id) {
                        console.log(id);
                        var html = '<option value="">Select Size</option>';
                        $.ajax({
                            method: 'post',
                            url: "{{url('get-sizename')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $.each(result, function(index, value) {
                                    html += `<option value="${value.s_id}">${value.s_name}</option>`;
                                });
                                $('#size').html(html);
                                if ($('#siz').val() != '') {
                                    $('#size').val($('#siz').val());
                                    console.log($('#siz').val());
                                }
                            }
                        })
                    }
                    $('#adddata').on('click', function(){
                        var c_id = $('#Category').val();
                        var co_id = $('#color').val();
                        var b_name = $('#brand').val();
                        var s_name = $('#size').val();
                        var p_name = $('#product').val();
                        var id = $(this).attr('data-id');

                        if (c_id != '', co_id != '', b_name != '', s_name != '', p_name != '') {
                            $.ajax({
                                method: 'post',
                                url: "{{url('add-product')}}",
                                data: {
                                    c_id: c_id,
                                    co_id: co_id,
                                    b_name: b_name,
                                    s_name: s_name,
                                    p_name: p_name,
                                    id: id
                                },
                                success: function(result) {
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
                            url: "{{url('get-all-product')}}",
                            success: function(result) {
                                $.each(result, function(key, value) {
                                    html += `<tr>
                                            <td>${key + 1}</td>
                                            <td>${value.c_name}</td>
                                            <td>${value.co_name}</td>
                                            <td>${value.b_name}</td>
                                            <td>${value.s_name}</td>
                                            <td>${value.p_name}</td>
                                            <td>${value.p_comment}</td>
                                            <td> <img src="public/images/${value.img}" width="100px"></td>
                                            <td><a href="{{url('edit-product-data')}}/${value.p_id}"><button type="button" class="btn btn-success btn-edit btn-sm"  data-id="${value.p_id}"><i class="fa-solid fa-pencil"></i></button></a></td>                                           
                                            <td><button type="button" class="btn btn-danger btn-delete btn-sm"  data-id="${value.p_id}"><i class="fa-solid fa-trash"></i></button></td>
                                        </tr>`
                                });
                                $('#data').html(html);
                            }
                        })
                    }


                    

                    $(document).on('click', '.btn-delete', function() {
                        var id = $(this).attr('data-id');
                        $('#deletedatamodal').modal('show');
                        $('#deletedata').attr('data-id', id);


                    });
                    $('#deletedata').click(function() {
                        var id = $(this).attr('data-id');
                        $.ajax({
                            method: 'post',
                            url: "{{url('delete-product')}}",
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