<!DOCTYPE HTML>

<html lang="en">
<body>   

    <!-- Header -->
    <?php 
        require_once "header.html";
    ?>
    
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    <script src='js/x3dom.js'></script>
    <script src='js/modelInteractions.js'></script>

        <h1>BOTTLE 2: Electric Boogaloo</h1>
        <br>

        <div class="row">
            <x3d id="model" class="col-sm" width='100%' height='100%' name='x3dBlock'> 
                <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/bottleAlt.x3d"> </inline>
                </scene>
            </x3d>  

            <div class="col-sm">
                <div class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</div>
                <div class="btn btn-success btn-responsive" onclick="headlight();">Headlight</div>
            </div>
        </div>

        <!-- <script src="js/generateModels.js"></script> -->


    <br>
    <!-- Footer -->
    <?php
        require_once "footer.html";
    ?>

</body>
</html>