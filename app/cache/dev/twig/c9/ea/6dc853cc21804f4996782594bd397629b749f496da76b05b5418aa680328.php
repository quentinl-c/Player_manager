<?php

/* PMCharacterBundle:LevelPublic:layoutPublic.html.twig */
class __TwigTemplate_c9ea6dc853cc21804f4996782594bd397629b749f496da76b05b5418aa680328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMWelcomeBundle::layoutPublic.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'follow' => array($this, 'block_follow'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'PM_body' => array($this, 'block_PM_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMWelcomeBundle::layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Niveaux - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_follow($context, array $blocks = array())
    {
        // line 10
        echo "    <meta name=\"robots\" content=\"noindex,nofollow\" />
";
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pm_help_public_homepage");
        echo "\">Donjons&Dragons</a></li>
    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pm_level_public_homepage");
        echo "\">Niveaux</a></li>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayBlock('PM_body', $context, $blocks);
    }

    public function block_PM_body($context, array $blocks = array())
    {
        // line 21
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:LevelPublic:layoutPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  79 => 20,  76 => 19,  70 => 16,  66 => 15,  61 => 14,  58 => 13,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
