
<?php $this->load->view('headeradmin');?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">DATA EVENT SUKSES DI UPDATE ! </h4>
                    <?php echo form_open_multipart('Update/update_event');?>
                    <button class="btn btn_">kembali ke FORM UPDATE EVENT</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('footeradmin');?>
