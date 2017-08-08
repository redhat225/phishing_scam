<style>
  .menu_element:hover{
    background: transparent !important;
  }
</style>
   <nav class="white black-text">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo mg-padding-top-7 mg-padding-bottom-8 mg-padding-left-34"><?= $this->Html->image('assets/ovh_logo_sec.png',['style'=>'width:100%;']) ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down mg-height-64">
        <li><a href="https://www.ovh.com/auth/?action=gotomanager&from=https://www.ovh.com/fr/" target="_blank" class="black-text menu_element ovh-lato-regular mg-size-14 mg-padding-0">Espace Client</a></li>
        <li class="mg-padding-left-5 mg-padding-right-8 mg-padding-left-8">|</li>
        <li><a href="https://mail.ovh.net" target="_blank" class="black-text menu_element ovh-lato-regular mg-size-14 mg-padding-0">Webmail</a></li>
        <li class="mg-padding-left-5 mg-padding-right-8 mg-padding-left-8">|</li>
        <li><a href="https://www.ovh.com/fr/support/" target="_blank" class="black-text menu_element ovh-lato-regular mg-size-14 mg-padding-0">Support</a></li>
        <li class="mg-padding-left-5 mg-padding-right-8 mg-padding-left-8">|</li>
        <li><a href="https://community.ovh.com" target="_blank" class="black-text menu_element ovh-lato-regular mg-size-14 mg-padding-0">OVH Community</a></li>
        <li class="mg-padding-left-5 mg-padding-right-8 mg-padding-left-8">|</li>
        <li><a href="https://www.ovh.com/fr/blog/" target="_blank" class="black-text menu_element ovh-lato-regular mg-size-14 mg-padding-0">OVH Blog</a></li>
        <li class="mg-padding-left-5 mg-padding-right-8 mg-padding-left-8">|</li>
        <li><a href="#!" alt="français" class="black-text menu_element ovh-lato-regular mg-size-14 mg-line-height-74 mg-padding-0"><?= $this->Html->image('assets/ovhFlags.png',['style'=>'width:30px;']) ?></a></li>
          <li class="mg-padding-left-5 mg-padding-right-8 mg-padding-left-8 green-text"><i class="left ion-locked green-text mg-margin-right-8 mg-margin-left-8"></i> Empowered By <span class="ovh-lato-bold">TLS 1.3</span></li>
      </ul>
    </div>
  </nav>

<script>
    $(".button-collapse").sideNav({
         closeOnClick: true,
      draggable: true
    });
$('#dynamic_navbar').fadeOut();
      $(window).scroll(function(){

      if($(this).scrollTop() > 750 ){
        $('#dynamic_navbar').fadeIn();
      } 
      else{
        $('#dynamic_navbar').fadeOut();
      }
  });
      
</script>