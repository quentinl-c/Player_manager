<?php

/* PMCharacterBundle:CharacterUsed:view_statistics.html.twig */
class __TwigTemplate_c1c8643912fe8cc57ae6d57915df01d12e5164191d0ea8a5c704326c8fe9bd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<h2>Statistiques :</h2>
<ul>
    <li>Création :</li>
    <ul>
        <li>Par <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_view", array("user_id" => $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createUser", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createUser", array()), "username", array()), "html", null, true);
        echo "</a></li>
        <li>le ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "createDate", array()), "d M Y"), "html", null, true);
        echo "</li>
    </ul>
    ";
        // line 9
        if ( !(null === $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateUser", array()))) {
            // line 10
            echo "    <li>Dernière modification :</li>
    <ul>
        <li>Par <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_user_administration_view", array("user_id" => $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateUser", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateUser", array()), "username", array()), "html", null, true);
            echo "</a></li>
        <li>le ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["characterUsed"]) ? $context["characterUsed"] : $this->getContext($context, "characterUsed")), "updateDate", array()), "d M Y"), "html", null, true);
            echo "</li>
    </ul>
    ";
        }
        // line 16
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:CharacterUsed:view_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 12,  38 => 10,  36 => 9,  31 => 7,  25 => 6,  19 => 2,);
    }
}
