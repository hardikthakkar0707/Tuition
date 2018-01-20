<!DOCTYPE html>
<head>
    <title>Tution Classes | Admin</title>
    <?php $this->load->view("head"); ?>
</head>
<body>
    <div id="wrapper">
        <!--header start-->
        <?php $this->load->view("top"); ?>
        <!--header end-->

        <header id="head" class="secondary" style="height:50px;">
            <div class="container">
                <h1>Gallery</h1>
            </div>
        </header>

        <!--sidebar start-->
        <?php $this->load->view("panel1"); ?>
        <!--sidebar end-->

         <div class="container col-sm-9">
            <div id="page-wrapper">
                <div class="row">

                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="heading">Add New Image</h1>

                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url("index.php/Login_Controller/Home"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                                <li> <a href="<?php echo base_url("index.php/Gallery_Controller/ViewGallery"); ?>">Gallery</a></li>

                                <li class="active">Add New Image</li>   
                            </ol>
                        </div>
                    </div>
                    <!--End Page Header -->

                </div>

                <!-- Add Image Form -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <!-- <div class="panel-heading">
                                Add New Image Form
                            </div> -->
                            
                            <!-- Welcome -->
                            <div class="panel-body">

                                <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url("index.php/Gallery_Controller/InsertImage") ?>">

                                 <div class="col-md-6 form-group">
                                            <label>Gallery Image<br> <span style="color:blue;font-size:12px;font-weight: normal;">(Note: Photo format : jpg | png | jpeg | gif & Maximum Size : 500kb are allowed.)</span></label>
                                            <input type="file" class="form-input" name="ImageUpload" accept="image/*" >
                                            <!-- <?php if(isset($row)){?><img src="<?php echo base_url("panel/img/student/$row->photo"); ?>" width="100px" height="100px"><?php }?> -->
                                </div>   

                                 <div class="col-md-6 form-group">
                                            <label>Category</label>
                                            <select class="form-input form-control branch" name="category">
                                                <option value="">Select Category</option>.
                                                <option value="Event">Event</option>.
                                                <option value="Classroom">Classroom</option>.
                                            </select>      
                                </div>

                         

                                <div class="col-md-6 form-group">
                                            <label>Description</label>
                                            <textarea class="form-input form-control branch" name="description" maxlength="25">
                                            </textarea>      
                                </div>

                                <div class="col-md-6 form-group">
                                            <br><br>
                                            <input type="submit" class="btn btn-default" value="Submit" name="AddImage">
                                        </div>
                                </form> 
                            </div>
                         </div> 
                     </div>
                </div>               

            </div>
        </div>

            <?php $this->load->view("footer"); ?>
<script>
    $(function () {
        $("#example").dataTable();
    })
</script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>
