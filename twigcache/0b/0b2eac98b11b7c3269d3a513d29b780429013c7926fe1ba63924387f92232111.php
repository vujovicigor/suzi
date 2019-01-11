<?php

/* base.twig */
class __TwigTemplate_a2b3e0380916133b27d352bf05f5f27a0909fe39cdd8656a2a93b194b28ae081 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["_BASE"] ?? null), "html", null, true);
        echo "\">
  <title>SUZI</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"icon\" href=\"images/suzi.png\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\">
</head>
<body>
";
        // line 13
        echo "    <div class=\"head\">
        <a style=\"margin-top: 10px;\" class=\"head--logo\" href=\"index\"><img style=\"margin-left: -2%;\" src=\"images/suzi logo-2.svg\" alt=\"logo\"></a>
        <div class=\"head--meni\">

            <a href=\"index\"         class=\"head--meni-title ";
        // line 17
        if ((twig_lower_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["_GET"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["twig_file_name"] ?? null) : null)) == "index")) {
            echo " active ";
        }
        echo "\">Početna</a>
            <a href=\"o_nama\"         class=\"head--meni-title ";
        // line 18
        if ((twig_lower_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["_GET"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["twig_file_name"] ?? null) : null)) == "o_nama")) {
            echo " active ";
        }
        echo "\">O nama</a>
            <a href=\"akcije\"        class=\"head--meni-title ";
        // line 19
        if ((twig_lower_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["_GET"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["twig_file_name"] ?? null) : null)) == "akcije")) {
            echo " active ";
        }
        echo "\">Akcije</a>
            <a href=\"vesti\"         class=\"head--meni-title ";
        // line 20
        if ((twig_lower_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["_GET"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["twig_file_name"] ?? null) : null)) == "vesti")) {
            echo " active ";
        }
        echo "\">Vesti</a>
            <a href=\"komisije\"      class=\"head--meni-title ";
        // line 21
        if ((twig_lower_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["_GET"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["twig_file_name"] ?? null) : null)) == "komisije")) {
            echo " active ";
        }
        echo "\">Komisije</a>
            <a href=\"publikacije\"   class=\"head--meni-title ";
        // line 22
        if ((twig_lower_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["_GET"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["twig_file_name"] ?? null) : null)) == "publikacije")) {
            echo " active ";
        }
        echo "\">Publikacije</a>
            <a href=\"clanovi\"       class=\"head--meni-title ";
        // line 23
        if ((twig_lower_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = ($context["_GET"] ?? null)) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["twig_file_name"] ?? null) : null)) == "clanovi")) {
            echo " active ";
        }
        echo "\">Članovi</a>
            <a href=\"kontakt\"       class=\"head--meni-title ";
        // line 24
        if ((twig_lower_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = ($context["_GET"] ?? null)) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["twig_file_name"] ?? null) : null)) == "kontakt")) {
            echo " active ";
        }
        echo "\">Kontakt</a>
            <input id=\"typeahead\" type=\"text\" placeholder=\"Countries\">
            <!-- <img src=\"images/pretraga.svg\"/> -->

        </div>
    </div>
    <div class=\"head-responsive\">
        <div class=\"head-responsive-bar\">
            <a style=\"margin-top: 10px;\" class=\"head--logo\" href=\"index\"><img style=\"margin-left: -2%;\" src=\"images/suzi logo-2.svg\" alt=\"logo\"></a>
            <div id=\"navbar\">
                <img class=\"head-responsive-bar-hamb\" src=\"images/menu-icon.svg\"/>
            </div>
        </div>
        <div class=\"head-responsive--icon\">
            
            <div class=\"head-responsive--meni\" id=\"js-meni\">
                <a href=\"index\"         class=\"head-responsive--meni-title ";
        // line 40
        if ((twig_lower_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = ($context["_GET"] ?? null)) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["twig_file_name"] ?? null) : null)) == "index")) {
            echo " active ";
        }
        echo "\">Početna</a>
                <a href=\"o_nama\"         class=\"head-responsive--meni-title ";
        // line 41
        if ((twig_lower_filter($this->env, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["_GET"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["twig_file_name"] ?? null) : null)) == "o_nama")) {
            echo " active ";
        }
        echo "\">O nama</a>
                <a href=\"akcije\"        class=\"head-responsive--meni-title ";
        // line 42
        if ((twig_lower_filter($this->env, (($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = ($context["_GET"] ?? null)) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["twig_file_name"] ?? null) : null)) == "akcije")) {
            echo " active ";
        }
        echo "\">Akcije</a>
                <a href=\"vesti\"         class=\"head-responsive--meni-title ";
        // line 43
        if ((twig_lower_filter($this->env, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["_GET"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["twig_file_name"] ?? null) : null)) == "vesti")) {
            echo " active ";
        }
        echo "\">Vesti</a>
                <a href=\"komisije\"      class=\"head-responsive--meni-title ";
        // line 44
        if ((twig_lower_filter($this->env, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = ($context["_GET"] ?? null)) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["twig_file_name"] ?? null) : null)) == "komisije")) {
            echo " active ";
        }
        echo "\">Komisije</a>
                <a href=\"publikacije\"   class=\"head-responsive--meni-title ";
        // line 45
        if ((twig_lower_filter($this->env, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["_GET"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["twig_file_name"] ?? null) : null)) == "publikacije")) {
            echo " active ";
        }
        echo "\">Publikacije</a>
                <a href=\"clanovi\"       class=\"head-responsive--meni-title ";
        // line 46
        if ((twig_lower_filter($this->env, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = ($context["_GET"] ?? null)) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["twig_file_name"] ?? null) : null)) == "clanovi")) {
            echo " active ";
        }
        echo "\">Članovi</a>
                <a href=\"kontakt\"       class=\"head-responsive--meni-title ";
        // line 47
        if ((twig_lower_filter($this->env, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["_GET"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["twig_file_name"] ?? null) : null)) == "kontakt")) {
            echo " active ";
        }
        echo "\">Kontakt</a>
                
            </div>
        </div>
    </div>

