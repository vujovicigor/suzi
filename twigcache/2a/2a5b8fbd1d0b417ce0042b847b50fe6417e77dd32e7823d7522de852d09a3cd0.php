<?php

/* index.twig */
class __TwigTemplate_55ba1e1009fbdcde3a6bfc6daf8667db60659e399068905dc720fa4df24dad86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"home\">
    <div class=\"home--part\">
        <div class=\"home--part-istaknuta-akcija\">
                ";
        // line 7
        $context["IstaknutaAkcija"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("IstaknutaAkcija"));
        // line 8
        echo "                ";
        // line 9
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Slika1", array())) {
            // line 10
            echo "                    <a href=\"akcije/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Slug", array()), "html", null, true);
            echo "\"><div style=\"background-image: url('img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Slika1", array()), "html", null, true);
            echo "'); background-size: contain;
                    background-repeat: no-repeat;     background-position: center; height: 335px;\"></div></a>
                ";
        }
        // line 13
        echo "                <div class=\"title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Naslov", array()), "html", null, true);
        echo "</div>
                <div class=\"text\">";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Text", array());
        echo "  </div>
                <div class=\"more\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "href", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["IstaknutaAkcija"] ?? null), "Slug", array()), "html", null, true);
        echo "\">Vidi ceo tekst...</a></div>

        </div>
        <div class=\"home--part-2\">
                <div class=\"suzi-akcije\"> SUZI Akcije</div>
                <div class=\"overflow\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Akcije")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "                        <div class=\"overflow-border\">
                            <div class=\"naslov\"><a href=\"akcije/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Naslov", array()), "html", null, true);
            echo "</a></div>
                           <div class=\"dates\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Datum", array()), "d.m.Y"), "html", null, true);
            echo "</div>
                        </div> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
                <a class=\"more\" href= \"akcije\">Sve SUZI akcije...</a>
        </div>
    </div>
    <div class=\"home--part2\">
        <div class=\"home--part2--vesti\">
            <div class=\"home--part2--vesti--title titles\">SUZI Vesti</div>
            <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Vesti_suzi")));
        foreach ($context['_seq'] as $context["_key"] => $context["vesti_suzi"]) {
            // line 36
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"naslov sub_titles\"><a href=\"vest-suzi/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Naslov", array()), "html", null, true);
            echo "</a></div>
                        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Slika", array())) {
                // line 39
                echo "                        <a href=\"vest-suzi/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Slug", array()), "html", null, true);
                echo "\"><img class=\"slika\" src=\"img/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Slika", array()), "html", null, true);
                echo "\"></a>
                        ";
            }
            // line 41
            echo "                        <div class=\"dates\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_suzi"], "Datum", array()), "d.m.Y"), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vesti_suzi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
            <a class=\"more\" href= \"vesti\">Sve SUZI vesti...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">Vesti iz sveta</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Vesti_svet")));
        foreach ($context['_seq'] as $context["_key"] => $context["vesti_svet"]) {
            // line 51
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\"><a href=\"vest-svet/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Naslov", array()), "html", null, true);
            echo "</a></div>
                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Slika1", array())) {
                // line 54
                echo "                        <a href=\"vest-svet/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Slug", array()), "html", null, true);
                echo "\"><img class=\"slika\" src=\"img/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Slika1", array()), "html", null, true);
                echo "\"></a>
                        ";
            }
            // line 56
            echo "                        <div class=\"dates\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_svet"], "Datum", array()), "d.m.Y"), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vesti_svet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
                <a class=\"more\" href= \"vesti\">Sve vesti iz sveta...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">SUZI prikazi</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Prikazi")));
        foreach ($context['_seq'] as $context["_key"] => $context["vesti_prikazi"]) {
            // line 66
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\"><a href=\"suzi-prikaz/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Naslov", array()), "html", null, true);
            echo "</a></div>
                        ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Slika1", array())) {
                // line 69
                echo "                        <a href=\"suzi-prikaz/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Slug", array()), "html", null, true);
                echo "\"><img class=\"slika\" src=\"img/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Slika1", array()), "html", null, true);
                echo "\"></a>
                        ";
            }
            // line 71
            echo "                        <div class=\"dates\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vesti_prikazi"], "Datum", array()), "d.m.Y"), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vesti_prikazi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </div>
                <a class=\"more\" href= \"vesti\">Svi prikazi...</a>
        </div>
    </div>
    <div class=\"home--part2\">
        <div class=\"home--part2--vesti\">
            <div class=\"home--part2--vesti--title titles\">SUZI Obaveštenja</div>
            <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("Obavestenja")));
        foreach ($context['_seq'] as $context["_key"] => $context["suzi_obavestenja"]) {
            // line 83
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <a href=\"obavestenja/";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_obavestenja"], "Slug", array()), "html", null, true);
            echo "\"><div class=\"sub_titles\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_obavestenja"], "Naslov", array()), "html", null, true);
            echo "</div></a>
                        <div class=\"dates\">";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_obavestenja"], "Datum", array()), "d.m.Y"), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suzi_obavestenja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
            <a class=\"more\" href= \"obavestenja\">Sva SUZI obaveštenja...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">SUZI eGlasnik</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("eGlasnik")));
        foreach ($context['_seq'] as $context["_key"] => $context["suzi_eGlasnik"]) {
            // line 95
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles\"><a href=\"publikacije/Suzi-Elektronski-glasnik/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Naslov", array()), "html", null, true);
            echo "</a></div>
                        ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Slika1", array())) {
                // line 98
                echo "                        <a href=\"publikacije/Suzi-Elektronski-glasnik/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Slug", array()), "html", null, true);
                echo "\"><img class=\"slika\" src=\"img/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Slika1", array()), "html", null, true);
                echo "\"></a>
                        ";
            }
            // line 100
            echo "                        <div class=\"dates\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["suzi_eGlasnik"], "Datum", array()), "d.m.Y"), "html", null, true);
            echo "</div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suzi_eGlasnik'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </div>
                <a class=\"more\" href= \"publikacije/Suzi-Elektronski-glasnik\">Svi brojevi...</a>
        </div>
        <div class=\"home--part2--vesti\">
                <div class=\"home--part2--vesti--title titles\">Korisni linkovi</div>
                <div class=\"home--part2--vesti--naslovi\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('fetch')->getCallable(), array("KorisniLinkovi")));
        foreach ($context['_seq'] as $context["_key"] => $context["korisni_linkovi"]) {
            // line 110
            echo "                    <div class=\"home--part2--vesti--naslovi-1\">
                        <div class=\"sub_titles-link\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["korisni_linkovi"], "Naslov", array()), "html", null, true);
            echo "</div>
                        <a class=\"link\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["korisni_linkovi"], "Link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["korisni_linkovi"], "Link", array()), "html", null, true);
            echo "</a>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['korisni_linkovi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                </div>
                ";
        // line 117
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 117,  326 => 115,  315 => 112,  311 => 111,  308 => 110,  304 => 109,  296 => 103,  286 => 100,  278 => 98,  276 => 97,  270 => 96,  267 => 95,  263 => 94,  255 => 88,  246 => 85,  240 => 84,  237 => 83,  233 => 82,  223 => 74,  213 => 71,  205 => 69,  203 => 68,  197 => 67,  194 => 66,  190 => 65,  182 => 59,  172 => 56,  164 => 54,  162 => 53,  156 => 52,  153 => 51,  149 => 50,  141 => 44,  131 => 41,  123 => 39,  121 => 38,  115 => 37,  112 => 36,  108 => 35,  98 => 27,  89 => 24,  83 => 23,  80 => 22,  76 => 21,  65 => 15,  61 => 14,  56 => 13,  47 => 10,  44 => 9,  42 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "/home/suzisaee/public_html/twigtemplates/index.twig");
    }
}
