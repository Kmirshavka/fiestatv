<?php

/* FiestaTVMainWebSiteBundle:Default:review.html.twig */
class __TwigTemplate_f3962713102eb482f217c6e19aca13e1cbccaeb90742feeb2ef253a1249554cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <html>
    <head><title>Add review</title>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo "/css/main.css";
        echo "\" />
    </head>
    <body>
    ";
        // line 7
        if (twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) {
            // line 8
            echo "    <div style=\"color: rgba(169,0,0,1); font-size: 14px; font-family: 'font-text';\">hmmm u doing bad things...</div>
    ";
        } else {
            // line 10
            echo "        ";
            if (((isset($context["doing"]) ? $context["doing"] : $this->getContext($context, "doing")) == "added")) {
                // line 11
                echo "        <div style=\"color: white; font-size: 14px; font-family: 'font-text';\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div> ";
            } else {
                // line 12
                echo "        <form action=\"";
                echo $this->env->getExtension('routing')->getPath("review");
                echo "\" method=\"get\" width=\"100%\">
            <input type=\"hidden\" name=\"doing\" value=\"add\">
            <input type=\"hidden\" name=\"md\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["md"]) ? $context["md"] : $this->getContext($context, "md")), "html", null, true);
                echo "\">
            <input type=\"hidden\" name=\"ud\" value=\"";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["ud"]) ? $context["ud"] : $this->getContext($context, "ud")), "html", null, true);
                echo "\">

            <textarea placeholder=\"PUT YOUR REVIEW HERE\" style=\"resize: none; overflow-y: hidden; width: 100%; height: 60px;\" required=\"1\" rows=\"7\" name=\"text\" maxlength=\"10000\"></textarea><br>
            <button id=\"button\" style=\"height: 32px;\" type=\"submit\" class=\"red\">ADD REVIEW</button>
            </form>
        ";
            }
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:review.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  69 => 21,  60 => 15,  56 => 14,  50 => 12,  45 => 11,  42 => 10,  38 => 8,  36 => 7,  30 => 4,  26 => 2,  20 => 1,);
    }
}
