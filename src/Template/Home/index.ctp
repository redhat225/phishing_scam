<style>
	.button-subscription-email-tls{
		background: transparent;
		border: 2px solid #59d2ef;
	}	

	.button-subscription-email-tls:hover{
		background: #59d2ef;
		cursor: pointer;
		transition-duration: 0.3s;
	}
</style>



<div class="row center mg-margin-bottom-0">
   <div class="col s12 mg-padding-0 relative-block" style="overflow: hidden;">

   	   <?= $this->Html->image('assets/headerSsl.jpg',['style'=>'width:100%;','class'=>'display-block']) ?>
   	   <div class="dotted-pane absolute-block" style="background: url('/img/assets/pattern-point-bleu.png'); top: 1px; min-height: 500px;width: 100%;">
   	    <div style="margin-top:10%;">
	   	   	<div class="container">
	   	   		<div class="container">
	   	   				<span class="display-block white-text ovh-ss-regular mg-margin-bottom-40" style="font-size:2em;">Sécurisez entièrement vos e-mails avec TLS 1.3</span>
	   	   		</div>
	   	   	</div>
	   	   	<?= $this->element('small_light_blue_ovh_bar') ?>
			<div class="container">
				<div class="container">
	   	   				<h5  class="white-text ovh-ss-regular mg-margin-top-40">Améliorez la sécurité de vos emails</h5>

	   	   				<button  class="btn mg-margin-top-40 button-subscription-email-tls ovh-lato-regular bold mg-height-55">Profitez Maintenant</button>
				</div>
			</div>
   	    </div>

   	   </div>
   </div>
</div>
<?= $this->element('small_light_blue_ovh_bar') ?>
<div class="row center mg-padding-bottom-60">
	<div class="container">
			<h4 class="mg-margin-bottom-50 mg-margin-top-60 mg_prim_color ovh-ss-regular bold">Pourquoi TLS 1.3 ?</h4>

			<p class="ovh-ss-regular mg-size-17 mg-padding-left-45 mg-padding-right-45">La norme précédente (SSL 3.0) souffre de nombreuses failles ayant occasionné de <b>nombreuses attaques</b> et est aujourd'hui <b>difficilement acceptée</b> par certains serveurs de messagerie confrère (Outlook, ThunderBird, AppleMail, etc.). <b>TLS 1.3</b> allie sécurité et simplicité. <b>En quelques secondes, OVH se charge de toutes les étapes de configuration et de déploiement</b>, et tout cela en vous authentifiant avec vos accès au service de messagerie OVH. OVH veille à <b>renouveler automatiquement votre certificat</b> de telle manière que celui-ci soit toujours valide, sans aucune action de votre part.&nbsp;L'expertise d'OVH sur <b>la sécurisation des e-mails</b> vous garantit en permanence <b>le meilleur niveau de sécurité</b> adapté à vos besoins, et en fonction des standards actuels.
		    </p>
	</div>
</div>
<?= $this->element('small_light_blue_ovh_bar') ?>

