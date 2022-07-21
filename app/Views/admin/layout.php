<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/jqvmap/jqvmap.min.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?= public_url('admin') ?>/plugins/summernote/summernote-bs4.min.css">
	<link rel="icon" type="image/png" href="<?= public_url('admin') ?>/dist/img/AdminLTELogo.png" />
	<script src="<?= public_url('ckeditor/') ?>ckeditor.js"></script>
	<script src="<?= public_url('ckeditor/ckfinder') ?>/ckfinder.js"></script>

	<style>
		.main-sidebar {
			position: fixed !important;
		}

		.err-msg {
			color: red;
		}

		.nav-sidebar>.nav-item {
			border-bottom: 1px solid #4f5962 !important;
		}

		#product_item {
			box-sizing: border-box;
			width: 300px !important;
		}

		.product_item .action {
			text-align: center !important;
		}

		td.post_content {
			display: block;
			width: 700px;
			height: 200px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}

		td.product_item {
			display: block;
			width: 350px;
			height: 150px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
	</style>
</head>

<body class="sidebar-mini">


	<?php $this->load->view('admin/static/header') ?>
	<?php $this->load->view('admin/static/left') ?>
	<?php $this->load->view($temp, $this->data); ?>

	<script src="<?= public_url('admin') ?>/plugins/jquery/jquery.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script src="<?= public_url('admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/chart.js/Chart.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/sparklines/sparkline.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/moment/moment.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/summernote/summernote-bs4.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="<?= public_url('admin') ?>/dist/js/adminlte.js"></script>
	<script src="<?= public_url('admin') ?>/dist/js/demo.js"></script>
	<script src="<?= public_url('admin') ?>/dist/js/pages/dashboard.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/jquery-validation/additional-methods.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/moment@latest/min/moment-with-locales.min.js"></script>
	<script src="<?= public_url('admin') ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

	<script>
		function ChangeToSlug() {
			var title, slug;

			//Lấy text từ thẻ input title 
			title = document.getElementById("title").value;

			//Đổi chữ hoa thành chữ thường
			slug = title.toLowerCase();

			//Đổi ký tự có dấu thành không dấu
			slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
			slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
			slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
			slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
			slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
			slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
			slug = slug.replace(/đ/gi, 'd');
			//Xóa các ký tự đặt biệt
			slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
			//Đổi khoảng trắng thành ký tự gạch ngang
			slug = slug.replace(/ /gi, "-");
			//Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
			//Phòng trường hợp người nhập vào quá nhiều ký tự trắng
			slug = slug.replace(/\-\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-/gi, '-');
			slug = slug.replace(/\-\-/gi, '-');
			//Xóa các ký tự gạch ngang ở đầu và cuối
			slug = '@' + slug + '@';
			slug = slug.replace(/\@\-|\-\@|\@/gi, '');
			//In slug ra textbox có id “slug”
			document.getElementById('slug').value = slug;
		}
	</script>

</body>

</html>