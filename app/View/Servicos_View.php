<?php
	$servicos = $_REQUEST['servicos'];

	echo "<div class=\"owl-carousel owl-theme\">";
    foreach ($servicos as $servico ) {
		echo "<div class=\"product_item\">";
			echo "<div class=\"product_blog_img\">";
				echo "<img src=\"images/service".$servico->id.".png\" alt=\"#\" />";
			echo "</div>";
			echo "<div class=\"product_blog_cont\">";
				echo "<h4>".$servico->nome."</h4>";
				echo "<h6>".utf8_encode($servico->descricao)."</h6>";
				echo "<h4><span>R$ </span>".$servico->preco."</h4>";
				echo "<h4>".$servico->tempo."<span> Min</span></h4>";
			echo "</div>";
		echo "</div>";
	}
	echo "</div>";