<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="page-wrapper" style="min-height: 99px;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header" style="color:#930000">Series</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Series
                        <!-- <div align="right">
                            <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                        </div> -->
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12" >
                                <form role="form">
                                    <div class="form-group">
                                            <label for="series_code">Serie Code  </label><br>
                                            <input type="number" class="form-control" id="" placeholder="Enter Serie Code"><br> 
                                    </div>
                                    <div class="form-group">
                                            <label for="series_name">Serie Name  </label><br>
                                            <input type="text" class="form-control" id="" placeholder="Enter Serie Name"><br> 
                                    </div>
                                    <div class="form-group">
                                            <label for="series_name">Quantity/Pallet</label><br>
                                            <input type="number" class="form-control" id="" placeholder="Enter Pallet Quantity">
                                    </div>
                                    <div class="box-footer" align="center">
                                        <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-primary " onclick="return confirm('Are you sure?')">Submit</button>
                                    </div><!--/box-footer-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>       
    </div> 
</body>
</html>