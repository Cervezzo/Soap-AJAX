<div class="modelos">
	<ul>
		<?php
		require_once "client.php";
		$marca = $_GET['marca'];

		$modelo = $client->ObtenerModelosPorMarca($marca);

		foreach ($modelo as $m) {
		?>
			<div class="modeloIndi"><?= $m ?></div>
			
		<?php
		}

		?>
	</ul>
</div>