<?php

/* @Page:/var/www/grav-skeleton-photographer-site/user/plugins/error/pages */
class __TwigTemplate_fb3eb36bef6b05c4cec7cbdb7cb51f85c90ad2c768f206eb7a92991f46a19d8a extends Twig_Template
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
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/grav-skeleton-photographer-site/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}*/
/* */
/* */
