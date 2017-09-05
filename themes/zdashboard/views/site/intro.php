    <!--hero area start-->
    <div id="home" class="home-style-2 slider-area ">
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slider-content">
                            <h2>Tracking Dokumen <span>Cek Pelayanan Pembuatan SKTM, Pengantar KK, Surat Pindah</span></h2>

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">


                                   <div id="sktm" class="collapse">

                                    <?php 
                                    echo CHtml::beginForm(CHtml::normalizeUrl(array('sktm/search')), 'get')
                                    . CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan No. Resi SKTM'))
                                    . CHtml::endForm();
                                    ?>

                                </div> 
                                


                                <div id="pindah" class="collapse">

                                    <?php 
                                    echo CHtml::beginForm(CHtml::normalizeUrl(array('kepindahan/search')), 'get')
                                    . CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan No. Resi Surat Pindah'))
                                    . CHtml::endForm();
                                    ?>
                                </div> 


                                <div id="kk" class="collapse">
                                    <?php 
                                    echo CHtml::beginForm(CHtml::normalizeUrl(array('keluarga/search')), 'get')
                                    . CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string','class'=>'form-control input-lg','placeholder'=>'Cari Berdasarkan No. Resi Pengantar KK'))
                                    . CHtml::endForm();
                                    ?>
                                </div> 



                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <!--Slider area End -->