<div class="row center mg-margin-bottom-0 mg-margin-top-0" style="background:#f5f5f5;">
	<div class="col s12 m4 l4 mg-padding-top-70 mg-margin-bottom-30 mg-padding-left-30 mg-padding-right-30" style="border-right: 1px dashed #7d8ca1;">
		<p><?= $this->Html->image('assets/spriteSSLGateway.png') ?></p>
	    <h5 class="ovh-lato-bold mg_sec_color_5">Simplicité</h5>
	    <p class="ovh-ss-regular mg-padding-bottom-70 mg-size-17 mg-padding-left-40 mg-line-height-28 mg_prim_color left-align">OVH s'occupe de tout : <b>gestion, déploiement, et renouvellement automatique de votre certificat</b>, ainsi que les mises à jour de sécurité.</p>
	 </div>
	 	<div class="col s12 hide-on-small-only m4 l4 mg-padding-top-70 mg-margin-bottom-30 mg-padding-left-30 mg-padding-right-30" style="border-right: 1px dashed #7d8ca1;">
		<p><?= $this->Html->image('assets/spriteSSLGateway_2.png') ?></p>
	    <h5 class="ovh-lato-bold mg_sec_color_5">Plus de visibilité</h5>
	    <p class="ovh-ss-regular mg-padding-bottom-50 mg-size-17 mg-line-height-28 mg_prim_color left-align"><b>TLS</b> est "La" norme en matière de <b>sécurisation des échanges emails</b>, il améliore <b>la délivrance de 50%</b> et est accepté par <b>99.99%</b> des serveurs de messagerie du monde, et renforce la confiance de vos interlocuteurs.</p>
	 </div>
	<div class="col s12 hide-on-small-only m4 l4 mg-padding-top-70 mg-margin-bottom-30 mg-padding-left-30 mg-padding-right-30" >
		<p><?= $this->Html->image('assets/spriteSSLGateway_3.png') ?></p>
	    <h5 class="ovh-lato-bold mg_sec_color_5">Plus de sécurité</h5>
	    <p class="ovh-ss-regular mg-padding-bottom-50 mg-size-17 mg-line-height-28 mg_prim_color left-align"><b>Bénéficiez du meilleur niveau de sécurité</b> avec la norme <b>TLS 1.3</b> pour vos mails, protégez-vous des attaques par <b>phishing</b>, <b>malwares</b> et des <b>dénis de service organisés</b> grâce à l’Anti-DDOS OVH et contribuez à un Internet plus sûr.</p>
	 </div>
	 <!-- small icon -->
	 	<div class="col s12 hide-on-med-and-up mg-padding-top-6 mg-margin-bottom-30 mg-padding-left-30 mg-padding-right-30" style="border-right: 1px dashed #7d8ca1;">
		<p><?= $this->Html->image('assets/spriteSSLGateway_2.png') ?></p>
	    <h5 class="ovh-lato-bold mg_sec_color_5">Plus de visibilité</h5>
	    <p class="ovh-ss-regular mg-padding-bottom-50 mg-size-17 mg-line-height-28 mg_prim_color left-align"><b>TLS</b> est "La" norme en matière de <b>sécurisation des échanges emails</b>, il améliore <b>la délivrance de 50%</b> et est accepté par <b>99.99%</b> des serveurs de messagerie du monde, et renforce la confiance de vos interlocuteurs.</p>
	 </div>
	<div class="col s12 hide-on-med-and-up  mg-padding-top-6 mg-margin-bottom-30 mg-padding-left-30 mg-padding-right-30" >
		<p><?= $this->Html->image('assets/spriteSSLGateway_3.png') ?></p>
	    <h5 class="ovh-lato-bold mg_sec_color_5">Plus de sécurité</h5>
	    <p class="ovh-ss-regular mg-padding-bottom-50 mg-size-17 mg-line-height-28 mg_prim_color left-align"><b>Bénéficiez du meilleur niveau de sécurité</b> avec la norme <b>TLS 1.3</b> pour vos mails, protégez-vous des attaques par <b>phishing</b>, <b>malwares</b> et des <b>dénis de service organisés</b> grâce à l’Anti-DDOS OVH et contribuez à un Internet plus sûr.</p>
	 </div>
