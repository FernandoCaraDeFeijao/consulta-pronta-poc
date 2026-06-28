<?php
	if (!isset($medicamentos)) { $medicamentos = "Dipirona"; }
	if (!isset($orientacoes_uso)) { $orientacoes_uso = "Evite o uso conjunto com bebidas alcólicas"; }
	if (!isset($dados)) { $dados = "Histórico: N/A"; }
	if (!isset($data_emissao)) { $data_emissao = "1967-09-04 06:07:09"; }

	$data_emissao = new DateTime($data_emissao);
?>

<article class="light">
	<p>
		<?= htmlspecialchars($medicamentos) ?>
	</p>
	<hr>
    <p><b><?= $orientacoes_uso ?></b></p>
	<p>Data de emissão: <?= $data_emissao->format("H:i - d/m/Y") ?></p>
    <p style="margin-top: 10px"><?= $dados ?></p>
</article>