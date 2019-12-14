<div class="container">
    
        <div class="row">
            <form action="saveproduct.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="control-label col-md-3">ประเภทรถ:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtcarType" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-3">ยี่ห้อรถ:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtbrand" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-3">รุ่น:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtmodel" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-3">ปี:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtmodelYear" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="control-label col-md-3">สี:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtcolor" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="control-label col-md-3">เลขทะเบียน:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtlicense" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="stock" class="control-label col-md-3">จังหวัด:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtprovince" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-3">ราคา:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtprice" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="picture" class="control-label col-md-3">รูปรถ:</label>
                    <div class="col-md-9">
                        <input type="file" name="filepic" class="form-control-file" accept="image/*" >  
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
     <!-- jQuery -->
     <script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>