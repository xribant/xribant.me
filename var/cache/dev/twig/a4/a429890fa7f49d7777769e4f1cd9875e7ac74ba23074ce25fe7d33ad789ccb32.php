<?php

/* base.html.twig */
class __TwigTemplate_295e440349952fe148c35fffa57140bad91e0f0a1b9944bff936a182934bfa61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Développer et créer, c'est une passion. Pourquoi pas un métier? Voici mon profil, mes compétences, mon CV et de quoi me contacter.\">
\t\t<meta name=\"author\" content=\"Xavier Ribant\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 343
        echo "
        ";
        // line 344
        $this->displayBlock('javascripts', $context, $blocks);
        // line 352
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Xavier Ribant - Développeur Web";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
\t        <!-- Bootstrap -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendors/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">



\t\t\t<!-- Custom -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.css"), "html", null, true);
        echo "\">

\t\t\t<!-- Google Font -->
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Abel\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Days+One\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Architects+Daughter\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
\t\t<!-- Intro -->

\t\t<div id=\"intro\" class=\"intro\">
\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->source); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "\t\t            <div id=\"message\" class=\"alert alert-info\" role=\"alert\">
\t\t                ";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t            </div>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t<div class=\"container\">
\t\t      <div class=\"row\">
\t\t        <div class=\"intro-text\">
\t\t          <h1><span class=\"name\">Xavier Ribant</span></h1>
\t\t          <p>Full Stack Web Developer</p>
\t\t          <a href=\"#about\" class=\"btn btn-default btn-lg js-scrollTo\">En Savoir Plus</a> 
\t\t      \t</div>
\t\t      </div>
    \t\t</div>
\t\t</div>

\t\t<!-- Navigation -->
\t\t<div id=\"nav\">
\t\t  <nav class=\"navbar navbar-custom\" data-spy=\"affix\" data-offset-top=\"980\">
\t\t    <div class=\"container\">
\t\t      <div class=\"navbar-header\">
        \t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\"> <i class=\"fa fa-bars\"></i> </button>
        \t  </div>
\t\t      <!-- Collect the nav links, forms, and other content for toggling -->
\t\t      <div class=\"collapse navbar-collapse navbar-center navbar-main-collapse\">
\t\t        <ul class=\"nav navbar-nav\">
\t\t        \t
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#about\">A Propos</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#skills\">Competences</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#resume\">Experience</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#formation\">Formation</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#contact\">Contact</a> </li>
\t\t        </ul>
\t\t      </div>

\t\t    </div>
\t\t  </nav>
\t\t</div>

\t\t<!-- A Propos -->
\t\t<div id=\"about\" class=\"about\">
\t\t\t<div class=\"container\">
\t\t\t    <div class=\"section-title text-center center\">
\t\t\t      <h2>A Propos</h2>
\t\t\t    </div>
\t\t\t    <div class=\"row\">
\t\t\t      <div class=\"col-md-12 text-center\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/me_clem.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"></div>
\t\t\t      <div class=\"col-md-8 col-md-offset-2\">
\t\t\t        <div class=\"about-text\">
\t\t\t          <p>Technicien en informatique devenu ingénieur système, j'ai toujours été attiré voir passioné par la création web. <br>C'est en toute logique que je me suis formé de manière autodidacte aux technologies et languages qui y sont liés.</p>
\t\t\t          <p>Une passion que j'aime mettre au service de proches que je veux transformer en profession.</p>
\t\t\t          <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/xr_resume.pdf"), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-download\"></i> Télécharger Mon CV</a></p>
\t\t\t        </div>
\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t</div>

\t\t<!-- Competences -->
\t\t<div id=\"skills\" class=\"text-center\">
\t\t  <div class=\"container\">
\t\t    <div class=\"section-title center\">
\t\t      <h2>Compétences</h2>

\t\t    </div>
\t\t    <div class=\"row\">
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"95\"> <span class=\"percent\">95</span> </span>
\t\t        <h4>HTML5</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"85\"> <span class=\"percent\">85</span> </span>
\t\t        <h4>CSS3</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"75\"> <span class=\"percent\">75</span> </span>
\t\t        <h4>jQuery</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"80\"> <span class=\"percent\">80</span> </span>
\t\t        <h4>Bootstrap</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"90\"> <span class=\"percent\">90</span> </span>
\t\t        <h4>PHP</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"90\"> <span class=\"percent\">90</span> </span>
\t\t        <h4>SQL</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"80\"> <span class=\"percent\">80</span> </span>
\t\t        <h4>Symfony</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"60\"> <span class=\"percent\">60</span> </span>
\t\t        <h4>Photoshop</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"60\"> <span class=\"percent\">60</span> </span>
\t\t        <h4>Wordpress</h4>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>

