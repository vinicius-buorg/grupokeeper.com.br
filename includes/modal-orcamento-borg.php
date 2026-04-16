<div class="modal fade" id="modal-orcamento-borg" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fas fa-lock"></i> Orçamento - <?php echo $nome_empresa; ?></h4>
            </div>
            <div class="modal-body">
                <form id="form-orcamento-borg">
                    <div class="flex">
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Nome: <span class="red-color">*</span></label>
                                <input name="Nome" type="text" class="form-control campo-obrigatorio" placeholder="Digite seu nome">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Email: <span class="red-color">*</span></label>
                                <input name="Email" type="email" class="form-control campo-obrigatorio" placeholder="Insira seu e-mail">
                            </div>                        
                        </div>
                    </div>
                    <div class="flex">
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Telefone: <span class="red-color">*</span></label>
                                <input name="Telefone" type="text" class="form-control mask-phone campo-obrigatorio">
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Assunto: <span class="red-color">*</span></label>
                                <input name="Assunto" type="text" class="form-control input-form-assunto campo-obrigatorio">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mensagem: <span class="red-color">*</span></label>
                        <textarea name="Mensagem" class="form-control campo-obrigatorio" rows="6"></textarea>
                    </div>

                    <input name="Local do Form" value="Formulário fim da página: <?php echo $canonical;?>" type="hidden" >
                    <input name="IP de envio" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" type="hidden" >
                    <input name="url" value="<?php echo $url;?>" type="hidden">
                    <input name="title" value="<?php echo $title;?>" type="hidden">

                    <button type="submit" 
                        class="btn btn-default btn-block btn-send"
                        data-emailsReceberEnvio = <?php echo $emailContato;?>
                        data-emailsReceberCopia = ""
                        data-emailsReceberCopiaOculta = ""
                        data-siteCliente = "<?php echo $nome_empresa;?>"
                        data-ajax="Orçamento">Enviar <i class="fa fa-share"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>