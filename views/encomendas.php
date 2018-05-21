<br>
<div class="col-lg-4">
     <div class="ibox float-e-margins border-bottom">
         <div class="ibox-title">
             <?php foreach($encomendas_registradas as $encomendas): ?>
                 <h5>
                 <?php print_r($encomendas['condominios']); ?>
                 </h5>
             
             <div class="ibox-tools">
                 <a class="collapse-link">
                     <i class="fa fa-chevron-up"></i>
                 </a>

                 <a class="close-link">
                     <i class="fa fa-times"></i>
                 </a>
             </div>
         </div>
         <div class="ibox-content" style="display: none;">
             <address>
                 <strong>Produto: </strong><?php print_r($encomendas['nome_produto']); ?><br>
                 <strong>Empresa: </strong><?php print_r($encomendas['empresa']); ?><br>
                 <strong>Recebido em: </strong><?php print_r($encomendas['encomendas']); ?><br>
             </address>

             <address>
                 <strong><?php print_r($encomendas['nome_morador']); ?></strong><br>
                 <strong>Bloco:</strong> <?php print_r($encomendas['blocos']); ?><br>
                 <strong>Apto:</strong> <?php print_r($encomendas['apartamentos']); ?><br>
                 <strong>Celular:</strong> <?php print_r($encomendas['celular']); ?><br>
                 <strong>E-mail:</strong> <?php print_r($encomendas['moradores']); ?>
             </address>

         </div>
         <?php endforeach; ?>
     </div>
</div>