\t\t<!-- Parcours -->
\t\t<div id=\"resume\" class=\"text-center\">
\t\t  <div class=\"container\">
\t\t    <div id=\"parcours\" class=\"section-title center\">
\t\t      <h2>Expérience</h2>
\t\t      
\t\t    </div>
\t\t    <div class=\"row\">
\t\t      <div class=\"col-lg-12\">
\t\t        <ul class=\"timeline\">
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>Jan 2012 <br>
\t\t                - <br>
\t\t                Présent </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>PDC-Europe</h4>
\t\t                <h4 class=\"subheading\">System Admin/Engineer</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p>Administration Système Clients/Serveurs.<br>
\t\t                Réseaux et sécurité.</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li class=\"timeline-inverted\">
\t\t            <div class=\"timeline-image\">
\t\t              <h4>Oct 2005 <br>
\t\t                - <br>
\t\t                Déc 2011 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>PDC-Europe</h4>
\t\t                <h4 class=\"subheading\">Site Support Specialist</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p>Support informatique sur site.</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>Oct 2002 <br>
\t\t                - <br>
\t\t                May 2005 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>IP Globalnet</h4>
\t\t                <h4 class=\"subheading\">Helpdesk Engineer</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p>Support Technique ADSL/PSTN à la clientelle de Belgacom/Proximus</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t        </ul>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"container\">
\t\t    <div class=\"section-title center\">
\t\t      <h2>Formation</h2>
\t\t    </div>
\t\t    <div class=\"row\">
\t\t      <div class=\"col-lg-12\">
\t\t        <ul class=\"timeline\">
\t\t          
\t\t          <!-- Education Section-->
\t\t          <li class=\"timeline-inverted\">
\t\t            <div class=\"timeline-image\">
\t\t              <h4>2016 <br>
\t\t                - <br>
\t\t                Présent </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Open Classroom (Self Training)</h4>
\t\t                <h4 class=\"subheading\">Développement Web</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t              \t<h5>Maitrisé:</h5>
\t\t              \tHTML5 et CSS3<br>
\t\t              \tJavaScript<br>
\t\t              \tBootstrap<br>
\t\t                PHP et MySql<br>
\t\t               \tSymfony<br>
\t\t               \t<h5>En cours:</h5>
\t\t               \tJQuery<br>
\t\t               \tGitHub<br>
\t\t               \t<h5>Envisagé:</h5>
\t\t                Angular<br>
\t\t                React.js<br>
\t\t                Swift
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>2000 <br>
\t\t                - <br>
\t\t                2002 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Institut Paul Lambin</h4>
\t\t                <h4 class=\"subheading\">Graduat en informatique</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li class=\"timeline-inverted\">
\t\t            <div class=\"timeline-image\">
\t\t              <h4>1999 <br>
\t\t                - <br>
\t\t                2000 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Institut Saint-Luc</h4>
\t\t                <h4 class=\"subheading\">Préparatoire aux arts numériques</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p></p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>1992 <br>
\t\t                - <br>
\t\t                1999 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Institut Vallée-Bailly</h4>
\t\t                <h4 class=\"subheading\">Enseignement Secondaire Supérieur</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p class=\"text-muted\">Enseignement général option artistique.</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t        </ul>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>

\t\t<!-- Contact Section -->
\t\t<div id=\"contact\" class=\"text-center\">
\t\t  <div class=\"container\">
\t\t    <div class=\"section-title center\">
\t\t      <h2>Contact</h2>
\t\t      
\t\t    </div>
\t\t     <div class=\"clearfix\"></div>
\t\t    <div class=\"col-md-8 col-md-offset-2\">
\t\t      ";
        // line 295
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 295, $this->source); })()), 'form_start');
        echo "
\t\t      <form name=\"sentMessage\" id=\"contactForm\" novalidate>
\t\t        <div class=\"row\">
\t\t          <div class=\"col-md-6\">
\t\t            <div class=\"form-group\">
\t\t            \t";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_name", "name" => "form[name]", "placeholder" => "Nom")));
        echo "
\t\t              
\t\t              <p class=\"help-block text-danger\"></p>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"col-md-6\">
\t\t            <div class=\"form-group\">
\t\t              ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 307, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form_email", "name" => "form[email]", "placeholder" => "E-Mail")));
        echo "
