<?php

/* ::base.html.twig */
class __TwigTemplate_fe3fb8b3086ab5f2d94c93564a515655268d35e2ea3c9f22a5b76b0d90da19ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascriptsinclude' => array($this, 'block_javascriptsinclude'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascriptsinclude', $context, $blocks);
        // line 14
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">    
            ";
        // line 19
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "            ";
        $this->displayBlock('menu', $context, $blocks);
        // line 68
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        echo "    
            ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "        </div>        
    </body>
    <footer>
        <div class=\"container\">
            ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "        </div>        
    </footer>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Programming Moris";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/override.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 11
    public function block_javascriptsinclude($context, array $blocks = array())
    {
        // line 12
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 19
    public function block_head($context, array $blocks = array())
    {
        // line 20
        echo "                <div id=\"header\">
                    <h1 id=\"logo\"><a href=\"#\" class=\"notext\">Programming Moris</a></h1>
                    <div class=\"socials right\">
                      <ul>
                        <li><a href=\"#\" class=\"rss\">RSS</a></li>
                        <li><a href=\"#\" class=\"fb\">Facebook</a></li>
                        <li class=\"last\"><a href=\"#\" class=\"twit\">Twitter</a></li>
                      </ul>
                    </div>
                </div>
            ";
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "            <nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#collapse-menu\">
\t\t\t      <span class=\"sr-only\">Toggle navigation</span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t      <span class=\"icon-bar\"></span>
    \t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"#\">Home</a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse\" id=\"collapse-menu\">
    \t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Programming <b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t  <li><a href=\"#\">Web</a></li>
\t\t\t\t\t  <li><a href=\"#\">Java</a></li>
\t\t\t\t\t  <li><a href=\"#\">Python</a></li>
\t\t\t\t\t  <li class=\"divider\"></li>
\t\t\t\t\t  <li><a href=\"#\">My Projects</a></li>
\t\t\t\t\t</ul>
\t\t\t      \t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other stuff <b class=\"caret\"></b></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t  <li><a href=\"#\">Short stories</a></li>
\t\t\t\t\t  <li><a href=\"#\">Movies</a></li>
\t\t\t\t\t  <li><a href=\"#\">Music</a></li>
\t\t\t\t\t</ul>
\t\t\t      \t</li>
\t\t\t\t<li><a href=\"#\">My Online CV</a></li>
\t\t\t\t<li class=\"active\"><a href=\"#\">Contacts</a></li>
\t\t\t</ul>
\t\t</div>
            </nav>
            ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "                <div class=\"container\">
                    <div class=\"col-md-12\" style=\"text-align:right; margin-top:20px;\">
                            <hr>
                            <div class=\"col-md-1\">
                                    <a href=\"http://symfony.com/\" ><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/symfony-logo.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Responsive image\"></a>
                            </div>
                            <div class=\"col-md-1\">
                                    <a href=\"http://getbootstrap.com/\" ><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/bootstrap-logo.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Responsive image\"></a>
                            </div>
                            <p>© 2014 programmingmoris.com</p>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 82,  195 => 79,  189 => 75,  186 => 74,  181 => 69,  176 => 68,  137 => 32,  134 => 31,  120 => 20,  117 => 19,  111 => 13,  106 => 12,  103 => 11,  97 => 9,  93 => 8,  88 => 7,  85 => 6,  79 => 5,  72 => 88,  70 => 74,  64 => 70,  62 => 69,  57 => 68,  54 => 31,  52 => 19,  45 => 15,  42 => 14,  39 => 11,  37 => 6,  33 => 5,  27 => 1,);
    }
}