";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "
    <div class=\"footer\">
        <div class=\"footer--1\">
            <div class=\"footer--1--suzi\">2018 SUZI</div>
            <div class=\"footer--1--suzi\"><a href=\"sponzori\">Sponzori SUZI</a></div>
            <div class=\"footer--1--suzi\" style=\"border-right: none;\"><a href=\"prijatelji\">Prijatelji SUZI</a></div>
        </div>
        <div class=\"footer--icons\">
            <a href=\"#\"><img src=\"images/Facebook.svg\"></a>
            <a href=\"#\"><img src=\"images/Linkedin.svg\"></a>
            <a href=\"#\"><img src=\"images/Twitter.svg\"></a>
        </div>
    </div>

";
        // line 69
        echo "<script>
    let meni = document.getElementById('js-meni');
    let navBar = document.getElementById('navbar');

    navBar.addEventListener('click', function(){
        meni.classList.toggle('active-meni');
    });

</script>


<style>
.tt-suggestion { color:red }
.tt-selectable { color:red }
.tt-cursor { background-color: gray }
</style>
";
        // line 87
        echo "   <script src=\"js/jquery-3.3.1.min.js\"></script> 
   <script src=\"js/typeahead.bundle.min.js\"></script> 
   <script>
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;
                matches = [];
                substrRegex = new RegExp(q, 'i');
                \$.each(strs, function(i, item) {
                    if (substrRegex.test(item.Naslov)) {
                        matches.push(item);
                    }
                });
                cb(matches);
            };
        };

        \$.getJSON(\"cms/api.php/?query=_search\", function(result){
            \$('#typeahead').typeahead(null, {
                name: 'countries',
                display: 'Naslov',
                source: substringMatcher(result)
            });   

            \$('#typeahead').bind('typeahead:select', function(ev, suggestion) {
                document.location = suggestion.href+'/'+suggestion.Slug
            });            
        });
   </script>


</body>
</html>
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 53,  198 => 87,  180 => 69,  164 => 54,  162 => 53,  151 => 47,  145 => 46,  139 => 45,  133 => 44,  127 => 43,  121 => 42,  115 => 41,  109 => 40,  88 => 24,  82 => 23,  76 => 22,  70 => 21,  64 => 20,  58 => 19,  52 => 18,  46 => 17,  40 => 13,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig", "/home/suzisaee/public_html/twigtemplates/base.twig");
    }
}
