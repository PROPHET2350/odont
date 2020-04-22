<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\Routing\Router;

?>
<div class="container-contact100">
		<div class="wrap-contact100">
			<?= $this->Form->create($user,['url'=>['action'=>'createUser'],'class'=>'contact100-form validate-form'])?>
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Dinos tu nombre</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                    <?= $this->Form->text('nombre',['class'=>'input100','placeholder'=>'Nombre','label'=>false])?>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                    <?= $this->Form->text('apellido',['class'=>'input100','placeholder'=>'Apellido','label'=>false])?>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Introduce tu correo electrónico</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <?= $this->Form->email('mail',['class'=>'input100','placeholder'=>'Correo','label'=>false])?>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Introduce tu correo contraseña</label>
				<div class="wrap-input100">
                    <?= $this->Form->password('password',['class'=>'input100','placeholder'=>'Contraseña','label'=>false])?>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
                    <?= $this->Form->submit('Create account',['class'=>'contact100-form-btn'])?>
				</div>
			<?= $this->Form->end()?>

			<div class="contact100-more flex-col-c-m" style="background-image: url('../img/bg-02.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>