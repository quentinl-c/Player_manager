<?php

/* PMUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0d4da7209f235e9d4be5f2d2334e607e8c9ff4665572db35afa5573f9780263c extends Twig_Template
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
        echo "
<div class=\"row\">
    <fieldset class=\"col-md-6\">
        <legend>Utilisateur :</legend>

        <dl class=\"dl-horizontal\">
            <dt>Nom :</dt>
            <dd>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Firstname", array()) . " ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "Name", array())), "html", null, true);
        echo "</dd>
        </dl>
        <dl class=\"dl-horizontal\">
            <dt>Adresse mail :</dt>
            <dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</dd>
        </dl>
        <dl class=\"dl-horizontal\">
            <dt>Roles :</dt>
            <dd>
                <ul>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 20
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </ul>
            </dd>
        </dl>
    </fieldset>
</div>";
    }

    public function getTemplateName()
    {
        return "PMUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  48 => 20,  44 => 19,  35 => 13,  28 => 9,  19 => 2,);
    }
}
