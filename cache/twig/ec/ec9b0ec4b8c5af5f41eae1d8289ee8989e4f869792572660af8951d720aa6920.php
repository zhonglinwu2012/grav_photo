<?php

/* partials/theme-style.html.twig */
class __TwigTemplate_e36d5cbd76389968628fab09b69c36e37297ab3422baf19d82fb34d6da149e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"style-theme\">
  <div class=\"custom\">
    <div class=\"custom-icon\">
      <a href=\"#\" class=\"color-choice\"><i class=\"fa fa-sliders\"></i></a>
    </div>
    <div class=\"custom-color txtcenter\">
      <h5>Choose your color</h5>
      <ul class=\"\">
        <li>
          <a href=\"#\" class=\"orange\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"purple\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"indigo\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"blue\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"green\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"brown\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"yellow\"></a>
        </li>
        <li>
          <a href=\"#\" class=\"red\"></a>
        </li>
      </ul>
      <button class=\"reset\">Reset</button>
    </div>
  </div>
</div>

<style>
  .style-theme{
    position:fixed;
    top: 20%;
    right:48px;
    transition: all ease .25s;
  }
  .style-theme.opened{    
    
    right:216px;
  }
  .custom{
    position: relative;
  }
  .custom button {
    margin: 0 auto 8px;
    padding: 6px 10px;
  }
  .custom-icon {
    position: absolute;    
    top: 0;
    left: 0;
    width: 48px;    
    background-color: #fff;
    border: 1px solid #ededed;
    box-shadow: 2px 0 5px #999;
    
  }
  .custom-icon a:focus, .custom-icon a:active{
    color: #1bb3e9 !important;
  }
  .custom-icon i{
    padding: 8px;
    font-size: 32px;
  }
  .custom-color{
    position:absolute;
    top: 0;
    left: 48px;
    border: 1px solid #ededed;
    background-color: #fff;
  }
  
  .custom-color h5{
    padding: 0;
    margin: 8px;
    text-align: center;
  }
  .custom-color ul{
    display: inline-block;
    padding: 0;
    margin: 0;
    list-style: none;
    width: 150px;
    margin: 8px;
    text-align: center;
  }
  .custom-color ul li{    
    display: inline-block;
    padding: 0;
    margin: 0;
  }
  .custom-color a {
    display: block;
    margin: 4px;
    width: 24px;
    height: 24px;
    
  }
  a.orange {
    background-color: #ea8825;
  }
  a.purple {
    background-color: #8600c8;
  }
  a.indigo {
    background-color: #3f51b5;
  }
  a.blue {
    background-color: #0196a7;
  }
  a.green {
    background-color: #00ab66;
  }
  a.brown {
    background-color: #795548;
  }
  a.yellow {
    background-color: #e5c41a;
  }
  a.red {
    background-color: #de2525;
  }


</style>

<script>
\$(function () {
    \$('.color-choice').click(function () {
      \$('.style-theme').toggleClass('opened');
    });
  });
  
\$(function () {
  if (typeof sessionStorage != 'undefined'){
    sessionStorage.setItem('originValue', 'wrap-site');
    
    \$(document).ready(function() {
      if (sessionStorage.getItem('sessionValue')){
        var sessionValue = sessionStorage.getItem('sessionValue');
      }
      else {
        var sessionValue = sessionStorage.getItem('originValue');
      }      
      
      \$('#ws').removeClass().addClass(sessionValue);
    });
    
    \$('.custom-color li a').click(function () {
      var name = \$(this).attr('class');
      sessionStorage.setItem('sessionValue', 'wrap-site'+'-'+name);      
      \$('#ws').removeClass().addClass(sessionStorage.getItem('sessionValue'));
    });
    
    \$('.reset').click(function () {      
      \$('#ws').removeClass().addClass(sessionStorage.getItem('originValue'));
      sessionStorage.removeItem('sessionValue');
    });  
    
  }
  else {
    \$('.custom-color li a').click(function () {
      var name = \$(this).attr('class');
      \$('#ws').removeClass().addClass('wrap-site-' + name);
    });
    \$('.reset').click(function () {
      \$('#ws').removeClass().addClass('wrap-site-');      
    });  
  }
  
});

</script>

