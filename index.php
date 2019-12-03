<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Mesjid Finder</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datetimepicker/datertimepicker.html" />
	<link rel="stylesheet" href="assets/css/bootstrap-slider.css" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNnzxae2AewMUN0Tt_fC3gN38goeLVdVE"></script>
    <script src="assets/js/chart-master/Chart.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<style type="text/css">
      #legend {
        background:white;
        padding: 10px;
        margin: 5px;
        font-size: 12px;
		font-color: blue;
        font-family: Arial, sans-serif;
		opacity: 2.5;
	  }
		.color {
        border: 1px solid;
        height: 12px;
        width: 12px;
        margin-right: 3px;
        float: left;
		}
	  .a {
        background: #f58d6f;
      }
	  .b {
        background: #f58d6f;
      }
      .c {
        background: #fce8b7;
      }
	  .d {
        background: #ec87ec;
      }
	  .e {
        background: #42cb6f;
      }
	  .f {
        background: #5c9ded;
      }
	  .g {
        background: #373435;
      }
	  .h {
        background: #d51e5a;
      }
	  .i {
        background: #9398ec;
      }
	  .j {
        background: #f9695d;
      }
	  .k {
        background: #ec87bf;
      }
	  .l {
        background: navy;
      }
   </style>
  </head>

  <body>

   <section id="container" >
      <header class="header black-bg">

            <a class="logo"><p><img src="assets/ico/111.png"><b>W</b>EB<b style="font-size: 17px">GIS</b></p></a>
            <a href="admin/login.php" class="logo1" title="Login" style="margin-top: 10px"><img src="assets/ico/112.png"></a>

        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="profile.html"><img src="assets/img/masjid.png" class="img-circle" width="90"></a></p>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="resultt()">
                          <i class="fa fa-search"></i>
                          <span>Search By</span>
                      </a>
                      <ul class="sub">
                          <li class="sub-menu">
                            <a href="javascript:;" onclick="reset()">
                                <i class="fa fa-sort-alpha-asc"></i>
                                <span>Name</span>
                            </a>
                            <ul class="sub">
                              <div  class="panel-body" >

                                  <input type="text" class="form-control" id="carimasjid" name="carimasjid" placeholder="Search..." >
                                  <br>
                                  <button type="submit" class="btn btn-default" value="carimasjid" onclick="carinamamasjid()"> <i class="fa fa-search"></i></button>

                              </div>
                            </ul>
                          </li>
                          <!-- <li class="sub-menu">
                              <a href="javascript:;" onclick="reset()" >
                                  <i class="fa fa-cogs"></i>
                                  <span>Sub-District</span>
                              </a>
                              <ul class="sub">
                                 <div  class="panel-body" >
                                    <select class="form-control" id="kecamatan" >
                                        <?php
                                        include("connect.php");
                                        $kecamatan=pg_query("select * from district ");
                                        while($rowkecamatan = pg_fetch_assoc($kecamatan))
                                        {
                                        echo"<option value=".$rowkecamatan['id'].">".$rowkecamatan['name']."</option>";
                                        }
                                        ?>
                                      </select>
                                      <br>
                                      <button type="submit" class="btn btn-default" id="caritpkec"  value="cari" onclick="caritpkec()"><i class="fa fa-search"></i></button>
                                 </div>
                              </ul>
                          </li>
                          <li class="sub-menu">
                              <a href="javascript:;" onclick="reset()">
                                  <i class="fa fa-institution "></i>
                                  <span>Categories</span>
                              </a>
                              <ul class="sub">
                                  <div  class="panel-body" >
                                    <select class="form-control" id="id_kategori" >
                                          <?php
                                          include("connect.php");
                                          $kategori=pg_query("select * from category_worship_place ");
                                          while($rowkategori = pg_fetch_assoc($kategori))
                                          {
                                          echo"<option value=".$rowkategori['id'].">".$rowkategori['name']."</option>";
                                          }
                                          ?>
                                      </select>
                                      <br>
                                      <button type="submit" class="btn btn-default" id="carikategori"  value="cari" onclick='carikategori()'><i class="fa fa-search"></i></button>
                                  </div>
                              </ul>
                          </li> -->
                          <li class="sub-menu">
                            <a href="javascript:;" onclick="reset()">
                                <i class="fa fa-filter"></i>
                                <span>Filter</span>
                            </a>
                            <ul class="sub">
                                <div  class="panel-body" >
                                  <label style="color:white;">District</label>
                                  <select class="form-control" id="kecamatan1" >
                                        <?php
                                        include("connect.php");
                                        $kecamatan=pg_query("select * from district ");
                                        while($rowkecamatan = pg_fetch_assoc($kecamatan))
                                        {
                                        echo"<option value=".$rowkecamatan['id'].">".$rowkecamatan['name']."</option>";
                                        }
                                        ?>
                                  </select>
                                  <label style="color:white;">Category</label>
                                  <select class="form-control" id="id_kategori1" >
                                    <?php
                                        include "connect.php";
                                        $result=  pg_query("select id as nilai, name as nama from category_worship_place order by nama ASC");
                                        while($baris = pg_fetch_assoc($result))
                                        {
                                          echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                        }
                                        pg_close();
                                    ?>
                                  </select>
                                  <br>
                                  <button type="submit" class="btn btn-default" onclick='tampilkatwilayah()'><i class="fa fa-search"></i></button>
                                </div>
                            </ul>
                          </li>
                          <li class="sub-menu">
                              <a href="javascript:;" onclick="reset()">
                                  <i class="fa fa-car"></i>
                                  <span>Transportation</span>
                              </a>
                              <ul class="sub">
                                  <div  class="panel-body" >
                                  <select class="form-control" style="width: 90%;" id="pilihkend" >
                                  <option value="bus">Bus</option>
                                  <option value="cars">Cars</option>
                                  <option value="motor">Motorcycle</option>
                                  </select>
                                  <br>
                                  <button type="submit" class="btn btn-default" id="carikategori"  value="cari" onclick='pilihkendaraan()'><i class="fa fa-search"></i></button>
                              </ul>
                          </li>
                          <li class="sub-menu">
                              <a href="javascript:;" onclick="reset()">
                                  <i class="fa fa-bus"></i>
                                  <span>Public Transportation</span>
                              </a>
                              <ul class="sub">
                                  <div  class="panel-body" >
                                    <a style="margin-top: -20px; color: white" ><span>Search by Majors</span></a>
                                    <select class="form-control" style="width: 90%;" id="jurusan" >
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from angkot ");
                                            while($rowangkot = pg_fetch_assoc($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['destination']."</option>";
                                            }
                                      ?>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-default" id="carikategori"  value="cari" onclick='tampiljurusan()'><i class="fa fa-search"></i></button>
                                  </div>
        						              <div class="panel-body">
                                    <a style="margin-top: -20px; color: white" ><span>Nearby</span></a>
        							              <input  type="range" onclick="aktifkanRadiusAngkot();resultt()" id="inputradiusangkot" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                                  </div>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="fasilitas()">
                          <i class="fa fa-sort-amount-asc"></i>
                          <span>Facility</span>
                      </a>
                      <ul class="sub">
                        <div class="box-body" id="fasilitaslist">
                           <div class="kategori"><h7 style="color :#f3fff4">Choose Facility</h7></div>
                        </div>
                        <button type="submit" class="btn btn-default" id="carifasilitas"  value="fas" onclick='carifasilitas()'><i class="fa fa-search"></i></button>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="eventt()" >
                          <i class="fa fa-tasks"></i>
                          <span>Event</span>
        						  </a>
        						  <ul class="sub">
                          <li class="sub-menu">
                            <a href="javascript:;" onclick="reset()">
                              <i class="fa fa-calendar"></i>
                              <span>Date</span>
                            </a>
                            <ul class="sub">
                              <div  class="panel-body" >
                                <div class="form-group">
                                  <input type="text" class="form-control form-control-inline input-medium default-date-picker" size="16" name="caritgl" id="caritgl" value="">
                                  <button type="submit" class="btn btn-default" value="caritgl" onclick="caritglkeg();resultt()"> <i class="fa fa-search"></i></button>
                                </div>
                              </div>
                            </ul>
                          </li>
				              </ul>
                  </li>
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" onclick="list()" >
                          <i class="fa fa-file-image-o"></i>
                          <span>List Mosque</span>
                      </a>
                  </li> -->
        				  <li class="sub-menu">
                      <a class="active" href=".././">
                          <i class="fa fa-hand-o-left"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="reset();" >
                        <i class="fa fa-tasks"></i>
                        <span>Fungsional Astri</span>
                      </a>
                      <ul class="sub">
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 1</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Ustad Name</span>
                                <input type="text" class="form-control" id="txt_ustad_f1" name="carimasjid" placeholder="Search..." >
                                <br>
                              </div>
                                <label style="color:white;">Category Worship Place</label>
                                <select class="form-control" id="se_kategori_f1" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select id as nilai, name as nama from category_worship_place order by nama ASC");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                                    }
                                              ?>
                                </select>
                                <button type="submit" class="btn btn-default" onclick='f1()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 2</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Event Name</span>
                                <input type="text" class="form-control" id="txt_event_f3" name="carimasjid" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Worship Place</span>
                                <div class="" id="co_fasilitas_f3">
                                  <div class="kategori">
                                    <h7 style="color :#f3fff4">Choose Facility</h7>
                                  </div>
                                  <?php
                                    $sql = "select * from facility";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f3" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <button type="submit" class="btn btn-default" onclick='f3()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 3</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Public Transportation</span></a>
                                <select class="form-control" style="width: 90%;" id="se_angkot_f2" >
                                  <?php
                                  include("connect.php");
                                  $angkot=pg_query("select * from angkot ");
                                  while($rowangkot = pg_fetch_assoc($angkot))
                                  {
                                    echo"<option value=".$rowangkot['id'].">".$rowangkot['destination']."</option>";
                                  }
                                  ?>
                                </select>
                                <br>
                              </div>
                              <button type="submit" class="btn btn-default" onclick='f2()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 4</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Type Hotel</label>
                                <select class="form-control" id="se_thotel_f21" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select * from hotel_type");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo '<option value="'.$baris["id"].'">'.$baris["name"].'</option>';
                                                    }

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Hotel</span>
                                <div class="" id="co_fasilitas_f21">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Facility</h7></div>
                                  <?php
                                    $sql = "select * from facility_hotel";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f21" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f21">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f21()" id="ra_radius_f21" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 5</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Angkot</label>
                                <select class="form-control" id="se_angkot_f15" >
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("select * from angkot");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo '<option value="'.$baris["id"].'">'.$baris["destination"].'</option>';
                                            }

                                      ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Type Souvenir</label>
                                <select class="form-control" id="se_tsouvenir_f15" >
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("select * from souvenir_type");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo '<option value="'.$baris["id"].'">'.$baris["name"].'</option>';
                                            }

                                      ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Min Prize Souvenir</span>
                                <input type="text" class="form-control" id="txt_min_f15" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Max Prize Souvenir</span>
                                <input type="text" class="form-control" id="txt_max_f15" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f15">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f15()" id="ra_radius_f15" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="reset();" >
                        <i class="fa fa-tasks"></i>
                        <span>Fungsional Dina</span>
                      </a>
                      <ul class="sub">
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 1</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Administrator Masjid Name</span>
                                <input type="text" class="form-control" id="txt_garin_f6" name="carimasjid" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Category Worship Place</label>
                                <select class="form-control" id="se_kategori_f6" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select id as nilai, name as nama from category_worship_place order by nama ASC");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                                    }
                                                  pg_close();

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Public Transportation</label>
                                <select class="form-control" id="se_angkot_f6" >
                                    <option value="">--Pilihan--</option>
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from angkot ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['destination']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                                <button type="submit" class="btn btn-default" onclick='f6()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 2</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Event Type</span>
                                <div class="" id="co_fasilitas_f12">
                                  <div class="kategori">
                                    <h7 style="color :#f3fff4">Choose Event Type</h7>
                                  </div>
                                  <?php
                                    $sql = "select * from type_event";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="tevent_f12" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Worship Place</span>
                                <div class="" id="co_fasilitas_f12">
                                  <div class="kategori">
                                    <h7 style="color :#f3fff4">Choose Facility</h7>
                                  </div>
                                  <?php
                                    $sql = "select * from facility";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f12" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <button type="submit" class="btn btn-default" onclick='f12()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 3</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Public Transportation</span></a>
                                <select class="form-control" style="width: 90%;" id="se_angkot_f8" >
                                  <?php
                                        include("connect.php");
                                        $angkot=pg_query("select * from angkot ");
                                        while($rowangkot = pg_fetch_assoc($angkot))
                                        {
                                          echo"<option value=".$rowangkot['id'].">".$rowangkot['destination']."</option>";
                                        }
                                  ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Restaurant Open In</span></a>
                                <input type="text" class="form-control timepicker-default" name="jam" id="se_waktu_f8" value="">
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f8">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f8()" id="ra_radius_f8" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 4</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Status Souvenir</span>
                                <div class="" id="co_type_f20">
                                  <div class="kategori">
                                    <h7 style="color :#f3fff4">Choose Status</h7>
                                  </div>
                                  <?php
                                    $sql = "select * from status";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="type_f20" value="'.$w['id'].'">'.$w['status'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Angkot Color</span>
                                <div class="" id="co_color_f20">
                                  <div class="kategori">
                                    <h7 style="color :#f3fff4">Choose Color</h7>
                                  </div>
                                  <?php
                                    $sql = "select * from angkot_color";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="color_f20" value="'.$w['id'].'">'.$w['color'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f20">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f20()" id="ra_radius_f20" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 5</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Sub District</label>
                                <select class="form-control" id="se_kecamatan_f14" >
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("select * from district");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo '<option value="'.$baris["id"].'">'.$baris["name"].'</option>';
                                            }

                                      ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Type Industry</label>
                                <select class="form-control" id="se_tindustry_f14" >
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("select * from industry_type");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo '<option value="'.$baris["id"].'">'.$baris["name"].'</option>';
                                            }

                                      ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Min Prize</span>
                                <input type="text" class="form-control" id="txt_min_f14" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Max Prize</span>
                                <input type="text" class="form-control" id="txt_max_f14" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f14">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f14()" id="ra_radius_f14" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="reset();" >
                        <i class="fa fa-tasks"></i>
                        <span>Fungsional Randa</span>
                      </a>
                      <ul class="sub">
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 1</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Sub District</label>
                                <select class="form-control" id="se_kecamatan_f1_ra" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select id as nilai, name as nama from district order by nama ASC");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                                    }
                                                  pg_close();

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Angkot Color</label>
                                <select class="form-control" id="se_warna_f1_ra" >
                                    <option value="">--Pilihan--</option>
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from angkot_color ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['color']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                                <button type="submit" class="btn btn-default" onclick='f11()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 2</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Administrator Masjid Name</span>
                                <input type="text" class="form-control" id="txt_garin_f7" name="carimasjid" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Fasilitas Condition</label>
                                <select class="form-control" id="se_kondisi_f7" >
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from facility_condition ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['condition']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Worship Place</span>
                                <div class="" id="co_fasilitas_f7">
                                  <div class="kategori">
                                    <h7 style="color :#f3fff4">Choose Facility</h7>
                                  </div>
                                  <?php
                                    $sql = "select * from facility";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f7" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <button type="submit" class="btn btn-default" onclick='f7()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 3</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Status Small Industry</label>
                                <select class="form-control" id="se_status_f13" >
                                    <option value="">--Pilihan--</option>
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from status ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['status']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Product Small Industry</span>
                                <div class="" id="co_fasilitas_f13">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Product</h7></div>
                                  <?php
                                    $sql = "select * from product_small_industry";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="produk_f13" value="'.$w['id'].'">'.$w['product'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f13">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f13()" id="ra_radius_f13" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 4</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Culinary</span>
                                <input type="text" class="form-control" id="txt_culinary_f19" name="carimasjid" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Culinary Open In</span></a>
                                <input type="text" class="form-control timepicker-default" name="jam" id="se_waktu_f19" value="">
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f19">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f19()" id="ra_radius_f19" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 5</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Min Prize Culinary</span>
                                <input type="text" class="form-control" id="txt_min_f9" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Max Prize Culinary</span>
                                <input type="text" class="form-control" id="txt_max_f9" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Culinary</span>
                                <div class="" id="co_fasilitas_f9">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Facility</h7></div>
                                  <?php
                                    $sql = "select * from facility_culinary";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fculinary_f9" value="'.$w['id'].'">'.$w['facility'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f9">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f9()" id="ra_radius_f9" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="reset();" >
                        <i class="fa fa-tasks"></i>
                        <span>Fungsional Reinaldo</span>
                      </a>
                      <ul class="sub">
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 1</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Category Worship Place</label>
                                <select class="form-control" id="se-kategori-f1-re" >
                                    <option value="">--Category--</option>
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("select id as nilai, name as nama from category_worship_place order by nama ASC");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                            }
                                          pg_close();

                                      ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Sub District</label>
                                <select class="form-control" id="se-kecamatan-f1-re" >
                                    <option value="">--Sub District--</option>
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("select id as nilai, name as nama from district order by nama ASC");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                            }
                                          pg_close();

                                      ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Type Event</label>
                                <select class="form-control" id="se-event-f1-re" >
                                <option value="">--Type Event--</option>
                                    <?php
                                           include "connect.php";
                                            $result=  pg_query("SELECT * FROM type_event");
                                              while($baris = pg_fetch_array($result))
                                            {
                                              echo "<option value=".$baris["id"].">".$baris["name"]."</option>";
                                            }
                                          pg_close();

                                      ?>
                                </select>
                                <br>
                              </div>
                                <button type="submit" class="btn btn-default" onclick='cari_f1re()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 2</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Type Hotel</label>
                                <select class="form-control" id="se_thotel_f24" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select * from hotel_type");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo '<option value="'.$baris["id"].'">'.$baris["name"].'</option>';
                                                    }

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Min Prize Hotel</span>
                                <input type="text" class="form-control" id="txt_min_f24" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Max Prize Hotel</span>
                                <input type="text" class="form-control" id="txt_max_f24" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f24">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f24()" id="ra_radius_f24" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 3</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Mesjid Administrator Name</span>
                                <input type="text" class="form-control" id="txt_garin_f22" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Event Name</label>
                                <input type="text" class="form-control" id="txt_event_f22" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Ustad Name</span>
                                <input type="text" class="form-control" id="txt_ustad_f22" name="carihotel" placeholder="Search..." >
                                <br>
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-default" onclick='f22()'><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 4</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Public Transportation</label>
                                <select class="form-control" id="se_angkot_f23" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select * from angkot order by destination asc");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo '<option value="'.$baris["id"].'">'.$baris["destination"].'</option>';
                                                    }
                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Culinary</span>
                                <div class="" id="co_fasilitas_f23">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Facility</h7></div>
                                  <?php
                                    $sql = "select * from facility_culinary";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f23" value="'.$w['id'].'">'.$w['facility'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f23">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f23()" id="ra_radius_f23" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();fasilitas();type_event();">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 5</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Type Tourism</span>
                                <div class="" id="co_type_f25">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Type</h7></div>
                                  <?php
                                    $sql = "select * from tourism_type";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="type_f25" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Public Transportation</span></a>
                                <select class="form-control" style="width: 90%;" id="se_angkot_f25" >
                                  <?php
                                        include("connect.php");
                                        $angkot=pg_query("select * from angkot ");
                                        while($rowangkot = pg_fetch_assoc($angkot))
                                        {
                                          echo"<option value=".$rowangkot['id'].">".$rowangkot['destination']."</option>";
                                        }
                                  ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Tourism Open In</span></a>
                                <input type="text" class="form-control timepicker-default" name="jam" id="se_waktu_f25" value="">
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f25">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f25()" id="ra_radius_f25" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="reset();" >
                        <i class="fa fa-tasks"></i>
                        <span>Fungsional Yola</span>
                      </a>
                      <ul class="sub">
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();fasilitas()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 1</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Kategori Worship Place</label>
                                <select class="form-control" id="se_kategori_f16" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select id as nilai, name as nama from category_worship_place order by nama ASC");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo "<option value=".$baris["nilai"].">".$baris["nama"]."</option>";
                                                    }
                                                  pg_close();

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Fasilitas Condition</label>
                                <select class="form-control" id="se_kondisi_f16" >
                                    <option value="">--Pilihan--</option>
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from facility_condition ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['condition']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Worship Place</span>
                                <div class="" id="co_fasilitas_f16">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Facility</h7></div>
                                  <?php
                                    $sql = "select * from facility";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f16" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <button type="submit" class="btn btn-default" onclick='f16()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();fasilitas()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 2</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Public Transportation</label>
                                <select class="form-control" id="se_angkot_f17" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select * from angkot order by destination asc");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo '<option value="'.$baris["id"].'">'.$baris["destination"].'</option>';
                                                    }
                                                  pg_close();

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Fasilitas Condition</label>
                                <select class="form-control" id="se_kondisi_f17" >
                                    <option value="">--Pilihan--</option>
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from facility_condition ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['condition']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Worship Place</span>
                                <div class="" id="co_fasilitas_f17">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Facility</h7></div>
                                  <?php
                                    $sql = "select * from facility";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f17" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <button type="submit" class="btn btn-default" onclick='f17()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();fasilitas()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 3</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Status Souvenir</label>
                                <select class="form-control" id="se_status_f18" >
                                    <option value="">--Pilihan--</option>
                                      <?php
                                            include("connect.php");
                                            $angkot=pg_query("select * from status ");
                                            while($rowangkot = pg_fetch_array($angkot))
                                            {
                                              echo"<option value=".$rowangkot['id'].">".$rowangkot['status']."</option>";
                                            }
                                        ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Product Souvenir</span>
                                <div class="" id="co_fasilitas_f18">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Product</h7></div>
                                  <?php
                                    $sql = "select * from product_souvenir";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="produk_f18" value="'.$w['id'].'">'.$w['product'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f18">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f18()" id="ra_radius_f18" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 4</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <label style="color:white;">Type Hotel</label>
                                <select class="form-control" id="se_thotel_f4" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select * from hotel_type");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo '<option value="'.$baris["id"].'">'.$baris["name"].'</option>';
                                                    }

                                              ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <label style="color:white;">Public Transportation</label>
                                <select class="form-control" id="se_angkot_f4" >
                                            <?php
                                                   include "connect.php";
                                                    $result=  pg_query("select * from angkot order by destination asc");
                                                      while($baris = pg_fetch_array($result))
                                                    {
                                                      echo '<option value="'.$baris["id"].'">'.$baris["destination"].'</option>';
                                                    }
                                              ?>
                                </select>
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f4">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f4()" id="ra_radius_f4" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset();fasilitas();type_event();">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 5</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <span style="margin-top: -20px; color: white">Fasilitas Tourism</span>
                                <div class="" id="co_type_f25">
                                  <div class="kategori"><h7 style="color :#f3fff4">Choose Fasiltias</h7></div>
                                  <?php
                                    $sql = "select * from facility_tourism";
                                    $hasil = pg_query($sql);
                                    while ($w = pg_fetch_assoc($hasil)) {
                                        echo '<div class="checkbox" style="color: #f3fff4"><label><input type="checkbox" name="fasilitas_f10" value="'.$w['id'].'">'.$w['name'].'</label></div>';
                                    }
                                  ?>
                                </div>
                                <br>
                              </div>
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Type Tourism</span></a>
                                <select class="form-control" style="width: 90%;" id="se_ttourism_f10" >
                                  <?php
                                        include("connect.php");
                                        $angkot=pg_query("select * from tourism_type ");
                                        while($rowangkot = pg_fetch_assoc($angkot))
                                        {
                                          echo"<option value=".$rowangkot['id'].">".$rowangkot['name']."</option>";
                                        }
                                  ?>
                                </select>
                                <br>
                              </div>
                              <div class="form-group">
                                <a style="margin-top: -20px; color: white" ><span>Tourism Open In</span></a>
                                <input type="text" class="form-control timepicker-default" name="jam" id="se_waktu_f10" value="">
                                <br>
                              </div>
                              <a style="margin-top: -20px; color: white" ><span>Nearby</span>&nbsp<b id="angka_f10">0</b>&nbsp<b>m</b></a>
                              <input  type="range" onchange="f10()" id="ra_radius_f10" name="inputradiusangkot" data-highlight="true" min="0.5" max="15" value="0.5">
                            </div>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" onclick="reset();" >
                        <i class="fa fa-tasks"></i>
                        <span>Fungsional Tambahan</span>
                      </a>
                      <ul class="sub">
                        <li class="sub-menu">
                          <a href="javascript:;" onclick="reset()">
                            <i class="fa fa-calendar"></i>
                            <span>Fungsional 1</span>
                          </a>
                          <ul class="sub">
                            <div  class="panel-body" >
                              <div class="form-group">
                                <button type="button" class="btn btn-default btn-block" onclick="pinlocation()" name="button">Pin My Location</button>
                              </div>
                              <div class="form-group">
                                <button type="button" onclick="firstloc()" class="btn btn-default btn-block" name="button">My First Location</button>
                              </div>
                              <div class="form-group">
                                <button type="button" onclick="route_to_begin()" class="btn btn-default btn-block" name="button">Route To First <br> Location</button>
                              </div>
                                <button type="submit" class="btn btn-default" onclick='cari_f1d()'><i class="fa fa-search"></i></button>
                            </div>
                          </ul>
                        </li>
                      </ul>
                  </li>