\t\t              <p class=\"help-block text-danger\"></p>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t        <div class=\"form-group\">
\t\t          ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->source); })()), "message", array()), 'widget', array("attr" => array("class" => "form-control text-area-size", "id" => "form_message", "name" => "form[message]", "placeholder" => "Message")));
        echo "
\t\t          <p class=\"help-block text-danger\"></p>
\t\t        </div>
\t\t        <div id=\"success\"></div>
\t\t        <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
\t\t        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 318, $this->source); })()), 'rest');
        echo "
\t\t      </form>
\t\t      ";
        // line 320
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 320, $this->source); })()), 'form_end');
        echo "
\t\t      <div class=\"social\">
\t\t        <ul>
\t\t          <li><a href=\"https://www.facebook.com/xavier.ribant\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t          <li><a href=\"https://twitter.com/XRibant\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t          <li><a href=\"https://github.com/xribant\" target=\"_blank\"><i class=\"fab fa-github\"></i></a></li>
\t\t          <li><a href=\"https://www.linkedin.com/in/xavier-ribant-1b4a7462/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i>
\t\t          </a></li>
\t\t        </ul>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>

\t\t<div id=\"footer\">
\t\t  <div class=\"container text-center\">
\t\t    <div class=\"fnav\">
\t\t      <p>Copyright &copy; 2018 Xavier Ribant - www.xribant.me</p>
\t\t    </div>
\t\t  </div>
\t\t</div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 344
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 345
        echo "        \t<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
        \t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        \t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/SmoothScroll.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/waypoints.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  523 => 350,  519 => 349,  515 => 348,  511 => 347,  507 => 345,  498 => 344,  465 => 320,  460 => 318,  452 => 313,  443 => 307,  433 => 300,  425 => 295,  213 => 86,  205 => 81,  162 => 40,  153 => 37,  150 => 36,  146 => 35,  140 => 31,  131 => 30,  111 => 18,  102 => 12,  98 => 10,  89 => 9,  71 => 8,  59 => 352,  57 => 344,  54 => 343,  52 => 30,  48 => 28,  46 => 9,  42 => 8,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Développer et créer, c'est une passion. Pourquoi pas un métier? Voici mon profil, mes compétences, mon CV et de quoi me contacter.\">
\t\t<meta name=\"author\" content=\"Xavier Ribant\">
        <title>{% block title %}Xavier Ribant - Développeur Web{% endblock %}</title>
        {% block stylesheets %}

\t        <!-- Bootstrap -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/vendors/bootstrap.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">



\t\t\t<!-- Custom -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/custom.css') }}\">

\t\t\t<!-- Google Font -->
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Abel\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Days+One\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Architects+Daughter\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\">

        {% endblock %}
    </head>
    <body>
        {% block body %}

\t\t<!-- Intro -->

\t\t<div id=\"intro\" class=\"intro\">
\t\t\t{% for message in app.flashes('notice') %}
\t\t            <div id=\"message\" class=\"alert alert-info\" role=\"alert\">
\t\t                {{ message }}
\t\t            </div>
\t\t        {% endfor %}
\t\t\t<div class=\"container\">
\t\t      <div class=\"row\">
\t\t        <div class=\"intro-text\">
\t\t          <h1><span class=\"name\">Xavier Ribant</span></h1>
\t\t          <p>Full Stack Web Developer</p>
\t\t          <a href=\"#about\" class=\"btn btn-default btn-lg js-scrollTo\">En Savoir Plus</a> 
\t\t      \t</div>
\t\t      </div>
    \t\t</div>
\t\t</div>

\t\t<!-- Navigation -->
\t\t<div id=\"nav\">
\t\t  <nav class=\"navbar navbar-custom\" data-spy=\"affix\" data-offset-top=\"980\">
\t\t    <div class=\"container\">
\t\t      <div class=\"navbar-header\">
        \t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\"> <i class=\"fa fa-bars\"></i> </button>
        \t  </div>
\t\t      <!-- Collect the nav links, forms, and other content for toggling -->
\t\t      <div class=\"collapse navbar-collapse navbar-center navbar-main-collapse\">
\t\t        <ul class=\"nav navbar-nav\">
\t\t        \t
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#about\">A Propos</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#skills\">Competences</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#resume\">Experience</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#formation\">Formation</a> </li>
\t\t          <li> <a class=\"js-scrollTo\"  href=\"#contact\">Contact</a> </li>
\t\t        </ul>
\t\t      </div>

\t\t    </div>
\t\t  </nav>
\t\t</div>

