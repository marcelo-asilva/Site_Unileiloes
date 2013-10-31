<?php require_once '../header.php'; ?>
<?php require_once '../menu_esquerdo.php'; ?>   


<!--Inicio do corpo do cadastro-->
<div class="center_content">
    <div class="center_title_bar">Cadastro de Leilão</div>
    <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <form>
                <div class="contact_form">
                    <div class="form_row">
                        <label class="contact"><strong>Descrição:</strong></label>
                        <textarea class="contact_input" style="width:278px; resize: none;" name="descricao"  rows="4" cols="30" ></textarea>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Lote:</strong></label>
                        <div style="float:left;">
                            <select name="lote">
                                <option value="1">Selecione</option>
                                <option>1</option>
                            </select>
                        </div>
                    </div>                 
                    <div class="form_row">
                        <label class="contact"><strong>Data Inicial:</strong></label>
                        <input type="text" name="datainicial" class="contact_input_medio" required  />
                        <label class="contact"><strong>Data Final:</strong></label>
                        <input type="text" name="datafinal" class="contact_input_medio" required  />
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Lance Inicial:</strong></label>
                        <input type="text" name="lanceinicial" class="contact_input_medio" required  />
                    </div>
                    <br><br/>
                    <div class="form_row" style=" width:0px !important; margin-left: 185px !important; margin-right: auto !important;"> <a href="#" class="contact">Salvar</a>  </div>
                    <div class="form_row" style=" width:30px !important; margin-left: auto  !important; margin-right: 90px !important; float: right; margin-top:-37px;"> <a href="#" class="contact_cancelar">Cancelar</a>  </div>
                </div>
            </form>
        </div>
        <div class="bottom_prod_box_big"></div>
    </div>
</div>
<!-- Fim do Corpo do cadastro -->

<!-- Inicio menu lateral direito -->
<?php require_once '../menu_direito.php'; ?>
<!-- Fim menu lateral direito -->
<!-- Inicio rodape -->
<?php require_once '../footer.php'; ?>
<!-- fim rodape -->
</body>
</html>
