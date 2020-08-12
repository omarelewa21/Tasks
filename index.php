<!DOCTYPE html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Product</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/styles.css?version=51">
</head>

<body>
    <div class="AllContainer">
        <header class="Title">
            <h1 class="Title-name">Product Form</h1>
        </header>

        <section class="form-sec">
            <form class="product-form" method="GET" action="collect.php">
                <div class="big-container">
                    <div class="General">
                    
                    <button class="sign-box minus" type="button" onclick="remove(this)">
                    <i class="fas fa-minus-circle minus sign"></i>
                    </button>
                    
                    <div class="container">
                        <input class="labels" type="text" name="label-name" placeholder="Field Name">
                        <input class="inputs" type="text" name="input-name" placeholder="Value">
                    </div>
                    
                    <button class="sign-box positive" type="button" onclick="Clone(this)"><i class="fas fa-plus-circle plus sign"></i></button>
                    
                    
                </div>
                </div>
                
                <div class="submit-btn">
                    <button class="submit" type="Submit">Insert Product</button>
                </div>
                
                
            </form>
        </section>
    </div>
    
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/add_product.js"></script>
</body>