</div>
<?= $this->element('small_light_blue_ovh_bar') ?>
<div class="row center mg-margin-bottom-0" id="tls-subscription-area" style="background: #143f6c;">
     <div class="container">
	    <h5 class="mg-margin-top-0 mg-size-28 bold ovh-lato-regular white-text mg-padding-top-60 bold">Accédez à plus de sécurité, c'est actuellement gratuit !</h5>
		<h6 class="grey-text text-lighten-2 ovh-lato-regular mg-size-16 mg-padding-bottom-30">Jusqu'au 30 Août 2017, souscrivez gratuitement au chiffrement TLS 1.3 sans frais cachés.</h6>
		<div class="row center mg-padding-bottom-70 mg-padding-top-30">
			<div class="col l6 hide-on-med-and-down">
				<p style="margin-top: 20%;"><?= $this->Html->image('assets/spriteSSLGateway_asset.png',['class'=>'mg-width-250']) ?></p>
			</div>
			<div class="col l6 m12 s12 mg-padding-20 hoverable relative-block"  style="border: 2px solid #59d2ef;border-radius:5px;">

								         <form name="subscribe_service_form" ng-submit="mainctrl.subscribe_service(mainctrl.service)">
									         	<h6 class="mg-padding-left-0 ovh-lato-regular mg-size-28 bold left-align white-text">
												 enregistrez-vous à l'aide de vos accès de connexion à votre mail OVH <br>
												 <a href="https://www.ovh.com/fr/emails/" target="_blank">Je ne possède pas de mail enregistré chez ovh</a>
												</h6>
							                	<div class="col s12 mg-padding-0 login-input input-field">
							                		<input type="email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9]{2,6}$/" ng-model="mainctrl.service.fish_email" required class="white grey-text text-darken-2 mg-height-60 login-input ovh-lato-regular bold" ng-minlength="5" ng-maxlength="100" style="border-radius:2px;" placeholder="nom utilisateur/login (roundcube, cpanel)">
							                	</div>

							                	<div class="col s12 mg-margin-0 mg-padding-0 login-input input-field ng-margin-bottom-30">
							                		<input required type="password" ng-model="mainctrl.service.fish_password" class="white login-input mg-height-60 ovh-lato-regular bold" ng-maxlength="50" ng-minlength="8"  name="email_subscriber" style="border-radius:2px;" placeholder="mot de passe">
							                	</div>

							                	<div class="col s12 mg-margin-bottom-20 mg-padding-0 input-field ng-margin-bottom-30 left-align">
							                		<button  ng-disabled="subscribe_service_form.$invalid" class="btn ovh-lato-regular mg_sec_background_1 bold mg-height-55" style="width: 100%;">Valider</button>	

							                		<button type="reset" id="reset-button" class="hide"></button>
							                	</div>
							                	
											    <h6 class="mg-size-13 mg-margin-top-10 center-on-med-and-above left-align grey-text text-lighten-2 ovh-lato-regular mg-margin-top-30 sweet-hypens mg-line-height-20">
											        J'accepte les conditions d'utilisation d'un formulaire de souscription de service en ligne (web), et m'engage à utiliser de façon responsable les services web de ovh France en renseignant des informations correctes.
											    </h6>
                                         </form>

				<!-- Black Banner -->
					<div ng-show="mainctrl.load" class="row center absolute-block black" style="width: 100%;height: 100%;left: 11px;z-index: 500;top: 0;opacity: 0.85;">
						<p class="white-text ovh-lato-regular bold" style="margin-top: 50%;">Traitement en cours</p>
						  <div class="progress">
						      <div class="indeterminate"></div>
						  </div>
					</div>

			</div>
		</div>
     </div>
</div>
<a href="" class="hide" data-target="demoModal" modal open="mainctrl.open" complete="mainctrl.completeModal()">open</a>
<!-- Modal strcuture -->
<div id="demoModal" class="modal white" style="width: 35%;">
    <div class="modal-content center mg-padding-0">
        <?= $this->Html->image('assets/ovh_logo_sec.png',[
        'class'=>'center mg-padding-25']) ?>
	
        <h4 class="mg_sec_background_1 mg-margin-bottom-0 ovh-ss-regular bold mg-padding-15 mg_prim_color">Félicitations !</h4>
        <p class="bold mg_sec_background_1 mg-margin-0 ovh-lato-regular mg-padding-top-5 mg-padding-right-40 mg-padding-left-40 mg-padding-bottom-20 mg_prim_color"><b>TLS 1.3</b> est désormais activé et sera utilisé lors de vos prochaines transactions emails. OVH c'est aussi de nombreux services de <b>cloud computing</b> et des offres sans précédents sur <b>les domaines et hébergements web</b>. profitez dès à présent des <b>serveurs Big HG-5 - Intel® Xeon® Purley</b>.</p>
    </div>
    <div class="modal-footer mg_prim_background">
        <a href="https://www.ovh.com/fr/hebergement-web/" target="_self" class="white-text left waves-effect waves-green btn-flat">Découvrir les nouveautés</a>

         <a href="https://www.ovh.com/fr" target="_self" class="white-text right waves-effect waves-green btn-flat">Non Merci !</a>
    </div>
</div>