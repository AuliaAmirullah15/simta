<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
		if(!isset($_SESSION['username']))
		{
			redirect('tugas/login');
		}
	?>
	<head>
		<title>SISFO TA</title>
		<link rel="shortcut icon" href="<?php echo base_url('assets/img/usu.png') ; ?>" />
		
		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/bootstrap.css?1422792965');?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/materialadmin.css?1425466319');?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/font-awesome.min.css?1422529194');?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/material-design-iconic-font.min.css?1421434286');?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989');?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990');?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990');?>" />
        <style type="text/css">
            .colorize {
                color : #0aa89e;
            }
        </style>
               
            
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
			<?php $this->load->view('main_templates/header') ?>
		<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);?>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
			<?php if($message != '' AND $message != null) {

				if($message == 'Data Gagal Divalidasi')
				{
					echo "
						
							

					<div class=\"section-body\">
						<div class=\"alert alert-danger\" role=\"alert\">
							<strong>Maaf! </strong>".$message."</div>"; 
				}
				
				else {
								echo "
						
							

					<div class=\"section-body\">
						<div class=\"alert alert-success\" role=\"alert\">
							<strong>Selamat! </strong>".$message."</div>"; 
						}} ?>
				<?php if($number == '2') { ?>
				<ol class="breadcrumb">
											<li><a href="<?php echo base_url('tugas/'.$link);?>"><?= $crumb ?></a></li>
											<li class="active"><?= $judul; ?></li>
										</ol>
				<?php } ?>
				<section class="style-default-bright">
					<div class="section-header">

						<h2 class="text-primary"><?= $judul ?></h2>
					</div>
					<div class="section-body">
					

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
				


							<div class="col-md-8">
								<article class="margin-bottom-xxl">
									<p class="lead">
										
					
									</p>
								</article>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="row">
					
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable1" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>No</th>
												<th class="sort-numeric">Jenis Seminar</th>
												<th class="sort-alpha">Jadwal</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $no=1; foreach($data as $d) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $d->seminar ?></td>
                                                    <td><?= $d->jadwal ?></td>
                                            
                                                </tr>
                                            <?php } ?>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
					                   
						</div><!--end .row -->
						<!-- END DATATABLE 1 -->

						<hr class="ruler-xxl"/>

						

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
				<?php $this->load->view('main_templates/menu_bar') ?>
			<!-- END MENUBAR -->

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo base_url('assets/js/libs/jquery/jquery-1.11.2.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/libs/bootstrap/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/libs/spin.js/spin.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/libs/autosize/jquery.autosize.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/libs/DataTables/jquery.dataTables.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/App.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/AppNavigation.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/AppOffcanvas.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/AppCard.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/AppForm.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/AppNavSearch.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/source/AppVendor.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/demo/Demo.js');?>"></script>
		<script src="<?php echo base_url('assets/js/core/demo/DemoTableDynamic.js');?>"></script>
		<!-- END JAVASCRIPT -->


	</body>
</html>