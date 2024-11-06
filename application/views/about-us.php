<?php
	$this->load->view('includes/header.php');
?>
<div class="container">
    <div class="row justify-content-start text-dark">
        <div class="col-12">
            <?php
                echo $contentdetails->option_value;
            ?>
        </div>
    </div>
</div>
<?php
	$this->load->view('includes/footer.php');
?>