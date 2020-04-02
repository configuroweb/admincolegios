<div class="content">
            <div class="container-fluid">
                <?php include("libs/alerts.php"); ?>
                <div class="row"><!--row begins-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Estudiantes</strong></p>
                                            <?php countrecords("students"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="students_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>Pagos</strong></p>
                                            <?php countrecords("feescollection"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="feescollection_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-credit-card"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p> <strong>Bancos</strong></p>
                                            <?php countrecords("branch"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="branch_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-id-badge"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Profesores</strong></p>
                                           <?php countrecords("teachers"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="teachers_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div><!--row ends-->
                <!--row begins-->
                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-harddrives"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Materias</strong></p>
                                           <?php countrecords("subjects"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="subjects_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-crown"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Clases</strong></p>
                                            <?php countrecords("classes"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="classes_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-blackboard"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Escuelas</strong></p>
                                            <?php countrecords("streams"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="streams_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Albergues</strong></p>
                                            <?php countrecords("hostels"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="hostels_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div><!--row ends-->
                </div>
                <!--row begins-->
                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-layers-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Calendario</strong></p>
                                            <?php countrecords("timetable"); ?>
                                        </div>
                                    </div>
                                </div>
                               <a href="timetable_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-flag-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Eventos</strong></p>
                                            <?php countrecords("events"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="events_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-announcement"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Noticias</strong></p>
                                            <?php countrecords("notices"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="notices_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-primary text-center">
                                            <i class="ti-cup"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Resultado de Exámenes</strong></p>
                                            <?php countrecords("examresults"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="examresults_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div><!--row ends-->
                </div>
                <!--row begins-->
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Recolección de Pagos Reciente</h4>
                                <p class="category">Colección de Pagos por Fecha</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Monto</th>
                                        <th>Balance</th>
                                    </thead>
                                    <tbody>
                                        <?php getrecentfees("feescollection"); ?>
   
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div><!--row ends-->
                    </div>
                    <!--row begins-->
                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Padres</strong></p>
                                            <?php countrecords("parents"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="parents_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-tag"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Exámenes</strong></p>
                                           <?php countrecords("examcategories"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="examcategories_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-key"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Sesiones</strong></p>
                                            <?php countrecords("sessions"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="sessions_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-bar-chart-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Asistencia</strong></p>
                                            <?php countrecords("classattendance"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="classattendance_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div><!--row ends-->
                </div>
                <!--row begins-->
                    <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-write"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Estructura de Tarifas</strong></p>
                                           <?php countrecords("schoolmoney"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="schoolmoney_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-stats-up"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p><strong>Tipos de Estudiantes</strong></p>
                                            <?php countrecords("studentcategories"); ?>
                                        </div>
                                    </div>
                                </div>
                                <a href="studentcategories_view.php">
                                    <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-arrow-right"></i>Ver
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div><!--row ends-->
                </div>

<!--cards and widgets above here-->
        <footer class="footer">
            <div class="container-fluid">

                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>,Traido &nbsp;<i class="ti-heart heart"></i> &nbsp;a ti por <a href="https://www.configuroweb.com/">ConfiguroWeb</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Bienvenido  a <b> Sistema Administrativo de Colegios </b> - Un hermoso software para administrar su escuela."

            },{
                type: 'success',
                timer: 3000
            });

    	});
	</script>

</html>