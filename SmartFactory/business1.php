
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Buttons</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- <style>
        input[type="radio"] {
        margin-top: -1px;
        vertical-align: middle;
        }
    </style> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

             <!-- Sidebar - Brand -->
             <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MES</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - 영업메뉴 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>영업관리</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="business1.php">생산품 수주 관리</a>
                        <a class="collapse-item" href="business2.html">발주현황</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - 자재관리 메뉴 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>자재관리</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="materials1.html">생산계획</a>
                        <a class="collapse-item" href="materials2.html">자재 입고 이력</a>
                        <a class="collapse-item" href="materials3.html">자재 출고 이력</a>
                        <a class="collapse-item" href="materials4.html">보유 자재</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - 생산관리 메뉴 -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePro"
                    aria-expanded="true" aria-controls="collapsePro">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>생산관리</span>
                </a>
                <div id="collapsePro" class="collapse" aria-labelledby="headingPro"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="production1.html">생산현황일지</a>
                        <a class="collapse-item" href="production2.html">전체 품목 관리</a>

                    </div>
                </div>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                설정
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>관리자 시스템</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Login Screens:</h6> -->
                        <a class="collapse-item" href="person1.html">사원등록</a>
                        <a class="collapse-item" href="person2.html">부서관리</a>
                        <a class="collapse-item" href="person3.html">사용자 등록</a>
                        <a class="collapse-item" href="customer.html">거래처 조회</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ERP 관리자</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h5 mb-4 text-gray-800">영업관리 - 생산품 수주관리</h1>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <table>
                                <tr><!-- 첫번째 줄 시작 -->
                                    <td >
                                    <form>
                                            <div class="form-group row">
                                                <label for="inputPassword6">수주일자: </label>
                                                <input type="date"  class="form-control mx-sm-3"  style = "width: 35%;">~
                                                <input type="date"  class="form-control mx-sm-3"  style = "width: 35%;">
                                            </div>
                                    </form>
                                    </td>
                                    <td style = "width:50%;">

                                        <form method="get" action="form-action.html">
                                           
                                            <label><input type="radio" name="fruit" value="today">금일</label>
                                            <label><input type="radio" name="fruit" value="moth">금월</label>
                                            <label><input type="radio" name="fruit" value="year">금년</label>
                                            <!-- <p><input type="submit" value="Submit"> <input type="reset" value="Reset"></p> -->
                                        </form>
                                    </td>
                                    </tr>
                            </table>

                            <table>
                                    
                                    <tr>    <!--두번째 행 -->
                                    <td>
                                    <form>
                                    <div class="form-group row">
                                        <label for="inputId" class="col-form-label">소재:</label>
                                        <div class="col-sm-8">
                                            <input type="id" class="form-control" id="inputId">
                                        </div>
                                    </div>
                                    </form>
                                    </td>

                                    <td>
                                    <form>
                                        <div class="form-group row">
                                        <label for="inputId" class="col-form-label">품목:</label>
                                        <div class="col-sm-8">
                                            <input type="id" class="form-control" id="inputId">
                                        </div>
                                    </div>
                                    </form>
                                    </td>

                                    <td>
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputId" class="col-form-label">분야:</label>
                                            <div class="col-sm-8">
                                                <input type="id" class="form-control" id="inputId">
                                            </div>
                                    </div>
                                    </form>
                                    </td>
                                </tr>
                                           
                            </table>
                                
                            <button class = "btn btn-primary" style = "margin-left:90%;">검색</button>
                            <!-- </div>
                            </div> -->
                        </div>
                        <div class="card-body">
                        <a href="#" class="btn btn-primary" role="button" aria-pressed="true" style = "margin-left:90%; margin-bottom:1%;">내려받기</a>
                        
                        <div class="table-responsive">
                        <table class="table table-borderedr" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class = "alert alert-primary">
                                <th scope="col" >#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- 다음페이지 넘기기 -->
                        <nav aria-label="Page navigation example" style = "margin-left:38%;">
                            <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- <button class = "btn btn-primary" style = "margin-left:90%;">검색</button> -->
                        <!-- <a href="#" class="btn btn-primary" role="button" aria-pressed="true">등록</a> -->

                        


                    <?php
                    	$db_id='w1004mesmg';
                        $db_pw='sunmoons1s2s3!';
                        $db_name='w1004mesmg';
                        $db_domain='localhost';
                        $db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);
                    
                        if($db) {
                            echo"db연결 성공";
                        }else
                        echo "db연결 실패"; 




                        
                        $jb_sql = "SELECT * FROM sales;";
                        $jb_result = mysqli_query( $db, $jb_sql );
                        while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                            echo '<p>' . $jb_row[ 'no' ] . $jb_row[ 'sphere' ] . $jb_row[ 'type' ] . $jb_row[ 'product1' ] . $jb_row[ 'company' ]. $jb_row[ 'day' ].   '</p>';
                          }

                    ?>


                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="http://localhost/mes_project/login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="modal.js"></script>

</body>

</html>