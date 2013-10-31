<?php require_once '../header_cadastro.php'; ?>
<?php
require_once '../menu_esquerdo.php';

$classegeral = new Unileiloes();
$categorias = $classegeral->getCategorias();
$estados=$classegeral->GetEstado();
?>   

<script>
    $(document).ready(function() {
        $('#loading').hide();
        $('#estado').change(function() {
            $('#loading').show();
            $.ajax({
                type: "Get",
                url: "../Cliente/cidadesajax.php?id=" + $(this).val(),
                success: function(data) {
                    $('#cidade').empty();
                    $('#cidade').append(data);
                    $('#loading').delay(1000).hide();

                },
                error: function() {
                    var msg = "Ocorreu um erro ao carregar a pagina!";
                    alert(url + "<br><br>" + msg);
                }
            });

        });
    });
</script>
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
                                <?php for ($i = 0; $i < count($categorias); $i++) { ?>
                                    <option value="<?php echo $categorias[$i]["idCategoria"]; ?>"><?php echo utf8_encode($categorias[$i]["descricao"]); ?></option>
                                <?php } ?>   
                            </select>
                        </div>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Estado:</strong></label>
                        <div style="float:left;">
                            <select id="estado" name="estado">
                                <option>Selecione</option> 
                             <?php for($i=0;$i<count($estados);$i++){ ?>
                            <option value="<?php echo $estados[$i]["idEstado"]; ?>"><?php echo utf8_encode($estados[$i]["estado"]); ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <span id="loading" style="margin-right:170px;"><img src="../../Template/images/loading.gif"></img></span> 

                    </div>
                    <div class="form_row">
                        <label class="contact" ><strong>Cidade:</strong></label>
                        <div style="float:left;">
                            <select id="cidade" name="cidade">
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

