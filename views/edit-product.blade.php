<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <form action="{{url('update-product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data['p_id']}}">
                <label for="">Select Category</label>
                <select id="Category" name="c_id" class="form-control"></select>
                <!-- <input type="hidden" class="form-control" id="col" placeholder="Enter color"> -->
                <label for="">Select color</label>
                <select id="color" name="co_id" class="form-control" value="{{$data['co_name']}}"></select>
                <!-- <input type="hidden" class="form-control" id="bar" placeholder="Enter color"> -->
                <label for="">Select brand</label>
                <select id="brand" name="b_name" class="form-control" value="{{$data['b_name']}}"></select>
                <!-- <input type="hidden" class="form-control" id="siz" placeholder="Enter color"> -->
                <label for="">Select size</label>
                <select id="size" name="s_name" class="form-control" value="{{$data['s_name']}}"></select>
                <label for="">Product</label>
                <input type="text" id="product" name="p_name" class="form-control" value="{{$data['p_name']}}">
                <img src="{{url('public/images/'.$data['img'])}}" alt="">
                <label for="">Choose Image</label>
                <input type="file" name="img" id="" class="form-control">
                <textarea id="desc" name="p_comment" cols="30" rows="10" class="form-control" value="{{$data['p_comment']}}">{{$data['p_comment']}}</textarea>
                <button type="submit" id="adddata" class="btn btn-success mt-3">Update Data</button>
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
                        var c_id = "{{$data['p_c_id']}}";
                        $('#Category').val(c_id);
                        getcolor(c_id);
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
                        var color_id = "{{$data['p_co_id']}}";
                        $('#color').val(color_id);
                        getbrand(color_id);

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
                        var b_id = "{{$data['p_b_id']}}";
                        $('#brand').val(b_id);
                        getsize(b_id);

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
                            var s_id = "{{$data['p_s_id']}}";
                           $('#size').val(s_id);
                        
                    }
                })
            }




        })
    </script>
</div>