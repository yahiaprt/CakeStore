<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <title>Ekka - Admin Dashboard HTML Template.</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet">

    <!-- ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="assets/css/ekka.css">

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon">

    <style>
        body {
            background-image: url('assets/img/op4.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }

        .card-wrapper {
            margin-bottom: 20px;
            width: 100%;
        }

        .card-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }

        .card-top {
            flex: 1;
        }

        .card-bottom {
            flex: 1;
            text-align: center;
        }

        .card-action {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
    </style>
</head>
<body>
<script>
	function navigateToRoute(route) {
		// Change the window location to the specified route
		window.location.href = route;
	}
</script>   
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card-wrapper">
                <div class="card-container">
                    <div class="card-top">
					<img class="card-image" src="assets/img/op1.jpg" alt="" onclick="navigateToRoute('/RoleUser')">

                 </div>
                    <div class="card-bottom">
                        <p>CUSTOMER</p>
                    </div>
                   
                </div>




				
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card-wrapper">
                <div class="card-container">
                    <div class="card-top">
					<img class="card-image" src="assets/img/op2.jpg" alt="" onclick="navigateToRoute('/RoleSeller')">
                    </div>
                    <div class="card-bottom">
                        <p>CUSTOMER</p>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