<?php
 // skrip koneksi database
 	include('connect.php');
 $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
 $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
 $waktu   = time(); //
 // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
 $s = pg_query("SELECT * FROM statistika2 WHERE ip='$ip' AND tanggal='$tanggal'");

 // Kalau belum ada, simpan data user tersebut ke database
 if(pg_num_rows($s) == 0){
     pg_query("INSERT INTO statistika2 (ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
 }
 // Jika sudah ada, update
 else{
     pg_query("UPDATE statistika2  SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");

 }
 $pengunjung       = pg_num_rows(pg_query("SELECT * FROM statistika2  WHERE tanggal='$tanggal' GROUP BY ip, hits, online, tanggal")); // Hitung jumlah pengunjung
 $totalpengunjung  = pg_result(pg_query("SELECT COUNT(hits) FROM statistika2 "), 0); // hitung total pengunjung
 $bataswaktu       = time() - 300;
 $pengunjungonline = pg_num_rows(pg_query("SELECT * FROM statistika2  WHERE online > '$bataswaktu'")); // hitung pengunjung online
 ?>

 <li class="sub-menu">
                      <a href="javascript:;" onclick="list()" >
                  </li>
				</ul>
          </div>
      </aside>
      <section id="main-content">
      <section class="wrapper site-min-height">
          <div class="row mt">
              <div class="col-sm-8" id="hide2">
                  <section class="panel">
                      <header class="panel-heading">
                          <label style="color: black">Google Map with Location List</label>
                          <a class="btn btn-default" role="button" data-toggle="collapse" onclick="aktifkanGeolocation()" title="Current Position"   ><i class="fa fa-map-marker" style="color:black;"></i></a>
                          <a class="btn btn-default" role="button" data-toggle="collapse" onclick="manualLocation()" title=" Manual Position"><i class="fa fa-location-arrow" style="color:black;"></i></a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" href="#terdekat" title="Nearby" aria-controls="terdekat"><i class="fa fa-road" style="color:black;"></i></a>
                    <a class="btn btn-default" role="button" data-toggle="collapse" onclick="tampilsemua();resultt()" title="All Mosque" aria-controls="terdekat"><i class="fa fa-map-pin" style="color:black;"></i></a>
					<label id="tombol">
					<a class="btn btn-default" role="button" id="showlegenda" data-toggle="collapse" onclick="legenda()" title="Legend"   ><i class="fa fa-eye" style="color:black;"></i></a></label>
                    <label></label>
                    <div class="collapse" id="terdekat">
                    <div class="well">
                    <label><b>Radius&nbsp</b></label><label style="color:black" id="km"><b>0</b></label>&nbsp<label><b>m</b></label><br>
                    <input  type="range" onclick="cek();aktifkanRadius();resultt()" id="inputradiusmes" name="inputradiusmes" data-highlight="true" min="1" max="20" value="1" >
                    </div>
          </div>


               </h3>
                      </header>
                      <div class="panel-body">
                          <div id="map" style="width:100%;height:400px; z-index:60"></div>
                      </div>
                  </section>
              </div>
              <div class="col-sm-4" id="result">
    <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-compose">Result</a>
                        <div class="box-body" style="max-height:400px;overflow:auto;">

                      <div class="form-group" id="hasilcari1" style="display:none;">
                        <table class="table table-bordered" id='hasilcari'>
                        </table>
                      </div>
                  </div>
                    </div>
                </section>
                 </div>

                        <div class="col-sm-4" style="display:none;" id="eventt">
    <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-compose">Event</a>
                        <div class="box-body" style="max-height:350px;overflow:auto;">

                      <div class="form-group" id="hasilcari1">
                        <table id="example1" class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>No</th>
                        <th>Event Name</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
            include ("connect.php");
                        $sql = pg_query("SELECT * FROM event order by id asc");
                        while($data =  pg_fetch_array($sql)){
                        $id = $data['id'];
                        $name = $data['name'];
                        ?>
                        <tr>
                        <td><?php echo "$id"; ?></td>
                        <td><?php echo "$name"; ?></td>

                        </div>
                        </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                      </div>
                  </div>
                    </div>
                </section>
                 </div>

                 <div class="col-sm-8" style="display:none;" id="infoo">
    <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-compose">Information</a>
                        <div class="box-body" style="max-height:350px;overflow:auto;">

                      <div class="form-group">
                        <table class="table" id='info'>
                        <tbody  style='vertical-align:top;'>
                        </tbody>
                        </table>

                      </div>


                  </div>
                    </div>
                </section>
                 </div>

				  <div class="col-sm-8" style="display:none;" id="infoev">
    <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-compose">Information of Event</a>
                        <div class="box-body" style="max-height:350px;overflow:auto;">

                      <div class="form-group">
                        <table class="table" id='infoevent'>
                        <tbody  style='vertical-align:top;'>
                        </tbody>
                        </table>
                      </div>
                  </div>
                    </div>
                </section>
                 </div>

                 <div class="col-sm-8" style="display:none;" id="infoo1">
    <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-compose">Route Public Transportation</a>
                        <div class="box-body" style="max-height:350px;overflow:auto;">

                      <div class="form-group">
                        <table class="table table-bordered" id='infoak'>
                        </table>
                      </div>
                  </div>
                    </div>
                </section>
                 </div>

				 <div class="col-sm-4" style="display:none;" id="resultaround">
    <section class="panel">
                    <div class="panel-body">
                        <a class="btn btn-compose">Attraction Around</a>
                        <div class="box-body" style="max-height:400px;overflow:auto;">

                      <div class="form-group" id="hasilcari2" style="display:none;">
                        <table class="table table-bordered" id='hasilcariaround'>
                        </table>
                      </div>
                  </div>
                    </div>
                </section>
                 </div>

                  <div class="col-sm-8" style="display:none;" id="att1">
    <section class="panel">
                    <div class="panel-body" >
                        <a class="btn btn-compose">Attraction Around Mosque</a>
                        <div class="box-body" style="max-height:350px;overflow:auto;">

                      <div class="form-group">
                        <table class="table table-bordered" id='info1'>
                        </table>
                      </div>
                  </div>
                    </div>
                    </section>
					</div>
					<div class="col-sm-4" style="display:none;" id="att2">
          <section class="panel">
					<div class="panel-body">
                        <a class="btn btn-compose">Route</a>
                    </div>
                    <div id="rute" class='box-body'></div>
                </section>
                 </div>
          </div>

    <div class="row mt" style="display:none;" id="showlist">
    <?php
    include 'connect.php';
    $sql = pg_query("SELECT * FROM worship_place");
     ?>
<?php
  $jml_kolom=3;
  $cnt = 1;
  while($data =  pg_fetch_assoc($sql)){
		if ($cnt >= $jml_kolom)
		{
          echo "<div class='row mt mb'>";
		}

  ?>
  <div class="row-mt">
    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-6 desc">
		<div class="project-wrapper">
			<div class="project">
				<div class="photo-wrapper">
					<div class="photo">
						<a class="fancybox" href="foto/<?php echo $data['image']; ?>"><img class="img-responsive" src="foto/<?php echo $data['image']; ?>" alt=""></a>
					</div>
					<div class="overlay"></div>
					<p style="color: #f3fff4"><?php echo $data['name']; ?><br><?php echo $data['address']; ?></p>
				</div>
			</div>
		</div>
	</div>
  </div>

  <?php
  if ($cnt >= $jml_kolom)
		{

          $cnt = 0;
		  echo "</div>";
		}
		$cnt++;
  }
  ?>


        </div>

    </section>

      </section>
      <footer class="site-footer">
          <div class="text-center">
              1311521008 - Fitri Yuliani
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/fancybox/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-slider.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="assets/js/advanced-form-components.js"></script>

    <!--common script for all pages-->
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Visitor Statistics',
            // (string | mandatory) the text inside the notification
            text: ' <span>Today : <?php echo $pengunjung; ?> <br> Total : <?php echo $totalpengunjung; ?> <br> Online User : <?php echo $pengunjungonline; ?>	</span>',
            // (string | optional) the image to display on the left
            image: 'assets/img/1.ico',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>

	  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  <script type="text/javascript">
$('#inputradius').slider({
	formatter: function(value) {
		return value+' km';
		}
	});
$('[data-toggle="tooltip"]').tooltip();
</script>

<script type="text/javascript" src="k3.js"></script>
<script type="text/javascript" src="fu25Aldo.js"></script>
<script type="text/javascript" src="fu25Yola.js"></script>
<script type="text/javascript" src="fu25Astri.js"></script>
<script type="text/javascript" src="kelp3.js"></script>
  </body>
</html>
