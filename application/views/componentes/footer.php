    <script src="<?php echo base_url('assets/librerias/jquery/jquery-3.3.1.min.js'); ?>" type="text/javascript"></script>
    <?php
    if(isset($recursosjs)){
        foreach($recursosjs as $js){
        ?>
            <script src="<?php echo base_url("assets/js/").$js."?v=".rand(1,50); ?>" type="text/javascript"></script>
        <?php
        }
    }
    ?>
    </body>
</html>