<?php

/* FiestaTVMainWebSiteBundle:Default:order.html.twig */
class __TwigTemplate_ad4b014de588159f502918724cbe2f4ca289d620f4b14e0a4a511f5daec019ba extends Twig_Template
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
        // line 11
        if (twig_test_empty((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")))) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                ";
        } else {
            // line 14
            echo "

                <div id=\"block\" class=\"registerform\" style=\"background-image: url('";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieImg", array(), "method"), "html", null, true);
            echo "');
                        -webkit-box-shadow: inset 0px 0px 260px 260px rgba(29, 24, 24, 0.32);
                        -moz-box-shadow:    inset 0px 0px 260px 260px rgba(29, 24, 24, 0.32);
                        box-shadow:         inset 0px 0px 260px 260px rgba(29, 24, 24, 0.32);\">
                    <div id=\"cell\"><div class=\"cell\"> 

                            <div id=\"movie-full\">

                                <br><h6> Information about your order:
                                <div class=\"info\" style=\"min-width: 180px;\">
                                    <ul><li>Movie:</li><small>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieName", array(), "method"), "html", null, true);
            echo "</small></ul>
                                    <ul><li>Price:</li><small>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMoviePrice", array(), "method"), "html", null, true);
            echo "€</small></ul>
                                    <ul><li>Duration:</li><small>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieDuration", array(), "method"), "html", null, true);
            echo "</small></ul>
                                    <ul><li>Ganre:</li><small>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieGanre", array(), "method"), "html", null, true);
            echo "</small></ul>
                                    <ul><li>Year:</li><small>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieYear", array(), "method"), "html", null, true);
            echo "</small></ul>
                                    <ul><li>Language:</li><small>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieLanguage", array(), "method"), "html", null, true);
            echo "</small></ul>
                                </div>
                                    <h6 style=\"margin-bottom: 46px; height: 46px; border: none;\"> 
                                <div class=\"buttonbar\">
                                    ";
            // line 35
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 36
                echo "                                        <form action=\"";
                echo $this->env->getExtension('routing')->getPath("ordersuccess");
                echo "\" method=\"POST\">
                                            <input type=\"hidden\" name=\"ordermd\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieId", array(), "method"), "html", null, true);
                echo "\">
                                            <input type=\"hidden\" name=\"orderud\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                echo "\">
                                            <button type=\"submit\" id=\"button\" class=\"red\" style=\"height: 32px;\">PAY</button>
                                        </form>
                                    ";
            } else {
                // line 42
                echo "                                    ";
            }
            // line 43
            echo "
                                </div></h6>
                                </h6>
                            </div>
                    </div></div>
                </div>
                ";
        }
        // line 50
        echo "            </div>
        </div>
    </div>
    <script>
        window.addEventListener(\"resize\", function(e) {
            var movie = document.getElementById(\"movie-full\");
            var video_check = movie.offsetHeight + 110;
            var h_window = document.body.offsetHeight;

            if (h_window < video_check) {
                movie.style.width = (document.body.offsetHeight - 110) * (16/10);
            }
            else {
                movie.removeAttribute(\"style\");
            }
            });
        window.addEventListener(\"load\", function(e) {
            var movie = document.getElementById(\"movie-full\");
            var video_check = movie.offsetHeight + 110;
            var h_window = document.body.offsetHeight;

            if (h_window < video_check) {
                movie.style.width = (document.body.offsetHeight - 110) * (16/10);
            }
            else {
                movie.removeAttribute(\"style\");
            }
            });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  122 => 43,  119 => 42,  112 => 38,  108 => 37,  103 => 36,  101 => 35,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  61 => 16,  57 => 14,  51 => 12,  49 => 11,  39 => 3,  36 => 2,  11 => 1,);
    }
}
