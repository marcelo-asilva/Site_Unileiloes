<?php require_once '../header.php'; ?>
<?php require_once '../menu_esquerdo.php'; ?>   


<!--Inicio do corpo do cadastro-->
<div class="center_content">
    <div class="center_title_bar">Login</div>
    <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
            <form>
                <div class="contact_form">
                    <div class="form_row">
                        <label class="contact"><strong>Usuário:</strong></label>
                        <input type="text" name="usuario" class="contact_input" required  />
                    </div>
                    <div class="form_row">
                        <label class="contact"><strong>Senha:</strong></label>
                        <input type="password" name="senha" class="contact_input" required  />
                    </div>
                    <br><br/>
                    <div class="form_row" style=" width:0px !important; margin-left: 185px !important; margin-right: auto !important;"> <a href="#" class="contact_logar">Logar</a>  </div>
                    <div class="form_row" style=" width:30px !important; margin-left: auto  !important; margin-right: 90px !important; float: right; margin-top:-37px;"> <a href="#" class="contact_cancelar">Cancelar</a></div>
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
