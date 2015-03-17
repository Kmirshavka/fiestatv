<?php

/* FiestaTVMainWebSiteBundle:Default:ganre.html.twig */
class __TwigTemplate_2d546740336f7908828296b019b06577cf4c946534b1c102aee65d89f347b7b8 extends Twig_Template
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
        echo " <div id=\"box\">
        <div id=\"header\" class=\"header1\">
            <h6 class=\"blue\"> </h6>
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["ganre"]) ? $context["ganre"] : $this->getContext($context, "ganre"))), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"contentbar\">
            <div id=\"content\">
         <div id=\"block\" class=\"center-content\">

             <h6>Under this text you'll see all movies from Fiesta's liabary. Ganre of your selection is: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["ganre"]) ? $context["ganre"] : $this->getContext($context, "ganre")), "html", null, true);
        echo ".</h6>

             ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieList"]) ? $context["movieList"] : $this->getContext($context, "movieList")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 15
            echo "             <div id=\"movie\" class=\"blue\">
                 <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($context["movie"], "getMovieId", array(), "method"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getMovieImg", array(), "method"), "html", null, true);
            echo "\"></a>
                 <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($context["movie"], "getMovieId", array(), "method"))), "html", null, true);
            echo "\" class=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getMovieName", array(), "method"), "html", null, true);
            echo "</a>
                 <div class=\"buttonbar\">
                 <h4 id=\"button\" class=\"price\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getMoviePrice", array(), "method"), "html", null, true);
            echo "€</h4>
                 <h4 id=\"button\" class=\"blue\" onclick=\"createCookie(";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getMovieId", array()), "html", null, true);
            echo ",21)\">PUT IN CART</h4>
                 </div>
             </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "

         </div>


                <br> * Additional information: movies added after 1 January 2008 available in FullHD.
     </div>
        </div>
 </div>

";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:ganre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  82 => 20,  78 => 19,  71 => 17,  65 => 16,  62 => 15,  58 => 14,  53 => 12,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
