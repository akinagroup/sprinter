<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c1e5f404d75c275ca26ac3f1dddf995ba6742d2ba5ac5cd695c0c6b0019755cb extends Twig_Template
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
        $__internal_9fd28c6b03b8e911ff0cb973248b2cf6a25460e453344cf17bf7860386dd3acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd28c6b03b8e911ff0cb973248b2cf6a25460e453344cf17bf7860386dd3acf->enter($__internal_9fd28c6b03b8e911ff0cb973248b2cf6a25460e453344cf17bf7860386dd3acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a9829821ec7abbe9197c786be96ae7fcf2ecd888a5f0c5a3a1f80e8ee0c30ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9829821ec7abbe9197c786be96ae7fcf2ecd888a5f0c5a3a1f80e8ee0c30ed3->enter($__internal_a9829821ec7abbe9197c786be96ae7fcf2ecd888a5f0c5a3a1f80e8ee0c30ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9fd28c6b03b8e911ff0cb973248b2cf6a25460e453344cf17bf7860386dd3acf->leave($__internal_9fd28c6b03b8e911ff0cb973248b2cf6a25460e453344cf17bf7860386dd3acf_prof);

        
        $__internal_a9829821ec7abbe9197c786be96ae7fcf2ecd888a5f0c5a3a1f80e8ee0c30ed3->leave($__internal_a9829821ec7abbe9197c786be96ae7fcf2ecd888a5f0c5a3a1f80e8ee0c30ed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
