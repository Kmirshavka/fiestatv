<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0a68de30ad78808633f64f8dcdc8f0ff386633c8dc6be516b0e1ba9c2ef23718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "    <div id=\"box\" class=\"register\">
        <div id=\"header\" class=\"headerLogin\">
            <h6 class=\"orange\"> </h6>
            <h1>Login</h1>
        </div>
        <div id=\"contentbar\" class=\"register\">
            <div id=\"content\">
                <div id=\"block\" class=\"registerform\">
                    <div id=\"cell\"><div class=\"cell\"> 
                            <form id=\"login\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"fos_user_registration_register\">
                                <h6>Fill yours identification datas into fields below:</h6>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"USERNAME\"><br>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"PASSWORD\">
                                <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" ><span class=\"remember_me\">Keep me login</span></label>
                                <h6> </h6>
                                <input type=\"hidden\" name=\"_target_path\" value=\"cart\" />
                                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"login\">LOGIN</button>
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 20,  58 => 18,  47 => 9,  41 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
