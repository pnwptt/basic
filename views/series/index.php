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
                        Add series 
                        
                        <div align="right">
                        	<a class="btn btn-default" href="add">Add</a>
                           <!--  <button type="button" onClick="window.location.href='/add_error_code'"> Add </button> -->
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table width="100%" class="table table-striped table-bordered table-hover dataTable on-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example-info" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Serie code</th>
                                                <th>Serie name</th>
                                                <th>Quantity/Pallet</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center">590</td>
                                                <td align="center">B5-Violet</td>
                                                <td align="center">18</td>
                      
                                                <td align="center">
                                                    <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button>
                                                    <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" ><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td align="center">
                                                    <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button>
                                                    <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" ><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>