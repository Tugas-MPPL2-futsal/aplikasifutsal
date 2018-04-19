<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DAFTAR MEMBER | PUZZLE FUTSAL</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/plugins/bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="<?=url?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>
<?php include_once 'koneksi.php'; ?>
<body class="theme-teal">

  <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?=url?>halaman/admin/index.php?page=beranda&sub="> PUZZLE<b>FUTSAL</b></a>
            </div>
        </div>
    </nav>  
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Halaman Member
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Member</h2>
                        </div>
                       <div class="body">
                            <div class="table-responsive" >
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="">
                                    <thead>
                                        <tr>
                                            <th style="width:10%">KODE</th>
                                            <th>NAMA</th>
                                            <th>NO TELPON</th>
                                            <th>ALAMAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                        $no = 1;
                                        $get = mysqli_query($c,"SELECT * FROM member");
                                        echo mysqli_error($c);
                                        while ($row = mysqli_fetch_array($get)) {
                                            $kode_member = $row['kode_member'];
                                            $nama = $row['nama'];
                                            $no_telp = $row['no_telp'];
                                            $alamat = $row['alamat'];
                                            echo "<tr>";
                                            echo "<td>$kode_member</td>";
                                            echo "<td>$nama</td>";
                                            echo "<td>$no_telp</td>";
                                            echo "<td>$alamat</td>";
                                            $no++;
                                        }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
	<?php include("footer.php"); ?>
