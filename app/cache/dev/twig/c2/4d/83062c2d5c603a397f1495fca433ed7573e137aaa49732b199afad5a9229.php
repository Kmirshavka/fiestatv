<?php

/* FiestaTVMainWebSiteBundle:Default:login.html.twig */
class __TwigTemplate_c24d83062c2d5c603a397f1495fca433ed7573e137aaa49732b199afad5a9229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FiestaTVMainWebSiteBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FiestaTVMainWebSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"box\" class=\"register\">
        <div id=\"header\" class=\"headerLogin\">
            <h6 class=\"orange\"> </h6>
            <h1>Login</h1>
        </div>
        <div id=\"contentbar\" class=\"register\">
            <div id=\"content\">
                <div id=\"block\" class=\"registerform\">
                    <div id=\"cell\"><div class=\"cell\"> 
                            <form id=\"login\" action=\"/filmweb/web/app_dev.php/login_check\" method=\"post\" class=\"fos_user_registration_register\">
                            <h6>Fill yours identification datas into fields below:</h6>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"_yq48NAjxRXCs7EOesC-SZ5Bg3nqHAjdGQIcAEs2xu8\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" placeholder=\"USERNAME\"><br>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"PASSWORD\">
                            <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" ><span class=\"remember_me\">Keep me login</span></label>
                                <h6> </h6>
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
        return "FiestaTVMainWebSiteBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
