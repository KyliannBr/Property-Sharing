<div class="wrapperCards">
	<div class="container" onclick=";recuperationData('<?php echo($arrayId[$i]); ?>','<?php echo($arrayNom[$i]);?>','<?php echo($arrayDesc[$i]);?>','<?php echo($arrayPrix[$i]);?>','<?php echo($arrayLieu[$i]);?>','<?php echo($arrayImage[$i]); ?>','<?php echo($arrayImage2[$i]); ?>','<?php echo($arrayImage3[$i]); ?>','<?php echo($arrayImage4[$i]); ?>','<?php echo($arrayImage5[$i]); ?>','<?php echo($arrayImage6[$i]); ?>','<?php echo($arrayProprietaire[$i]); ?>');redirect();">
		<div class="front" style="background-image: url(php/uploads/<?php echo $arrayImage[$i]; ?>)">
			<div class="inner">
				<p style="display: none;" id='idEntite'><?php echo($arrayId[$i]); ?></p>
				<img src="php/uploads/<?php echo($arrayImage2[$i]); ?>" style="display:none;" />
				<img src="php/uploads/<?php echo($arrayImage3[$i]); ?>" style="display:none;" />
				<img src="php/uploads/<?php echo($arrayImage4[$i]); ?>" style="display:none;" />
				<img src="php/uploads/<?php echo($arrayImage5[$i]); ?>" style="display:none;" />
				<img src="php/uploads/<?php echo($arrayImage6[$i]); ?>" style="display:none;" />
				<p><?php echo ucfirst($arrayNom[$i]); ?></p>
              	<span><?php echo $arrayPrix[$i]; ?> €</span>
			</div>
		</div>
		<div class="back">
			<div class="inner">
				<p><?php echo ucfirst($arrayDesc[$i]); ?></p>
              	<h4><?php echo ucfirst($arrayLieu[$i]); ?></h4>
			</div>
		</div>
	</div>
</div>
