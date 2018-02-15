<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2cebb902c9e94d47d5b3515d1f3c39a56859b6561cfb976f8fb76039f256712c extends Twig_Template
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
        $__internal_51390bc26b04f0b3cd78757b8d19a9a0db550a84952afc95ba8f420e97df94ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51390bc26b04f0b3cd78757b8d19a9a0db550a84952afc95ba8f420e97df94ab->enter($__internal_51390bc26b04f0b3cd78757b8d19a9a0db550a84952afc95ba8f420e97df94ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_24ed0c433ec83f4207fa24dd28d1ecd956726a7f6e58ef77e0ebfa4955bb2015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ed0c433ec83f4207fa24dd28d1ecd956726a7f6e58ef77e0ebfa4955bb2015->enter($__internal_24ed0c433ec83f4207fa24dd28d1ecd956726a7f6e58ef77e0ebfa4955bb2015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_51390bc26b04f0b3cd78757b8d19a9a0db550a84952afc95ba8f420e97df94ab->leave($__internal_51390bc26b04f0b3cd78757b8d19a9a0db550a84952afc95ba8f420e97df94ab_prof);

        
        $__internal_24ed0c433ec83f4207fa24dd28d1ecd956726a7f6e58ef77e0ebfa4955bb2015->leave($__internal_24ed0c433ec83f4207fa24dd28d1ecd956726a7f6e58ef77e0ebfa4955bb2015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
