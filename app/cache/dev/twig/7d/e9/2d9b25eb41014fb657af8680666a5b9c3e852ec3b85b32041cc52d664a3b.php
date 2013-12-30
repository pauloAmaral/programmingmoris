<?php

/* ProgrammingMorisHomeBundle:Default:index.html.twig */
class __TwigTemplate_7de92d9b25eb41014fb657af8680666a5b9c3e852ec3b85b32041cc52d664a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"carousel-featured-articles\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<!-- Indicators -->
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#carousel-featured-articles\" data-slide-to=\"0\" class=\"active\"></li>
\t\t    \t<li data-target=\"#carousel-featured-articles\" data-slide-to=\"1\"></li>
\t\t    \t<li data-target=\"#carousel-featured-articles\" data-slide-to=\"2\"></li>
\t\t</ol>

\t  <!-- Wrapper for slides -->
\t  <div class=\"carousel-inner\">
\t    <div class=\"item active\">
\t      <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/images/slider01.gif"), "html", null, true);
        echo "\" alt=\"item1 image\">
\t      <div class=\"carousel-caption feat-article\">
\t\t<h1>Featured Article</h1>
\t\t<h2>Django with Python</h2>
\t\t<h3>Using Django with Python to develop neat websites</h3>
\t      </div>
\t    </div>
            <div class=\"item\">
\t      <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slider01.gif"), "html", null, true);
        echo "\" alt=\"item2 image\">
\t      <div class=\"carousel-caption\">
\t\t<h1>Featured Project</h1>
\t\t<h2>Online Europass</h2>
\t\t<h3>PHP project to put your europass CV online instantly!</h3>
\t      </div>
\t    </div>
\t    <div class=\"item\">
\t      <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/slider01.gif"), "html", null, true);
        echo "\" alt=\"item2 image\">
\t      <div class=\"carousel-caption feat-story\">
\t\t<h1>Featured Story</h1>
\t\t<h2>A great title!</h2>
\t\t<h4><em>\"The rivers of blogland were far more atrocious to him than he could believe...\"</em></h4>
\t      </div>
\t    </div>\t\t\t
\t  </div>

\t  <!-- Controls -->
\t  <a class=\"left carousel-control\" href=\"#carousel-featured-articles\" data-slide=\"prev\">
\t    <span class=\"glyphicon glyphicon-chevron-left\"></span>
\t  </a>
\t  <a class=\"right carousel-control\" href=\"#carousel-featured-articles\" data-slide=\"next\">
\t    <span class=\"glyphicon glyphicon-chevron-right\"></span>
\t  </a>
\t</div>

\t<div class=\"row\">

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header slim\">
\t\t    \t\t<h3 class=\"slim\">About</h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<p>Programming <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" id=\"moris-tooltip\" data-original-title=\"From the Tetum: Life\"\">Moris</a> is a website about programming and about all the other stuff I find interesting about life. It's fundamentally my personal website, my little corner on the web where I can write about the things that I care, and where I can display some of my personal projects. Feel free to dive in, and don't forget to give me some suggestions!(Here link to contacts page or something like it) </p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">

\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header slim\">
\t\t    \t\t<h3 class=\"slim\">Latest Articles</h3>
\t\t\t</div>
\t\t\t<div class=\"media\">
\t\t  \t\t<a class=\"pull-left\" href=\"#\">
\t\t    \t\t\t<img class=\"media-object\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/ad01.gif"), "html", null, true);
        echo "\" alt=\"image for this article\">
\t\t  \t\t</a>
\t\t  \t\t<div class=\"media-body\">
\t\t    \t\t\t<h4 class=\"media-heading\">Article about stuff</h4>
\t\t    \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is</p>\t
  \t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"media\">
\t\t  \t\t<a class=\"pull-left\" href=\"#\">
\t\t    \t\t\t<img class=\"media-object\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/images/ad02.gif"), "html", null, true);
        echo "\" alt=\"image for this article\">
\t\t  \t\t</a>
\t\t  \t\t<div class=\"media-body\">
\t\t    \t\t\t<h4 class=\"media-heading\">Article about more stuff</h4>
\t\t    \t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is</p>\t
  \t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "    <script type=\"text/javascript\">
\t\$('#moris-tooltip').tooltip();
    </script>
";
    }

    public function getTemplateName()
    {
        return "ProgrammingMorisHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 89,  133 => 88,  119 => 77,  107 => 68,  67 => 31,  56 => 23,  45 => 15,  32 => 4,  29 => 3,);
    }
}
