<?php

/* FiestaTVMainWebSiteBundle:Default:signup.html.twig */
class __TwigTemplate_e144891be636914d4099368e2a0ba3dcb84bb1b162a56e66c8cba44817c64990 extends Twig_Template
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
        <div id=\"header\" class=\"headerRegister\">
            <h6 class=\"purpure\"> </h6>
            <h1>Registration</h1>
        </div>
        <div id=\"contentbar\" class=\"register\">
            <div id=\"content\">
                <div id=\"block\" class=\"registerform\">
                    <div id=\"cell\"><div class=\"cell\"> 
                <form id=\"register\" action=\"/filmweb/web/app_dev.php/register/\"  method=\"POST\" class=\"fos_user_registration_register\">

                    <h6>Fill registration information below:</h6>
                    <input type=\"text\" id=\"fos_user_registration_form_username\" name=\"fos_user_registration_form[username]\" required=\"required\" maxlength=\"255\" pattern=\".{2,}\" placeholder=\"LOGIN\">
                    <input type=\"email\" id=\"fos_user_registration_form_email\" name=\"fos_user_registration_form[email]\" required=\"required\" placeholder=\"E-MAIL\">
                    <br>
                    <input type=\"password\" id=\"fos_user_registration_form_plainPassword_first\" name=\"fos_user_registration_form[plainPassword][first]\" required=\"required\" placeholder=\"PASSWORD\">
                    <input type=\"password\" id=\"fos_user_registration_form_plainPassword_second\" name=\"fos_user_registration_form[plainPassword][second]\" required=\"required\" placeholder=\"Repeat RASSWORD\">
                    <h6>Put information about you, in fields below:</h6>
                    <input type=\"text\" id=\"fos_user_registration_form_name\" name=\"fos_user_registration_form[name]\" required=\"required\" placeholder=\"NAME\">
                    <input type=\"text\" id=\"fos_user_registration_form_surname\" name=\"fos_user_registration_form[surname]\" required=\"required\" placeholder=\"SURNAME\">
                    <br>
                    <input type=\"text\" id=\"fos_user_registration_form_phone_number\" name=\"fos_user_registration_form[phone_number]\" required=\"required\" placeholder=\"PHONE NO.\">
                    <input type=\"hidden\" id=\"fos_user_registration_form__token\" name=\"fos_user_registration_form[_token]\" value=\"bHwU_oWoq9eYb5jWAxJZxikVL3gGa_qCsmNmBS9H65U\">

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
        return "FiestaTVMainWebSiteBundle:Default:signup.html.twig";
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
