<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_e3c7b538defdd3906952d9873e2e6915675e6d768f4a58943c60c6069e8d2363 extends Twig_Template
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
        // line 2
        echo "



<div id=\"bg\"><div id=\"blur\" style=\"background-image: url('/web/uploads/user/profilepics/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getProfilePicturePath", array(), "method"), "html", null, true);
        echo "');\"> </div></div>
<div id=\"box\" class=\"register\">
    <div id=\"header\" class=\"headerAcc\">
        <h6 class=\"lblue\"> </h6>
        <h1>Your Account</h1>
    </div>
    <div id=\"contentbar\" class=\"register\">
        <div id=\"content\">
            <div id=\"block\" class=\"registerform\" style=\" -webkit-box-shadow: inset 0px 0px 222px 222px rgba(0,0,0,0.32);
    -moz-box-shadow: inset 0px 0px 222px 222px rgba(0,0,0,0.32);
    box-shadow: inset 0px 0px 222px 222px rgba(0,0,0,0.32);
    background: rgba(89,89,89,0.32);
    \">
                <div id=\"cell\"><div class=\"cell\"> 


<form id=\"register\" action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    <h6>Fill registration information below:</h6>
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <h6> </h6>
    <button type=\"submit\" id=\"button-form\" class=\"acc\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>


                    </div></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 26,  51 => 24,  44 => 22,  25 => 6,  19 => 2,);
    }
}
