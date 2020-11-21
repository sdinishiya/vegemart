<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
</head>
<body>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $rowProduct['address1']?>%20<?php echo $rowProduct['address2']?>%20<?php echo $rowProduct['city']?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                               
        </div>
    </div>
    
</body>
</html>