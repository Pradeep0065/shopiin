<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <form action="{{url('add-product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Select Category</label>
                <select id="Category" name="c_id" class="form-control"></select>
                <!-- <input type="hidden" class="form-control" id="col" placeholder="Enter color"> -->
                <label for="">Select color</label>
                <select id="color" name="co_id" class="form-control"></select>
                <!-- <input type="hidden" class="form-control" id="bar" placeholder="Enter color"> -->
                <label for="">Select brand</label>
                <select id="brand" name="b_name" class="form-control"></select>
                <!-- <input type="hidden" class="form-control" id="siz" placeholder="Enter color"> -->
                <label for="">Select size</label>
                <select id="size" name="s_name" class="form-control"></select>
                <label for="">Product</label>
                <input type="text" id="product" name="p_name" class="form-control">
                <label for="">Choose Image</label>
                <input type="file" name="img" id="" class="form-control mb-4">
                <textarea id="desc" name="p_comment" cols="30" rows="10" class="form-control mt-3"></textarea>
                <button type="submit" id="adddata" class="btn btn-success mt-3">Save Data</button>
            </form>







        </div>
    </div>
    <script>
        var editor1 = new RichTextEditor("#desc");
        $(document).ready(function() {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    getallcategory();


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
                                }
                            }
                        })
                    }


               
                    
                }
        )
                </script>
</div>