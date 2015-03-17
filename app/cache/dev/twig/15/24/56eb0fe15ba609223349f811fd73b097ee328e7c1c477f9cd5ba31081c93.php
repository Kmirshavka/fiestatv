<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_152456eb0fe15ba609223349f811fd73b097ee328e7c1c477f9cd5ba31081c93 extends Twig_Template
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
<div id=\"box\" class=\"register\">
    <div id=\"header\" class=\"headerRegister\">
        <h6 class=\"purpure\"> </h6>
        <h1>Registration</h1>
    </div>
    <div id=\"contentbar\" class=\"register\">
        <div id=\"content\">
            <div id=\"block\" class=\"registerform\">
                <div id=\"cell\"><div class=\"cell\"> 
<form id=\"register\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    <!-- { form_widget(form) }} -->
    <h6>Fill registration information below:</h6>

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "maxlength" => "16", "pattern" => ".{2,}", "placeholder" => $this->env->getExtension('translator')->trans("USERNAME", array(), "FOSUserBundle"))));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "

    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("E-MAIL", array(), "FOSUserBundle"))));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
<br>
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("PASSWORD", array(), "FOSUserBundle"))));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "

    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("REPEAT RASSWORD", array(), "FOSUserBundle"))));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <h6> </h6>
    <button type=\"submit\" id=\"button-form\" class=\"register\">REGISTER</button>
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
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  71 => 26,  67 => 25,  62 => 23,  58 => 22,  53 => 20,  49 => 19,  44 => 17,  40 => 16,  31 => 12,  19 => 2,);
    }
}
