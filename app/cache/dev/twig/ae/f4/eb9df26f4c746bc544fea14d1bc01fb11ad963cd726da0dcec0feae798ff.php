<?php

/* FiestaTVMainWebSiteBundle:Default:orderSuccess.html.twig */
class __TwigTemplate_aef4eb9df26f4c746bc544fea14d1bc01fb11ad963cd726da0dcec0feae798ff extends Twig_Template
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
        <div id=\"header\" class=\"headerMovie\">
            <h6 class=\"red\"> </h6>
            <h1>Order</h1>
        </div>
        <div id=\"contentbar\" class=\"register\">
            <div id=\"content\">


                    ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
                <script>
                    paidCookie('";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "html", null, true);
        echo "','";
        echo $this->env->getExtension('routing')->getPath("index");
        echo "');
                </script>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:orderSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  50 => 12,  39 => 3,  36 => 2,  11 => 1,);
    }
}
