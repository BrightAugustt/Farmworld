<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="b-example-divider"></div>

    <?php require("./header.php"); ?>

    <main>
        <div class="container py-4">
            <div class="p-5 mb-6 bg-light border rounded-3" style="background-image: url('../images/happyShopper.jpg');">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold text-white">Shop From Us Today!</h1>
                    <p class="col-md-8 fs-4 text-white">Want to look through our Quality Yet Very Affordable Products? Click the button below to check them out now!</p>
                    <a href="shop.php"><button class="btn btn-primary btn-lg" type="button" name="register">Shop Today!</button></a>
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Who Are We? <span class="text-muted">What Do We Do?</span></h2>
                    <p class="lead">
                        Dash Products & Services is a Ghanaian organization that aims to bring healthy organic-based products to Ghanaians through our wide range of cosmetics products. <br>
                        This idea was birthed when we realized that chemical hair products can cause cancer, and many females who wash their hair weekly or bi-weekly are not aware of this. <br>
                        <br>
                        This necessitated the need for us to research on how to use herbal products to produce shampoos to not only keep our customers' hairs clean but also boost hair growth while making their hair <i class="fa fa-indent" aria-hidden="true">look alive.</i> <br>
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="../images/dashG.jpg" alt="Dash Products" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Dash</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
                </div>
            </div>


            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">What Makes Us Different? <span class="text-muted">Simple, Take Note!</span></h2>
                    <p class="lead">
                        Our products are <strong class="fa fa-bold" aria-hidden="true">
                            hair shampoo and neutralizing shampoo with 5.5 Ph balance, Hair conditioner with shea butter, leave-in conditioner,<br>
                            car shampoo with wax, setting lotion, hair food with Indian hemp and chebe seeds, African black soap
                            body wash with honey, assorted handmade soaps{carrot, oats, avocado, oats, shea butter etc.} herbal based body lotions, Detergents, washing powder, and medicated soaps for acne and dark spots.<br>
                        </strong>

                        <br>
                        We are a member of Ghana Export Promotion Authority (GEPA) and other institutions that promote local trade and SMEs. <br>
                        We Look at the future while surrounding our clients with the best products on the market, filled with nature, love. <br>
                        We intend to market our products nationwide and partake in trade fairs both locally and internationally.
                        <strong> This is our way of building a better world. </strong>
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="../images/locs.jpg" alt="man standing before city lights" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
                </div>
            </div>

            <!-- <hr class="featurette-divider">
            </hr> -->
        </div>
    </main>
    <?php require("./footer.php"); ?>
</body>

</html>