  <?php if(isset($resultat)) echo $resultat; ?>
   <div class="col-md-6 col-sm-6 col-xs-12">            
                               
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Pré-Inscription <span id="titre_acteur"></span></h4>
                    </div>

                    <div class="modal-body">
                           
                        <form data-toggle="validator" role="form" action="traitPreinscrip" method="POST" >
                            <label for="inputRef" class="control-label"><font color="red"> * </font>Reference</label>
                            <div class="input-group">

                                <div class="input-group-btn">
                                  <button type="button" class="btn" id="prefixe_button"></button>
                                </div><!-- /btn-group -->
                               <input type="text" size="30" class="form-control ref_input" id="inputRef" placeholder="reference" required name="ref" maxlength="2">
                              </div>
                              <br/>
                              <div class="box-footer">
                              
                                <span class="btn btn-warning cl_btn_valider" name="btn_valider" id="ref">Valider</span>
                              </div>

                             <div class="form-group" id="result">
                                
                            </div>
                           
                        </form>
                            
                    </div>
                    
                </div>
            </div>            
        </div> 

    </div>
