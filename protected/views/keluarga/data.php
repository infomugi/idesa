		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-12">

				<div class="col-sm-5 control-label">
					<?php echo $form->labelEx($model,'no_kk'); ?>
				</div>   

				<div class="col-sm-7">
					<?php echo $form->error($model,'no_kk'); ?>
					<?php echo $form->textField($model,'no_kk',array('class'=>'form-control')); ?>
				</div>

			</div>

			<div class="col-sm-12 col-md-6 col-lg-12">

				<div class="col-sm-5 control-label">
					<?php echo $form->labelEx($model,'waktuupdate'); ?>
				</div>   

				<div class="col-sm-7">
					<?php echo $form->error($model,'waktuupdate'); ?>
					<?php echo $form->textField($model,'waktuupdate',array('class'=>'form-control','value'=>date('Y-m-d h:i:s'),'readonly'=>'true')); ?>	
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-12">
				
				<div class="col-sm-5 control-label">
					<?php echo $form->labelEx($model,'no_kk'); ?>
				</div>   

				<div class="col-sm-7">
					<?php echo $form->error($model,'no_kk'); ?>
					<?php echo $form->textField($model,'no_kk',array('class'=>'form-control')); ?>
				</div>
				
			</div>

			<div class="col-sm-12 col-md-6 col-lg-12">
				
				<div class="col-sm-5 control-label">
					<?php echo $form->labelEx($model,'waktuupdate'); ?>
				</div>   

				<div class="col-sm-7">
					<?php echo $form->error($model,'waktuupdate'); ?>
					<?php echo $form->textField($model,'waktuupdate',array('class'=>'form-control','value'=>date('Y-m-d h:i:s'),'readonly'=>'true')); ?>	
				</div>
				
			</div>
		</div>