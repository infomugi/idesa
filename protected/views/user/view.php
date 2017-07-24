<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Pengguna'=>array('daftar'),
	$model->namalengkap,
	);

$this->pageTitle='Profile - '.ucfirst($model->username);

$dataActivity=new CActiveDataProvider('Activities',array(
	'criteria'=>array(
		'condition'=>'user_id = '.YII::app()->user->id,
		'order'=>'id_activities DESC'
		),
	'pagination'=>array(
		'pageSize'=>'10',
		)));	
		?>


		<section class="col-xs-12">
			<?php if(Yii::app()->user->getLevel()==1){ ?>

				<?php echo CHtml::link('<i class="fa fa-plus"></i> Buat Akun Baru',
					array('tambah'),
					array('class' => 'btn btn-success btn-flat','title'=>'Buat Akun Baru'));
				?>
				<?php echo CHtml::link('<i class="fa fa-list"></i> List',
					array('daftar'),
					array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar User'));
				?>
				<?php echo CHtml::link('<i class="fa fa-table"></i> Kelola',
					array('kelola'),
					array('class' => 'btn btn-success btn-flat','title'=>'Kelola User'));
				?>

				<?php echo CHtml::link('<i class="fa fa-edit"></i> Edit', 
					array('update', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit User'));
				?>

				<?php echo CHtml::link('<i class="fa fa-image"></i> Image', 
					array('image', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Avatar'));
				?>				

				<?php echo CHtml::link('<i class="fa fa-lock"></i> Password', 
					array('password', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit User'));
				?>

				<?php }else{ ?>

					<?php echo CHtml::link('<i class="fa fa-edit"></i> Profile', 
						array('update', 'id'=>$model->id_user,
							), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit User'));
					?>


					<?php echo CHtml::link('<i class="fa fa-lock"></i> Password', 
						array('password', 'id'=>$model->id_user,
							), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit User'));
					?>

					<?php } ?>

					<HR>

						<?php
						foreach(Yii::app()->user->getFlashes() as $key => $message) {
							echo '</BR><div class="alert alert-' . $key . '">' . $message . "</div>\n";
						}
						?>

						<H3><i class="fa fa-user"/></i> Profile </H3>
						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$model,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								// 'id_user',
								// 'password',
								'last_login',
								'username',
								'email',
								'image',
								'namalengkap',
								'handphone',
								'alamat',
								'tanggallahir',
								array('label'=>'Level Akses','value'=>$model->level == 2 ? "TKS (Tenaga Kerja Sarjana)" : "Administrator"),
								array('label'=>'Total Point','value'=>Yii::app()->db->createCommand("SELECT SUM(point) FROM activities WHERE user_id=".$model->id_user."")->queryScalar()),
								),
								)); ?>

								<div class="well">
									
									<?php
									function IPnya() {
										$ipaddress = '';
										if (getenv('HTTP_CLIENT_IP'))
											$ipaddress = getenv('HTTP_CLIENT_IP');
										else if(getenv('HTTP_X_FORWARDED_FOR'))
											$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
										else if(getenv('HTTP_X_FORWARDED'))
											$ipaddress = getenv('HTTP_X_FORWARDED');
										else if(getenv('HTTP_FORWARDED_FOR'))
											$ipaddress = getenv('HTTP_FORWARDED_FOR');
										else if(getenv('HTTP_FORWARDED'))
											$ipaddress = getenv('HTTP_FORWARDED');
										else if(getenv('REMOTE_ADDR'))
											$ipaddress = getenv('REMOTE_ADDR');
										else
											$ipaddress = 'IP Tidak Dikenali';

										return $ipaddress;
									}
									$ipaddress = $_SERVER['REMOTE_ADDR'];
									echo "<i class='fa fa-qrcode'></i> : ";
									echo IPnya();
									echo "<br><i class='fa fa-globe'></i> Browser ";
									echo $_SERVER['HTTP_USER_AGENT'];
									echo "<br><i class='fa fa-windows'></i> Sistem Operasi :";
									echo php_uname();
									?>

								</div>


								<H3><i class="fa fa-calendar"/></i> Log Aktifitas</H3>
								<?php 
								$this->widget('zii.widgets.CListView', array(
									'dataProvider'=>$dataActivity,
									'itemView'=>'_view_activity',
									'summaryText'=>'',
									'enablePagination'=>false,
									)); 
									?>
								</section>

								<STYLE>
									th{width:150px;}
									.timeline-2 {border-left: 2px solid #14082d; position: relative; } .timeline-2 .time-item:after {background-color: #ffffff; border-color: #14082d; border-radius: 10px; border-style: solid; border-width: 2px; bottom: 0; content: ''; height: 14px; left: 0; margin-left: -8px; position: absolute; top: 5px; width: 14px; } .time-item {border-color: #dee5e7; padding-bottom: 1px; position: relative; } .time-item:before {content: " "; display: table; } .time-item:after {background-color: #ffffff; border-color: #14082d; border-radius: 10px; border-style: solid; border-width: 2px; bottom: 0; content: ''; height: 14px; left: 0; margin-left: -8px; position: absolute; top: 5px; width: 14px; } .time-item-item:after {content: " "; display: table; } .item-info {margin-bottom: 15px; margin-left: 15px; } .item-info p {margin-bottom: 10px !important; }
								</STYLE>

