<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_55826f9235bc62f80711c0035364ba77f335b0605aa502ec1f20948e97de4dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body>
    <!-- home -->
    <div id=\"home\">
        <!-- banner -->
        <div class=\"banner_w3lspvt\">
            <!-- nav -->
            <div class=\"nav_w3ls pt-4 pb-3 text-center\">
                <nav>
                    <label for=\"drop\" class=\"toggle\">Menu</label>
                    <input type=\"checkbox\" id=\"drop\" />
                    <ul class=\"menu\">
                        <li><a href=\"index.html\" class=\"active\">Accueil</a></li>
                        <li><a href=\"#desti\">Programmes</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for=\"drop-2\" class=\"toggle toogle-2\">Evenement<span class=\"fa fa-angle-down\" aria-hidden=\"true\"></span>
                            </label>
                            <a href=\"#\">Evenements<span class=\"fa fa-angle-down\" aria-hidden=\"true\"></span></a>
                            <input type=\"checkbox\" id=\"drop-2\" />
                            <ul class=\"text-left\">
                                <li><a href=\"#about\" class=\"drop-text\">Voyage</a></li>
                                <li><a href=\"#what\" class=\"drop-text\">Randonnée</a></li>
                                <li><a href=\"#blog\" class=\"drop-text\">Excursion</a></li>
                                <li><a href=\"single.html\" class=\"drop-text\">Camping</a></li>
                            </ul>
                        </li>
                        <li><a href=\"gallery.html\">Galerie</a></li>
                        <li><a href=\"contact.html\">Produit</a></li>
                        <li><a href=\"contact.html\">Guide</a></li>
                        <li><a href=\"contact.html\">Annonce</a></li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
            <div class=\"banner-text text-right\">
                <div class=\"banner-bot\">
                    <h1><a href=\"index.html\" class=\"logo text-wh\">World_Friendship</a></h1>
                    <p class=\"text-bl text-li mt-3 border-bottom pb-4\">Voyager sans rencontrer l'autre, ce n'est pas voyager, c'est se déplacer. </p>
                    <div class=\"social-icons mt-4\">
                        <ul class=\"list-unstyled\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"fa fa-facebook\"></span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"fa fa-youtube\"></span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"fa fa-instagram\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href=\"\" class=\"btn button-style\">Connexion</a>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->

    <!-- about -->
    <section class=\"about py-5\" id=\"about\">
        <div class=\"container pt-xl-5 pt-lg-3\">
            <div class=\"row about-grids\">
                <div class=\"col-lg-5 about-left\">
                    <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ab.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\" />
                </div>
                <div class=\"col-lg-4 about-right mt-lg-0 mt-sm-5 mt-4\">
                    <h3 class=\"mb-3 text-bl let\">Never Stop Exploring</h3>
                    <p class=\"mb-3\">Integer pulvinar leo id viverra feugiat. Pellentesque libero ut justo, semper at tempus vel,
                        ultrices in ligula.</p>
                    <p>Semper at tempus vel, ultrices in ligula. Integer pulvinar leo id viverra feugiat.</p>
                    <a href=\"single.html\" class=\"btn button-style-3\">Learn More</a>
                </div>
                <div class=\"col-lg-3 about-right p-lg-0 mt-lg-0 mt-sm-5 mt-4\">
                    <h3 class=\"mb-3 text-bl let\">Qui Nous Sommes ?</h3>
                    <p class=\"mb-3\">Nulla sollicit udin velit semper at tempus vel, ultrices in ligula leo sed viverra feugiat Nulla
                        sollicit udin velit.</p>
                    <p>Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at tempus vel.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- places -->
    <section class=\"trav-grids py-5\" id=\"desti\">
        <div class=\"container py-xl-5 py-lg-3\">
            <div class=\"title-bg text-center py-5 mb-5\">
                <h3 class=\"tittle text-wh let mb-2 pt-lg-3\">Nos Experiences</h3>
                <p class=\"text-li mx-auto pb-lg-3\">Le monde est un livre et ceux qui ne voyagent pas n’en lisent qu’une page</p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tra1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">Paris</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tra2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">London</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row pt-lg-3\">
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tra3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">Djerba</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/tra4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">Tabarka</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //places -->

    <!-- what -->
    <div class=\"serives-w3pvt-mobi bg-li py-5\" id=\"what\">
        <div class=\"container py-xl-5 py-lg-3\">
            <div class=\"title-bg text-center py-5 mb-5\">
                <h3 class=\"tittle text-wh let mb-2 pt-sm-3\">Notre Mission</h3>
                <p class=\"text-li mx-auto pb-sm-3\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                    quia consequuntur</p>
            </div>
            <div class=\"row welcome-bottom pt-4\">
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-free-code-camp\"></span>
                    <h4 class=\"my-3\">Camping</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid my-md-0 my-4\">
                    <span class=\"fa fa-fighter-jet\"></span>
                    <h4 class=\"my-3\">Voyages Organisés</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-map-signs\"></span>
                    <h4 class=\"my-3\">Guides Expérimentés</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
            <div class=\"row welcome-bottom mb-xl-4 mt-md-5 my-md-0 my-4\">
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-hotel\"></span>
                    <h4 class=\"my-3\">Annonce</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid my-md-0 my-4\">
                    <span class=\"fa fa-bus\"></span>
                    <h4 class=\"my-3\">Randonnée</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-shopping-basket\"></span>
                    <h4 class=\"my-3\">Articles</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class=\"py-4\">
        <div class=\"container py-xl-5 py-3\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6 col-8 footer-grid\">
                    <h2 class=\"mb-3\">
                        <a class=\"logo-footer tm-clr let\" href=\"index.html\">World_Friendship</a>
                    </h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqu.</p>
                </div>
                <div class=\"offset-lg-1 col-lg-2 col-sm-6 col-4 footer-grid mt-lg-0 mt-4\">
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"index.html\">Index</a>
                        </li>
                        <li class=\"my-2\">
                            <a href=\"#about\">About Us</a>
                        </li>
                        <li>
                            <a href=\"#what\">What We Do</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-6 footer-grid mt-lg-0 mt-4\">
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"#desti\">Destination</a>
                        </li>
                        <li class=\"my-2\">
                            <a href=\"#blog\">Blog</a>
                        </li>
                        <li>
                            <a href=\"single.html\">Blog Details</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-6 footer-grid mt-lg-0 mt-4\">
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"gallery.html\">Gallery</a>
                        </li>
                        <li class=\"my-2\">
                            <a href=\"contact.html\">Contact Us</a>
                        </li>
                        <li>
                            <a href=\"#some\">Some More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- footer social icons -->
    <div class=\"social-icons-footer text-center my-3\">
        <ul class=\"list-unstyled\">
            <li>
                <a href=\"#\">
                    <span class=\"fa fa-facebook\"></span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <span class=\"fa fa-youtube\"></span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <span class=\"fa fa-instagram\"></span>
                </a>
            </li>
        </ul>
    </div>
    <!-- //footer social icons -->
    <!-- copyright -->
    <div class=\"copy_right mb-5\">
        <p class=\"text-center text-bl let\">
            <a href=\"\"></a>
        </p>
    </div>
    <!-- //copyright -->

    <!-- move top icon -->
    <a href=\"#home\" class=\"move-top text-center\"></a>
    <!-- //move top icon -->


    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 149,  192 => 135,  173 => 119,  156 => 105,  121 => 73,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <body>
    <!-- home -->
    <div id=\"home\">
        <!-- banner -->
        <div class=\"banner_w3lspvt\">
            <!-- nav -->
            <div class=\"nav_w3ls pt-4 pb-3 text-center\">
                <nav>
                    <label for=\"drop\" class=\"toggle\">Menu</label>
                    <input type=\"checkbox\" id=\"drop\" />
                    <ul class=\"menu\">
                        <li><a href=\"index.html\" class=\"active\">Accueil</a></li>
                        <li><a href=\"#desti\">Programmes</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for=\"drop-2\" class=\"toggle toogle-2\">Evenement<span class=\"fa fa-angle-down\" aria-hidden=\"true\"></span>
                            </label>
                            <a href=\"#\">Evenements<span class=\"fa fa-angle-down\" aria-hidden=\"true\"></span></a>
                            <input type=\"checkbox\" id=\"drop-2\" />
                            <ul class=\"text-left\">
                                <li><a href=\"#about\" class=\"drop-text\">Voyage</a></li>
                                <li><a href=\"#what\" class=\"drop-text\">Randonnée</a></li>
                                <li><a href=\"#blog\" class=\"drop-text\">Excursion</a></li>
                                <li><a href=\"single.html\" class=\"drop-text\">Camping</a></li>
                            </ul>
                        </li>
                        <li><a href=\"gallery.html\">Galerie</a></li>
                        <li><a href=\"contact.html\">Produit</a></li>
                        <li><a href=\"contact.html\">Guide</a></li>
                        <li><a href=\"contact.html\">Annonce</a></li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
            <div class=\"banner-text text-right\">
                <div class=\"banner-bot\">
                    <h1><a href=\"index.html\" class=\"logo text-wh\">World_Friendship</a></h1>
                    <p class=\"text-bl text-li mt-3 border-bottom pb-4\">Voyager sans rencontrer l'autre, ce n'est pas voyager, c'est se déplacer. </p>
                    <div class=\"social-icons mt-4\">
                        <ul class=\"list-unstyled\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"fa fa-facebook\"></span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"fa fa-youtube\"></span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"fa fa-instagram\"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href=\"\" class=\"btn button-style\">Connexion</a>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //home -->

    <!-- about -->
    <section class=\"about py-5\" id=\"about\">
        <div class=\"container pt-xl-5 pt-lg-3\">
            <div class=\"row about-grids\">
                <div class=\"col-lg-5 about-left\">
                    <img src=\"{{ asset('images/ab.jpg') }}\" alt=\"\" class=\"img-fluid\" />
                </div>
                <div class=\"col-lg-4 about-right mt-lg-0 mt-sm-5 mt-4\">
                    <h3 class=\"mb-3 text-bl let\">Never Stop Exploring</h3>
                    <p class=\"mb-3\">Integer pulvinar leo id viverra feugiat. Pellentesque libero ut justo, semper at tempus vel,
                        ultrices in ligula.</p>
                    <p>Semper at tempus vel, ultrices in ligula. Integer pulvinar leo id viverra feugiat.</p>
                    <a href=\"single.html\" class=\"btn button-style-3\">Learn More</a>
                </div>
                <div class=\"col-lg-3 about-right p-lg-0 mt-lg-0 mt-sm-5 mt-4\">
                    <h3 class=\"mb-3 text-bl let\">Qui Nous Sommes ?</h3>
                    <p class=\"mb-3\">Nulla sollicit udin velit semper at tempus vel, ultrices in ligula leo sed viverra feugiat Nulla
                        sollicit udin velit.</p>
                    <p>Integer pulvinar leo id viverra feugiat. Pellentesque libero justo, semper at tempus vel.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- places -->
    <section class=\"trav-grids py-5\" id=\"desti\">
        <div class=\"container py-xl-5 py-lg-3\">
            <div class=\"title-bg text-center py-5 mb-5\">
                <h3 class=\"tittle text-wh let mb-2 pt-lg-3\">Nos Experiences</h3>
                <p class=\"text-li mx-auto pb-lg-3\">Le monde est un livre et ceux qui ne voyagent pas n’en lisent qu’une page</p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"{{ asset('images/tra1.jpg') }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">Paris</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"{{ asset('images/tra2.jpg') }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">London</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row pt-lg-3\">
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"{{ asset('images/tra3.jpg') }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">Djerba</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 mt-4\">
                    <div class=\"grids-tem-one\">
                        <div class=\"row\">
                            <div class=\"col-5 grids-img-left\">
                                <img src=\"{{ asset('images/tra4.jpg') }}\" alt=\"\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-7 right-cont\">
                                <h4 class=\"mb-3 let tm-clr\">Tabarka</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiamjum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //places -->

    <!-- what -->
    <div class=\"serives-w3pvt-mobi bg-li py-5\" id=\"what\">
        <div class=\"container py-xl-5 py-lg-3\">
            <div class=\"title-bg text-center py-5 mb-5\">
                <h3 class=\"tittle text-wh let mb-2 pt-sm-3\">Notre Mission</h3>
                <p class=\"text-li mx-auto pb-sm-3\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                    quia consequuntur</p>
            </div>
            <div class=\"row welcome-bottom pt-4\">
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-free-code-camp\"></span>
                    <h4 class=\"my-3\">Camping</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid my-md-0 my-4\">
                    <span class=\"fa fa-fighter-jet\"></span>
                    <h4 class=\"my-3\">Voyages Organisés</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-map-signs\"></span>
                    <h4 class=\"my-3\">Guides Expérimentés</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
            <div class=\"row welcome-bottom mb-xl-4 mt-md-5 my-md-0 my-4\">
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-hotel\"></span>
                    <h4 class=\"my-3\">Annonce</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid my-md-0 my-4\">
                    <span class=\"fa fa-bus\"></span>
                    <h4 class=\"my-3\">Randonnée</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class=\"col-md-4 welcome-grid\">
                    <span class=\"fa fa-shopping-basket\"></span>
                    <h4 class=\"my-3\">Articles</h4>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class=\"py-4\">
        <div class=\"container py-xl-5 py-3\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6 col-8 footer-grid\">
                    <h2 class=\"mb-3\">
                        <a class=\"logo-footer tm-clr let\" href=\"index.html\">World_Friendship</a>
                    </h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqu.</p>
                </div>
                <div class=\"offset-lg-1 col-lg-2 col-sm-6 col-4 footer-grid mt-lg-0 mt-4\">
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"index.html\">Index</a>
                        </li>
                        <li class=\"my-2\">
                            <a href=\"#about\">About Us</a>
                        </li>
                        <li>
                            <a href=\"#what\">What We Do</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-6 footer-grid mt-lg-0 mt-4\">
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"#desti\">Destination</a>
                        </li>
                        <li class=\"my-2\">
                            <a href=\"#blog\">Blog</a>
                        </li>
                        <li>
                            <a href=\"single.html\">Blog Details</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-lg-2 col-6 footer-grid mt-lg-0 mt-4\">
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"gallery.html\">Gallery</a>
                        </li>
                        <li class=\"my-2\">
                            <a href=\"contact.html\">Contact Us</a>
                        </li>
                        <li>
                            <a href=\"#some\">Some More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- footer social icons -->
    <div class=\"social-icons-footer text-center my-3\">
        <ul class=\"list-unstyled\">
            <li>
                <a href=\"#\">
                    <span class=\"fa fa-facebook\"></span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <span class=\"fa fa-youtube\"></span>
                </a>
            </li>
            <li>
                <a href=\"#\">
                    <span class=\"fa fa-instagram\"></span>
                </a>
            </li>
        </ul>
    </div>
    <!-- //footer social icons -->
    <!-- copyright -->
    <div class=\"copy_right mb-5\">
        <p class=\"text-center text-bl let\">
            <a href=\"\"></a>
        </p>
    </div>
    <!-- //copyright -->

    <!-- move top icon -->
    <a href=\"#home\" class=\"move-top text-center\"></a>
    <!-- //move top icon -->


    </body>
{% endblock %}", "UserBundle:Default:index.html.twig", "C:\\wamp64\\www\\pi_dev\\src\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
