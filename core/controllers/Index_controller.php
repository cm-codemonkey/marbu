<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			if ($_POST['action'] == 'contact')
			{
				$errors = [];

				if (empty($_POST['name']))
					array_push($errors, ['No deje el nombre vacío']);

				if (empty($_POST['email']))
					array_push($errors, ['No deje el correo vacío']);

				if (empty($_POST['phone']))
					array_push($errors, ['No deje el teléfono vacío']);

				if (empty($_POST['age']))
					array_push($errors, ['No deje el mensaje vacío']);

				if (empty($_POST['nationality']))
					array_push($errors, ['No deje el mensaje vacío']);

				if (empty($_POST['test']))
					array_push($errors, ['No deje el mensaje vacío']);

				if (empty($errors))
				{
					$recaptcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdgUVAaAAAAAKRUlNJfgsAdnXcjIA9eWRd0BIss&response=' . $_POST['recaptcha_1']);
					$recaptcha = json_decode($recaptcha);

					if ($recaptcha->success = true AND $recaptcha->score >= 0.7)
					{
						$mail = new Mailer(true);

						try
						{
							$mail->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
							$mail->addAddress(Configuration::$smtp_contact, Configuration::$web_page);
							$mail->Subject = 'Nuevo contacto desde marbu.oneconsultores.com';
							$mail->Body = 'Nombre: ' . $_POST['name'] . '<br>Correo electrónico: ' . $_POST['email'] . '<br>Teléfono: ' . $_POST['phone'] . '<br>Edad: ' . $_POST['age'] . '<br>Nacionalidad: ' . $_POST['nationality'] . '<br>Prueba: ' . $_POST['test'] . '<br>Viaje a: ' . (!empty($_POST['travel']) ? $_POST['travel'] : 'Sin viaje');
							$mail->send();
						}
						catch (Exception $e) {}

						echo json_encode([
							'status' => 'success'
						]);
					}
					else
					{
						echo json_encode([
							'status' => 'error',
							'errors' => [
								['RECAPTCHA', 'RECAPTCHA ERROR']
							]
						]);
					}
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => $errors
					]);
				}
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' | {$lang.index}');

			$template = $this->view->render($this, 'index');

			echo $template;
		}
	}
}
