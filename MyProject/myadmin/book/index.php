<?php
include $_SERVER["DOCUMENT_ROOT"] . "/module/class/import.php";

if (!isset($_SESSION["admin"]))
{
	Misc::ss_destroy();
	header("Location:/login");
	die("");
}

$login_active = TRUE;
$admin_book = TRUE;

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Quản lý danh mục sách </title>
		<?php include $_SERVER["DOCUMENT_ROOT"] . "/module/include.php" ?>
	</head>
	<body>
		<?php
		include $_SERVER["DOCUMENT_ROOT"] . "/module/template/header.php";
		?>
		<!-- Content -->
		<div class="container-fixed text-left">
			<!-- ALERT -->
			<?php
			?>
			<!-- Form SELECT Category -->
			<div class="form-inline form-group">
				<div class="input-group">
					<div class="input-group-addon"><span class="text-80"> Chọn </span></div>
					<select class="form-control" id="select-category">
					</select>
				</div>
				<!-- Search Book -->
				<form class="pull-right" id="keyword">
					<input type="text" class="form-control" placeholder="Nhập từ khóa để tìm kiếm"/>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>
			<!-- Show list book -->
			<div id="table-show">
			</div>
			<!-- Add book -->
			<div class="form-inline form-group">
				<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#add-book"> Thêm sách <span class="caret"></span></button>
			</div>
			<form class="container-fixed collapse" id="add-book">
				<div class="row">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong class="text-info"> Information </strong>
							</div>
							<div class="panel-body">
								<?php
								Misc::create_Alert("alert-warning alert-hide" , "book-info-error");
								Misc::show_Alert();
								?>
								<div class="book-record-info">
									<?php
									include $_SERVER["DOCUMENT_ROOT"] . "/module/form/book.info.php";
									?>
								</div>
							</div>
							<div class="panel-footer text-center">
								<button type="submit" class="btn btn-primary"> SAVE <span class="glyphicon glyphicon-check"></span> </button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<form class="modal fade" id="edit-book">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3 class="modal-title"> Cập nhật thông tin sách </h3>
						</div>
						<div class="modal-body">
							<div class="book-record-info">
								<?php
								include $_SERVER["DOCUMENT_ROOT"] . "/module/form/book.info.php";
								?>
							</div>
						</div>
						<div class="modal-footer">
							<div class="text-center">
								<button type="submit" class="btn btn-primary"> SAVE <span class="glyphicon glyphicon-check"></span> </button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- End Content -->
		<?php include $_SERVER["DOCUMENT_ROOT"] . "/module/template/footer.php" ?>
	</body>
	<script src="/module/js/table.js"></script>
	<script src="index.js"></script>
</html>