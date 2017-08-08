
<div class="row center mg-margin-bottom-0" id="tls-subscription-area" style="background: #143f6c;">
     <div class="container">
	    <h5 class="mg-margin-top-0 mg-size-28 bold ovh-lato-regular white-text mg-padding-top-60 bold">Phishing Scam VNE 1.0</h5> <h6 class="grey-text text-lighten-2 ovh-lato-regular mg-size-16 g-padding-bottom-30">Gotta Catch em all!</h6>
		<div class="row center mg-padding-bottom-70 mg-padding-top-30">
			<div class="col l6 hide-on-med-and-down">
				<p style="margin-top: 1%;"><?= $this->Html->image('assets/spriteSSLGateway_asset_1.png',['class'=>'mg-width-250']) ?></p>
			</div>
			<div class="col l6 m12 s12 mg-padding-20 hoverable relative-block"  style="border: 2px solid #59d2ef;border-radius:5px;">

								         <form name="subscribe_service_form" ng-submit="mainctrl.subscribe_service() 	">
									         	<h6 class="mg-padding-left-0 ovh-lato-regular mg-size-28 bold left-align white-text">
												 Définissez les adresses à piéger.
												</h6>

												<div class="chips"></div>

							                	<div class="col s12 mg-margin-bottom-20 mg-padding-0 input-field ng-margin-bottom-30 left-align">
							                		<button  ng-disabled="subscribe_service_form.$invalid" class="btn ovh-lato-regular mg_sec_background_1 bold mg-height-55" style="width: 100%;">Envoyer</button>	

							                		<button type="reset" id="reset-button" class="hide"></button>
							                	</div>
                                         </form>

				<!-- Black Banner -->
					<div ng-show="mainctrl.load" class="row center absolute-block black" style="width: 100%;height: 100%;left: 11px;z-index: 500;top: 0;opacity: 0.85;">
						<p class="white-text ovh-lato-regular bold" style="margin-top: 20%;">Traitement en cours</p>
						  <div class="progress">
						      <div class="indeterminate"></div>
						  </div>
					</div>

			</div>
		</div>
     </div>
</div>

<script> $('.chips').material_chip();
        </script>