<?php

/* @FOSCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_6756bb368fb0de2cfd44dcd778505175278fe11fb89781b78dc6ad712b592ec3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php

/*
 * This file is part of the FOSCKEditor Bundle.
 *
 * (c) 2018 - present  Friends of Symfony
 * (c) 2009 - 2017     Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @var bool
 * @var bool \$async
 */
@trigger_error(
    'The ckeditor_javascript.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSCKEditor/Form/ckeditor_javascript.html.php", "/var/www/html/access/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
