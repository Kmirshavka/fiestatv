<?php

/* FiestaTVMainWebSiteBundle:Default:index.html.twig */
class __TwigTemplate_930b833486f0e81a06c6e6cc75c0d23faea3ce000f312d44f38674df8a9d4bf7 extends Twig_Template
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
            <h1>Collection</h1>
        </div>
        <div id=\"contentbar\">
            <div id=\"content\">
         <div id=\"block\" class=\"center-content\">

             <h6>Bellow represented all movie collection of FiestaTV and sorted by Name of Movie, and aviliable for you.</h6>

             ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        foreach ($context['_seq'] as $context["_key"] => $context["p_movie"]) {
            // line 15
            echo "             <div id=\"movie\" class=\"blue\">
                 <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($context["p_movie"], "getMovieId", array(), "method"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p_movie"], "getMovieImg", array(), "method"), "html", null, true);
            echo "\"></a>
                 <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($context["p_movie"], "getMovieId", array(), "method"))), "html", null, true);
            echo "\" class=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p_movie"], "getMovieName", array(), "method"), "html", null, true);
            echo "</a>
                 <div class=\"buttonbar\">
                 <h4 id=\"button\" class=\"price\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p_movie"], "getMoviePrice", array(), "method"), "html", null, true);
            echo "€</h4>
                 <h4 id=\"button\" class=\"blue\" onclick=\"createCookie(";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p_movie"], "getMovieId", array()), "html", null, true);
            echo ",21)\">PUT IN CART</h4>
                 </div>
             </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p_movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "

         </div>


                <br> Additional information: movies added after 1 January 2008 available in FullHD.
     </div>
        </div>

     <div id=\"header\" class=\"header2\">
         <h6 class=\"green\"> </h6>
         <h1>Most Ordered</h1>
     </div>
     <div id=\"contentbar\">
         <div id=\"content\">
             <div id=\"block\" class=\"center-content\">

                 <h6>In this block we have most popular movies.</h6>

                 ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) ? $context["popular"] : $this->getContext($context, "popular")));
        foreach ($context['_seq'] as $context["_key"] => $context["pop_movies"]) {
            // line 44
            echo "                 <div id=\"movie\" class=\"green\">
                     <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["pop_movies"], 0, array(), "array"), "getOrderMovie", array(), "method"), "getMovieId", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pop_movies"], 0, array(), "array"), "getOrderMovie", array(), "method"), "getMovieImg", array()), "html", null, true);
            echo "\"></a>
                     <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["pop_movies"], 0, array(), "array"), "getOrderMovie", array(), "method"), "getMovieId", array()))), "html", null, true);
            echo "\" class=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pop_movies"], 0, array(), "array"), "getOrderMovie", array(), "method"), "getMovieName", array()), "html", null, true);
            echo "</a>
                     <div id=\"movie-stat\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["pop_movies"], "cnt", array(), "array"), "html", null, true);
            echo "</div>
                     <div class=\"buttonbar\">
                         <h4 id=\"button\" class=\"price\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["pop_movies"], 0, array(), "array"), "getOrderMovie", array(), "method"), "getMoviePrice", array()), "html", null, true);
            echo "</h4>
                         <a id=\"button\" class=\"green\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["pop_movies"], 0, array(), "array"), "getOrderMovie", array(), "method"), "getMovieId", array()))), "html", null, true);
            echo "\">ABOUT</a>
                     </div>
                 </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop_movies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "

             </div>


             <br> Based on ordered movies.
         </div>
     </div>
 </div>

";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  135 => 50,  131 => 49,  126 => 47,  120 => 46,  114 => 45,  111 => 44,  107 => 43,  86 => 24,  76 => 20,  72 => 19,  65 => 17,  59 => 16,  56 => 15,  52 => 14,  39 => 3,  36 => 2,  11 => 1,);
    }
}
