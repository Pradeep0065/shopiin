<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <button class="btn btn-success mb-2" id="add-color">Add color</button>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>category</th>
                                <th>color Name</th>
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
                            <h5 class="modal-title" id="adddatamodalLabel">color form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="">Select Category</label>
                            <select name="" id="category" class="form-control">                           
                                @foreach($data as $item)
                                <option value="{{$item->c_id}}">{{$item->c_name}}</option>
                                @endforeach
                         
                            </select>
                            <label for="">Choose color</label>
                            <input type="color" id="color" placeholder="add color" class="form-control">
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

                    $('#add-color').click(function() {
                        $('#adddatamodal').modal('show');
                        $('.form-control').val('');
                        $(this).attr('data-id', 0);
                    });
                    $('#adddata').on('click', function() {
                        var c_id = $('#category').val();
                        var co_name = $('#color').val();
                        var id = $(this).attr('data-id');

                        if (c_id != '', co_name !='') {
                            $.ajax({
                                method: 'post',
                                url: "{{url('add-color')}}",
                                data: {
                                    c_id: c_id,
                                    co_name: co_name,
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
                            url: "{{url('color-data')}}",
                            success: function(result) {
                                $.each(result, function(key, value) {
                                    html += `<tr>
                                            <td>${key + 1}</td>
                                            <td>${value.c_name}</td>
                                            <td>${value.co_name}</td>
                                            <td><button type="button" class="btn btn-success btn-edit btn-sm"  data-id="${value.co_id}"><i class="fa-solid fa-pencil"></i></button></td>                                           
                                            <td><button type="button" class="btn btn-danger btn-delete btn-sm"  data-id="${value.co_id}"><i class="fa-solid fa-trash"></i></button></td>
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
                            url: "{{url('get-single-color')}}",
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $('#adddatamodal').modal('show');
                                $('#category').val(result.c_co_id);
                                $('#color').val(result.co_name);
                                $('#adddata').attr('data-id', result.co_id);
                            }
                        })
                    });

                    $(document).on('click', '.btn-delete', function() {
                        var id = $(this).attr('data-id');
                        $('#deletedatamodal').modal('show');
                        $('#deletedata').attr('data-id', id);


                    });
                    $('#deletedata').click(function(){
                        var id = $(this).attr('data-id');
                        $.ajax({
                            method : 'post',
                            url : "{{url('delete-color')}}",
                            data : {id : id},
                            success : function(result){
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