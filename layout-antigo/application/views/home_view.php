<div id="home" class="container-fluid container-off-padding">
      
    <div class="hidden-sm hidden-md hidden-lg col-xs-12 container-off-padding text-center">
        <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/header2.png" alt="">
    </div>

      <div class="hidden-xs col-xs-12 col-sm-8 col-md-8 text-center container-off-padding">
          <img class="img-responsive" src="<?= base_url(); ?>assets/images/header-novo.jpg" alt="">
      </div>
      
      <div class="col-xs-12 col-sm-4 col-md-4 form">
        <div class="margin-top-20"></div>
        <form method="post" role="form" action="<?php echo base_url("contato")?>">
        
   
          <span class="tt-form text-center">
              <p>Saiba mais e garanta<br/> condições privilegiadas</p>
          </span>
          
          <div class="group-form">
            <div class="form-group">
              <label for="nome">Nome*</label>
              <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
            </div>

            <div class="form-group">
              <label for="email">Email*</label>
              <input id="email" type="email" class="email form-control" name="email" required="required"/>
            </div>

            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input id="telefone" class="phone form-control" type="tel" name="phone"/>
            </div>

            <div class="form-group">
              <label for="form-mensagem">Mensagem</label></br>
              <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
            </div>  

            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
          </div>
        </form>
        
        <div class="margin-top-30"></div>
        
        <div class="margin-top"></div>
        <div class="hidden-xs col-xs-12 col-sm-12 col-md-12 text-center">
            <img class="img-responsive" src="<?= base_url(); ?>assets/images/header2.png" alt="">
        </div>

      </div> 
     
</div>

<div class="container-fluid container-off-padding text-center">
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/meio.png" alt="">
</div>

<div class="faixaAzul">
    
</div>

<div class="container-fluid container-off-padding text-center">
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/localizacao.png" alt="">
</div>

<div class="container-fluid container-off-padding text-center"><div class="margin-top-20"></div>
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/footer.png" alt="">
</div>

<?php 
if(isset($email_enviado))
    echo $email_enviado;
?>
<!-- Código do Google para tag de remarketing -->
<!--------------------------------------------------
As tags de remarketing não podem ser associadas a informações pessoais de identificação nem inseridas em páginas relacionadas a categorias de confidencialidade. Veja mais informações e instruções sobre como configurar a tag em: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 861346460;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/861346460/?guid=ON&amp;script=0"/>
</div>
</noscript>