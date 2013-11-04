<?php require_once '../header_cadastro.php'; ?>
<?php
require_once '../menu_esquerdo.php';

$classegeral = new Unileiloes();
$categorias = $classegeral->getCategorias();
$estados = $classegeral->GetEstado();
?>   

<script>
    function trim(str) {
        return str.replace(/^\s+|\s+$/g, "");
    }
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
        $("#salvar").click(function() {
            $("#acao").val('salvar');
            $("#form").submit();

        });

    });

    function valida() {
        var cont = 0;
        if (trim($("#nome").val()) == "")
        {
            $("#nomeval").show();
            cont++;
        }
        else
            $("#nomeval").hide();
        if (trim($("#descricao").val()) == "")
        {
            $("#descricaoval").show();
            cont++;
        }
        else
              $("#descricaoval").hide();
          
        if ($("#categoria").val() == "0")
        {
            $("#categoriaval").show();
            cont++;
        }
        else
             $("#categoriaval").hide();
        if ($("#estado").val() == "-1")
        {
            $("#estadoval").show();
            cont++;
        }
        else
             $("#estadoval").hide();
        if ($("#cidade").val() == "-1")
        {
            $("#cidadeval").show();
            cont++;
        }
        else
            $("#cidadeval").hide();
        
        if (cont > 0)
        {
            alert("Atenção campo obrigatorio!");
            return false;
        }
        else
            return true;
    }
</script>
<!--Inicio do corpo do cadastro-->
<div class="center_content">
    <div class="center_title_bar">Cadastro de Produto</div>
    <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <form id="form" name="cadastrar" onSubmit="return valida()" action="../../controller/controller_produto.php" method="POST" enctype="multipart/form-data">
                <div class="contact_form">
                    <div class="form_row">
                        <label class="contact"><strong>Nome:</strong></label>
                        <input type="text" id="nome" name="nome" class="contact_input " required  />
                        <label class="contact" id="nomeval" style="text-align: left; font-size:20px; margin-top:-4px; color: red; display: none;"><strong> &nbsp;* </strong></label>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Descrição:</strong></label>
                        <textarea id="descricao" class="contact_input" name="descricao"  rows="4" cols="30" style="resize: none;" required></textarea>
                        <label class="contact" id="descricaoval" style="text-align: left; font-size:20px; margin-top:-4px; color: red; display: none;"><strong> &nbsp;* </strong></label>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Categoria:</strong></label>
                        <div style="float:left;">
                            <select id="categoria" name="categoria" required>
                                <option value="0">Selecione</option>
                                <?php for ($i = 0; $i < count($categorias); $i++) { ?>
                                    <option value="<?php echo $categorias[$i]["idCategoria"]; ?>"><?php echo utf8_encode($categorias[$i]["descricao"]); ?></option>
                                <?php } ?>   
                            </select>
                                
                        </div>
                        <label class="contact" id="categoriaval" style="text-align: left; font-size:20px; margin-top:-4px; color: red; display: none;"><strong> &nbsp;* </strong></label>
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Estado:</strong></label>
                        <div style="float:left;">
                            <select id="estado" name="estado" required>
                                <option value="-1">Selecione</option> 
                                <?php for ($i = 0; $i < count($estados); $i++) { ?>
                                    <option value="<?php echo $estados[$i]["idEstado"]; ?>"><?php echo utf8_encode($estados[$i]["estado"]); ?></option>
                                <?php } ?>
                            </select>
                                
                        </div>
                          <span id="loading" style="margin-right:170px;"><img src="../../Template/images/loading.gif"></img></span> 
                        <label class="contact" id="estadoval" style=" display: none; text-align: left; font-size:20px; margin-top:-4px; color: red;"><strong> &nbsp;* </strong></label>
                      

                    </div>
                    <div class="form_row">
                        <label class="contact" ><strong>Cidade:</strong></label>
                        <div style="float:left;">
                            <select id="cidade" name="cidade" required>
                                <option value="-1">Selecione</option>
                            </select>
                                
                        </div>
                        <label class="contact" id="cidadeval" style=" display: none; text-align: left; font-size:20px; margin-top:-4px; color: red;"><strong> &nbsp;* </strong></label>
                    </div>
                    <br><br>
                    <fieldset>
                        <legend align="left">Imagens</legend>

                        <div class="form_row">
                            <!--<label class="contact"><strong>Imagem:</strong></label>-->
                            <input type="file" name="imagem1">
                        </div>
                        <div class="form_row">
                            <!--<label class="contact"><strong>Imagem:</strong></label>-->
                            <input type="file" name="imagem2">
                        </div>
                        <div class="form_row">
                            <!--<label class="contact"><strong>Imagem:</strong></label>-->
                            <input type="file" name="imagem3">
                        </div>
                    </fieldset>
                    <br><br/>
                    <div class="form_row" style=" width:0px !important; margin-left: 185px !important; margin-right: auto !important;"> <a href="#" id="salvar" class="contact">Salvar</a>  </div>
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

