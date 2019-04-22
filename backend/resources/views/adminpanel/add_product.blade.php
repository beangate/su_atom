      @extends('adminlayouts.header')
      @section('body')

        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Product Listing</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Product</a></div>
              <div class="breadcrumb-item">Listing</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Add New Product</h2>
            <p class="section-lead">Enter Product Detail and description</p>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Product Detail</h4>
                  </div>
                  <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                  <label>Company</label>
                   <form  enctype="multipart/form-data" method="post" id="product_form">
                    
                         <meta name="csrf-token" content="{{ csrf_token() }}"> 
                    <select class="form-control product_company" name="product_company" id="product_company">
                        <option value="Shultech">Shultech</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                      </select>
                  </div>
                   </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <label>Product Name</label>
                      <input type="text" class="form-control product_name" value="dad" name="product_name" id="product_name">
                  </div>
                   </div>
               </div>
                      
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                 <label>Product Description</label>
                      <input type="text" class="form-control product_description" value="dad" name="product_description" id="product_description">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <label>Product Price</label>
                      <input type="text" class="form-control product_price" value="22" name="product_price"id="product_price">
                  </div>
                  </div>
               </div>
                      
                  </div>
                </div>
               <div class="card">
                 <div class="card-header">
                   <div class="col-md-6">Product specification </div> <div class="col-md-6"><select class="form-control product_specification_type" id="spec_type" >
                        <option value="1" >General</option>
                        <option  value="2">Option 2</option>
                        <option  value="3">Option 3</option>
                      </select></div>
                 </div>
                 <div class="card-body" id="add_more_div" style="display:none;">
                   <div class="row">
                   <div class="col-md-1">
                   <label>#</label><br>
                     <span>1.</span>
                   </div>
                    
                        <div class="col-md-4">

                     <label>Specification</label>
                       <input type="text" class="form-control product_specification_heading" name="">
                     </div>
                     <div class="col-md-4">
                     <label>Specification Name</label>
                       <input type="text" class="form-control product_specification_name" name="">
                     </div>
                     <div class="col-md-1">
                     <label>Action</label>
                       <!-- <button class="btn btn-danger  btn-block"><span class="fas fa-minus"></span></button> -->
                     </div>
                   </div>
                   <hr>
                   <div class="new_row"></div>
                   <br>
                   <button type="button" class="btn btn-primary" id="add_more">Add More</button>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header">
                   Product Warranty
                 </div>
                 <div class="card-body" >
                   <div class="row">
                  
                     <div class="col-md-6">
                     	<div class="form-group">
                     		
                     <label>Warranty Summary</label>
                       <input type="text" class="form-control warrenty_summary" value="dad" name="warrenty_summary" id="warrenty_summary">
                     	</div>

                     </div>
                     <div class="col-md-6">
                     	<div class="form-group">
                     <label>Covered in Warranty</label>
                       <input type="text" class="form-control covered_warrenty" value="dad" name="covered_warrenty" id="covered_warrenty">
                     </div>
                     </div>
                 </div>
                 <hr>
                 <div class="row">
                  
                     <div class="col-md-6">
                     	<div class="form-group">
                     <label>Not Covered in Warranty</label>
                       <input type="text" class="form-control not_covered_warrenty" value="dad" name="not_covered_warrenty" id="not_covered_warrenty">
                     </div>
                   </div>  
                     <div class="col-md-6">
                     	<div class="form-group">
                     <label>Warranty Service Type</label>
                       <input type="text" class="form-control warrenty_service_type" value="dad" name="warrenty_service_type" id="warrenty_service_type">
                     </div>
                   </div>
                 </div>
               </div>
           </div>  
              <div class="card">
                  <div class="card-header">
                    <h4>Upload Image</h4>
                  </div>
                  <form  enctype="multipart/form-data" method="post" id="form-image">
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">Image Check</label>
                      <div class="row gutters-sm">
                        <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                           
      <input type="file" class="input_file form-control-file border img1 "  name="product_image1">
      <br>
                            <figure class="imagecheck-figure">
                              <img id="img1" class="prev_img">
                            </figure>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                             <div class="custom-file mb-4">
    <input type="file" class="input_file form-control-file border img1" id="" name="">
    </div>
                            <figure class="imagecheck-figure">
                              <img src="{{ url('admin/assets/img/news/img02.jpg') }}" alt="}" class="imagecheck-image">
                            </figure>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                            <div class="custom-file mb-4">
     <input type="file" class="input_file form-control-file border " id="" name="">
    </div>
                            <figure class="imagecheck-figure">
                              <img src="{{ url('admin/assets/img/news/img03.jpg') }}" alt="}" class="imagecheck-image">
                            </figure>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                             <div class="custom-file mb-3">
      <input type="file" class="input_file form-control-file border image1" id="image1" name="">
    </div>
                            <figure class="imagecheck-figure">
                              <img src="{{ url('admin/assets/img/news/img04.jpg') }}" alt="}" class="imagecheck-image">
                            </figure>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                              <div class="custom-file mb-3">
     <input type="file" class="input_file form-control-file border img1" id="" name="">
    </div>
                            <figure class="imagecheck-figure">
                              <img src="{{ url('admin/assets/img/news/img05.jpg') }}" alt="}" class="imagecheck-image">
                            </figure>
                          </label>
                        </div>
                        <div class="col-6 col-sm-4">
                          <label class="imagecheck mb-4">
                             <div class="custom-file mb-3">
     <input type="file" class="input_file form-control-file border img1" id="" name="">
    </div>
                            <figure class="imagecheck-figure">
                              <img src="{{ url('admin/assets/img/news/img06.jpg') }}" alt="}" class="imagecheck-image">
                            </figure>
                          </label>
                        </div>
                      </div>
                    </div>
                    <center><button type="button" id="save" class="btn btn-info">Submit</button></center>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script type="text/javascript">
 $(document).ready(function(){
    
    $('#save').on('click',function(e){
    e.preventDefault(e);
  token = $('input[name="_token"]').val();
  
    var product_company=[];
    var product_name=[];
    var product_description=[];
    var product_price=[];
    var warrenty_summary=[];
    var covered_warrenty=[];
    var not_covered_warrenty=[];
    var warrenty_service_type=[];
    var product_specification_type=[];
    var product_specification_heading=[];
    var product_specification_name=[];
    var image1=[];

    var img = $('#image1').val();
    // alert(img);
    $('.product_company').each(function(){
   product_company.push($(this).val());
  });
  $('.product_name').each(function(){
   product_name.push($(this).val());
  });
  $('.product_description').each(function(){
   product_description.push($(this).val());
  });
  $('.product_price').each(function(){
   product_price.push($(this).val());
  });
   $('.not_covered_warrenty').each(function(){
   not_covered_warrenty.push($(this).val());
  });
    $('.warrenty_summary').each(function(){
   warrenty_summary.push($(this).val());
  });
     $('.covered_warrenty').each(function(){
   covered_warrenty.push($(this).val());
  });
      $('.warrenty_service_type').each(function(){
   warrenty_service_type.push($(this).val());
  });
       $('.product_specification_name').each(function(){
   product_specification_name.push($(this).val());
  });
        $('.product_specification_heading').each(function(){
   product_specification_heading.push($(this).val());
  });
         $('.product_specification_type').each(function(){
   product_specification_type.push($(this).val());
  });
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    // alert(product_company)
  $.ajax({
    type: "POST",
    url: '/product',
    // data: new FormData($("#product_form")[0]),
    data: {product_company:product_company, product_name:product_name ,product_description:product_description,product_price:product_price,not_covered_warrenty:not_covered_warrenty,warrenty_summary:warrenty_summary,covered_warrenty:covered_warrenty,warrenty_service_type:warrenty_service_type,product_specification_type:product_specification_type,product_specification_heading:product_specification_heading,product_specification_name:product_specification_name},
    success: function (data) {
   image_insert();

      console.log(data)
       // $("#result").html(data);
       // refreshCourse();
       alert(data);
    },
    error: function (data) {
      alert(data)

        console.log(data);
        // if(data.status == 403){
        //     showMsg(1,"Unauthorised User",1500);
        //     return;
        // }
        // showMsg(1,"Cannot Add courses",1500);

    },
});

    });

    function image_insert(){
      alert("image");
      $.ajax({
        type:"POST",
        url:"/product_image",
        data: new FormData($("#form-image")[0]),
        success: function (data) {
        console.log(data)
       alert(data);
    },
    error: function (data) {
      alert(data)

        console.log(data);
        // if(data.status == 403){
        //     showMsg(1,"Unauthorised User",1500);
        //     return;
        // }
        // showMsg(1,"Cannot Add courses",1500);

    },


      })
    }
});

</script>