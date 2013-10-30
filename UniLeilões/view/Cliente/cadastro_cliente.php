<?php require_once '../header.php'; ?>
<?php require_once '../menu_esquerdo.php'; ?>   

<script>
   $(document).ready(function() {
    $('#loading').hide();
                $('#estado').change(function() {
                    $('#loading').show();
                    $.ajax({
                        type: "Get",
                        url: "../../controller/cidadesajax.php?id=" + $(this).val(),
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
    <div class="center_title_bar">Cadastro de Cliente</div>
    <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <div class="contact_form">
                <div class="form_row">
                    <label class="contact"><strong>Nome:</strong></label>
                    <input type="text" name="nome" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>CPF:</strong></label>
                    <input type="text" name="cpf" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" name="email" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Telefone:</strong></label>
                    <input type="text" name="telefone" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Estado:</strong></label>
                    <div style="float:left;">
                        <select id="estado" name="estado">
                            <option>Selecione</option>
                            <option value="0">MG</option>
                        </select>
                    </div>
                    <span id="loading" style="margin-right:170px;"><img src="../../Template/images/loading.gif"></img></span> 
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Cidade:</strong></label>
                    <div style="float:left; ">
                        <select id="cidade" name="cidade">
                        </select>
                    </div>
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Rua:</strong></label>
                    <input type="text" name="rua" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Bairro:</strong></label>
                    <input type="text" name="Bairro" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Numero:</strong></label>
                    <input type="text" name="numero" class="contact_input_pequeno" maxlength="8" />
                    <label class="contact"><strong>CEP:</strong></label>
                    <input type="text" name="cep" class="contact_input_medio" maxlength="15" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Login:</strong></label>
                    <input type="text" name="login" class="contact_input" />
                </div>
                <div class="form_row">
                    <label class="contact"><strong>Senha:</strong></label>
                    <input type="password" name="senha" maxlength="8" class="contact_input_medio" />
                </div>
                <div class="form_row" style="-25px;">
                    <label class="contact"><strong>Confirmar senha:</strong></label>
                    <div style="padding-top: 13px;">
                        <input type="password" name="confirmar_senha" maxlength="8" class="contact_input_medio" />
                    </div>
                </div>
                <br><br/>
                <div class="form_row" style=" width:0px !important; margin-left: 185px !important; margin-right: auto !important;"> <a href="#" class="contact">Salvar</a>  </div>
                <div class="form_row" style=" width:30px !important; margin-left: auto  !important; margin-right: 90px !important; float: right; margin-top:-37px;"> <a href="#" class="contact_cancelar">Cancelar</a>  </div>
            </div>
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

