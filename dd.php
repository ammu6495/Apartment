<?php
include("Connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ocen House</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- Bootstrap 3.3.4 -->
<link href="http://dhakadailybazar.com/apartment-management-system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="http://dhakadailybazar.com/apartment-management-system/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="http://dhakadailybazar.com/apartment-management-system/dist/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="http://dhakadailybazar.com/apartment-management-system/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins 
 folder instead of downloading all of them to reduce the load. -->
<link href="http://dhakadailybazar.com/apartment-management-system/dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
<!-- iCheck for checkboxes and radio inputs -->
<link href="http://dhakadailybazar.com/apartment-management-system/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
<link href="http://dhakadailybazar.com/apartment-management-system/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="http://dhakadailybazar.com/apartment-management-system/dist/css/dataTables.responsive.css" rel="stylesheet" type="text/css" />
<link href="http://dhakadailybazar.com/apartment-management-system/dist/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />
<link href="http://dhakadailybazar.com/apartment-management-system/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- jQuery 2.1.4 -->
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/3A38FB20-6F4B-D04F-AAAD-D184DD0D2D1C/main.js" charset="UTF-8"></script><script src="http://dhakadailybazar.com/apartment-management-system/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="http://dhakadailybazar.com/apartment-management-system/dist/js/printThis.js"></script>
<script src="http://dhakadailybazar.com/apartment-management-system/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
<script src="http://dhakadailybazar.com/apartment-management-system/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    content {
    min-height: 250px;
    padding: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
article, aside, footer, header, hgroup, main, nav, section {
    display: block;
}
body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    /* font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; */
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 400;
    overflow-x: hidden;
    overflow-y: auto;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
:after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
</style>
</head>

      <div class="box-header">
        <h3 class="box-title">Employee List </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table sakotable table-bordered table-striped dt-responsive">
          <thead>
            <tr>
              <th>image</th>
              <th>Name</th>
              <th>Email </th>
              <th>Contact</th>
              <th>Designation</th>
              <th>Joining Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
                        <tr>
              <td><img class="photo_img_round" style="width:50px;height:50px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/88E29D39-F51E-13E6-F283-6289C8910EC2.jpg" /></td>
              <td>Johnson</td>
              <td>jhonson@yahoo.com</td>
              <td>98654722</td>
              <td>Security Gard</td>
              <td>01/05/2016</td>
              <td><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#nurse_view_5').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a> <a class="btn btn-warning ams_btn_special" data-toggle="tooltip" href="http://dhakadailybazar.com/apartment-management-system/employee/addemployee.php?id=5" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger ams_btn_special" data-toggle="tooltip" onClick="deleteEmployee(5);" href="javascript:;" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                <div id="nurse_view_5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header green_header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h3 class="modal-title">Employee Details</h3>
                      </div>
                      <div class="modal-body model_view" align="center">&nbsp;
                        <div><img class="photo_img_round" style="width:100px;height:100px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/88E29D39-F51E-13E6-F283-6289C8910EC2.jpg" /></div>
                        <div class="model_title">Johnson</div>
                      </div>
                      <div class="modal-body">
                        <h3 style="text-decoration:underline;">Details Infromation</h3>
                        <div class="row">
                          <div class="col-xs-6"> <b>Name :</b> Johnson<br/>
                            <b>Email  :</b> jhonson@yahoo.com<br/>
                            <b>Password :</b> 123456<br/>
                            <b>Contact :</b> 98654722<br/>
                            <b>Present Address :</b> Sydney, Australia<br/>
                            <b>Permanent Address :</b> Mildura, Australia<br/></div>
                            <div class="col-xs-6"><b>NID (Employee National ID) :</b> 98654723<br/>
                            <b>Designation :</b> Security Gard<br/>
                            <b>Joining Date :</b> 01/05/2016<br/>
							<b>Ending Date :</b> <br/>
							<b>Status :</b> Active<br/>
							<b>Salary Per Month : </b> $500.00<br/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                </div></td>
            </tr>
                        <tr>
              <td><img class="photo_img_round" style="width:50px;height:50px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/4B13BD30-EF05-E30D-2689-2A1D339821A7.jpg" /></td>
              <td>Anderson</td>
              <td>anderson@yahoo.com</td>
              <td>12121212</td>
              <td>Member</td>
              <td>26/09/2017</td>
              <td><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#nurse_view_6').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a> <a class="btn btn-warning ams_btn_special" data-toggle="tooltip" href="http://dhakadailybazar.com/apartment-management-system/employee/addemployee.php?id=6" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger ams_btn_special" data-toggle="tooltip" onClick="deleteEmployee(6);" href="javascript:;" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                <div id="nurse_view_6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header green_header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h3 class="modal-title">Employee Details</h3>
                      </div>
                      <div class="modal-body model_view" align="center">&nbsp;
                        <div><img class="photo_img_round" style="width:100px;height:100px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/4B13BD30-EF05-E30D-2689-2A1D339821A7.jpg" /></div>
                        <div class="model_title">Anderson</div>
                      </div>
                      <div class="modal-body">
                        <h3 style="text-decoration:underline;">Details Infromation</h3>
                        <div class="row">
                          <div class="col-xs-6"> <b>Name :</b> Anderson<br/>
                            <b>Email  :</b> anderson@yahoo.com<br/>
                            <b>Password :</b> 123456<br/>
                            <b>Contact :</b> 12121212<br/>
                            <b>Present Address :</b> test address<br/>
                            <b>Permanent Address :</b> same address<br/></div>
                            <div class="col-xs-6"><b>NID (Employee National ID) :</b> 12121212<br/>
                            <b>Designation :</b> Member<br/>
                            <b>Joining Date :</b> 26/09/2017<br/>
							<b>Ending Date :</b> 30/11/2017<br/>
							<b>Status :</b> Inactive<br/>
							<b>Salary Per Month : </b> $0.00<br/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                </div></td>
            </tr>
                        <tr>
              <td><img class="photo_img_round" style="width:50px;height:50px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/AB03F6E0-488C-930F-EA82-63B745079A05.jpg" /></td>
              <td>John Sina</td>
              <td>jee@yahoo.com</td>
              <td>+121212121</td>
              <td>Caretaker</td>
              <td>01/04/2018</td>
              <td><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#nurse_view_7').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a> <a class="btn btn-warning ams_btn_special" data-toggle="tooltip" href="http://dhakadailybazar.com/apartment-management-system/employee/addemployee.php?id=7" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger ams_btn_special" data-toggle="tooltip" onClick="deleteEmployee(7);" href="javascript:;" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                <div id="nurse_view_7" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header green_header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h3 class="modal-title">Employee Details</h3>
                      </div>
                      <div class="modal-body model_view" align="center">&nbsp;
                        <div><img class="photo_img_round" style="width:100px;height:100px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/AB03F6E0-488C-930F-EA82-63B745079A05.jpg" /></div>
                        <div class="model_title">John Sina</div>
                      </div>
                      <div class="modal-body">
                        <h3 style="text-decoration:underline;">Details Infromation</h3>
                        <div class="row">
                          <div class="col-xs-6"> <b>Name :</b> John Sina<br/>
                            <b>Email  :</b> jee@yahoo.com<br/>
                            <b>Password :</b> 12345<br/>
                            <b>Contact :</b> +121212121<br/>
                            <b>Present Address :</b> Nice Address
Same 1216<br/>
                            <b>Permanent Address :</b> Nice Address
Same 1216<br/></div>
                            <div class="col-xs-6"><b>NID (Employee National ID) :</b> 111111111111<br/>
                            <b>Designation :</b> Caretaker<br/>
                            <b>Joining Date :</b> 01/04/2018<br/>
							<b>Ending Date :</b> 31/08/2018<br/>
							<b>Status :</b> Inactive<br/>
							<b>Salary Per Month : </b> $800.00<br/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                </div></td>
            </tr>
                        <tr>
              <td><img class="photo_img_round" style="width:50px;height:50px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/1E5321D8-E4A1-5230-590C-0946CD7B095A.jpg" /></td>
              <td>Robert Peterson</td>
              <td>robert@yahoo.com</td>
              <td>+89898989</td>
              <td>Pion</td>
              <td>01/02/2018</td>
              <td><a class="btn btn-success ams_btn_special" data-toggle="tooltip" href="javascript:;" onClick="$('#nurse_view_8').modal('show');" data-original-title="View Details"><i class="fa fa-eye"></i></a> <a class="btn btn-warning ams_btn_special" data-toggle="tooltip" href="http://dhakadailybazar.com/apartment-management-system/employee/addemployee.php?id=8" data-original-title="Edit"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger ams_btn_special" data-toggle="tooltip" onClick="deleteEmployee(8);" href="javascript:;" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                <div id="nurse_view_8" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header green_header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        <h3 class="modal-title">Employee Details</h3>
                      </div>
                      <div class="modal-body model_view" align="center">&nbsp;
                        <div><img class="photo_img_round" style="width:100px;height:100px;" src="http://dhakadailybazar.com/apartment-management-system/img/upload/1E5321D8-E4A1-5230-590C-0946CD7B095A.jpg" /></div>
                        <div class="model_title">Robert Peterson</div>
                      </div>
                      <div class="modal-body">
                        <h3 style="text-decoration:underline;">Details Infromation</h3>
                        <div class="row">
                          <div class="col-xs-6"> <b>Name :</b> Robert Peterson<br/>
                            <b>Email  :</b> robert@yahoo.com<br/>
                            <b>Password :</b> 123456<br/>
                            <b>Contact :</b> +89898989<br/>
                            <b>Present Address :</b> wewe ewew
wewe
we<br/>
                            <b>Permanent Address :</b> wewe wewewe
sds
s<br/></div>
                            <div class="col-xs-6"><b>NID (Employee National ID) :</b> 45454545454<br/>
                            <b>Designation :</b> Pion<br/>
                            <b>Joining Date :</b> 01/02/2018<br/>
							<b>Ending Date :</b> 01/05/2018<br/>
							<b>Status :</b> Active<br/>
							<b>Salary Per Month : </b> $250.00<br/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                </div></td>
            </tr>
                      </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<script type="text/javascript">
function deleteEmployee(Id){
  	var iAnswer = confirm("Are you sure you want to delete this Employee ?");
	if(iAnswer){
		window.location = 'http://dhakadailybazar.com/apartment-management-system/employee/employeelist.php?id=' + Id;
	}
  }
  
  $( document ).ready(function() {
	setTimeout(function() {
		  $("#me").hide(300);
		  $("#you").hide(300);
	}, 3000);
});
</script>
</div>
<!-- /.content-wrapper -->


<!-- /.control-sidebar -->

<!-- ./wrapper -->
<!-- Bootstrap 3.3.2 JS -->

</body></html>