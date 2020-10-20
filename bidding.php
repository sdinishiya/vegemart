<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0", meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/bidding.css">
    <title>Bidding Dashboard | Vegemart</title>
</head>
<body>
    <div>
        <?php include "./includes/nav.php"; ?>   
    </div>
    <div class="row">
        <div class="product-card mt-3">
        <div class="columns group">
            <div class="column is-6 pl-2 pr-1">
                <div class="row">                    
                        <img class="product-image" src="https://i2.wp.com/ultimateguide.club/wp-content/uploads/2020/05/PissuKanna.jpg?resize=384%2C358&ssl=1" alt="">
                </div>
            </div> 
              
            <div class="column is-6 pl-5">               
                    <div class="row">
                        <div class="columns group">                            
                            <div class="column is-4">
                                <h1 class="justify-text mb-3 pb-1 pl-2" style="color:#5D6163!important;font-size:32px;!important">PUMPKIN</h1>
                                <h3 class="justify-text mb-3 pb-5 pl-2">Location: </h3>
                                <h5 class="justify-text mb-1 pl-2">CURRENT BID: </h5>
                                <h3 class="justify-text mb-2 pl-2">RS:  200</h3>
                                
                                    <div class="text-box pl-2">
                                        <input type="text" name="editProductName" placeholder="Enter your bids" required/>
                                        <div class="submit-box">
                                            <input type="submit" name="editProductName" value="SUBMIT"/>
                                        </div>                                        
                                    </div>
                                   
                            </div>
                            <div class="column is-2">
                                <h1 class="justify-text mb-2 pb-5 pl-3" style="color:#81807F!important"></h1>
                                <h3 class="justify-text mb-1 pl-3">Street </h3>
                                <h3 class="justify-text mb-1 pl-3">Village </h3>
                                <h3 class="justify-text mb-3 pb-2 pl-3">District </h3>
                                <h5 class="justify-text mb-1 pl-5">115BIDS </h5>
                            </div>
                           
                        </div>
                    </div>                     
            </div>
        </div> 
        </div>
           
    <div class="items-grid ml-3">
        <div class="row item-legend">
            <div class="columns group">
                <div class="column is-3">
                    <h5></h5>
                </div>
                <div class="column is-2">
                    <h5>Item</h5>
                </div>
                <div class="column is-2">
                    <h5>Location</h5>
                </div>
                <div class="column is-2">
                    <h5>Unit Price</h5>
                </div>
                <div class="column is-3">
                    <h5>Qty</h5>
                </div>
            </div>
        </div> 

        <div class="row item-row mb-1">
            <div class="columns group">
                <div class="column is-3">
                    <img class="item-img" src="https://www.freepnglogos.com/uploads/eggplant-png/eggplant-png-transparent-images-download-clip-art-clip-art-clipart-library-1.png" alt="">
                </div>
                <div class="column is-2 mt-2">
                    <h5>lalalla</h5>
                </div>
                <div class="column is-2 mt-2">
                    <h5>25.00</h5>
                </div>
                <div class="column is-2 mt-2">
                    <h5>69</h5>
                </div>
                <div class="column is-3 mt-2">
                    <h5>6868.00</h5>
                </div>
            </div> 
        </div>
    </div> 
</div>          
</body>
</html>