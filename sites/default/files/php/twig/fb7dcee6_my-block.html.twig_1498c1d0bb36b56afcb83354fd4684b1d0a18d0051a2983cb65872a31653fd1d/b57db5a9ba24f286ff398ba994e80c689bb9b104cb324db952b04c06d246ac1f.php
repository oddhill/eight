<?php

/* modules/my_block/templates/my-block.html.twig */
class __TwigTemplate_0c5a00c3df528fb9be041bafebe5c3995596e3605e2b8d7052dc16f5ade4ab7e extends Twig_Template
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
        $tags = array("if" => 12);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 10
        echo "
<div id=\"restaurant-info-wrapper\">
  ";
        // line 12
        if ((isset($context["website"]) ? $context["website"] : null)) {
            // line 13
            echo "    <div class=\"website\"><b>Hemsida:</b> <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website"]) ? $context["website"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["website"]) ? $context["website"] : null), "html", null, true));
            echo "</a></div>
  ";
        }
        // line 15
        echo "
  ";
        // line 16
        if ((isset($context["street_addres"]) ? $context["street_addres"] : null)) {
            // line 17
            echo "  <div class=\"street_addres\"><b>Adress:</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["street_addres"]) ? $context["street_addres"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        if ((isset($context["city"]) ? $context["city"] : null)) {
            // line 21
            echo "    <div class=\"city\"><b>Stad:</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["city"]) ? $context["city"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 23
        echo "

  ";
        // line 25
        if ((isset($context["postal_code"]) ? $context["postal_code"] : null)) {
            // line 26
            echo "  <div class=\"postal_code\"><b>Postkod:</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["postal_code"]) ? $context["postal_code"] : null), "html", null, true));
            echo "</div>
  ";
        }
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/my_block/templates/my-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  85 => 26,  83 => 25,  79 => 23,  73 => 21,  71 => 20,  68 => 19,  62 => 17,  60 => 16,  57 => 15,  49 => 13,  47 => 12,  43 => 10,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default implementation of our hello world template.*/
/*  **/
/*  * Available variables:*/
/*  * - message: The message value passed to our template.*/
/*  *//* */
/* #}*/
/* */
/* <div id="restaurant-info-wrapper">*/
/*   {% if website %}*/
/*     <div class="website"><b>Hemsida:</b> <a href="{{ website }}">{{ website}}</a></div>*/
/*   {% endif %}*/
/* */
/*   {% if street_addres %}*/
/*   <div class="street_addres"><b>Adress:</b> {{ street_addres }}</div>*/
/*   {% endif %}*/
/* */
/*   {% if city %}*/
/*     <div class="city"><b>Stad:</b> {{ city }}</div>*/
/*   {% endif %}*/
/* */
/* */
/*   {% if postal_code %}*/
/*   <div class="postal_code"><b>Postkod:</b> {{ postal_code }}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
