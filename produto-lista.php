<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>



<?php

$produtos = listaProdutos($conexao);
#foreach ($produtos as $produto) {
#	echo $produto['nome'] . "<br/>";
#}
?>
<table class="table table-striped table-bordered">
<?php
foreach ($produtos as $produto) {
?>
		<tr>	
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
		</tr>
<?php
}
?>	
</table>	
<?php include("rodape.php"); ?>