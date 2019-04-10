<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* AppBundle:Plate:plateverificator.html.twig */
class __TwigTemplate_a6fd386121e54b861b821d644e325e9612d20b4034ca740c5686a45da193d83b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Plate:plateverificator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Plate:plateverificator.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>Job Application</title>
<link href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css\" rel=\"stylesheet\"/>
<link href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css\" rel=\"stylesheet\"/>

<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"verificator\">
  <div class=\"form\">
      <input type=\"text\" placeholder=\"plate\" id=\"plate\" name=\"plate\"/>
      <div class='input-group date' id='datetimepicker1'>
          <input type='text' class=\"form-control\" id=\"datepicker\" placeholder=\"Type Date and Time\" name=\"datepicker\" />
          <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-calendar\"></span>
          </span>
      </div>
      <br />
      <button id=\"verify_btn\" name=\"verify_btn\">Verify</button>
      <p class=\"message\">
      <span class=\"success\" id=\"successmsj\" style=\"display:none;\"></span>
      <span class=\"fail\" id=\"failmsj\" style=\"display:none;\"></span>
      </p>
  </div>
</div>


<div class=\"container\">
    <div class=\"row\">

        <script type=\"text/javascript\">
            \$(function () {
                \$('#datetimepicker1').datetimepicker();
                \$(\"#verify_btn\").click(function(){
                  var dataForm={};
                  dataForm.plate = \$(\"#plate\").val();
                  dataForm.date = \$(\"#datepicker\").val();;
                  \$.post(\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("is_plate_available");
        echo "\", dataForm)
                   .done(function( data ) {
                       if (typeof data.event !== 'undefined') {
                         switch(data.event)
                         {
                           case \"success\":{
                            \$(\"#successmsj\").show();
                            \$(\"#failmsj\").hide();
                            \$(\"#successmsj\").text(data.message);
                           break;
                           }
                           case \"fail\":{
                            \$(\"#successmsj\").hide();
                            \$(\"#failmsj\").show();
                            \$(\"#failmsj\").text(data.message);
                           break;
                           }
                           default:break;

                         }
                         \$(\"#warningmsg\").delay(5000).fadeOut();
                         \$(\"#warningmsg\").hide();
                       }
                   });

                });

            });
        </script>
    </div>
</div>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Plate:plateverificator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 44,  49 => 12,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<title>Job Application</title>
<link href=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css\" rel=\"stylesheet\"/>
<link href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css\" rel=\"stylesheet\"/>

<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
<link href=\"{{asset('css/styles.css')}}\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"verificator\">
  <div class=\"form\">
      <input type=\"text\" placeholder=\"plate\" id=\"plate\" name=\"plate\"/>
      <div class='input-group date' id='datetimepicker1'>
          <input type='text' class=\"form-control\" id=\"datepicker\" placeholder=\"Type Date and Time\" name=\"datepicker\" />
          <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-calendar\"></span>
          </span>
      </div>
      <br />
      <button id=\"verify_btn\" name=\"verify_btn\">Verify</button>
      <p class=\"message\">
      <span class=\"success\" id=\"successmsj\" style=\"display:none;\"></span>
      <span class=\"fail\" id=\"failmsj\" style=\"display:none;\"></span>
      </p>
  </div>
</div>


<div class=\"container\">
    <div class=\"row\">

        <script type=\"text/javascript\">
            \$(function () {
                \$('#datetimepicker1').datetimepicker();
                \$(\"#verify_btn\").click(function(){
                  var dataForm={};
                  dataForm.plate = \$(\"#plate\").val();
                  dataForm.date = \$(\"#datepicker\").val();;
                  \$.post(\"{{path('is_plate_available')}}\", dataForm)
                   .done(function( data ) {
                       if (typeof data.event !== 'undefined') {
                         switch(data.event)
                         {
                           case \"success\":{
                            \$(\"#successmsj\").show();
                            \$(\"#failmsj\").hide();
                            \$(\"#successmsj\").text(data.message);
                           break;
                           }
                           case \"fail\":{
                            \$(\"#successmsj\").hide();
                            \$(\"#failmsj\").show();
                            \$(\"#failmsj\").text(data.message);
                           break;
                           }
                           default:break;

                         }
                         \$(\"#warningmsg\").delay(5000).fadeOut();
                         \$(\"#warningmsg\").hide();
                       }
                   });

                });

            });
        </script>
    </div>
</div>


</body>
</html>
", "AppBundle:Plate:plateverificator.html.twig", "/Library/WebServer/Documents/PicoyPlaca/src/AppBundle/Resources/views/Plate/plateverificator.html.twig");
    }
}
