

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="style.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" >
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/img/Tipsytextlogo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="Dashboard.php"><i class="fas fa-th"></i>Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Login.php"><i class="fas fa-lock"></i>Login</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Account.php"><i class="far fa-id-badge"></i>My Account</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="Contact.php"><i class="fas fa-phone-square"></i>Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--- Chart -->
<div class="container-fluid padding">
    <div class="row text-center padding ">
        <div class="col-xs-12 col-sm-6 chart-one" >
            <h4 class="display-1s">Pick your time and days</h4>
            <input type="text" id="datetimec1" class="form-control" name="datetimesc1" />
            <canvas id="visitorChart"></canvas>
        </div>
        <div class="col-xs-12 col-sm-6 " >
            <h4 class="display-1s">Pick your time and days</h4>
            <input type="text" id="datetimec2"  class="form-control" name="datetimesc2" />
            <canvas id="visitorCharts"></canvas>
        </div>
    </div>
</div>

<!--- Welcome Section -->


<!--- Three Column Section -->


<!--- Two Column Section -->


<!--- Fixed background -->


<!--- Emoji Section -->


<!--- Meet the team -->


<!--- Cards -->


<!--- Two Column Section -->

<!--<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
    <i class="fa fa-calendar"></i>&nbsp;
    <span></span> <i class="fa fa-caret-down"></i>
</div>-->

<!--<script>
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });
</script>-->
<!--- Connect -->


<!--- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <a class="navbar-brand" href="index.php"><img src="assets/img/Tipsytextlogo.jpg"></a>
                <hr class="light">
                <p>Phone Number: </p>
                <p>Email:</p>
                <p>Potchefstroom, North West, 2520  </p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours </h5>
                <hr class="light">
                <p>Mondays to Fridays: 8am - 4pm </p>
                <p>Saterday: 10am - 2pm</p>
                <p>Sundays: 11am - 1pm</p>
                <p>Public Holidays: Closed</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5>Service Area </h5>
                <hr class="light">
                <p>Potchefstroom, North West, 2520  </p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5> tipsysa.co.za</h5>
            </div>
        </div>
    </div>
</footer>

<!--- JavaScript -->
<!--- Chart JavaScript -->
<script>
    var searchdatec1 = 's';
    var searchdatec2 = document.getElementById('datetimec2').value;
    let visitorChart = document.getElementById('visitorChart').getContext('2d');
    let visitorCharts = document.getElementById('visitorCharts').getContext('2d');
    //Global Options
    let visitorPopChart = new Chart(visitorChart, {
        type: 'bar',// bar, horizontalBar, line, pie, radar, doughnut, radar, polarArea
        data: {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saterday", "Sunday"],
            datasets: [{
                label: 'Visitors',
                data: [986,
                    864,
                    1254,
                    945,
                    1546,
                    1732,
                    0],
                backgroundColor: ['rgba(255,99,132,0.6',
                    'rgba(25,99,132,0.6',
                    'rgba(255,9,132,0.6',
                    'rgba(255,99,12,0.6',
                    'rgba(25,99,132,0.6',
                    'rgba(25,9,132,0.6',
                    'rgba(25,0,12,0.6'],
                fill: false,
                borderColor: '#777'
            }],

        },
        options: {
            title:{
                display:true,
                text:'Total visitors from '+searchdatec1,
                fontSize:25
            },
            legend:{
                display: false
            }
        }

    });
    let visitorPopCharts = new Chart(visitorCharts, {
        type:'bar',// bar, horizontalBar, line, pie, radar, doughnut, radar, polarArea
        data:{
            labels: ["Monday","Tuesday","Wednesday","Thursday","Friday","Saterday","Sunday"],
            datasets: [{
                label: 'Visitors',
                data: [986,
                    864,
                    1254,
                    945,
                    1546,
                    1732,
                    0],
                backgroundColor: ['rgba(255,99,132,0.6',
                    'rgba(25,99,132,0.6',
                    'rgba(255,9,132,0.6',
                    'rgba(255,99,12,0.6',
                    'rgba(25,99,132,0.6',
                    'rgba(25,9,132,0.6',
                    'rgba(25,0,12,0.6'],
                fill: false,
                borderColor: '#777'
            }],

        },
        options: {
            title:{
                display:true,
                text:'Total visitors from '+ searchdatec2,
                fontSize:25
            },
            legend:{
                display: false
            }
        }
    });

<!--- DateTime pickers javascript -->
    $(function date1() {
        var start =moment().subtract(29, 'days');
        var end = moment().add(29, 'days');

        $('input[name="datetimesc1"]').daterangepicker({
            timePicker: true,
            startDate: start,
            endDate: end,
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
        return true;
    });

    $(function date2() {
        $('input[name="datetimesc2"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
        return 'date';
    });
   /* var date = $("#datetimec1").data("datetimepicker").getDate();*/

</script>
</body>
</html>