\t\t<!-- A Propos -->
\t\t<div id=\"about\" class=\"about\">
\t\t\t<div class=\"container\">
\t\t\t    <div class=\"section-title text-center center\">
\t\t\t      <h2>A Propos</h2>
\t\t\t    </div>
\t\t\t    <div class=\"row\">
\t\t\t      <div class=\"col-md-12 text-center\"><img src=\"{{ asset('build/img/me_clem.jpg') }}\" class=\"img-responsive\"></div>
\t\t\t      <div class=\"col-md-8 col-md-offset-2\">
\t\t\t        <div class=\"about-text\">
\t\t\t          <p>Technicien en informatique devenu ingénieur système, j'ai toujours été attiré voir passioné par la création web. <br>C'est en toute logique que je me suis formé de manière autodidacte aux technologies et languages qui y sont liés.</p>
\t\t\t          <p>Une passion que j'aime mettre au service de proches que je veux transformer en profession.</p>
\t\t\t          <p class=\"text-center\"><a class=\"btn btn-primary\" href=\"{{ asset('build/img/xr_resume.pdf') }}\" target=\"_blank\"><i class=\"fa fa-download\"></i> Télécharger Mon CV</a></p>
\t\t\t        </div>
\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t</div>

\t\t<!-- Competences -->
\t\t<div id=\"skills\" class=\"text-center\">
\t\t  <div class=\"container\">
\t\t    <div class=\"section-title center\">
\t\t      <h2>Compétences</h2>

\t\t    </div>
\t\t    <div class=\"row\">
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"95\"> <span class=\"percent\">95</span> </span>
\t\t        <h4>HTML5</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"85\"> <span class=\"percent\">85</span> </span>
\t\t        <h4>CSS3</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"75\"> <span class=\"percent\">75</span> </span>
\t\t        <h4>jQuery</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"80\"> <span class=\"percent\">80</span> </span>
\t\t        <h4>Bootstrap</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"90\"> <span class=\"percent\">90</span> </span>
\t\t        <h4>PHP</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"90\"> <span class=\"percent\">90</span> </span>
\t\t        <h4>SQL</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"80\"> <span class=\"percent\">80</span> </span>
\t\t        <h4>Symfony</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"60\"> <span class=\"percent\">60</span> </span>
\t\t        <h4>Photoshop</h4>
\t\t      </div>
\t\t      <div class=\"col-md-4 col-sm-6 skill\"> <span class=\"chart\" data-percent=\"60\"> <span class=\"percent\">60</span> </span>
\t\t        <h4>Wordpress</h4>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>

\t\t<!-- Parcours -->
\t\t<div id=\"resume\" class=\"text-center\">
\t\t  <div class=\"container\">
\t\t    <div id=\"parcours\" class=\"section-title center\">
\t\t      <h2>Expérience</h2>
\t\t      
\t\t    </div>
\t\t    <div class=\"row\">
\t\t      <div class=\"col-lg-12\">
\t\t        <ul class=\"timeline\">
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>Jan 2012 <br>
\t\t                - <br>
\t\t                Présent </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>PDC-Europe</h4>
\t\t                <h4 class=\"subheading\">System Admin/Engineer</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p>Administration Système Clients/Serveurs.<br>
\t\t                Réseaux et sécurité.</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li class=\"timeline-inverted\">
\t\t            <div class=\"timeline-image\">
\t\t              <h4>Oct 2005 <br>
\t\t                - <br>
\t\t                Déc 2011 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>PDC-Europe</h4>
\t\t                <h4 class=\"subheading\">Site Support Specialist</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p>Support informatique sur site.</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>Oct 2002 <br>
\t\t                - <br>
\t\t                May 2005 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>IP Globalnet</h4>
\t\t                <h4 class=\"subheading\">Helpdesk Engineer</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p>Support Technique ADSL/PSTN à la clientelle de Belgacom/Proximus</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t        </ul>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"container\">
\t\t    <div class=\"section-title center\">
\t\t      <h2>Formation</h2>
\t\t    </div>
\t\t    <div class=\"row\">
\t\t      <div class=\"col-lg-12\">
\t\t        <ul class=\"timeline\">
\t\t          
\t\t          <!-- Education Section-->
\t\t          <li class=\"timeline-inverted\">
\t\t            <div class=\"timeline-image\">
\t\t              <h4>2016 <br>
\t\t                - <br>
\t\t                Présent </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Open Classroom (Self Training)</h4>
\t\t                <h4 class=\"subheading\">Développement Web</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t              \t<h5>Maitrisé:</h5>
\t\t              \tHTML5 et CSS3<br>
\t\t              \tJavaScript<br>
\t\t              \tBootstrap<br>
\t\t                PHP et MySql<br>
\t\t               \tSymfony<br>
\t\t               \t<h5>En cours:</h5>
\t\t               \tJQuery<br>
\t\t               \tGitHub<br>
\t\t               \t<h5>Envisagé:</h5>
\t\t                Angular<br>
\t\t                React.js<br>
\t\t                Swift
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>2000 <br>
\t\t                - <br>
\t\t                2002 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Institut Paul Lambin</h4>
\t\t                <h4 class=\"subheading\">Graduat en informatique</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li class=\"timeline-inverted\">
\t\t            <div class=\"timeline-image\">
\t\t              <h4>1999 <br>
\t\t                - <br>
\t\t                2000 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Institut Saint-Luc</h4>
\t\t                <h4 class=\"subheading\">Préparatoire aux arts numériques</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p></p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t          <li>
\t\t            <div class=\"timeline-image\">
\t\t              <h4>1992 <br>
\t\t                - <br>
\t\t                1999 </h4>
\t\t            </div>
\t\t            <div class=\"timeline-panel\">
\t\t              <div class=\"timeline-heading\">
\t\t                <h4>Institut Vallée-Bailly</h4>
\t\t                <h4 class=\"subheading\">Enseignement Secondaire Supérieur</h4>
\t\t              </div>
\t\t              <div class=\"timeline-body\">
\t\t                <p class=\"text-muted\">Enseignement général option artistique.</p>
\t\t              </div>
\t\t            </div>
\t\t          </li>
\t\t        </ul>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>

