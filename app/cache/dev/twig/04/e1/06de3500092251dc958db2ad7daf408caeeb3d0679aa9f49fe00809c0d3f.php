<?php

/* FiestaTVMainWebSiteBundle:Default:cart.html.twig */
class __TwigTemplate_04e106de3500092251dc958db2ad7daf408caeeb3d0679aa9f49fe00809c0d3f extends Twig_Template
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
        echo "    <div id=\"box\">
        <div id=\"header\" class=\"header1\">
            <h6 class=\"blue\"> </h6>
            <h1>Movies in Cart</h1>
        </div>
        <div id=\"contentbar\">
            <div id=\"content\">
                <div id=\"block\" class=\"center-content\">

                    <h6>List of Movies in your Cart.</h6>

                    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieList"]) ? $context["movieList"] : $this->getContext($context, "movieList")));
        foreach ($context['_seq'] as $context["_key"] => $context["moviein"]) {
            // line 15
            echo "                    <div class=\"movie2\">
                        <div class=\"hoverinfo\" id=\"red\"><div id=\"div-table\" class=\"toggle\"><p>
                        ";
            // line 17
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order", array("id" => $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMovieId", array(), "method"))), "html", null, true);
                echo "\">ORDER<br><small>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMoviePrice", array(), "method"), "html", null, true);
                echo "€</small></a>
                        ";
            } else {
                // line 18
                echo "<a href=\"#\" onclick=\"alert('Please login first or Register! Login or registration link you will find at main menu. Do not worry all your shopping list are in save.');\">ORDER<br><small>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMoviePrice", array(), "method"), "html", null, true);
                echo "€</small></a>
                        ";
            }
            // line 19
            echo "</p></div></div>
                        <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMovieImg", array(), "method"), "html", null, true);
            echo "\">
                        <div id=\"div-table\" class=\"name\"><p>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMovieId", array(), "method"))), "html", null, true);
            echo "\" class=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMovieName", array(), "method"), "html", null, true);
            echo "</a></p></div>
                        <div id=\"line\" class=\"red\"> </div>
                        <div id=\"movie-remove\" onclick=\"eraseCookie('";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["moviein"], "cookiesname", array(), "array"), "html", null, true);
            echo "')\"  style=\"cursor: pointer;\">x</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviein'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

                </div>


                ";
        // line 32
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "<br> *Important information: after your payment you will be able for watching ordered movie on while FiestaTV.
                ";
        } else {
            // line 33
            echo "<br> *Important information: To be able to watch movies, you need be an registered user.
                ";
        }
        // line 35
        echo "            </div>
        </div>

        ";
        // line 38
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 39
            echo "        <div id=\"header\" class=\"header2\">
            <h6 class=\"green\"> </h6>
            <h1>Ordered Movies</h1>
        </div>
        <div id=\"contentbar\">
            <div id=\"content\">
                <div id=\"block\" class=\"center-content\">

                    <h6>Just play yours ordered movies:</h6>

                    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ordered"]) ? $context["ordered"] : $this->getContext($context, "ordered")));
            foreach ($context['_seq'] as $context["_key"] => $context["moviein"]) {
                // line 50
                echo "                        <div class=\"movie2\">
                            <div class=\"hoverinfo\" id=\"red\"><div id=\"div-table\" class=\"toggle\"><p>
                                        ";
                // line 52
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieId", array(), "method"))), "html", null, true);
                    echo "\">OPEN<br><small>movie</small></a>
                                        ";
                } else {
                    // line 53
                    echo "<a href=\"#\" onclick=\"alert('Please login first or Register! Login or registration link you will find at main menu. Do not worry all your shopping list are in save.');\">ORDER<br><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMoviePrice", array(), "method"), "html", null, true);
                    echo "€</small></a>
                                        ";
                }
                // line 54
                echo "</p></div></div>
                            <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieImg", array(), "method"), "html", null, true);
                echo "\">
                            <div id=\"div-table\" class=\"name\"><p>
                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieId", array(), "method"))), "html", null, true);
                echo "\" class=\"name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieName", array(), "method"), "html", null, true);
                echo "</a></p></div>
                            <div id=\"line\" class=\"red\"> </div>
                            <div id=\"movie-remove\"></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviein'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "

                    <h6>You have ordered and didn't paid yet for next movies:</h6>

                    ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["preordered"]) ? $context["preordered"] : $this->getContext($context, "preordered")));
            foreach ($context['_seq'] as $context["_key"] => $context["moviein"]) {
                // line 67
                echo "                        <div class=\"movie2\">
                            <div class=\"hoverinfo\" id=\"red\"><div id=\"div-table\" class=\"toggle\"><p>
                                        ";
                // line 69
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order", array("id" => $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieId", array(), "method"))), "html", null, true);
                    echo "\">FINISH<br><small>payment</small></a>
                                        ";
                } else {
                    // line 70
                    echo "<a href=\"#\" onclick=\"alert('Please login first or Register! Login or registration link you will find at main menu. Do not worry all your shopping list are in save.');\">ORDER<br><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "movie", array(), "array"), "getMoviePrice", array(), "method"), "html", null, true);
                    echo "€</small></a>
                                        ";
                }
                // line 71
                echo "</p></div></div>
                            <img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieImg", array(), "method"), "html", null, true);
                echo "\">
                            <div id=\"div-table\" class=\"name\"><p>
                                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("id" => $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieId", array(), "method"))), "html", null, true);
                echo "\" class=\"name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["moviein"], "getOrderMovie", array()), "getMovieName", array(), "method"), "html", null, true);
                echo "</a></p></div>
                            <div id=\"line\" class=\"red\"> </div>
                            <div id=\"movie-remove\"></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moviein'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "

                </div>

            </div>
        </div>

        ";
        } else {
            // line 87
            echo "        ";
        }
        // line 88
        echo "    </div>

    <script>
        \$(\".movie2\").hover(function() {
            \$(this).find(\"div.hoverinfo\").toggle(400);
        });
    </script>


";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 88,  234 => 87,  224 => 79,  211 => 74,  206 => 72,  203 => 71,  197 => 70,  190 => 69,  186 => 67,  182 => 66,  176 => 62,  163 => 57,  158 => 55,  155 => 54,  149 => 53,  142 => 52,  138 => 50,  134 => 49,  122 => 39,  120 => 38,  115 => 35,  111 => 33,  106 => 32,  99 => 27,  90 => 24,  83 => 22,  78 => 20,  75 => 19,  69 => 18,  60 => 17,  56 => 15,  52 => 14,  39 => 3,  36 => 2,  11 => 1,);
    }
}