";
    }

    public function getTemplateName()
    {
        return "partials/theme-style.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="style-theme">*/
/*   <div class="custom">*/
/*     <div class="custom-icon">*/
/*       <a href="#" class="color-choice"><i class="fa fa-sliders"></i></a>*/
/*     </div>*/
/*     <div class="custom-color txtcenter">*/
/*       <h5>Choose your color</h5>*/
/*       <ul class="">*/
/*         <li>*/
/*           <a href="#" class="orange"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="purple"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="indigo"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="blue"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="green"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="brown"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="yellow"></a>*/
/*         </li>*/
/*         <li>*/
/*           <a href="#" class="red"></a>*/
/*         </li>*/
/*       </ul>*/
/*       <button class="reset">Reset</button>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <style>*/
/*   .style-theme{*/
/*     position:fixed;*/
/*     top: 20%;*/
/*     right:48px;*/
/*     transition: all ease .25s;*/
/*   }*/
/*   .style-theme.opened{    */
/*     */
/*     right:216px;*/
/*   }*/
/*   .custom{*/
/*     position: relative;*/
/*   }*/
/*   .custom button {*/
/*     margin: 0 auto 8px;*/
/*     padding: 6px 10px;*/
/*   }*/
/*   .custom-icon {*/
/*     position: absolute;    */
/*     top: 0;*/
/*     left: 0;*/
/*     width: 48px;    */
/*     background-color: #fff;*/
/*     border: 1px solid #ededed;*/
/*     box-shadow: 2px 0 5px #999;*/
/*     */
/*   }*/
/*   .custom-icon a:focus, .custom-icon a:active{*/
/*     color: #1bb3e9 !important;*/
/*   }*/
/*   .custom-icon i{*/
/*     padding: 8px;*/
/*     font-size: 32px;*/
/*   }*/
/*   .custom-color{*/
/*     position:absolute;*/
/*     top: 0;*/
/*     left: 48px;*/
/*     border: 1px solid #ededed;*/
/*     background-color: #fff;*/
/*   }*/
/*   */
/*   .custom-color h5{*/
/*     padding: 0;*/
/*     margin: 8px;*/
/*     text-align: center;*/
/*   }*/
/*   .custom-color ul{*/
/*     display: inline-block;*/
/*     padding: 0;*/
/*     margin: 0;*/
/*     list-style: none;*/
/*     width: 150px;*/
/*     margin: 8px;*/
/*     text-align: center;*/
/*   }*/
/*   .custom-color ul li{    */
/*     display: inline-block;*/
/*     padding: 0;*/
/*     margin: 0;*/
/*   }*/
/*   .custom-color a {*/
/*     display: block;*/
/*     margin: 4px;*/
/*     width: 24px;*/
/*     height: 24px;*/
/*     */
/*   }*/
/*   a.orange {*/
/*     background-color: #ea8825;*/
/*   }*/
/*   a.purple {*/
/*     background-color: #8600c8;*/
/*   }*/
/*   a.indigo {*/
/*     background-color: #3f51b5;*/
/*   }*/
/*   a.blue {*/
/*     background-color: #0196a7;*/
/*   }*/
/*   a.green {*/
/*     background-color: #00ab66;*/
/*   }*/
/*   a.brown {*/
/*     background-color: #795548;*/
/*   }*/
/*   a.yellow {*/
/*     background-color: #e5c41a;*/
/*   }*/
/*   a.red {*/
/*     background-color: #de2525;*/
/*   }*/
/* */
/* */
/* </style>*/
/* */
/* <script>*/
/* $(function () {*/
/*     $('.color-choice').click(function () {*/
/*       $('.style-theme').toggleClass('opened');*/
/*     });*/
/*   });*/
/*   */
/* $(function () {*/
/*   if (typeof sessionStorage != 'undefined'){*/
/*     sessionStorage.setItem('originValue', 'wrap-site');*/
/*     */
/*     $(document).ready(function() {*/
/*       if (sessionStorage.getItem('sessionValue')){*/
/*         var sessionValue = sessionStorage.getItem('sessionValue');*/
/*       }*/
/*       else {*/
/*         var sessionValue = sessionStorage.getItem('originValue');*/
/*       }      */
/*       */
/*       $('#ws').removeClass().addClass(sessionValue);*/
/*     });*/
/*     */
/*     $('.custom-color li a').click(function () {*/
/*       var name = $(this).attr('class');*/
/*       sessionStorage.setItem('sessionValue', 'wrap-site'+'-'+name);      */
/*       $('#ws').removeClass().addClass(sessionStorage.getItem('sessionValue'));*/
/*     });*/
/*     */
/*     $('.reset').click(function () {      */
/*       $('#ws').removeClass().addClass(sessionStorage.getItem('originValue'));*/
/*       sessionStorage.removeItem('sessionValue');*/
/*     });  */
/*     */
/*   }*/
/*   else {*/
/*     $('.custom-color li a').click(function () {*/
/*       var name = $(this).attr('class');*/
/*       $('#ws').removeClass().addClass('wrap-site-' + name);*/
/*     });*/
/*     $('.reset').click(function () {*/
/*       $('#ws').removeClass().addClass('wrap-site-');      */
/*     });  */
/*   }*/
/*   */
/* });*/
/* */
/* </script>*/
/* */
/* */
