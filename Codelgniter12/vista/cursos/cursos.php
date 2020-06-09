<?php defined('BASEPATH') OR exit('No direct script access allowed');


	foreach ($cursos->result() as $curso) {?>
		<ul>
			<li>
				<?= $curso->nombreCurso; ?>
			</li>

		</ul>


	<?php }?>
</body>
</html>