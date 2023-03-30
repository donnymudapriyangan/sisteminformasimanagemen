<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="adminlogin/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="adminlogin/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['adminlogin/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="adminlogin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="adminlogin/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="adminlogin/assets/css/demo.css">
</head>
<body>
	<?php 
include 'awal.php';



?>
    <!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<img src="V.png" height="100" >
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title"><strong>Identitas Sekolah</strong></div>
							      <p>&nbsp;</p>
								    <p class="style1"><strong>NPSN : </strong> 10801967 </p>
								    <p class="style1"><strong>Status : </strong>Negeri</p>
								    <p class="style1"><strong>Bentuk Pendidikan : </strong>SMA</p>
								    <p class="style1"><strong>Status Kepemilikan : </strong>Pemerintah Daerah</p>
								    <p class="style1"><strong>SK Pendirian Sekolah : </strong>58/KPTS/07/2006</p>
								    <p class="style1"><strong>Tanggal SK Pendirian : </strong>2006-03-01</p>
								    <p class="style1"><strong>SK Izin Operasional : </strong>58/KPTS/07/2006</p>
								    <p class="style1"><strong>Tanggal SK Izin Operasional : </strong>2006-03-01</p>
								</div>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Data Sekolah</div>
									<div class="row py-3">
										<div class="col-md-9 d-flex flex-column justify-content-around">
										  <table width="100%" border="0" class="table table-head-bg-primary mt-4" id="basic-datatables">
                                            <tr>
                                              <td bgcolor="#FFFF33"><strong>JUMLAH PTK</strong></td>
                                              <td bgcolor="#FFFF33"><strong>JUMLAH SISWA</strong></td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#FFFFFF"><span class="input-group-text style2">
                                                <?php
include 'koneksi.php';


$dataaa = mysqli_query($koneksi,"SELECT * FROM daftar_guru");
//$query = "SELECT jenis, SUM(harga) FROM barang GROUP BY jenis";  
$count = mysqli_num_rows($dataaa);
    
echo "$count";
?>
                                              </span></td>
                                              <td bgcolor="#FFFFFF"><span class="input-group-text style2">
                                                <?php
include 'koneksi.php';


$dataaa = mysqli_query($koneksi,"SELECT * FROM tb_pdguru");
//$query = "SELECT jenis, SUM(harga) FROM barang GROUP BY jenis";  
$count = mysqli_num_rows($dataaa);
    
echo "$count";
?>
                                              </span></td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#00FFFF"><strong>SISWA LULUS </strong></td>
                                              <td bgcolor="#00FFFF"><strong> SISWA</strong> <strong>KULIAH</strong></td>
                                            </tr>
                                            <tr>
                                              <td><span class="input-group-text style2">
                                                <?php
include 'koneksi.php';


$dataaa = mysqli_query($koneksi,"SELECT * FROM tbsiswalulus");
//$query = "SELECT jenis, SUM(harga) FROM barang GROUP BY jenis";  
$count = mysqli_num_rows($dataaa);
    
echo "$count";
?>
                                              </span></td>
                                              <td><span class="input-group-text style2">
                                                <?php
include 'koneksi.php';


$dataaa = mysqli_query($koneksi,"SELECT * FROM tbsiswakuliah");
//$query = "SELECT jenis, SUM(harga) FROM barang GROUP BY jenis";  
$count = mysqli_num_rows($dataaa);
    
echo "$count";
?>
                                              </span></td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#66FF99"><strong> SARANA</strong></td>
                                              <td bgcolor="#66FF99"><strong>  PRASARANA</strong></td>
                                            </tr>
                                            <tr>
                                              <td><span class="input-group-text style2">
                                                <?php
include 'koneksi.php';


$dataaa = mysqli_query($koneksi,"SELECT * FROM tbsarana");
//$query = "SELECT jenis, SUM(harga) FROM barang GROUP BY jenis";  
$count = mysqli_num_rows($dataaa);
    
echo "$count";
?>
                                              </span></td>
                                              <td><span class="input-group-text style2">
                                                <?php
include 'koneksi.php';


$dataaa = mysqli_query($koneksi,"SELECT * FROM tbprasarana");
//$query = "SELECT jenis, SUM(harga) FROM barang GROUP BY jenis";  
$count = mysqli_num_rows($dataaa);
    
echo "$count";
?>
                                              </span></td>
                                            </tr>
                                          </table>
									  </div>
		  <div class="col-md-8">
											<div id="chart-container">
                                            
					</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					  <div class="col-md-4"></div>
					</div>
					<div class="row"></div>
<div class="row"></div>
			  </div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									SISTEM INFORMASI MANAGEMEN SEKOLAH
								</a>
							</li>
														
						</ul>
					</nav>
					<div class="copyright ml-auto">
						SMAN 1 BANGUN REJO 2020
					</div>				
				</div>
			</footer>
		</div>
		
				<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="adminlogin/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="adminlogin/assets/js/core/popper.min.js"></script>
	<script src="adminlogin/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="adminlogin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="adminlogin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="adminlogin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="adminlogin/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="adminlogin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="adminlogin/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="adminlogin/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="adminlogin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="adminlogin/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="adminlogin/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="adminlogin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="adminlogin/assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="adminlogin/assets/js/setting-demo.js"></script>
	<script src="adminlogin/assets/js/demo.js"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>