\t\t<!-- Contact Section -->
\t\t<div id=\"contact\" class=\"text-center\">
\t\t  <div class=\"container\">
\t\t    <div class=\"section-title center\">
\t\t      <h2>Contact</h2>
\t\t      
\t\t    </div>
\t\t     <div class=\"clearfix\"></div>
\t\t    <div class=\"col-md-8 col-md-offset-2\">
\t\t      {{ form_start(form) }}
\t\t      <form name=\"sentMessage\" id=\"contactForm\" novalidate>
\t\t        <div class=\"row\">
\t\t          <div class=\"col-md-6\">
\t\t            <div class=\"form-group\">
\t\t            \t{{ form_widget(form.name, { 'attr': { 'class': 'form-control', 'id': 'form_name', 'name': 'form[name]', 'placeholder': 'Nom' } }) }}
\t\t              
\t\t              <p class=\"help-block text-danger\"></p>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"col-md-6\">
\t\t            <div class=\"form-group\">
\t\t              {{ form_widget(form.email, { 'attr': { 'class': 'form-control', 'id': 'form_email', 'name': 'form[email]', 'placeholder': 'E-Mail' } }) }}
\t\t              <p class=\"help-block text-danger\"></p>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t\t        <div class=\"form-group\">
\t\t          {{ form_widget(form.message, { 'attr': { 'class': 'form-control text-area-size', 'id': 'form_message', 'name': 'form[message]', 'placeholder': 'Message' } }) }}
\t\t          <p class=\"help-block text-danger\"></p>
\t\t        </div>
\t\t        <div id=\"success\"></div>
\t\t        <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
\t\t        {{ form_rest(form) }}
\t\t      </form>
\t\t      {{ form_end(form) }}
\t\t      <div class=\"social\">
\t\t        <ul>
\t\t          <li><a href=\"https://www.facebook.com/xavier.ribant\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
\t\t          <li><a href=\"https://twitter.com/XRibant\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
\t\t          <li><a href=\"https://github.com/xribant\" target=\"_blank\"><i class=\"fab fa-github\"></i></a></li>
\t\t          <li><a href=\"https://www.linkedin.com/in/xavier-ribant-1b4a7462/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i>
\t\t          </a></li>
\t\t        </ul>
\t\t      </div>
\t\t    </div>
\t\t  </div>
\t\t</div>

\t\t<div id=\"footer\">
\t\t  <div class=\"container text-center\">
\t\t    <div class=\"fnav\">
\t\t      <p>Copyright &copy; 2018 Xavier Ribant - www.xribant.me</p>
\t\t    </div>
\t\t  </div>
\t\t</div>

        {% endblock %}

        {% block javascripts %}
        \t<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
        \t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        \t<script src=\"{{ asset('build/js/easypiechart.js') }}\"></script>
        \t<script src=\"{{ asset('build/js/custom.js') }}\"></script>
        \t<script src=\"{{ asset('build/js/SmoothScroll.js') }}\"></script>
        \t<script src=\"{{ asset('build/js/waypoints.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/ribantxa/Sites/xribant.me/templates/base.html.twig");
    }
}
