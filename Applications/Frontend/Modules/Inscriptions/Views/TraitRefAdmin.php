<?php  
	
	switch ($SendingInfo) {
		case 'formatError':
			echo '<span class="label label-danger">La taille doit de 4 caractères <span>';
			break;
		case 'InternalError':
			echo '<span class="label label-danger">Veuillez ressayer SVP<span>';
			break;
		case 'SendError':
			echo '<span class="label label-danger">Echec Veuillez ressayer SVP<span>';
			break;
		case 'SendOk':
				if (isset($adminRefGenere)) {
					echo '<script>
				 	$(".cl_btn_valider").addClass("hidden");
				 	$("#inputRef").attr("maxlength",7);
				 	$("#inputRef").attr("disabled","false");
				 	$("#inputRef").val("'.$adminRefGenere.'");
				 </script>';
				}
			 	switch ($prefixe) {
			 		case 'AG':
			 			# code...
			 			break;
			 		case 'PA':
			 			?>


			 				<div class="form-group has-feedback hidden">
                                <label for="inputName" class="control-label"><font color="red"> * </font> Denomination </label>
                                <input type="text" class="form-control" id="inputName" placeholder="ex:AEl -SANTE" name="desi_part" required>
                            </div>

                            <div class="form-group hidden">
                                <label for="inputEmail" class="control-label"><font color="red"> * </font>Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" name="email_part" required>
                                <div class="help-block with-errors">
                               
                                </div>

                            </div>

                            <div class="form-group hidden">
                                <label for="inputAdr" class="control-label">Adresse
                                    <input type="text" class="form-control" id="inputAdr" placeholder="" required name="adr_part">
                                </label>

                                <label for="inputCont" class="control-label info-gauche" >Telephone
                                    <input type="text" class="form-control" id="inputCont" placeholder="20201230" required name="tel_part">
                                </label>

                            </div>

                            <div class="form-group hidden">
                                <label for="inputCel" class="control-label">Celulaire
                                    <input type="text" class="form-control" id="inputCel" placeholder="" required name="con_part">
                                </label>

                                <label for="inputFax" class="control-label info-gauche">Fax
                                    <input type="text" class="form-control" id="inputCont" placeholder="" required name="fax_part">
                                </label>

                            </div>

                            <div class="form-group hidden">
                                <label for="inputSit" class="control-label">Siege</label>
                                <input type="text" class="form-control" id="inputRef" placeholder="commune ,quartier" required name="siege_part">
                            </div>


			 			<?php
			 			break;
			 		
			 		default:
			 			?>

			 				<div class="form-group has-feedback ">
                                <label for="inputName" class="control-label"><font color="red"> * </font> Matricule </label>
                                <input type="text" class="form-control" id="inputName" placeholder="ex:AEl -SANTE" name="mats" maxlength="10" required>
                            </div>

			 				<div class="form-group has-feedback">
                                <label for="inputName" class="control-label"><font color="red"> * </font> Denomination </label>
                                <input type="text" class="form-control" id="inputName" placeholder="ex:AEl -SANTE" required name="desi">
                            </div>

                            <div class="form-group ">
                                <label for="inputEmail" class="control-label"><font color="red"> * </font>Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required name="email">
                                <div class="help-block with-errors">
                               
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="inputAdr" class="control-label">Adresse
                                    <input type="text" class="form-control" id="inputAdr" placeholder="" required name="adr">
                                </label>

                                <label for="inputCont" class="control-label info-gauche" >Telephone
                                    <input type="text" class="form-control" id="inputCont" placeholder="20201230" required name="tel">
                                </label>

                            </div>

                            <div class="form-group ">
                                <label for="inputCel" class="control-label">Celulaire
                                    <input type="text" class="form-control" id="inputCel" placeholder="" required name="con">
                                </label>

                                <label for="inputFax" class="control-label info-gauche">Fax
                                    <input type="text" class="form-control" id="inputCont" placeholder="" required name="fax">
                                </label>

                            </div>

                            <div class="form-group ">
                                <label for="inputSit" class="control-label">Siege</label>
                                <input type="text" class="form-control" id="inputRef" placeholder="commune ,quartier" required name="siege">
                            </div>

                            <div class="form-group ">
                                <input type="hidden" value="<?php echo $prefixe; ?>" name="prefixe">
                            </div>

                            <div class="form-group">
                                <input type="reset" class="default"  value="Annuler" name="Annuler" data-dismiss="modal">

                                <input type="submit" class="btn-primary btn-show" value="Valider" name="valider" > 
                            </div> 
			 			<?php
			 			break;
			 	}
			break;

		default:
			# code...
			break;
	}
?>