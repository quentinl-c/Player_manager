<?php

/* PMCharacterBundle:ClassDnD:editST.html.twig */
class __TwigTemplate_5ac59593988dcaedd7eb56febd831d4878b7a2da3387e9a48bf8115e4bb3b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("PMCharacterBundle:ClassDnD:layoutAdmin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'PM_body' => array($this, 'block_PM_body'),
            'javascripts_block' => array($this, 'block_javascripts_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PMCharacterBundle:ClassDnD:layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Jets de Sauvegarde - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_h1($context, array $blocks = array())
    {
        // line 10
        echo "    Edition - Jets de Sauvegarde :
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pm_classdnd_administration_view", array("slug" => $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classDnD"]) ? $context["classDnD"] : $this->getContext($context, "classDnD")), "name", array()), "html", null, true);
        echo "</a></li>
    <li class=\"active\">Jets de Sauvegarde</li>
";
    }

    // line 19
    public function block_PM_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"row\">
    <section id=\"content\" class=\"col-lg-12\">
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "            <div class=\"alert alert-success\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        <div class=\"well\">
            ";
        // line 29
        $this->env->loadTemplate("PMCharacterBundle:ClassDnD:editST_content.html.twig")->display($context);
        // line 30
        echo "        </div>
    </section>
</div>
";
    }

    // line 35
    public function block_javascripts_block($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "068af72_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_068af72_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/068af72_editST_1.js");
            // line 37
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "068af72"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_068af72") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/068af72.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "PMCharacterBundle:ClassDnD:editST.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  114 => 36,  111 => 35,  104 => 30,  102 => 29,  98 => 27,  89 => 24,  86 => 23,  82 => 22,  78 => 20,  75 => 19,  66 => 15,  61 => 14,  58 => 13,  53 => 10,  50 => 9,  43 => 6,  40 => 5,  11 => 3,);
    }
}
