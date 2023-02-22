<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/aeo.css">
    <script defer src="../js/modal.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="customers.php">
            <img class="bi me-2" src="../images/logo.png" width="189" height="32" role="img" aria-label="Bootstrap"> Welcome, Admin!
            <use xlink:href="#bootstrap" />
            </img>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign Out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Crops
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="productCat.php">Categories</a>
                                <a class="dropdown-item" href="allProducts.php">All Crops</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="customers.php">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="farmers.php">
                                <span data-feather="file"></span>
                                Farmers
                            </a>
                        </li>
                    </ul>
                </div>
                <hr class="">
                <div class="nav-item dropdown mt-8">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <li class="dropdown-menu text-small shadow" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Profile</a>
                    </li>
                </div>
        </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Customer Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 clearfix">
                                <h3 class="pull-left">Edit Customer Details</h3>
                                <a href="addCustomer.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer</a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name Of Customer</th>
                                        <th>Last Name Of Customer</th>
                                        <th>Telephone</th>
                                        <th>Region</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require "../controllers/contact_controller.php";
                                    $result = get_all_records_ctr();

                                    foreach ($result as $contact) {
                                        echo "<tr>
                                                        <td>" . $contact['customer_id'] . "</td>
                                                        <td>" . $contact['customer_fname'] . "</td>
                                                        <td>" . $contact['customer_lname'] . "</td>
                                                        <td>" . $contact['customer_contact'] . "</td>
                                                        <td>" . $contact['customer_region'] . "</td>
                                                        <td>" . $contact['customer_email'] . "</td>
                                                        <td>";

                                        echo "<th><button type='button' class=' mr-3 btn-first-modal btn btn-primary btn-lg' data-toggle='modal' data-target='#first-modal$i' style='font-size:10px;'>
                                        <span class='fa fa-pencil'></span>
                                        </button><th>";  
                                        echo "<th><button type='button' class='btn-second-modal btn btn-primary btn-lg'>
                                        <span class='bi bi-envelope-fill'></span>
                                        </button><th>"; 
                                        
                                        "</td>";
                                        "</tr>";

                                        echo 
                                        "
                                        <div class='modal' id='first-modal' data-backdrop='static' data-keyboard='false'>
                                            <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                <h4 class='modal-title' id='myModalLabel'>First Modal</h4>
                                                </div>
                                                <div class='modal-body'>
                                                    <div class='form'>
                                                        <form id='formid' action='../actions/updatecrop.php' method='POST' class='row g-3'>
                                                            <div class='col-12'>
                                                                <label>Crop Name</label>
                                                                <input type='text' name='crop_name' id='crop_name' class='form-control' placeholder='Crop Name' pattern='[A-Za-z]+'>
                                                            </div>
                                                            <div class='col-12'>
                                                                <label>Farmer Name</label>
                                                                <input type='text' name='farmer_name' id='farmer_name' class='form-control' placeholder='Farmer Name' pattern='[A-Za-z]+'>
                                                            </div>
                                                            <div class='col-12'>
                                                                <label>Farmer Contact</label>
                                                                <input type='tel' name='farmer_contact' id='farmer_contact' class='form-control' placeholder='Contact' pattern='^\d{10}$'>
                                                            </div>
                                                            <div class='col-12'>
                                                                <label>Farm Size</label>
                                                                <input type='text' name='farm_size' id='farm_size' class='form-control' placeholder='Farm size'>
                                                            </div>
                                                            <div class='col-12'>
                                                                <label>Quantity(kg)</label>
                                                                <input type='text' name='qty' id='qty' class='form-control' placeholder='Quantity' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$'>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class='modal-footer'>
                                                <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                                <button type='button' class='btn btn-primary'>Send message</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>";


                                        echo "
                                        <div class='modal' id='second-modal' data-backdrop='static' data-keyboard='false'>
                                        <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                            <button type='button' class='btn-second-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                            <h4 class='modal-title'>Second Modal</h4>
                                            </div>
                                            <div class='modal-body'>
                                            <form>
                                                <div class='form-group'>
                                                    <label for='recipient-name' class='col-form-label'>Recipient:</label>
                                                    <input type='text' class='form-control' id='recipient-name'>
                                                </div>
                                                <div class='form-group'>
                                                    <label for='message-text' class='col-form-label'>Message:</label>
                                                    <textarea class='form-control' id='message-text'></textarea>
                                                </div>
                                             </form>
                                            </div>
                                            <div class='modal-footer'>
                                            <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                            <button type='button' class='btn btn-primary'>Send message</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                        ";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container text-center">
                    <h1>Working with Multiple Modals</h1>
                    <div class="margin-lg">
                        <button type="button" class="btn-first-modal btn btn-primary btn-lg" data-toggle="modal" data-target="#first-modal">
                        Launch First Modal
                        </button>
                    </div>
                    <div class="margin-lg">
                        <button type="button" class="btn-second-modal btn btn-primary btn-lg">
                        Launch second Modal
                        </button>
                    </div>
                    

                    <div class="modal" id="first-modal" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">First Modal</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form">
                                    <form id="formid" action="../actions/addcrop.php" method="POST" class="row g-3">
                                        <div class="col-12">
                                            <label>Crop Name</label>
                                            <input type="text" name="crop_name" id="crop_name" class="form-control" placeholder="Crop Name" pattern="[A-Za-z]+">
                                        </div>
                                        <div class="col-12">
                                            <label>Farmer Name</label>
                                            <input type="text" name="farmer_name" id="farmer_name" class="form-control" placeholder="Farmer Name" pattern="[A-Za-z]+">
                                        </div>
                                        <div class="col-12">
                                            <label>Farmer Contact</label>
                                            <input type="tel" name="farmer_contact" id="farmer_contact" class="form-control" placeholder="Contact" pattern="^\d{10}$">
                                        </div>
                                        <div class="col-12">
                                            <label>Farm Size</label>
                                            <input type="text" name="farm_size" id="farm_size" class="form-control" placeholder="Farm size">
                                        </div>
                                        <div class="col-12">
                                            <label>Quantity(kg)</label>
                                            <input type="text" name="qty" id="qty" class="form-control" placeholder="Quantity" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn-second-modal-close btn btn-default">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="modal" id="second-modal" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-second-modal-close close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Second Modal</h4>
                            </div>
                            <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                             </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn-second-modal-close btn btn-default">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> -->
            
        </main>
    </div>
    </div>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>