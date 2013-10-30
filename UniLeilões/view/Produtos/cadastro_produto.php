<?php require_once '../header_cadastro.php'; ?>
<?php require_once '../menu_esquerdo.php'; ?>   


<!--Inicio do corpo do cadastro-->
<div class="center_content">
    <div class="center_title_bar">Cadastro de Produto</div>
    <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <form>
                <div class="contact_form">

                    <div class="form_row">
                        <label class="contact"><strong>Nome:</strong></label>
                        <input type="text" name="nome" class="contact_input" required  />
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Descrição:</strong></label>
                        <textarea class="contact_input" name="descricao"  rows="4" cols="30" style="resize: none;"></textarea>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Categoria:</strong></label>
                        <div style="float:left;">
                            <select name="categoria">
                                <option value="1">Selecione</option>
                                <option>Carro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Estado:</strong></label>
                        <div style="float:left;">
                            <select name="estado">
                                <option>Selecione</option>
                                <option>MG</option>
                            </select>
                        </div>
                        <label class="contact"><strong>Cidade:</strong></label>
                        <div style="float:left;">
                            <select name="cidade">
                                <option>Selecione</option>
                                <option>Alfenas</option>
                            </select>
                        </div>
                    </div>

                    <br><br>
                    <fieldset>
                        <legend align="left">Imagens</legend>

                        <div class="form_row">
                            <!--<label class="contact"><strong>Imagem:</strong></label>-->
                            <input type="file" name="imagem">
                        </div>
                        <div class="form_row">
                            <!--<label class="contact"><strong>Imagem:</strong></label>-->
                            <input type="file" name="imagem">
                        </div>
                        <div class="form_row">
                            <!--<label class="contact"><strong>Imagem:</strong></label>-->
                            <input type="file" name="imagem">
                        </div>
                    </fieldset>
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

