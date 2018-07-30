<html>
<head>
    <title>ADD BRAND</title>
    <?php
    include "links.php";
    ?>
    <script>
        $(document).ready(function() {
            setInterval(function () {
                $("#logo").addClass('animated flipInY');
                setTimeout(function () {
                    $("#logo").removeClass('animated flipInY');
                },1000);
            },2500);
        });// document ready
    </script>


</head>
<body>
<!-- ============= including the  navbar ===== -->
<?php
include "userHeader.php";
?>
<form>
    <!-- ============= first section in the website ===== -->
    <section class="page-header"  style="background-color:#f0f0f0">`
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2  col-md-2" style="background-color: #513e6e; margin-left: -5px;height:130%" >

                    <h4  style="margin-top: 100px;;font-family: 'Old Standard TT', serif;position: fixed"><a href="addProduct.php" class="white">  Add new Product</a></h4><br><br>
                    <h4  style="margin-top: 100px;color: rgba(255,255,255,.5);font-family: 'Old Standard TT', serif;position: fixed"><a href="addBrand.php" class="white">Add new Brand</a></h4><br><br>
                    <h4  style="margin-top: 100px;color: rgba(255,255,255,.5);font-family: 'Old Standard TT', serif;position: fixed"> <a href="#" class="white">Edit product</a></h4><br><br>
                    <h4  style="margin-top: 100px;color: rgba(255,255,255,.5);font-family: 'Old Standard TT', serif;position: fixed"><a href="editBrand.php" class="white"> Edit Brand</a></h4>
                        <img src="pics/logowhite.png" id="logo" class="site__title flipInY animated"  width="200" height="100" style="position: fixed ;bottom:0">


                </div>

                <!-- adding new product inputs -->
                <div class="col-lg-5 col-md-5"  style="margin-top: 80px;">

                    <span><h4 class="product-font">Brand Name:</h4></span>
                    <input  type="text" class="form-control product-font" style="width:300px" placeholder="Brand Name"><br>

                    <span><h4 class="product-font" style="margin-top: 80px">Brand Category:</h4></span>
                    <select class="form-control product-font">
                        <option>Select Product Category</option>
                        <option>kitchen</option>
                    </select>

                    <div class="row" style="margin-top: 20px;margin-left: 2px">
                        <input type="reset" class="product-font form-control" value="Cancel" style="width:120px;">
                        <input type="submit" class="product-font form-control" value="Add" style="width:120px;background-color:#513e6e;color: lightgray;margin-left: 5px" >
                    </div>

                </div>
            </div>
        </div>


    </section>

</form>
</body>
</html>