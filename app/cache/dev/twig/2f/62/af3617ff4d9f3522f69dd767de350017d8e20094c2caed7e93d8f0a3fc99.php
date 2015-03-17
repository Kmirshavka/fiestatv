<?php

/* FiestaTVMainWebSiteBundle:Default:movie.html.twig */
class __TwigTemplate_2f62af3617ff4d9f3522f69dd767de350017d8e20094c2caed7e93d8f0a3fc99 extends Twig_Template
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
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieName", array(), "method"), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"contentbar\" class=\"register\">
            <div id=\"content\">
                <div id=\"block\" class=\"registerform\">
                    <div id=\"cell\"><div class=\"cell\"> 

                            <div id=\"movie-full\">
                                <img id=\"cover\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieImg", array(), "method"), "html", null, true);
        echo "\">
                                <div id=\"movie-stat\"></div>
                                <div class=\"buttonbar\">
                                    ";
        // line 17
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 18
            echo "                                    ";
            if ((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play"))) {
                // line 19
                echo "                                        ";
            } else {
                // line 20
                echo "                                        <h4 id=\"button\" class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMoviePrice", array(), "method"), "html", null, true);
                echo "€</h4>
                                        ";
            }
            // line 22
            echo "                                    <h4 id=\"button\" class=\"red\">ADD REVIEW</h4>
                                    ";
            // line 23
            if ((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play"))) {
                // line 24
                echo "                                    ";
            } else {
                // line 25
                echo "                                        <h4 id=\"button\" class=\"red\" onclick=\"createCookie(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieId", array()), "html", null, true);
                echo ",21)\">PUT IN CART</h4>
                                        ";
            }
            // line 27
            echo "                                    ";
            if ((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play"))) {
                echo " <button id=\"button\" class=\"red\" style=\"height: 32px;\">WATCH ONLINE</button>
                                    ";
            } else {
                // line 28
                echo " ";
            }
            // line 29
            echo "
                                    ";
        } else {
            // line 31
            echo "                                        <h4 id=\"button\" class=\"price\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMoviePrice", array(), "method"), "html", null, true);
            echo "€</h4>
                                        <h4 id=\"button\" class=\"red\" onclick=\"createCookie(";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieId", array()), "html", null, true);
            echo ",21)\">PUT IN CART</h4>
                                    ";
        }
        // line 34
        echo "
                                </div>
                            </div>
                            <h6> Information about movie: </h6>
                            <div class=\"info\">
                            <ul></ul><li>Duration:</li><small>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieDuration", array(), "method"), "html", null, true);
        echo "</small></ul>
                            <ul><li>Ganre:</li><small>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieGanre", array(), "method"), "html", null, true);
        echo "</small></ul>
                            <ul><li>Year:</li><small>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieYear", array(), "method"), "html", null, true);
        echo "</small></ul>
                            <ul><li>Actors:</li><small>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieActors", array(), "method"), "html", null, true);
        echo "</small></ul>
                            <ul><li>Language:</li><small>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieLanguage", array(), "method"), "html", null, true);
        echo "</small></ul>
                            </div>

                            <blockquote>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieAbout", array(), "method"), "html", null, true);
        echo "</blockquote>
                            <div id=\"review\"> </div>
                        </div></div>
                </div>
            </div>
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
        // line 79
        if ((isset($context["play"]) ? $context["play"] : $this->getContext($context, "play"))) {
            // line 80
            echo "        <script>
            \$( \"button#button\" ).click(function() {
                \$( \"#cover\" ).replaceWith( \"<div id='player' class='jquery-youtube-tubeplayer'>\" + \"<iframe id='youtube' frameborder='0' allowfullscreen='1' width='100%' src='";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieVideo", array(), "method"), "html", null, true);
            echo "'></iframe>\" + \"</div>\" );
                vph = \$(window).height()-110;
                \$(\"#youtube\").css({'height': vph + 'px'});
                \$( this ).hide();
            });
            \$( \"h4#button\" ).click(function() {
                \$( \"#review\" ).replaceWith( \"<iframe id='review' frameborder='0' scrolling='0' allowfullscreen='1' height='120px' src='";
            // line 88
            echo $this->env->getExtension('routing')->getPath("review");
            echo "?doing=open&md=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getMovieId", array(), "method"), "html", null, true);
            echo "&ud=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "'></iframe>\");
                \$('html,body').animate({
                                scrollTop: \$(\"#review\").offset().top},
                            'slow');
                \$(\"h4#button\").text('NEW REVIEW');
            });

            window.onresize = function(event) {
                vph = \$(\"#youtube\").width()*(10/16);
                \$('#youtube').css({'height': vph + 'px'});
            }
        </script> ";
        } else {
            // line 99
            echo " ";
        }
    }

    public function getTemplateName()
    {
        return "FiestaTVMainWebSiteBundle:Default:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 99,  192 => 88,  183 => 82,  179 => 80,  177 => 79,  141 => 46,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  112 => 34,  107 => 32,  102 => 31,  98 => 29,  95 => 28,  89 => 27,  83 => 25,  80 => 24,  78 => 23,  75 => 22,  69 => 20,  66 => 19,  63 => 18,  61 => 17,  55 => 14,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
