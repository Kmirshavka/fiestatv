<?php

/* FiestaTVMainWebSiteBundle::layout.html.twig */
class __TwigTemplate_51e3082a91728a1b3fb40df0436817913a6c2e21fc9e27fb0d01213c17b37144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>Fiesta TV</title>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo "/fiestatv/css/main.css";
        echo "\" />
    <script src=\"";
        // line 5
        echo "http://code.jquery.com/jquery-1.11.2.min.js";
        echo "\"></script>
    <script src=\"";
        // line 6
        echo "/fiestatv/js/cookie.js";
        echo "\"></script>
    <script src=\"";
        // line 7
        echo "js/player.js";
        echo "\"></script>


</head>
<body onload=\"getNumberOfCookies()\">
<div id=\"bar\">
    <a href=\"\"><img src=\"\"></a>
    ";
        // line 14
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 15
            echo "    <div class=\"link\">
        <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"account\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><img class=\"avatar\"  src=\"/web/uploads/user/profilepics/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getProfilePicturePath", array(), "method"), "html", null, true);
            echo "\"></a>
    </div>
    ";
        } else {
        }
        // line 21
        echo "
    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"link\">FILMS</a>
    <li>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ganre", array("ganre" => "drama"));
        echo "\" class=\"link-sub\">drama</a>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ganre", array("ganre" => "fantasy"));
        echo "\" class=\"link-sub\">fantasy</a>
    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ganre", array("ganre" => "thriller"));
        echo "\" class=\"link-sub\">thriller</a>
    </li>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\" class=\"link\" onmouseover=\"getNumberOfCookies()\">CART <div id=\"counter\">x</div></a>
    ";
        // line 29
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 30
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"link\">LOGOUT</a>
        ";
        } else {
            // line 32
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"link\">LOGIN</a>
        <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"link\">REGISTER</a>
    ";
        }
        // line 35
        echo "    </div>
";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "

";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "</body>
</html>";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 42,  135 => 41,  130 => 37,  127 => 36,  122 => 44,  120 => 41,  116 => 39,  114 => 36,  111 => 35,  106 => 33,  101 => 32,  95 => 30,  93 => 29,  89 => 28,  84 => 26,  80 => 25,  76 => 24,  71 => 22,  68 => 21,  59 => 17,  53 => 16,  50 => 15,  48 => 14,  38 => 7,  34 => 6,  30 => 5,  26 => 4,  21 => 1,);
    }
}
