<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backoffice/package-lock.json */
class __TwigTemplate_8c42dc90073464350cadc7df4b9ed52b54ee3c71cd24623f10fba8b71c99c7ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/package-lock.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/package-lock.json"));

        // line 1
        echo "{
    \"name\": \"startbootstrap-sb-admin-2\",
    \"version\": \"4.1.3\",
    \"lockfileVersion\": 1,
    \"requires\": true,
    \"dependencies\": {
        \"@fortawesome/fontawesome-free\": {
            \"version\": \"5.15.1\",
            \"resolved\": \"https://registry.npmjs.org/@fortawesome/fontawesome-free/-/fontawesome-free-5.15.1.tgz\",
            \"integrity\": \"sha512-OEdH7SyC1suTdhBGW91/zBfR6qaIhThbcN8PUXtXilY4GYnSBbVqOntdHbC1vXwsDnX0Qix2m2+DSU1J51ybOQ==\"
        },
        \"@nodelib/fs.scandir\": {
            \"version\": \"2.1.3\",
            \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.scandir/-/fs.scandir-2.1.3.tgz\",
            \"integrity\": \"sha512-eGmwYQn3gxo4r7jdQnkrrN6bY478C3P+a/y72IJukF8LjB6ZHeB3c+Ehacj3sYeSmUXGlnA67/PmbM9CVwL7Dw==\",
            \"dev\": true,
            \"requires\": {
                \"@nodelib/fs.stat\": \"2.0.3\",
                \"run-parallel\": \"^1.1.9\"
            }
        },
        \"@nodelib/fs.stat\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.stat/-/fs.stat-2.0.3.tgz\",
            \"integrity\": \"sha512-bQBFruR2TAwoevBEd/NWMoAAtNGzTRgdrqnYCc7dhzfoNvqPzLyqlEQnzZ3kVnNrSp25iyxE00/3h2fqGAGArA==\",
            \"dev\": true
        },
        \"@nodelib/fs.walk\": {
            \"version\": \"1.2.4\",
            \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.walk/-/fs.walk-1.2.4.tgz\",
            \"integrity\": \"sha512-1V9XOY4rDW0rehzbrcqAmHnz8e7SKvX27gh8Gt2WgB0+pdzdiLV83p72kZPU+jvMbS1qU5mauP2iOvO8rhmurQ==\",
            \"dev\": true,
            \"requires\": {
                \"@nodelib/fs.scandir\": \"2.1.3\",
                \"fastq\": \"^1.6.0\"
            }
        },
        \"abbrev\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/abbrev/-/abbrev-1.1.1.tgz\",
            \"integrity\": \"sha512-nne9/IiQ/hzIhY6pdDnbBtz7DjPTKrY00P/zvPSm5pOFkl6xuGrGnXn/VtTNNfNtAfZ9/1RtehkszU9qcTii0Q==\",
            \"dev\": true
        },
        \"accepts\": {
            \"version\": \"1.3.7\",
            \"resolved\": \"https://registry.npmjs.org/accepts/-/accepts-1.3.7.tgz\",
            \"integrity\": \"sha512-Il80Qs2WjYlJIBNzNkK6KYqlVMTbZLXgHx2oT0pU/fjRHyEp+PEfEPY0R3WCwAGVOtauxh1hOxNgIf5bv7dQpA==\",
            \"dev\": true,
            \"requires\": {
                \"mime-types\": \"~2.1.24\",
                \"negotiator\": \"0.6.2\"
            }
        },
        \"after\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/after/-/after-0.8.2.tgz\",
            \"integrity\": \"sha1-/ts5T58OAqqXaOcCvaI7UF+ufh8=\",
            \"dev\": true
        },
        \"aggregate-error\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/aggregate-error/-/aggregate-error-3.1.0.tgz\",
            \"integrity\": \"sha512-4I7Td01quW/RpocfNayFdFVk1qSuoh0E7JrbRJ16nH01HhKFQ88INq9Sd+nd72zqRySlr9BmDA8xlEJ6vJMrYA==\",
            \"dev\": true,
            \"requires\": {
                \"clean-stack\": \"^2.0.0\",
                \"indent-string\": \"^4.0.0\"
            }
        },
        \"ajv\": {
            \"version\": \"6.12.6\",
            \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-6.12.6.tgz\",
            \"integrity\": \"sha512-j3fVLgvTo527anyYyJOGTYJbG+vnnQYvE0m5mmkc1TK+nxAppkCLMIL0aZ4dblVCNoGShhm+kzE4ZUykBoMg4g==\",
            \"dev\": true,
            \"requires\": {
                \"fast-deep-equal\": \"^3.1.1\",
                \"fast-json-stable-stringify\": \"^2.0.0\",
                \"json-schema-traverse\": \"^0.4.1\",
                \"uri-js\": \"^4.2.2\"
            }
        },
        \"amdefine\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/amdefine/-/amdefine-1.0.1.tgz\",
            \"integrity\": \"sha1-SlKCrBZHKek2Gbz9OtFR+BfOkfU=\",
            \"dev\": true
        },
        \"ansi-colors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-1.1.0.tgz\",
            \"integrity\": \"sha512-SFKX67auSNoVR38N3L+nvsPjOE0bybKTYbkf5tRvushrAPQ9V75huw0ZxBkKVeRU9kqH3d6HA4xTckbwZ4ixmA==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"^0.1.0\"
            }
        },
        \"ansi-cyan\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-cyan/-/ansi-cyan-0.1.1.tgz\",
            \"integrity\": \"sha1-U4rlKK+JgvKK4w2G8vF0VtJgmHM=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-gray\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-gray/-/ansi-gray-0.1.1.tgz\",
            \"integrity\": \"sha1-KWLPVOyXksSFEKPetSRDaGHvclE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-red\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-red/-/ansi-red-0.1.1.tgz\",
            \"integrity\": \"sha1-jGOPnRCAgAo1PJwoyKgcpHBdlGw=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-regex\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-2.1.1.tgz\",
            \"integrity\": \"sha1-w7M6te42DYbg5ijwRorn7yfWVN8=\",
            \"dev\": true
        },
        \"ansi-styles\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
            \"integrity\": \"sha1-tDLdM1i2NM914eRmQ2gkBTPB3b4=\",
            \"dev\": true
        },
        \"ansi-wrap\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-wrap/-/ansi-wrap-0.1.0.tgz\",
            \"integrity\": \"sha1-qCJQ3bABXponyoLoLqYDu/pF768=\",
            \"dev\": true
        },
        \"anymatch\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-2.0.0.tgz\",
            \"integrity\": \"sha512-5teOsQWABXHHBFP9y3skS5P3d/WfWXpv3FUpy+LorMrNYaT9pI4oLMQX7jzQ2KklNpGpWHzdCXTDT2Y3XGlZBw==\",
            \"dev\": true,
            \"requires\": {
                \"micromatch\": \"^3.1.4\",
                \"normalize-path\": \"^2.1.1\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"append-buffer\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/append-buffer/-/append-buffer-1.0.2.tgz\",
            \"integrity\": \"sha1-2CIM9GYIFSXv6lBhTz3mUU36WPE=\",
            \"dev\": true,
            \"requires\": {
                \"buffer-equal\": \"^1.0.0\"
            }
        },
        \"aproba\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/aproba/-/aproba-1.2.0.tgz\",
            \"integrity\": \"sha512-Y9J6ZjXtoYh8RnXVCMOU/ttDmk1aBjunq9vO0ta5x85WDQiQfUF9sIPBITdbiiIVcBo03Hi3jMxigBtsddlXRw==\",
            \"dev\": true
        },
        \"archy\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/archy/-/archy-1.0.0.tgz\",
            \"integrity\": \"sha1-+cjBN1fMHde8N5rHeyxipcKGjEA=\",
            \"dev\": true
        },
        \"are-we-there-yet\": {
            \"version\": \"1.1.5\",
            \"resolved\": \"https://registry.npmjs.org/are-we-there-yet/-/are-we-there-yet-1.1.5.tgz\",
            \"integrity\": \"sha512-5hYdAkZlcG8tOLujVDTgCT+uPX0VnpAH28gWsLfzpXYm7wP6mp5Q/gYyR7YQ0cKVJcXJnl3j2kpBan13PtQf6w==\",
            \"dev\": true,
            \"requires\": {
                \"delegates\": \"^1.0.0\",
                \"readable-stream\": \"^2.0.6\"
            }
        },
        \"arr-diff\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-4.0.0.tgz\",
            \"integrity\": \"sha1-1kYQdP6/7HHn4VI1dhoyml3HxSA=\",
            \"dev\": true
        },
        \"arr-filter\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-filter/-/arr-filter-1.1.2.tgz\",
            \"integrity\": \"sha1-Q/3d0JHo7xGqTEXZzcGOLf8XEe4=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-flatten\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-flatten/-/arr-flatten-1.1.0.tgz\",
            \"integrity\": \"sha512-L3hKV5R/p5o81R7O02IGnwpDmkp6E982XhtbuwSe3O4qOtMMMtodicASA1Cny2U+aCXcNpml+m4dPsvsJ3jatg==\",
            \"dev\": true
        },
        \"arr-map\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-map/-/arr-map-2.0.2.tgz\",
            \"integrity\": \"sha1-Onc0X/wc814qkYJWAfnljy4kysQ=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-union\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-3.1.0.tgz\",
            \"integrity\": \"sha1-45sJrqne+Gao8gbiiK9jkZuuOcQ=\",
            \"dev\": true
        },
        \"array-each\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/array-each/-/array-each-1.0.1.tgz\",
            \"integrity\": \"sha1-p5SvDAWrF1KEbudTofIRoFugxE8=\",
            \"dev\": true
        },
        \"array-find-index\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/array-find-index/-/array-find-index-1.0.2.tgz\",
            \"integrity\": \"sha1-3wEKoSh+Fku9pvlyOwqWoexBh6E=\",
            \"dev\": true
        },
        \"array-initial\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-initial/-/array-initial-1.1.0.tgz\",
            \"integrity\": \"sha1-L6dLJnOTccOUe9enrcc74zSz15U=\",
            \"dev\": true,
            \"requires\": {
                \"array-slice\": \"^1.0.0\",
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-last\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/array-last/-/array-last-1.3.0.tgz\",
            \"integrity\": \"sha512-eOCut5rXlI6aCOS7Z7kCplKRKyiFQ6dHFBem4PwlwKeNFk2/XxTrhRh5T9PyaEWGy/NHTZWbY+nsZlNFJu9rYg==\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-slice\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-slice/-/array-slice-1.1.0.tgz\",
            \"integrity\": \"sha512-B1qMD3RBP7O8o0H2KbrXDyB0IccejMF15+87Lvlor12ONPRHP6gTjXMNkt/d3ZuOGbAe66hFmaCfECI24Ufp6w==\",
            \"dev\": true
        },
        \"array-sort\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/array-sort/-/array-sort-1.0.0.tgz\",
            \"integrity\": \"sha512-ihLeJkonmdiAsD7vpgN3CRcx2J2S0TiYW+IS/5zHBI7mKUq3ySvBdzzBfD236ubDBQFiiyG3SWCPc+msQ9KoYg==\",
            \"dev\": true,
            \"requires\": {
                \"default-compare\": \"^1.0.0\",
                \"get-value\": \"^2.0.6\",
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"array-union\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-2.1.0.tgz\",
            \"integrity\": \"sha512-HGyxoOTYUyCM6stUe6EJgnd4EoewAI7zMdfqO+kGjnlZmBDz/cR5pf8r/cR4Wq60sL/p0IkcjUEEPwS3GFrIyw==\",
            \"dev\": true
        },
        \"array-unique\": {
            \"version\": \"0.3.2\",
            \"resolved\": \"https://registry.npmjs.org/array-unique/-/array-unique-0.3.2.tgz\",
            \"integrity\": \"sha1-qJS3XUvE9s1nnvMkSp/Y9Gri1Cg=\",
            \"dev\": true
        },
        \"arraybuffer.slice\": {
            \"version\": \"0.0.7\",
            \"resolved\": \"https://registry.npmjs.org/arraybuffer.slice/-/arraybuffer.slice-0.0.7.tgz\",
            \"integrity\": \"sha512-wGUIVQXuehL5TCqQun8OW81jGzAWycqzFF8lFp+GOM5BXLYj3bKNsYC4daB7n6XjCqxQA/qgTJ+8ANR3acjrog==\",
            \"dev\": true
        },
        \"asn1\": {
            \"version\": \"0.2.4\",
            \"resolved\": \"https://registry.npmjs.org/asn1/-/asn1-0.2.4.tgz\",
            \"integrity\": \"sha512-jxwzQpLQjSmWXgwaCZE9Nz+glAG01yF1QnWgbhGwHI5A6FRIEY6IVqtHhIepHqI7/kyEyQEagBC5mBEFlIYvdg==\",
            \"dev\": true,
            \"requires\": {
                \"safer-buffer\": \"~2.1.0\"
            }
        },
        \"assert-plus\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/assert-plus/-/assert-plus-1.0.0.tgz\",
            \"integrity\": \"sha1-8S4PPF13sLHN2RRpQuTpbB5N1SU=\",
            \"dev\": true
        },
        \"assign-symbols\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/assign-symbols/-/assign-symbols-1.0.0.tgz\",
            \"integrity\": \"sha1-WWZ/QfrdTyDMvCu5a41Pf3jsA2c=\",
            \"dev\": true
        },
        \"async\": {
            \"version\": \"1.5.2\",
            \"resolved\": \"https://registry.npmjs.org/async/-/async-1.5.2.tgz\",
            \"integrity\": \"sha1-7GphrlZIDAw8skHJVhjiCJL5Zyo=\",
            \"dev\": true
        },
        \"async-done\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/async-done/-/async-done-1.3.2.tgz\",
            \"integrity\": \"sha512-uYkTP8dw2og1tu1nmza1n1CMW0qb8gWWlwqMmLb7MhBVs4BXrFziT6HXUd+/RlRA/i4H9AkofYloUbs1fwMqlw==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.2\",
                \"process-nextick-args\": \"^2.0.0\",
                \"stream-exhaust\": \"^1.0.1\"
            }
        },
        \"async-each\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/async-each/-/async-each-1.0.3.tgz\",
            \"integrity\": \"sha512-z/WhQ5FPySLdvREByI2vZiTWwCnF0moMJ1hK9YQwDTHKh6I7/uSckMetoRGb5UBZPC1z0jlw+n/XCgjeH7y1AQ==\",
            \"dev\": true
        },
        \"async-each-series\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/async-each-series/-/async-each-series-0.1.1.tgz\",
            \"integrity\": \"sha1-dhfBkXQB/Yykooqtzj266Yr+tDI=\",
            \"dev\": true
        },
        \"async-foreach\": {
            \"version\": \"0.1.3\",
            \"resolved\": \"https://registry.npmjs.org/async-foreach/-/async-foreach-0.1.3.tgz\",
            \"integrity\": \"sha1-NhIfhFwFeBct5Bmpfb6x0W7DRUI=\",
            \"dev\": true
        },
        \"async-limiter\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/async-limiter/-/async-limiter-1.0.1.tgz\",
            \"integrity\": \"sha512-csOlWGAcRFJaI6m+F2WKdnMKr4HhdhFVBk0H/QbJFMCr+uO2kwohwXQPxw/9OCxp05r5ghVBFSyioixx3gfkNQ==\",
            \"dev\": true
        },
        \"async-settle\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/async-settle/-/async-settle-1.0.0.tgz\",
            \"integrity\": \"sha1-HQqRS7Aldb7IqPOnTlCA9yssDGs=\",
            \"dev\": true,
            \"requires\": {
                \"async-done\": \"^1.2.2\"
            }
        },
        \"asynckit\": {
            \"version\": \"0.4.0\",
            \"resolved\": \"https://registry.npmjs.org/asynckit/-/asynckit-0.4.0.tgz\",
            \"integrity\": \"sha1-x57Zf380y48robyXkLzDZkdLS3k=\",
            \"dev\": true
        },
        \"atob\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/atob/-/atob-2.1.2.tgz\",
            \"integrity\": \"sha512-Wm6ukoaOGJi/73p/cl2GvLjTI5JM1k/O14isD73YML8StrH/7/lRFgmg8nICZgD3bZZvjwCGxtMOD3wWNAu8cg==\",
            \"dev\": true
        },
        \"autoprefixer\": {
            \"version\": \"9.7.4\",
            \"resolved\": \"https://registry.npmjs.org/autoprefixer/-/autoprefixer-9.7.4.tgz\",
            \"integrity\": \"sha512-g0Ya30YrMBAEZk60lp+qfX5YQllG+S5W3GYCFvyHTvhOki0AEQJLPEcIuGRsqVwLi8FvXPVtwTGhfr38hVpm0g==\",
            \"dev\": true,
            \"requires\": {
                \"browserslist\": \"^4.8.3\",
                \"caniuse-lite\": \"^1.0.30001020\",
                \"chalk\": \"^2.4.2\",
                \"normalize-range\": \"^0.1.2\",
                \"num2fraction\": \"^1.2.2\",
                \"postcss\": \"^7.0.26\",
                \"postcss-value-parser\": \"^4.0.2\"
            },
            \"dependencies\": {
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"chalk\": {
                    \"version\": \"2.4.2\",
                    \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
                    \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.1\",
                        \"escape-string-regexp\": \"^1.0.5\",
                        \"supports-color\": \"^5.3.0\"
                    }
                },
                \"supports-color\": {
                    \"version\": \"5.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
                    \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
                    \"dev\": true,
                    \"requires\": {
                        \"has-flag\": \"^3.0.0\"
                    }
                }
            }
        },
        \"aws-sign2\": {
            \"version\": \"0.7.0\",
            \"resolved\": \"https://registry.npmjs.org/aws-sign2/-/aws-sign2-0.7.0.tgz\",
            \"integrity\": \"sha1-tG6JCTSpWR8tL2+G1+ap8bP+dqg=\",
            \"dev\": true
        },
        \"aws4\": {
            \"version\": \"1.11.0\",
            \"resolved\": \"https://registry.npmjs.org/aws4/-/aws4-1.11.0.tgz\",
            \"integrity\": \"sha512-xh1Rl34h6Fi1DC2WWKfxUTVqRsNnr6LsKz2+hfwDxQJWmrx8+c7ylaqBMcHfl1U1r2dsifOvKX3LQuLNZ+XSvA==\",
            \"dev\": true
        },
        \"axios\": {
            \"version\": \"0.19.0\",
            \"resolved\": \"https://registry.npmjs.org/axios/-/axios-0.19.0.tgz\",
            \"integrity\": \"sha512-1uvKqKQta3KBxIz14F2v06AEHZ/dIoeKfbTRkK1E5oqjDnuEerLmYTgJB5AiQZHJcljpg1TuRzdjDR06qNk0DQ==\",
            \"dev\": true,
            \"requires\": {
                \"follow-redirects\": \"1.5.10\",
                \"is-buffer\": \"^2.0.2\"
            },
            \"dependencies\": {
                \"follow-redirects\": {
                    \"version\": \"1.5.10\",
                    \"resolved\": \"https://registry.npmjs.org/follow-redirects/-/follow-redirects-1.5.10.tgz\",
                    \"integrity\": \"sha512-0V5l4Cizzvqt5D44aTXbFZz+FtyXV1vrDN6qrelxtfYQKW0KO0W2T/hkE8xvGa/540LkZlkaUjO4ailYTFtHVQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"debug\": \"=3.1.0\"
                    }
                },
                \"is-buffer\": {
                    \"version\": \"2.0.4\",
                    \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-2.0.4.tgz\",
                    \"integrity\": \"sha512-Kq1rokWXOPXWuaMAqZiJW4XxsmD9zGx9q4aePabbn3qCRGedtH7Cm+zV8WETitMfu1wdh+Rvd6w5egwSngUX2A==\",
                    \"dev\": true
                }
            }
        },
        \"bach\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/bach/-/bach-1.2.0.tgz\",
            \"integrity\": \"sha1-Szzpa/JxNPeaG0FKUcFONMO9mIA=\",
            \"dev\": true,
            \"requires\": {
                \"arr-filter\": \"^1.1.1\",
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"array-each\": \"^1.0.0\",
                \"array-initial\": \"^1.0.0\",
                \"array-last\": \"^1.1.1\",
                \"async-done\": \"^1.2.2\",
                \"async-settle\": \"^1.0.0\",
                \"now-and-later\": \"^2.0.0\"
            }
        },
        \"backo2\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/backo2/-/backo2-1.0.2.tgz\",
            \"integrity\": \"sha1-MasayLEpNjRj41s+u2n038+6eUc=\",
            \"dev\": true
        },
        \"balanced-match\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
            \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
            \"dev\": true
        },
        \"base\": {
            \"version\": \"0.11.2\",
            \"resolved\": \"https://registry.npmjs.org/base/-/base-0.11.2.tgz\",
            \"integrity\": \"sha512-5T6P4xPgpp0YDFvSWwEZ4NoE3aM4QBQXDzmVbraCkFj8zHM+mba8SyqB5DbZWyR7mYHo6Y7BdQo3MoA4m0TeQg==\",
            \"dev\": true,
            \"requires\": {
                \"cache-base\": \"^1.0.1\",
                \"class-utils\": \"^0.3.5\",
                \"component-emitter\": \"^1.2.1\",
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"mixin-deep\": \"^1.2.0\",
                \"pascalcase\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"base64-arraybuffer\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.4.tgz\",
            \"integrity\": \"sha1-mBjHngWbE1X5fgQooBfIOOkLqBI=\",
            \"dev\": true
        },
        \"base64id\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/base64id/-/base64id-1.0.0.tgz\",
            \"integrity\": \"sha1-R2iMuZu2gE8OBtPnY7HDLlfY5rY=\",
            \"dev\": true
        },
        \"batch\": {
            \"version\": \"0.6.1\",
            \"resolved\": \"https://registry.npmjs.org/batch/-/batch-0.6.1.tgz\",
            \"integrity\": \"sha1-3DQxT05nkxgJP8dgJyUl+UvyXBY=\",
            \"dev\": true
        },
        \"bcrypt-pbkdf\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/bcrypt-pbkdf/-/bcrypt-pbkdf-1.0.2.tgz\",
            \"integrity\": \"sha1-pDAdOJtqQ/m2f/PKEaP2Y342Dp4=\",
            \"dev\": true,
            \"requires\": {
                \"tweetnacl\": \"^0.14.3\"
            }
        },
        \"better-assert\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/better-assert/-/better-assert-1.0.2.tgz\",
            \"integrity\": \"sha1-QIZrnhueC1W0gYlDEeaPr/rrxSI=\",
            \"dev\": true,
            \"requires\": {
                \"callsite\": \"1.0.0\"
            }
        },
        \"binary-extensions\": {
            \"version\": \"1.13.1\",
            \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-1.13.1.tgz\",
            \"integrity\": \"sha512-Un7MIEDdUC5gNpcGDV97op1Ywk748MpHcFTHoYs6qnj1Z3j7I53VG3nwZhKzoBZmbdRNnb6WRdFlwl7tSDuZGw==\",
            \"dev\": true
        },
        \"bindings\": {
            \"version\": \"1.5.0\",
            \"resolved\": \"https://registry.npmjs.org/bindings/-/bindings-1.5.0.tgz\",
            \"integrity\": \"sha512-p2q/t/mhvuOj/UeLlV6566GD/guowlr0hHxClI0W9m7MWYkL1F0hLo+0Aexs9HSPCtR1SXQ0TD3MMKrXZajbiQ==\",
            \"dev\": true,
            \"optional\": true,
            \"requires\": {
                \"file-uri-to-path\": \"1.0.0\"
            }
        },
        \"blob\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/blob/-/blob-0.0.5.tgz\",
            \"integrity\": \"sha512-gaqbzQPqOoamawKg0LGVd7SzLgXS+JH61oWprSLH+P+abTczqJbhTR8CmJ2u9/bUYNmHTGJx/UEmn6doAvvuig==\",
            \"dev\": true
        },
        \"block-stream\": {
            \"version\": \"0.0.9\",
            \"resolved\": \"https://registry.npmjs.org/block-stream/-/block-stream-0.0.9.tgz\",
            \"integrity\": \"sha1-E+v+d4oDIFz+A3UUgeu0szAMEmo=\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"~2.0.0\"
            }
        },
        \"bootstrap\": {
            \"version\": \"4.5.3\",
            \"resolved\": \"https://registry.npmjs.org/bootstrap/-/bootstrap-4.5.3.tgz\",
            \"integrity\": \"sha512-o9ppKQioXGqhw8Z7mah6KdTYpNQY//tipnkxppWhPbiSWdD+1raYsnhwEZjkTHYbGee4cVQ0Rx65EhOY/HNLcQ==\"
        },
        \"brace-expansion\": {
            \"version\": \"1.1.11\",
            \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-1.1.11.tgz\",
            \"integrity\": \"sha512-iCuPHDFgrHX7H2vEI/5xpz07zSHB00TpugqhmYtVmMO6518mCuRMoOYFldEBl0g187ufozdaHgWKcYFb61qGiA==\",
            \"dev\": true,
            \"requires\": {
                \"balanced-match\": \"^1.0.0\",
                \"concat-map\": \"0.0.1\"
            }
        },
        \"braces\": {
            \"version\": \"2.3.2\",
            \"resolved\": \"https://registry.npmjs.org/braces/-/braces-2.3.2.tgz\",
            \"integrity\": \"sha512-aNdbnj9P8PjdXU4ybaWLK2IF3jc/EoDYbC7AazW6to3TRsfXxscC9UXOB5iDiEQrkyIbWp2SLQda4+QAa7nc3w==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.1.0\",
                \"array-unique\": \"^0.3.2\",
                \"extend-shallow\": \"^2.0.1\",
                \"fill-range\": \"^4.0.0\",
                \"isobject\": \"^3.0.1\",
                \"repeat-element\": \"^1.1.2\",
                \"snapdragon\": \"^0.8.1\",
                \"snapdragon-node\": \"^2.0.1\",
                \"split-string\": \"^3.0.2\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"browser-sync\": {
            \"version\": \"2.26.13\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync/-/browser-sync-2.26.13.tgz\",
            \"integrity\": \"sha512-JPYLTngIzI+Dzx+StSSlMtF+Q9yjdh58HW6bMFqkFXuzQkJL8FCvp4lozlS6BbECZcsM2Gmlgp0uhEjvl18X4w==\",
            \"dev\": true,
            \"requires\": {
                \"browser-sync-client\": \"^2.26.13\",
                \"browser-sync-ui\": \"^2.26.13\",
                \"bs-recipes\": \"1.3.4\",
                \"bs-snippet-injector\": \"^2.0.1\",
                \"chokidar\": \"^3.4.1\",
                \"connect\": \"3.6.6\",
                \"connect-history-api-fallback\": \"^1\",
                \"dev-ip\": \"^1.0.1\",
                \"easy-extender\": \"^2.3.4\",
                \"eazy-logger\": \"3.1.0\",
                \"etag\": \"^1.8.1\",
                \"fresh\": \"^0.5.2\",
                \"fs-extra\": \"3.0.1\",
                \"http-proxy\": \"^1.18.1\",
                \"immutable\": \"^3\",
                \"localtunnel\": \"^2.0.0\",
                \"micromatch\": \"^4.0.2\",
                \"opn\": \"5.3.0\",
                \"portscanner\": \"2.1.1\",
                \"qs\": \"6.2.3\",
                \"raw-body\": \"^2.3.2\",
                \"resp-modifier\": \"6.0.2\",
                \"rx\": \"4.1.0\",
                \"send\": \"0.16.2\",
                \"serve-index\": \"1.9.1\",
                \"serve-static\": \"1.13.2\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io\": \"2.1.1\",
                \"ua-parser-js\": \"^0.7.18\",
                \"yargs\": \"^15.4.1\"
            },
            \"dependencies\": {
                \"anymatch\": {
                    \"version\": \"3.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-3.1.1.tgz\",
                    \"integrity\": \"sha512-mM8522psRCqzV+6LhomX5wgp25YVibjh8Wj23I5RPkPppSVSjyKD2A2mBJmWGa+KN7f2D6LNh9jkBCeyLktzjg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"normalize-path\": \"^3.0.0\",
                        \"picomatch\": \"^2.0.4\"
                    }
                },
                \"binary-extensions\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-2.1.0.tgz\",
                    \"integrity\": \"sha512-1Yj8h9Q+QDF5FzhMs/c9+6UntbD5MkRfRwac8DoEm9ZfUBZ7tZ55YcGVAzEe4bXsdQHEk+s9S5wsOKVdZrw0tQ==\",
                    \"dev\": true
                },
                \"braces\": {
                    \"version\": \"3.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
                    \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
                    \"dev\": true,
                    \"requires\": {
                        \"fill-range\": \"^7.0.1\"
                    }
                },
                \"chokidar\": {
                    \"version\": \"3.4.3\",
                    \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-3.4.3.tgz\",
                    \"integrity\": \"sha512-DtM3g7juCXQxFVSNPNByEC2+NImtBuxQQvWlHunpJIS5Ocr0lG306cC7FCi7cEA0fzmybPUIl4txBIobk1gGOQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"anymatch\": \"~3.1.1\",
                        \"braces\": \"~3.0.2\",
                        \"fsevents\": \"~2.1.2\",
                        \"glob-parent\": \"~5.1.0\",
                        \"is-binary-path\": \"~2.1.0\",
                        \"is-glob\": \"~4.0.1\",
                        \"normalize-path\": \"~3.0.0\",
                        \"readdirp\": \"~3.5.0\"
                    }
                },
                \"fill-range\": {
                    \"version\": \"7.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-7.0.1.tgz\",
                    \"integrity\": \"sha512-qOo9F+dMUmC2Lcb4BbVvnKJxTPjCm+RRpe4gDuGrzkL7mEVl/djYSu2OdQ2Pa302N4oqkSg9ir6jaLWJ2USVpQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"to-regex-range\": \"^5.0.1\"
                    }
                },
                \"glob-parent\": {
                    \"version\": \"5.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-5.1.1.tgz\",
                    \"integrity\": \"sha512-FnI+VGOpnlGHWZxthPGR+QhR78fuiK0sNLkHQv+bL9fQi57lNNdquIbna/WrfROrolq8GK5Ek6BiMwqL/voRYQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-glob\": \"^4.0.1\"
                    }
                },
                \"is-binary-path\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-2.1.0.tgz\",
                    \"integrity\": \"sha512-ZMERYes6pDydyuGidse7OsHxtbI7WVeUEozgR/g7rd0xUimYNlvZRE/K2MgZTjWy725IfelLeVcEM97mmtRGXw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"binary-extensions\": \"^2.0.0\"
                    }
                },
                \"is-number\": {
                    \"version\": \"7.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
                    \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
                    \"dev\": true
                },
                \"micromatch\": {
                    \"version\": \"4.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.2.tgz\",
                    \"integrity\": \"sha512-y7FpHSbMUMoyPbYUSzO6PaZ6FyRnQOpHuKwbo1G+Knck95XVU4QAiKdGEnj5wwoS7PlOgthX/09u5iFJ+aYf5Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"braces\": \"^3.0.1\",
                        \"picomatch\": \"^2.0.5\"
                    }
                },
                \"readdirp\": {
                    \"version\": \"3.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-3.5.0.tgz\",
                    \"integrity\": \"sha512-cMhu7c/8rdhkHXWsY+osBhfSy0JikwpHK/5+imo+LpeasTF8ouErHrlYkwT0++njiyuDvc7OFY5T3ukvZ8qmFQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"picomatch\": \"^2.2.1\"
                    }
                },
                \"to-regex-range\": {
                    \"version\": \"5.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
                    \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-number\": \"^7.0.0\"
                    }
                }
            }
        },
        \"browser-sync-client\": {
            \"version\": \"2.26.13\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-client/-/browser-sync-client-2.26.13.tgz\",
            \"integrity\": \"sha512-p2VbZoYrpuDhkreq+/Sv1MkToHklh7T1OaIntDwpG6Iy2q/XkBcgwPcWjX+WwRNiZjN8MEehxIjEUh12LweLmQ==\",
            \"dev\": true,
            \"requires\": {
                \"etag\": \"1.8.1\",
                \"fresh\": \"0.5.2\",
                \"mitt\": \"^1.1.3\",
                \"rxjs\": \"^5.5.6\"
            }
        },
        \"browser-sync-ui\": {
            \"version\": \"2.26.13\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-ui/-/browser-sync-ui-2.26.13.tgz\",
            \"integrity\": \"sha512-6NJ/pCnhCnBMzaty1opWo7ipDmFAIk8U71JMQGKJxblCUaGfdsbF2shf6XNZSkXYia1yS0vwKu9LIOzpXqQZCA==\",
            \"dev\": true,
            \"requires\": {
                \"async-each-series\": \"0.1.1\",
                \"connect-history-api-fallback\": \"^1\",
                \"immutable\": \"^3\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io-client\": \"^2.0.4\",
                \"stream-throttle\": \"^0.1.3\"
            }
        },
        \"browserslist\": {
            \"version\": \"4.8.3\",
            \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.8.3.tgz\",
            \"integrity\": \"sha512-iU43cMMknxG1ClEZ2MDKeonKE1CCrFVkQK2AqO2YWFmvIrx4JWrvQ4w4hQez6EpVI8rHTtqh/ruHHDHSOKxvUg==\",
            \"dev\": true,
            \"requires\": {
                \"caniuse-lite\": \"^1.0.30001017\",
                \"electron-to-chromium\": \"^1.3.322\",
                \"node-releases\": \"^1.1.44\"
            }
        },
        \"bs-recipes\": {
            \"version\": \"1.3.4\",
            \"resolved\": \"https://registry.npmjs.org/bs-recipes/-/bs-recipes-1.3.4.tgz\",
            \"integrity\": \"sha1-DS1NSKcYyMBEdp/cT4lZLci2lYU=\",
            \"dev\": true
        },
        \"bs-snippet-injector\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/bs-snippet-injector/-/bs-snippet-injector-2.0.1.tgz\",
            \"integrity\": \"sha1-YbU5PxH1JVntEgaTEANDtu2wTdU=\",
            \"dev\": true
        },
        \"buffer-equal\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/buffer-equal/-/buffer-equal-1.0.0.tgz\",
            \"integrity\": \"sha1-WWFrSYME1Var1GaWayLu2j7KX74=\",
            \"dev\": true
        },
        \"buffer-from\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.1.tgz\",
            \"integrity\": \"sha512-MQcXEUbCKtEo7bhqEs6560Hyd4XaovZlO/k9V3hjVUF/zwW7KBVdSK4gIt/bzwS9MbR5qob+F5jusZsb0YQK2A==\",
            \"dev\": true
        },
        \"bytes\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/bytes/-/bytes-3.1.0.tgz\",
            \"integrity\": \"sha512-zauLjrfCG+xvoyaqLoV8bLVXXNGC4JqlxFCutSDWA6fJrTo2ZuvLYTqZ7aHBLZSMOopbzwv8f+wZcVzfVTI2Dg==\",
            \"dev\": true
        },
        \"cache-base\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/cache-base/-/cache-base-1.0.1.tgz\",
            \"integrity\": \"sha512-AKcdTnFSWATd5/GCPRxr2ChwIJ85CeyrEyjRHlKxQ56d4XJMGym0uAiKn0xbLOGOl3+yRpOTi484dVCEc5AUzQ==\",
            \"dev\": true,
            \"requires\": {
                \"collection-visit\": \"^1.0.0\",
                \"component-emitter\": \"^1.2.1\",
                \"get-value\": \"^2.0.6\",
                \"has-value\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"set-value\": \"^2.0.0\",
                \"to-object-path\": \"^0.3.0\",
                \"union-value\": \"^1.0.0\",
                \"unset-value\": \"^1.0.0\"
            }
        },
        \"callsite\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/callsite/-/callsite-1.0.0.tgz\",
            \"integrity\": \"sha1-KAOY5dZkvXQDi28JBRU+borxvCA=\",
            \"dev\": true
        },
        \"camelcase\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-3.0.0.tgz\",
            \"integrity\": \"sha1-MvxLn82vhF/N9+c7uXysImHwqwo=\",
            \"dev\": true
        },
        \"camelcase-keys\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/camelcase-keys/-/camelcase-keys-2.1.0.tgz\",
            \"integrity\": \"sha1-MIvur/3ygRkFHvodkyITyRuPkuc=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^2.0.0\",
                \"map-obj\": \"^1.0.0\"
            },
            \"dependencies\": {
                \"camelcase\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-2.1.1.tgz\",
                    \"integrity\": \"sha1-fB0W1nmhu+WcoCys7PsBHiAfWh8=\",
                    \"dev\": true
                }
            }
        },
        \"caniuse-lite\": {
            \"version\": \"1.0.30001020\",
            \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001020.tgz\",
            \"integrity\": \"sha512-yWIvwA68wRHKanAVS1GjN8vajAv7MBFshullKCeq/eKpK7pJBVDgFFEqvgWTkcP2+wIDeQGYFRXECjKZnLkUjA==\",
            \"dev\": true
        },
        \"caseless\": {
            \"version\": \"0.12.0\",
            \"resolved\": \"https://registry.npmjs.org/caseless/-/caseless-0.12.0.tgz\",
            \"integrity\": \"sha1-G2gcIf+EAzyCZUMJBolCDRhxUdw=\",
            \"dev\": true
        },
        \"chalk\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-1.1.3.tgz\",
            \"integrity\": \"sha1-qBFcVeSnAv5NFQq9OHKCKn4J/Jg=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-styles\": \"^2.2.1\",
                \"escape-string-regexp\": \"^1.0.2\",
                \"has-ansi\": \"^2.0.0\",
                \"strip-ansi\": \"^3.0.0\",
                \"supports-color\": \"^2.0.0\"
            }
        },
        \"chart.js\": {
            \"version\": \"2.9.4\",
            \"resolved\": \"https://registry.npmjs.org/chart.js/-/chart.js-2.9.4.tgz\",
            \"integrity\": \"sha512-B07aAzxcrikjAPyV+01j7BmOpxtQETxTSlQ26BEYJ+3iUkbNKaOJ/nDbT6JjyqYxseM0ON12COHYdU2cTIjC7A==\",
            \"requires\": {
                \"chartjs-color\": \"^2.1.0\",
                \"moment\": \"^2.10.2\"
            }
        },
        \"chartjs-color\": {
            \"version\": \"2.4.1\",
            \"resolved\": \"https://registry.npmjs.org/chartjs-color/-/chartjs-color-2.4.1.tgz\",
            \"integrity\": \"sha512-haqOg1+Yebys/Ts/9bLo/BqUcONQOdr/hoEr2LLTRl6C5LXctUdHxsCYfvQVg5JIxITrfCNUDr4ntqmQk9+/0w==\",
            \"requires\": {
                \"chartjs-color-string\": \"^0.6.0\",
                \"color-convert\": \"^1.9.3\"
            }
        },
        \"chartjs-color-string\": {
            \"version\": \"0.6.0\",
            \"resolved\": \"https://registry.npmjs.org/chartjs-color-string/-/chartjs-color-string-0.6.0.tgz\",
            \"integrity\": \"sha512-TIB5OKn1hPJvO7JcteW4WY/63v6KwEdt6udfnDE9iCAZgy+V4SrbSxoIbTw/xkUIapjEI4ExGtD0+6D3KyFd7A==\",
            \"requires\": {
                \"color-name\": \"^1.0.0\"
            }
        },
        \"chokidar\": {
            \"version\": \"2.1.8\",
            \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-2.1.8.tgz\",
            \"integrity\": \"sha512-ZmZUazfOzf0Nve7duiCKD23PFSCs4JPoYyccjUFF3aQkQadqBhfzhjkwBH2mNOG9cTBwhamM37EIsIkZw3nRgg==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-each\": \"^1.0.1\",
                \"braces\": \"^2.3.2\",
                \"fsevents\": \"^1.2.7\",
                \"glob-parent\": \"^3.1.0\",
                \"inherits\": \"^2.0.3\",
                \"is-binary-path\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"normalize-path\": \"^3.0.0\",
                \"path-is-absolute\": \"^1.0.0\",
                \"readdirp\": \"^2.2.1\",
                \"upath\": \"^1.1.1\"
            },
            \"dependencies\": {
                \"fsevents\": {
                    \"version\": \"1.2.13\",
                    \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-1.2.13.tgz\",
                    \"integrity\": \"sha512-oWb1Z6mkHIskLzEJ/XWX0srkpkTQ7vaopMQkyaEIoq0fmtFVxOthb8cCxeT+p3ynTdkk/RZwbgG4brR5BeWECw==\",
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"bindings\": \"^1.5.0\",
                        \"nan\": \"^2.12.1\"
                    }
                }
            }
        },
        \"class-utils\": {
            \"version\": \"0.3.6\",
            \"resolved\": \"https://registry.npmjs.org/class-utils/-/class-utils-0.3.6.tgz\",
            \"integrity\": \"sha512-qOhPa/Fj7s6TY8H8esGu5QNpMMQxz79h+urzrNYN6mn+9BnxlDGf5QZ+XeCDsxSjPqsSR56XOZOJmpeurnLMeg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"define-property\": \"^0.2.5\",
                \"isobject\": \"^3.0.0\",
                \"static-extend\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"clean-css\": {
            \"version\": \"4.2.3\",
            \"resolved\": \"https://registry.npmjs.org/clean-css/-/clean-css-4.2.3.tgz\",
            \"integrity\": \"sha512-VcMWDN54ZN/DS+g58HYL5/n4Zrqe8vHJpGA8KdgUXFU4fuP/aHNw8eld9SyEIyabIMJX/0RaY/fplOo5hYLSFA==\",
            \"dev\": true,
            \"requires\": {
                \"source-map\": \"~0.6.0\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                }
            }
        },
        \"clean-stack\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/clean-stack/-/clean-stack-2.2.0.tgz\",
            \"integrity\": \"sha512-4diC9HaTE+KRAMWhDhrGOECgWZxoevMc5TlkObMqNSsVU62PYzXZ/SMTjzyGAFF1YusgxGcSWTEXBhp0CPwQ1A==\",
            \"dev\": true
        },
        \"cliui\": {
            \"version\": \"3.2.0\",
            \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-3.2.0.tgz\",
            \"integrity\": \"sha1-EgYBU3qRbSmUD5NNo7SNWFo5IT0=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\",
                \"wrap-ansi\": \"^2.0.0\"
            }
        },
        \"clone\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/clone/-/clone-2.1.2.tgz\",
            \"integrity\": \"sha1-G39Ln1kfHo+DZwQBYANFoCiHQ18=\",
            \"dev\": true
        },
        \"clone-buffer\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-buffer/-/clone-buffer-1.0.0.tgz\",
            \"integrity\": \"sha1-4+JbIHrE5wGvch4staFnksrD3Fg=\",
            \"dev\": true
        },
        \"clone-stats\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-stats/-/clone-stats-1.0.0.tgz\",
            \"integrity\": \"sha1-s3gt/4u1R04Yuba/D9/ngvh3doA=\",
            \"dev\": true
        },
        \"cloneable-readable\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/cloneable-readable/-/cloneable-readable-1.1.3.tgz\",
            \"integrity\": \"sha512-2EF8zTQOxYq70Y4XKtorQupqF0m49MBz2/yf5Bj+MHjvpG3Hy7sImifnqD6UA+TKYxeSV+u6qqQPawN5UvnpKQ==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.1\",
                \"process-nextick-args\": \"^2.0.0\",
                \"readable-stream\": \"^2.3.5\"
            }
        },
        \"code-point-at\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/code-point-at/-/code-point-at-1.1.0.tgz\",
            \"integrity\": \"sha1-DQcLTQQ6W+ozovGkDi7bPZpMz3c=\",
            \"dev\": true
        },
        \"collection-map\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-map/-/collection-map-1.0.0.tgz\",
            \"integrity\": \"sha1-rqDwb40mx4DCt1SUOFVEsiVa8Yw=\",
            \"dev\": true,
            \"requires\": {
                \"arr-map\": \"^2.0.2\",
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"collection-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-visit/-/collection-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-S8A3PBZLwykbTTaMgpzxqApZ3KA=\",
            \"dev\": true,
            \"requires\": {
                \"map-visit\": \"^1.0.0\",
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"color-convert\": {
            \"version\": \"1.9.3\",
            \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-1.9.3.tgz\",
            \"integrity\": \"sha512-QfAUtd+vFdAtFQcC8CCyYt1fYWxSqAiK2cSD6zDB8N3cpsEBAvRxp9zOGg6G/SHHJYAT88/az/IuDGALsNVbGg==\",
            \"requires\": {
                \"color-name\": \"1.1.3\"
            },
            \"dependencies\": {
                \"color-name\": {
                    \"version\": \"1.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.3.tgz\",
                    \"integrity\": \"sha1-p9BVi9icQveV3UIyj3QIMcpTvCU=\"
                }
            }
        },
        \"color-name\": {
            \"version\": \"1.1.4\",
            \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
            \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\"
        },
        \"color-support\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/color-support/-/color-support-1.1.3.tgz\",
            \"integrity\": \"sha512-qiBjkpbMLO/HL68y+lh4q0/O1MZFj2RX6X/KmMa3+gJD3z+WwI1ZzDHysvqHGS3mP6mznPckpXmw1nI9cJjyRg==\",
            \"dev\": true
        },
        \"combined-stream\": {
            \"version\": \"1.0.8\",
            \"resolved\": \"https://registry.npmjs.org/combined-stream/-/combined-stream-1.0.8.tgz\",
            \"integrity\": \"sha512-FQN4MRfuJeHf7cBbBMJFXhKSDq+2kAArBlmRBvcvFE5BB1HZKXtSFASDhdlz9zOYwxh8lDdnvmMOe/+5cdoEdg==\",
            \"dev\": true,
            \"requires\": {
                \"delayed-stream\": \"~1.0.0\"
            }
        },
        \"commander\": {
            \"version\": \"2.20.3\",
            \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
            \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
            \"dev\": true
        },
        \"component-bind\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/component-bind/-/component-bind-1.0.0.tgz\",
            \"integrity\": \"sha1-AMYIq33Nk4l8AAllGx06jh5zu9E=\",
            \"dev\": true
        },
        \"component-emitter\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.2.1.tgz\",
            \"integrity\": \"sha1-E3kY1teCg/ffemt8WmPhQOaUJeY=\",
            \"dev\": true
        },
        \"component-inherit\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/component-inherit/-/component-inherit-0.0.3.tgz\",
            \"integrity\": \"sha1-ZF/ErfWLcrZJ1crmUTVhnbJv8UM=\",
            \"dev\": true
        },
        \"concat-map\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
            \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
            \"dev\": true
        },
        \"concat-stream\": {
            \"version\": \"1.6.2\",
            \"resolved\": \"https://registry.npmjs.org/concat-stream/-/concat-stream-1.6.2.tgz\",
            \"integrity\": \"sha512-27HBghJxjiZtIk3Ycvn/4kbJk/1uZuJFfuPEns6LaEvpvG1f0hTea8lilrouyo9mVc2GWdcEZ8OLoGmSADlrCw==\",
            \"dev\": true,
            \"requires\": {
                \"buffer-from\": \"^1.0.0\",
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.2.2\",
                \"typedarray\": \"^0.0.6\"
            }
        },
        \"concat-with-sourcemaps\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/concat-with-sourcemaps/-/concat-with-sourcemaps-1.1.0.tgz\",
            \"integrity\": \"sha512-4gEjHJFT9e+2W/77h/DS5SGUgwDaOwprX8L/gl5+3ixnzkVJJsZWDSelmN3Oilw3LNDZjZV0yqH1hLG3k6nghg==\",
            \"dev\": true,
            \"requires\": {
                \"source-map\": \"^0.6.1\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                }
            }
        },
        \"connect\": {
            \"version\": \"3.6.6\",
            \"resolved\": \"https://registry.npmjs.org/connect/-/connect-3.6.6.tgz\",
            \"integrity\": \"sha1-Ce/2xVr3I24TcTWnJXSFi2eG9SQ=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"finalhandler\": \"1.1.0\",
                \"parseurl\": \"~1.3.2\",
                \"utils-merge\": \"1.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"connect-history-api-fallback\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/connect-history-api-fallback/-/connect-history-api-fallback-1.6.0.tgz\",
            \"integrity\": \"sha512-e54B99q/OUoH64zYYRf3HBP5z24G38h5D3qXu23JGRoigpX5Ss4r9ZnDk3g0Z8uQC2x2lPaJ+UlWBc1ZWBWdLg==\",
            \"dev\": true
        },
        \"console-control-strings\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/console-control-strings/-/console-control-strings-1.1.0.tgz\",
            \"integrity\": \"sha1-PXz0Rk22RG6mRL9LOVB/mFEAjo4=\",
            \"dev\": true
        },
        \"convert-source-map\": {
            \"version\": \"1.7.0\",
            \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-1.7.0.tgz\",
            \"integrity\": \"sha512-4FJkXzKXEDB1snCFZlLP4gpC3JILicCpGbzG9f9G7tGqGCzETQ2hWPrcinA9oU4wtf2biUaEH5065UnMeR33oA==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.1\"
            }
        },
        \"cookie\": {
            \"version\": \"0.3.1\",
            \"resolved\": \"https://registry.npmjs.org/cookie/-/cookie-0.3.1.tgz\",
            \"integrity\": \"sha1-5+Ch+e9DtMi6klxcWpboBtFoc7s=\",
            \"dev\": true
        },
        \"copy-descriptor\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/copy-descriptor/-/copy-descriptor-0.1.1.tgz\",
            \"integrity\": \"sha1-Z29us8OZl8LuGsOpJP1hJHSPV40=\",
            \"dev\": true
        },
        \"copy-props\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/copy-props/-/copy-props-2.0.4.tgz\",
            \"integrity\": \"sha512-7cjuUME+p+S3HZlbllgsn2CDwS+5eCCX16qBgNC4jgSTf49qR1VKy/Zhl400m0IQXl/bPGEVqncgUUMjrr4s8A==\",
            \"dev\": true,
            \"requires\": {
                \"each-props\": \"^1.3.0\",
                \"is-plain-object\": \"^2.0.1\"
            }
        },
        \"core-util-is\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
            \"integrity\": \"sha1-tf1UIgqivFq1eqtxQMlAdUUDwac=\",
            \"dev\": true
        },
        \"cross-spawn\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/cross-spawn/-/cross-spawn-3.0.1.tgz\",
            \"integrity\": \"sha1-ElYDfsufDF9549bvE14wdwGEuYI=\",
            \"dev\": true,
            \"requires\": {
                \"lru-cache\": \"^4.0.1\",
                \"which\": \"^1.2.9\"
            }
        },
        \"currently-unhandled\": {
            \"version\": \"0.4.1\",
            \"resolved\": \"https://registry.npmjs.org/currently-unhandled/-/currently-unhandled-0.4.1.tgz\",
            \"integrity\": \"sha1-mI3zP+qxke95mmE2nddsF635V+o=\",
            \"dev\": true,
            \"requires\": {
                \"array-find-index\": \"^1.0.1\"
            }
        },
        \"d\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/d/-/d-1.0.1.tgz\",
            \"integrity\": \"sha512-m62ShEObQ39CfralilEQRjH6oAMtNCV1xJyEx5LpRYUVN+EviphDgUc/F3hnYbADmkiNs67Y+3ylmlG7Lnu+FA==\",
            \"dev\": true,
            \"requires\": {
                \"es5-ext\": \"^0.10.50\",
                \"type\": \"^1.0.1\"
            }
        },
        \"dashdash\": {
            \"version\": \"1.14.1\",
            \"resolved\": \"https://registry.npmjs.org/dashdash/-/dashdash-1.14.1.tgz\",
            \"integrity\": \"sha1-hTz6D3y+L+1d4gMmuN1YEDX24vA=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\"
            }
        },
        \"datatables.net\": {
            \"version\": \"1.10.22\",
            \"resolved\": \"https://registry.npmjs.org/datatables.net/-/datatables.net-1.10.22.tgz\",
            \"integrity\": \"sha512-ujn8GvkQIBYzYH54XY7OrI0Zb35TKRd9ABYfbnXgBfwTGIFT6UsmXrfHU5Yk+MSDoF0sDu2TB+31V6c+zUZ0Pw==\",
            \"requires\": {
                \"jquery\": \">=1.7\"
            }
        },
        \"datatables.net-bs4\": {
            \"version\": \"1.10.22\",
            \"resolved\": \"https://registry.npmjs.org/datatables.net-bs4/-/datatables.net-bs4-1.10.22.tgz\",
            \"integrity\": \"sha512-si0eOiaKmuURURpXhPRba7b3vCZsVfJK8pfrlM5WtaOaCEBa62DG/S9guMxUBmcAmvEC3FA2CKc/iKya3gb9qg==\",
            \"requires\": {
                \"datatables.net\": \"1.10.22\",
                \"jquery\": \">=1.7\"
            }
        },
        \"debug\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.1.0.tgz\",
            \"integrity\": \"sha512-OX8XqP7/1a9cqkxYw2yXss15f26NKWBpDXQd0/uK/KPqdQhxbPa994hnzjcE2VqQpDslf55723cKPUOGSmMY3g==\",
            \"dev\": true,
            \"requires\": {
                \"ms\": \"2.0.0\"
            }
        },
        \"decamelize\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
            \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
            \"dev\": true
        },
        \"decode-uri-component\": {
            \"version\": \"0.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decode-uri-component/-/decode-uri-component-0.2.0.tgz\",
            \"integrity\": \"sha1-6zkTMzRYd1y4TNGh+uBiEGu4dUU=\",
            \"dev\": true
        },
        \"default-compare\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-compare/-/default-compare-1.0.0.tgz\",
            \"integrity\": \"sha512-QWfXlM0EkAbqOCbD/6HjdwT19j7WCkMyiRhWilc4H9/5h/RzTF9gv5LYh1+CmDV5d1rki6KAWLtQale0xt20eQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"default-resolution\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-resolution/-/default-resolution-2.0.0.tgz\",
            \"integrity\": \"sha1-vLgrqnKtebQmp2cy8aga1t8m1oQ=\",
            \"dev\": true
        },
        \"define-properties\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.1.3.tgz\",
            \"integrity\": \"sha512-3MqfYKj2lLzdMSf8ZIZE/V+Zuy+BgD6f164e8K2w7dgnpKArBDerGYpM46IYYcjnkdPNMjPk9A6VFB8+3SKlXQ==\",
            \"dev\": true,
            \"requires\": {
                \"object-keys\": \"^1.0.12\"
            }
        },
        \"define-property\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
            \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-descriptor\": \"^1.0.2\",
                \"isobject\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"del\": {
            \"version\": \"6.0.0\",
            \"resolved\": \"https://registry.npmjs.org/del/-/del-6.0.0.tgz\",
            \"integrity\": \"sha512-1shh9DQ23L16oXSZKB2JxpL7iMy2E0S9d517ptA1P8iw0alkPtQcrKH7ru31rYtKwF499HkTu+DRzq3TCKDFRQ==\",
            \"dev\": true,
            \"requires\": {
                \"globby\": \"^11.0.1\",
                \"graceful-fs\": \"^4.2.4\",
                \"is-glob\": \"^4.0.1\",
                \"is-path-cwd\": \"^2.2.0\",
                \"is-path-inside\": \"^3.0.2\",
                \"p-map\": \"^4.0.0\",
                \"rimraf\": \"^3.0.2\",
                \"slash\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"graceful-fs\": {
                    \"version\": \"4.2.4\",
                    \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.4.tgz\",
                    \"integrity\": \"sha512-WjKPNJF79dtJAVniUlGGWHYGz2jWxT6VhN/4m1NdkbZ2nOsEF+cI1Edgql5zCRhs/VsQYRvrXctxktVXZUkixw==\",
                    \"dev\": true
                }
            }
        },
        \"delayed-stream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/delayed-stream/-/delayed-stream-1.0.0.tgz\",
            \"integrity\": \"sha1-3zrhmayt+31ECqrgsp4icrJOxhk=\",
            \"dev\": true
        },
        \"delegates\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/delegates/-/delegates-1.0.0.tgz\",
            \"integrity\": \"sha1-hMbhWbgZBP3KWaDvRM2HDTElD5o=\",
            \"dev\": true
        },
        \"depd\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/depd/-/depd-1.1.2.tgz\",
            \"integrity\": \"sha1-m81S4UwJd2PnSbJ0xDRu0uVgtak=\",
            \"dev\": true
        },
        \"destroy\": {
            \"version\": \"1.0.4\",
            \"resolved\": \"https://registry.npmjs.org/destroy/-/destroy-1.0.4.tgz\",
            \"integrity\": \"sha1-l4hXRCxEdJ5CBmE+N5RiBYJqvYA=\",
            \"dev\": true
        },
        \"detect-file\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/detect-file/-/detect-file-1.0.0.tgz\",
            \"integrity\": \"sha1-8NZtA2cqglyxtzvbP+YjEMjlUrc=\",
            \"dev\": true
        },
        \"dev-ip\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/dev-ip/-/dev-ip-1.0.1.tgz\",
            \"integrity\": \"sha1-p2o+0YVb56ASu4rBbLgPPADcKPA=\",
            \"dev\": true
        },
        \"dir-glob\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/dir-glob/-/dir-glob-3.0.1.tgz\",
            \"integrity\": \"sha512-WkrWp9GR4KXfKGYzOLmTuGVi1UWFfws377n9cc55/tb6DuqyF6pcQ5AbiHEshaDpY9v6oaSr2XCDidGmMwdzIA==\",
            \"dev\": true,
            \"requires\": {
                \"path-type\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"path-type\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-4.0.0.tgz\",
                    \"integrity\": \"sha512-gDKb8aZMDeD/tZWs9P6+q0J9Mwkdl6xMV8TjnGP3qJVJ06bdMgkbBlLU8IdfOsIsFz2BW1rNVT3XuNEl8zPAvw==\",
                    \"dev\": true
                }
            }
        },
        \"dlv\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/dlv/-/dlv-1.1.3.tgz\",
            \"integrity\": \"sha512-+HlytyjlPKnIG8XuRG8WvmBP8xs8P71y+SKKS6ZXWoEgLuePxtDoUEiH7WkdePWrQ5JBpE6aoVqfZfJUQkjXwA==\",
            \"dev\": true
        },
        \"duplexify\": {
            \"version\": \"3.7.1\",
            \"resolved\": \"https://registry.npmjs.org/duplexify/-/duplexify-3.7.1.tgz\",
            \"integrity\": \"sha512-07z8uv2wMyS51kKhD1KsdXJg5WQ6t93RneqRxUHnskXVtlYYkLqM0gqStQZ3pj073g687jPCHrqNfCzawLYh5g==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.0.0\",
                \"inherits\": \"^2.0.1\",
                \"readable-stream\": \"^2.0.0\",
                \"stream-shift\": \"^1.0.0\"
            }
        },
        \"each-props\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/each-props/-/each-props-1.3.2.tgz\",
            \"integrity\": \"sha512-vV0Hem3zAGkJAyU7JSjixeU66rwdynTAa1vofCrSA5fEln+m67Az9CcnkVD776/fsN/UjIWmBDoNRS6t6G9RfA==\",
            \"dev\": true,
            \"requires\": {
                \"is-plain-object\": \"^2.0.1\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"easy-extender\": {
            \"version\": \"2.3.4\",
            \"resolved\": \"https://registry.npmjs.org/easy-extender/-/easy-extender-2.3.4.tgz\",
            \"integrity\": \"sha512-8cAwm6md1YTiPpOvDULYJL4ZS6WfM5/cTeVVh4JsvyYZAoqlRVUpHL9Gr5Fy7HA6xcSZicUia3DeAgO3Us8E+Q==\",
            \"dev\": true,
            \"requires\": {
                \"lodash\": \"^4.17.10\"
            }
        },
        \"eazy-logger\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/eazy-logger/-/eazy-logger-3.1.0.tgz\",
            \"integrity\": \"sha512-/snsn2JqBtUSSstEl4R0RKjkisGHAhvYj89i7r3ytNUKW12y178KDZwXLXIgwDqLW6E/VRMT9qfld7wvFae8bQ==\",
            \"dev\": true,
            \"requires\": {
                \"tfunk\": \"^4.0.0\"
            }
        },
        \"ecc-jsbn\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/ecc-jsbn/-/ecc-jsbn-0.1.2.tgz\",
            \"integrity\": \"sha1-OoOpBOVDUyh4dMVkt1SThoSamMk=\",
            \"dev\": true,
            \"requires\": {
                \"jsbn\": \"~0.1.0\",
                \"safer-buffer\": \"^2.1.0\"
            }
        },
        \"ee-first\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ee-first/-/ee-first-1.1.1.tgz\",
            \"integrity\": \"sha1-WQxhFWsK4vTwJVcyoViyZrxWsh0=\",
            \"dev\": true
        },
        \"electron-to-chromium\": {
            \"version\": \"1.3.334\",
            \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.3.334.tgz\",
            \"integrity\": \"sha512-RcjJhpsVaX0X6ntu/WSBlW9HE9pnCgXS9B8mTUObl1aDxaiOa0Lu+NMveIS5IDC+VELzhM32rFJDCC+AApVwcA==\",
            \"dev\": true
        },
        \"emoji-regex\": {
            \"version\": \"7.0.3\",
            \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-7.0.3.tgz\",
            \"integrity\": \"sha512-CwBLREIQ7LvYFB0WyRvwhq5N5qPhc6PMjD6bYggFlI5YyDgl+0vxq5VHbMOFqLg7hfWzmu8T5Z1QofhmTIhItA==\",
            \"dev\": true
        },
        \"encodeurl\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/encodeurl/-/encodeurl-1.0.2.tgz\",
            \"integrity\": \"sha1-rT/0yG7C0CkyL1oCw6mmBslbP1k=\",
            \"dev\": true
        },
        \"end-of-stream\": {
            \"version\": \"1.4.4\",
            \"resolved\": \"https://registry.npmjs.org/end-of-stream/-/end-of-stream-1.4.4.tgz\",
            \"integrity\": \"sha512-+uw1inIHVPQoaVuHzRyXd21icM+cnt4CzD5rW+NC1wjOUSTOs+Te7FOv7AhN7vS9x/oIyhLP5PR1H+phQAHu5Q==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.4.0\"
            }
        },
        \"engine.io\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/engine.io/-/engine.io-3.2.1.tgz\",
            \"integrity\": \"sha512-+VlKzHzMhaU+GsCIg4AoXF1UdDFjHHwMmMKqMJNDNLlUlejz58FCy4LBqB2YVJskHGYl06BatYWKP2TVdVXE5w==\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"base64id\": \"1.0.0\",
                \"cookie\": \"0.3.1\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.1.0\",
                \"ws\": \"~3.3.1\"
            },
            \"dependencies\": {
                \"base64-arraybuffer\": {
                    \"version\": \"0.1.5\",
                    \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.5.tgz\",
                    \"integrity\": \"sha1-c5JncZI7Whl0etZmqlzUv5xunOg=\",
                    \"dev\": true
                },
                \"engine.io-parser\": {
                    \"version\": \"2.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.1.3.tgz\",
                    \"integrity\": \"sha512-6HXPre2O4Houl7c4g7Ic/XzPnHBvaEmN90vtRO9uLmwtRqQmTOw0QMevL1TOfL2Cpu1VzsaTmMotQgMdkzGkVA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"after\": \"0.8.2\",
                        \"arraybuffer.slice\": \"~0.0.7\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"blob\": \"0.0.5\",
                        \"has-binary2\": \"~1.0.2\"
                    }
                },
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"engine.io-client\": {
            \"version\": \"3.4.4\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.4.4.tgz\",
            \"integrity\": \"sha512-iU4CRr38Fecj8HoZEnFtm2EiKGbYZcPn3cHxqNGl/tmdWRf60KhK+9vE0JeSjgnlS/0oynEfLgKbT9ALpim0sQ==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"~1.3.0\",
                \"component-inherit\": \"0.0.3\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.2.0\",
                \"has-cors\": \"1.1.0\",
                \"indexof\": \"0.0.1\",
                \"parseqs\": \"0.0.6\",
                \"parseuri\": \"0.0.6\",
                \"ws\": \"~6.1.0\",
                \"xmlhttprequest-ssl\": \"~1.5.4\",
                \"yeast\": \"0.1.2\"
            },
            \"dependencies\": {
                \"component-emitter\": {
                    \"version\": \"1.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
                    \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
                    \"dev\": true
                }
            }
        },
        \"engine.io-parser\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.2.1.tgz\",
            \"integrity\": \"sha512-x+dN/fBH8Ro8TFwJ+rkB2AmuVw9Yu2mockR/p3W8f8YtExwFgDvBDi0GWyb4ZLkpahtDGZgtr3zLovanJghPqg==\",
            \"dev\": true,
            \"requires\": {
                \"after\": \"0.8.2\",
                \"arraybuffer.slice\": \"~0.0.7\",
                \"base64-arraybuffer\": \"0.1.4\",
                \"blob\": \"0.0.5\",
                \"has-binary2\": \"~1.0.2\"
            }
        },
        \"error-ex\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/error-ex/-/error-ex-1.3.2.tgz\",
            \"integrity\": \"sha512-7dFHNmqeFSEt2ZBsCriorKnn3Z2pj+fd9kmI6QoWw4//DL+icEBfc0U7qJCisqrTsKTjw4fNFy2pW9OqStD84g==\",
            \"dev\": true,
            \"requires\": {
                \"is-arrayish\": \"^0.2.1\"
            }
        },
        \"es5-ext\": {
            \"version\": \"0.10.53\",
            \"resolved\": \"https://registry.npmjs.org/es5-ext/-/es5-ext-0.10.53.tgz\",
            \"integrity\": \"sha512-Xs2Stw6NiNHWypzRTY1MtaG/uJlwCk8kH81920ma8mvN8Xq1gsfhZvpkImLQArw8AHnv8MT2I45J3c0R8slE+Q==\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"~2.0.3\",
                \"es6-symbol\": \"~3.1.3\",
                \"next-tick\": \"~1.0.0\"
            }
        },
        \"es6-iterator\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-iterator/-/es6-iterator-2.0.3.tgz\",
            \"integrity\": \"sha1-p96IkUGgWpSwhUQDstCg+/qY87c=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.35\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"es6-symbol\": {
            \"version\": \"3.1.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-symbol/-/es6-symbol-3.1.3.tgz\",
            \"integrity\": \"sha512-NJ6Yn3FuDinBaBRWl/q5X/s4koRHBrgKAu+yGI6JCBeiu3qrcbJhwT2GeR/EXVfylRk8dpQVJoLEFhK+Mu31NA==\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"^1.0.1\",
                \"ext\": \"^1.1.2\"
            }
        },
        \"es6-weak-map\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-weak-map/-/es6-weak-map-2.0.3.tgz\",
            \"integrity\": \"sha512-p5um32HOTO1kP+w7PRnB+5lQ43Z6muuMuIMffvDN8ZB4GcnjLBV6zGStpbASIMk4DCAvEaamhe2zhyCb/QXXsA==\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.46\",
                \"es6-iterator\": \"^2.0.3\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"escape-html\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/escape-html/-/escape-html-1.0.3.tgz\",
            \"integrity\": \"sha1-Aljq5NPQwJdN4cFpGI7wBR0dGYg=\",
            \"dev\": true
        },
        \"escape-string-regexp\": {
            \"version\": \"1.0.5\",
            \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
            \"integrity\": \"sha1-G2HAViGQqN/2rjuyzwIAyhMLhtQ=\",
            \"dev\": true
        },
        \"etag\": {
            \"version\": \"1.8.1\",
            \"resolved\": \"https://registry.npmjs.org/etag/-/etag-1.8.1.tgz\",
            \"integrity\": \"sha1-Qa4u62XvpiJorr/qg6x9eSmbCIc=\",
            \"dev\": true
        },
        \"eventemitter3\": {
            \"version\": \"4.0.7\",
            \"resolved\": \"https://registry.npmjs.org/eventemitter3/-/eventemitter3-4.0.7.tgz\",
            \"integrity\": \"sha512-8guHBZCwKnFhYdHr2ysuRWErTwhoN2X8XELRlrRwpmfeY2jjuUN4taQMsULKUVo1K4DvZl+0pgfyoysHxvmvEw==\",
            \"dev\": true
        },
        \"expand-brackets\": {
            \"version\": \"2.1.4\",
            \"resolved\": \"https://registry.npmjs.org/expand-brackets/-/expand-brackets-2.1.4.tgz\",
            \"integrity\": \"sha1-t3c14xXOMPa27/D4OwQVGiJEliI=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.3.3\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"posix-character-classes\": \"^0.1.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
                    \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
                    \"dev\": true
                }
            }
        },
        \"expand-tilde\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/expand-tilde/-/expand-tilde-2.0.2.tgz\",
            \"integrity\": \"sha1-l+gBqgUt8CRU3kawK/YhZCzchQI=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"ext\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/ext/-/ext-1.4.0.tgz\",
            \"integrity\": \"sha512-Key5NIsUxdqKg3vIsdw9dSuXpPCQ297y6wBjL30edxwPgt2E44WcWBZey/ZvUc6sERLTxKdyCu4gZFmUbk1Q7A==\",
            \"dev\": true,
            \"requires\": {
                \"type\": \"^2.0.0\"
            },
            \"dependencies\": {
                \"type\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/type/-/type-2.0.0.tgz\",
                    \"integrity\": \"sha512-KBt58xCHry4Cejnc2ISQAF7QY+ORngsWfxezO68+12hKV6lQY8P/psIkcbjeHWn7MqcgciWJyCCevFMJdIXpow==\",
                    \"dev\": true
                }
            }
        },
        \"extend\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend/-/extend-3.0.2.tgz\",
            \"integrity\": \"sha512-fjquC59cD7CyW6urNXK0FBufkZcoiGG80wTuPujX590cB5Ttln20E2UB4S/WARVqhXffZl2LNgS+gQdPIIim/g==\",
            \"dev\": true
        },
        \"extend-shallow\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
            \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
            \"dev\": true,
            \"requires\": {
                \"assign-symbols\": \"^1.0.0\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"extglob\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/extglob/-/extglob-2.0.4.tgz\",
            \"integrity\": \"sha512-Nmb6QXkELsuBr24CJSkilo6UHHgbekK5UiZgfE6UHD3Eb27YC6oD+bhcT+tJ6cl8dmsgdQxnWlcry8ksBIBLpw==\",
            \"dev\": true,
            \"requires\": {
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^1.0.0\",
                \"expand-brackets\": \"^2.1.4\",
                \"extend-shallow\": \"^2.0.1\",
                \"fragment-cache\": \"^0.2.1\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"extsprintf\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/extsprintf/-/extsprintf-1.3.0.tgz\",
            \"integrity\": \"sha1-lpGEQOMEGnpBT4xS48V06zw+HgU=\",
            \"dev\": true
        },
        \"fancy-log\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/fancy-log/-/fancy-log-1.3.3.tgz\",
            \"integrity\": \"sha512-k9oEhlyc0FrVh25qYuSELjr8oxsCoc4/LEZfg2iJJrfEk/tZL9bCoJE47gqAvI2m/AUjluCS4+3I0eTx8n3AEw==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-gray\": \"^0.1.1\",
                \"color-support\": \"^1.1.3\",
                \"parse-node-version\": \"^1.0.0\",
                \"time-stamp\": \"^1.0.0\"
            }
        },
        \"fast-deep-equal\": {
            \"version\": \"3.1.3\",
            \"resolved\": \"https://registry.npmjs.org/fast-deep-equal/-/fast-deep-equal-3.1.3.tgz\",
            \"integrity\": \"sha512-f3qQ9oQy9j2AhBe/H9VC91wLmKBCCU/gDOnKNAYG5hswO7BLKj09Hc5HYNz9cGI++xlpDCIgDaitVs03ATR84Q==\",
            \"dev\": true
        },
        \"fast-glob\": {
            \"version\": \"3.2.4\",
            \"resolved\": \"https://registry.npmjs.org/fast-glob/-/fast-glob-3.2.4.tgz\",
            \"integrity\": \"sha512-kr/Oo6PX51265qeuCYsyGypiO5uJFgBS0jksyG7FUeCyQzNwYnzrNIMR1NXfkZXsMYXYLRAHgISHBz8gQcxKHQ==\",
            \"dev\": true,
            \"requires\": {
                \"@nodelib/fs.stat\": \"^2.0.2\",
                \"@nodelib/fs.walk\": \"^1.2.3\",
                \"glob-parent\": \"^5.1.0\",
                \"merge2\": \"^1.3.0\",
                \"micromatch\": \"^4.0.2\",
                \"picomatch\": \"^2.2.1\"
            },
            \"dependencies\": {
                \"braces\": {
                    \"version\": \"3.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
                    \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
                    \"dev\": true,
                    \"requires\": {
                        \"fill-range\": \"^7.0.1\"
                    }
                },
                \"fill-range\": {
                    \"version\": \"7.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-7.0.1.tgz\",
                    \"integrity\": \"sha512-qOo9F+dMUmC2Lcb4BbVvnKJxTPjCm+RRpe4gDuGrzkL7mEVl/djYSu2OdQ2Pa302N4oqkSg9ir6jaLWJ2USVpQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"to-regex-range\": \"^5.0.1\"
                    }
                },
                \"glob-parent\": {
                    \"version\": \"5.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-5.1.1.tgz\",
                    \"integrity\": \"sha512-FnI+VGOpnlGHWZxthPGR+QhR78fuiK0sNLkHQv+bL9fQi57lNNdquIbna/WrfROrolq8GK5Ek6BiMwqL/voRYQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-glob\": \"^4.0.1\"
                    }
                },
                \"is-number\": {
                    \"version\": \"7.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
                    \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
                    \"dev\": true
                },
                \"micromatch\": {
                    \"version\": \"4.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.2.tgz\",
                    \"integrity\": \"sha512-y7FpHSbMUMoyPbYUSzO6PaZ6FyRnQOpHuKwbo1G+Knck95XVU4QAiKdGEnj5wwoS7PlOgthX/09u5iFJ+aYf5Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"braces\": \"^3.0.1\",
                        \"picomatch\": \"^2.0.5\"
                    }
                },
                \"to-regex-range\": {
                    \"version\": \"5.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
                    \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-number\": \"^7.0.0\"
                    }
                }
            }
        },
        \"fast-json-stable-stringify\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.1.0.tgz\",
            \"integrity\": \"sha512-lhd/wF+Lk98HZoTCtlVraHtfh5XYijIjalXck7saUtuanSDyLMxnHhSXEDJqHxD7msR8D0uCmqlkwjCV8xvwHw==\",
            \"dev\": true
        },
        \"fastq\": {
            \"version\": \"1.9.0\",
            \"resolved\": \"https://registry.npmjs.org/fastq/-/fastq-1.9.0.tgz\",
            \"integrity\": \"sha512-i7FVWL8HhVY+CTkwFxkN2mk3h+787ixS5S63eb78diVRc1MCssarHq3W5cj0av7YDSwmaV928RNag+U1etRQ7w==\",
            \"dev\": true,
            \"requires\": {
                \"reusify\": \"^1.0.4\"
            }
        },
        \"file-uri-to-path\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/file-uri-to-path/-/file-uri-to-path-1.0.0.tgz\",
            \"integrity\": \"sha512-0Zt+s3L7Vf1biwWZ29aARiVYLx7iMGnEUl9x33fbB/j3jR81u/O2LbqK+Bm1CDSNDKVtJ/YjwY7TUd5SkeLQLw==\",
            \"dev\": true,
            \"optional\": true
        },
        \"fill-range\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-4.0.0.tgz\",
            \"integrity\": \"sha1-1USBHUKPmOsGpj3EAtJAPDKMOPc=\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\",
                \"to-regex-range\": \"^2.1.0\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"finalhandler\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/finalhandler/-/finalhandler-1.1.0.tgz\",
            \"integrity\": \"sha1-zgtoVbRYU+eRsvzGgARtiCU91/U=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"encodeurl\": \"~1.0.1\",
                \"escape-html\": \"~1.0.3\",
                \"on-finished\": \"~2.3.0\",
                \"parseurl\": \"~1.3.2\",
                \"statuses\": \"~1.3.1\",
                \"unpipe\": \"~1.0.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"find-up\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-1.1.2.tgz\",
            \"integrity\": \"sha1-ay6YIrGizgpgq2TWEOzK1TyyTQ8=\",
            \"dev\": true,
            \"requires\": {
                \"path-exists\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"findup-sync\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-3.0.0.tgz\",
            \"integrity\": \"sha512-YbffarhcicEhOrm4CtrwdKBdCuz576RLdhJDsIfvNtxUuhdRet1qZcsMjqbePtAseKdAnDyM/IyXbu7PRPRLYg==\",
            \"dev\": true,
            \"requires\": {
                \"detect-file\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve-dir\": \"^1.0.1\"
            }
        },
        \"fined\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/fined/-/fined-1.2.0.tgz\",
            \"integrity\": \"sha512-ZYDqPLGxDkDhDZBjZBb+oD1+j0rA4E0pXY50eplAAOPg2N/gUBSSk5IM1/QhPfyVo19lJ+CvXpqfvk+b2p/8Ng==\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"is-plain-object\": \"^2.0.3\",
                \"object.defaults\": \"^1.1.0\",
                \"object.pick\": \"^1.2.0\",
                \"parse-filepath\": \"^1.0.1\"
            }
        },
        \"flagged-respawn\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/flagged-respawn/-/flagged-respawn-1.0.1.tgz\",
            \"integrity\": \"sha512-lNaHNVymajmk0OJMBn8fVUAU1BtDeKIqKoVhk4xAALB57aALg6b4W0MfJ/cUE0g9YBXy5XhSlPIpYIJ7HaY/3Q==\",
            \"dev\": true
        },
        \"flush-write-stream\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/flush-write-stream/-/flush-write-stream-1.1.1.tgz\",
            \"integrity\": \"sha512-3Z4XhFZ3992uIq0XOqb9AreonueSYphE6oYbpt5+3u06JWklbsPkNv3ZKkP9Bz/r+1MWCaMoSQ28P85+1Yc77w==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.3.6\"
            }
        },
        \"follow-redirects\": {
            \"version\": \"1.13.0\",
            \"resolved\": \"https://registry.npmjs.org/follow-redirects/-/follow-redirects-1.13.0.tgz\",
            \"integrity\": \"sha512-aq6gF1BEKje4a9i9+5jimNFIpq4Q1WiwBToeRK5NvZBd/TRsmW8BsJfOEGkr76TbOyPVD3OVDN910EcUNtRYEA==\",
            \"dev\": true
        },
        \"for-in\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/for-in/-/for-in-1.0.2.tgz\",
            \"integrity\": \"sha1-gQaNKVqBQuwKxybG4iAMMPttXoA=\",
            \"dev\": true
        },
        \"for-own\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/for-own/-/for-own-1.0.0.tgz\",
            \"integrity\": \"sha1-xjMy9BXO3EsE2/5wz4NklMU8tEs=\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.1\"
            }
        },
        \"forever-agent\": {
            \"version\": \"0.6.1\",
            \"resolved\": \"https://registry.npmjs.org/forever-agent/-/forever-agent-0.6.1.tgz\",
            \"integrity\": \"sha1-+8cfDEGt6zf5bFd60e1C2P2sypE=\",
            \"dev\": true
        },
        \"form-data\": {
            \"version\": \"2.3.3\",
            \"resolved\": \"https://registry.npmjs.org/form-data/-/form-data-2.3.3.tgz\",
            \"integrity\": \"sha512-1lLKB2Mu3aGP1Q/2eCOx0fNbRMe7XdwktwOruhfqqd0rIJWwN4Dh+E3hrPSlDCXnSR7UtZ1N38rVXm+6+MEhJQ==\",
            \"dev\": true,
            \"requires\": {
                \"asynckit\": \"^0.4.0\",
                \"combined-stream\": \"^1.0.6\",
                \"mime-types\": \"^2.1.12\"
            }
        },
        \"fragment-cache\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/fragment-cache/-/fragment-cache-0.2.1.tgz\",
            \"integrity\": \"sha1-QpD60n8T6Jvn8zeZxrxaCr//DRk=\",
            \"dev\": true,
            \"requires\": {
                \"map-cache\": \"^0.2.2\"
            }
        },
        \"fresh\": {
            \"version\": \"0.5.2\",
            \"resolved\": \"https://registry.npmjs.org/fresh/-/fresh-0.5.2.tgz\",
            \"integrity\": \"sha1-PYyt2Q2XZWn6g1qx+OSyOhBWBac=\",
            \"dev\": true
        },
        \"fs-extra\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/fs-extra/-/fs-extra-3.0.1.tgz\",
            \"integrity\": \"sha1-N5TzeMWLNC6n27sjCVEJxLO2IpE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"jsonfile\": \"^3.0.0\",
                \"universalify\": \"^0.1.0\"
            }
        },
        \"fs-mkdirp-stream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs-mkdirp-stream/-/fs-mkdirp-stream-1.0.0.tgz\",
            \"integrity\": \"sha1-C3gV/DIBxqaeFNuYzgmMFpNSWes=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"fs.realpath\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
            \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
            \"dev\": true
        },
        \"fsevents\": {
            \"version\": \"2.1.3\",
            \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-2.1.3.tgz\",
            \"integrity\": \"sha512-Auw9a4AxqWpa9GUfj370BMPzzyncfBABW8Mab7BGWBYDj4Isgq+cDKtx0i6u9jcX9pQDnswsaaOTgTmA5pEjuQ==\",
            \"dev\": true,
            \"optional\": true
        },
        \"fstream\": {
            \"version\": \"1.0.12\",
            \"resolved\": \"https://registry.npmjs.org/fstream/-/fstream-1.0.12.tgz\",
            \"integrity\": \"sha512-WvJ193OHa0GHPEL+AycEJgxvBEwyfRkN1vhjca23OaPVMCaLCXTd5qAu82AjTcgP1UJmytkOKb63Ypde7raDIg==\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"inherits\": \"~2.0.0\",
                \"mkdirp\": \">=0.5 0\",
                \"rimraf\": \"2\"
            },
            \"dependencies\": {
                \"rimraf\": {
                    \"version\": \"2.7.1\",
                    \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
                    \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"glob\": \"^7.1.3\"
                    }
                }
            }
        },
        \"function-bind\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.1.tgz\",
            \"integrity\": \"sha512-yIovAzMX49sF8Yl58fSCWJ5svSLuaibPxXQJFLmBObTuCr0Mf1KiPopGM9NiFjiYBCbfaa2Fh6breQ6ANVTI0A==\",
            \"dev\": true
        },
        \"gauge\": {
            \"version\": \"2.7.4\",
            \"resolved\": \"https://registry.npmjs.org/gauge/-/gauge-2.7.4.tgz\",
            \"integrity\": \"sha1-LANAXHU4w51+s3sxcCLjJfsBi/c=\",
            \"dev\": true,
            \"requires\": {
                \"aproba\": \"^1.0.3\",
                \"console-control-strings\": \"^1.0.0\",
                \"has-unicode\": \"^2.0.0\",
                \"object-assign\": \"^4.1.0\",
                \"signal-exit\": \"^3.0.0\",
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\",
                \"wide-align\": \"^1.1.0\"
            }
        },
        \"gaze\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/gaze/-/gaze-1.1.3.tgz\",
            \"integrity\": \"sha512-BRdNm8hbWzFzWHERTrejLqwHDfS4GibPoq5wjTPIoJHoBtKGPg3xAFfxmM+9ztbXelxcf2hwQcaz1PtmFeue8g==\",
            \"dev\": true,
            \"requires\": {
                \"globule\": \"^1.0.0\"
            }
        },
        \"get-caller-file\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-1.0.3.tgz\",
            \"integrity\": \"sha512-3t6rVToeoZfYSGd8YoLFR2DJkiQrIiUrGcjvFX2mDw3bn6k2OtwHN0TNCLbBO+w8qTvimhDkv+LSscbJY1vE6w==\",
            \"dev\": true
        },
        \"get-stdin\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/get-stdin/-/get-stdin-4.0.1.tgz\",
            \"integrity\": \"sha1-uWjGsKBDhDJJAui/Gl3zJXmkUP4=\",
            \"dev\": true
        },
        \"get-value\": {
            \"version\": \"2.0.6\",
            \"resolved\": \"https://registry.npmjs.org/get-value/-/get-value-2.0.6.tgz\",
            \"integrity\": \"sha1-3BXKHGcjh8p2vTesCjlbogQqLCg=\",
            \"dev\": true
        },
        \"getpass\": {
            \"version\": \"0.1.7\",
            \"resolved\": \"https://registry.npmjs.org/getpass/-/getpass-0.1.7.tgz\",
            \"integrity\": \"sha1-Xv+OPmhNVprkyysSgmBOi6YhSfo=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\"
            }
        },
        \"glob\": {
            \"version\": \"7.1.6\",
            \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.6.tgz\",
            \"integrity\": \"sha512-LwaxwyZ72Lk7vZINtNNrywX0ZuLyStrdDtabefZKAY5ZGJhVtgdznluResxNmPitE0SAO+O26sWTHeKSI2wMBA==\",
            \"dev\": true,
            \"requires\": {
                \"fs.realpath\": \"^1.0.0\",
                \"inflight\": \"^1.0.4\",
                \"inherits\": \"2\",
                \"minimatch\": \"^3.0.4\",
                \"once\": \"^1.3.0\",
                \"path-is-absolute\": \"^1.0.0\"
            }
        },
        \"glob-parent\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-3.1.0.tgz\",
            \"integrity\": \"sha1-nmr2KZ2NO9K9QEMIMr0RPfkGxa4=\",
            \"dev\": true,
            \"requires\": {
                \"is-glob\": \"^3.1.0\",
                \"path-dirname\": \"^1.0.0\"
            },
            \"dependencies\": {
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"glob-stream\": {
            \"version\": \"6.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-stream/-/glob-stream-6.1.0.tgz\",
            \"integrity\": \"sha1-cEXJlBOz65SIjYOrRtC0BMx73eQ=\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"glob\": \"^7.1.1\",
                \"glob-parent\": \"^3.1.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"ordered-read-streams\": \"^1.0.0\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.1.5\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"to-absolute-glob\": \"^2.0.0\",
                \"unique-stream\": \"^2.0.2\"
            }
        },
        \"glob-watcher\": {
            \"version\": \"5.0.3\",
            \"resolved\": \"https://registry.npmjs.org/glob-watcher/-/glob-watcher-5.0.3.tgz\",
            \"integrity\": \"sha512-8tWsULNEPHKQ2MR4zXuzSmqbdyV5PtwwCaWSGQ1WwHsJ07ilNeN1JB8ntxhckbnpSHaf9dXFUHzIWvm1I13dsg==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-done\": \"^1.2.0\",
                \"chokidar\": \"^2.0.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"just-debounce\": \"^1.0.0\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"global-modules\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/global-modules/-/global-modules-1.0.0.tgz\",
            \"integrity\": \"sha512-sKzpEkf11GpOFuw0Zzjzmt4B4UZwjOcG757PPvrfhxcLFbq0wpsgpOqxpxtxFiCG4DtG93M6XRVbF2oGdev7bg==\",
            \"dev\": true,
            \"requires\": {
                \"global-prefix\": \"^1.0.1\",
                \"is-windows\": \"^1.0.1\",
                \"resolve-dir\": \"^1.0.0\"
            }
        },
        \"global-prefix\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/global-prefix/-/global-prefix-1.0.2.tgz\",
            \"integrity\": \"sha1-2/dDxsFJklk8ZVVoy2btMsASLr4=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"homedir-polyfill\": \"^1.0.1\",
                \"ini\": \"^1.3.4\",
                \"is-windows\": \"^1.0.1\",
                \"which\": \"^1.2.14\"
            }
        },
        \"globby\": {
            \"version\": \"11.0.1\",
            \"resolved\": \"https://registry.npmjs.org/globby/-/globby-11.0.1.tgz\",
            \"integrity\": \"sha512-iH9RmgwCmUJHi2z5o2l3eTtGBtXek1OYlHrbcxOYugyHLmAsZrPj43OtHThd62Buh/Vv6VyCBD2bdyWcGNQqoQ==\",
            \"dev\": true,
            \"requires\": {
                \"array-union\": \"^2.1.0\",
                \"dir-glob\": \"^3.0.1\",
                \"fast-glob\": \"^3.1.1\",
                \"ignore\": \"^5.1.4\",
                \"merge2\": \"^1.3.0\",
                \"slash\": \"^3.0.0\"
            }
        },
        \"globule\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/globule/-/globule-1.3.2.tgz\",
            \"integrity\": \"sha512-7IDTQTIu2xzXkT+6mlluidnWo+BypnbSoEVVQCGfzqnl5Ik8d3e1d4wycb8Rj9tWW+Z39uPWsdlquqiqPCd/pA==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"~7.1.1\",
                \"lodash\": \"~4.17.10\",
                \"minimatch\": \"~3.0.2\"
            }
        },
        \"glogg\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/glogg/-/glogg-1.0.2.tgz\",
            \"integrity\": \"sha512-5mwUoSuBk44Y4EshyiqcH95ZntbDdTQqA3QYSrxmzj28Ai0vXBGMH1ApSANH14j2sIRtqCEyg6PfsuP7ElOEDA==\",
            \"dev\": true,
            \"requires\": {
                \"sparkles\": \"^1.0.0\"
            }
        },
        \"graceful-fs\": {
            \"version\": \"4.2.3\",
            \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.3.tgz\",
            \"integrity\": \"sha512-a30VEBm4PEdx1dRB7MFK7BejejvCvBronbLjht+sHuGYj8PHs7M/5Z+rt5lw551vZ7yfTCj4Vuyy3mSJytDWRQ==\",
            \"dev\": true
        },
        \"gulp\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/gulp/-/gulp-4.0.2.tgz\",
            \"integrity\": \"sha512-dvEs27SCZt2ibF29xYgmnwwCYZxdxhQ/+LFWlbAW8y7jt68L/65402Lz3+CKy0Ov4rOs+NERmDq7YlZaDqUIfA==\",
            \"dev\": true,
            \"requires\": {
                \"glob-watcher\": \"^5.0.3\",
                \"gulp-cli\": \"^2.2.0\",
                \"undertaker\": \"^1.2.1\",
                \"vinyl-fs\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"gulp-cli\": {
                    \"version\": \"2.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/gulp-cli/-/gulp-cli-2.2.0.tgz\",
                    \"integrity\": \"sha512-rGs3bVYHdyJpLqR0TUBnlcZ1O5O++Zs4bA0ajm+zr3WFCfiSLjGwoCBqFs18wzN+ZxahT9DkOK5nDf26iDsWjA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-colors\": \"^1.0.1\",
                        \"archy\": \"^1.0.0\",
                        \"array-sort\": \"^1.0.0\",
                        \"color-support\": \"^1.1.3\",
                        \"concat-stream\": \"^1.6.0\",
                        \"copy-props\": \"^2.0.1\",
                        \"fancy-log\": \"^1.3.2\",
                        \"gulplog\": \"^1.0.0\",
                        \"interpret\": \"^1.1.0\",
                        \"isobject\": \"^3.0.1\",
                        \"liftoff\": \"^3.1.0\",
                        \"matchdep\": \"^2.0.0\",
                        \"mute-stdout\": \"^1.0.0\",
                        \"pretty-hrtime\": \"^1.0.0\",
                        \"replace-homedir\": \"^1.0.0\",
                        \"semver-greatest-satisfied-range\": \"^1.1.0\",
                        \"v8flags\": \"^3.0.1\",
                        \"yargs\": \"^7.1.0\"
                    }
                },
                \"yargs\": {
                    \"version\": \"7.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-7.1.0.tgz\",
                    \"integrity\": \"sha1-a6MY6xaWFyf10oT46gA+jWFU0Mg=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\",
                        \"cliui\": \"^3.2.0\",
                        \"decamelize\": \"^1.1.1\",
                        \"get-caller-file\": \"^1.0.1\",
                        \"os-locale\": \"^1.4.0\",
                        \"read-pkg-up\": \"^1.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^1.0.1\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^1.0.2\",
                        \"which-module\": \"^1.0.0\",
                        \"y18n\": \"^3.2.1\",
                        \"yargs-parser\": \"^5.0.0\"
                    }
                },
                \"yargs-parser\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-5.0.0.tgz\",
                    \"integrity\": \"sha1-J17PDX/+Bcd+ZOfIbkzZS/DhIoo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\"
                    }
                }
            }
        },
        \"gulp-autoprefixer\": {
            \"version\": \"7.0.1\",
            \"resolved\": \"https://registry.npmjs.org/gulp-autoprefixer/-/gulp-autoprefixer-7.0.1.tgz\",
            \"integrity\": \"sha512-QJGEmHw+bEt7FSqvmbAUTxbCuNLJYx4sz3ox9WouYqT/7j5FH5CQ8ZnpL1M7H5npX1bUJa7lUVY1w20jXxhOxg==\",
            \"dev\": true,
            \"requires\": {
                \"autoprefixer\": \"^9.6.1\",
                \"fancy-log\": \"^1.3.2\",
                \"plugin-error\": \"^1.0.1\",
                \"postcss\": \"^7.0.17\",
                \"through2\": \"^3.0.1\",
                \"vinyl-sourcemaps-apply\": \"^0.2.1\"
            },
            \"dependencies\": {
                \"through2\": {
                    \"version\": \"3.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/through2/-/through2-3.0.1.tgz\",
                    \"integrity\": \"sha512-M96dvTalPT3YbYLaKaCuwu+j06D/8Jfib0o/PxbVt6Amhv3dUAtW6rTV1jPgJSBG83I/e04Y6xkVdVhSRhi0ww==\",
                    \"dev\": true,
                    \"requires\": {
                        \"readable-stream\": \"2 || 3\"
                    }
                }
            }
        },
        \"gulp-clean-css\": {
            \"version\": \"4.3.0\",
            \"resolved\": \"https://registry.npmjs.org/gulp-clean-css/-/gulp-clean-css-4.3.0.tgz\",
            \"integrity\": \"sha512-mGyeT3qqFXTy61j0zOIciS4MkYziF2U594t2Vs9rUnpkEHqfu6aDITMp8xOvZcvdX61Uz3y1mVERRYmjzQF5fg==\",
            \"dev\": true,
            \"requires\": {
                \"clean-css\": \"4.2.3\",
                \"plugin-error\": \"1.0.1\",
                \"through2\": \"3.0.1\",
                \"vinyl-sourcemaps-apply\": \"0.2.1\"
            },
            \"dependencies\": {
                \"through2\": {
                    \"version\": \"3.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/through2/-/through2-3.0.1.tgz\",
                    \"integrity\": \"sha512-M96dvTalPT3YbYLaKaCuwu+j06D/8Jfib0o/PxbVt6Amhv3dUAtW6rTV1jPgJSBG83I/e04Y6xkVdVhSRhi0ww==\",
                    \"dev\": true,
                    \"requires\": {
                        \"readable-stream\": \"2 || 3\"
                    }
                }
            }
        },
        \"gulp-header\": {
            \"version\": \"2.0.9\",
            \"resolved\": \"https://registry.npmjs.org/gulp-header/-/gulp-header-2.0.9.tgz\",
            \"integrity\": \"sha512-LMGiBx+qH8giwrOuuZXSGvswcIUh0OiioNkUpLhNyvaC6/Ga8X6cfAeme2L5PqsbXMhL8o8b/OmVqIQdxprhcQ==\",
            \"dev\": true,
            \"requires\": {
                \"concat-with-sourcemaps\": \"^1.1.0\",
                \"lodash.template\": \"^4.5.0\",
                \"map-stream\": \"0.0.7\",
                \"through2\": \"^2.0.0\"
            }
        },
        \"gulp-plumber\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/gulp-plumber/-/gulp-plumber-1.2.1.tgz\",
            \"integrity\": \"sha512-mctAi9msEAG7XzW5ytDVZ9PxWMzzi1pS2rBH7lA095DhMa6KEXjm+St0GOCc567pJKJ/oCvosVAZEpAey0q2eQ==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^1.1.3\",
                \"fancy-log\": \"^1.3.2\",
                \"plugin-error\": \"^0.1.2\",
                \"through2\": \"^2.0.3\"
            },
            \"dependencies\": {
                \"arr-diff\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-1.1.0.tgz\",
                    \"integrity\": \"sha1-aHwydYFjWI/vfeezb6vklesaOZo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"arr-flatten\": \"^1.0.1\",
                        \"array-slice\": \"^0.2.3\"
                    }
                },
                \"arr-union\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-2.1.0.tgz\",
                    \"integrity\": \"sha1-IPnqtexw9cfSFbEHexw5Fh0pLH0=\",
                    \"dev\": true
                },
                \"array-slice\": {
                    \"version\": \"0.2.3\",
                    \"resolved\": \"https://registry.npmjs.org/array-slice/-/array-slice-0.2.3.tgz\",
                    \"integrity\": \"sha1-3Tz7gO15c6dRF82sabC5nshhhvU=\",
                    \"dev\": true
                },
                \"extend-shallow\": {
                    \"version\": \"1.1.4\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-1.1.4.tgz\",
                    \"integrity\": \"sha1-Gda/lN/AnXa6cR85uHLSH/TdkHE=\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^1.1.0\"
                    }
                },
                \"kind-of\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-1.1.0.tgz\",
                    \"integrity\": \"sha1-FAo9LUGjbS78+pN3tiwk+ElaXEQ=\",
                    \"dev\": true
                },
                \"plugin-error\": {
                    \"version\": \"0.1.2\",
                    \"resolved\": \"https://registry.npmjs.org/plugin-error/-/plugin-error-0.1.2.tgz\",
                    \"integrity\": \"sha1-O5uzM1zPAPQl4HQ34ZJ2ln2kes4=\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-cyan\": \"^0.1.1\",
                        \"ansi-red\": \"^0.1.1\",
                        \"arr-diff\": \"^1.0.1\",
                        \"arr-union\": \"^2.0.1\",
                        \"extend-shallow\": \"^1.1.2\"
                    }
                }
            }
        },
        \"gulp-rename\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/gulp-rename/-/gulp-rename-2.0.0.tgz\",
            \"integrity\": \"sha512-97Vba4KBzbYmR5VBs9mWmK+HwIf5mj+/zioxfZhOKeXtx5ZjBk57KFlePf5nxq9QsTtFl0ejnHE3zTC9MHXqyQ==\",
            \"dev\": true
        },
        \"gulp-sass\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/gulp-sass/-/gulp-sass-4.1.0.tgz\",
            \"integrity\": \"sha512-xIiwp9nkBLcJDpmYHbEHdoWZv+j+WtYaKD6Zil/67F3nrAaZtWYN5mDwerdo7EvcdBenSAj7Xb2hx2DqURLGdA==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^2.3.0\",
                \"lodash\": \"^4.17.11\",
                \"node-sass\": \"^4.8.3\",
                \"plugin-error\": \"^1.0.1\",
                \"replace-ext\": \"^1.0.0\",
                \"strip-ansi\": \"^4.0.0\",
                \"through2\": \"^2.0.0\",
                \"vinyl-sourcemaps-apply\": \"^0.2.0\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-3.0.0.tgz\",
                    \"integrity\": \"sha1-7QMXwyIGT3lGbAKWa922Bas32Zg=\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"chalk\": {
                    \"version\": \"2.4.2\",
                    \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
                    \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.1\",
                        \"escape-string-regexp\": \"^1.0.5\",
                        \"supports-color\": \"^5.3.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-4.0.0.tgz\",
                    \"integrity\": \"sha1-qEeQIusaw2iocTibY1JixQXuNo8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^3.0.0\"
                    }
                },
                \"supports-color\": {
                    \"version\": \"5.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
                    \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
                    \"dev\": true,
                    \"requires\": {
                        \"has-flag\": \"^3.0.0\"
                    }
                }
            }
        },
        \"gulp-uglify\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/gulp-uglify/-/gulp-uglify-3.0.2.tgz\",
            \"integrity\": \"sha512-gk1dhB74AkV2kzqPMQBLA3jPoIAPd/nlNzP2XMDSG8XZrqnlCiDGAqC+rZOumzFvB5zOphlFh6yr3lgcAb/OOg==\",
            \"dev\": true,
            \"requires\": {
                \"array-each\": \"^1.0.1\",
                \"extend-shallow\": \"^3.0.2\",
                \"gulplog\": \"^1.0.0\",
                \"has-gulplog\": \"^0.1.0\",
                \"isobject\": \"^3.0.1\",
                \"make-error-cause\": \"^1.1.1\",
                \"safe-buffer\": \"^5.1.2\",
                \"through2\": \"^2.0.0\",
                \"uglify-js\": \"^3.0.5\",
                \"vinyl-sourcemaps-apply\": \"^0.2.0\"
            }
        },
        \"gulplog\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/gulplog/-/gulplog-1.0.0.tgz\",
            \"integrity\": \"sha1-4oxNRdBey77YGDY86PnFkmIp/+U=\",
            \"dev\": true,
            \"requires\": {
                \"glogg\": \"^1.0.0\"
            }
        },
        \"har-schema\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/har-schema/-/har-schema-2.0.0.tgz\",
            \"integrity\": \"sha1-qUwiJOvKwEeCoNkDVSHyRzW37JI=\",
            \"dev\": true
        },
        \"har-validator\": {
            \"version\": \"5.1.5\",
            \"resolved\": \"https://registry.npmjs.org/har-validator/-/har-validator-5.1.5.tgz\",
            \"integrity\": \"sha512-nmT2T0lljbxdQZfspsno9hgrG3Uir6Ks5afism62poxqBM6sDnMEuPmzTq8XN0OEwqKLLdh1jQI3qyE66Nzb3w==\",
            \"dev\": true,
            \"requires\": {
                \"ajv\": \"^6.12.3\",
                \"har-schema\": \"^2.0.0\"
            }
        },
        \"has-ansi\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-ansi/-/has-ansi-2.0.0.tgz\",
            \"integrity\": \"sha1-NPUEnOHs3ysGSa8+8k5F7TVBbZE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"has-binary2\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/has-binary2/-/has-binary2-1.0.3.tgz\",
            \"integrity\": \"sha512-G1LWKhDSvhGeAQ8mPVQlqNcOB2sJdwATtZKl2pDKKHfpf/rYj24lkinxf69blJbnsvtqqNU+L3SL50vzZhXOnw==\",
            \"dev\": true,
            \"requires\": {
                \"isarray\": \"2.0.1\"
            }
        },
        \"has-cors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/has-cors/-/has-cors-1.1.0.tgz\",
            \"integrity\": \"sha1-XkdHk/fqmEPRu5nCPu9J/xJv/zk=\",
            \"dev\": true
        },
        \"has-flag\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-3.0.0.tgz\",
            \"integrity\": \"sha1-tdRU3CGZriJWmfNGfloH87lVuv0=\",
            \"dev\": true
        },
        \"has-gulplog\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/has-gulplog/-/has-gulplog-0.1.0.tgz\",
            \"integrity\": \"sha1-ZBTIKRNpfaUVkDl9r7EvIpZ4Ec4=\",
            \"dev\": true,
            \"requires\": {
                \"sparkles\": \"^1.0.0\"
            }
        },
        \"has-symbols\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.1.tgz\",
            \"integrity\": \"sha512-PLcsoqu++dmEIZB+6totNFKq/7Do+Z0u4oT0zKOJNl3lYK6vGwwu2hjHs+68OEZbTjiUE9bgOABXbP/GvrS0Kg==\",
            \"dev\": true
        },
        \"has-unicode\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/has-unicode/-/has-unicode-2.0.1.tgz\",
            \"integrity\": \"sha1-4Ob+aijPUROIVeCG0Wkedx3iqLk=\",
            \"dev\": true
        },
        \"has-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-1.0.0.tgz\",
            \"integrity\": \"sha1-GLKB2lhbHFxR3vJMkw7SmgvmsXc=\",
            \"dev\": true,
            \"requires\": {
                \"get-value\": \"^2.0.6\",
                \"has-values\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"has-values\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-1.0.0.tgz\",
            \"integrity\": \"sha1-lbC2P+whRmGab+V/51Yo1aOe/k8=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"kind-of\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-4.0.0.tgz\",
                    \"integrity\": \"sha1-IIE989cSkosgc3hpGkUGb65y3Vc=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"homedir-polyfill\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
            \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
            \"dev\": true,
            \"requires\": {
                \"parse-passwd\": \"^1.0.0\"
            }
        },
        \"hosted-git-info\": {
            \"version\": \"2.8.5\",
            \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.8.5.tgz\",
            \"integrity\": \"sha512-kssjab8CvdXfcXMXVcvsXum4Hwdq9XGtRD3TteMEvEbq0LXyiNQr6AprqKqfeaDXze7SxWvRxdpwE6ku7ikLkg==\",
            \"dev\": true
        },
        \"http-errors\": {
            \"version\": \"1.7.3\",
            \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.7.3.tgz\",
            \"integrity\": \"sha512-ZTTX0MWrsQ2ZAhA1cejAwDLycFsd7I7nVtnkT3Ol0aqodaKW+0CTZDQ1uBv5whptCnc8e8HeRRJxRs0kmm/Qfw==\",
            \"dev\": true,
            \"requires\": {
                \"depd\": \"~1.1.2\",
                \"inherits\": \"2.0.4\",
                \"setprototypeof\": \"1.1.1\",
                \"statuses\": \">= 1.5.0 < 2\",
                \"toidentifier\": \"1.0.0\"
            },
            \"dependencies\": {
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"http-proxy\": {
            \"version\": \"1.18.1\",
            \"resolved\": \"https://registry.npmjs.org/http-proxy/-/http-proxy-1.18.1.tgz\",
            \"integrity\": \"sha512-7mz/721AbnJwIVbnaSv1Cz3Am0ZLT/UBwkC92VlxhXv/k/BBQfM2fXElQNC27BVGr0uwUpplYPQM9LnaBMR5NQ==\",
            \"dev\": true,
            \"requires\": {
                \"eventemitter3\": \"^4.0.0\",
                \"follow-redirects\": \"^1.0.0\",
                \"requires-port\": \"^1.0.0\"
            }
        },
        \"http-signature\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/http-signature/-/http-signature-1.2.0.tgz\",
            \"integrity\": \"sha1-muzZJRFHcvPZW2WmCruPfBj7rOE=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\",
                \"jsprim\": \"^1.2.2\",
                \"sshpk\": \"^1.7.0\"
            }
        },
        \"iconv-lite\": {
            \"version\": \"0.4.24\",
            \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.4.24.tgz\",
            \"integrity\": \"sha512-v3MXnZAcvnywkTUEZomIActle7RXXeedOR31wwl7VlyoXO4Qi9arvSenNQWne1TcRwhCL1HwLI21bEqdpj8/rA==\",
            \"dev\": true,
            \"requires\": {
                \"safer-buffer\": \">= 2.1.2 < 3\"
            }
        },
        \"ignore\": {
            \"version\": \"5.1.8\",
            \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-5.1.8.tgz\",
            \"integrity\": \"sha512-BMpfD7PpiETpBl/A6S498BaIJ6Y/ABT93ETbby2fP00v4EbvPBXWEoaR1UBPKs3iR53pJY7EtZk5KACI57i1Uw==\",
            \"dev\": true
        },
        \"immutable\": {
            \"version\": \"3.8.2\",
            \"resolved\": \"https://registry.npmjs.org/immutable/-/immutable-3.8.2.tgz\",
            \"integrity\": \"sha1-wkOZUUVbs5kT2vKBN28VMOEErfM=\",
            \"dev\": true
        },
        \"in-publish\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/in-publish/-/in-publish-2.0.1.tgz\",
            \"integrity\": \"sha512-oDM0kUSNFC31ShNxHKUyfZKy8ZeXZBWMjMdZHKLOk13uvT27VTL/QzRGfRUcevJhpkZAvlhPYuXkF7eNWrtyxQ==\",
            \"dev\": true
        },
        \"indent-string\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-4.0.0.tgz\",
            \"integrity\": \"sha512-EdDDZu4A2OyIK7Lr/2zG+w5jmbuk1DVBnEwREQvBzspBJkCEbRa8GxU1lghYcaGJCnRWibjDXlq779X1/y5xwg==\",
            \"dev\": true
        },
        \"indexof\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/indexof/-/indexof-0.0.1.tgz\",
            \"integrity\": \"sha1-gtwzbSMrkGIXnQWrMpOmYFn9Q10=\",
            \"dev\": true
        },
        \"inflight\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/inflight/-/inflight-1.0.6.tgz\",
            \"integrity\": \"sha1-Sb1jMdfQLQwJvJEKEHW6gWW1bfk=\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.0\",
                \"wrappy\": \"1\"
            }
        },
        \"inherits\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
            \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
            \"dev\": true
        },
        \"ini\": {
            \"version\": \"1.3.5\",
            \"resolved\": \"https://registry.npmjs.org/ini/-/ini-1.3.5.tgz\",
            \"integrity\": \"sha512-RZY5huIKCMRWDUqZlEi72f/lmXKMvuszcMBduliQ3nnWbx9X/ZBQO7DijMEYS9EhHBb2qacRUMtC7svLwe0lcw==\",
            \"dev\": true
        },
        \"interpret\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-1.2.0.tgz\",
            \"integrity\": \"sha512-mT34yGKMNceBQUoVn7iCDKDntA7SC6gycMAWzGx1z/CMCTV7b2AAtXlo3nRyHZ1FelRkQbQjprHSYGwzLtkVbw==\",
            \"dev\": true
        },
        \"invert-kv\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/invert-kv/-/invert-kv-1.0.0.tgz\",
            \"integrity\": \"sha1-EEqOSqym09jNFXqO+L+rLXo//bY=\",
            \"dev\": true
        },
        \"is-absolute\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-absolute/-/is-absolute-1.0.0.tgz\",
            \"integrity\": \"sha512-dOWoqflvcydARa360Gvv18DZ/gRuHKi2NU/wU5X1ZFzdYfH29nkiNZsF3mp4OJ3H4yo9Mx8A/uAGNzpzPN3yBA==\",
            \"dev\": true,
            \"requires\": {
                \"is-relative\": \"^1.0.0\",
                \"is-windows\": \"^1.0.1\"
            }
        },
        \"is-accessor-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha1-qeEss66Nh2cn7u84Q/igiXtcmNY=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-arrayish\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-arrayish/-/is-arrayish-0.2.1.tgz\",
            \"integrity\": \"sha1-d8mYQFJ6qOyxqLppe4BkWnqSap0=\",
            \"dev\": true
        },
        \"is-binary-path\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-1.0.1.tgz\",
            \"integrity\": \"sha1-dfFmQrSA8YenEcgUFh/TpKdlWJg=\",
            \"dev\": true,
            \"requires\": {
                \"binary-extensions\": \"^1.0.0\"
            }
        },
        \"is-buffer\": {
            \"version\": \"1.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-1.1.6.tgz\",
            \"integrity\": \"sha512-NcdALwpXkTm5Zvvbk7owOUSvVvBKDgKP5/ewfXEznmQFfs4ZRmanOeKBTjRVjka3QFoN6XJ+9F3USqfHqTaU5w==\",
            \"dev\": true
        },
        \"is-data-descriptor\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-0.1.4.tgz\",
            \"integrity\": \"sha1-C17mSDiOLIYCgueT8YVv7D8wG1Y=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha512-avDYr0SB3DwO9zsMov0gKCESFYqCnE4hq/4z3TdUlukEy5t9C0YRq7HLrsN52NAcqXKaepeCD0n+B0arnVG3Hg==\",
            \"dev\": true,
            \"requires\": {
                \"is-accessor-descriptor\": \"^0.1.6\",
                \"is-data-descriptor\": \"^0.1.4\",
                \"kind-of\": \"^5.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"is-extendable\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
            \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
            \"dev\": true
        },
        \"is-extglob\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
            \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
            \"dev\": true
        },
        \"is-finite\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-finite/-/is-finite-1.1.0.tgz\",
            \"integrity\": \"sha512-cdyMtqX/BOqqNBBiKlIVkytNHm49MtMlYyn1zxzvJKWmFMlGzm+ry5BBfYyeY9YmNKbRSo/o7OX9w9ale0wg3w==\",
            \"dev\": true
        },
        \"is-fullwidth-code-point\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-1.0.0.tgz\",
            \"integrity\": \"sha1-754xOG8DGn8NZDr4L95QxFfvAMs=\",
            \"dev\": true,
            \"requires\": {
                \"number-is-nan\": \"^1.0.0\"
            }
        },
        \"is-glob\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-4.0.1.tgz\",
            \"integrity\": \"sha512-5G0tKtBTFImOqDnLB2hG6Bp2qcKEFduo4tZu9MT/H6NQv/ghhy30o55ufafxJ/LdH79LLs2Kfrn85TLKyA7BUg==\",
            \"dev\": true,
            \"requires\": {
                \"is-extglob\": \"^2.1.1\"
            }
        },
        \"is-negated-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-negated-glob/-/is-negated-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-aRC8pdqMleeEtXUbl2z1oQ/uNtI=\",
            \"dev\": true
        },
        \"is-number\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-3.0.0.tgz\",
            \"integrity\": \"sha1-JP1iAaR4LPUFYcgQJ2r8fRLXEZU=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-number-like\": {
            \"version\": \"1.0.8\",
            \"resolved\": \"https://registry.npmjs.org/is-number-like/-/is-number-like-1.0.8.tgz\",
            \"integrity\": \"sha512-6rZi3ezCyFcn5L71ywzz2bS5b2Igl1En3eTlZlvKjpz1n3IZLAYMbKYAIQgFmEu0GENg92ziU/faEOA/aixjbA==\",
            \"dev\": true,
            \"requires\": {
                \"lodash.isfinite\": \"^3.3.2\"
            }
        },
        \"is-path-cwd\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-cwd/-/is-path-cwd-2.2.0.tgz\",
            \"integrity\": \"sha512-w942bTcih8fdJPJmQHFzkS76NEP8Kzzvmw92cXsazb8intwLqPibPPdXf4ANdKV3rYMuuQYGIWtvz9JilB3NFQ==\",
            \"dev\": true
        },
        \"is-path-inside\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-3.0.2.tgz\",
            \"integrity\": \"sha512-/2UGPSgmtqwo1ktx8NDHjuPwZWmHhO+gj0f93EkhLB5RgW9RZevWYYlIkS6zePc6U2WpOdQYIwHe9YC4DWEBVg==\",
            \"dev\": true
        },
        \"is-plain-object\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/is-plain-object/-/is-plain-object-2.0.4.tgz\",
            \"integrity\": \"sha512-h5PpgXkWitc38BBMYawTYMWJHFZJVnBquFE57xFpjB8pJFiF6gZ+bU+WyI/yqXiFR5mdLsgYNaPe8uao6Uv9Og==\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"is-relative\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-relative/-/is-relative-1.0.0.tgz\",
            \"integrity\": \"sha512-Kw/ReK0iqwKeu0MITLFuj0jbPAmEiOsIwyIXvvbfa6QfmN9pkD1M+8pdk7Rl/dTKbH34/XBFMbgD4iMJhLQbGA==\",
            \"dev\": true,
            \"requires\": {
                \"is-unc-path\": \"^1.0.0\"
            }
        },
        \"is-typedarray\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-typedarray/-/is-typedarray-1.0.0.tgz\",
            \"integrity\": \"sha1-5HnICFjfDBsR3dppQPlgEfzaSpo=\",
            \"dev\": true
        },
        \"is-unc-path\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-unc-path/-/is-unc-path-1.0.0.tgz\",
            \"integrity\": \"sha512-mrGpVd0fs7WWLfVsStvgF6iEJnbjDFZh9/emhRDcGWTduTfNHd9CHeUwH3gYIjdbwo4On6hunkztwOaAw0yllQ==\",
            \"dev\": true,
            \"requires\": {
                \"unc-path-regex\": \"^0.1.2\"
            }
        },
        \"is-utf8\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-utf8/-/is-utf8-0.2.1.tgz\",
            \"integrity\": \"sha1-Sw2hRCEE0bM2NA6AeX6GXPOffXI=\",
            \"dev\": true
        },
        \"is-valid-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-valid-glob/-/is-valid-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-Kb8+/3Ab4tTTFdusw5vDn+j2Aao=\",
            \"dev\": true
        },
        \"is-windows\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/is-windows/-/is-windows-1.0.2.tgz\",
            \"integrity\": \"sha512-eXK1UInq2bPmjyX6e3VHIzMLobc4J94i4AWn+Hpq3OU5KkrRC96OAcR3PRJ/pGu6m8TRnBHP9dkXQVsT/COVIA==\",
            \"dev\": true
        },
        \"is-wsl\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-wsl/-/is-wsl-1.1.0.tgz\",
            \"integrity\": \"sha1-HxbkqiKwTRM2tmGIpmrzxgDDpm0=\",
            \"dev\": true
        },
        \"isarray\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.1.tgz\",
            \"integrity\": \"sha1-o32U7ZzaLVmGXJ92/llu4fM4dB4=\",
            \"dev\": true
        },
        \"isexe\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/isexe/-/isexe-2.0.0.tgz\",
            \"integrity\": \"sha1-6PvzdNxVb/iUehDcsFctYz8s+hA=\",
            \"dev\": true
        },
        \"isobject\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-3.0.1.tgz\",
            \"integrity\": \"sha1-TkMekrEalzFjaqH5yNHMvP2reN8=\",
            \"dev\": true
        },
        \"isstream\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/isstream/-/isstream-0.1.2.tgz\",
            \"integrity\": \"sha1-R+Y/evVa+m+S4VAOaQ64uFKcCZo=\",
            \"dev\": true
        },
        \"jquery\": {
            \"version\": \"3.5.1\",
            \"resolved\": \"https://registry.npmjs.org/jquery/-/jquery-3.5.1.tgz\",
            \"integrity\": \"sha512-XwIBPqcMn57FxfT+Go5pzySnm4KWkT1Tv7gjrpT1srtf8Weynl6R273VJ5GjkRb51IzMp5nbaPjJXMWeju2MKg==\"
        },
        \"jquery.easing\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/jquery.easing/-/jquery.easing-1.4.1.tgz\",
            \"integrity\": \"sha1-R5gsWDa9dY/UhJSSPEoQHvbpPjs=\"
        },
        \"js-base64\": {
            \"version\": \"2.6.4\",
            \"resolved\": \"https://registry.npmjs.org/js-base64/-/js-base64-2.6.4.tgz\",
            \"integrity\": \"sha512-pZe//GGmwJndub7ZghVHz7vjb2LgC1m8B07Au3eYqeqv9emhESByMXxaEgkUkEqJe87oBbSniGYoQNIBklc7IQ==\",
            \"dev\": true
        },
        \"jsbn\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/jsbn/-/jsbn-0.1.1.tgz\",
            \"integrity\": \"sha1-peZUwuWi3rXyAdls77yoDA7y9RM=\",
            \"dev\": true
        },
        \"json-schema\": {
            \"version\": \"0.2.3\",
            \"resolved\": \"https://registry.npmjs.org/json-schema/-/json-schema-0.2.3.tgz\",
            \"integrity\": \"sha1-tIDIkuWaLwWVTOcnvT8qTogvnhM=\",
            \"dev\": true
        },
        \"json-schema-traverse\": {
            \"version\": \"0.4.1\",
            \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-0.4.1.tgz\",
            \"integrity\": \"sha512-xbbCH5dCYU5T8LcEhhuh7HJ88HXuW3qsI3Y0zOZFKfZEHcpWiHU/Jxzk629Brsab/mMiHQti9wMP+845RPe3Vg==\",
            \"dev\": true
        },
        \"json-stable-stringify-without-jsonify\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/json-stable-stringify-without-jsonify/-/json-stable-stringify-without-jsonify-1.0.1.tgz\",
            \"integrity\": \"sha1-nbe1lJatPzz+8wp1FC0tkwrXJlE=\",
            \"dev\": true
        },
        \"json-stringify-safe\": {
            \"version\": \"5.0.1\",
            \"resolved\": \"https://registry.npmjs.org/json-stringify-safe/-/json-stringify-safe-5.0.1.tgz\",
            \"integrity\": \"sha1-Epai1Y/UXxmg9s4B1lcB4sc1tus=\",
            \"dev\": true
        },
        \"jsonfile\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/jsonfile/-/jsonfile-3.0.1.tgz\",
            \"integrity\": \"sha1-pezG9l9T9mLEQVx2daAzHQmS7GY=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.6\"
            }
        },
        \"jsprim\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/jsprim/-/jsprim-1.4.1.tgz\",
            \"integrity\": \"sha1-MT5mvB5cwG5Di8G3SZwuXFastqI=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"1.0.0\",
                \"extsprintf\": \"1.3.0\",
                \"json-schema\": \"0.2.3\",
                \"verror\": \"1.10.0\"
            }
        },
        \"just-debounce\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/just-debounce/-/just-debounce-1.0.0.tgz\",
            \"integrity\": \"sha1-h/zPrv/AtozRnVX2cilD+SnqNeo=\",
            \"dev\": true
        },
        \"kind-of\": {
            \"version\": \"6.0.3\",
            \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.3.tgz\",
            \"integrity\": \"sha512-dcS1ul+9tmeD95T+x28/ehLgd9mENa3LsvDTtzm3vyBEO7RPptvAD+t44WVXaUjTBRcrpFeFlC8WCruUR456hw==\",
            \"dev\": true
        },
        \"last-run\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/last-run/-/last-run-1.1.1.tgz\",
            \"integrity\": \"sha1-RblpQsF7HHnHchmCWbqUO+v4yls=\",
            \"dev\": true,
            \"requires\": {
                \"default-resolution\": \"^2.0.0\",
                \"es6-weak-map\": \"^2.0.1\"
            }
        },
        \"lazystream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lazystream/-/lazystream-1.0.0.tgz\",
            \"integrity\": \"sha1-9plf4PggOS9hOWvolGJAe7dxaOQ=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.5\"
            }
        },
        \"lcid\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lcid/-/lcid-1.0.0.tgz\",
            \"integrity\": \"sha1-MIrMr6C8SDo4Z7S28rlQYlHRuDU=\",
            \"dev\": true,
            \"requires\": {
                \"invert-kv\": \"^1.0.0\"
            }
        },
        \"lead\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lead/-/lead-1.0.0.tgz\",
            \"integrity\": \"sha1-bxT5mje+Op3XhPVJVpDlkDRm7kI=\",
            \"dev\": true,
            \"requires\": {
                \"flush-write-stream\": \"^1.0.2\"
            }
        },
        \"liftoff\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/liftoff/-/liftoff-3.1.0.tgz\",
            \"integrity\": \"sha512-DlIPlJUkCV0Ips2zf2pJP0unEoT1kwYhiiPUGF3s/jtxTCjziNLoiVVh+jqWOWeFi6mmwQ5fNxvAUyPad4Dfog==\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"findup-sync\": \"^3.0.0\",
                \"fined\": \"^1.0.1\",
                \"flagged-respawn\": \"^1.0.0\",
                \"is-plain-object\": \"^2.0.4\",
                \"object.map\": \"^1.0.0\",
                \"rechoir\": \"^0.6.2\",
                \"resolve\": \"^1.1.7\"
            }
        },
        \"limiter\": {
            \"version\": \"1.1.5\",
            \"resolved\": \"https://registry.npmjs.org/limiter/-/limiter-1.1.5.tgz\",
            \"integrity\": \"sha512-FWWMIEOxz3GwUI4Ts/IvgVy6LPvoMPgjMdQ185nN6psJyBJ4yOpzqm695/h5umdLJg2vW3GR5iG11MAkR2AzJA==\",
            \"dev\": true
        },
        \"load-json-file\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/load-json-file/-/load-json-file-1.1.0.tgz\",
            \"integrity\": \"sha1-lWkFcI1YtLq0wiYbBPWfMcmTdMA=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"parse-json\": \"^2.2.0\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\",
                \"strip-bom\": \"^2.0.0\"
            }
        },
        \"localtunnel\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/localtunnel/-/localtunnel-2.0.0.tgz\",
            \"integrity\": \"sha512-g6E0aLgYYDvQDxIjIXkgJo2+pHj3sGg4Wz/XP3h2KtZnRsWPbOQY+hw1H8Z91jep998fkcVE9l+kghO+97vllg==\",
            \"dev\": true,
            \"requires\": {
                \"axios\": \"0.19.0\",
                \"debug\": \"4.1.1\",
                \"openurl\": \"1.1.1\",
                \"yargs\": \"13.3.0\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.0.tgz\",
                    \"integrity\": \"sha512-1apePfXM1UOSqw0o9IiFAovVz9M5S1Dg+4TrDwfMewQ6p/rmMueb7tWZjQ1rx4Loy1ArBggoqGpfqqdI4rondg==\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"cliui\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-5.0.0.tgz\",
                    \"integrity\": \"sha512-PYeGSEmmHM6zvoef2w8TPzlrnNpXIjTipYK780YswmIP9vjxmd6Y2a3CB2Ks6/AU8NHjZugXvo8w3oWM2qnwXA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"string-width\": \"^3.1.0\",
                        \"strip-ansi\": \"^5.2.0\",
                        \"wrap-ansi\": \"^5.1.0\"
                    }
                },
                \"debug\": {
                    \"version\": \"4.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.1.1.tgz\",
                    \"integrity\": \"sha512-pYAIzeRo8J6KPEaJ0VWOh5Pzkbw/RetuzehGM7QRRX5he4fPHx2rdKMB256ehJCkX+XRQm16eZLqLNS8RSZXZw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"^2.1.1\"
                    }
                },
                \"find-up\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
                    \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"locate-path\": \"^3.0.0\"
                    }
                },
                \"get-caller-file\": {
                    \"version\": \"2.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
                    \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
                    \"dev\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-2.0.0.tgz\",
                    \"integrity\": \"sha1-o7MKXE8ZkYMWeqq5O+764937ZU8=\",
                    \"dev\": true
                },
                \"ms\": {
                    \"version\": \"2.1.2\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
                    \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
                    \"dev\": true
                },
                \"require-main-filename\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
                    \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
                    \"dev\": true
                },
                \"string-width\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-3.1.0.tgz\",
                    \"integrity\": \"sha512-vafcv6KjVZKSgz06oM/H6GDBrAtz8vdhQakGjFIvNrHA6y3HCF1CInLy+QLq8dTJPQ1b+KDUqDFctkdRW44e1w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"emoji-regex\": \"^7.0.1\",
                        \"is-fullwidth-code-point\": \"^2.0.0\",
                        \"strip-ansi\": \"^5.1.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"5.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
                    \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^4.1.0\"
                    }
                },
                \"which-module\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
                    \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
                    \"dev\": true
                },
                \"wrap-ansi\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-5.1.0.tgz\",
                    \"integrity\": \"sha512-QC1/iN/2/RPVJ5jYK8BGttj5z83LmSKmvbvrXPNCLZSEb32KKVDJDl/MOt2N01qU2H/FkzEa9PKto1BqDjtd7Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.0\",
                        \"string-width\": \"^3.0.0\",
                        \"strip-ansi\": \"^5.0.0\"
                    }
                },
                \"y18n\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.0.tgz\",
                    \"integrity\": \"sha512-r9S/ZyXu/Xu9q1tYlpsLIsa3EeLXXk0VwlxqTcFRfg9EhMW+17kbt9G0NrgCmhGb5vT2hyhJZLfDGx+7+5Uj/w==\",
                    \"dev\": true
                },
                \"yargs\": {
                    \"version\": \"13.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-13.3.0.tgz\",
                    \"integrity\": \"sha512-2eehun/8ALW8TLoIl7MVaRUrg+yCnenu8B4kBlRxj3GJGDKU1Og7sMXPNm1BYyM1DOJmTZ4YeN/Nwxv+8XJsUA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"cliui\": \"^5.0.0\",
                        \"find-up\": \"^3.0.0\",
                        \"get-caller-file\": \"^2.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^2.0.0\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^3.0.0\",
                        \"which-module\": \"^2.0.0\",
                        \"y18n\": \"^4.0.0\",
                        \"yargs-parser\": \"^13.1.1\"
                    }
                }
            }
        },
        \"locate-path\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-3.0.0.tgz\",
            \"integrity\": \"sha512-7AO748wWnIhNqAuaty2ZWHkQHRSNfPVIsPIfwEOWO22AmaoVrWavlOcMR5nzTLNYvp36X220/maaRsrec1G65A==\",
            \"dev\": true,
            \"requires\": {
                \"p-locate\": \"^3.0.0\",
                \"path-exists\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"path-exists\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-3.0.0.tgz\",
                    \"integrity\": \"sha1-zg6+ql94yxiSXqfYENe1mwEP1RU=\",
                    \"dev\": true
                }
            }
        },
        \"lodash\": {
            \"version\": \"4.17.20\",
            \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.20.tgz\",
            \"integrity\": \"sha512-PlhdFcillOINfeV7Ni6oF1TAEayyZBoZ8bcshTHqOYJYlrqzRK5hagpagky5o4HfCzzd1TRkXPMFq6cKk9rGmA==\",
            \"dev\": true
        },
        \"lodash._reinterpolate\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lodash._reinterpolate/-/lodash._reinterpolate-3.0.0.tgz\",
            \"integrity\": \"sha1-DM8tiRZq8Ds2Y8eWU4t1rG4RTZ0=\",
            \"dev\": true
        },
        \"lodash.isfinite\": {
            \"version\": \"3.3.2\",
            \"resolved\": \"https://registry.npmjs.org/lodash.isfinite/-/lodash.isfinite-3.3.2.tgz\",
            \"integrity\": \"sha1-+4m2WpqAKBgz8LdHizpRBPiY67M=\",
            \"dev\": true
        },
        \"lodash.template\": {
            \"version\": \"4.5.0\",
            \"resolved\": \"https://registry.npmjs.org/lodash.template/-/lodash.template-4.5.0.tgz\",
            \"integrity\": \"sha512-84vYFxIkmidUiFxidA/KjjH9pAycqW+h980j7Fuz5qxRtO9pgB7MDFTdys1N7A5mcucRiDyEq4fusljItR1T/A==\",
            \"dev\": true,
            \"requires\": {
                \"lodash._reinterpolate\": \"^3.0.0\",
                \"lodash.templatesettings\": \"^4.0.0\"
            }
        },
        \"lodash.templatesettings\": {
            \"version\": \"4.2.0\",
            \"resolved\": \"https://registry.npmjs.org/lodash.templatesettings/-/lodash.templatesettings-4.2.0.tgz\",
            \"integrity\": \"sha512-stgLz+i3Aa9mZgnjr/O+v9ruKZsPsndy7qPZOchbqk2cnTU1ZaldKK+v7m54WoKIyxiuMZTKT2H81F8BeAc3ZQ==\",
            \"dev\": true,
            \"requires\": {
                \"lodash._reinterpolate\": \"^3.0.0\"
            }
        },
        \"loud-rejection\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/loud-rejection/-/loud-rejection-1.6.0.tgz\",
            \"integrity\": \"sha1-W0b4AUft7leIcPCG0Eghz5mOVR8=\",
            \"dev\": true,
            \"requires\": {
                \"currently-unhandled\": \"^0.4.1\",
                \"signal-exit\": \"^3.0.0\"
            }
        },
        \"lru-cache\": {
            \"version\": \"4.1.5\",
            \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-4.1.5.tgz\",
            \"integrity\": \"sha512-sWZlbEP2OsHNkXrMl5GYk/jKk70MBng6UU4YI/qGDYbgf6YbP4EvmqISbXCoJiRKs+1bSpFHVgQxvJ17F2li5g==\",
            \"dev\": true,
            \"requires\": {
                \"pseudomap\": \"^1.0.2\",
                \"yallist\": \"^2.1.2\"
            }
        },
        \"make-error\": {
            \"version\": \"1.3.5\",
            \"resolved\": \"https://registry.npmjs.org/make-error/-/make-error-1.3.5.tgz\",
            \"integrity\": \"sha512-c3sIjNUow0+8swNwVpqoH4YCShKNFkMaw6oH1mNS2haDZQqkeZFlHS3dhoeEbKKmJB4vXpJucU6oH75aDYeE9g==\",
            \"dev\": true
        },
        \"make-error-cause\": {
            \"version\": \"1.2.2\",
            \"resolved\": \"https://registry.npmjs.org/make-error-cause/-/make-error-cause-1.2.2.tgz\",
            \"integrity\": \"sha1-3wOI/NCzeBbf8KX7gQiTl3fcvJ0=\",
            \"dev\": true,
            \"requires\": {
                \"make-error\": \"^1.2.0\"
            }
        },
        \"make-iterator\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/make-iterator/-/make-iterator-1.0.1.tgz\",
            \"integrity\": \"sha512-pxiuXh0iVEq7VM7KMIhs5gxsfxCux2URptUQaXo4iZZJxBAzTPOLE2BumO5dbfVYq/hBJFBR/a1mFDmOx5AGmw==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^6.0.2\"
            }
        },
        \"map-cache\": {
            \"version\": \"0.2.2\",
            \"resolved\": \"https://registry.npmjs.org/map-cache/-/map-cache-0.2.2.tgz\",
            \"integrity\": \"sha1-wyq9C9ZSXZsFFkW7TyasXcmKDb8=\",
            \"dev\": true
        },
        \"map-obj\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-1.0.1.tgz\",
            \"integrity\": \"sha1-2TPOuSBdgr3PSIb2dCvcK03qFG0=\",
            \"dev\": true
        },
        \"map-stream\": {
            \"version\": \"0.0.7\",
            \"resolved\": \"https://registry.npmjs.org/map-stream/-/map-stream-0.0.7.tgz\",
            \"integrity\": \"sha1-ih8HiW2CsQkmvTdEokIACfiJdKg=\",
            \"dev\": true
        },
        \"map-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/map-visit/-/map-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-7Nyo8TFE5mDxtb1B8S80edmN+48=\",
            \"dev\": true,
            \"requires\": {
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"matchdep\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/matchdep/-/matchdep-2.0.0.tgz\",
            \"integrity\": \"sha1-xvNINKDY28OzfCfui7yyfHd1WC4=\",
            \"dev\": true,
            \"requires\": {
                \"findup-sync\": \"^2.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve\": \"^1.4.0\",
                \"stack-trace\": \"0.0.10\"
            },
            \"dependencies\": {
                \"findup-sync\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-2.0.0.tgz\",
                    \"integrity\": \"sha1-kyaxSIwi0aYIhlCoaQGy2akKLLw=\",
                    \"dev\": true,
                    \"requires\": {
                        \"detect-file\": \"^1.0.0\",
                        \"is-glob\": \"^3.1.0\",
                        \"micromatch\": \"^3.0.4\",
                        \"resolve-dir\": \"^1.0.1\"
                    }
                },
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"meow\": {
            \"version\": \"3.7.0\",
            \"resolved\": \"https://registry.npmjs.org/meow/-/meow-3.7.0.tgz\",
            \"integrity\": \"sha1-cstmi0JSKCkKu/qFaJJYcwioAfs=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase-keys\": \"^2.0.0\",
                \"decamelize\": \"^1.1.2\",
                \"loud-rejection\": \"^1.0.0\",
                \"map-obj\": \"^1.0.1\",
                \"minimist\": \"^1.1.3\",
                \"normalize-package-data\": \"^2.3.4\",
                \"object-assign\": \"^4.0.1\",
                \"read-pkg-up\": \"^1.0.1\",
                \"redent\": \"^1.0.0\",
                \"trim-newlines\": \"^1.0.0\"
            }
        },
        \"merge-stream\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
            \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
            \"dev\": true
        },
        \"merge2\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/merge2/-/merge2-1.4.1.tgz\",
            \"integrity\": \"sha512-8q7VEgMJW4J8tcfVPy8g09NcQwZdbwFEqhe/WZkoIzjn/3TGDwtOCYtXGxA3O8tPzpczCCDgv+P2P5y00ZJOOg==\",
            \"dev\": true
        },
        \"micromatch\": {
            \"version\": \"3.1.10\",
            \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-3.1.10.tgz\",
            \"integrity\": \"sha512-MWikgl9n9M3w+bpsY3He8L+w9eF9338xRl8IAO5viDizwSzziFEyUzo2xrrloB64ADbTf8uA8vRqqttDTOmccg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"braces\": \"^2.3.1\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"extglob\": \"^2.0.4\",
                \"fragment-cache\": \"^0.2.1\",
                \"kind-of\": \"^6.0.2\",
                \"nanomatch\": \"^1.2.9\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.2\"
            }
        },
        \"mime\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/mime/-/mime-1.4.1.tgz\",
            \"integrity\": \"sha512-KI1+qOZu5DcW6wayYHSzR/tXKCDC5Om4s1z2QJjDULzLcmf3DvzS7oluY4HCTrc+9FiKmWUgeNLg7W3uIQvxtQ==\",
            \"dev\": true
        },
        \"mime-db\": {
            \"version\": \"1.44.0\",
            \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.44.0.tgz\",
            \"integrity\": \"sha512-/NOTfLrsPBVeH7YtFPgsVWveuL+4SjjYxaQ1xtM1KMFj7HdxlBlxeyNLzhyJVx7r4rZGJAZ/6lkKCitSc/Nmpg==\",
            \"dev\": true
        },
        \"mime-types\": {
            \"version\": \"2.1.27\",
            \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.27.tgz\",
            \"integrity\": \"sha512-JIhqnCasI9yD+SsmkquHBxTSEuZdQX5BuQnS2Vc7puQQQ+8yiP5AY5uWhpdv4YL4VM5c6iliiYWPgJ/nJQLp7w==\",
            \"dev\": true,
            \"requires\": {
                \"mime-db\": \"1.44.0\"
            }
        },
        \"minimatch\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.4.tgz\",
            \"integrity\": \"sha512-yJHVQEhyqPLUTgt9B83PXu6W3rx4MvvHvSUvToogpwoGDOUQ+yDrR0HRot+yOCdCO7u4hX3pWft6kWBBcqh0UA==\",
            \"dev\": true,
            \"requires\": {
                \"brace-expansion\": \"^1.1.7\"
            }
        },
        \"minimist\": {
            \"version\": \"1.2.5\",
            \"resolved\": \"https://registry.npmjs.org/minimist/-/minimist-1.2.5.tgz\",
            \"integrity\": \"sha512-FM9nNUYrRBAELZQT3xeZQ7fmMOBg6nWNmJKTcgsJeaLstP/UODVpGsr5OhXhhXg6f+qtJ8uiZ+PUxkDWcgIXLw==\",
            \"dev\": true
        },
        \"mitt\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/mitt/-/mitt-1.2.0.tgz\",
            \"integrity\": \"sha512-r6lj77KlwqLhIUku9UWYes7KJtsczvolZkzp8hbaDPPaE24OmWl5s539Mytlj22siEQKosZ26qCBgda2PKwoJw==\",
            \"dev\": true
        },
        \"mixin-deep\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/mixin-deep/-/mixin-deep-1.3.2.tgz\",
            \"integrity\": \"sha512-WRoDn//mXBiJ1H40rqa3vH0toePwSsGb45iInWlTySa+Uu4k3tYUSxa2v1KqAiLtvlrSzaExqS1gtk96A9zvEA==\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.2\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"mkdirp\": {
            \"version\": \"0.5.5\",
            \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-0.5.5.tgz\",
            \"integrity\": \"sha512-NKmAlESf6jMGym1++R0Ra7wvhV+wFW63FaSOFPwRahvea0gMUcGUhVeAg/0BC0wiv9ih5NYPB1Wn1UEI1/L+xQ==\",
            \"dev\": true,
            \"requires\": {
                \"minimist\": \"^1.2.5\"
            }
        },
        \"moment\": {
            \"version\": \"2.29.1\",
            \"resolved\": \"https://registry.npmjs.org/moment/-/moment-2.29.1.tgz\",
            \"integrity\": \"sha512-kHmoybcPV8Sqy59DwNDY3Jefr64lK/by/da0ViFcuA4DH0vQg5Q6Ze5VimxkfQNSC+Mls/Kx53s7TjP1RhFEDQ==\"
        },
        \"ms\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
            \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
            \"dev\": true
        },
        \"mute-stdout\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/mute-stdout/-/mute-stdout-1.0.1.tgz\",
            \"integrity\": \"sha512-kDcwXR4PS7caBpuRYYBUz9iVixUk3anO3f5OYFiIPwK/20vCzKCHyKoulbiDY1S53zD2bxUpxN/IJ+TnXjfvxg==\",
            \"dev\": true
        },
        \"nan\": {
            \"version\": \"2.14.2\",
            \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.14.2.tgz\",
            \"integrity\": \"sha512-M2ufzIiINKCuDfBSAUr1vWQ+vuVcA9kqx8JJUsbQi6yf1uGRyb7HfpdfUr5qLXf3B/t8dPvcjhKMmlfnP47EzQ==\",
            \"dev\": true
        },
        \"nanomatch\": {
            \"version\": \"1.2.13\",
            \"resolved\": \"https://registry.npmjs.org/nanomatch/-/nanomatch-1.2.13.tgz\",
            \"integrity\": \"sha512-fpoe2T0RbHwBTBUOftAfBPaDEi06ufaUai0mE6Yn1kacc3SnTErfb/h+X94VXzI64rKFHYImXSvdwGGCmwOqCA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"fragment-cache\": \"^0.2.1\",
                \"is-windows\": \"^1.0.2\",
                \"kind-of\": \"^6.0.2\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            }
        },
        \"negotiator\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/negotiator/-/negotiator-0.6.2.tgz\",
            \"integrity\": \"sha512-hZXc7K2e+PgeI1eDBe/10Ard4ekbfrrqG8Ep+8Jmf4JID2bNg7NvCPOZN+kfF574pFQI7mum2AUqDidoKqcTOw==\",
            \"dev\": true
        },
        \"next-tick\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/next-tick/-/next-tick-1.0.0.tgz\",
            \"integrity\": \"sha1-yobR/ogoFpsBICCOPchCS524NCw=\",
            \"dev\": true
        },
        \"node-gyp\": {
            \"version\": \"3.8.0\",
            \"resolved\": \"https://registry.npmjs.org/node-gyp/-/node-gyp-3.8.0.tgz\",
            \"integrity\": \"sha512-3g8lYefrRRzvGeSowdJKAKyks8oUpLEd/DyPV4eMhVlhJ0aNaZqIrNUIPuEWWTAoPqyFkfGrM67MC69baqn6vA==\",
            \"dev\": true,
            \"requires\": {
                \"fstream\": \"^1.0.0\",
                \"glob\": \"^7.0.3\",
                \"graceful-fs\": \"^4.1.2\",
                \"mkdirp\": \"^0.5.0\",
                \"nopt\": \"2 || 3\",
                \"npmlog\": \"0 || 1 || 2 || 3 || 4\",
                \"osenv\": \"0\",
                \"request\": \"^2.87.0\",
                \"rimraf\": \"2\",
                \"semver\": \"~5.3.0\",
                \"tar\": \"^2.0.0\",
                \"which\": \"1\"
            },
            \"dependencies\": {
                \"rimraf\": {
                    \"version\": \"2.7.1\",
                    \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
                    \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"glob\": \"^7.1.3\"
                    }
                },
                \"semver\": {
                    \"version\": \"5.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.3.0.tgz\",
                    \"integrity\": \"sha1-myzl094C0XxgEq0yaqa00M9U+U8=\",
                    \"dev\": true
                }
            }
        },
        \"node-releases\": {
            \"version\": \"1.1.45\",
            \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-1.1.45.tgz\",
            \"integrity\": \"sha512-cXvGSfhITKI8qsV116u2FTzH5EWZJfgG7d4cpqwF8I8+1tWpD6AsvvGRKq2onR0DNj1jfqsjkXZsm14JMS7Cyg==\",
            \"dev\": true,
            \"requires\": {
                \"semver\": \"^6.3.0\"
            },
            \"dependencies\": {
                \"semver\": {
                    \"version\": \"6.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
                    \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
                    \"dev\": true
                }
            }
        },
        \"node-sass\": {
            \"version\": \"4.14.1\",
            \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-4.14.1.tgz\",
            \"integrity\": \"sha512-sjCuOlvGyCJS40R8BscF5vhVlQjNN069NtQ1gSxyK1u9iqvn6tf7O1R4GNowVZfiZUCRt5MmMs1xd+4V/7Yr0g==\",
            \"dev\": true,
            \"requires\": {
                \"async-foreach\": \"^0.1.3\",
                \"chalk\": \"^1.1.1\",
                \"cross-spawn\": \"^3.0.0\",
                \"gaze\": \"^1.0.0\",
                \"get-stdin\": \"^4.0.1\",
                \"glob\": \"^7.0.3\",
                \"in-publish\": \"^2.0.0\",
                \"lodash\": \"^4.17.15\",
                \"meow\": \"^3.7.0\",
                \"mkdirp\": \"^0.5.1\",
                \"nan\": \"^2.13.2\",
                \"node-gyp\": \"^3.8.0\",
                \"npmlog\": \"^4.0.0\",
                \"request\": \"^2.88.0\",
                \"sass-graph\": \"2.2.5\",
                \"stdout-stream\": \"^1.4.0\",
                \"true-case-path\": \"^1.0.2\"
            }
        },
        \"nopt\": {
            \"version\": \"3.0.6\",
            \"resolved\": \"https://registry.npmjs.org/nopt/-/nopt-3.0.6.tgz\",
            \"integrity\": \"sha1-xkZdvwirzU2zWTF/eaxopkayj/k=\",
            \"dev\": true,
            \"requires\": {
                \"abbrev\": \"1\"
            }
        },
        \"normalize-package-data\": {
            \"version\": \"2.5.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-2.5.0.tgz\",
            \"integrity\": \"sha512-/5CMN3T0R4XTj4DcGaexo+roZSdSFW/0AOOTROrjxzCG1wrWXEsGbRKevjlIL+ZDE4sZlJr5ED4YW0yqmkK+eA==\",
            \"dev\": true,
            \"requires\": {
                \"hosted-git-info\": \"^2.1.4\",
                \"resolve\": \"^1.10.0\",
                \"semver\": \"2 || 3 || 4 || 5\",
                \"validate-npm-package-license\": \"^3.0.1\"
            }
        },
        \"normalize-path\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
            \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
            \"dev\": true
        },
        \"normalize-range\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/normalize-range/-/normalize-range-0.1.2.tgz\",
            \"integrity\": \"sha1-LRDAa9/TEuqXd2laTShDlFa3WUI=\",
            \"dev\": true
        },
        \"now-and-later\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/now-and-later/-/now-and-later-2.0.1.tgz\",
            \"integrity\": \"sha512-KGvQ0cB70AQfg107Xvs/Fbu+dGmZoTRJp2TaPwcwQm3/7PteUyN2BCgk8KBMPGBUXZdVwyWS8fDCGFygBm19UQ==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.2\"
            }
        },
        \"npmlog\": {
            \"version\": \"4.1.2\",
            \"resolved\": \"https://registry.npmjs.org/npmlog/-/npmlog-4.1.2.tgz\",
            \"integrity\": \"sha512-2uUqazuKlTaSI/dC8AzicUck7+IrEaOnN/e0jd3Xtt1KcGpwx30v50mL7oPyr/h9bL3E4aZccVwpwP+5W9Vjkg==\",
            \"dev\": true,
            \"requires\": {
                \"are-we-there-yet\": \"~1.1.2\",
                \"console-control-strings\": \"~1.1.0\",
                \"gauge\": \"~2.7.3\",
                \"set-blocking\": \"~2.0.0\"
            }
        },
        \"num2fraction\": {
            \"version\": \"1.2.2\",
            \"resolved\": \"https://registry.npmjs.org/num2fraction/-/num2fraction-1.2.2.tgz\",
            \"integrity\": \"sha1-b2gragJ6Tp3fpFZM0lidHU5mnt4=\",
            \"dev\": true
        },
        \"number-is-nan\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/number-is-nan/-/number-is-nan-1.0.1.tgz\",
            \"integrity\": \"sha1-CXtgK1NCKlIsGvuHkDGDNpQaAR0=\",
            \"dev\": true
        },
        \"oauth-sign\": {
            \"version\": \"0.9.0\",
            \"resolved\": \"https://registry.npmjs.org/oauth-sign/-/oauth-sign-0.9.0.tgz\",
            \"integrity\": \"sha512-fexhUFFPTGV8ybAtSIGbV6gOkSv8UtRbDBnAyLQw4QPKkgNlsH2ByPGtMUqdWkos6YCRmAqViwgZrJc/mRDzZQ==\",
            \"dev\": true
        },
        \"object-assign\": {
            \"version\": \"4.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
            \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
            \"dev\": true
        },
        \"object-component\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/object-component/-/object-component-0.0.3.tgz\",
            \"integrity\": \"sha1-8MaapQ78lbhmwYb0AKM3acsvEpE=\",
            \"dev\": true
        },
        \"object-copy\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object-copy/-/object-copy-0.1.0.tgz\",
            \"integrity\": \"sha1-fn2Fi3gb18mRpBupde04EnVOmYw=\",
            \"dev\": true,
            \"requires\": {
                \"copy-descriptor\": \"^0.1.0\",
                \"define-property\": \"^0.2.5\",
                \"kind-of\": \"^3.0.3\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"object-keys\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
            \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
            \"dev\": true
        },
        \"object-visit\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object-visit/-/object-visit-1.0.1.tgz\",
            \"integrity\": \"sha1-95xEk68MU3e1n+OdOV5BBC3QRbs=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.assign\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.0.tgz\",
            \"integrity\": \"sha512-exHJeq6kBKj58mqGyTQ9DFvrZC/eR6OwxzoM9YRoGBqrXYonaFyGiFMuc9VZrXf7DarreEwMpurG3dd+CNyW5w==\",
            \"dev\": true,
            \"requires\": {
                \"define-properties\": \"^1.1.2\",
                \"function-bind\": \"^1.1.1\",
                \"has-symbols\": \"^1.0.0\",
                \"object-keys\": \"^1.0.11\"
            }
        },
        \"object.defaults\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.defaults/-/object.defaults-1.1.0.tgz\",
            \"integrity\": \"sha1-On+GgzS0B96gbaFtiNXNKeQ1/s8=\",
            \"dev\": true,
            \"requires\": {
                \"array-each\": \"^1.0.1\",
                \"array-slice\": \"^1.0.0\",
                \"for-own\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.map\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.map/-/object.map-1.0.1.tgz\",
            \"integrity\": \"sha1-z4Plncj8wK1fQlDh94s7gb2AHTc=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"object.pick\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/object.pick/-/object.pick-1.3.0.tgz\",
            \"integrity\": \"sha1-h6EKxMFpS9Lhy/U1kaZhQftd10c=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"object.reduce\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.reduce/-/object.reduce-1.0.1.tgz\",
            \"integrity\": \"sha1-b+NI8qx/oPlcpiEiZZkJaCW7A60=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"on-finished\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/on-finished/-/on-finished-2.3.0.tgz\",
            \"integrity\": \"sha1-IPEzZIGwg811M3mSoWlxqi2QaUc=\",
            \"dev\": true,
            \"requires\": {
                \"ee-first\": \"1.1.1\"
            }
        },
        \"once\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
            \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
            \"dev\": true,
            \"requires\": {
                \"wrappy\": \"1\"
            }
        },
        \"openurl\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/openurl/-/openurl-1.1.1.tgz\",
            \"integrity\": \"sha1-OHW0sO96UsFW8NtB1GCduw+Us4c=\",
            \"dev\": true
        },
        \"opn\": {
            \"version\": \"5.3.0\",
            \"resolved\": \"https://registry.npmjs.org/opn/-/opn-5.3.0.tgz\",
            \"integrity\": \"sha512-bYJHo/LOmoTd+pfiYhfZDnf9zekVJrY+cnS2a5F2x+w5ppvTqObojTP7WiFG+kVZs9Inw+qQ/lw7TroWwhdd2g==\",
            \"dev\": true,
            \"requires\": {
                \"is-wsl\": \"^1.1.0\"
            }
        },
        \"ordered-read-streams\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/ordered-read-streams/-/ordered-read-streams-1.0.1.tgz\",
            \"integrity\": \"sha1-d8DLN8QVJdZBZtmQ/61+xqDhNj4=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.1\"
            }
        },
        \"os-homedir\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/os-homedir/-/os-homedir-1.0.2.tgz\",
            \"integrity\": \"sha1-/7xJiDNuDoM94MFox+8VISGqf7M=\",
            \"dev\": true
        },
        \"os-locale\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/os-locale/-/os-locale-1.4.0.tgz\",
            \"integrity\": \"sha1-IPnxeuKe00XoveWDsT0gCYA8FNk=\",
            \"dev\": true,
            \"requires\": {
                \"lcid\": \"^1.0.0\"
            }
        },
        \"os-tmpdir\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/os-tmpdir/-/os-tmpdir-1.0.2.tgz\",
            \"integrity\": \"sha1-u+Z0BseaqFxc/sdm/lc0VV36EnQ=\",
            \"dev\": true
        },
        \"osenv\": {
            \"version\": \"0.1.5\",
            \"resolved\": \"https://registry.npmjs.org/osenv/-/osenv-0.1.5.tgz\",
            \"integrity\": \"sha512-0CWcCECdMVc2Rw3U5w9ZjqX6ga6ubk1xDVKxtBQPK7wis/0F2r9T6k4ydGYhecl7YUBxBVxhL5oisPsNxAPe2g==\",
            \"dev\": true,
            \"requires\": {
                \"os-homedir\": \"^1.0.0\",
                \"os-tmpdir\": \"^1.0.0\"
            }
        },
        \"p-limit\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.3.0.tgz\",
            \"integrity\": \"sha512-//88mFWSJx8lxCzwdAABTJL2MyWB12+eIY7MDL2SqLmAkeKU9qxRvWuSyTjm3FUmpBEMuFfckAIqEaVGUDxb6w==\",
            \"dev\": true,
            \"requires\": {
                \"p-try\": \"^2.0.0\"
            }
        },
        \"p-locate\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-3.0.0.tgz\",
            \"integrity\": \"sha512-x+12w/To+4GFfgJhBEpiDcLozRJGegY+Ei7/z0tSLkMmxGZNybVMSfWj9aJn8Z5Fc7dBUNJOOVgPv2H7IwulSQ==\",
            \"dev\": true,
            \"requires\": {
                \"p-limit\": \"^2.0.0\"
            }
        },
        \"p-map\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
            \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
            \"dev\": true,
            \"requires\": {
                \"aggregate-error\": \"^3.0.0\"
            }
        },
        \"p-try\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
            \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
            \"dev\": true
        },
        \"parse-filepath\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/parse-filepath/-/parse-filepath-1.0.2.tgz\",
            \"integrity\": \"sha1-pjISf1Oq89FYdvWHLz/6x2PWyJE=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"map-cache\": \"^0.2.0\",
                \"path-root\": \"^0.1.1\"
            }
        },
        \"parse-json\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-2.2.0.tgz\",
            \"integrity\": \"sha1-9ID0BDTvgHQfhGkJn43qGPVaTck=\",
            \"dev\": true,
            \"requires\": {
                \"error-ex\": \"^1.2.0\"
            }
        },
        \"parse-node-version\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/parse-node-version/-/parse-node-version-1.0.1.tgz\",
            \"integrity\": \"sha512-3YHlOa/JgH6Mnpr05jP9eDG254US9ek25LyIxZlDItp2iJtwyaXQb57lBYLdT3MowkUFYEV2XXNAYIPlESvJlA==\",
            \"dev\": true
        },
        \"parse-passwd\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
            \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
            \"dev\": true
        },
        \"parseqs\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/parseqs/-/parseqs-0.0.6.tgz\",
            \"integrity\": \"sha512-jeAGzMDbfSHHA091hr0r31eYfTig+29g3GKKE/PPbEQ65X0lmMwlEoqmhzu0iztID5uJpZsFlUPDP8ThPL7M8w==\",
            \"dev\": true
        },
        \"parseuri\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/parseuri/-/parseuri-0.0.6.tgz\",
            \"integrity\": \"sha512-AUjen8sAkGgao7UyCX6Ahv0gIK2fABKmYjvP4xmy5JaKvcbTRueIqIPHLAfq30xJddqSE033IOMUSOMCcK3Sow==\",
            \"dev\": true
        },
        \"parseurl\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/parseurl/-/parseurl-1.3.3.tgz\",
            \"integrity\": \"sha512-CiyeOxFT/JZyN5m0z9PfXw4SCBJ6Sygz1Dpl0wqjlhDEGGBP1GnsUVEL0p63hoG1fcj3fHynXi9NYO4nWOL+qQ==\",
            \"dev\": true
        },
        \"pascalcase\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/pascalcase/-/pascalcase-0.1.1.tgz\",
            \"integrity\": \"sha1-s2PlXoAGym/iF4TS2yK9FdeRfxQ=\",
            \"dev\": true
        },
        \"path-dirname\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/path-dirname/-/path-dirname-1.0.2.tgz\",
            \"integrity\": \"sha1-zDPSTVJeCZpTiMAzbG4yuRYGCeA=\",
            \"dev\": true
        },
        \"path-exists\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-2.1.0.tgz\",
            \"integrity\": \"sha1-D+tsZPD8UY2adU3V77YscCJ2H0s=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"path-is-absolute\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/path-is-absolute/-/path-is-absolute-1.0.1.tgz\",
            \"integrity\": \"sha1-F0uSaHNVNP+8es5r9TpanhtcX18=\",
            \"dev\": true
        },
        \"path-parse\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/path-parse/-/path-parse-1.0.6.tgz\",
            \"integrity\": \"sha512-GSmOT2EbHrINBf9SR7CDELwlJ8AENk3Qn7OikK4nFYAu3Ote2+JYNVvkpAEQm3/TLNEJFD/xZJjzyxg3KBWOzw==\",
            \"dev\": true
        },
        \"path-root\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/path-root/-/path-root-0.1.1.tgz\",
            \"integrity\": \"sha1-mkpoFMrBwM1zNgqV8yCDyOpHRbc=\",
            \"dev\": true,
            \"requires\": {
                \"path-root-regex\": \"^0.1.0\"
            }
        },
        \"path-root-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/path-root-regex/-/path-root-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-v8zcjfWxLcUsi0PsONGNcsBLqW0=\",
            \"dev\": true
        },
        \"path-type\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-1.1.0.tgz\",
            \"integrity\": \"sha1-WcRPfuSR2nBNpBXaWkBwuk+P5EE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"performance-now\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/performance-now/-/performance-now-2.1.0.tgz\",
            \"integrity\": \"sha1-Ywn04OX6kT7BxpMHrjZLSzd8nns=\",
            \"dev\": true
        },
        \"picomatch\": {
            \"version\": \"2.2.2\",
            \"resolved\": \"https://registry.npmjs.org/picomatch/-/picomatch-2.2.2.tgz\",
            \"integrity\": \"sha512-q0M/9eZHzmr0AulXyPwNfZjtwZ/RBZlbN3K3CErVrk50T2ASYI7Bye0EvekFY3IP1Nt2DHu0re+V2ZHIpMkuWg==\",
            \"dev\": true
        },
        \"pify\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
            \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
            \"dev\": true
        },
        \"pinkie\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/pinkie/-/pinkie-2.0.4.tgz\",
            \"integrity\": \"sha1-clVrgM+g1IqXToDnckjoDtT3+HA=\",
            \"dev\": true
        },
        \"pinkie-promise\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pinkie-promise/-/pinkie-promise-2.0.1.tgz\",
            \"integrity\": \"sha1-ITXW36ejWMBprJsXh3YogihFD/o=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie\": \"^2.0.0\"
            }
        },
        \"plugin-error\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/plugin-error/-/plugin-error-1.0.1.tgz\",
            \"integrity\": \"sha512-L1zP0dk7vGweZME2i+EeakvUNqSrdiI3F91TwEoYiGrAfUXmVv6fJIq4g82PAXxNsWOp0J7ZqQy/3Szz0ajTxA==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-colors\": \"^1.0.1\",
                \"arr-diff\": \"^4.0.0\",
                \"arr-union\": \"^3.1.0\",
                \"extend-shallow\": \"^3.0.2\"
            }
        },
        \"portscanner\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/portscanner/-/portscanner-2.1.1.tgz\",
            \"integrity\": \"sha1-6rtAnk3iSVD1oqUW01rnaTQ/u5Y=\",
            \"dev\": true,
            \"requires\": {
                \"async\": \"1.5.2\",
                \"is-number-like\": \"^1.0.3\"
            }
        },
        \"posix-character-classes\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/posix-character-classes/-/posix-character-classes-0.1.1.tgz\",
            \"integrity\": \"sha1-AerA/jta9xoqbAL+q7jB/vfgDqs=\",
            \"dev\": true
        },
        \"postcss\": {
            \"version\": \"7.0.26\",
            \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-7.0.26.tgz\",
            \"integrity\": \"sha512-IY4oRjpXWYshuTDFxMVkJDtWIk2LhsTlu8bZnbEJA4+bYT16Lvpo8Qv6EvDumhYRgzjZl489pmsY3qVgJQ08nA==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^2.4.2\",
                \"source-map\": \"^0.6.1\",
                \"supports-color\": \"^6.1.0\"
            },
            \"dependencies\": {
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"chalk\": {
                    \"version\": \"2.4.2\",
                    \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
                    \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.1\",
                        \"escape-string-regexp\": \"^1.0.5\",
                        \"supports-color\": \"^5.3.0\"
                    },
                    \"dependencies\": {
                        \"supports-color\": {
                            \"version\": \"5.5.0\",
                            \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
                            \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
                            \"dev\": true,
                            \"requires\": {
                                \"has-flag\": \"^3.0.0\"
                            }
                        }
                    }
                },
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                },
                \"supports-color\": {
                    \"version\": \"6.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-6.1.0.tgz\",
                    \"integrity\": \"sha512-qe1jfm1Mg7Nq/NSh6XE24gPXROEVsWHxC1LIx//XNlD9iw7YZQGjZNjYN7xGaEG6iKdA8EtNFW6R0gjnVXp+wQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"has-flag\": \"^3.0.0\"
                    }
                }
            }
        },
        \"postcss-value-parser\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/postcss-value-parser/-/postcss-value-parser-4.0.2.tgz\",
            \"integrity\": \"sha512-LmeoohTpp/K4UiyQCwuGWlONxXamGzCMtFxLq4W1nZVGIQLYvMCJx3yAF9qyyuFpflABI9yVdtJAqbihOsCsJQ==\",
            \"dev\": true
        },
        \"pretty-hrtime\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/pretty-hrtime/-/pretty-hrtime-1.0.3.tgz\",
            \"integrity\": \"sha1-t+PqQkNaTJsnWdmeDyAesZWALuE=\",
            \"dev\": true
        },
        \"process-nextick-args\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.1.tgz\",
            \"integrity\": \"sha512-3ouUOpQhtgrbOa17J7+uxOTpITYWaGP7/AhoR3+A+/1e9skrzelGi/dXzEYyvbxubEF6Wn2ypscTKiKJFFn1ag==\",
            \"dev\": true
        },
        \"pseudomap\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/pseudomap/-/pseudomap-1.0.2.tgz\",
            \"integrity\": \"sha1-8FKijacOYYkX7wqKw0wa5aaChrM=\",
            \"dev\": true
        },
        \"psl\": {
            \"version\": \"1.8.0\",
            \"resolved\": \"https://registry.npmjs.org/psl/-/psl-1.8.0.tgz\",
            \"integrity\": \"sha512-RIdOzyoavK+hA18OGGWDqUTsCLhtA7IcZ/6NCs4fFJaHBDab+pDDmDIByWFRQJq2Cd7r1OoQxBGKOaztq+hjIQ==\",
            \"dev\": true
        },
        \"pump\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pump/-/pump-2.0.1.tgz\",
            \"integrity\": \"sha512-ruPMNRkN3MHP1cWJc9OWr+T/xDP0jhXYCLfJcBuX54hhfIBnaQmAUMfDcG4DM5UMWByBbJY69QSphm3jtDKIkA==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.1\"
            }
        },
        \"pumpify\": {
            \"version\": \"1.5.1\",
            \"resolved\": \"https://registry.npmjs.org/pumpify/-/pumpify-1.5.1.tgz\",
            \"integrity\": \"sha512-oClZI37HvuUJJxSKKrC17bZ9Cu0ZYhEAGPsPUy9KlMUmv9dKX2o77RUmq7f3XjIxbwyGwYzbzQ1L2Ks8sIradQ==\",
            \"dev\": true,
            \"requires\": {
                \"duplexify\": \"^3.6.0\",
                \"inherits\": \"^2.0.3\",
                \"pump\": \"^2.0.0\"
            }
        },
        \"punycode\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-2.1.1.tgz\",
            \"integrity\": \"sha512-XRsRjdf+j5ml+y/6GKHPZbrF/8p2Yga0JPtdqTIY2Xe5ohJPD9saDJJLPvp9+NSBprVvevdXZybnj2cv8OEd0A==\",
            \"dev\": true
        },
        \"qs\": {
            \"version\": \"6.2.3\",
            \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.2.3.tgz\",
            \"integrity\": \"sha1-HPyyXBCpsrSDBT/zn138kjOQjP4=\",
            \"dev\": true
        },
        \"range-parser\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/range-parser/-/range-parser-1.2.1.tgz\",
            \"integrity\": \"sha512-Hrgsx+orqoygnmhFbKaHE6c296J+HTAQXoxEF6gNupROmmGJRoyzfG3ccAveqCBrwr/2yxQ5BVd/GTl5agOwSg==\",
            \"dev\": true
        },
        \"raw-body\": {
            \"version\": \"2.4.1\",
            \"resolved\": \"https://registry.npmjs.org/raw-body/-/raw-body-2.4.1.tgz\",
            \"integrity\": \"sha512-9WmIKF6mkvA0SLmA2Knm9+qj89e+j1zqgyn8aXGd7+nAduPoqgI9lO57SAZNn/Byzo5P7JhXTyg9PzaJbH73bA==\",
            \"dev\": true,
            \"requires\": {
                \"bytes\": \"3.1.0\",
                \"http-errors\": \"1.7.3\",
                \"iconv-lite\": \"0.4.24\",
                \"unpipe\": \"1.0.0\"
            }
        },
        \"read-pkg\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg/-/read-pkg-1.1.0.tgz\",
            \"integrity\": \"sha1-9f+qXs0pyzHAR0vKfXVra7KePyg=\",
            \"dev\": true,
            \"requires\": {
                \"load-json-file\": \"^1.0.0\",
                \"normalize-package-data\": \"^2.3.2\",
                \"path-type\": \"^1.0.0\"
            }
        },
        \"read-pkg-up\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg-up/-/read-pkg-up-1.0.1.tgz\",
            \"integrity\": \"sha1-nWPBMnbAZZGNV/ACpX9AobZD+wI=\",
            \"dev\": true,
            \"requires\": {
                \"find-up\": \"^1.0.0\",
                \"read-pkg\": \"^1.0.0\"
            }
        },
        \"readable-stream\": {
            \"version\": \"2.3.7\",
            \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.7.tgz\",
            \"integrity\": \"sha512-Ebho8K4jIbHAxnuxi7o42OrZgF/ZTNcsZj6nRKyUmkhLFq8CHItp/fy6hQZuZmP/n3yZ9VBUbp4zz/mX8hmYPw==\",
            \"dev\": true,
            \"requires\": {
                \"core-util-is\": \"~1.0.0\",
                \"inherits\": \"~2.0.3\",
                \"isarray\": \"~1.0.0\",
                \"process-nextick-args\": \"~2.0.0\",
                \"safe-buffer\": \"~5.1.1\",
                \"string_decoder\": \"~1.1.1\",
                \"util-deprecate\": \"~1.0.1\"
            },
            \"dependencies\": {
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"readdirp\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-2.2.1.tgz\",
            \"integrity\": \"sha512-1JU/8q+VgFZyxwrJ+SVIOsh+KywWGpds3NTqikiKpDMZWScmAYyKIgqkO+ARvNWJfXeXR1zxz7aHF4u4CyH6vQ==\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"micromatch\": \"^3.1.10\",
                \"readable-stream\": \"^2.0.2\"
            }
        },
        \"rechoir\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.6.2.tgz\",
            \"integrity\": \"sha1-hSBLVNuoLVdC4oyWdW70OvUOM4Q=\",
            \"dev\": true,
            \"requires\": {
                \"resolve\": \"^1.1.6\"
            }
        },
        \"redent\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/redent/-/redent-1.0.0.tgz\",
            \"integrity\": \"sha1-z5Fqsf1fHxbfsggi3W7H9zDCr94=\",
            \"dev\": true,
            \"requires\": {
                \"indent-string\": \"^2.1.0\",
                \"strip-indent\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"indent-string\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-2.1.0.tgz\",
                    \"integrity\": \"sha1-ji1INIdCEhtKghi3oTfppSBJ3IA=\",
                    \"dev\": true,
                    \"requires\": {
                        \"repeating\": \"^2.0.0\"
                    }
                }
            }
        },
        \"regex-not\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/regex-not/-/regex-not-1.0.2.tgz\",
            \"integrity\": \"sha512-J6SDjUgDxQj5NusnOtdFxDwN/+HWykR8GELwctJ7mdqhcyy1xEc4SRFHUXvxTp661YaVKAjfRLZ9cCqS6tn32A==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"remove-bom-buffer\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-buffer/-/remove-bom-buffer-3.0.0.tgz\",
            \"integrity\": \"sha512-8v2rWhaakv18qcvNeli2mZ/TMTL2nEyAKRvzo1WtnZBl15SHyEhrCu2/xKlJyUFKHiHgfXIyuY6g2dObJJycXQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-buffer\": \"^1.1.5\",
                \"is-utf8\": \"^0.2.1\"
            }
        },
        \"remove-bom-stream\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-stream/-/remove-bom-stream-1.2.0.tgz\",
            \"integrity\": \"sha1-BfGlk/FuQuH7kOv1nejlaVJflSM=\",
            \"dev\": true,
            \"requires\": {
                \"remove-bom-buffer\": \"^3.0.0\",
                \"safe-buffer\": \"^5.1.0\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"remove-trailing-separator\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-trailing-separator/-/remove-trailing-separator-1.1.0.tgz\",
            \"integrity\": \"sha1-wkvOKig62tW8P1jg1IJJuSN52O8=\",
            \"dev\": true
        },
        \"repeat-element\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/repeat-element/-/repeat-element-1.1.3.tgz\",
            \"integrity\": \"sha512-ahGq0ZnV5m5XtZLMb+vP76kcAM5nkLqk0lpqAuojSKGgQtn4eRi4ZZGm2olo2zKFH+sMsWaqOCW1dqAnOru72g==\",
            \"dev\": true
        },
        \"repeat-string\": {
            \"version\": \"1.6.1\",
            \"resolved\": \"https://registry.npmjs.org/repeat-string/-/repeat-string-1.6.1.tgz\",
            \"integrity\": \"sha1-jcrkcOHIirwtYA//Sndihtp15jc=\",
            \"dev\": true
        },
        \"repeating\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/repeating/-/repeating-2.0.1.tgz\",
            \"integrity\": \"sha1-UhTFOpJtNVJwdSf7q0FdvAjQbdo=\",
            \"dev\": true,
            \"requires\": {
                \"is-finite\": \"^1.0.0\"
            }
        },
        \"replace-ext\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-ext/-/replace-ext-1.0.0.tgz\",
            \"integrity\": \"sha1-3mMSg3P8v3w8z6TeWkgMRaZ5WOs=\",
            \"dev\": true
        },
        \"replace-homedir\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-homedir/-/replace-homedir-1.0.0.tgz\",
            \"integrity\": \"sha1-6H9tUTuSjd6AgmDBK+f+xv9ueYw=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\",
                \"is-absolute\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.1.0\"
            }
        },
        \"request\": {
            \"version\": \"2.88.2\",
            \"resolved\": \"https://registry.npmjs.org/request/-/request-2.88.2.tgz\",
            \"integrity\": \"sha512-MsvtOrfG9ZcrOwAW+Qi+F6HbD0CWXEh9ou77uOb7FM2WPhwT7smM833PzanhJLsgXjN89Ir6V2PczXNnMpwKhw==\",
            \"dev\": true,
            \"requires\": {
                \"aws-sign2\": \"~0.7.0\",
                \"aws4\": \"^1.8.0\",
                \"caseless\": \"~0.12.0\",
                \"combined-stream\": \"~1.0.6\",
                \"extend\": \"~3.0.2\",
                \"forever-agent\": \"~0.6.1\",
                \"form-data\": \"~2.3.2\",
                \"har-validator\": \"~5.1.3\",
                \"http-signature\": \"~1.2.0\",
                \"is-typedarray\": \"~1.0.0\",
                \"isstream\": \"~0.1.2\",
                \"json-stringify-safe\": \"~5.0.1\",
                \"mime-types\": \"~2.1.19\",
                \"oauth-sign\": \"~0.9.0\",
                \"performance-now\": \"^2.1.0\",
                \"qs\": \"~6.5.2\",
                \"safe-buffer\": \"^5.1.2\",
                \"tough-cookie\": \"~2.5.0\",
                \"tunnel-agent\": \"^0.6.0\",
                \"uuid\": \"^3.3.2\"
            },
            \"dependencies\": {
                \"qs\": {
                    \"version\": \"6.5.2\",
                    \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.5.2.tgz\",
                    \"integrity\": \"sha512-N5ZAX4/LxJmF+7wN74pUD6qAh9/wnvdQcjq9TZjevvXzSUo7bfmw91saqMjzGS2xq91/odN2dW/WOl7qQHNDGA==\",
                    \"dev\": true
                }
            }
        },
        \"require-directory\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
            \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
            \"dev\": true
        },
        \"require-main-filename\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-1.0.1.tgz\",
            \"integrity\": \"sha1-l/cXtp1IeE9fUmpsWqj/3aBVpNE=\",
            \"dev\": true
        },
        \"requires-port\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/requires-port/-/requires-port-1.0.0.tgz\",
            \"integrity\": \"sha1-kl0mAdOaxIXgkc8NpcbmlNw9yv8=\",
            \"dev\": true
        },
        \"resolve\": {
            \"version\": \"1.14.2\",
            \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.14.2.tgz\",
            \"integrity\": \"sha512-EjlOBLBO1kxsUxsKjLt7TAECyKW6fOh1VRkykQkKGzcBbjjPIxBqGh0jf7GJ3k/f5mxMqW3htMD3WdTUVtW8HQ==\",
            \"dev\": true,
            \"requires\": {
                \"path-parse\": \"^1.0.6\"
            }
        },
        \"resolve-dir\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-dir/-/resolve-dir-1.0.1.tgz\",
            \"integrity\": \"sha1-eaQGRMNivoLybv/nOcm7U4IEb0M=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.0\",
                \"global-modules\": \"^1.0.0\"
            }
        },
        \"resolve-options\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/resolve-options/-/resolve-options-1.1.0.tgz\",
            \"integrity\": \"sha1-MrueOcBtZzONyTeMDW1gdFZq0TE=\",
            \"dev\": true,
            \"requires\": {
                \"value-or-function\": \"^3.0.0\"
            }
        },
        \"resolve-url\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-url/-/resolve-url-0.2.1.tgz\",
            \"integrity\": \"sha1-LGN/53yJOv0qZj/iGqkIAGjiBSo=\",
            \"dev\": true
        },
        \"resp-modifier\": {
            \"version\": \"6.0.2\",
            \"resolved\": \"https://registry.npmjs.org/resp-modifier/-/resp-modifier-6.0.2.tgz\",
            \"integrity\": \"sha1-sSTeXE+6/LpUH0j/pzlw9KpFa08=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.2.0\",
                \"minimatch\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"ret\": {
            \"version\": \"0.1.15\",
            \"resolved\": \"https://registry.npmjs.org/ret/-/ret-0.1.15.tgz\",
            \"integrity\": \"sha512-TTlYpa+OL+vMMNG24xSlQGEJ3B/RzEfUlLct7b5G/ytav+wPrplCpVMFuwzXbkecJrb6IYo1iFb0S9v37754mg==\",
            \"dev\": true
        },
        \"reusify\": {
            \"version\": \"1.0.4\",
            \"resolved\": \"https://registry.npmjs.org/reusify/-/reusify-1.0.4.tgz\",
            \"integrity\": \"sha512-U9nH88a3fc/ekCF1l0/UP1IosiuIjyTh7hBvXVMHYgVcfGvt897Xguj2UOLDeI5BG2m7/uwyaLVT6fbtCwTyzw==\",
            \"dev\": true
        },
        \"rimraf\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
            \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.1.3\"
            }
        },
        \"run-parallel\": {
            \"version\": \"1.1.10\",
            \"resolved\": \"https://registry.npmjs.org/run-parallel/-/run-parallel-1.1.10.tgz\",
            \"integrity\": \"sha512-zb/1OuZ6flOlH6tQyMPUrE3x3Ulxjlo9WIVXR4yVYi4H9UXQaeIsPbLn2R3O3vQCnDKkAl2qHiuocKKX4Tz/Sw==\",
            \"dev\": true
        },
        \"rx\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/rx/-/rx-4.1.0.tgz\",
            \"integrity\": \"sha1-pfE/957zt0D+MKqAP7CfmIBdR4I=\",
            \"dev\": true
        },
        \"rxjs\": {
            \"version\": \"5.5.12\",
            \"resolved\": \"https://registry.npmjs.org/rxjs/-/rxjs-5.5.12.tgz\",
            \"integrity\": \"sha512-xx2itnL5sBbqeeiVgNPVuQQ1nC8Jp2WfNJhXWHmElW9YmrpS9UVnNzhP3EH3HFqexO5Tlp8GhYY+WEcqcVMvGw==\",
            \"dev\": true,
            \"requires\": {
                \"symbol-observable\": \"1.0.1\"
            }
        },
        \"safe-buffer\": {
            \"version\": \"5.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
            \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
            \"dev\": true
        },
        \"safe-regex\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/safe-regex/-/safe-regex-1.1.0.tgz\",
            \"integrity\": \"sha1-QKNmnzsHfR6UPURinhV91IAjvy4=\",
            \"dev\": true,
            \"requires\": {
                \"ret\": \"~0.1.10\"
            }
        },
        \"safer-buffer\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
            \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
            \"dev\": true
        },
        \"sass-graph\": {
            \"version\": \"2.2.5\",
            \"resolved\": \"https://registry.npmjs.org/sass-graph/-/sass-graph-2.2.5.tgz\",
            \"integrity\": \"sha512-VFWDAHOe6mRuT4mZRd4eKE+d8Uedrk6Xnh7Sh9b4NGufQLQjOrvf/MQoOdx+0s92L89FeyUUNfU597j/3uNpag==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.0.0\",
                \"lodash\": \"^4.0.0\",
                \"scss-tokenizer\": \"^0.2.3\",
                \"yargs\": \"^13.3.2\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.0.tgz\",
                    \"integrity\": \"sha512-1apePfXM1UOSqw0o9IiFAovVz9M5S1Dg+4TrDwfMewQ6p/rmMueb7tWZjQ1rx4Loy1ArBggoqGpfqqdI4rondg==\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"cliui\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-5.0.0.tgz\",
                    \"integrity\": \"sha512-PYeGSEmmHM6zvoef2w8TPzlrnNpXIjTipYK780YswmIP9vjxmd6Y2a3CB2Ks6/AU8NHjZugXvo8w3oWM2qnwXA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"string-width\": \"^3.1.0\",
                        \"strip-ansi\": \"^5.2.0\",
                        \"wrap-ansi\": \"^5.1.0\"
                    }
                },
                \"find-up\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
                    \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"locate-path\": \"^3.0.0\"
                    }
                },
                \"get-caller-file\": {
                    \"version\": \"2.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
                    \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
                    \"dev\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-2.0.0.tgz\",
                    \"integrity\": \"sha1-o7MKXE8ZkYMWeqq5O+764937ZU8=\",
                    \"dev\": true
                },
                \"require-main-filename\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
                    \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
                    \"dev\": true
                },
                \"string-width\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-3.1.0.tgz\",
                    \"integrity\": \"sha512-vafcv6KjVZKSgz06oM/H6GDBrAtz8vdhQakGjFIvNrHA6y3HCF1CInLy+QLq8dTJPQ1b+KDUqDFctkdRW44e1w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"emoji-regex\": \"^7.0.1\",
                        \"is-fullwidth-code-point\": \"^2.0.0\",
                        \"strip-ansi\": \"^5.1.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"5.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
                    \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^4.1.0\"
                    }
                },
                \"which-module\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
                    \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
                    \"dev\": true
                },
                \"wrap-ansi\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-5.1.0.tgz\",
                    \"integrity\": \"sha512-QC1/iN/2/RPVJ5jYK8BGttj5z83LmSKmvbvrXPNCLZSEb32KKVDJDl/MOt2N01qU2H/FkzEa9PKto1BqDjtd7Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.0\",
                        \"string-width\": \"^3.0.0\",
                        \"strip-ansi\": \"^5.0.0\"
                    }
                },
                \"y18n\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.0.tgz\",
                    \"integrity\": \"sha512-r9S/ZyXu/Xu9q1tYlpsLIsa3EeLXXk0VwlxqTcFRfg9EhMW+17kbt9G0NrgCmhGb5vT2hyhJZLfDGx+7+5Uj/w==\",
                    \"dev\": true
                },
                \"yargs\": {
                    \"version\": \"13.3.2\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-13.3.2.tgz\",
                    \"integrity\": \"sha512-AX3Zw5iPruN5ie6xGRIDgqkT+ZhnRlZMLMHAs8tg7nRruy2Nb+i5o9bwghAogtM08q1dpr2LVoS8KSTMYpWXUw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"cliui\": \"^5.0.0\",
                        \"find-up\": \"^3.0.0\",
                        \"get-caller-file\": \"^2.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^2.0.0\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^3.0.0\",
                        \"which-module\": \"^2.0.0\",
                        \"y18n\": \"^4.0.0\",
                        \"yargs-parser\": \"^13.1.2\"
                    }
                }
            }
        },
        \"scss-tokenizer\": {
            \"version\": \"0.2.3\",
            \"resolved\": \"https://registry.npmjs.org/scss-tokenizer/-/scss-tokenizer-0.2.3.tgz\",
            \"integrity\": \"sha1-jrBtualyMzOCTT9VMGQRSYR85dE=\",
            \"dev\": true,
            \"requires\": {
                \"js-base64\": \"^2.1.8\",
                \"source-map\": \"^0.4.2\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.4.4\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.4.4.tgz\",
                    \"integrity\": \"sha1-66T12pwNyZneaAMti092FzZSA2s=\",
                    \"dev\": true,
                    \"requires\": {
                        \"amdefine\": \">=0.0.4\"
                    }
                }
            }
        },
        \"semver\": {
            \"version\": \"5.7.1\",
            \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
            \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
            \"dev\": true
        },
        \"semver-greatest-satisfied-range\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/semver-greatest-satisfied-range/-/semver-greatest-satisfied-range-1.1.0.tgz\",
            \"integrity\": \"sha1-E+jCZYq5aRywzXEJMkAoDTb3els=\",
            \"dev\": true,
            \"requires\": {
                \"sver-compat\": \"^1.5.0\"
            }
        },
        \"send\": {
            \"version\": \"0.16.2\",
            \"resolved\": \"https://registry.npmjs.org/send/-/send-0.16.2.tgz\",
            \"integrity\": \"sha512-E64YFPUssFHEFBvpbbjr44NCLtI1AohxQ8ZSiJjQLskAdKuriYEP6VyGEsRDH8ScozGpkaX1BGvhanqCwkcEZw==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"depd\": \"~1.1.2\",
                \"destroy\": \"~1.0.4\",
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"etag\": \"~1.8.1\",
                \"fresh\": \"0.5.2\",
                \"http-errors\": \"~1.6.2\",
                \"mime\": \"1.4.1\",
                \"ms\": \"2.0.0\",
                \"on-finished\": \"~2.3.0\",
                \"range-parser\": \"~1.2.0\",
                \"statuses\": \"~1.4.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"inherits\": {
                    \"version\": \"2.0.3\",
                    \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
                    \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
                    \"dev\": true
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.4.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.4.0.tgz\",
                    \"integrity\": \"sha512-zhSCtt8v2NDrRlPQpCNtw/heZLtfUDqxBM1udqikb/Hbk52LK4nQSwr10u77iopCW5LsyHpuXS0GnEc48mLeew==\",
                    \"dev\": true
                }
            }
        },
        \"serve-index\": {
            \"version\": \"1.9.1\",
            \"resolved\": \"https://registry.npmjs.org/serve-index/-/serve-index-1.9.1.tgz\",
            \"integrity\": \"sha1-03aNabHn2C5c4FD/9bRTvqEqkjk=\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"batch\": \"0.6.1\",
                \"debug\": \"2.6.9\",
                \"escape-html\": \"~1.0.3\",
                \"http-errors\": \"~1.6.2\",
                \"mime-types\": \"~2.1.17\",
                \"parseurl\": \"~1.3.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"inherits\": {
                    \"version\": \"2.0.3\",
                    \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
                    \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
                    \"dev\": true
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"serve-static\": {
            \"version\": \"1.13.2\",
            \"resolved\": \"https://registry.npmjs.org/serve-static/-/serve-static-1.13.2.tgz\",
            \"integrity\": \"sha512-p/tdJrO4U387R9oMjb1oj7qSMaMfmOyd4j9hOFoxZe2baQszgHcSWjuya/CiT5kgZZKRudHNOA0pYXOl8rQ5nw==\",
            \"dev\": true,
            \"requires\": {
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"parseurl\": \"~1.3.2\",
                \"send\": \"0.16.2\"
            }
        },
        \"server-destroy\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/server-destroy/-/server-destroy-1.0.1.tgz\",
            \"integrity\": \"sha1-8Tv5KOQrnD55OD5hzDmYtdFObN0=\",
            \"dev\": true
        },
        \"set-blocking\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
            \"integrity\": \"sha1-BF+XgtARrppoA93TgrJDkrPYkPc=\",
            \"dev\": true
        },
        \"set-value\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-2.0.1.tgz\",
            \"integrity\": \"sha512-JxHc1weCN68wRY0fhCoXpyK55m/XPHafOmK4UWD7m2CI14GMcFypt4w/0+NV5f/ZMby2F6S2wwA7fgynh9gWSw==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-extendable\": \"^0.1.1\",
                \"is-plain-object\": \"^2.0.3\",
                \"split-string\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"setprototypeof\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.1.tgz\",
            \"integrity\": \"sha512-JvdAWfbXeIGaZ9cILp38HntZSFSo3mWg6xGcJJsd+d4aRMOqauag1C63dJfDw7OaMYwEbHMOxEZ1lqVRYP2OAw==\",
            \"dev\": true
        },
        \"signal-exit\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/signal-exit/-/signal-exit-3.0.3.tgz\",
            \"integrity\": \"sha512-VUJ49FC8U1OxwZLxIbTTrDvLnf/6TDgxZcK8wxR8zs13xpx7xbG60ndBlhNrFi2EMuFRoeDoJO7wthSLq42EjA==\",
            \"dev\": true
        },
        \"slash\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/slash/-/slash-3.0.0.tgz\",
            \"integrity\": \"sha512-g9Q1haeby36OSStwb4ntCGGGaKsaVSjQ68fBxoQcutl5fS1vuY18H3wSt3jFyFtrkx+Kz0V1G85A4MyAdDMi2Q==\",
            \"dev\": true
        },
        \"snapdragon\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon/-/snapdragon-0.8.2.tgz\",
            \"integrity\": \"sha512-FtyOnWN/wCHTVXOMwvSv26d+ko5vWlIDD6zoUJ7LW8vh+ZBC8QdljveRP+crNrtBwioEUWy/4dMtbBjA4ioNlg==\",
            \"dev\": true,
            \"requires\": {
                \"base\": \"^0.11.1\",
                \"debug\": \"^2.2.0\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"map-cache\": \"^0.2.2\",
                \"source-map\": \"^0.5.6\",
                \"source-map-resolve\": \"^0.5.0\",
                \"use\": \"^3.1.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
                    \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
                    \"dev\": true
                }
            }
        },
        \"snapdragon-node\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-node/-/snapdragon-node-2.1.1.tgz\",
            \"integrity\": \"sha512-O27l4xaMYt/RSQ5TR3vpWCAB5Kb/czIcqUFOM/C4fYcLnbZUc1PkjTAMjof2pBWaSTwOUd6qUHcFGVGj7aIwnw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\",
                \"snapdragon-util\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"snapdragon-util\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-util/-/snapdragon-util-3.0.1.tgz\",
            \"integrity\": \"sha512-mbKkMdQKsjX4BAL4bRYTj21edOf8cN7XHdYUJEe+Zn99hVEYcMvKPct1IqNe7+AZPirn8BCDOQBHQZknqmKlZQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.2.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"socket.io\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io/-/socket.io-2.1.1.tgz\",
            \"integrity\": \"sha512-rORqq9c+7W0DAK3cleWNSyfv/qKXV99hV4tZe+gGLfBECw3XEhBy7x85F3wypA9688LKjtwO9pX9L33/xQI8yA==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"~3.1.0\",
                \"engine.io\": \"~3.2.0\",
                \"has-binary2\": \"~1.0.2\",
                \"socket.io-adapter\": \"~1.1.0\",
                \"socket.io-client\": \"2.1.1\",
                \"socket.io-parser\": \"~3.2.0\"
            },
            \"dependencies\": {
                \"base64-arraybuffer\": {
                    \"version\": \"0.1.5\",
                    \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.5.tgz\",
                    \"integrity\": \"sha1-c5JncZI7Whl0etZmqlzUv5xunOg=\",
                    \"dev\": true
                },
                \"engine.io-client\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.2.1.tgz\",
                    \"integrity\": \"sha512-y5AbkytWeM4jQr7m/koQLc5AxpRKC1hEVUb/s1FUAWEJq5AzJJ4NLvzuKPuxtDi5Mq755WuDvZ6Iv2rXj4PTzw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"component-inherit\": \"0.0.3\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-parser\": \"~2.1.1\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"ws\": \"~3.3.1\",
                        \"xmlhttprequest-ssl\": \"~1.5.4\",
                        \"yeast\": \"0.1.2\"
                    }
                },
                \"engine.io-parser\": {
                    \"version\": \"2.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.1.3.tgz\",
                    \"integrity\": \"sha512-6HXPre2O4Houl7c4g7Ic/XzPnHBvaEmN90vtRO9uLmwtRqQmTOw0QMevL1TOfL2Cpu1VzsaTmMotQgMdkzGkVA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"after\": \"0.8.2\",
                        \"arraybuffer.slice\": \"~0.0.7\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"blob\": \"0.0.5\",
                        \"has-binary2\": \"~1.0.2\"
                    }
                },
                \"parseqs\": {
                    \"version\": \"0.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/parseqs/-/parseqs-0.0.5.tgz\",
                    \"integrity\": \"sha1-1SCKNzjkZ2bikbouoXNoSSGouJ0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"better-assert\": \"~1.0.0\"
                    }
                },
                \"parseuri\": {
                    \"version\": \"0.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/parseuri/-/parseuri-0.0.5.tgz\",
                    \"integrity\": \"sha1-gCBKUNTbt3m/3G6+J3jZDkvOMgo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"better-assert\": \"~1.0.0\"
                    }
                },
                \"socket.io-client\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.1.1.tgz\",
                    \"integrity\": \"sha512-jxnFyhAuFxYfjqIgduQlhzqTcOEQSn+OHKVfAxWaNWa7ecP7xSNk2Dx/3UEsDcY7NcFafxvNvKPmmO7HTwTxGQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"backo2\": \"1.0.2\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"component-bind\": \"1.0.0\",
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-client\": \"~3.2.0\",
                        \"has-binary2\": \"~1.0.2\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"object-component\": \"0.0.3\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"socket.io-parser\": \"~3.2.0\",
                        \"to-array\": \"0.1.4\"
                    }
                },
                \"socket.io-parser\": {
                    \"version\": \"3.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.2.0.tgz\",
                    \"integrity\": \"sha512-FYiBx7rc/KORMJlgsXysflWx/RIvtqZbyGLlHZvjfmPTPeuD/I8MaW7cfFrj5tRltICJdgwflhfZ3NVVbVLFQA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"isarray\": \"2.0.1\"
                    }
                },
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"socket.io-adapter\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-adapter/-/socket.io-adapter-1.1.2.tgz\",
            \"integrity\": \"sha512-WzZRUj1kUjrTIrUKpZLEzFZ1OLj5FwLlAFQs9kuZJzJi5DKdU7FsWc36SNmA8iDOtwBQyT8FkrriRM8vXLYz8g==\",
            \"dev\": true
        },
        \"socket.io-client\": {
            \"version\": \"2.3.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.3.1.tgz\",
            \"integrity\": \"sha512-YXmXn3pA8abPOY//JtYxou95Ihvzmg8U6kQyolArkIyLd0pgVhrfor/iMsox8cn07WCOOvvuJ6XKegzIucPutQ==\",
            \"dev\": true,
            \"requires\": {
                \"backo2\": \"1.0.2\",
                \"component-bind\": \"1.0.0\",
                \"component-emitter\": \"~1.3.0\",
                \"debug\": \"~3.1.0\",
                \"engine.io-client\": \"~3.4.0\",
                \"has-binary2\": \"~1.0.2\",
                \"indexof\": \"0.0.1\",
                \"parseqs\": \"0.0.6\",
                \"parseuri\": \"0.0.6\",
                \"socket.io-parser\": \"~3.3.0\",
                \"to-array\": \"0.1.4\"
            },
            \"dependencies\": {
                \"component-emitter\": {
                    \"version\": \"1.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
                    \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
                    \"dev\": true
                }
            }
        },
        \"socket.io-parser\": {
            \"version\": \"3.3.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.3.1.tgz\",
            \"integrity\": \"sha512-1QLvVAe8dTz+mKmZ07Swxt+LAo4Y1ff50rlyoEx00TQmDFVQYPfcqGvIDJLGaBdhdNCecXtyKpD+EgKGcmmbuQ==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"~1.3.0\",
                \"debug\": \"~3.1.0\",
                \"isarray\": \"2.0.1\"
            },
            \"dependencies\": {
                \"component-emitter\": {
                    \"version\": \"1.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
                    \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
                    \"dev\": true
                }
            }
        },
        \"source-map\": {
            \"version\": \"0.5.7\",
            \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
            \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
            \"dev\": true
        },
        \"source-map-resolve\": {
            \"version\": \"0.5.3\",
            \"resolved\": \"https://registry.npmjs.org/source-map-resolve/-/source-map-resolve-0.5.3.tgz\",
            \"integrity\": \"sha512-Htz+RnsXWk5+P2slx5Jh3Q66vhQj1Cllm0zvnaY98+NFx+Dv2CF/f5O/t8x+KaNdrdIAsruNzoh/KpialbqAnw==\",
            \"dev\": true,
            \"requires\": {
                \"atob\": \"^2.1.2\",
                \"decode-uri-component\": \"^0.2.0\",
                \"resolve-url\": \"^0.2.1\",
                \"source-map-url\": \"^0.4.0\",
                \"urix\": \"^0.1.0\"
            }
        },
        \"source-map-url\": {
            \"version\": \"0.4.0\",
            \"resolved\": \"https://registry.npmjs.org/source-map-url/-/source-map-url-0.4.0.tgz\",
            \"integrity\": \"sha1-PpNdfd1zYxuXZZlW1VEo6HtQhKM=\",
            \"dev\": true
        },
        \"sparkles\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/sparkles/-/sparkles-1.0.1.tgz\",
            \"integrity\": \"sha512-dSO0DDYUahUt/0/pD/Is3VIm5TGJjludZ0HVymmhYF6eNA53PVLhnUk0znSYbH8IYBuJdCE+1luR22jNLMaQdw==\",
            \"dev\": true
        },
        \"spdx-correct\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.1.0.tgz\",
            \"integrity\": \"sha512-lr2EZCctC2BNR7j7WzJ2FpDznxky1sjfxvvYEyzxNyb6lZXHODmEoJeFu4JupYlkfha1KZpJyoqiJ7pgA1qq8Q==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-expression-parse\": \"^3.0.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-exceptions\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-exceptions/-/spdx-exceptions-2.2.0.tgz\",
            \"integrity\": \"sha512-2XQACfElKi9SlVb1CYadKDXvoajPgBVPn/gOQLrTvHdElaVhr7ZEbqJaRnJLVNeaI4cMEAgVCeBMKF6MWRDCRA==\",
            \"dev\": true
        },
        \"spdx-expression-parse\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-expression-parse/-/spdx-expression-parse-3.0.0.tgz\",
            \"integrity\": \"sha512-Yg6D3XpRD4kkOmTpdgbUiEJFKghJH03fiC1OPll5h/0sO6neh2jqRDVHOQ4o/LMea0tgCkbMgea5ip/e+MkWyg==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-exceptions\": \"^2.1.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-license-ids\": {
            \"version\": \"3.0.5\",
            \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.5.tgz\",
            \"integrity\": \"sha512-J+FWzZoynJEXGphVIS+XEh3kFSjZX/1i9gFBaWQcB+/tmpe2qUsSBABpcxqxnAxFdiUFEgAX1bjYGQvIZmoz9Q==\",
            \"dev\": true
        },
        \"split-string\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/split-string/-/split-string-3.1.0.tgz\",
            \"integrity\": \"sha512-NzNVhJDYpwceVVii8/Hu6DKfD2G+NrQHlS/V/qgv763EYudVwEcMQNxd2lh+0VrUByXN/oJkl5grOhYWvQUYiw==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.0\"
            }
        },
        \"sshpk\": {
            \"version\": \"1.16.1\",
            \"resolved\": \"https://registry.npmjs.org/sshpk/-/sshpk-1.16.1.tgz\",
            \"integrity\": \"sha512-HXXqVUq7+pcKeLqqZj6mHFUMvXtOJt1uoUx09pFW6011inTMxqI8BA8PM95myrIyyKwdnzjdFjLiE6KBPVtJIg==\",
            \"dev\": true,
            \"requires\": {
                \"asn1\": \"~0.2.3\",
                \"assert-plus\": \"^1.0.0\",
                \"bcrypt-pbkdf\": \"^1.0.0\",
                \"dashdash\": \"^1.12.0\",
                \"ecc-jsbn\": \"~0.1.1\",
                \"getpass\": \"^0.1.1\",
                \"jsbn\": \"~0.1.0\",
                \"safer-buffer\": \"^2.0.2\",
                \"tweetnacl\": \"~0.14.0\"
            }
        },
        \"stack-trace\": {
            \"version\": \"0.0.10\",
            \"resolved\": \"https://registry.npmjs.org/stack-trace/-/stack-trace-0.0.10.tgz\",
            \"integrity\": \"sha1-VHxws0fo0ytOEI6hoqFZ5f3eGcA=\",
            \"dev\": true
        },
        \"static-extend\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/static-extend/-/static-extend-0.1.2.tgz\",
            \"integrity\": \"sha1-YICcOcv/VTNyJv1eC1IPNB8ftcY=\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^0.2.5\",
                \"object-copy\": \"^0.1.0\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"statuses\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.3.1.tgz\",
            \"integrity\": \"sha1-+vUbnrdKrvOzrPStX2Gr8ky3uT4=\",
            \"dev\": true
        },
        \"stdout-stream\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/stdout-stream/-/stdout-stream-1.4.1.tgz\",
            \"integrity\": \"sha512-j4emi03KXqJWcIeF8eIXkjMFN1Cmb8gUlDYGeBALLPo5qdyTfA9bOtl8m33lRoC+vFMkP3gl0WsDr6+gzxbbTA==\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.1\"
            }
        },
        \"stream-exhaust\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/stream-exhaust/-/stream-exhaust-1.0.2.tgz\",
            \"integrity\": \"sha512-b/qaq/GlBK5xaq1yrK9/zFcyRSTNxmcZwFLGSTG0mXgZl/4Z6GgiyYOXOvY7N3eEvFRAG1bkDRz5EPGSvPYQlw==\",
            \"dev\": true
        },
        \"stream-shift\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/stream-shift/-/stream-shift-1.0.1.tgz\",
            \"integrity\": \"sha512-AiisoFqQ0vbGcZgQPY1cdP2I76glaVA/RauYR4G4thNFgkTqr90yXTo4LYX60Jl+sIlPNHHdGSwo01AvbKUSVQ==\",
            \"dev\": true
        },
        \"stream-throttle\": {
            \"version\": \"0.1.3\",
            \"resolved\": \"https://registry.npmjs.org/stream-throttle/-/stream-throttle-0.1.3.tgz\",
            \"integrity\": \"sha1-rdV8jXzHOoFjDTHNVdOWHPr7qcM=\",
            \"dev\": true,
            \"requires\": {
                \"commander\": \"^2.2.0\",
                \"limiter\": \"^1.0.5\"
            }
        },
        \"string-width\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-1.0.2.tgz\",
            \"integrity\": \"sha1-EYvfW4zcUaKn5w0hHgfisLmxB9M=\",
            \"dev\": true,
            \"requires\": {
                \"code-point-at\": \"^1.0.0\",
                \"is-fullwidth-code-point\": \"^1.0.0\",
                \"strip-ansi\": \"^3.0.0\"
            }
        },
        \"string_decoder\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.1.1.tgz\",
            \"integrity\": \"sha512-n/ShnvDi6FHbbVfviro+WojiFzv+s8MPMHBczVePfUpDJLwoLT0ht1l4YwBCbi8pJAveEEdnkHyPyTP/mzRfwg==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.0\"
            }
        },
        \"strip-ansi\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
            \"integrity\": \"sha1-ajhfuIU9lS1f8F0Oiq+UJ43GPc8=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"strip-bom\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-2.0.0.tgz\",
            \"integrity\": \"sha1-YhmoVhZSBJHzV4i9vxRHqZx+aw4=\",
            \"dev\": true,
            \"requires\": {
                \"is-utf8\": \"^0.2.0\"
            }
        },
        \"strip-indent\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/strip-indent/-/strip-indent-1.0.1.tgz\",
            \"integrity\": \"sha1-DHlipq3vp7vUrDZkYKY4VSrhoKI=\",
            \"dev\": true,
            \"requires\": {
                \"get-stdin\": \"^4.0.1\"
            }
        },
        \"supports-color\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-2.0.0.tgz\",
            \"integrity\": \"sha1-U10EXOa2Nj+kARcIRimZXp3zJMc=\",
            \"dev\": true
        },
        \"sver-compat\": {
            \"version\": \"1.5.0\",
            \"resolved\": \"https://registry.npmjs.org/sver-compat/-/sver-compat-1.5.0.tgz\",
            \"integrity\": \"sha1-PPh9/rTQe0o/FIJ7wYaz/QxkXNg=\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"^2.0.1\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"symbol-observable\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/symbol-observable/-/symbol-observable-1.0.1.tgz\",
            \"integrity\": \"sha1-g0D8RwLDEi310iKI+IKD9RPT/dQ=\",
            \"dev\": true
        },
        \"tar\": {
            \"version\": \"2.2.2\",
            \"resolved\": \"https://registry.npmjs.org/tar/-/tar-2.2.2.tgz\",
            \"integrity\": \"sha512-FCEhQ/4rE1zYv9rYXJw/msRqsnmlje5jHP6huWeBZ704jUTy02c5AZyWujpMR1ax6mVw9NyJMfuK2CMDWVIfgA==\",
            \"dev\": true,
            \"requires\": {
                \"block-stream\": \"*\",
                \"fstream\": \"^1.0.12\",
                \"inherits\": \"2\"
            }
        },
        \"tfunk\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/tfunk/-/tfunk-4.0.0.tgz\",
            \"integrity\": \"sha512-eJQ0dGfDIzWNiFNYFVjJ+Ezl/GmwHaFTBTjrtqNPW0S7cuVDBrZrmzUz6VkMeCR4DZFqhd4YtLwsw3i2wYHswQ==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^1.1.3\",
                \"dlv\": \"^1.1.3\"
            }
        },
        \"through2\": {
            \"version\": \"2.0.5\",
            \"resolved\": \"https://registry.npmjs.org/through2/-/through2-2.0.5.tgz\",
            \"integrity\": \"sha512-/mrRod8xqpA+IHSLyGCQ2s8SPHiCDEeQJSep1jqLYeEUClOFG2Qsh+4FU6G9VeqpZnGW/Su8LQGc4YKni5rYSQ==\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"~2.3.6\",
                \"xtend\": \"~4.0.1\"
            }
        },
        \"through2-filter\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/through2-filter/-/through2-filter-3.0.0.tgz\",
            \"integrity\": \"sha512-jaRjI2WxN3W1V8/FMZ9HKIBXixtiqs3SQSX4/YGIiP3gL6djW48VoZq9tDqeCWs3MT8YY5wb/zli8VW8snY1CA==\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"~2.0.0\",
                \"xtend\": \"~4.0.0\"
            }
        },
        \"time-stamp\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/time-stamp/-/time-stamp-1.1.0.tgz\",
            \"integrity\": \"sha1-dkpaEa9QVhkhsTPztE5hhofg9cM=\",
            \"dev\": true
        },
        \"to-absolute-glob\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-absolute-glob/-/to-absolute-glob-2.0.2.tgz\",
            \"integrity\": \"sha1-GGX0PZ50sIItufFFt4z/fQ98hJs=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"is-negated-glob\": \"^1.0.0\"
            }
        },
        \"to-array\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/to-array/-/to-array-0.1.4.tgz\",
            \"integrity\": \"sha1-F+bBH3PdTz10zaek/zI46a2b+JA=\",
            \"dev\": true
        },
        \"to-object-path\": {
            \"version\": \"0.3.0\",
            \"resolved\": \"https://registry.npmjs.org/to-object-path/-/to-object-path-0.3.0.tgz\",
            \"integrity\": \"sha1-KXWIt7Dn4KwI4E5nL4XB9JmeF68=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"to-regex\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-regex/-/to-regex-3.0.2.tgz\",
            \"integrity\": \"sha512-FWtleNAtZ/Ki2qtqej2CXTOayOH9bHDQF+Q48VpWyDXjbYxA4Yz8iDB31zXOBUlOHHKidDbqGVrTUvQMPmBGBw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"regex-not\": \"^1.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"to-regex-range\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-2.1.1.tgz\",
            \"integrity\": \"sha1-fIDBe53+vlmeJzZ+DU3VWQFB2zg=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\"
            }
        },
        \"to-through\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/to-through/-/to-through-2.0.0.tgz\",
            \"integrity\": \"sha1-/JKtq6ByZHvAtn1rA2ZKoZUJOvY=\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"^2.0.3\"
            }
        },
        \"toidentifier\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/toidentifier/-/toidentifier-1.0.0.tgz\",
            \"integrity\": \"sha512-yaOH/Pk/VEhBWWTlhI+qXxDFXlejDGcQipMlyxda9nthulaxLZUNcUqFxokp0vcYnvteJln5FNQDRrxj3YcbVw==\",
            \"dev\": true
        },
        \"tough-cookie\": {
            \"version\": \"2.5.0\",
            \"resolved\": \"https://registry.npmjs.org/tough-cookie/-/tough-cookie-2.5.0.tgz\",
            \"integrity\": \"sha512-nlLsUzgm1kfLXSXfRZMc1KLAugd4hqJHDTvc2hDIwS3mZAfMEuMbc03SujMF+GEcpaX/qboeycw6iO8JwVv2+g==\",
            \"dev\": true,
            \"requires\": {
                \"psl\": \"^1.1.28\",
                \"punycode\": \"^2.1.1\"
            }
        },
        \"trim-newlines\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/trim-newlines/-/trim-newlines-1.0.0.tgz\",
            \"integrity\": \"sha1-WIeWa7WCpFA6QetST301ARgVphM=\",
            \"dev\": true
        },
        \"true-case-path\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/true-case-path/-/true-case-path-1.0.3.tgz\",
            \"integrity\": \"sha512-m6s2OdQe5wgpFMC+pAJ+q9djG82O2jcHPOI6RNg1yy9rCYR+WD6Nbpl32fDpfC56nirdRy+opFa/Vk7HYhqaew==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.1.2\"
            }
        },
        \"tunnel-agent\": {
            \"version\": \"0.6.0\",
            \"resolved\": \"https://registry.npmjs.org/tunnel-agent/-/tunnel-agent-0.6.0.tgz\",
            \"integrity\": \"sha1-J6XeoGs2sEoKmWZ3SykIaPD8QP0=\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"^5.0.1\"
            }
        },
        \"tweetnacl\": {
            \"version\": \"0.14.5\",
            \"resolved\": \"https://registry.npmjs.org/tweetnacl/-/tweetnacl-0.14.5.tgz\",
            \"integrity\": \"sha1-WuaBd/GS1EViadEIr6k/+HQ/T2Q=\",
            \"dev\": true
        },
        \"type\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/type/-/type-1.2.0.tgz\",
            \"integrity\": \"sha512-+5nt5AAniqsCnu2cEQQdpzCAh33kVx8n0VoFidKpB1dVVLAN/F+bgVOqOJqOnEnrhp222clB5p3vUlD+1QAnfg==\",
            \"dev\": true
        },
        \"typedarray\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/typedarray/-/typedarray-0.0.6.tgz\",
            \"integrity\": \"sha1-hnrHTjhkGHsdPUfZlqeOxciDB3c=\",
            \"dev\": true
        },
        \"ua-parser-js\": {
            \"version\": \"0.7.22\",
            \"resolved\": \"https://registry.npmjs.org/ua-parser-js/-/ua-parser-js-0.7.22.tgz\",
            \"integrity\": \"sha512-YUxzMjJ5T71w6a8WWVcMGM6YWOTX27rCoIQgLXiWaxqXSx9D7DNjiGWn1aJIRSQ5qr0xuhra77bSIh6voR/46Q==\",
            \"dev\": true
        },
        \"uglify-js\": {
            \"version\": \"3.7.5\",
            \"resolved\": \"https://registry.npmjs.org/uglify-js/-/uglify-js-3.7.5.tgz\",
            \"integrity\": \"sha512-GFZ3EXRptKGvb/C1Sq6nO1iI7AGcjyqmIyOw0DrD0675e+NNbGO72xmMM2iEBdFbxaTLo70NbjM/Wy54uZIlsg==\",
            \"dev\": true,
            \"requires\": {
                \"commander\": \"~2.20.3\",
                \"source-map\": \"~0.6.1\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                }
            }
        },
        \"ultron\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ultron/-/ultron-1.1.1.tgz\",
            \"integrity\": \"sha512-UIEXBNeYmKptWH6z8ZnqTeS8fV74zG0/eRU9VGkpzz+LIJNs8W/zM/L+7ctCkRrgbNnnR0xxw4bKOr0cW0N0Og==\",
            \"dev\": true
        },
        \"unc-path-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/unc-path-regex/-/unc-path-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-5z3T17DXxe2G+6xrCufYxqadUPo=\",
            \"dev\": true
        },
        \"undertaker\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker/-/undertaker-1.2.1.tgz\",
            \"integrity\": \"sha512-71WxIzDkgYk9ZS+spIB8iZXchFhAdEo2YU8xYqBYJ39DIUIqziK78ftm26eecoIY49X0J2MLhG4hr18Yp6/CMA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"bach\": \"^1.0.0\",
                \"collection-map\": \"^1.0.0\",
                \"es6-weak-map\": \"^2.0.1\",
                \"last-run\": \"^1.1.0\",
                \"object.defaults\": \"^1.0.0\",
                \"object.reduce\": \"^1.0.0\",
                \"undertaker-registry\": \"^1.0.0\"
            }
        },
        \"undertaker-registry\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker-registry/-/undertaker-registry-1.0.1.tgz\",
            \"integrity\": \"sha1-XkvaMI5KiirlhPm5pDWaSZglzFA=\",
            \"dev\": true
        },
        \"union-value\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/union-value/-/union-value-1.0.1.tgz\",
            \"integrity\": \"sha512-tJfXmxMeWYnczCVs7XAEvIV7ieppALdyepWMkHkwciRpZraG/xwT+s2JN8+pr1+8jCRf80FFzvr+MpQeeoF4Xg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"get-value\": \"^2.0.6\",
                \"is-extendable\": \"^0.1.1\",
                \"set-value\": \"^2.0.1\"
            }
        },
        \"unique-stream\": {
            \"version\": \"2.3.1\",
            \"resolved\": \"https://registry.npmjs.org/unique-stream/-/unique-stream-2.3.1.tgz\",
            \"integrity\": \"sha512-2nY4TnBE70yoxHkDli7DMazpWiP7xMdCYqU2nBRO0UB+ZpEkGsSija7MvmvnZFUeC+mrgiUfcHSr3LmRFIg4+A==\",
            \"dev\": true,
            \"requires\": {
                \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
                \"through2-filter\": \"^3.0.0\"
            }
        },
        \"universalify\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/universalify/-/universalify-0.1.2.tgz\",
            \"integrity\": \"sha512-rBJeI5CXAlmy1pV+617WB9J63U6XcazHHF2f2dbJix4XzpUF0RS3Zbj0FGIOCAva5P/d/GBOYaACQ1w+0azUkg==\",
            \"dev\": true
        },
        \"unpipe\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unpipe/-/unpipe-1.0.0.tgz\",
            \"integrity\": \"sha1-sr9O6FFKrmFltIF4KdIbLvSZBOw=\",
            \"dev\": true
        },
        \"unset-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unset-value/-/unset-value-1.0.0.tgz\",
            \"integrity\": \"sha1-g3aHP30jNRef+x5vw6jtDfyKtVk=\",
            \"dev\": true,
            \"requires\": {
                \"has-value\": \"^0.3.1\",
                \"isobject\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"has-value\": {
                    \"version\": \"0.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-0.3.1.tgz\",
                    \"integrity\": \"sha1-ex9YutpiyoJ+wKIHgCVlSEWZXh8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"get-value\": \"^2.0.3\",
                        \"has-values\": \"^0.1.4\",
                        \"isobject\": \"^2.0.0\"
                    },
                    \"dependencies\": {
                        \"isobject\": {
                            \"version\": \"2.1.0\",
                            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-2.1.0.tgz\",
                            \"integrity\": \"sha1-8GVWEJaj8dou9GJy+BXIQNh+DIk=\",
                            \"dev\": true,
                            \"requires\": {
                                \"isarray\": \"1.0.0\"
                            }
                        }
                    }
                },
                \"has-values\": {
                    \"version\": \"0.1.4\",
                    \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-0.1.4.tgz\",
                    \"integrity\": \"sha1-bWHeldkd/Km5oCCJrThL/49it3E=\",
                    \"dev\": true
                },
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"upath\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/upath/-/upath-1.2.0.tgz\",
            \"integrity\": \"sha512-aZwGpamFO61g3OlfT7OQCHqhGnW43ieH9WZeP7QxN/G/jS4jfqUkZxoryvJgVPEcrl5NL/ggHsSmLMHuH64Lhg==\",
            \"dev\": true
        },
        \"uri-js\": {
            \"version\": \"4.4.0\",
            \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.4.0.tgz\",
            \"integrity\": \"sha512-B0yRTzYdUCCn9n+F4+Gh4yIDtMQcaJsmYBDsTSG8g/OejKBodLQ2IHfN3bM7jUsRXndopT7OIXWdYqc1fjmV6g==\",
            \"dev\": true,
            \"requires\": {
                \"punycode\": \"^2.1.0\"
            }
        },
        \"urix\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/urix/-/urix-0.1.0.tgz\",
            \"integrity\": \"sha1-2pN/emLiH+wf0Y1Js1wpNQZ6bHI=\",
            \"dev\": true
        },
        \"use\": {
            \"version\": \"3.1.1\",
            \"resolved\": \"https://registry.npmjs.org/use/-/use-3.1.1.tgz\",
            \"integrity\": \"sha512-cwESVXlO3url9YWlFW/TA9cshCEhtu7IKJ/p5soJ/gGpj7vbvFrAY/eIioQ6Dw23KjZhYgiIo8HOs1nQ2vr/oQ==\",
            \"dev\": true
        },
        \"util-deprecate\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
            \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
            \"dev\": true
        },
        \"utils-merge\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/utils-merge/-/utils-merge-1.0.1.tgz\",
            \"integrity\": \"sha1-n5VxD1CiZ5R7LMwSR0HBAoQn5xM=\",
            \"dev\": true
        },
        \"uuid\": {
            \"version\": \"3.4.0\",
            \"resolved\": \"https://registry.npmjs.org/uuid/-/uuid-3.4.0.tgz\",
            \"integrity\": \"sha512-HjSDRw6gZE5JMggctHBcjVak08+KEVhSIiDzFnT9S9aegmp85S/bReBVTb4QTFaRNptJ9kuYaNhnbNEOkbKb/A==\",
            \"dev\": true
        },
        \"v8flags\": {
            \"version\": \"3.1.3\",
            \"resolved\": \"https://registry.npmjs.org/v8flags/-/v8flags-3.1.3.tgz\",
            \"integrity\": \"sha512-amh9CCg3ZxkzQ48Mhcb8iX7xpAfYJgePHxWMQCBWECpOSqJUXgY26ncA61UTV0BkPqfhcy6mzwCIoP4ygxpW8w==\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"validate-npm-package-license\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/validate-npm-package-license/-/validate-npm-package-license-3.0.4.tgz\",
            \"integrity\": \"sha512-DpKm2Ui/xN7/HQKCtpZxoRWBhZ9Z0kqtygG8XCgNQ8ZlDnxuQmWhj566j8fN4Cu3/JmbhsDo7fcAJq4s9h27Ew==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-correct\": \"^3.0.0\",
                \"spdx-expression-parse\": \"^3.0.0\"
            }
        },
        \"value-or-function\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/value-or-function/-/value-or-function-3.0.0.tgz\",
            \"integrity\": \"sha1-HCQ6ULWVwb5Up1S/7OhWO5/42BM=\",
            \"dev\": true
        },
        \"verror\": {
            \"version\": \"1.10.0\",
            \"resolved\": \"https://registry.npmjs.org/verror/-/verror-1.10.0.tgz\",
            \"integrity\": \"sha1-OhBcoXBTr1XW4nDB+CiGguGNpAA=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\",
                \"core-util-is\": \"1.0.2\",
                \"extsprintf\": \"^1.2.0\"
            }
        },
        \"vinyl\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl/-/vinyl-2.2.0.tgz\",
            \"integrity\": \"sha512-MBH+yP0kC/GQ5GwBqrTPTzEfiiLjta7hTtvQtbxBgTeSXsmKQRQecjibMbxIXzVT3Y9KJK+drOz1/k+vsu8Nkg==\",
            \"dev\": true,
            \"requires\": {
                \"clone\": \"^2.1.1\",
                \"clone-buffer\": \"^1.0.0\",
                \"clone-stats\": \"^1.0.0\",
                \"cloneable-readable\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"replace-ext\": \"^1.0.0\"
            }
        },
        \"vinyl-fs\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-fs/-/vinyl-fs-3.0.3.tgz\",
            \"integrity\": \"sha512-vIu34EkyNyJxmP0jscNzWBSygh7VWhqun6RmqVfXePrOwi9lhvRs//dOaGOTRUQr4tx7/zd26Tk5WeSVZitgng==\",
            \"dev\": true,
            \"requires\": {
                \"fs-mkdirp-stream\": \"^1.0.0\",
                \"glob-stream\": \"^6.1.0\",
                \"graceful-fs\": \"^4.0.0\",
                \"is-valid-glob\": \"^1.0.0\",
                \"lazystream\": \"^1.0.0\",
                \"lead\": \"^1.0.0\",
                \"object.assign\": \"^4.0.4\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.3.3\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"remove-bom-stream\": \"^1.2.0\",
                \"resolve-options\": \"^1.1.0\",
                \"through2\": \"^2.0.0\",
                \"to-through\": \"^2.0.0\",
                \"value-or-function\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\",
                \"vinyl-sourcemap\": \"^1.1.0\"
            }
        },
        \"vinyl-sourcemap\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-sourcemap/-/vinyl-sourcemap-1.1.0.tgz\",
            \"integrity\": \"sha1-kqgAWTo4cDqM2xHYswCtS+Y7PhY=\",
            \"dev\": true,
            \"requires\": {
                \"append-buffer\": \"^1.0.2\",
                \"convert-source-map\": \"^1.5.0\",
                \"graceful-fs\": \"^4.1.6\",
                \"normalize-path\": \"^2.1.1\",
                \"now-and-later\": \"^2.0.0\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"vinyl-sourcemaps-apply\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-sourcemaps-apply/-/vinyl-sourcemaps-apply-0.2.1.tgz\",
            \"integrity\": \"sha1-q2VJ1h0XLCsbh75cUI0jnI74dwU=\",
            \"dev\": true,
            \"requires\": {
                \"source-map\": \"^0.5.1\"
            }
        },
        \"which\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/which/-/which-1.3.1.tgz\",
            \"integrity\": \"sha512-HxJdYWq1MTIQbJ3nw0cqssHoTNU267KlrDuGZ1WYlxDStUtKUhOaJmh112/TZmHxxUfuJqPXSOm7tDyas0OSIQ==\",
            \"dev\": true,
            \"requires\": {
                \"isexe\": \"^2.0.0\"
            }
        },
        \"which-module\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-1.0.0.tgz\",
            \"integrity\": \"sha1-u6Y8qGGUiZT/MHc2CJ47lgJsKk8=\",
            \"dev\": true
        },
        \"wide-align\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/wide-align/-/wide-align-1.1.3.tgz\",
            \"integrity\": \"sha512-QGkOQc8XL6Bt5PwnsExKBPuMKBxnGxWWW3fU55Xt4feHozMUhdUMaBCk290qpm/wG5u/RSKzwdAC4i51YigihA==\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.2 || 2\"
            }
        },
        \"wrap-ansi\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-2.1.0.tgz\",
            \"integrity\": \"sha1-2Pw9KE3QV5T+hJc8rs3Rz4JP3YU=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\"
            }
        },
        \"wrappy\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
            \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\",
            \"dev\": true
        },
        \"ws\": {
            \"version\": \"6.1.4\",
            \"resolved\": \"https://registry.npmjs.org/ws/-/ws-6.1.4.tgz\",
            \"integrity\": \"sha512-eqZfL+NE/YQc1/ZynhojeV8q+H050oR8AZ2uIev7RU10svA9ZnJUddHcOUZTJLinZ9yEfdA2kSATS2qZK5fhJA==\",
            \"dev\": true,
            \"requires\": {
                \"async-limiter\": \"~1.0.0\"
            }
        },
        \"xmlhttprequest-ssl\": {
            \"version\": \"1.5.5\",
            \"resolved\": \"https://registry.npmjs.org/xmlhttprequest-ssl/-/xmlhttprequest-ssl-1.5.5.tgz\",
            \"integrity\": \"sha1-wodrBhaKrcQOV9l+gRkayPQ5iz4=\",
            \"dev\": true
        },
        \"xtend\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/xtend/-/xtend-4.0.2.tgz\",
            \"integrity\": \"sha512-LKYU1iAXJXUgAXn9URjiu+MWhyUXHsvfp7mcuYm9dSUKK0/CjtrUwFAxD82/mCWbtLsGjFIad0wIsod4zrTAEQ==\",
            \"dev\": true
        },
        \"y18n\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-3.2.1.tgz\",
            \"integrity\": \"sha1-bRX7qITAhnnA136I53WegR4H+kE=\",
            \"dev\": true
        },
        \"yallist\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-2.1.2.tgz\",
            \"integrity\": \"sha1-HBH5IY8HYImkfdUS+TxmmaaoHVI=\",
            \"dev\": true
        },
        \"yargs\": {
            \"version\": \"15.4.1\",
            \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-15.4.1.tgz\",
            \"integrity\": \"sha512-aePbxDmcYW++PaqBsJ+HYUFwCdv4LVvdnhBy78E57PIor8/OVvhMrADFFEDh8DHDFRv/O9i3lPhsENjO7QX0+A==\",
            \"dev\": true,
            \"requires\": {
                \"cliui\": \"^6.0.0\",
                \"decamelize\": \"^1.2.0\",
                \"find-up\": \"^4.1.0\",
                \"get-caller-file\": \"^2.0.1\",
                \"require-directory\": \"^2.1.1\",
                \"require-main-filename\": \"^2.0.0\",
                \"set-blocking\": \"^2.0.0\",
                \"string-width\": \"^4.2.0\",
                \"which-module\": \"^2.0.0\",
                \"y18n\": \"^4.0.0\",
                \"yargs-parser\": \"^18.1.2\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.0.tgz\",
                    \"integrity\": \"sha512-bY6fj56OUQ0hU1KjFNDQuJFezqKdrAyFdIevADiqrWHwSlbmBNMHp5ak2f40Pm8JTFyM2mqxkG6ngkHO11f/lg==\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"4.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
                    \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^2.0.1\"
                    }
                },
                \"camelcase\": {
                    \"version\": \"5.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
                    \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
                    \"dev\": true
                },
                \"cliui\": {
                    \"version\": \"6.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-6.0.0.tgz\",
                    \"integrity\": \"sha512-t6wbgtoCXvAzst7QgXxJYqPt0usEfbgQdftEPbLL/cvv6HPE5VgvqCuAIDR0NgU52ds6rFwqrgakNLrHEjCbrQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"string-width\": \"^4.2.0\",
                        \"strip-ansi\": \"^6.0.0\",
                        \"wrap-ansi\": \"^6.2.0\"
                    }
                },
                \"color-convert\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
                    \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-name\": \"~1.1.4\"
                    }
                },
                \"emoji-regex\": {
                    \"version\": \"8.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-8.0.0.tgz\",
                    \"integrity\": \"sha512-MSjYzcWNOA0ewAHpz0MxpYFvwg6yjy1NG3xteoqz644VCo/RPgnr1/GGt+ic3iJTzQ8Eu3TdM14SawnVUmGE6A==\",
                    \"dev\": true
                },
                \"find-up\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
                    \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"locate-path\": \"^5.0.0\",
                        \"path-exists\": \"^4.0.0\"
                    }
                },
                \"get-caller-file\": {
                    \"version\": \"2.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
                    \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
                    \"dev\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-3.0.0.tgz\",
                    \"integrity\": \"sha512-zymm5+u+sCsSWyD9qNaejV3DFvhCKclKdizYaJUuHA83RLjb7nSuGnddCHGv0hk+KY7BMAlsWeK4Ueg6EV6XQg==\",
                    \"dev\": true
                },
                \"locate-path\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-5.0.0.tgz\",
                    \"integrity\": \"sha512-t7hw9pI+WvuwNJXwk5zVHpyhIqzg2qTlklJOf0mVxGSbe3Fp2VieZcduNYjaLDoy6p9uGpQEGWG87WpMKlNq8g==\",
                    \"dev\": true,
                    \"requires\": {
                        \"p-locate\": \"^4.1.0\"
                    }
                },
                \"p-locate\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
                    \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
                    \"dev\": true,
                    \"requires\": {
                        \"p-limit\": \"^2.2.0\"
                    }
                },
                \"path-exists\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
                    \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
                    \"dev\": true
                },
                \"require-main-filename\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
                    \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
                    \"dev\": true
                },
                \"string-width\": {
                    \"version\": \"4.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-4.2.0.tgz\",
                    \"integrity\": \"sha512-zUz5JD+tgqtuDjMhwIg5uFVV3dtqZ9yQJlZVfq4I01/K5Paj5UHj7VyrQOJvzawSVlKpObApbfD0Ed6yJc+1eg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"emoji-regex\": \"^8.0.0\",
                        \"is-fullwidth-code-point\": \"^3.0.0\",
                        \"strip-ansi\": \"^6.0.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"6.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.0.tgz\",
                    \"integrity\": \"sha512-AuvKTrTfQNYNIctbR1K/YGTR1756GycPsg7b9bdV9Duqur4gv6aKqHXah67Z8ImS7WEz5QVcOtlfW2rZEugt6w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^5.0.0\"
                    }
                },
                \"which-module\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
                    \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
                    \"dev\": true
                },
                \"wrap-ansi\": {
                    \"version\": \"6.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-6.2.0.tgz\",
                    \"integrity\": \"sha512-r6lPcBGxZXlIcymEu7InxDMhdW0KDxpLgoFLcguasxCaJ/SOIZwINatK9KY/tf+ZrlywOKU0UDj3ATXUBfxJXA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^4.0.0\",
                        \"string-width\": \"^4.1.0\",
                        \"strip-ansi\": \"^6.0.0\"
                    }
                },
                \"y18n\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.0.tgz\",
                    \"integrity\": \"sha512-r9S/ZyXu/Xu9q1tYlpsLIsa3EeLXXk0VwlxqTcFRfg9EhMW+17kbt9G0NrgCmhGb5vT2hyhJZLfDGx+7+5Uj/w==\",
                    \"dev\": true
                },
                \"yargs-parser\": {
                    \"version\": \"18.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-18.1.3.tgz\",
                    \"integrity\": \"sha512-o50j0JeToy/4K6OZcaQmW6lyXXKhq7csREXcDwk2omFPJEwUNOVtJKvmDr9EI1fAJZUyZcRF7kxGBWmRXudrCQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^5.0.0\",
                        \"decamelize\": \"^1.2.0\"
                    }
                }
            }
        },
        \"yargs-parser\": {
            \"version\": \"13.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-13.1.2.tgz\",
            \"integrity\": \"sha512-3lbsNRf/j+A4QuSZfDRA7HRSfWrzO0YjqTJd5kjAq37Zep1CEgaYmrH9Q3GwPiB9cHyd1Y1UwggGhJGoxipbzg==\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^5.0.0\",
                \"decamelize\": \"^1.2.0\"
            },
            \"dependencies\": {
                \"camelcase\": {
                    \"version\": \"5.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
                    \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
                    \"dev\": true
                }
            }
        },
        \"yeast\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yeast/-/yeast-0.1.2.tgz\",
            \"integrity\": \"sha1-AI4G2AlDIMNy28L47XagymyKxBk=\",
            \"dev\": true
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/package-lock.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"startbootstrap-sb-admin-2\",
    \"version\": \"4.1.3\",
    \"lockfileVersion\": 1,
    \"requires\": true,
    \"dependencies\": {
        \"@fortawesome/fontawesome-free\": {
            \"version\": \"5.15.1\",
            \"resolved\": \"https://registry.npmjs.org/@fortawesome/fontawesome-free/-/fontawesome-free-5.15.1.tgz\",
            \"integrity\": \"sha512-OEdH7SyC1suTdhBGW91/zBfR6qaIhThbcN8PUXtXilY4GYnSBbVqOntdHbC1vXwsDnX0Qix2m2+DSU1J51ybOQ==\"
        },
        \"@nodelib/fs.scandir\": {
            \"version\": \"2.1.3\",
            \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.scandir/-/fs.scandir-2.1.3.tgz\",
            \"integrity\": \"sha512-eGmwYQn3gxo4r7jdQnkrrN6bY478C3P+a/y72IJukF8LjB6ZHeB3c+Ehacj3sYeSmUXGlnA67/PmbM9CVwL7Dw==\",
            \"dev\": true,
            \"requires\": {
                \"@nodelib/fs.stat\": \"2.0.3\",
                \"run-parallel\": \"^1.1.9\"
            }
        },
        \"@nodelib/fs.stat\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.stat/-/fs.stat-2.0.3.tgz\",
            \"integrity\": \"sha512-bQBFruR2TAwoevBEd/NWMoAAtNGzTRgdrqnYCc7dhzfoNvqPzLyqlEQnzZ3kVnNrSp25iyxE00/3h2fqGAGArA==\",
            \"dev\": true
        },
        \"@nodelib/fs.walk\": {
            \"version\": \"1.2.4\",
            \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.walk/-/fs.walk-1.2.4.tgz\",
            \"integrity\": \"sha512-1V9XOY4rDW0rehzbrcqAmHnz8e7SKvX27gh8Gt2WgB0+pdzdiLV83p72kZPU+jvMbS1qU5mauP2iOvO8rhmurQ==\",
            \"dev\": true,
            \"requires\": {
                \"@nodelib/fs.scandir\": \"2.1.3\",
                \"fastq\": \"^1.6.0\"
            }
        },
        \"abbrev\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/abbrev/-/abbrev-1.1.1.tgz\",
            \"integrity\": \"sha512-nne9/IiQ/hzIhY6pdDnbBtz7DjPTKrY00P/zvPSm5pOFkl6xuGrGnXn/VtTNNfNtAfZ9/1RtehkszU9qcTii0Q==\",
            \"dev\": true
        },
        \"accepts\": {
            \"version\": \"1.3.7\",
            \"resolved\": \"https://registry.npmjs.org/accepts/-/accepts-1.3.7.tgz\",
            \"integrity\": \"sha512-Il80Qs2WjYlJIBNzNkK6KYqlVMTbZLXgHx2oT0pU/fjRHyEp+PEfEPY0R3WCwAGVOtauxh1hOxNgIf5bv7dQpA==\",
            \"dev\": true,
            \"requires\": {
                \"mime-types\": \"~2.1.24\",
                \"negotiator\": \"0.6.2\"
            }
        },
        \"after\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/after/-/after-0.8.2.tgz\",
            \"integrity\": \"sha1-/ts5T58OAqqXaOcCvaI7UF+ufh8=\",
            \"dev\": true
        },
        \"aggregate-error\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/aggregate-error/-/aggregate-error-3.1.0.tgz\",
            \"integrity\": \"sha512-4I7Td01quW/RpocfNayFdFVk1qSuoh0E7JrbRJ16nH01HhKFQ88INq9Sd+nd72zqRySlr9BmDA8xlEJ6vJMrYA==\",
            \"dev\": true,
            \"requires\": {
                \"clean-stack\": \"^2.0.0\",
                \"indent-string\": \"^4.0.0\"
            }
        },
        \"ajv\": {
            \"version\": \"6.12.6\",
            \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-6.12.6.tgz\",
            \"integrity\": \"sha512-j3fVLgvTo527anyYyJOGTYJbG+vnnQYvE0m5mmkc1TK+nxAppkCLMIL0aZ4dblVCNoGShhm+kzE4ZUykBoMg4g==\",
            \"dev\": true,
            \"requires\": {
                \"fast-deep-equal\": \"^3.1.1\",
                \"fast-json-stable-stringify\": \"^2.0.0\",
                \"json-schema-traverse\": \"^0.4.1\",
                \"uri-js\": \"^4.2.2\"
            }
        },
        \"amdefine\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/amdefine/-/amdefine-1.0.1.tgz\",
            \"integrity\": \"sha1-SlKCrBZHKek2Gbz9OtFR+BfOkfU=\",
            \"dev\": true
        },
        \"ansi-colors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-1.1.0.tgz\",
            \"integrity\": \"sha512-SFKX67auSNoVR38N3L+nvsPjOE0bybKTYbkf5tRvushrAPQ9V75huw0ZxBkKVeRU9kqH3d6HA4xTckbwZ4ixmA==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"^0.1.0\"
            }
        },
        \"ansi-cyan\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-cyan/-/ansi-cyan-0.1.1.tgz\",
            \"integrity\": \"sha1-U4rlKK+JgvKK4w2G8vF0VtJgmHM=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-gray\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-gray/-/ansi-gray-0.1.1.tgz\",
            \"integrity\": \"sha1-KWLPVOyXksSFEKPetSRDaGHvclE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-red\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-red/-/ansi-red-0.1.1.tgz\",
            \"integrity\": \"sha1-jGOPnRCAgAo1PJwoyKgcpHBdlGw=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-wrap\": \"0.1.0\"
            }
        },
        \"ansi-regex\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-2.1.1.tgz\",
            \"integrity\": \"sha1-w7M6te42DYbg5ijwRorn7yfWVN8=\",
            \"dev\": true
        },
        \"ansi-styles\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
            \"integrity\": \"sha1-tDLdM1i2NM914eRmQ2gkBTPB3b4=\",
            \"dev\": true
        },
        \"ansi-wrap\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/ansi-wrap/-/ansi-wrap-0.1.0.tgz\",
            \"integrity\": \"sha1-qCJQ3bABXponyoLoLqYDu/pF768=\",
            \"dev\": true
        },
        \"anymatch\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-2.0.0.tgz\",
            \"integrity\": \"sha512-5teOsQWABXHHBFP9y3skS5P3d/WfWXpv3FUpy+LorMrNYaT9pI4oLMQX7jzQ2KklNpGpWHzdCXTDT2Y3XGlZBw==\",
            \"dev\": true,
            \"requires\": {
                \"micromatch\": \"^3.1.4\",
                \"normalize-path\": \"^2.1.1\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"append-buffer\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/append-buffer/-/append-buffer-1.0.2.tgz\",
            \"integrity\": \"sha1-2CIM9GYIFSXv6lBhTz3mUU36WPE=\",
            \"dev\": true,
            \"requires\": {
                \"buffer-equal\": \"^1.0.0\"
            }
        },
        \"aproba\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/aproba/-/aproba-1.2.0.tgz\",
            \"integrity\": \"sha512-Y9J6ZjXtoYh8RnXVCMOU/ttDmk1aBjunq9vO0ta5x85WDQiQfUF9sIPBITdbiiIVcBo03Hi3jMxigBtsddlXRw==\",
            \"dev\": true
        },
        \"archy\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/archy/-/archy-1.0.0.tgz\",
            \"integrity\": \"sha1-+cjBN1fMHde8N5rHeyxipcKGjEA=\",
            \"dev\": true
        },
        \"are-we-there-yet\": {
            \"version\": \"1.1.5\",
            \"resolved\": \"https://registry.npmjs.org/are-we-there-yet/-/are-we-there-yet-1.1.5.tgz\",
            \"integrity\": \"sha512-5hYdAkZlcG8tOLujVDTgCT+uPX0VnpAH28gWsLfzpXYm7wP6mp5Q/gYyR7YQ0cKVJcXJnl3j2kpBan13PtQf6w==\",
            \"dev\": true,
            \"requires\": {
                \"delegates\": \"^1.0.0\",
                \"readable-stream\": \"^2.0.6\"
            }
        },
        \"arr-diff\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-4.0.0.tgz\",
            \"integrity\": \"sha1-1kYQdP6/7HHn4VI1dhoyml3HxSA=\",
            \"dev\": true
        },
        \"arr-filter\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-filter/-/arr-filter-1.1.2.tgz\",
            \"integrity\": \"sha1-Q/3d0JHo7xGqTEXZzcGOLf8XEe4=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-flatten\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-flatten/-/arr-flatten-1.1.0.tgz\",
            \"integrity\": \"sha512-L3hKV5R/p5o81R7O02IGnwpDmkp6E982XhtbuwSe3O4qOtMMMtodicASA1Cny2U+aCXcNpml+m4dPsvsJ3jatg==\",
            \"dev\": true
        },
        \"arr-map\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/arr-map/-/arr-map-2.0.2.tgz\",
            \"integrity\": \"sha1-Onc0X/wc814qkYJWAfnljy4kysQ=\",
            \"dev\": true,
            \"requires\": {
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"arr-union\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-3.1.0.tgz\",
            \"integrity\": \"sha1-45sJrqne+Gao8gbiiK9jkZuuOcQ=\",
            \"dev\": true
        },
        \"array-each\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/array-each/-/array-each-1.0.1.tgz\",
            \"integrity\": \"sha1-p5SvDAWrF1KEbudTofIRoFugxE8=\",
            \"dev\": true
        },
        \"array-find-index\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/array-find-index/-/array-find-index-1.0.2.tgz\",
            \"integrity\": \"sha1-3wEKoSh+Fku9pvlyOwqWoexBh6E=\",
            \"dev\": true
        },
        \"array-initial\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-initial/-/array-initial-1.1.0.tgz\",
            \"integrity\": \"sha1-L6dLJnOTccOUe9enrcc74zSz15U=\",
            \"dev\": true,
            \"requires\": {
                \"array-slice\": \"^1.0.0\",
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-last\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/array-last/-/array-last-1.3.0.tgz\",
            \"integrity\": \"sha512-eOCut5rXlI6aCOS7Z7kCplKRKyiFQ6dHFBem4PwlwKeNFk2/XxTrhRh5T9PyaEWGy/NHTZWbY+nsZlNFJu9rYg==\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"is-number\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-4.0.0.tgz\",
                    \"integrity\": \"sha512-rSklcAIlf1OmFdyAqbnWTLVelsQ58uvZ66S/ZyawjWqIviTWCjg2PzVGw8WUA+nNuPTqb4wgA+NszrJ+08LlgQ==\",
                    \"dev\": true
                }
            }
        },
        \"array-slice\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-slice/-/array-slice-1.1.0.tgz\",
            \"integrity\": \"sha512-B1qMD3RBP7O8o0H2KbrXDyB0IccejMF15+87Lvlor12ONPRHP6gTjXMNkt/d3ZuOGbAe66hFmaCfECI24Ufp6w==\",
            \"dev\": true
        },
        \"array-sort\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/array-sort/-/array-sort-1.0.0.tgz\",
            \"integrity\": \"sha512-ihLeJkonmdiAsD7vpgN3CRcx2J2S0TiYW+IS/5zHBI7mKUq3ySvBdzzBfD236ubDBQFiiyG3SWCPc+msQ9KoYg==\",
            \"dev\": true,
            \"requires\": {
                \"default-compare\": \"^1.0.0\",
                \"get-value\": \"^2.0.6\",
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"array-union\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-2.1.0.tgz\",
            \"integrity\": \"sha512-HGyxoOTYUyCM6stUe6EJgnd4EoewAI7zMdfqO+kGjnlZmBDz/cR5pf8r/cR4Wq60sL/p0IkcjUEEPwS3GFrIyw==\",
            \"dev\": true
        },
        \"array-unique\": {
            \"version\": \"0.3.2\",
            \"resolved\": \"https://registry.npmjs.org/array-unique/-/array-unique-0.3.2.tgz\",
            \"integrity\": \"sha1-qJS3XUvE9s1nnvMkSp/Y9Gri1Cg=\",
            \"dev\": true
        },
        \"arraybuffer.slice\": {
            \"version\": \"0.0.7\",
            \"resolved\": \"https://registry.npmjs.org/arraybuffer.slice/-/arraybuffer.slice-0.0.7.tgz\",
            \"integrity\": \"sha512-wGUIVQXuehL5TCqQun8OW81jGzAWycqzFF8lFp+GOM5BXLYj3bKNsYC4daB7n6XjCqxQA/qgTJ+8ANR3acjrog==\",
            \"dev\": true
        },
        \"asn1\": {
            \"version\": \"0.2.4\",
            \"resolved\": \"https://registry.npmjs.org/asn1/-/asn1-0.2.4.tgz\",
            \"integrity\": \"sha512-jxwzQpLQjSmWXgwaCZE9Nz+glAG01yF1QnWgbhGwHI5A6FRIEY6IVqtHhIepHqI7/kyEyQEagBC5mBEFlIYvdg==\",
            \"dev\": true,
            \"requires\": {
                \"safer-buffer\": \"~2.1.0\"
            }
        },
        \"assert-plus\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/assert-plus/-/assert-plus-1.0.0.tgz\",
            \"integrity\": \"sha1-8S4PPF13sLHN2RRpQuTpbB5N1SU=\",
            \"dev\": true
        },
        \"assign-symbols\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/assign-symbols/-/assign-symbols-1.0.0.tgz\",
            \"integrity\": \"sha1-WWZ/QfrdTyDMvCu5a41Pf3jsA2c=\",
            \"dev\": true
        },
        \"async\": {
            \"version\": \"1.5.2\",
            \"resolved\": \"https://registry.npmjs.org/async/-/async-1.5.2.tgz\",
            \"integrity\": \"sha1-7GphrlZIDAw8skHJVhjiCJL5Zyo=\",
            \"dev\": true
        },
        \"async-done\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/async-done/-/async-done-1.3.2.tgz\",
            \"integrity\": \"sha512-uYkTP8dw2og1tu1nmza1n1CMW0qb8gWWlwqMmLb7MhBVs4BXrFziT6HXUd+/RlRA/i4H9AkofYloUbs1fwMqlw==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.2\",
                \"process-nextick-args\": \"^2.0.0\",
                \"stream-exhaust\": \"^1.0.1\"
            }
        },
        \"async-each\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/async-each/-/async-each-1.0.3.tgz\",
            \"integrity\": \"sha512-z/WhQ5FPySLdvREByI2vZiTWwCnF0moMJ1hK9YQwDTHKh6I7/uSckMetoRGb5UBZPC1z0jlw+n/XCgjeH7y1AQ==\",
            \"dev\": true
        },
        \"async-each-series\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/async-each-series/-/async-each-series-0.1.1.tgz\",
            \"integrity\": \"sha1-dhfBkXQB/Yykooqtzj266Yr+tDI=\",
            \"dev\": true
        },
        \"async-foreach\": {
            \"version\": \"0.1.3\",
            \"resolved\": \"https://registry.npmjs.org/async-foreach/-/async-foreach-0.1.3.tgz\",
            \"integrity\": \"sha1-NhIfhFwFeBct5Bmpfb6x0W7DRUI=\",
            \"dev\": true
        },
        \"async-limiter\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/async-limiter/-/async-limiter-1.0.1.tgz\",
            \"integrity\": \"sha512-csOlWGAcRFJaI6m+F2WKdnMKr4HhdhFVBk0H/QbJFMCr+uO2kwohwXQPxw/9OCxp05r5ghVBFSyioixx3gfkNQ==\",
            \"dev\": true
        },
        \"async-settle\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/async-settle/-/async-settle-1.0.0.tgz\",
            \"integrity\": \"sha1-HQqRS7Aldb7IqPOnTlCA9yssDGs=\",
            \"dev\": true,
            \"requires\": {
                \"async-done\": \"^1.2.2\"
            }
        },
        \"asynckit\": {
            \"version\": \"0.4.0\",
            \"resolved\": \"https://registry.npmjs.org/asynckit/-/asynckit-0.4.0.tgz\",
            \"integrity\": \"sha1-x57Zf380y48robyXkLzDZkdLS3k=\",
            \"dev\": true
        },
        \"atob\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/atob/-/atob-2.1.2.tgz\",
            \"integrity\": \"sha512-Wm6ukoaOGJi/73p/cl2GvLjTI5JM1k/O14isD73YML8StrH/7/lRFgmg8nICZgD3bZZvjwCGxtMOD3wWNAu8cg==\",
            \"dev\": true
        },
        \"autoprefixer\": {
            \"version\": \"9.7.4\",
            \"resolved\": \"https://registry.npmjs.org/autoprefixer/-/autoprefixer-9.7.4.tgz\",
            \"integrity\": \"sha512-g0Ya30YrMBAEZk60lp+qfX5YQllG+S5W3GYCFvyHTvhOki0AEQJLPEcIuGRsqVwLi8FvXPVtwTGhfr38hVpm0g==\",
            \"dev\": true,
            \"requires\": {
                \"browserslist\": \"^4.8.3\",
                \"caniuse-lite\": \"^1.0.30001020\",
                \"chalk\": \"^2.4.2\",
                \"normalize-range\": \"^0.1.2\",
                \"num2fraction\": \"^1.2.2\",
                \"postcss\": \"^7.0.26\",
                \"postcss-value-parser\": \"^4.0.2\"
            },
            \"dependencies\": {
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"chalk\": {
                    \"version\": \"2.4.2\",
                    \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
                    \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.1\",
                        \"escape-string-regexp\": \"^1.0.5\",
                        \"supports-color\": \"^5.3.0\"
                    }
                },
                \"supports-color\": {
                    \"version\": \"5.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
                    \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
                    \"dev\": true,
                    \"requires\": {
                        \"has-flag\": \"^3.0.0\"
                    }
                }
            }
        },
        \"aws-sign2\": {
            \"version\": \"0.7.0\",
            \"resolved\": \"https://registry.npmjs.org/aws-sign2/-/aws-sign2-0.7.0.tgz\",
            \"integrity\": \"sha1-tG6JCTSpWR8tL2+G1+ap8bP+dqg=\",
            \"dev\": true
        },
        \"aws4\": {
            \"version\": \"1.11.0\",
            \"resolved\": \"https://registry.npmjs.org/aws4/-/aws4-1.11.0.tgz\",
            \"integrity\": \"sha512-xh1Rl34h6Fi1DC2WWKfxUTVqRsNnr6LsKz2+hfwDxQJWmrx8+c7ylaqBMcHfl1U1r2dsifOvKX3LQuLNZ+XSvA==\",
            \"dev\": true
        },
        \"axios\": {
            \"version\": \"0.19.0\",
            \"resolved\": \"https://registry.npmjs.org/axios/-/axios-0.19.0.tgz\",
            \"integrity\": \"sha512-1uvKqKQta3KBxIz14F2v06AEHZ/dIoeKfbTRkK1E5oqjDnuEerLmYTgJB5AiQZHJcljpg1TuRzdjDR06qNk0DQ==\",
            \"dev\": true,
            \"requires\": {
                \"follow-redirects\": \"1.5.10\",
                \"is-buffer\": \"^2.0.2\"
            },
            \"dependencies\": {
                \"follow-redirects\": {
                    \"version\": \"1.5.10\",
                    \"resolved\": \"https://registry.npmjs.org/follow-redirects/-/follow-redirects-1.5.10.tgz\",
                    \"integrity\": \"sha512-0V5l4Cizzvqt5D44aTXbFZz+FtyXV1vrDN6qrelxtfYQKW0KO0W2T/hkE8xvGa/540LkZlkaUjO4ailYTFtHVQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"debug\": \"=3.1.0\"
                    }
                },
                \"is-buffer\": {
                    \"version\": \"2.0.4\",
                    \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-2.0.4.tgz\",
                    \"integrity\": \"sha512-Kq1rokWXOPXWuaMAqZiJW4XxsmD9zGx9q4aePabbn3qCRGedtH7Cm+zV8WETitMfu1wdh+Rvd6w5egwSngUX2A==\",
                    \"dev\": true
                }
            }
        },
        \"bach\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/bach/-/bach-1.2.0.tgz\",
            \"integrity\": \"sha1-Szzpa/JxNPeaG0FKUcFONMO9mIA=\",
            \"dev\": true,
            \"requires\": {
                \"arr-filter\": \"^1.1.1\",
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"array-each\": \"^1.0.0\",
                \"array-initial\": \"^1.0.0\",
                \"array-last\": \"^1.1.1\",
                \"async-done\": \"^1.2.2\",
                \"async-settle\": \"^1.0.0\",
                \"now-and-later\": \"^2.0.0\"
            }
        },
        \"backo2\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/backo2/-/backo2-1.0.2.tgz\",
            \"integrity\": \"sha1-MasayLEpNjRj41s+u2n038+6eUc=\",
            \"dev\": true
        },
        \"balanced-match\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
            \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
            \"dev\": true
        },
        \"base\": {
            \"version\": \"0.11.2\",
            \"resolved\": \"https://registry.npmjs.org/base/-/base-0.11.2.tgz\",
            \"integrity\": \"sha512-5T6P4xPgpp0YDFvSWwEZ4NoE3aM4QBQXDzmVbraCkFj8zHM+mba8SyqB5DbZWyR7mYHo6Y7BdQo3MoA4m0TeQg==\",
            \"dev\": true,
            \"requires\": {
                \"cache-base\": \"^1.0.1\",
                \"class-utils\": \"^0.3.5\",
                \"component-emitter\": \"^1.2.1\",
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"mixin-deep\": \"^1.2.0\",
                \"pascalcase\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"base64-arraybuffer\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.4.tgz\",
            \"integrity\": \"sha1-mBjHngWbE1X5fgQooBfIOOkLqBI=\",
            \"dev\": true
        },
        \"base64id\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/base64id/-/base64id-1.0.0.tgz\",
            \"integrity\": \"sha1-R2iMuZu2gE8OBtPnY7HDLlfY5rY=\",
            \"dev\": true
        },
        \"batch\": {
            \"version\": \"0.6.1\",
            \"resolved\": \"https://registry.npmjs.org/batch/-/batch-0.6.1.tgz\",
            \"integrity\": \"sha1-3DQxT05nkxgJP8dgJyUl+UvyXBY=\",
            \"dev\": true
        },
        \"bcrypt-pbkdf\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/bcrypt-pbkdf/-/bcrypt-pbkdf-1.0.2.tgz\",
            \"integrity\": \"sha1-pDAdOJtqQ/m2f/PKEaP2Y342Dp4=\",
            \"dev\": true,
            \"requires\": {
                \"tweetnacl\": \"^0.14.3\"
            }
        },
        \"better-assert\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/better-assert/-/better-assert-1.0.2.tgz\",
            \"integrity\": \"sha1-QIZrnhueC1W0gYlDEeaPr/rrxSI=\",
            \"dev\": true,
            \"requires\": {
                \"callsite\": \"1.0.0\"
            }
        },
        \"binary-extensions\": {
            \"version\": \"1.13.1\",
            \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-1.13.1.tgz\",
            \"integrity\": \"sha512-Un7MIEDdUC5gNpcGDV97op1Ywk748MpHcFTHoYs6qnj1Z3j7I53VG3nwZhKzoBZmbdRNnb6WRdFlwl7tSDuZGw==\",
            \"dev\": true
        },
        \"bindings\": {
            \"version\": \"1.5.0\",
            \"resolved\": \"https://registry.npmjs.org/bindings/-/bindings-1.5.0.tgz\",
            \"integrity\": \"sha512-p2q/t/mhvuOj/UeLlV6566GD/guowlr0hHxClI0W9m7MWYkL1F0hLo+0Aexs9HSPCtR1SXQ0TD3MMKrXZajbiQ==\",
            \"dev\": true,
            \"optional\": true,
            \"requires\": {
                \"file-uri-to-path\": \"1.0.0\"
            }
        },
        \"blob\": {
            \"version\": \"0.0.5\",
            \"resolved\": \"https://registry.npmjs.org/blob/-/blob-0.0.5.tgz\",
            \"integrity\": \"sha512-gaqbzQPqOoamawKg0LGVd7SzLgXS+JH61oWprSLH+P+abTczqJbhTR8CmJ2u9/bUYNmHTGJx/UEmn6doAvvuig==\",
            \"dev\": true
        },
        \"block-stream\": {
            \"version\": \"0.0.9\",
            \"resolved\": \"https://registry.npmjs.org/block-stream/-/block-stream-0.0.9.tgz\",
            \"integrity\": \"sha1-E+v+d4oDIFz+A3UUgeu0szAMEmo=\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"~2.0.0\"
            }
        },
        \"bootstrap\": {
            \"version\": \"4.5.3\",
            \"resolved\": \"https://registry.npmjs.org/bootstrap/-/bootstrap-4.5.3.tgz\",
            \"integrity\": \"sha512-o9ppKQioXGqhw8Z7mah6KdTYpNQY//tipnkxppWhPbiSWdD+1raYsnhwEZjkTHYbGee4cVQ0Rx65EhOY/HNLcQ==\"
        },
        \"brace-expansion\": {
            \"version\": \"1.1.11\",
            \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-1.1.11.tgz\",
            \"integrity\": \"sha512-iCuPHDFgrHX7H2vEI/5xpz07zSHB00TpugqhmYtVmMO6518mCuRMoOYFldEBl0g187ufozdaHgWKcYFb61qGiA==\",
            \"dev\": true,
            \"requires\": {
                \"balanced-match\": \"^1.0.0\",
                \"concat-map\": \"0.0.1\"
            }
        },
        \"braces\": {
            \"version\": \"2.3.2\",
            \"resolved\": \"https://registry.npmjs.org/braces/-/braces-2.3.2.tgz\",
            \"integrity\": \"sha512-aNdbnj9P8PjdXU4ybaWLK2IF3jc/EoDYbC7AazW6to3TRsfXxscC9UXOB5iDiEQrkyIbWp2SLQda4+QAa7nc3w==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.1.0\",
                \"array-unique\": \"^0.3.2\",
                \"extend-shallow\": \"^2.0.1\",
                \"fill-range\": \"^4.0.0\",
                \"isobject\": \"^3.0.1\",
                \"repeat-element\": \"^1.1.2\",
                \"snapdragon\": \"^0.8.1\",
                \"snapdragon-node\": \"^2.0.1\",
                \"split-string\": \"^3.0.2\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"browser-sync\": {
            \"version\": \"2.26.13\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync/-/browser-sync-2.26.13.tgz\",
            \"integrity\": \"sha512-JPYLTngIzI+Dzx+StSSlMtF+Q9yjdh58HW6bMFqkFXuzQkJL8FCvp4lozlS6BbECZcsM2Gmlgp0uhEjvl18X4w==\",
            \"dev\": true,
            \"requires\": {
                \"browser-sync-client\": \"^2.26.13\",
                \"browser-sync-ui\": \"^2.26.13\",
                \"bs-recipes\": \"1.3.4\",
                \"bs-snippet-injector\": \"^2.0.1\",
                \"chokidar\": \"^3.4.1\",
                \"connect\": \"3.6.6\",
                \"connect-history-api-fallback\": \"^1\",
                \"dev-ip\": \"^1.0.1\",
                \"easy-extender\": \"^2.3.4\",
                \"eazy-logger\": \"3.1.0\",
                \"etag\": \"^1.8.1\",
                \"fresh\": \"^0.5.2\",
                \"fs-extra\": \"3.0.1\",
                \"http-proxy\": \"^1.18.1\",
                \"immutable\": \"^3\",
                \"localtunnel\": \"^2.0.0\",
                \"micromatch\": \"^4.0.2\",
                \"opn\": \"5.3.0\",
                \"portscanner\": \"2.1.1\",
                \"qs\": \"6.2.3\",
                \"raw-body\": \"^2.3.2\",
                \"resp-modifier\": \"6.0.2\",
                \"rx\": \"4.1.0\",
                \"send\": \"0.16.2\",
                \"serve-index\": \"1.9.1\",
                \"serve-static\": \"1.13.2\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io\": \"2.1.1\",
                \"ua-parser-js\": \"^0.7.18\",
                \"yargs\": \"^15.4.1\"
            },
            \"dependencies\": {
                \"anymatch\": {
                    \"version\": \"3.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-3.1.1.tgz\",
                    \"integrity\": \"sha512-mM8522psRCqzV+6LhomX5wgp25YVibjh8Wj23I5RPkPppSVSjyKD2A2mBJmWGa+KN7f2D6LNh9jkBCeyLktzjg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"normalize-path\": \"^3.0.0\",
                        \"picomatch\": \"^2.0.4\"
                    }
                },
                \"binary-extensions\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-2.1.0.tgz\",
                    \"integrity\": \"sha512-1Yj8h9Q+QDF5FzhMs/c9+6UntbD5MkRfRwac8DoEm9ZfUBZ7tZ55YcGVAzEe4bXsdQHEk+s9S5wsOKVdZrw0tQ==\",
                    \"dev\": true
                },
                \"braces\": {
                    \"version\": \"3.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
                    \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
                    \"dev\": true,
                    \"requires\": {
                        \"fill-range\": \"^7.0.1\"
                    }
                },
                \"chokidar\": {
                    \"version\": \"3.4.3\",
                    \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-3.4.3.tgz\",
                    \"integrity\": \"sha512-DtM3g7juCXQxFVSNPNByEC2+NImtBuxQQvWlHunpJIS5Ocr0lG306cC7FCi7cEA0fzmybPUIl4txBIobk1gGOQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"anymatch\": \"~3.1.1\",
                        \"braces\": \"~3.0.2\",
                        \"fsevents\": \"~2.1.2\",
                        \"glob-parent\": \"~5.1.0\",
                        \"is-binary-path\": \"~2.1.0\",
                        \"is-glob\": \"~4.0.1\",
                        \"normalize-path\": \"~3.0.0\",
                        \"readdirp\": \"~3.5.0\"
                    }
                },
                \"fill-range\": {
                    \"version\": \"7.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-7.0.1.tgz\",
                    \"integrity\": \"sha512-qOo9F+dMUmC2Lcb4BbVvnKJxTPjCm+RRpe4gDuGrzkL7mEVl/djYSu2OdQ2Pa302N4oqkSg9ir6jaLWJ2USVpQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"to-regex-range\": \"^5.0.1\"
                    }
                },
                \"glob-parent\": {
                    \"version\": \"5.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-5.1.1.tgz\",
                    \"integrity\": \"sha512-FnI+VGOpnlGHWZxthPGR+QhR78fuiK0sNLkHQv+bL9fQi57lNNdquIbna/WrfROrolq8GK5Ek6BiMwqL/voRYQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-glob\": \"^4.0.1\"
                    }
                },
                \"is-binary-path\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-2.1.0.tgz\",
                    \"integrity\": \"sha512-ZMERYes6pDydyuGidse7OsHxtbI7WVeUEozgR/g7rd0xUimYNlvZRE/K2MgZTjWy725IfelLeVcEM97mmtRGXw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"binary-extensions\": \"^2.0.0\"
                    }
                },
                \"is-number\": {
                    \"version\": \"7.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
                    \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
                    \"dev\": true
                },
                \"micromatch\": {
                    \"version\": \"4.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.2.tgz\",
                    \"integrity\": \"sha512-y7FpHSbMUMoyPbYUSzO6PaZ6FyRnQOpHuKwbo1G+Knck95XVU4QAiKdGEnj5wwoS7PlOgthX/09u5iFJ+aYf5Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"braces\": \"^3.0.1\",
                        \"picomatch\": \"^2.0.5\"
                    }
                },
                \"readdirp\": {
                    \"version\": \"3.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-3.5.0.tgz\",
                    \"integrity\": \"sha512-cMhu7c/8rdhkHXWsY+osBhfSy0JikwpHK/5+imo+LpeasTF8ouErHrlYkwT0++njiyuDvc7OFY5T3ukvZ8qmFQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"picomatch\": \"^2.2.1\"
                    }
                },
                \"to-regex-range\": {
                    \"version\": \"5.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
                    \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-number\": \"^7.0.0\"
                    }
                }
            }
        },
        \"browser-sync-client\": {
            \"version\": \"2.26.13\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-client/-/browser-sync-client-2.26.13.tgz\",
            \"integrity\": \"sha512-p2VbZoYrpuDhkreq+/Sv1MkToHklh7T1OaIntDwpG6Iy2q/XkBcgwPcWjX+WwRNiZjN8MEehxIjEUh12LweLmQ==\",
            \"dev\": true,
            \"requires\": {
                \"etag\": \"1.8.1\",
                \"fresh\": \"0.5.2\",
                \"mitt\": \"^1.1.3\",
                \"rxjs\": \"^5.5.6\"
            }
        },
        \"browser-sync-ui\": {
            \"version\": \"2.26.13\",
            \"resolved\": \"https://registry.npmjs.org/browser-sync-ui/-/browser-sync-ui-2.26.13.tgz\",
            \"integrity\": \"sha512-6NJ/pCnhCnBMzaty1opWo7ipDmFAIk8U71JMQGKJxblCUaGfdsbF2shf6XNZSkXYia1yS0vwKu9LIOzpXqQZCA==\",
            \"dev\": true,
            \"requires\": {
                \"async-each-series\": \"0.1.1\",
                \"connect-history-api-fallback\": \"^1\",
                \"immutable\": \"^3\",
                \"server-destroy\": \"1.0.1\",
                \"socket.io-client\": \"^2.0.4\",
                \"stream-throttle\": \"^0.1.3\"
            }
        },
        \"browserslist\": {
            \"version\": \"4.8.3\",
            \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.8.3.tgz\",
            \"integrity\": \"sha512-iU43cMMknxG1ClEZ2MDKeonKE1CCrFVkQK2AqO2YWFmvIrx4JWrvQ4w4hQez6EpVI8rHTtqh/ruHHDHSOKxvUg==\",
            \"dev\": true,
            \"requires\": {
                \"caniuse-lite\": \"^1.0.30001017\",
                \"electron-to-chromium\": \"^1.3.322\",
                \"node-releases\": \"^1.1.44\"
            }
        },
        \"bs-recipes\": {
            \"version\": \"1.3.4\",
            \"resolved\": \"https://registry.npmjs.org/bs-recipes/-/bs-recipes-1.3.4.tgz\",
            \"integrity\": \"sha1-DS1NSKcYyMBEdp/cT4lZLci2lYU=\",
            \"dev\": true
        },
        \"bs-snippet-injector\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/bs-snippet-injector/-/bs-snippet-injector-2.0.1.tgz\",
            \"integrity\": \"sha1-YbU5PxH1JVntEgaTEANDtu2wTdU=\",
            \"dev\": true
        },
        \"buffer-equal\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/buffer-equal/-/buffer-equal-1.0.0.tgz\",
            \"integrity\": \"sha1-WWFrSYME1Var1GaWayLu2j7KX74=\",
            \"dev\": true
        },
        \"buffer-from\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.1.tgz\",
            \"integrity\": \"sha512-MQcXEUbCKtEo7bhqEs6560Hyd4XaovZlO/k9V3hjVUF/zwW7KBVdSK4gIt/bzwS9MbR5qob+F5jusZsb0YQK2A==\",
            \"dev\": true
        },
        \"bytes\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/bytes/-/bytes-3.1.0.tgz\",
            \"integrity\": \"sha512-zauLjrfCG+xvoyaqLoV8bLVXXNGC4JqlxFCutSDWA6fJrTo2ZuvLYTqZ7aHBLZSMOopbzwv8f+wZcVzfVTI2Dg==\",
            \"dev\": true
        },
        \"cache-base\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/cache-base/-/cache-base-1.0.1.tgz\",
            \"integrity\": \"sha512-AKcdTnFSWATd5/GCPRxr2ChwIJ85CeyrEyjRHlKxQ56d4XJMGym0uAiKn0xbLOGOl3+yRpOTi484dVCEc5AUzQ==\",
            \"dev\": true,
            \"requires\": {
                \"collection-visit\": \"^1.0.0\",
                \"component-emitter\": \"^1.2.1\",
                \"get-value\": \"^2.0.6\",
                \"has-value\": \"^1.0.0\",
                \"isobject\": \"^3.0.1\",
                \"set-value\": \"^2.0.0\",
                \"to-object-path\": \"^0.3.0\",
                \"union-value\": \"^1.0.0\",
                \"unset-value\": \"^1.0.0\"
            }
        },
        \"callsite\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/callsite/-/callsite-1.0.0.tgz\",
            \"integrity\": \"sha1-KAOY5dZkvXQDi28JBRU+borxvCA=\",
            \"dev\": true
        },
        \"camelcase\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-3.0.0.tgz\",
            \"integrity\": \"sha1-MvxLn82vhF/N9+c7uXysImHwqwo=\",
            \"dev\": true
        },
        \"camelcase-keys\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/camelcase-keys/-/camelcase-keys-2.1.0.tgz\",
            \"integrity\": \"sha1-MIvur/3ygRkFHvodkyITyRuPkuc=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^2.0.0\",
                \"map-obj\": \"^1.0.0\"
            },
            \"dependencies\": {
                \"camelcase\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-2.1.1.tgz\",
                    \"integrity\": \"sha1-fB0W1nmhu+WcoCys7PsBHiAfWh8=\",
                    \"dev\": true
                }
            }
        },
        \"caniuse-lite\": {
            \"version\": \"1.0.30001020\",
            \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001020.tgz\",
            \"integrity\": \"sha512-yWIvwA68wRHKanAVS1GjN8vajAv7MBFshullKCeq/eKpK7pJBVDgFFEqvgWTkcP2+wIDeQGYFRXECjKZnLkUjA==\",
            \"dev\": true
        },
        \"caseless\": {
            \"version\": \"0.12.0\",
            \"resolved\": \"https://registry.npmjs.org/caseless/-/caseless-0.12.0.tgz\",
            \"integrity\": \"sha1-G2gcIf+EAzyCZUMJBolCDRhxUdw=\",
            \"dev\": true
        },
        \"chalk\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-1.1.3.tgz\",
            \"integrity\": \"sha1-qBFcVeSnAv5NFQq9OHKCKn4J/Jg=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-styles\": \"^2.2.1\",
                \"escape-string-regexp\": \"^1.0.2\",
                \"has-ansi\": \"^2.0.0\",
                \"strip-ansi\": \"^3.0.0\",
                \"supports-color\": \"^2.0.0\"
            }
        },
        \"chart.js\": {
            \"version\": \"2.9.4\",
            \"resolved\": \"https://registry.npmjs.org/chart.js/-/chart.js-2.9.4.tgz\",
            \"integrity\": \"sha512-B07aAzxcrikjAPyV+01j7BmOpxtQETxTSlQ26BEYJ+3iUkbNKaOJ/nDbT6JjyqYxseM0ON12COHYdU2cTIjC7A==\",
            \"requires\": {
                \"chartjs-color\": \"^2.1.0\",
                \"moment\": \"^2.10.2\"
            }
        },
        \"chartjs-color\": {
            \"version\": \"2.4.1\",
            \"resolved\": \"https://registry.npmjs.org/chartjs-color/-/chartjs-color-2.4.1.tgz\",
            \"integrity\": \"sha512-haqOg1+Yebys/Ts/9bLo/BqUcONQOdr/hoEr2LLTRl6C5LXctUdHxsCYfvQVg5JIxITrfCNUDr4ntqmQk9+/0w==\",
            \"requires\": {
                \"chartjs-color-string\": \"^0.6.0\",
                \"color-convert\": \"^1.9.3\"
            }
        },
        \"chartjs-color-string\": {
            \"version\": \"0.6.0\",
            \"resolved\": \"https://registry.npmjs.org/chartjs-color-string/-/chartjs-color-string-0.6.0.tgz\",
            \"integrity\": \"sha512-TIB5OKn1hPJvO7JcteW4WY/63v6KwEdt6udfnDE9iCAZgy+V4SrbSxoIbTw/xkUIapjEI4ExGtD0+6D3KyFd7A==\",
            \"requires\": {
                \"color-name\": \"^1.0.0\"
            }
        },
        \"chokidar\": {
            \"version\": \"2.1.8\",
            \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-2.1.8.tgz\",
            \"integrity\": \"sha512-ZmZUazfOzf0Nve7duiCKD23PFSCs4JPoYyccjUFF3aQkQadqBhfzhjkwBH2mNOG9cTBwhamM37EIsIkZw3nRgg==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-each\": \"^1.0.1\",
                \"braces\": \"^2.3.2\",
                \"fsevents\": \"^1.2.7\",
                \"glob-parent\": \"^3.1.0\",
                \"inherits\": \"^2.0.3\",
                \"is-binary-path\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"normalize-path\": \"^3.0.0\",
                \"path-is-absolute\": \"^1.0.0\",
                \"readdirp\": \"^2.2.1\",
                \"upath\": \"^1.1.1\"
            },
            \"dependencies\": {
                \"fsevents\": {
                    \"version\": \"1.2.13\",
                    \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-1.2.13.tgz\",
                    \"integrity\": \"sha512-oWb1Z6mkHIskLzEJ/XWX0srkpkTQ7vaopMQkyaEIoq0fmtFVxOthb8cCxeT+p3ynTdkk/RZwbgG4brR5BeWECw==\",
                    \"dev\": true,
                    \"optional\": true,
                    \"requires\": {
                        \"bindings\": \"^1.5.0\",
                        \"nan\": \"^2.12.1\"
                    }
                }
            }
        },
        \"class-utils\": {
            \"version\": \"0.3.6\",
            \"resolved\": \"https://registry.npmjs.org/class-utils/-/class-utils-0.3.6.tgz\",
            \"integrity\": \"sha512-qOhPa/Fj7s6TY8H8esGu5QNpMMQxz79h+urzrNYN6mn+9BnxlDGf5QZ+XeCDsxSjPqsSR56XOZOJmpeurnLMeg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"define-property\": \"^0.2.5\",
                \"isobject\": \"^3.0.0\",
                \"static-extend\": \"^0.1.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"clean-css\": {
            \"version\": \"4.2.3\",
            \"resolved\": \"https://registry.npmjs.org/clean-css/-/clean-css-4.2.3.tgz\",
            \"integrity\": \"sha512-VcMWDN54ZN/DS+g58HYL5/n4Zrqe8vHJpGA8KdgUXFU4fuP/aHNw8eld9SyEIyabIMJX/0RaY/fplOo5hYLSFA==\",
            \"dev\": true,
            \"requires\": {
                \"source-map\": \"~0.6.0\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                }
            }
        },
        \"clean-stack\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/clean-stack/-/clean-stack-2.2.0.tgz\",
            \"integrity\": \"sha512-4diC9HaTE+KRAMWhDhrGOECgWZxoevMc5TlkObMqNSsVU62PYzXZ/SMTjzyGAFF1YusgxGcSWTEXBhp0CPwQ1A==\",
            \"dev\": true
        },
        \"cliui\": {
            \"version\": \"3.2.0\",
            \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-3.2.0.tgz\",
            \"integrity\": \"sha1-EgYBU3qRbSmUD5NNo7SNWFo5IT0=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\",
                \"wrap-ansi\": \"^2.0.0\"
            }
        },
        \"clone\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/clone/-/clone-2.1.2.tgz\",
            \"integrity\": \"sha1-G39Ln1kfHo+DZwQBYANFoCiHQ18=\",
            \"dev\": true
        },
        \"clone-buffer\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-buffer/-/clone-buffer-1.0.0.tgz\",
            \"integrity\": \"sha1-4+JbIHrE5wGvch4staFnksrD3Fg=\",
            \"dev\": true
        },
        \"clone-stats\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/clone-stats/-/clone-stats-1.0.0.tgz\",
            \"integrity\": \"sha1-s3gt/4u1R04Yuba/D9/ngvh3doA=\",
            \"dev\": true
        },
        \"cloneable-readable\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/cloneable-readable/-/cloneable-readable-1.1.3.tgz\",
            \"integrity\": \"sha512-2EF8zTQOxYq70Y4XKtorQupqF0m49MBz2/yf5Bj+MHjvpG3Hy7sImifnqD6UA+TKYxeSV+u6qqQPawN5UvnpKQ==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.1\",
                \"process-nextick-args\": \"^2.0.0\",
                \"readable-stream\": \"^2.3.5\"
            }
        },
        \"code-point-at\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/code-point-at/-/code-point-at-1.1.0.tgz\",
            \"integrity\": \"sha1-DQcLTQQ6W+ozovGkDi7bPZpMz3c=\",
            \"dev\": true
        },
        \"collection-map\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-map/-/collection-map-1.0.0.tgz\",
            \"integrity\": \"sha1-rqDwb40mx4DCt1SUOFVEsiVa8Yw=\",
            \"dev\": true,
            \"requires\": {
                \"arr-map\": \"^2.0.2\",
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"collection-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/collection-visit/-/collection-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-S8A3PBZLwykbTTaMgpzxqApZ3KA=\",
            \"dev\": true,
            \"requires\": {
                \"map-visit\": \"^1.0.0\",
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"color-convert\": {
            \"version\": \"1.9.3\",
            \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-1.9.3.tgz\",
            \"integrity\": \"sha512-QfAUtd+vFdAtFQcC8CCyYt1fYWxSqAiK2cSD6zDB8N3cpsEBAvRxp9zOGg6G/SHHJYAT88/az/IuDGALsNVbGg==\",
            \"requires\": {
                \"color-name\": \"1.1.3\"
            },
            \"dependencies\": {
                \"color-name\": {
                    \"version\": \"1.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.3.tgz\",
                    \"integrity\": \"sha1-p9BVi9icQveV3UIyj3QIMcpTvCU=\"
                }
            }
        },
        \"color-name\": {
            \"version\": \"1.1.4\",
            \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
            \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\"
        },
        \"color-support\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/color-support/-/color-support-1.1.3.tgz\",
            \"integrity\": \"sha512-qiBjkpbMLO/HL68y+lh4q0/O1MZFj2RX6X/KmMa3+gJD3z+WwI1ZzDHysvqHGS3mP6mznPckpXmw1nI9cJjyRg==\",
            \"dev\": true
        },
        \"combined-stream\": {
            \"version\": \"1.0.8\",
            \"resolved\": \"https://registry.npmjs.org/combined-stream/-/combined-stream-1.0.8.tgz\",
            \"integrity\": \"sha512-FQN4MRfuJeHf7cBbBMJFXhKSDq+2kAArBlmRBvcvFE5BB1HZKXtSFASDhdlz9zOYwxh8lDdnvmMOe/+5cdoEdg==\",
            \"dev\": true,
            \"requires\": {
                \"delayed-stream\": \"~1.0.0\"
            }
        },
        \"commander\": {
            \"version\": \"2.20.3\",
            \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
            \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
            \"dev\": true
        },
        \"component-bind\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/component-bind/-/component-bind-1.0.0.tgz\",
            \"integrity\": \"sha1-AMYIq33Nk4l8AAllGx06jh5zu9E=\",
            \"dev\": true
        },
        \"component-emitter\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.2.1.tgz\",
            \"integrity\": \"sha1-E3kY1teCg/ffemt8WmPhQOaUJeY=\",
            \"dev\": true
        },
        \"component-inherit\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/component-inherit/-/component-inherit-0.0.3.tgz\",
            \"integrity\": \"sha1-ZF/ErfWLcrZJ1crmUTVhnbJv8UM=\",
            \"dev\": true
        },
        \"concat-map\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
            \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
            \"dev\": true
        },
        \"concat-stream\": {
            \"version\": \"1.6.2\",
            \"resolved\": \"https://registry.npmjs.org/concat-stream/-/concat-stream-1.6.2.tgz\",
            \"integrity\": \"sha512-27HBghJxjiZtIk3Ycvn/4kbJk/1uZuJFfuPEns6LaEvpvG1f0hTea8lilrouyo9mVc2GWdcEZ8OLoGmSADlrCw==\",
            \"dev\": true,
            \"requires\": {
                \"buffer-from\": \"^1.0.0\",
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.2.2\",
                \"typedarray\": \"^0.0.6\"
            }
        },
        \"concat-with-sourcemaps\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/concat-with-sourcemaps/-/concat-with-sourcemaps-1.1.0.tgz\",
            \"integrity\": \"sha512-4gEjHJFT9e+2W/77h/DS5SGUgwDaOwprX8L/gl5+3ixnzkVJJsZWDSelmN3Oilw3LNDZjZV0yqH1hLG3k6nghg==\",
            \"dev\": true,
            \"requires\": {
                \"source-map\": \"^0.6.1\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                }
            }
        },
        \"connect\": {
            \"version\": \"3.6.6\",
            \"resolved\": \"https://registry.npmjs.org/connect/-/connect-3.6.6.tgz\",
            \"integrity\": \"sha1-Ce/2xVr3I24TcTWnJXSFi2eG9SQ=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"finalhandler\": \"1.1.0\",
                \"parseurl\": \"~1.3.2\",
                \"utils-merge\": \"1.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"connect-history-api-fallback\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/connect-history-api-fallback/-/connect-history-api-fallback-1.6.0.tgz\",
            \"integrity\": \"sha512-e54B99q/OUoH64zYYRf3HBP5z24G38h5D3qXu23JGRoigpX5Ss4r9ZnDk3g0Z8uQC2x2lPaJ+UlWBc1ZWBWdLg==\",
            \"dev\": true
        },
        \"console-control-strings\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/console-control-strings/-/console-control-strings-1.1.0.tgz\",
            \"integrity\": \"sha1-PXz0Rk22RG6mRL9LOVB/mFEAjo4=\",
            \"dev\": true
        },
        \"convert-source-map\": {
            \"version\": \"1.7.0\",
            \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-1.7.0.tgz\",
            \"integrity\": \"sha512-4FJkXzKXEDB1snCFZlLP4gpC3JILicCpGbzG9f9G7tGqGCzETQ2hWPrcinA9oU4wtf2biUaEH5065UnMeR33oA==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.1\"
            }
        },
        \"cookie\": {
            \"version\": \"0.3.1\",
            \"resolved\": \"https://registry.npmjs.org/cookie/-/cookie-0.3.1.tgz\",
            \"integrity\": \"sha1-5+Ch+e9DtMi6klxcWpboBtFoc7s=\",
            \"dev\": true
        },
        \"copy-descriptor\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/copy-descriptor/-/copy-descriptor-0.1.1.tgz\",
            \"integrity\": \"sha1-Z29us8OZl8LuGsOpJP1hJHSPV40=\",
            \"dev\": true
        },
        \"copy-props\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/copy-props/-/copy-props-2.0.4.tgz\",
            \"integrity\": \"sha512-7cjuUME+p+S3HZlbllgsn2CDwS+5eCCX16qBgNC4jgSTf49qR1VKy/Zhl400m0IQXl/bPGEVqncgUUMjrr4s8A==\",
            \"dev\": true,
            \"requires\": {
                \"each-props\": \"^1.3.0\",
                \"is-plain-object\": \"^2.0.1\"
            }
        },
        \"core-util-is\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
            \"integrity\": \"sha1-tf1UIgqivFq1eqtxQMlAdUUDwac=\",
            \"dev\": true
        },
        \"cross-spawn\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/cross-spawn/-/cross-spawn-3.0.1.tgz\",
            \"integrity\": \"sha1-ElYDfsufDF9549bvE14wdwGEuYI=\",
            \"dev\": true,
            \"requires\": {
                \"lru-cache\": \"^4.0.1\",
                \"which\": \"^1.2.9\"
            }
        },
        \"currently-unhandled\": {
            \"version\": \"0.4.1\",
            \"resolved\": \"https://registry.npmjs.org/currently-unhandled/-/currently-unhandled-0.4.1.tgz\",
            \"integrity\": \"sha1-mI3zP+qxke95mmE2nddsF635V+o=\",
            \"dev\": true,
            \"requires\": {
                \"array-find-index\": \"^1.0.1\"
            }
        },
        \"d\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/d/-/d-1.0.1.tgz\",
            \"integrity\": \"sha512-m62ShEObQ39CfralilEQRjH6oAMtNCV1xJyEx5LpRYUVN+EviphDgUc/F3hnYbADmkiNs67Y+3ylmlG7Lnu+FA==\",
            \"dev\": true,
            \"requires\": {
                \"es5-ext\": \"^0.10.50\",
                \"type\": \"^1.0.1\"
            }
        },
        \"dashdash\": {
            \"version\": \"1.14.1\",
            \"resolved\": \"https://registry.npmjs.org/dashdash/-/dashdash-1.14.1.tgz\",
            \"integrity\": \"sha1-hTz6D3y+L+1d4gMmuN1YEDX24vA=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\"
            }
        },
        \"datatables.net\": {
            \"version\": \"1.10.22\",
            \"resolved\": \"https://registry.npmjs.org/datatables.net/-/datatables.net-1.10.22.tgz\",
            \"integrity\": \"sha512-ujn8GvkQIBYzYH54XY7OrI0Zb35TKRd9ABYfbnXgBfwTGIFT6UsmXrfHU5Yk+MSDoF0sDu2TB+31V6c+zUZ0Pw==\",
            \"requires\": {
                \"jquery\": \">=1.7\"
            }
        },
        \"datatables.net-bs4\": {
            \"version\": \"1.10.22\",
            \"resolved\": \"https://registry.npmjs.org/datatables.net-bs4/-/datatables.net-bs4-1.10.22.tgz\",
            \"integrity\": \"sha512-si0eOiaKmuURURpXhPRba7b3vCZsVfJK8pfrlM5WtaOaCEBa62DG/S9guMxUBmcAmvEC3FA2CKc/iKya3gb9qg==\",
            \"requires\": {
                \"datatables.net\": \"1.10.22\",
                \"jquery\": \">=1.7\"
            }
        },
        \"debug\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.1.0.tgz\",
            \"integrity\": \"sha512-OX8XqP7/1a9cqkxYw2yXss15f26NKWBpDXQd0/uK/KPqdQhxbPa994hnzjcE2VqQpDslf55723cKPUOGSmMY3g==\",
            \"dev\": true,
            \"requires\": {
                \"ms\": \"2.0.0\"
            }
        },
        \"decamelize\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
            \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
            \"dev\": true
        },
        \"decode-uri-component\": {
            \"version\": \"0.2.0\",
            \"resolved\": \"https://registry.npmjs.org/decode-uri-component/-/decode-uri-component-0.2.0.tgz\",
            \"integrity\": \"sha1-6zkTMzRYd1y4TNGh+uBiEGu4dUU=\",
            \"dev\": true
        },
        \"default-compare\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-compare/-/default-compare-1.0.0.tgz\",
            \"integrity\": \"sha512-QWfXlM0EkAbqOCbD/6HjdwT19j7WCkMyiRhWilc4H9/5h/RzTF9gv5LYh1+CmDV5d1rki6KAWLtQale0xt20eQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^5.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"default-resolution\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/default-resolution/-/default-resolution-2.0.0.tgz\",
            \"integrity\": \"sha1-vLgrqnKtebQmp2cy8aga1t8m1oQ=\",
            \"dev\": true
        },
        \"define-properties\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.1.3.tgz\",
            \"integrity\": \"sha512-3MqfYKj2lLzdMSf8ZIZE/V+Zuy+BgD6f164e8K2w7dgnpKArBDerGYpM46IYYcjnkdPNMjPk9A6VFB8+3SKlXQ==\",
            \"dev\": true,
            \"requires\": {
                \"object-keys\": \"^1.0.12\"
            }
        },
        \"define-property\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
            \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-descriptor\": \"^1.0.2\",
                \"isobject\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"del\": {
            \"version\": \"6.0.0\",
            \"resolved\": \"https://registry.npmjs.org/del/-/del-6.0.0.tgz\",
            \"integrity\": \"sha512-1shh9DQ23L16oXSZKB2JxpL7iMy2E0S9d517ptA1P8iw0alkPtQcrKH7ru31rYtKwF499HkTu+DRzq3TCKDFRQ==\",
            \"dev\": true,
            \"requires\": {
                \"globby\": \"^11.0.1\",
                \"graceful-fs\": \"^4.2.4\",
                \"is-glob\": \"^4.0.1\",
                \"is-path-cwd\": \"^2.2.0\",
                \"is-path-inside\": \"^3.0.2\",
                \"p-map\": \"^4.0.0\",
                \"rimraf\": \"^3.0.2\",
                \"slash\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"graceful-fs\": {
                    \"version\": \"4.2.4\",
                    \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.4.tgz\",
                    \"integrity\": \"sha512-WjKPNJF79dtJAVniUlGGWHYGz2jWxT6VhN/4m1NdkbZ2nOsEF+cI1Edgql5zCRhs/VsQYRvrXctxktVXZUkixw==\",
                    \"dev\": true
                }
            }
        },
        \"delayed-stream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/delayed-stream/-/delayed-stream-1.0.0.tgz\",
            \"integrity\": \"sha1-3zrhmayt+31ECqrgsp4icrJOxhk=\",
            \"dev\": true
        },
        \"delegates\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/delegates/-/delegates-1.0.0.tgz\",
            \"integrity\": \"sha1-hMbhWbgZBP3KWaDvRM2HDTElD5o=\",
            \"dev\": true
        },
        \"depd\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/depd/-/depd-1.1.2.tgz\",
            \"integrity\": \"sha1-m81S4UwJd2PnSbJ0xDRu0uVgtak=\",
            \"dev\": true
        },
        \"destroy\": {
            \"version\": \"1.0.4\",
            \"resolved\": \"https://registry.npmjs.org/destroy/-/destroy-1.0.4.tgz\",
            \"integrity\": \"sha1-l4hXRCxEdJ5CBmE+N5RiBYJqvYA=\",
            \"dev\": true
        },
        \"detect-file\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/detect-file/-/detect-file-1.0.0.tgz\",
            \"integrity\": \"sha1-8NZtA2cqglyxtzvbP+YjEMjlUrc=\",
            \"dev\": true
        },
        \"dev-ip\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/dev-ip/-/dev-ip-1.0.1.tgz\",
            \"integrity\": \"sha1-p2o+0YVb56ASu4rBbLgPPADcKPA=\",
            \"dev\": true
        },
        \"dir-glob\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/dir-glob/-/dir-glob-3.0.1.tgz\",
            \"integrity\": \"sha512-WkrWp9GR4KXfKGYzOLmTuGVi1UWFfws377n9cc55/tb6DuqyF6pcQ5AbiHEshaDpY9v6oaSr2XCDidGmMwdzIA==\",
            \"dev\": true,
            \"requires\": {
                \"path-type\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"path-type\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-4.0.0.tgz\",
                    \"integrity\": \"sha512-gDKb8aZMDeD/tZWs9P6+q0J9Mwkdl6xMV8TjnGP3qJVJ06bdMgkbBlLU8IdfOsIsFz2BW1rNVT3XuNEl8zPAvw==\",
                    \"dev\": true
                }
            }
        },
        \"dlv\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/dlv/-/dlv-1.1.3.tgz\",
            \"integrity\": \"sha512-+HlytyjlPKnIG8XuRG8WvmBP8xs8P71y+SKKS6ZXWoEgLuePxtDoUEiH7WkdePWrQ5JBpE6aoVqfZfJUQkjXwA==\",
            \"dev\": true
        },
        \"duplexify\": {
            \"version\": \"3.7.1\",
            \"resolved\": \"https://registry.npmjs.org/duplexify/-/duplexify-3.7.1.tgz\",
            \"integrity\": \"sha512-07z8uv2wMyS51kKhD1KsdXJg5WQ6t93RneqRxUHnskXVtlYYkLqM0gqStQZ3pj073g687jPCHrqNfCzawLYh5g==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.0.0\",
                \"inherits\": \"^2.0.1\",
                \"readable-stream\": \"^2.0.0\",
                \"stream-shift\": \"^1.0.0\"
            }
        },
        \"each-props\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/each-props/-/each-props-1.3.2.tgz\",
            \"integrity\": \"sha512-vV0Hem3zAGkJAyU7JSjixeU66rwdynTAa1vofCrSA5fEln+m67Az9CcnkVD776/fsN/UjIWmBDoNRS6t6G9RfA==\",
            \"dev\": true,
            \"requires\": {
                \"is-plain-object\": \"^2.0.1\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"easy-extender\": {
            \"version\": \"2.3.4\",
            \"resolved\": \"https://registry.npmjs.org/easy-extender/-/easy-extender-2.3.4.tgz\",
            \"integrity\": \"sha512-8cAwm6md1YTiPpOvDULYJL4ZS6WfM5/cTeVVh4JsvyYZAoqlRVUpHL9Gr5Fy7HA6xcSZicUia3DeAgO3Us8E+Q==\",
            \"dev\": true,
            \"requires\": {
                \"lodash\": \"^4.17.10\"
            }
        },
        \"eazy-logger\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/eazy-logger/-/eazy-logger-3.1.0.tgz\",
            \"integrity\": \"sha512-/snsn2JqBtUSSstEl4R0RKjkisGHAhvYj89i7r3ytNUKW12y178KDZwXLXIgwDqLW6E/VRMT9qfld7wvFae8bQ==\",
            \"dev\": true,
            \"requires\": {
                \"tfunk\": \"^4.0.0\"
            }
        },
        \"ecc-jsbn\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/ecc-jsbn/-/ecc-jsbn-0.1.2.tgz\",
            \"integrity\": \"sha1-OoOpBOVDUyh4dMVkt1SThoSamMk=\",
            \"dev\": true,
            \"requires\": {
                \"jsbn\": \"~0.1.0\",
                \"safer-buffer\": \"^2.1.0\"
            }
        },
        \"ee-first\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ee-first/-/ee-first-1.1.1.tgz\",
            \"integrity\": \"sha1-WQxhFWsK4vTwJVcyoViyZrxWsh0=\",
            \"dev\": true
        },
        \"electron-to-chromium\": {
            \"version\": \"1.3.334\",
            \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.3.334.tgz\",
            \"integrity\": \"sha512-RcjJhpsVaX0X6ntu/WSBlW9HE9pnCgXS9B8mTUObl1aDxaiOa0Lu+NMveIS5IDC+VELzhM32rFJDCC+AApVwcA==\",
            \"dev\": true
        },
        \"emoji-regex\": {
            \"version\": \"7.0.3\",
            \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-7.0.3.tgz\",
            \"integrity\": \"sha512-CwBLREIQ7LvYFB0WyRvwhq5N5qPhc6PMjD6bYggFlI5YyDgl+0vxq5VHbMOFqLg7hfWzmu8T5Z1QofhmTIhItA==\",
            \"dev\": true
        },
        \"encodeurl\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/encodeurl/-/encodeurl-1.0.2.tgz\",
            \"integrity\": \"sha1-rT/0yG7C0CkyL1oCw6mmBslbP1k=\",
            \"dev\": true
        },
        \"end-of-stream\": {
            \"version\": \"1.4.4\",
            \"resolved\": \"https://registry.npmjs.org/end-of-stream/-/end-of-stream-1.4.4.tgz\",
            \"integrity\": \"sha512-+uw1inIHVPQoaVuHzRyXd21icM+cnt4CzD5rW+NC1wjOUSTOs+Te7FOv7AhN7vS9x/oIyhLP5PR1H+phQAHu5Q==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.4.0\"
            }
        },
        \"engine.io\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/engine.io/-/engine.io-3.2.1.tgz\",
            \"integrity\": \"sha512-+VlKzHzMhaU+GsCIg4AoXF1UdDFjHHwMmMKqMJNDNLlUlejz58FCy4LBqB2YVJskHGYl06BatYWKP2TVdVXE5w==\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"base64id\": \"1.0.0\",
                \"cookie\": \"0.3.1\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.1.0\",
                \"ws\": \"~3.3.1\"
            },
            \"dependencies\": {
                \"base64-arraybuffer\": {
                    \"version\": \"0.1.5\",
                    \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.5.tgz\",
                    \"integrity\": \"sha1-c5JncZI7Whl0etZmqlzUv5xunOg=\",
                    \"dev\": true
                },
                \"engine.io-parser\": {
                    \"version\": \"2.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.1.3.tgz\",
                    \"integrity\": \"sha512-6HXPre2O4Houl7c4g7Ic/XzPnHBvaEmN90vtRO9uLmwtRqQmTOw0QMevL1TOfL2Cpu1VzsaTmMotQgMdkzGkVA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"after\": \"0.8.2\",
                        \"arraybuffer.slice\": \"~0.0.7\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"blob\": \"0.0.5\",
                        \"has-binary2\": \"~1.0.2\"
                    }
                },
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"engine.io-client\": {
            \"version\": \"3.4.4\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.4.4.tgz\",
            \"integrity\": \"sha512-iU4CRr38Fecj8HoZEnFtm2EiKGbYZcPn3cHxqNGl/tmdWRf60KhK+9vE0JeSjgnlS/0oynEfLgKbT9ALpim0sQ==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"~1.3.0\",
                \"component-inherit\": \"0.0.3\",
                \"debug\": \"~3.1.0\",
                \"engine.io-parser\": \"~2.2.0\",
                \"has-cors\": \"1.1.0\",
                \"indexof\": \"0.0.1\",
                \"parseqs\": \"0.0.6\",
                \"parseuri\": \"0.0.6\",
                \"ws\": \"~6.1.0\",
                \"xmlhttprequest-ssl\": \"~1.5.4\",
                \"yeast\": \"0.1.2\"
            },
            \"dependencies\": {
                \"component-emitter\": {
                    \"version\": \"1.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
                    \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
                    \"dev\": true
                }
            }
        },
        \"engine.io-parser\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.2.1.tgz\",
            \"integrity\": \"sha512-x+dN/fBH8Ro8TFwJ+rkB2AmuVw9Yu2mockR/p3W8f8YtExwFgDvBDi0GWyb4ZLkpahtDGZgtr3zLovanJghPqg==\",
            \"dev\": true,
            \"requires\": {
                \"after\": \"0.8.2\",
                \"arraybuffer.slice\": \"~0.0.7\",
                \"base64-arraybuffer\": \"0.1.4\",
                \"blob\": \"0.0.5\",
                \"has-binary2\": \"~1.0.2\"
            }
        },
        \"error-ex\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/error-ex/-/error-ex-1.3.2.tgz\",
            \"integrity\": \"sha512-7dFHNmqeFSEt2ZBsCriorKnn3Z2pj+fd9kmI6QoWw4//DL+icEBfc0U7qJCisqrTsKTjw4fNFy2pW9OqStD84g==\",
            \"dev\": true,
            \"requires\": {
                \"is-arrayish\": \"^0.2.1\"
            }
        },
        \"es5-ext\": {
            \"version\": \"0.10.53\",
            \"resolved\": \"https://registry.npmjs.org/es5-ext/-/es5-ext-0.10.53.tgz\",
            \"integrity\": \"sha512-Xs2Stw6NiNHWypzRTY1MtaG/uJlwCk8kH81920ma8mvN8Xq1gsfhZvpkImLQArw8AHnv8MT2I45J3c0R8slE+Q==\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"~2.0.3\",
                \"es6-symbol\": \"~3.1.3\",
                \"next-tick\": \"~1.0.0\"
            }
        },
        \"es6-iterator\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-iterator/-/es6-iterator-2.0.3.tgz\",
            \"integrity\": \"sha1-p96IkUGgWpSwhUQDstCg+/qY87c=\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.35\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"es6-symbol\": {
            \"version\": \"3.1.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-symbol/-/es6-symbol-3.1.3.tgz\",
            \"integrity\": \"sha512-NJ6Yn3FuDinBaBRWl/q5X/s4koRHBrgKAu+yGI6JCBeiu3qrcbJhwT2GeR/EXVfylRk8dpQVJoLEFhK+Mu31NA==\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"^1.0.1\",
                \"ext\": \"^1.1.2\"
            }
        },
        \"es6-weak-map\": {
            \"version\": \"2.0.3\",
            \"resolved\": \"https://registry.npmjs.org/es6-weak-map/-/es6-weak-map-2.0.3.tgz\",
            \"integrity\": \"sha512-p5um32HOTO1kP+w7PRnB+5lQ43Z6muuMuIMffvDN8ZB4GcnjLBV6zGStpbASIMk4DCAvEaamhe2zhyCb/QXXsA==\",
            \"dev\": true,
            \"requires\": {
                \"d\": \"1\",
                \"es5-ext\": \"^0.10.46\",
                \"es6-iterator\": \"^2.0.3\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"escape-html\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/escape-html/-/escape-html-1.0.3.tgz\",
            \"integrity\": \"sha1-Aljq5NPQwJdN4cFpGI7wBR0dGYg=\",
            \"dev\": true
        },
        \"escape-string-regexp\": {
            \"version\": \"1.0.5\",
            \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
            \"integrity\": \"sha1-G2HAViGQqN/2rjuyzwIAyhMLhtQ=\",
            \"dev\": true
        },
        \"etag\": {
            \"version\": \"1.8.1\",
            \"resolved\": \"https://registry.npmjs.org/etag/-/etag-1.8.1.tgz\",
            \"integrity\": \"sha1-Qa4u62XvpiJorr/qg6x9eSmbCIc=\",
            \"dev\": true
        },
        \"eventemitter3\": {
            \"version\": \"4.0.7\",
            \"resolved\": \"https://registry.npmjs.org/eventemitter3/-/eventemitter3-4.0.7.tgz\",
            \"integrity\": \"sha512-8guHBZCwKnFhYdHr2ysuRWErTwhoN2X8XELRlrRwpmfeY2jjuUN4taQMsULKUVo1K4DvZl+0pgfyoysHxvmvEw==\",
            \"dev\": true
        },
        \"expand-brackets\": {
            \"version\": \"2.1.4\",
            \"resolved\": \"https://registry.npmjs.org/expand-brackets/-/expand-brackets-2.1.4.tgz\",
            \"integrity\": \"sha1-t3c14xXOMPa27/D4OwQVGiJEliI=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.3.3\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"posix-character-classes\": \"^0.1.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
                    \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
                    \"dev\": true
                }
            }
        },
        \"expand-tilde\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/expand-tilde/-/expand-tilde-2.0.2.tgz\",
            \"integrity\": \"sha1-l+gBqgUt8CRU3kawK/YhZCzchQI=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"ext\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/ext/-/ext-1.4.0.tgz\",
            \"integrity\": \"sha512-Key5NIsUxdqKg3vIsdw9dSuXpPCQ297y6wBjL30edxwPgt2E44WcWBZey/ZvUc6sERLTxKdyCu4gZFmUbk1Q7A==\",
            \"dev\": true,
            \"requires\": {
                \"type\": \"^2.0.0\"
            },
            \"dependencies\": {
                \"type\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/type/-/type-2.0.0.tgz\",
                    \"integrity\": \"sha512-KBt58xCHry4Cejnc2ISQAF7QY+ORngsWfxezO68+12hKV6lQY8P/psIkcbjeHWn7MqcgciWJyCCevFMJdIXpow==\",
                    \"dev\": true
                }
            }
        },
        \"extend\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend/-/extend-3.0.2.tgz\",
            \"integrity\": \"sha512-fjquC59cD7CyW6urNXK0FBufkZcoiGG80wTuPujX590cB5Ttln20E2UB4S/WARVqhXffZl2LNgS+gQdPIIim/g==\",
            \"dev\": true
        },
        \"extend-shallow\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
            \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
            \"dev\": true,
            \"requires\": {
                \"assign-symbols\": \"^1.0.0\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"extglob\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/extglob/-/extglob-2.0.4.tgz\",
            \"integrity\": \"sha512-Nmb6QXkELsuBr24CJSkilo6UHHgbekK5UiZgfE6UHD3Eb27YC6oD+bhcT+tJ6cl8dmsgdQxnWlcry8ksBIBLpw==\",
            \"dev\": true,
            \"requires\": {
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^1.0.0\",
                \"expand-brackets\": \"^2.1.4\",
                \"extend-shallow\": \"^2.0.1\",
                \"fragment-cache\": \"^0.2.1\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"extsprintf\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/extsprintf/-/extsprintf-1.3.0.tgz\",
            \"integrity\": \"sha1-lpGEQOMEGnpBT4xS48V06zw+HgU=\",
            \"dev\": true
        },
        \"fancy-log\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/fancy-log/-/fancy-log-1.3.3.tgz\",
            \"integrity\": \"sha512-k9oEhlyc0FrVh25qYuSELjr8oxsCoc4/LEZfg2iJJrfEk/tZL9bCoJE47gqAvI2m/AUjluCS4+3I0eTx8n3AEw==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-gray\": \"^0.1.1\",
                \"color-support\": \"^1.1.3\",
                \"parse-node-version\": \"^1.0.0\",
                \"time-stamp\": \"^1.0.0\"
            }
        },
        \"fast-deep-equal\": {
            \"version\": \"3.1.3\",
            \"resolved\": \"https://registry.npmjs.org/fast-deep-equal/-/fast-deep-equal-3.1.3.tgz\",
            \"integrity\": \"sha512-f3qQ9oQy9j2AhBe/H9VC91wLmKBCCU/gDOnKNAYG5hswO7BLKj09Hc5HYNz9cGI++xlpDCIgDaitVs03ATR84Q==\",
            \"dev\": true
        },
        \"fast-glob\": {
            \"version\": \"3.2.4\",
            \"resolved\": \"https://registry.npmjs.org/fast-glob/-/fast-glob-3.2.4.tgz\",
            \"integrity\": \"sha512-kr/Oo6PX51265qeuCYsyGypiO5uJFgBS0jksyG7FUeCyQzNwYnzrNIMR1NXfkZXsMYXYLRAHgISHBz8gQcxKHQ==\",
            \"dev\": true,
            \"requires\": {
                \"@nodelib/fs.stat\": \"^2.0.2\",
                \"@nodelib/fs.walk\": \"^1.2.3\",
                \"glob-parent\": \"^5.1.0\",
                \"merge2\": \"^1.3.0\",
                \"micromatch\": \"^4.0.2\",
                \"picomatch\": \"^2.2.1\"
            },
            \"dependencies\": {
                \"braces\": {
                    \"version\": \"3.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
                    \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
                    \"dev\": true,
                    \"requires\": {
                        \"fill-range\": \"^7.0.1\"
                    }
                },
                \"fill-range\": {
                    \"version\": \"7.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-7.0.1.tgz\",
                    \"integrity\": \"sha512-qOo9F+dMUmC2Lcb4BbVvnKJxTPjCm+RRpe4gDuGrzkL7mEVl/djYSu2OdQ2Pa302N4oqkSg9ir6jaLWJ2USVpQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"to-regex-range\": \"^5.0.1\"
                    }
                },
                \"glob-parent\": {
                    \"version\": \"5.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-5.1.1.tgz\",
                    \"integrity\": \"sha512-FnI+VGOpnlGHWZxthPGR+QhR78fuiK0sNLkHQv+bL9fQi57lNNdquIbna/WrfROrolq8GK5Ek6BiMwqL/voRYQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-glob\": \"^4.0.1\"
                    }
                },
                \"is-number\": {
                    \"version\": \"7.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
                    \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
                    \"dev\": true
                },
                \"micromatch\": {
                    \"version\": \"4.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.2.tgz\",
                    \"integrity\": \"sha512-y7FpHSbMUMoyPbYUSzO6PaZ6FyRnQOpHuKwbo1G+Knck95XVU4QAiKdGEnj5wwoS7PlOgthX/09u5iFJ+aYf5Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"braces\": \"^3.0.1\",
                        \"picomatch\": \"^2.0.5\"
                    }
                },
                \"to-regex-range\": {
                    \"version\": \"5.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
                    \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-number\": \"^7.0.0\"
                    }
                }
            }
        },
        \"fast-json-stable-stringify\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.1.0.tgz\",
            \"integrity\": \"sha512-lhd/wF+Lk98HZoTCtlVraHtfh5XYijIjalXck7saUtuanSDyLMxnHhSXEDJqHxD7msR8D0uCmqlkwjCV8xvwHw==\",
            \"dev\": true
        },
        \"fastq\": {
            \"version\": \"1.9.0\",
            \"resolved\": \"https://registry.npmjs.org/fastq/-/fastq-1.9.0.tgz\",
            \"integrity\": \"sha512-i7FVWL8HhVY+CTkwFxkN2mk3h+787ixS5S63eb78diVRc1MCssarHq3W5cj0av7YDSwmaV928RNag+U1etRQ7w==\",
            \"dev\": true,
            \"requires\": {
                \"reusify\": \"^1.0.4\"
            }
        },
        \"file-uri-to-path\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/file-uri-to-path/-/file-uri-to-path-1.0.0.tgz\",
            \"integrity\": \"sha512-0Zt+s3L7Vf1biwWZ29aARiVYLx7iMGnEUl9x33fbB/j3jR81u/O2LbqK+Bm1CDSNDKVtJ/YjwY7TUd5SkeLQLw==\",
            \"dev\": true,
            \"optional\": true
        },
        \"fill-range\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-4.0.0.tgz\",
            \"integrity\": \"sha1-1USBHUKPmOsGpj3EAtJAPDKMOPc=\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\",
                \"to-regex-range\": \"^2.1.0\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"finalhandler\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/finalhandler/-/finalhandler-1.1.0.tgz\",
            \"integrity\": \"sha1-zgtoVbRYU+eRsvzGgARtiCU91/U=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"encodeurl\": \"~1.0.1\",
                \"escape-html\": \"~1.0.3\",
                \"on-finished\": \"~2.3.0\",
                \"parseurl\": \"~1.3.2\",
                \"statuses\": \"~1.3.1\",
                \"unpipe\": \"~1.0.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"find-up\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-1.1.2.tgz\",
            \"integrity\": \"sha1-ay6YIrGizgpgq2TWEOzK1TyyTQ8=\",
            \"dev\": true,
            \"requires\": {
                \"path-exists\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"findup-sync\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-3.0.0.tgz\",
            \"integrity\": \"sha512-YbffarhcicEhOrm4CtrwdKBdCuz576RLdhJDsIfvNtxUuhdRet1qZcsMjqbePtAseKdAnDyM/IyXbu7PRPRLYg==\",
            \"dev\": true,
            \"requires\": {
                \"detect-file\": \"^1.0.0\",
                \"is-glob\": \"^4.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve-dir\": \"^1.0.1\"
            }
        },
        \"fined\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/fined/-/fined-1.2.0.tgz\",
            \"integrity\": \"sha512-ZYDqPLGxDkDhDZBjZBb+oD1+j0rA4E0pXY50eplAAOPg2N/gUBSSk5IM1/QhPfyVo19lJ+CvXpqfvk+b2p/8Ng==\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"is-plain-object\": \"^2.0.3\",
                \"object.defaults\": \"^1.1.0\",
                \"object.pick\": \"^1.2.0\",
                \"parse-filepath\": \"^1.0.1\"
            }
        },
        \"flagged-respawn\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/flagged-respawn/-/flagged-respawn-1.0.1.tgz\",
            \"integrity\": \"sha512-lNaHNVymajmk0OJMBn8fVUAU1BtDeKIqKoVhk4xAALB57aALg6b4W0MfJ/cUE0g9YBXy5XhSlPIpYIJ7HaY/3Q==\",
            \"dev\": true
        },
        \"flush-write-stream\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/flush-write-stream/-/flush-write-stream-1.1.1.tgz\",
            \"integrity\": \"sha512-3Z4XhFZ3992uIq0XOqb9AreonueSYphE6oYbpt5+3u06JWklbsPkNv3ZKkP9Bz/r+1MWCaMoSQ28P85+1Yc77w==\",
            \"dev\": true,
            \"requires\": {
                \"inherits\": \"^2.0.3\",
                \"readable-stream\": \"^2.3.6\"
            }
        },
        \"follow-redirects\": {
            \"version\": \"1.13.0\",
            \"resolved\": \"https://registry.npmjs.org/follow-redirects/-/follow-redirects-1.13.0.tgz\",
            \"integrity\": \"sha512-aq6gF1BEKje4a9i9+5jimNFIpq4Q1WiwBToeRK5NvZBd/TRsmW8BsJfOEGkr76TbOyPVD3OVDN910EcUNtRYEA==\",
            \"dev\": true
        },
        \"for-in\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/for-in/-/for-in-1.0.2.tgz\",
            \"integrity\": \"sha1-gQaNKVqBQuwKxybG4iAMMPttXoA=\",
            \"dev\": true
        },
        \"for-own\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/for-own/-/for-own-1.0.0.tgz\",
            \"integrity\": \"sha1-xjMy9BXO3EsE2/5wz4NklMU8tEs=\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.1\"
            }
        },
        \"forever-agent\": {
            \"version\": \"0.6.1\",
            \"resolved\": \"https://registry.npmjs.org/forever-agent/-/forever-agent-0.6.1.tgz\",
            \"integrity\": \"sha1-+8cfDEGt6zf5bFd60e1C2P2sypE=\",
            \"dev\": true
        },
        \"form-data\": {
            \"version\": \"2.3.3\",
            \"resolved\": \"https://registry.npmjs.org/form-data/-/form-data-2.3.3.tgz\",
            \"integrity\": \"sha512-1lLKB2Mu3aGP1Q/2eCOx0fNbRMe7XdwktwOruhfqqd0rIJWwN4Dh+E3hrPSlDCXnSR7UtZ1N38rVXm+6+MEhJQ==\",
            \"dev\": true,
            \"requires\": {
                \"asynckit\": \"^0.4.0\",
                \"combined-stream\": \"^1.0.6\",
                \"mime-types\": \"^2.1.12\"
            }
        },
        \"fragment-cache\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/fragment-cache/-/fragment-cache-0.2.1.tgz\",
            \"integrity\": \"sha1-QpD60n8T6Jvn8zeZxrxaCr//DRk=\",
            \"dev\": true,
            \"requires\": {
                \"map-cache\": \"^0.2.2\"
            }
        },
        \"fresh\": {
            \"version\": \"0.5.2\",
            \"resolved\": \"https://registry.npmjs.org/fresh/-/fresh-0.5.2.tgz\",
            \"integrity\": \"sha1-PYyt2Q2XZWn6g1qx+OSyOhBWBac=\",
            \"dev\": true
        },
        \"fs-extra\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/fs-extra/-/fs-extra-3.0.1.tgz\",
            \"integrity\": \"sha1-N5TzeMWLNC6n27sjCVEJxLO2IpE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"jsonfile\": \"^3.0.0\",
                \"universalify\": \"^0.1.0\"
            }
        },
        \"fs-mkdirp-stream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs-mkdirp-stream/-/fs-mkdirp-stream-1.0.0.tgz\",
            \"integrity\": \"sha1-C3gV/DIBxqaeFNuYzgmMFpNSWes=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"fs.realpath\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
            \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
            \"dev\": true
        },
        \"fsevents\": {
            \"version\": \"2.1.3\",
            \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-2.1.3.tgz\",
            \"integrity\": \"sha512-Auw9a4AxqWpa9GUfj370BMPzzyncfBABW8Mab7BGWBYDj4Isgq+cDKtx0i6u9jcX9pQDnswsaaOTgTmA5pEjuQ==\",
            \"dev\": true,
            \"optional\": true
        },
        \"fstream\": {
            \"version\": \"1.0.12\",
            \"resolved\": \"https://registry.npmjs.org/fstream/-/fstream-1.0.12.tgz\",
            \"integrity\": \"sha512-WvJ193OHa0GHPEL+AycEJgxvBEwyfRkN1vhjca23OaPVMCaLCXTd5qAu82AjTcgP1UJmytkOKb63Ypde7raDIg==\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"inherits\": \"~2.0.0\",
                \"mkdirp\": \">=0.5 0\",
                \"rimraf\": \"2\"
            },
            \"dependencies\": {
                \"rimraf\": {
                    \"version\": \"2.7.1\",
                    \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
                    \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"glob\": \"^7.1.3\"
                    }
                }
            }
        },
        \"function-bind\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.1.tgz\",
            \"integrity\": \"sha512-yIovAzMX49sF8Yl58fSCWJ5svSLuaibPxXQJFLmBObTuCr0Mf1KiPopGM9NiFjiYBCbfaa2Fh6breQ6ANVTI0A==\",
            \"dev\": true
        },
        \"gauge\": {
            \"version\": \"2.7.4\",
            \"resolved\": \"https://registry.npmjs.org/gauge/-/gauge-2.7.4.tgz\",
            \"integrity\": \"sha1-LANAXHU4w51+s3sxcCLjJfsBi/c=\",
            \"dev\": true,
            \"requires\": {
                \"aproba\": \"^1.0.3\",
                \"console-control-strings\": \"^1.0.0\",
                \"has-unicode\": \"^2.0.0\",
                \"object-assign\": \"^4.1.0\",
                \"signal-exit\": \"^3.0.0\",
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\",
                \"wide-align\": \"^1.1.0\"
            }
        },
        \"gaze\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/gaze/-/gaze-1.1.3.tgz\",
            \"integrity\": \"sha512-BRdNm8hbWzFzWHERTrejLqwHDfS4GibPoq5wjTPIoJHoBtKGPg3xAFfxmM+9ztbXelxcf2hwQcaz1PtmFeue8g==\",
            \"dev\": true,
            \"requires\": {
                \"globule\": \"^1.0.0\"
            }
        },
        \"get-caller-file\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-1.0.3.tgz\",
            \"integrity\": \"sha512-3t6rVToeoZfYSGd8YoLFR2DJkiQrIiUrGcjvFX2mDw3bn6k2OtwHN0TNCLbBO+w8qTvimhDkv+LSscbJY1vE6w==\",
            \"dev\": true
        },
        \"get-stdin\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/get-stdin/-/get-stdin-4.0.1.tgz\",
            \"integrity\": \"sha1-uWjGsKBDhDJJAui/Gl3zJXmkUP4=\",
            \"dev\": true
        },
        \"get-value\": {
            \"version\": \"2.0.6\",
            \"resolved\": \"https://registry.npmjs.org/get-value/-/get-value-2.0.6.tgz\",
            \"integrity\": \"sha1-3BXKHGcjh8p2vTesCjlbogQqLCg=\",
            \"dev\": true
        },
        \"getpass\": {
            \"version\": \"0.1.7\",
            \"resolved\": \"https://registry.npmjs.org/getpass/-/getpass-0.1.7.tgz\",
            \"integrity\": \"sha1-Xv+OPmhNVprkyysSgmBOi6YhSfo=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\"
            }
        },
        \"glob\": {
            \"version\": \"7.1.6\",
            \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.6.tgz\",
            \"integrity\": \"sha512-LwaxwyZ72Lk7vZINtNNrywX0ZuLyStrdDtabefZKAY5ZGJhVtgdznluResxNmPitE0SAO+O26sWTHeKSI2wMBA==\",
            \"dev\": true,
            \"requires\": {
                \"fs.realpath\": \"^1.0.0\",
                \"inflight\": \"^1.0.4\",
                \"inherits\": \"2\",
                \"minimatch\": \"^3.0.4\",
                \"once\": \"^1.3.0\",
                \"path-is-absolute\": \"^1.0.0\"
            }
        },
        \"glob-parent\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-3.1.0.tgz\",
            \"integrity\": \"sha1-nmr2KZ2NO9K9QEMIMr0RPfkGxa4=\",
            \"dev\": true,
            \"requires\": {
                \"is-glob\": \"^3.1.0\",
                \"path-dirname\": \"^1.0.0\"
            },
            \"dependencies\": {
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"glob-stream\": {
            \"version\": \"6.1.0\",
            \"resolved\": \"https://registry.npmjs.org/glob-stream/-/glob-stream-6.1.0.tgz\",
            \"integrity\": \"sha1-cEXJlBOz65SIjYOrRtC0BMx73eQ=\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"glob\": \"^7.1.1\",
                \"glob-parent\": \"^3.1.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"ordered-read-streams\": \"^1.0.0\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.1.5\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"to-absolute-glob\": \"^2.0.0\",
                \"unique-stream\": \"^2.0.2\"
            }
        },
        \"glob-watcher\": {
            \"version\": \"5.0.3\",
            \"resolved\": \"https://registry.npmjs.org/glob-watcher/-/glob-watcher-5.0.3.tgz\",
            \"integrity\": \"sha512-8tWsULNEPHKQ2MR4zXuzSmqbdyV5PtwwCaWSGQ1WwHsJ07ilNeN1JB8ntxhckbnpSHaf9dXFUHzIWvm1I13dsg==\",
            \"dev\": true,
            \"requires\": {
                \"anymatch\": \"^2.0.0\",
                \"async-done\": \"^1.2.0\",
                \"chokidar\": \"^2.0.0\",
                \"is-negated-glob\": \"^1.0.0\",
                \"just-debounce\": \"^1.0.0\",
                \"object.defaults\": \"^1.1.0\"
            }
        },
        \"global-modules\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/global-modules/-/global-modules-1.0.0.tgz\",
            \"integrity\": \"sha512-sKzpEkf11GpOFuw0Zzjzmt4B4UZwjOcG757PPvrfhxcLFbq0wpsgpOqxpxtxFiCG4DtG93M6XRVbF2oGdev7bg==\",
            \"dev\": true,
            \"requires\": {
                \"global-prefix\": \"^1.0.1\",
                \"is-windows\": \"^1.0.1\",
                \"resolve-dir\": \"^1.0.0\"
            }
        },
        \"global-prefix\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/global-prefix/-/global-prefix-1.0.2.tgz\",
            \"integrity\": \"sha1-2/dDxsFJklk8ZVVoy2btMsASLr4=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.2\",
                \"homedir-polyfill\": \"^1.0.1\",
                \"ini\": \"^1.3.4\",
                \"is-windows\": \"^1.0.1\",
                \"which\": \"^1.2.14\"
            }
        },
        \"globby\": {
            \"version\": \"11.0.1\",
            \"resolved\": \"https://registry.npmjs.org/globby/-/globby-11.0.1.tgz\",
            \"integrity\": \"sha512-iH9RmgwCmUJHi2z5o2l3eTtGBtXek1OYlHrbcxOYugyHLmAsZrPj43OtHThd62Buh/Vv6VyCBD2bdyWcGNQqoQ==\",
            \"dev\": true,
            \"requires\": {
                \"array-union\": \"^2.1.0\",
                \"dir-glob\": \"^3.0.1\",
                \"fast-glob\": \"^3.1.1\",
                \"ignore\": \"^5.1.4\",
                \"merge2\": \"^1.3.0\",
                \"slash\": \"^3.0.0\"
            }
        },
        \"globule\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/globule/-/globule-1.3.2.tgz\",
            \"integrity\": \"sha512-7IDTQTIu2xzXkT+6mlluidnWo+BypnbSoEVVQCGfzqnl5Ik8d3e1d4wycb8Rj9tWW+Z39uPWsdlquqiqPCd/pA==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"~7.1.1\",
                \"lodash\": \"~4.17.10\",
                \"minimatch\": \"~3.0.2\"
            }
        },
        \"glogg\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/glogg/-/glogg-1.0.2.tgz\",
            \"integrity\": \"sha512-5mwUoSuBk44Y4EshyiqcH95ZntbDdTQqA3QYSrxmzj28Ai0vXBGMH1ApSANH14j2sIRtqCEyg6PfsuP7ElOEDA==\",
            \"dev\": true,
            \"requires\": {
                \"sparkles\": \"^1.0.0\"
            }
        },
        \"graceful-fs\": {
            \"version\": \"4.2.3\",
            \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.3.tgz\",
            \"integrity\": \"sha512-a30VEBm4PEdx1dRB7MFK7BejejvCvBronbLjht+sHuGYj8PHs7M/5Z+rt5lw551vZ7yfTCj4Vuyy3mSJytDWRQ==\",
            \"dev\": true
        },
        \"gulp\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/gulp/-/gulp-4.0.2.tgz\",
            \"integrity\": \"sha512-dvEs27SCZt2ibF29xYgmnwwCYZxdxhQ/+LFWlbAW8y7jt68L/65402Lz3+CKy0Ov4rOs+NERmDq7YlZaDqUIfA==\",
            \"dev\": true,
            \"requires\": {
                \"glob-watcher\": \"^5.0.3\",
                \"gulp-cli\": \"^2.2.0\",
                \"undertaker\": \"^1.2.1\",
                \"vinyl-fs\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"gulp-cli\": {
                    \"version\": \"2.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/gulp-cli/-/gulp-cli-2.2.0.tgz\",
                    \"integrity\": \"sha512-rGs3bVYHdyJpLqR0TUBnlcZ1O5O++Zs4bA0ajm+zr3WFCfiSLjGwoCBqFs18wzN+ZxahT9DkOK5nDf26iDsWjA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-colors\": \"^1.0.1\",
                        \"archy\": \"^1.0.0\",
                        \"array-sort\": \"^1.0.0\",
                        \"color-support\": \"^1.1.3\",
                        \"concat-stream\": \"^1.6.0\",
                        \"copy-props\": \"^2.0.1\",
                        \"fancy-log\": \"^1.3.2\",
                        \"gulplog\": \"^1.0.0\",
                        \"interpret\": \"^1.1.0\",
                        \"isobject\": \"^3.0.1\",
                        \"liftoff\": \"^3.1.0\",
                        \"matchdep\": \"^2.0.0\",
                        \"mute-stdout\": \"^1.0.0\",
                        \"pretty-hrtime\": \"^1.0.0\",
                        \"replace-homedir\": \"^1.0.0\",
                        \"semver-greatest-satisfied-range\": \"^1.1.0\",
                        \"v8flags\": \"^3.0.1\",
                        \"yargs\": \"^7.1.0\"
                    }
                },
                \"yargs\": {
                    \"version\": \"7.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-7.1.0.tgz\",
                    \"integrity\": \"sha1-a6MY6xaWFyf10oT46gA+jWFU0Mg=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\",
                        \"cliui\": \"^3.2.0\",
                        \"decamelize\": \"^1.1.1\",
                        \"get-caller-file\": \"^1.0.1\",
                        \"os-locale\": \"^1.4.0\",
                        \"read-pkg-up\": \"^1.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^1.0.1\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^1.0.2\",
                        \"which-module\": \"^1.0.0\",
                        \"y18n\": \"^3.2.1\",
                        \"yargs-parser\": \"^5.0.0\"
                    }
                },
                \"yargs-parser\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-5.0.0.tgz\",
                    \"integrity\": \"sha1-J17PDX/+Bcd+ZOfIbkzZS/DhIoo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^3.0.0\"
                    }
                }
            }
        },
        \"gulp-autoprefixer\": {
            \"version\": \"7.0.1\",
            \"resolved\": \"https://registry.npmjs.org/gulp-autoprefixer/-/gulp-autoprefixer-7.0.1.tgz\",
            \"integrity\": \"sha512-QJGEmHw+bEt7FSqvmbAUTxbCuNLJYx4sz3ox9WouYqT/7j5FH5CQ8ZnpL1M7H5npX1bUJa7lUVY1w20jXxhOxg==\",
            \"dev\": true,
            \"requires\": {
                \"autoprefixer\": \"^9.6.1\",
                \"fancy-log\": \"^1.3.2\",
                \"plugin-error\": \"^1.0.1\",
                \"postcss\": \"^7.0.17\",
                \"through2\": \"^3.0.1\",
                \"vinyl-sourcemaps-apply\": \"^0.2.1\"
            },
            \"dependencies\": {
                \"through2\": {
                    \"version\": \"3.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/through2/-/through2-3.0.1.tgz\",
                    \"integrity\": \"sha512-M96dvTalPT3YbYLaKaCuwu+j06D/8Jfib0o/PxbVt6Amhv3dUAtW6rTV1jPgJSBG83I/e04Y6xkVdVhSRhi0ww==\",
                    \"dev\": true,
                    \"requires\": {
                        \"readable-stream\": \"2 || 3\"
                    }
                }
            }
        },
        \"gulp-clean-css\": {
            \"version\": \"4.3.0\",
            \"resolved\": \"https://registry.npmjs.org/gulp-clean-css/-/gulp-clean-css-4.3.0.tgz\",
            \"integrity\": \"sha512-mGyeT3qqFXTy61j0zOIciS4MkYziF2U594t2Vs9rUnpkEHqfu6aDITMp8xOvZcvdX61Uz3y1mVERRYmjzQF5fg==\",
            \"dev\": true,
            \"requires\": {
                \"clean-css\": \"4.2.3\",
                \"plugin-error\": \"1.0.1\",
                \"through2\": \"3.0.1\",
                \"vinyl-sourcemaps-apply\": \"0.2.1\"
            },
            \"dependencies\": {
                \"through2\": {
                    \"version\": \"3.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/through2/-/through2-3.0.1.tgz\",
                    \"integrity\": \"sha512-M96dvTalPT3YbYLaKaCuwu+j06D/8Jfib0o/PxbVt6Amhv3dUAtW6rTV1jPgJSBG83I/e04Y6xkVdVhSRhi0ww==\",
                    \"dev\": true,
                    \"requires\": {
                        \"readable-stream\": \"2 || 3\"
                    }
                }
            }
        },
        \"gulp-header\": {
            \"version\": \"2.0.9\",
            \"resolved\": \"https://registry.npmjs.org/gulp-header/-/gulp-header-2.0.9.tgz\",
            \"integrity\": \"sha512-LMGiBx+qH8giwrOuuZXSGvswcIUh0OiioNkUpLhNyvaC6/Ga8X6cfAeme2L5PqsbXMhL8o8b/OmVqIQdxprhcQ==\",
            \"dev\": true,
            \"requires\": {
                \"concat-with-sourcemaps\": \"^1.1.0\",
                \"lodash.template\": \"^4.5.0\",
                \"map-stream\": \"0.0.7\",
                \"through2\": \"^2.0.0\"
            }
        },
        \"gulp-plumber\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/gulp-plumber/-/gulp-plumber-1.2.1.tgz\",
            \"integrity\": \"sha512-mctAi9msEAG7XzW5ytDVZ9PxWMzzi1pS2rBH7lA095DhMa6KEXjm+St0GOCc567pJKJ/oCvosVAZEpAey0q2eQ==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^1.1.3\",
                \"fancy-log\": \"^1.3.2\",
                \"plugin-error\": \"^0.1.2\",
                \"through2\": \"^2.0.3\"
            },
            \"dependencies\": {
                \"arr-diff\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-1.1.0.tgz\",
                    \"integrity\": \"sha1-aHwydYFjWI/vfeezb6vklesaOZo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"arr-flatten\": \"^1.0.1\",
                        \"array-slice\": \"^0.2.3\"
                    }
                },
                \"arr-union\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-2.1.0.tgz\",
                    \"integrity\": \"sha1-IPnqtexw9cfSFbEHexw5Fh0pLH0=\",
                    \"dev\": true
                },
                \"array-slice\": {
                    \"version\": \"0.2.3\",
                    \"resolved\": \"https://registry.npmjs.org/array-slice/-/array-slice-0.2.3.tgz\",
                    \"integrity\": \"sha1-3Tz7gO15c6dRF82sabC5nshhhvU=\",
                    \"dev\": true
                },
                \"extend-shallow\": {
                    \"version\": \"1.1.4\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-1.1.4.tgz\",
                    \"integrity\": \"sha1-Gda/lN/AnXa6cR85uHLSH/TdkHE=\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^1.1.0\"
                    }
                },
                \"kind-of\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-1.1.0.tgz\",
                    \"integrity\": \"sha1-FAo9LUGjbS78+pN3tiwk+ElaXEQ=\",
                    \"dev\": true
                },
                \"plugin-error\": {
                    \"version\": \"0.1.2\",
                    \"resolved\": \"https://registry.npmjs.org/plugin-error/-/plugin-error-0.1.2.tgz\",
                    \"integrity\": \"sha1-O5uzM1zPAPQl4HQ34ZJ2ln2kes4=\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-cyan\": \"^0.1.1\",
                        \"ansi-red\": \"^0.1.1\",
                        \"arr-diff\": \"^1.0.1\",
                        \"arr-union\": \"^2.0.1\",
                        \"extend-shallow\": \"^1.1.2\"
                    }
                }
            }
        },
        \"gulp-rename\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/gulp-rename/-/gulp-rename-2.0.0.tgz\",
            \"integrity\": \"sha512-97Vba4KBzbYmR5VBs9mWmK+HwIf5mj+/zioxfZhOKeXtx5ZjBk57KFlePf5nxq9QsTtFl0ejnHE3zTC9MHXqyQ==\",
            \"dev\": true
        },
        \"gulp-sass\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/gulp-sass/-/gulp-sass-4.1.0.tgz\",
            \"integrity\": \"sha512-xIiwp9nkBLcJDpmYHbEHdoWZv+j+WtYaKD6Zil/67F3nrAaZtWYN5mDwerdo7EvcdBenSAj7Xb2hx2DqURLGdA==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^2.3.0\",
                \"lodash\": \"^4.17.11\",
                \"node-sass\": \"^4.8.3\",
                \"plugin-error\": \"^1.0.1\",
                \"replace-ext\": \"^1.0.0\",
                \"strip-ansi\": \"^4.0.0\",
                \"through2\": \"^2.0.0\",
                \"vinyl-sourcemaps-apply\": \"^0.2.0\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-3.0.0.tgz\",
                    \"integrity\": \"sha1-7QMXwyIGT3lGbAKWa922Bas32Zg=\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"chalk\": {
                    \"version\": \"2.4.2\",
                    \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
                    \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.1\",
                        \"escape-string-regexp\": \"^1.0.5\",
                        \"supports-color\": \"^5.3.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-4.0.0.tgz\",
                    \"integrity\": \"sha1-qEeQIusaw2iocTibY1JixQXuNo8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^3.0.0\"
                    }
                },
                \"supports-color\": {
                    \"version\": \"5.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
                    \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
                    \"dev\": true,
                    \"requires\": {
                        \"has-flag\": \"^3.0.0\"
                    }
                }
            }
        },
        \"gulp-uglify\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/gulp-uglify/-/gulp-uglify-3.0.2.tgz\",
            \"integrity\": \"sha512-gk1dhB74AkV2kzqPMQBLA3jPoIAPd/nlNzP2XMDSG8XZrqnlCiDGAqC+rZOumzFvB5zOphlFh6yr3lgcAb/OOg==\",
            \"dev\": true,
            \"requires\": {
                \"array-each\": \"^1.0.1\",
                \"extend-shallow\": \"^3.0.2\",
                \"gulplog\": \"^1.0.0\",
                \"has-gulplog\": \"^0.1.0\",
                \"isobject\": \"^3.0.1\",
                \"make-error-cause\": \"^1.1.1\",
                \"safe-buffer\": \"^5.1.2\",
                \"through2\": \"^2.0.0\",
                \"uglify-js\": \"^3.0.5\",
                \"vinyl-sourcemaps-apply\": \"^0.2.0\"
            }
        },
        \"gulplog\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/gulplog/-/gulplog-1.0.0.tgz\",
            \"integrity\": \"sha1-4oxNRdBey77YGDY86PnFkmIp/+U=\",
            \"dev\": true,
            \"requires\": {
                \"glogg\": \"^1.0.0\"
            }
        },
        \"har-schema\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/har-schema/-/har-schema-2.0.0.tgz\",
            \"integrity\": \"sha1-qUwiJOvKwEeCoNkDVSHyRzW37JI=\",
            \"dev\": true
        },
        \"har-validator\": {
            \"version\": \"5.1.5\",
            \"resolved\": \"https://registry.npmjs.org/har-validator/-/har-validator-5.1.5.tgz\",
            \"integrity\": \"sha512-nmT2T0lljbxdQZfspsno9hgrG3Uir6Ks5afism62poxqBM6sDnMEuPmzTq8XN0OEwqKLLdh1jQI3qyE66Nzb3w==\",
            \"dev\": true,
            \"requires\": {
                \"ajv\": \"^6.12.3\",
                \"har-schema\": \"^2.0.0\"
            }
        },
        \"has-ansi\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-ansi/-/has-ansi-2.0.0.tgz\",
            \"integrity\": \"sha1-NPUEnOHs3ysGSa8+8k5F7TVBbZE=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"has-binary2\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/has-binary2/-/has-binary2-1.0.3.tgz\",
            \"integrity\": \"sha512-G1LWKhDSvhGeAQ8mPVQlqNcOB2sJdwATtZKl2pDKKHfpf/rYj24lkinxf69blJbnsvtqqNU+L3SL50vzZhXOnw==\",
            \"dev\": true,
            \"requires\": {
                \"isarray\": \"2.0.1\"
            }
        },
        \"has-cors\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/has-cors/-/has-cors-1.1.0.tgz\",
            \"integrity\": \"sha1-XkdHk/fqmEPRu5nCPu9J/xJv/zk=\",
            \"dev\": true
        },
        \"has-flag\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-3.0.0.tgz\",
            \"integrity\": \"sha1-tdRU3CGZriJWmfNGfloH87lVuv0=\",
            \"dev\": true
        },
        \"has-gulplog\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/has-gulplog/-/has-gulplog-0.1.0.tgz\",
            \"integrity\": \"sha1-ZBTIKRNpfaUVkDl9r7EvIpZ4Ec4=\",
            \"dev\": true,
            \"requires\": {
                \"sparkles\": \"^1.0.0\"
            }
        },
        \"has-symbols\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.1.tgz\",
            \"integrity\": \"sha512-PLcsoqu++dmEIZB+6totNFKq/7Do+Z0u4oT0zKOJNl3lYK6vGwwu2hjHs+68OEZbTjiUE9bgOABXbP/GvrS0Kg==\",
            \"dev\": true
        },
        \"has-unicode\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/has-unicode/-/has-unicode-2.0.1.tgz\",
            \"integrity\": \"sha1-4Ob+aijPUROIVeCG0Wkedx3iqLk=\",
            \"dev\": true
        },
        \"has-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-1.0.0.tgz\",
            \"integrity\": \"sha1-GLKB2lhbHFxR3vJMkw7SmgvmsXc=\",
            \"dev\": true,
            \"requires\": {
                \"get-value\": \"^2.0.6\",
                \"has-values\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"has-values\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-1.0.0.tgz\",
            \"integrity\": \"sha1-lbC2P+whRmGab+V/51Yo1aOe/k8=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"kind-of\": \"^4.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-4.0.0.tgz\",
                    \"integrity\": \"sha1-IIE989cSkosgc3hpGkUGb65y3Vc=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"homedir-polyfill\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
            \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
            \"dev\": true,
            \"requires\": {
                \"parse-passwd\": \"^1.0.0\"
            }
        },
        \"hosted-git-info\": {
            \"version\": \"2.8.5\",
            \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.8.5.tgz\",
            \"integrity\": \"sha512-kssjab8CvdXfcXMXVcvsXum4Hwdq9XGtRD3TteMEvEbq0LXyiNQr6AprqKqfeaDXze7SxWvRxdpwE6ku7ikLkg==\",
            \"dev\": true
        },
        \"http-errors\": {
            \"version\": \"1.7.3\",
            \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.7.3.tgz\",
            \"integrity\": \"sha512-ZTTX0MWrsQ2ZAhA1cejAwDLycFsd7I7nVtnkT3Ol0aqodaKW+0CTZDQ1uBv5whptCnc8e8HeRRJxRs0kmm/Qfw==\",
            \"dev\": true,
            \"requires\": {
                \"depd\": \"~1.1.2\",
                \"inherits\": \"2.0.4\",
                \"setprototypeof\": \"1.1.1\",
                \"statuses\": \">= 1.5.0 < 2\",
                \"toidentifier\": \"1.0.0\"
            },
            \"dependencies\": {
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"http-proxy\": {
            \"version\": \"1.18.1\",
            \"resolved\": \"https://registry.npmjs.org/http-proxy/-/http-proxy-1.18.1.tgz\",
            \"integrity\": \"sha512-7mz/721AbnJwIVbnaSv1Cz3Am0ZLT/UBwkC92VlxhXv/k/BBQfM2fXElQNC27BVGr0uwUpplYPQM9LnaBMR5NQ==\",
            \"dev\": true,
            \"requires\": {
                \"eventemitter3\": \"^4.0.0\",
                \"follow-redirects\": \"^1.0.0\",
                \"requires-port\": \"^1.0.0\"
            }
        },
        \"http-signature\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/http-signature/-/http-signature-1.2.0.tgz\",
            \"integrity\": \"sha1-muzZJRFHcvPZW2WmCruPfBj7rOE=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\",
                \"jsprim\": \"^1.2.2\",
                \"sshpk\": \"^1.7.0\"
            }
        },
        \"iconv-lite\": {
            \"version\": \"0.4.24\",
            \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.4.24.tgz\",
            \"integrity\": \"sha512-v3MXnZAcvnywkTUEZomIActle7RXXeedOR31wwl7VlyoXO4Qi9arvSenNQWne1TcRwhCL1HwLI21bEqdpj8/rA==\",
            \"dev\": true,
            \"requires\": {
                \"safer-buffer\": \">= 2.1.2 < 3\"
            }
        },
        \"ignore\": {
            \"version\": \"5.1.8\",
            \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-5.1.8.tgz\",
            \"integrity\": \"sha512-BMpfD7PpiETpBl/A6S498BaIJ6Y/ABT93ETbby2fP00v4EbvPBXWEoaR1UBPKs3iR53pJY7EtZk5KACI57i1Uw==\",
            \"dev\": true
        },
        \"immutable\": {
            \"version\": \"3.8.2\",
            \"resolved\": \"https://registry.npmjs.org/immutable/-/immutable-3.8.2.tgz\",
            \"integrity\": \"sha1-wkOZUUVbs5kT2vKBN28VMOEErfM=\",
            \"dev\": true
        },
        \"in-publish\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/in-publish/-/in-publish-2.0.1.tgz\",
            \"integrity\": \"sha512-oDM0kUSNFC31ShNxHKUyfZKy8ZeXZBWMjMdZHKLOk13uvT27VTL/QzRGfRUcevJhpkZAvlhPYuXkF7eNWrtyxQ==\",
            \"dev\": true
        },
        \"indent-string\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-4.0.0.tgz\",
            \"integrity\": \"sha512-EdDDZu4A2OyIK7Lr/2zG+w5jmbuk1DVBnEwREQvBzspBJkCEbRa8GxU1lghYcaGJCnRWibjDXlq779X1/y5xwg==\",
            \"dev\": true
        },
        \"indexof\": {
            \"version\": \"0.0.1\",
            \"resolved\": \"https://registry.npmjs.org/indexof/-/indexof-0.0.1.tgz\",
            \"integrity\": \"sha1-gtwzbSMrkGIXnQWrMpOmYFn9Q10=\",
            \"dev\": true
        },
        \"inflight\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/inflight/-/inflight-1.0.6.tgz\",
            \"integrity\": \"sha1-Sb1jMdfQLQwJvJEKEHW6gWW1bfk=\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.0\",
                \"wrappy\": \"1\"
            }
        },
        \"inherits\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
            \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
            \"dev\": true
        },
        \"ini\": {
            \"version\": \"1.3.5\",
            \"resolved\": \"https://registry.npmjs.org/ini/-/ini-1.3.5.tgz\",
            \"integrity\": \"sha512-RZY5huIKCMRWDUqZlEi72f/lmXKMvuszcMBduliQ3nnWbx9X/ZBQO7DijMEYS9EhHBb2qacRUMtC7svLwe0lcw==\",
            \"dev\": true
        },
        \"interpret\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-1.2.0.tgz\",
            \"integrity\": \"sha512-mT34yGKMNceBQUoVn7iCDKDntA7SC6gycMAWzGx1z/CMCTV7b2AAtXlo3nRyHZ1FelRkQbQjprHSYGwzLtkVbw==\",
            \"dev\": true
        },
        \"invert-kv\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/invert-kv/-/invert-kv-1.0.0.tgz\",
            \"integrity\": \"sha1-EEqOSqym09jNFXqO+L+rLXo//bY=\",
            \"dev\": true
        },
        \"is-absolute\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-absolute/-/is-absolute-1.0.0.tgz\",
            \"integrity\": \"sha512-dOWoqflvcydARa360Gvv18DZ/gRuHKi2NU/wU5X1ZFzdYfH29nkiNZsF3mp4OJ3H4yo9Mx8A/uAGNzpzPN3yBA==\",
            \"dev\": true,
            \"requires\": {
                \"is-relative\": \"^1.0.0\",
                \"is-windows\": \"^1.0.1\"
            }
        },
        \"is-accessor-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha1-qeEss66Nh2cn7u84Q/igiXtcmNY=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-arrayish\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-arrayish/-/is-arrayish-0.2.1.tgz\",
            \"integrity\": \"sha1-d8mYQFJ6qOyxqLppe4BkWnqSap0=\",
            \"dev\": true
        },
        \"is-binary-path\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-1.0.1.tgz\",
            \"integrity\": \"sha1-dfFmQrSA8YenEcgUFh/TpKdlWJg=\",
            \"dev\": true,
            \"requires\": {
                \"binary-extensions\": \"^1.0.0\"
            }
        },
        \"is-buffer\": {
            \"version\": \"1.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-1.1.6.tgz\",
            \"integrity\": \"sha512-NcdALwpXkTm5Zvvbk7owOUSvVvBKDgKP5/ewfXEznmQFfs4ZRmanOeKBTjRVjka3QFoN6XJ+9F3USqfHqTaU5w==\",
            \"dev\": true
        },
        \"is-data-descriptor\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-0.1.4.tgz\",
            \"integrity\": \"sha1-C17mSDiOLIYCgueT8YVv7D8wG1Y=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-descriptor\": {
            \"version\": \"0.1.6\",
            \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-0.1.6.tgz\",
            \"integrity\": \"sha512-avDYr0SB3DwO9zsMov0gKCESFYqCnE4hq/4z3TdUlukEy5t9C0YRq7HLrsN52NAcqXKaepeCD0n+B0arnVG3Hg==\",
            \"dev\": true,
            \"requires\": {
                \"is-accessor-descriptor\": \"^0.1.6\",
                \"is-data-descriptor\": \"^0.1.4\",
                \"kind-of\": \"^5.0.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
                    \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
                    \"dev\": true
                }
            }
        },
        \"is-extendable\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
            \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
            \"dev\": true
        },
        \"is-extglob\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
            \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
            \"dev\": true
        },
        \"is-finite\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-finite/-/is-finite-1.1.0.tgz\",
            \"integrity\": \"sha512-cdyMtqX/BOqqNBBiKlIVkytNHm49MtMlYyn1zxzvJKWmFMlGzm+ry5BBfYyeY9YmNKbRSo/o7OX9w9ale0wg3w==\",
            \"dev\": true
        },
        \"is-fullwidth-code-point\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-1.0.0.tgz\",
            \"integrity\": \"sha1-754xOG8DGn8NZDr4L95QxFfvAMs=\",
            \"dev\": true,
            \"requires\": {
                \"number-is-nan\": \"^1.0.0\"
            }
        },
        \"is-glob\": {
            \"version\": \"4.0.1\",
            \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-4.0.1.tgz\",
            \"integrity\": \"sha512-5G0tKtBTFImOqDnLB2hG6Bp2qcKEFduo4tZu9MT/H6NQv/ghhy30o55ufafxJ/LdH79LLs2Kfrn85TLKyA7BUg==\",
            \"dev\": true,
            \"requires\": {
                \"is-extglob\": \"^2.1.1\"
            }
        },
        \"is-negated-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-negated-glob/-/is-negated-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-aRC8pdqMleeEtXUbl2z1oQ/uNtI=\",
            \"dev\": true
        },
        \"is-number\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-3.0.0.tgz\",
            \"integrity\": \"sha1-JP1iAaR4LPUFYcgQJ2r8fRLXEZU=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"is-number-like\": {
            \"version\": \"1.0.8\",
            \"resolved\": \"https://registry.npmjs.org/is-number-like/-/is-number-like-1.0.8.tgz\",
            \"integrity\": \"sha512-6rZi3ezCyFcn5L71ywzz2bS5b2Igl1En3eTlZlvKjpz1n3IZLAYMbKYAIQgFmEu0GENg92ziU/faEOA/aixjbA==\",
            \"dev\": true,
            \"requires\": {
                \"lodash.isfinite\": \"^3.3.2\"
            }
        },
        \"is-path-cwd\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/is-path-cwd/-/is-path-cwd-2.2.0.tgz\",
            \"integrity\": \"sha512-w942bTcih8fdJPJmQHFzkS76NEP8Kzzvmw92cXsazb8intwLqPibPPdXf4ANdKV3rYMuuQYGIWtvz9JilB3NFQ==\",
            \"dev\": true
        },
        \"is-path-inside\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-3.0.2.tgz\",
            \"integrity\": \"sha512-/2UGPSgmtqwo1ktx8NDHjuPwZWmHhO+gj0f93EkhLB5RgW9RZevWYYlIkS6zePc6U2WpOdQYIwHe9YC4DWEBVg==\",
            \"dev\": true
        },
        \"is-plain-object\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/is-plain-object/-/is-plain-object-2.0.4.tgz\",
            \"integrity\": \"sha512-h5PpgXkWitc38BBMYawTYMWJHFZJVnBquFE57xFpjB8pJFiF6gZ+bU+WyI/yqXiFR5mdLsgYNaPe8uao6Uv9Og==\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"is-relative\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-relative/-/is-relative-1.0.0.tgz\",
            \"integrity\": \"sha512-Kw/ReK0iqwKeu0MITLFuj0jbPAmEiOsIwyIXvvbfa6QfmN9pkD1M+8pdk7Rl/dTKbH34/XBFMbgD4iMJhLQbGA==\",
            \"dev\": true,
            \"requires\": {
                \"is-unc-path\": \"^1.0.0\"
            }
        },
        \"is-typedarray\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-typedarray/-/is-typedarray-1.0.0.tgz\",
            \"integrity\": \"sha1-5HnICFjfDBsR3dppQPlgEfzaSpo=\",
            \"dev\": true
        },
        \"is-unc-path\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-unc-path/-/is-unc-path-1.0.0.tgz\",
            \"integrity\": \"sha512-mrGpVd0fs7WWLfVsStvgF6iEJnbjDFZh9/emhRDcGWTduTfNHd9CHeUwH3gYIjdbwo4On6hunkztwOaAw0yllQ==\",
            \"dev\": true,
            \"requires\": {
                \"unc-path-regex\": \"^0.1.2\"
            }
        },
        \"is-utf8\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/is-utf8/-/is-utf8-0.2.1.tgz\",
            \"integrity\": \"sha1-Sw2hRCEE0bM2NA6AeX6GXPOffXI=\",
            \"dev\": true
        },
        \"is-valid-glob\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/is-valid-glob/-/is-valid-glob-1.0.0.tgz\",
            \"integrity\": \"sha1-Kb8+/3Ab4tTTFdusw5vDn+j2Aao=\",
            \"dev\": true
        },
        \"is-windows\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/is-windows/-/is-windows-1.0.2.tgz\",
            \"integrity\": \"sha512-eXK1UInq2bPmjyX6e3VHIzMLobc4J94i4AWn+Hpq3OU5KkrRC96OAcR3PRJ/pGu6m8TRnBHP9dkXQVsT/COVIA==\",
            \"dev\": true
        },
        \"is-wsl\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/is-wsl/-/is-wsl-1.1.0.tgz\",
            \"integrity\": \"sha1-HxbkqiKwTRM2tmGIpmrzxgDDpm0=\",
            \"dev\": true
        },
        \"isarray\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.1.tgz\",
            \"integrity\": \"sha1-o32U7ZzaLVmGXJ92/llu4fM4dB4=\",
            \"dev\": true
        },
        \"isexe\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/isexe/-/isexe-2.0.0.tgz\",
            \"integrity\": \"sha1-6PvzdNxVb/iUehDcsFctYz8s+hA=\",
            \"dev\": true
        },
        \"isobject\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-3.0.1.tgz\",
            \"integrity\": \"sha1-TkMekrEalzFjaqH5yNHMvP2reN8=\",
            \"dev\": true
        },
        \"isstream\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/isstream/-/isstream-0.1.2.tgz\",
            \"integrity\": \"sha1-R+Y/evVa+m+S4VAOaQ64uFKcCZo=\",
            \"dev\": true
        },
        \"jquery\": {
            \"version\": \"3.5.1\",
            \"resolved\": \"https://registry.npmjs.org/jquery/-/jquery-3.5.1.tgz\",
            \"integrity\": \"sha512-XwIBPqcMn57FxfT+Go5pzySnm4KWkT1Tv7gjrpT1srtf8Weynl6R273VJ5GjkRb51IzMp5nbaPjJXMWeju2MKg==\"
        },
        \"jquery.easing\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/jquery.easing/-/jquery.easing-1.4.1.tgz\",
            \"integrity\": \"sha1-R5gsWDa9dY/UhJSSPEoQHvbpPjs=\"
        },
        \"js-base64\": {
            \"version\": \"2.6.4\",
            \"resolved\": \"https://registry.npmjs.org/js-base64/-/js-base64-2.6.4.tgz\",
            \"integrity\": \"sha512-pZe//GGmwJndub7ZghVHz7vjb2LgC1m8B07Au3eYqeqv9emhESByMXxaEgkUkEqJe87oBbSniGYoQNIBklc7IQ==\",
            \"dev\": true
        },
        \"jsbn\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/jsbn/-/jsbn-0.1.1.tgz\",
            \"integrity\": \"sha1-peZUwuWi3rXyAdls77yoDA7y9RM=\",
            \"dev\": true
        },
        \"json-schema\": {
            \"version\": \"0.2.3\",
            \"resolved\": \"https://registry.npmjs.org/json-schema/-/json-schema-0.2.3.tgz\",
            \"integrity\": \"sha1-tIDIkuWaLwWVTOcnvT8qTogvnhM=\",
            \"dev\": true
        },
        \"json-schema-traverse\": {
            \"version\": \"0.4.1\",
            \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-0.4.1.tgz\",
            \"integrity\": \"sha512-xbbCH5dCYU5T8LcEhhuh7HJ88HXuW3qsI3Y0zOZFKfZEHcpWiHU/Jxzk629Brsab/mMiHQti9wMP+845RPe3Vg==\",
            \"dev\": true
        },
        \"json-stable-stringify-without-jsonify\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/json-stable-stringify-without-jsonify/-/json-stable-stringify-without-jsonify-1.0.1.tgz\",
            \"integrity\": \"sha1-nbe1lJatPzz+8wp1FC0tkwrXJlE=\",
            \"dev\": true
        },
        \"json-stringify-safe\": {
            \"version\": \"5.0.1\",
            \"resolved\": \"https://registry.npmjs.org/json-stringify-safe/-/json-stringify-safe-5.0.1.tgz\",
            \"integrity\": \"sha1-Epai1Y/UXxmg9s4B1lcB4sc1tus=\",
            \"dev\": true
        },
        \"jsonfile\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/jsonfile/-/jsonfile-3.0.1.tgz\",
            \"integrity\": \"sha1-pezG9l9T9mLEQVx2daAzHQmS7GY=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.6\"
            }
        },
        \"jsprim\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/jsprim/-/jsprim-1.4.1.tgz\",
            \"integrity\": \"sha1-MT5mvB5cwG5Di8G3SZwuXFastqI=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"1.0.0\",
                \"extsprintf\": \"1.3.0\",
                \"json-schema\": \"0.2.3\",
                \"verror\": \"1.10.0\"
            }
        },
        \"just-debounce\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/just-debounce/-/just-debounce-1.0.0.tgz\",
            \"integrity\": \"sha1-h/zPrv/AtozRnVX2cilD+SnqNeo=\",
            \"dev\": true
        },
        \"kind-of\": {
            \"version\": \"6.0.3\",
            \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.3.tgz\",
            \"integrity\": \"sha512-dcS1ul+9tmeD95T+x28/ehLgd9mENa3LsvDTtzm3vyBEO7RPptvAD+t44WVXaUjTBRcrpFeFlC8WCruUR456hw==\",
            \"dev\": true
        },
        \"last-run\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/last-run/-/last-run-1.1.1.tgz\",
            \"integrity\": \"sha1-RblpQsF7HHnHchmCWbqUO+v4yls=\",
            \"dev\": true,
            \"requires\": {
                \"default-resolution\": \"^2.0.0\",
                \"es6-weak-map\": \"^2.0.1\"
            }
        },
        \"lazystream\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lazystream/-/lazystream-1.0.0.tgz\",
            \"integrity\": \"sha1-9plf4PggOS9hOWvolGJAe7dxaOQ=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.5\"
            }
        },
        \"lcid\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lcid/-/lcid-1.0.0.tgz\",
            \"integrity\": \"sha1-MIrMr6C8SDo4Z7S28rlQYlHRuDU=\",
            \"dev\": true,
            \"requires\": {
                \"invert-kv\": \"^1.0.0\"
            }
        },
        \"lead\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lead/-/lead-1.0.0.tgz\",
            \"integrity\": \"sha1-bxT5mje+Op3XhPVJVpDlkDRm7kI=\",
            \"dev\": true,
            \"requires\": {
                \"flush-write-stream\": \"^1.0.2\"
            }
        },
        \"liftoff\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/liftoff/-/liftoff-3.1.0.tgz\",
            \"integrity\": \"sha512-DlIPlJUkCV0Ips2zf2pJP0unEoT1kwYhiiPUGF3s/jtxTCjziNLoiVVh+jqWOWeFi6mmwQ5fNxvAUyPad4Dfog==\",
            \"dev\": true,
            \"requires\": {
                \"extend\": \"^3.0.0\",
                \"findup-sync\": \"^3.0.0\",
                \"fined\": \"^1.0.1\",
                \"flagged-respawn\": \"^1.0.0\",
                \"is-plain-object\": \"^2.0.4\",
                \"object.map\": \"^1.0.0\",
                \"rechoir\": \"^0.6.2\",
                \"resolve\": \"^1.1.7\"
            }
        },
        \"limiter\": {
            \"version\": \"1.1.5\",
            \"resolved\": \"https://registry.npmjs.org/limiter/-/limiter-1.1.5.tgz\",
            \"integrity\": \"sha512-FWWMIEOxz3GwUI4Ts/IvgVy6LPvoMPgjMdQ185nN6psJyBJ4yOpzqm695/h5umdLJg2vW3GR5iG11MAkR2AzJA==\",
            \"dev\": true
        },
        \"load-json-file\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/load-json-file/-/load-json-file-1.1.0.tgz\",
            \"integrity\": \"sha1-lWkFcI1YtLq0wiYbBPWfMcmTdMA=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"parse-json\": \"^2.2.0\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\",
                \"strip-bom\": \"^2.0.0\"
            }
        },
        \"localtunnel\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/localtunnel/-/localtunnel-2.0.0.tgz\",
            \"integrity\": \"sha512-g6E0aLgYYDvQDxIjIXkgJo2+pHj3sGg4Wz/XP3h2KtZnRsWPbOQY+hw1H8Z91jep998fkcVE9l+kghO+97vllg==\",
            \"dev\": true,
            \"requires\": {
                \"axios\": \"0.19.0\",
                \"debug\": \"4.1.1\",
                \"openurl\": \"1.1.1\",
                \"yargs\": \"13.3.0\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.0.tgz\",
                    \"integrity\": \"sha512-1apePfXM1UOSqw0o9IiFAovVz9M5S1Dg+4TrDwfMewQ6p/rmMueb7tWZjQ1rx4Loy1ArBggoqGpfqqdI4rondg==\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"cliui\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-5.0.0.tgz\",
                    \"integrity\": \"sha512-PYeGSEmmHM6zvoef2w8TPzlrnNpXIjTipYK780YswmIP9vjxmd6Y2a3CB2Ks6/AU8NHjZugXvo8w3oWM2qnwXA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"string-width\": \"^3.1.0\",
                        \"strip-ansi\": \"^5.2.0\",
                        \"wrap-ansi\": \"^5.1.0\"
                    }
                },
                \"debug\": {
                    \"version\": \"4.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.1.1.tgz\",
                    \"integrity\": \"sha512-pYAIzeRo8J6KPEaJ0VWOh5Pzkbw/RetuzehGM7QRRX5he4fPHx2rdKMB256ehJCkX+XRQm16eZLqLNS8RSZXZw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"^2.1.1\"
                    }
                },
                \"find-up\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
                    \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"locate-path\": \"^3.0.0\"
                    }
                },
                \"get-caller-file\": {
                    \"version\": \"2.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
                    \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
                    \"dev\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-2.0.0.tgz\",
                    \"integrity\": \"sha1-o7MKXE8ZkYMWeqq5O+764937ZU8=\",
                    \"dev\": true
                },
                \"ms\": {
                    \"version\": \"2.1.2\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
                    \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
                    \"dev\": true
                },
                \"require-main-filename\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
                    \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
                    \"dev\": true
                },
                \"string-width\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-3.1.0.tgz\",
                    \"integrity\": \"sha512-vafcv6KjVZKSgz06oM/H6GDBrAtz8vdhQakGjFIvNrHA6y3HCF1CInLy+QLq8dTJPQ1b+KDUqDFctkdRW44e1w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"emoji-regex\": \"^7.0.1\",
                        \"is-fullwidth-code-point\": \"^2.0.0\",
                        \"strip-ansi\": \"^5.1.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"5.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
                    \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^4.1.0\"
                    }
                },
                \"which-module\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
                    \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
                    \"dev\": true
                },
                \"wrap-ansi\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-5.1.0.tgz\",
                    \"integrity\": \"sha512-QC1/iN/2/RPVJ5jYK8BGttj5z83LmSKmvbvrXPNCLZSEb32KKVDJDl/MOt2N01qU2H/FkzEa9PKto1BqDjtd7Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.0\",
                        \"string-width\": \"^3.0.0\",
                        \"strip-ansi\": \"^5.0.0\"
                    }
                },
                \"y18n\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.0.tgz\",
                    \"integrity\": \"sha512-r9S/ZyXu/Xu9q1tYlpsLIsa3EeLXXk0VwlxqTcFRfg9EhMW+17kbt9G0NrgCmhGb5vT2hyhJZLfDGx+7+5Uj/w==\",
                    \"dev\": true
                },
                \"yargs\": {
                    \"version\": \"13.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-13.3.0.tgz\",
                    \"integrity\": \"sha512-2eehun/8ALW8TLoIl7MVaRUrg+yCnenu8B4kBlRxj3GJGDKU1Og7sMXPNm1BYyM1DOJmTZ4YeN/Nwxv+8XJsUA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"cliui\": \"^5.0.0\",
                        \"find-up\": \"^3.0.0\",
                        \"get-caller-file\": \"^2.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^2.0.0\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^3.0.0\",
                        \"which-module\": \"^2.0.0\",
                        \"y18n\": \"^4.0.0\",
                        \"yargs-parser\": \"^13.1.1\"
                    }
                }
            }
        },
        \"locate-path\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-3.0.0.tgz\",
            \"integrity\": \"sha512-7AO748wWnIhNqAuaty2ZWHkQHRSNfPVIsPIfwEOWO22AmaoVrWavlOcMR5nzTLNYvp36X220/maaRsrec1G65A==\",
            \"dev\": true,
            \"requires\": {
                \"p-locate\": \"^3.0.0\",
                \"path-exists\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"path-exists\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-3.0.0.tgz\",
                    \"integrity\": \"sha1-zg6+ql94yxiSXqfYENe1mwEP1RU=\",
                    \"dev\": true
                }
            }
        },
        \"lodash\": {
            \"version\": \"4.17.20\",
            \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.20.tgz\",
            \"integrity\": \"sha512-PlhdFcillOINfeV7Ni6oF1TAEayyZBoZ8bcshTHqOYJYlrqzRK5hagpagky5o4HfCzzd1TRkXPMFq6cKk9rGmA==\",
            \"dev\": true
        },
        \"lodash._reinterpolate\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/lodash._reinterpolate/-/lodash._reinterpolate-3.0.0.tgz\",
            \"integrity\": \"sha1-DM8tiRZq8Ds2Y8eWU4t1rG4RTZ0=\",
            \"dev\": true
        },
        \"lodash.isfinite\": {
            \"version\": \"3.3.2\",
            \"resolved\": \"https://registry.npmjs.org/lodash.isfinite/-/lodash.isfinite-3.3.2.tgz\",
            \"integrity\": \"sha1-+4m2WpqAKBgz8LdHizpRBPiY67M=\",
            \"dev\": true
        },
        \"lodash.template\": {
            \"version\": \"4.5.0\",
            \"resolved\": \"https://registry.npmjs.org/lodash.template/-/lodash.template-4.5.0.tgz\",
            \"integrity\": \"sha512-84vYFxIkmidUiFxidA/KjjH9pAycqW+h980j7Fuz5qxRtO9pgB7MDFTdys1N7A5mcucRiDyEq4fusljItR1T/A==\",
            \"dev\": true,
            \"requires\": {
                \"lodash._reinterpolate\": \"^3.0.0\",
                \"lodash.templatesettings\": \"^4.0.0\"
            }
        },
        \"lodash.templatesettings\": {
            \"version\": \"4.2.0\",
            \"resolved\": \"https://registry.npmjs.org/lodash.templatesettings/-/lodash.templatesettings-4.2.0.tgz\",
            \"integrity\": \"sha512-stgLz+i3Aa9mZgnjr/O+v9ruKZsPsndy7qPZOchbqk2cnTU1ZaldKK+v7m54WoKIyxiuMZTKT2H81F8BeAc3ZQ==\",
            \"dev\": true,
            \"requires\": {
                \"lodash._reinterpolate\": \"^3.0.0\"
            }
        },
        \"loud-rejection\": {
            \"version\": \"1.6.0\",
            \"resolved\": \"https://registry.npmjs.org/loud-rejection/-/loud-rejection-1.6.0.tgz\",
            \"integrity\": \"sha1-W0b4AUft7leIcPCG0Eghz5mOVR8=\",
            \"dev\": true,
            \"requires\": {
                \"currently-unhandled\": \"^0.4.1\",
                \"signal-exit\": \"^3.0.0\"
            }
        },
        \"lru-cache\": {
            \"version\": \"4.1.5\",
            \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-4.1.5.tgz\",
            \"integrity\": \"sha512-sWZlbEP2OsHNkXrMl5GYk/jKk70MBng6UU4YI/qGDYbgf6YbP4EvmqISbXCoJiRKs+1bSpFHVgQxvJ17F2li5g==\",
            \"dev\": true,
            \"requires\": {
                \"pseudomap\": \"^1.0.2\",
                \"yallist\": \"^2.1.2\"
            }
        },
        \"make-error\": {
            \"version\": \"1.3.5\",
            \"resolved\": \"https://registry.npmjs.org/make-error/-/make-error-1.3.5.tgz\",
            \"integrity\": \"sha512-c3sIjNUow0+8swNwVpqoH4YCShKNFkMaw6oH1mNS2haDZQqkeZFlHS3dhoeEbKKmJB4vXpJucU6oH75aDYeE9g==\",
            \"dev\": true
        },
        \"make-error-cause\": {
            \"version\": \"1.2.2\",
            \"resolved\": \"https://registry.npmjs.org/make-error-cause/-/make-error-cause-1.2.2.tgz\",
            \"integrity\": \"sha1-3wOI/NCzeBbf8KX7gQiTl3fcvJ0=\",
            \"dev\": true,
            \"requires\": {
                \"make-error\": \"^1.2.0\"
            }
        },
        \"make-iterator\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/make-iterator/-/make-iterator-1.0.1.tgz\",
            \"integrity\": \"sha512-pxiuXh0iVEq7VM7KMIhs5gxsfxCux2URptUQaXo4iZZJxBAzTPOLE2BumO5dbfVYq/hBJFBR/a1mFDmOx5AGmw==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^6.0.2\"
            }
        },
        \"map-cache\": {
            \"version\": \"0.2.2\",
            \"resolved\": \"https://registry.npmjs.org/map-cache/-/map-cache-0.2.2.tgz\",
            \"integrity\": \"sha1-wyq9C9ZSXZsFFkW7TyasXcmKDb8=\",
            \"dev\": true
        },
        \"map-obj\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-1.0.1.tgz\",
            \"integrity\": \"sha1-2TPOuSBdgr3PSIb2dCvcK03qFG0=\",
            \"dev\": true
        },
        \"map-stream\": {
            \"version\": \"0.0.7\",
            \"resolved\": \"https://registry.npmjs.org/map-stream/-/map-stream-0.0.7.tgz\",
            \"integrity\": \"sha1-ih8HiW2CsQkmvTdEokIACfiJdKg=\",
            \"dev\": true
        },
        \"map-visit\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/map-visit/-/map-visit-1.0.0.tgz\",
            \"integrity\": \"sha1-7Nyo8TFE5mDxtb1B8S80edmN+48=\",
            \"dev\": true,
            \"requires\": {
                \"object-visit\": \"^1.0.0\"
            }
        },
        \"matchdep\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/matchdep/-/matchdep-2.0.0.tgz\",
            \"integrity\": \"sha1-xvNINKDY28OzfCfui7yyfHd1WC4=\",
            \"dev\": true,
            \"requires\": {
                \"findup-sync\": \"^2.0.0\",
                \"micromatch\": \"^3.0.4\",
                \"resolve\": \"^1.4.0\",
                \"stack-trace\": \"0.0.10\"
            },
            \"dependencies\": {
                \"findup-sync\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-2.0.0.tgz\",
                    \"integrity\": \"sha1-kyaxSIwi0aYIhlCoaQGy2akKLLw=\",
                    \"dev\": true,
                    \"requires\": {
                        \"detect-file\": \"^1.0.0\",
                        \"is-glob\": \"^3.1.0\",
                        \"micromatch\": \"^3.0.4\",
                        \"resolve-dir\": \"^1.0.1\"
                    }
                },
                \"is-glob\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
                    \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extglob\": \"^2.1.0\"
                    }
                }
            }
        },
        \"meow\": {
            \"version\": \"3.7.0\",
            \"resolved\": \"https://registry.npmjs.org/meow/-/meow-3.7.0.tgz\",
            \"integrity\": \"sha1-cstmi0JSKCkKu/qFaJJYcwioAfs=\",
            \"dev\": true,
            \"requires\": {
                \"camelcase-keys\": \"^2.0.0\",
                \"decamelize\": \"^1.1.2\",
                \"loud-rejection\": \"^1.0.0\",
                \"map-obj\": \"^1.0.1\",
                \"minimist\": \"^1.1.3\",
                \"normalize-package-data\": \"^2.3.4\",
                \"object-assign\": \"^4.0.1\",
                \"read-pkg-up\": \"^1.0.1\",
                \"redent\": \"^1.0.0\",
                \"trim-newlines\": \"^1.0.0\"
            }
        },
        \"merge-stream\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
            \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
            \"dev\": true
        },
        \"merge2\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/merge2/-/merge2-1.4.1.tgz\",
            \"integrity\": \"sha512-8q7VEgMJW4J8tcfVPy8g09NcQwZdbwFEqhe/WZkoIzjn/3TGDwtOCYtXGxA3O8tPzpczCCDgv+P2P5y00ZJOOg==\",
            \"dev\": true
        },
        \"micromatch\": {
            \"version\": \"3.1.10\",
            \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-3.1.10.tgz\",
            \"integrity\": \"sha512-MWikgl9n9M3w+bpsY3He8L+w9eF9338xRl8IAO5viDizwSzziFEyUzo2xrrloB64ADbTf8uA8vRqqttDTOmccg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"braces\": \"^2.3.1\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"extglob\": \"^2.0.4\",
                \"fragment-cache\": \"^0.2.1\",
                \"kind-of\": \"^6.0.2\",
                \"nanomatch\": \"^1.2.9\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.2\"
            }
        },
        \"mime\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/mime/-/mime-1.4.1.tgz\",
            \"integrity\": \"sha512-KI1+qOZu5DcW6wayYHSzR/tXKCDC5Om4s1z2QJjDULzLcmf3DvzS7oluY4HCTrc+9FiKmWUgeNLg7W3uIQvxtQ==\",
            \"dev\": true
        },
        \"mime-db\": {
            \"version\": \"1.44.0\",
            \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.44.0.tgz\",
            \"integrity\": \"sha512-/NOTfLrsPBVeH7YtFPgsVWveuL+4SjjYxaQ1xtM1KMFj7HdxlBlxeyNLzhyJVx7r4rZGJAZ/6lkKCitSc/Nmpg==\",
            \"dev\": true
        },
        \"mime-types\": {
            \"version\": \"2.1.27\",
            \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.27.tgz\",
            \"integrity\": \"sha512-JIhqnCasI9yD+SsmkquHBxTSEuZdQX5BuQnS2Vc7puQQQ+8yiP5AY5uWhpdv4YL4VM5c6iliiYWPgJ/nJQLp7w==\",
            \"dev\": true,
            \"requires\": {
                \"mime-db\": \"1.44.0\"
            }
        },
        \"minimatch\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.4.tgz\",
            \"integrity\": \"sha512-yJHVQEhyqPLUTgt9B83PXu6W3rx4MvvHvSUvToogpwoGDOUQ+yDrR0HRot+yOCdCO7u4hX3pWft6kWBBcqh0UA==\",
            \"dev\": true,
            \"requires\": {
                \"brace-expansion\": \"^1.1.7\"
            }
        },
        \"minimist\": {
            \"version\": \"1.2.5\",
            \"resolved\": \"https://registry.npmjs.org/minimist/-/minimist-1.2.5.tgz\",
            \"integrity\": \"sha512-FM9nNUYrRBAELZQT3xeZQ7fmMOBg6nWNmJKTcgsJeaLstP/UODVpGsr5OhXhhXg6f+qtJ8uiZ+PUxkDWcgIXLw==\",
            \"dev\": true
        },
        \"mitt\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/mitt/-/mitt-1.2.0.tgz\",
            \"integrity\": \"sha512-r6lj77KlwqLhIUku9UWYes7KJtsczvolZkzp8hbaDPPaE24OmWl5s539Mytlj22siEQKosZ26qCBgda2PKwoJw==\",
            \"dev\": true
        },
        \"mixin-deep\": {
            \"version\": \"1.3.2\",
            \"resolved\": \"https://registry.npmjs.org/mixin-deep/-/mixin-deep-1.3.2.tgz\",
            \"integrity\": \"sha512-WRoDn//mXBiJ1H40rqa3vH0toePwSsGb45iInWlTySa+Uu4k3tYUSxa2v1KqAiLtvlrSzaExqS1gtk96A9zvEA==\",
            \"dev\": true,
            \"requires\": {
                \"for-in\": \"^1.0.2\",
                \"is-extendable\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"is-extendable\": {
                    \"version\": \"1.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
                    \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-plain-object\": \"^2.0.4\"
                    }
                }
            }
        },
        \"mkdirp\": {
            \"version\": \"0.5.5\",
            \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-0.5.5.tgz\",
            \"integrity\": \"sha512-NKmAlESf6jMGym1++R0Ra7wvhV+wFW63FaSOFPwRahvea0gMUcGUhVeAg/0BC0wiv9ih5NYPB1Wn1UEI1/L+xQ==\",
            \"dev\": true,
            \"requires\": {
                \"minimist\": \"^1.2.5\"
            }
        },
        \"moment\": {
            \"version\": \"2.29.1\",
            \"resolved\": \"https://registry.npmjs.org/moment/-/moment-2.29.1.tgz\",
            \"integrity\": \"sha512-kHmoybcPV8Sqy59DwNDY3Jefr64lK/by/da0ViFcuA4DH0vQg5Q6Ze5VimxkfQNSC+Mls/Kx53s7TjP1RhFEDQ==\"
        },
        \"ms\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
            \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
            \"dev\": true
        },
        \"mute-stdout\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/mute-stdout/-/mute-stdout-1.0.1.tgz\",
            \"integrity\": \"sha512-kDcwXR4PS7caBpuRYYBUz9iVixUk3anO3f5OYFiIPwK/20vCzKCHyKoulbiDY1S53zD2bxUpxN/IJ+TnXjfvxg==\",
            \"dev\": true
        },
        \"nan\": {
            \"version\": \"2.14.2\",
            \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.14.2.tgz\",
            \"integrity\": \"sha512-M2ufzIiINKCuDfBSAUr1vWQ+vuVcA9kqx8JJUsbQi6yf1uGRyb7HfpdfUr5qLXf3B/t8dPvcjhKMmlfnP47EzQ==\",
            \"dev\": true
        },
        \"nanomatch\": {
            \"version\": \"1.2.13\",
            \"resolved\": \"https://registry.npmjs.org/nanomatch/-/nanomatch-1.2.13.tgz\",
            \"integrity\": \"sha512-fpoe2T0RbHwBTBUOftAfBPaDEi06ufaUai0mE6Yn1kacc3SnTErfb/h+X94VXzI64rKFHYImXSvdwGGCmwOqCA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-diff\": \"^4.0.0\",
                \"array-unique\": \"^0.3.2\",
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"fragment-cache\": \"^0.2.1\",
                \"is-windows\": \"^1.0.2\",
                \"kind-of\": \"^6.0.2\",
                \"object.pick\": \"^1.3.0\",
                \"regex-not\": \"^1.0.0\",
                \"snapdragon\": \"^0.8.1\",
                \"to-regex\": \"^3.0.1\"
            }
        },
        \"negotiator\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/negotiator/-/negotiator-0.6.2.tgz\",
            \"integrity\": \"sha512-hZXc7K2e+PgeI1eDBe/10Ard4ekbfrrqG8Ep+8Jmf4JID2bNg7NvCPOZN+kfF574pFQI7mum2AUqDidoKqcTOw==\",
            \"dev\": true
        },
        \"next-tick\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/next-tick/-/next-tick-1.0.0.tgz\",
            \"integrity\": \"sha1-yobR/ogoFpsBICCOPchCS524NCw=\",
            \"dev\": true
        },
        \"node-gyp\": {
            \"version\": \"3.8.0\",
            \"resolved\": \"https://registry.npmjs.org/node-gyp/-/node-gyp-3.8.0.tgz\",
            \"integrity\": \"sha512-3g8lYefrRRzvGeSowdJKAKyks8oUpLEd/DyPV4eMhVlhJ0aNaZqIrNUIPuEWWTAoPqyFkfGrM67MC69baqn6vA==\",
            \"dev\": true,
            \"requires\": {
                \"fstream\": \"^1.0.0\",
                \"glob\": \"^7.0.3\",
                \"graceful-fs\": \"^4.1.2\",
                \"mkdirp\": \"^0.5.0\",
                \"nopt\": \"2 || 3\",
                \"npmlog\": \"0 || 1 || 2 || 3 || 4\",
                \"osenv\": \"0\",
                \"request\": \"^2.87.0\",
                \"rimraf\": \"2\",
                \"semver\": \"~5.3.0\",
                \"tar\": \"^2.0.0\",
                \"which\": \"1\"
            },
            \"dependencies\": {
                \"rimraf\": {
                    \"version\": \"2.7.1\",
                    \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
                    \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"glob\": \"^7.1.3\"
                    }
                },
                \"semver\": {
                    \"version\": \"5.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.3.0.tgz\",
                    \"integrity\": \"sha1-myzl094C0XxgEq0yaqa00M9U+U8=\",
                    \"dev\": true
                }
            }
        },
        \"node-releases\": {
            \"version\": \"1.1.45\",
            \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-1.1.45.tgz\",
            \"integrity\": \"sha512-cXvGSfhITKI8qsV116u2FTzH5EWZJfgG7d4cpqwF8I8+1tWpD6AsvvGRKq2onR0DNj1jfqsjkXZsm14JMS7Cyg==\",
            \"dev\": true,
            \"requires\": {
                \"semver\": \"^6.3.0\"
            },
            \"dependencies\": {
                \"semver\": {
                    \"version\": \"6.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
                    \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
                    \"dev\": true
                }
            }
        },
        \"node-sass\": {
            \"version\": \"4.14.1\",
            \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-4.14.1.tgz\",
            \"integrity\": \"sha512-sjCuOlvGyCJS40R8BscF5vhVlQjNN069NtQ1gSxyK1u9iqvn6tf7O1R4GNowVZfiZUCRt5MmMs1xd+4V/7Yr0g==\",
            \"dev\": true,
            \"requires\": {
                \"async-foreach\": \"^0.1.3\",
                \"chalk\": \"^1.1.1\",
                \"cross-spawn\": \"^3.0.0\",
                \"gaze\": \"^1.0.0\",
                \"get-stdin\": \"^4.0.1\",
                \"glob\": \"^7.0.3\",
                \"in-publish\": \"^2.0.0\",
                \"lodash\": \"^4.17.15\",
                \"meow\": \"^3.7.0\",
                \"mkdirp\": \"^0.5.1\",
                \"nan\": \"^2.13.2\",
                \"node-gyp\": \"^3.8.0\",
                \"npmlog\": \"^4.0.0\",
                \"request\": \"^2.88.0\",
                \"sass-graph\": \"2.2.5\",
                \"stdout-stream\": \"^1.4.0\",
                \"true-case-path\": \"^1.0.2\"
            }
        },
        \"nopt\": {
            \"version\": \"3.0.6\",
            \"resolved\": \"https://registry.npmjs.org/nopt/-/nopt-3.0.6.tgz\",
            \"integrity\": \"sha1-xkZdvwirzU2zWTF/eaxopkayj/k=\",
            \"dev\": true,
            \"requires\": {
                \"abbrev\": \"1\"
            }
        },
        \"normalize-package-data\": {
            \"version\": \"2.5.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-2.5.0.tgz\",
            \"integrity\": \"sha512-/5CMN3T0R4XTj4DcGaexo+roZSdSFW/0AOOTROrjxzCG1wrWXEsGbRKevjlIL+ZDE4sZlJr5ED4YW0yqmkK+eA==\",
            \"dev\": true,
            \"requires\": {
                \"hosted-git-info\": \"^2.1.4\",
                \"resolve\": \"^1.10.0\",
                \"semver\": \"2 || 3 || 4 || 5\",
                \"validate-npm-package-license\": \"^3.0.1\"
            }
        },
        \"normalize-path\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
            \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
            \"dev\": true
        },
        \"normalize-range\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/normalize-range/-/normalize-range-0.1.2.tgz\",
            \"integrity\": \"sha1-LRDAa9/TEuqXd2laTShDlFa3WUI=\",
            \"dev\": true
        },
        \"now-and-later\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/now-and-later/-/now-and-later-2.0.1.tgz\",
            \"integrity\": \"sha512-KGvQ0cB70AQfg107Xvs/Fbu+dGmZoTRJp2TaPwcwQm3/7PteUyN2BCgk8KBMPGBUXZdVwyWS8fDCGFygBm19UQ==\",
            \"dev\": true,
            \"requires\": {
                \"once\": \"^1.3.2\"
            }
        },
        \"npmlog\": {
            \"version\": \"4.1.2\",
            \"resolved\": \"https://registry.npmjs.org/npmlog/-/npmlog-4.1.2.tgz\",
            \"integrity\": \"sha512-2uUqazuKlTaSI/dC8AzicUck7+IrEaOnN/e0jd3Xtt1KcGpwx30v50mL7oPyr/h9bL3E4aZccVwpwP+5W9Vjkg==\",
            \"dev\": true,
            \"requires\": {
                \"are-we-there-yet\": \"~1.1.2\",
                \"console-control-strings\": \"~1.1.0\",
                \"gauge\": \"~2.7.3\",
                \"set-blocking\": \"~2.0.0\"
            }
        },
        \"num2fraction\": {
            \"version\": \"1.2.2\",
            \"resolved\": \"https://registry.npmjs.org/num2fraction/-/num2fraction-1.2.2.tgz\",
            \"integrity\": \"sha1-b2gragJ6Tp3fpFZM0lidHU5mnt4=\",
            \"dev\": true
        },
        \"number-is-nan\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/number-is-nan/-/number-is-nan-1.0.1.tgz\",
            \"integrity\": \"sha1-CXtgK1NCKlIsGvuHkDGDNpQaAR0=\",
            \"dev\": true
        },
        \"oauth-sign\": {
            \"version\": \"0.9.0\",
            \"resolved\": \"https://registry.npmjs.org/oauth-sign/-/oauth-sign-0.9.0.tgz\",
            \"integrity\": \"sha512-fexhUFFPTGV8ybAtSIGbV6gOkSv8UtRbDBnAyLQw4QPKkgNlsH2ByPGtMUqdWkos6YCRmAqViwgZrJc/mRDzZQ==\",
            \"dev\": true
        },
        \"object-assign\": {
            \"version\": \"4.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
            \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
            \"dev\": true
        },
        \"object-component\": {
            \"version\": \"0.0.3\",
            \"resolved\": \"https://registry.npmjs.org/object-component/-/object-component-0.0.3.tgz\",
            \"integrity\": \"sha1-8MaapQ78lbhmwYb0AKM3acsvEpE=\",
            \"dev\": true
        },
        \"object-copy\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object-copy/-/object-copy-0.1.0.tgz\",
            \"integrity\": \"sha1-fn2Fi3gb18mRpBupde04EnVOmYw=\",
            \"dev\": true,
            \"requires\": {
                \"copy-descriptor\": \"^0.1.0\",
                \"define-property\": \"^0.2.5\",
                \"kind-of\": \"^3.0.3\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"object-keys\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
            \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
            \"dev\": true
        },
        \"object-visit\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object-visit/-/object-visit-1.0.1.tgz\",
            \"integrity\": \"sha1-95xEk68MU3e1n+OdOV5BBC3QRbs=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.assign\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.0.tgz\",
            \"integrity\": \"sha512-exHJeq6kBKj58mqGyTQ9DFvrZC/eR6OwxzoM9YRoGBqrXYonaFyGiFMuc9VZrXf7DarreEwMpurG3dd+CNyW5w==\",
            \"dev\": true,
            \"requires\": {
                \"define-properties\": \"^1.1.2\",
                \"function-bind\": \"^1.1.1\",
                \"has-symbols\": \"^1.0.0\",
                \"object-keys\": \"^1.0.11\"
            }
        },
        \"object.defaults\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/object.defaults/-/object.defaults-1.1.0.tgz\",
            \"integrity\": \"sha1-On+GgzS0B96gbaFtiNXNKeQ1/s8=\",
            \"dev\": true,
            \"requires\": {
                \"array-each\": \"^1.0.1\",
                \"array-slice\": \"^1.0.0\",
                \"for-own\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\"
            }
        },
        \"object.map\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.map/-/object.map-1.0.1.tgz\",
            \"integrity\": \"sha1-z4Plncj8wK1fQlDh94s7gb2AHTc=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"object.pick\": {
            \"version\": \"1.3.0\",
            \"resolved\": \"https://registry.npmjs.org/object.pick/-/object.pick-1.3.0.tgz\",
            \"integrity\": \"sha1-h6EKxMFpS9Lhy/U1kaZhQftd10c=\",
            \"dev\": true,
            \"requires\": {
                \"isobject\": \"^3.0.1\"
            }
        },
        \"object.reduce\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/object.reduce/-/object.reduce-1.0.1.tgz\",
            \"integrity\": \"sha1-b+NI8qx/oPlcpiEiZZkJaCW7A60=\",
            \"dev\": true,
            \"requires\": {
                \"for-own\": \"^1.0.0\",
                \"make-iterator\": \"^1.0.0\"
            }
        },
        \"on-finished\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/on-finished/-/on-finished-2.3.0.tgz\",
            \"integrity\": \"sha1-IPEzZIGwg811M3mSoWlxqi2QaUc=\",
            \"dev\": true,
            \"requires\": {
                \"ee-first\": \"1.1.1\"
            }
        },
        \"once\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
            \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
            \"dev\": true,
            \"requires\": {
                \"wrappy\": \"1\"
            }
        },
        \"openurl\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/openurl/-/openurl-1.1.1.tgz\",
            \"integrity\": \"sha1-OHW0sO96UsFW8NtB1GCduw+Us4c=\",
            \"dev\": true
        },
        \"opn\": {
            \"version\": \"5.3.0\",
            \"resolved\": \"https://registry.npmjs.org/opn/-/opn-5.3.0.tgz\",
            \"integrity\": \"sha512-bYJHo/LOmoTd+pfiYhfZDnf9zekVJrY+cnS2a5F2x+w5ppvTqObojTP7WiFG+kVZs9Inw+qQ/lw7TroWwhdd2g==\",
            \"dev\": true,
            \"requires\": {
                \"is-wsl\": \"^1.1.0\"
            }
        },
        \"ordered-read-streams\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/ordered-read-streams/-/ordered-read-streams-1.0.1.tgz\",
            \"integrity\": \"sha1-d8DLN8QVJdZBZtmQ/61+xqDhNj4=\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.1\"
            }
        },
        \"os-homedir\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/os-homedir/-/os-homedir-1.0.2.tgz\",
            \"integrity\": \"sha1-/7xJiDNuDoM94MFox+8VISGqf7M=\",
            \"dev\": true
        },
        \"os-locale\": {
            \"version\": \"1.4.0\",
            \"resolved\": \"https://registry.npmjs.org/os-locale/-/os-locale-1.4.0.tgz\",
            \"integrity\": \"sha1-IPnxeuKe00XoveWDsT0gCYA8FNk=\",
            \"dev\": true,
            \"requires\": {
                \"lcid\": \"^1.0.0\"
            }
        },
        \"os-tmpdir\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/os-tmpdir/-/os-tmpdir-1.0.2.tgz\",
            \"integrity\": \"sha1-u+Z0BseaqFxc/sdm/lc0VV36EnQ=\",
            \"dev\": true
        },
        \"osenv\": {
            \"version\": \"0.1.5\",
            \"resolved\": \"https://registry.npmjs.org/osenv/-/osenv-0.1.5.tgz\",
            \"integrity\": \"sha512-0CWcCECdMVc2Rw3U5w9ZjqX6ga6ubk1xDVKxtBQPK7wis/0F2r9T6k4ydGYhecl7YUBxBVxhL5oisPsNxAPe2g==\",
            \"dev\": true,
            \"requires\": {
                \"os-homedir\": \"^1.0.0\",
                \"os-tmpdir\": \"^1.0.0\"
            }
        },
        \"p-limit\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.3.0.tgz\",
            \"integrity\": \"sha512-//88mFWSJx8lxCzwdAABTJL2MyWB12+eIY7MDL2SqLmAkeKU9qxRvWuSyTjm3FUmpBEMuFfckAIqEaVGUDxb6w==\",
            \"dev\": true,
            \"requires\": {
                \"p-try\": \"^2.0.0\"
            }
        },
        \"p-locate\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-3.0.0.tgz\",
            \"integrity\": \"sha512-x+12w/To+4GFfgJhBEpiDcLozRJGegY+Ei7/z0tSLkMmxGZNybVMSfWj9aJn8Z5Fc7dBUNJOOVgPv2H7IwulSQ==\",
            \"dev\": true,
            \"requires\": {
                \"p-limit\": \"^2.0.0\"
            }
        },
        \"p-map\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
            \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
            \"dev\": true,
            \"requires\": {
                \"aggregate-error\": \"^3.0.0\"
            }
        },
        \"p-try\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
            \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
            \"dev\": true
        },
        \"parse-filepath\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/parse-filepath/-/parse-filepath-1.0.2.tgz\",
            \"integrity\": \"sha1-pjISf1Oq89FYdvWHLz/6x2PWyJE=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"map-cache\": \"^0.2.0\",
                \"path-root\": \"^0.1.1\"
            }
        },
        \"parse-json\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-2.2.0.tgz\",
            \"integrity\": \"sha1-9ID0BDTvgHQfhGkJn43qGPVaTck=\",
            \"dev\": true,
            \"requires\": {
                \"error-ex\": \"^1.2.0\"
            }
        },
        \"parse-node-version\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/parse-node-version/-/parse-node-version-1.0.1.tgz\",
            \"integrity\": \"sha512-3YHlOa/JgH6Mnpr05jP9eDG254US9ek25LyIxZlDItp2iJtwyaXQb57lBYLdT3MowkUFYEV2XXNAYIPlESvJlA==\",
            \"dev\": true
        },
        \"parse-passwd\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
            \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
            \"dev\": true
        },
        \"parseqs\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/parseqs/-/parseqs-0.0.6.tgz\",
            \"integrity\": \"sha512-jeAGzMDbfSHHA091hr0r31eYfTig+29g3GKKE/PPbEQ65X0lmMwlEoqmhzu0iztID5uJpZsFlUPDP8ThPL7M8w==\",
            \"dev\": true
        },
        \"parseuri\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/parseuri/-/parseuri-0.0.6.tgz\",
            \"integrity\": \"sha512-AUjen8sAkGgao7UyCX6Ahv0gIK2fABKmYjvP4xmy5JaKvcbTRueIqIPHLAfq30xJddqSE033IOMUSOMCcK3Sow==\",
            \"dev\": true
        },
        \"parseurl\": {
            \"version\": \"1.3.3\",
            \"resolved\": \"https://registry.npmjs.org/parseurl/-/parseurl-1.3.3.tgz\",
            \"integrity\": \"sha512-CiyeOxFT/JZyN5m0z9PfXw4SCBJ6Sygz1Dpl0wqjlhDEGGBP1GnsUVEL0p63hoG1fcj3fHynXi9NYO4nWOL+qQ==\",
            \"dev\": true
        },
        \"pascalcase\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/pascalcase/-/pascalcase-0.1.1.tgz\",
            \"integrity\": \"sha1-s2PlXoAGym/iF4TS2yK9FdeRfxQ=\",
            \"dev\": true
        },
        \"path-dirname\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/path-dirname/-/path-dirname-1.0.2.tgz\",
            \"integrity\": \"sha1-zDPSTVJeCZpTiMAzbG4yuRYGCeA=\",
            \"dev\": true
        },
        \"path-exists\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-2.1.0.tgz\",
            \"integrity\": \"sha1-D+tsZPD8UY2adU3V77YscCJ2H0s=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"path-is-absolute\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/path-is-absolute/-/path-is-absolute-1.0.1.tgz\",
            \"integrity\": \"sha1-F0uSaHNVNP+8es5r9TpanhtcX18=\",
            \"dev\": true
        },
        \"path-parse\": {
            \"version\": \"1.0.6\",
            \"resolved\": \"https://registry.npmjs.org/path-parse/-/path-parse-1.0.6.tgz\",
            \"integrity\": \"sha512-GSmOT2EbHrINBf9SR7CDELwlJ8AENk3Qn7OikK4nFYAu3Ote2+JYNVvkpAEQm3/TLNEJFD/xZJjzyxg3KBWOzw==\",
            \"dev\": true
        },
        \"path-root\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/path-root/-/path-root-0.1.1.tgz\",
            \"integrity\": \"sha1-mkpoFMrBwM1zNgqV8yCDyOpHRbc=\",
            \"dev\": true,
            \"requires\": {
                \"path-root-regex\": \"^0.1.0\"
            }
        },
        \"path-root-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/path-root-regex/-/path-root-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-v8zcjfWxLcUsi0PsONGNcsBLqW0=\",
            \"dev\": true
        },
        \"path-type\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-1.1.0.tgz\",
            \"integrity\": \"sha1-WcRPfuSR2nBNpBXaWkBwuk+P5EE=\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.2\",
                \"pify\": \"^2.0.0\",
                \"pinkie-promise\": \"^2.0.0\"
            }
        },
        \"performance-now\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/performance-now/-/performance-now-2.1.0.tgz\",
            \"integrity\": \"sha1-Ywn04OX6kT7BxpMHrjZLSzd8nns=\",
            \"dev\": true
        },
        \"picomatch\": {
            \"version\": \"2.2.2\",
            \"resolved\": \"https://registry.npmjs.org/picomatch/-/picomatch-2.2.2.tgz\",
            \"integrity\": \"sha512-q0M/9eZHzmr0AulXyPwNfZjtwZ/RBZlbN3K3CErVrk50T2ASYI7Bye0EvekFY3IP1Nt2DHu0re+V2ZHIpMkuWg==\",
            \"dev\": true
        },
        \"pify\": {
            \"version\": \"2.3.0\",
            \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
            \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
            \"dev\": true
        },
        \"pinkie\": {
            \"version\": \"2.0.4\",
            \"resolved\": \"https://registry.npmjs.org/pinkie/-/pinkie-2.0.4.tgz\",
            \"integrity\": \"sha1-clVrgM+g1IqXToDnckjoDtT3+HA=\",
            \"dev\": true
        },
        \"pinkie-promise\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pinkie-promise/-/pinkie-promise-2.0.1.tgz\",
            \"integrity\": \"sha1-ITXW36ejWMBprJsXh3YogihFD/o=\",
            \"dev\": true,
            \"requires\": {
                \"pinkie\": \"^2.0.0\"
            }
        },
        \"plugin-error\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/plugin-error/-/plugin-error-1.0.1.tgz\",
            \"integrity\": \"sha512-L1zP0dk7vGweZME2i+EeakvUNqSrdiI3F91TwEoYiGrAfUXmVv6fJIq4g82PAXxNsWOp0J7ZqQy/3Szz0ajTxA==\",
            \"dev\": true,
            \"requires\": {
                \"ansi-colors\": \"^1.0.1\",
                \"arr-diff\": \"^4.0.0\",
                \"arr-union\": \"^3.1.0\",
                \"extend-shallow\": \"^3.0.2\"
            }
        },
        \"portscanner\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/portscanner/-/portscanner-2.1.1.tgz\",
            \"integrity\": \"sha1-6rtAnk3iSVD1oqUW01rnaTQ/u5Y=\",
            \"dev\": true,
            \"requires\": {
                \"async\": \"1.5.2\",
                \"is-number-like\": \"^1.0.3\"
            }
        },
        \"posix-character-classes\": {
            \"version\": \"0.1.1\",
            \"resolved\": \"https://registry.npmjs.org/posix-character-classes/-/posix-character-classes-0.1.1.tgz\",
            \"integrity\": \"sha1-AerA/jta9xoqbAL+q7jB/vfgDqs=\",
            \"dev\": true
        },
        \"postcss\": {
            \"version\": \"7.0.26\",
            \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-7.0.26.tgz\",
            \"integrity\": \"sha512-IY4oRjpXWYshuTDFxMVkJDtWIk2LhsTlu8bZnbEJA4+bYT16Lvpo8Qv6EvDumhYRgzjZl489pmsY3qVgJQ08nA==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^2.4.2\",
                \"source-map\": \"^0.6.1\",
                \"supports-color\": \"^6.1.0\"
            },
            \"dependencies\": {
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"chalk\": {
                    \"version\": \"2.4.2\",
                    \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
                    \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.1\",
                        \"escape-string-regexp\": \"^1.0.5\",
                        \"supports-color\": \"^5.3.0\"
                    },
                    \"dependencies\": {
                        \"supports-color\": {
                            \"version\": \"5.5.0\",
                            \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
                            \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
                            \"dev\": true,
                            \"requires\": {
                                \"has-flag\": \"^3.0.0\"
                            }
                        }
                    }
                },
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                },
                \"supports-color\": {
                    \"version\": \"6.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-6.1.0.tgz\",
                    \"integrity\": \"sha512-qe1jfm1Mg7Nq/NSh6XE24gPXROEVsWHxC1LIx//XNlD9iw7YZQGjZNjYN7xGaEG6iKdA8EtNFW6R0gjnVXp+wQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"has-flag\": \"^3.0.0\"
                    }
                }
            }
        },
        \"postcss-value-parser\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/postcss-value-parser/-/postcss-value-parser-4.0.2.tgz\",
            \"integrity\": \"sha512-LmeoohTpp/K4UiyQCwuGWlONxXamGzCMtFxLq4W1nZVGIQLYvMCJx3yAF9qyyuFpflABI9yVdtJAqbihOsCsJQ==\",
            \"dev\": true
        },
        \"pretty-hrtime\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/pretty-hrtime/-/pretty-hrtime-1.0.3.tgz\",
            \"integrity\": \"sha1-t+PqQkNaTJsnWdmeDyAesZWALuE=\",
            \"dev\": true
        },
        \"process-nextick-args\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.1.tgz\",
            \"integrity\": \"sha512-3ouUOpQhtgrbOa17J7+uxOTpITYWaGP7/AhoR3+A+/1e9skrzelGi/dXzEYyvbxubEF6Wn2ypscTKiKJFFn1ag==\",
            \"dev\": true
        },
        \"pseudomap\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/pseudomap/-/pseudomap-1.0.2.tgz\",
            \"integrity\": \"sha1-8FKijacOYYkX7wqKw0wa5aaChrM=\",
            \"dev\": true
        },
        \"psl\": {
            \"version\": \"1.8.0\",
            \"resolved\": \"https://registry.npmjs.org/psl/-/psl-1.8.0.tgz\",
            \"integrity\": \"sha512-RIdOzyoavK+hA18OGGWDqUTsCLhtA7IcZ/6NCs4fFJaHBDab+pDDmDIByWFRQJq2Cd7r1OoQxBGKOaztq+hjIQ==\",
            \"dev\": true
        },
        \"pump\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/pump/-/pump-2.0.1.tgz\",
            \"integrity\": \"sha512-ruPMNRkN3MHP1cWJc9OWr+T/xDP0jhXYCLfJcBuX54hhfIBnaQmAUMfDcG4DM5UMWByBbJY69QSphm3jtDKIkA==\",
            \"dev\": true,
            \"requires\": {
                \"end-of-stream\": \"^1.1.0\",
                \"once\": \"^1.3.1\"
            }
        },
        \"pumpify\": {
            \"version\": \"1.5.1\",
            \"resolved\": \"https://registry.npmjs.org/pumpify/-/pumpify-1.5.1.tgz\",
            \"integrity\": \"sha512-oClZI37HvuUJJxSKKrC17bZ9Cu0ZYhEAGPsPUy9KlMUmv9dKX2o77RUmq7f3XjIxbwyGwYzbzQ1L2Ks8sIradQ==\",
            \"dev\": true,
            \"requires\": {
                \"duplexify\": \"^3.6.0\",
                \"inherits\": \"^2.0.3\",
                \"pump\": \"^2.0.0\"
            }
        },
        \"punycode\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-2.1.1.tgz\",
            \"integrity\": \"sha512-XRsRjdf+j5ml+y/6GKHPZbrF/8p2Yga0JPtdqTIY2Xe5ohJPD9saDJJLPvp9+NSBprVvevdXZybnj2cv8OEd0A==\",
            \"dev\": true
        },
        \"qs\": {
            \"version\": \"6.2.3\",
            \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.2.3.tgz\",
            \"integrity\": \"sha1-HPyyXBCpsrSDBT/zn138kjOQjP4=\",
            \"dev\": true
        },
        \"range-parser\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/range-parser/-/range-parser-1.2.1.tgz\",
            \"integrity\": \"sha512-Hrgsx+orqoygnmhFbKaHE6c296J+HTAQXoxEF6gNupROmmGJRoyzfG3ccAveqCBrwr/2yxQ5BVd/GTl5agOwSg==\",
            \"dev\": true
        },
        \"raw-body\": {
            \"version\": \"2.4.1\",
            \"resolved\": \"https://registry.npmjs.org/raw-body/-/raw-body-2.4.1.tgz\",
            \"integrity\": \"sha512-9WmIKF6mkvA0SLmA2Knm9+qj89e+j1zqgyn8aXGd7+nAduPoqgI9lO57SAZNn/Byzo5P7JhXTyg9PzaJbH73bA==\",
            \"dev\": true,
            \"requires\": {
                \"bytes\": \"3.1.0\",
                \"http-errors\": \"1.7.3\",
                \"iconv-lite\": \"0.4.24\",
                \"unpipe\": \"1.0.0\"
            }
        },
        \"read-pkg\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg/-/read-pkg-1.1.0.tgz\",
            \"integrity\": \"sha1-9f+qXs0pyzHAR0vKfXVra7KePyg=\",
            \"dev\": true,
            \"requires\": {
                \"load-json-file\": \"^1.0.0\",
                \"normalize-package-data\": \"^2.3.2\",
                \"path-type\": \"^1.0.0\"
            }
        },
        \"read-pkg-up\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/read-pkg-up/-/read-pkg-up-1.0.1.tgz\",
            \"integrity\": \"sha1-nWPBMnbAZZGNV/ACpX9AobZD+wI=\",
            \"dev\": true,
            \"requires\": {
                \"find-up\": \"^1.0.0\",
                \"read-pkg\": \"^1.0.0\"
            }
        },
        \"readable-stream\": {
            \"version\": \"2.3.7\",
            \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.7.tgz\",
            \"integrity\": \"sha512-Ebho8K4jIbHAxnuxi7o42OrZgF/ZTNcsZj6nRKyUmkhLFq8CHItp/fy6hQZuZmP/n3yZ9VBUbp4zz/mX8hmYPw==\",
            \"dev\": true,
            \"requires\": {
                \"core-util-is\": \"~1.0.0\",
                \"inherits\": \"~2.0.3\",
                \"isarray\": \"~1.0.0\",
                \"process-nextick-args\": \"~2.0.0\",
                \"safe-buffer\": \"~5.1.1\",
                \"string_decoder\": \"~1.1.1\",
                \"util-deprecate\": \"~1.0.1\"
            },
            \"dependencies\": {
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"readdirp\": {
            \"version\": \"2.2.1\",
            \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-2.2.1.tgz\",
            \"integrity\": \"sha512-1JU/8q+VgFZyxwrJ+SVIOsh+KywWGpds3NTqikiKpDMZWScmAYyKIgqkO+ARvNWJfXeXR1zxz7aHF4u4CyH6vQ==\",
            \"dev\": true,
            \"requires\": {
                \"graceful-fs\": \"^4.1.11\",
                \"micromatch\": \"^3.1.10\",
                \"readable-stream\": \"^2.0.2\"
            }
        },
        \"rechoir\": {
            \"version\": \"0.6.2\",
            \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.6.2.tgz\",
            \"integrity\": \"sha1-hSBLVNuoLVdC4oyWdW70OvUOM4Q=\",
            \"dev\": true,
            \"requires\": {
                \"resolve\": \"^1.1.6\"
            }
        },
        \"redent\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/redent/-/redent-1.0.0.tgz\",
            \"integrity\": \"sha1-z5Fqsf1fHxbfsggi3W7H9zDCr94=\",
            \"dev\": true,
            \"requires\": {
                \"indent-string\": \"^2.1.0\",
                \"strip-indent\": \"^1.0.1\"
            },
            \"dependencies\": {
                \"indent-string\": {
                    \"version\": \"2.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-2.1.0.tgz\",
                    \"integrity\": \"sha1-ji1INIdCEhtKghi3oTfppSBJ3IA=\",
                    \"dev\": true,
                    \"requires\": {
                        \"repeating\": \"^2.0.0\"
                    }
                }
            }
        },
        \"regex-not\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/regex-not/-/regex-not-1.0.2.tgz\",
            \"integrity\": \"sha512-J6SDjUgDxQj5NusnOtdFxDwN/+HWykR8GELwctJ7mdqhcyy1xEc4SRFHUXvxTp661YaVKAjfRLZ9cCqS6tn32A==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"remove-bom-buffer\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-buffer/-/remove-bom-buffer-3.0.0.tgz\",
            \"integrity\": \"sha512-8v2rWhaakv18qcvNeli2mZ/TMTL2nEyAKRvzo1WtnZBl15SHyEhrCu2/xKlJyUFKHiHgfXIyuY6g2dObJJycXQ==\",
            \"dev\": true,
            \"requires\": {
                \"is-buffer\": \"^1.1.5\",
                \"is-utf8\": \"^0.2.1\"
            }
        },
        \"remove-bom-stream\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-bom-stream/-/remove-bom-stream-1.2.0.tgz\",
            \"integrity\": \"sha1-BfGlk/FuQuH7kOv1nejlaVJflSM=\",
            \"dev\": true,
            \"requires\": {
                \"remove-bom-buffer\": \"^3.0.0\",
                \"safe-buffer\": \"^5.1.0\",
                \"through2\": \"^2.0.3\"
            }
        },
        \"remove-trailing-separator\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/remove-trailing-separator/-/remove-trailing-separator-1.1.0.tgz\",
            \"integrity\": \"sha1-wkvOKig62tW8P1jg1IJJuSN52O8=\",
            \"dev\": true
        },
        \"repeat-element\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/repeat-element/-/repeat-element-1.1.3.tgz\",
            \"integrity\": \"sha512-ahGq0ZnV5m5XtZLMb+vP76kcAM5nkLqk0lpqAuojSKGgQtn4eRi4ZZGm2olo2zKFH+sMsWaqOCW1dqAnOru72g==\",
            \"dev\": true
        },
        \"repeat-string\": {
            \"version\": \"1.6.1\",
            \"resolved\": \"https://registry.npmjs.org/repeat-string/-/repeat-string-1.6.1.tgz\",
            \"integrity\": \"sha1-jcrkcOHIirwtYA//Sndihtp15jc=\",
            \"dev\": true
        },
        \"repeating\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/repeating/-/repeating-2.0.1.tgz\",
            \"integrity\": \"sha1-UhTFOpJtNVJwdSf7q0FdvAjQbdo=\",
            \"dev\": true,
            \"requires\": {
                \"is-finite\": \"^1.0.0\"
            }
        },
        \"replace-ext\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-ext/-/replace-ext-1.0.0.tgz\",
            \"integrity\": \"sha1-3mMSg3P8v3w8z6TeWkgMRaZ5WOs=\",
            \"dev\": true
        },
        \"replace-homedir\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/replace-homedir/-/replace-homedir-1.0.0.tgz\",
            \"integrity\": \"sha1-6H9tUTuSjd6AgmDBK+f+xv9ueYw=\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\",
                \"is-absolute\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.1.0\"
            }
        },
        \"request\": {
            \"version\": \"2.88.2\",
            \"resolved\": \"https://registry.npmjs.org/request/-/request-2.88.2.tgz\",
            \"integrity\": \"sha512-MsvtOrfG9ZcrOwAW+Qi+F6HbD0CWXEh9ou77uOb7FM2WPhwT7smM833PzanhJLsgXjN89Ir6V2PczXNnMpwKhw==\",
            \"dev\": true,
            \"requires\": {
                \"aws-sign2\": \"~0.7.0\",
                \"aws4\": \"^1.8.0\",
                \"caseless\": \"~0.12.0\",
                \"combined-stream\": \"~1.0.6\",
                \"extend\": \"~3.0.2\",
                \"forever-agent\": \"~0.6.1\",
                \"form-data\": \"~2.3.2\",
                \"har-validator\": \"~5.1.3\",
                \"http-signature\": \"~1.2.0\",
                \"is-typedarray\": \"~1.0.0\",
                \"isstream\": \"~0.1.2\",
                \"json-stringify-safe\": \"~5.0.1\",
                \"mime-types\": \"~2.1.19\",
                \"oauth-sign\": \"~0.9.0\",
                \"performance-now\": \"^2.1.0\",
                \"qs\": \"~6.5.2\",
                \"safe-buffer\": \"^5.1.2\",
                \"tough-cookie\": \"~2.5.0\",
                \"tunnel-agent\": \"^0.6.0\",
                \"uuid\": \"^3.3.2\"
            },
            \"dependencies\": {
                \"qs\": {
                    \"version\": \"6.5.2\",
                    \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.5.2.tgz\",
                    \"integrity\": \"sha512-N5ZAX4/LxJmF+7wN74pUD6qAh9/wnvdQcjq9TZjevvXzSUo7bfmw91saqMjzGS2xq91/odN2dW/WOl7qQHNDGA==\",
                    \"dev\": true
                }
            }
        },
        \"require-directory\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
            \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
            \"dev\": true
        },
        \"require-main-filename\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-1.0.1.tgz\",
            \"integrity\": \"sha1-l/cXtp1IeE9fUmpsWqj/3aBVpNE=\",
            \"dev\": true
        },
        \"requires-port\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/requires-port/-/requires-port-1.0.0.tgz\",
            \"integrity\": \"sha1-kl0mAdOaxIXgkc8NpcbmlNw9yv8=\",
            \"dev\": true
        },
        \"resolve\": {
            \"version\": \"1.14.2\",
            \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.14.2.tgz\",
            \"integrity\": \"sha512-EjlOBLBO1kxsUxsKjLt7TAECyKW6fOh1VRkykQkKGzcBbjjPIxBqGh0jf7GJ3k/f5mxMqW3htMD3WdTUVtW8HQ==\",
            \"dev\": true,
            \"requires\": {
                \"path-parse\": \"^1.0.6\"
            }
        },
        \"resolve-dir\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-dir/-/resolve-dir-1.0.1.tgz\",
            \"integrity\": \"sha1-eaQGRMNivoLybv/nOcm7U4IEb0M=\",
            \"dev\": true,
            \"requires\": {
                \"expand-tilde\": \"^2.0.0\",
                \"global-modules\": \"^1.0.0\"
            }
        },
        \"resolve-options\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/resolve-options/-/resolve-options-1.1.0.tgz\",
            \"integrity\": \"sha1-MrueOcBtZzONyTeMDW1gdFZq0TE=\",
            \"dev\": true,
            \"requires\": {
                \"value-or-function\": \"^3.0.0\"
            }
        },
        \"resolve-url\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/resolve-url/-/resolve-url-0.2.1.tgz\",
            \"integrity\": \"sha1-LGN/53yJOv0qZj/iGqkIAGjiBSo=\",
            \"dev\": true
        },
        \"resp-modifier\": {
            \"version\": \"6.0.2\",
            \"resolved\": \"https://registry.npmjs.org/resp-modifier/-/resp-modifier-6.0.2.tgz\",
            \"integrity\": \"sha1-sSTeXE+6/LpUH0j/pzlw9KpFa08=\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"^2.2.0\",
                \"minimatch\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                }
            }
        },
        \"ret\": {
            \"version\": \"0.1.15\",
            \"resolved\": \"https://registry.npmjs.org/ret/-/ret-0.1.15.tgz\",
            \"integrity\": \"sha512-TTlYpa+OL+vMMNG24xSlQGEJ3B/RzEfUlLct7b5G/ytav+wPrplCpVMFuwzXbkecJrb6IYo1iFb0S9v37754mg==\",
            \"dev\": true
        },
        \"reusify\": {
            \"version\": \"1.0.4\",
            \"resolved\": \"https://registry.npmjs.org/reusify/-/reusify-1.0.4.tgz\",
            \"integrity\": \"sha512-U9nH88a3fc/ekCF1l0/UP1IosiuIjyTh7hBvXVMHYgVcfGvt897Xguj2UOLDeI5BG2m7/uwyaLVT6fbtCwTyzw==\",
            \"dev\": true
        },
        \"rimraf\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
            \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.1.3\"
            }
        },
        \"run-parallel\": {
            \"version\": \"1.1.10\",
            \"resolved\": \"https://registry.npmjs.org/run-parallel/-/run-parallel-1.1.10.tgz\",
            \"integrity\": \"sha512-zb/1OuZ6flOlH6tQyMPUrE3x3Ulxjlo9WIVXR4yVYi4H9UXQaeIsPbLn2R3O3vQCnDKkAl2qHiuocKKX4Tz/Sw==\",
            \"dev\": true
        },
        \"rx\": {
            \"version\": \"4.1.0\",
            \"resolved\": \"https://registry.npmjs.org/rx/-/rx-4.1.0.tgz\",
            \"integrity\": \"sha1-pfE/957zt0D+MKqAP7CfmIBdR4I=\",
            \"dev\": true
        },
        \"rxjs\": {
            \"version\": \"5.5.12\",
            \"resolved\": \"https://registry.npmjs.org/rxjs/-/rxjs-5.5.12.tgz\",
            \"integrity\": \"sha512-xx2itnL5sBbqeeiVgNPVuQQ1nC8Jp2WfNJhXWHmElW9YmrpS9UVnNzhP3EH3HFqexO5Tlp8GhYY+WEcqcVMvGw==\",
            \"dev\": true,
            \"requires\": {
                \"symbol-observable\": \"1.0.1\"
            }
        },
        \"safe-buffer\": {
            \"version\": \"5.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
            \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
            \"dev\": true
        },
        \"safe-regex\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/safe-regex/-/safe-regex-1.1.0.tgz\",
            \"integrity\": \"sha1-QKNmnzsHfR6UPURinhV91IAjvy4=\",
            \"dev\": true,
            \"requires\": {
                \"ret\": \"~0.1.10\"
            }
        },
        \"safer-buffer\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
            \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
            \"dev\": true
        },
        \"sass-graph\": {
            \"version\": \"2.2.5\",
            \"resolved\": \"https://registry.npmjs.org/sass-graph/-/sass-graph-2.2.5.tgz\",
            \"integrity\": \"sha512-VFWDAHOe6mRuT4mZRd4eKE+d8Uedrk6Xnh7Sh9b4NGufQLQjOrvf/MQoOdx+0s92L89FeyUUNfU597j/3uNpag==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.0.0\",
                \"lodash\": \"^4.0.0\",
                \"scss-tokenizer\": \"^0.2.3\",
                \"yargs\": \"^13.3.2\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.0.tgz\",
                    \"integrity\": \"sha512-1apePfXM1UOSqw0o9IiFAovVz9M5S1Dg+4TrDwfMewQ6p/rmMueb7tWZjQ1rx4Loy1ArBggoqGpfqqdI4rondg==\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
                    \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^1.9.0\"
                    }
                },
                \"cliui\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-5.0.0.tgz\",
                    \"integrity\": \"sha512-PYeGSEmmHM6zvoef2w8TPzlrnNpXIjTipYK780YswmIP9vjxmd6Y2a3CB2Ks6/AU8NHjZugXvo8w3oWM2qnwXA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"string-width\": \"^3.1.0\",
                        \"strip-ansi\": \"^5.2.0\",
                        \"wrap-ansi\": \"^5.1.0\"
                    }
                },
                \"find-up\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
                    \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"locate-path\": \"^3.0.0\"
                    }
                },
                \"get-caller-file\": {
                    \"version\": \"2.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
                    \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
                    \"dev\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-2.0.0.tgz\",
                    \"integrity\": \"sha1-o7MKXE8ZkYMWeqq5O+764937ZU8=\",
                    \"dev\": true
                },
                \"require-main-filename\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
                    \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
                    \"dev\": true
                },
                \"string-width\": {
                    \"version\": \"3.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-3.1.0.tgz\",
                    \"integrity\": \"sha512-vafcv6KjVZKSgz06oM/H6GDBrAtz8vdhQakGjFIvNrHA6y3HCF1CInLy+QLq8dTJPQ1b+KDUqDFctkdRW44e1w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"emoji-regex\": \"^7.0.1\",
                        \"is-fullwidth-code-point\": \"^2.0.0\",
                        \"strip-ansi\": \"^5.1.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"5.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
                    \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^4.1.0\"
                    }
                },
                \"which-module\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
                    \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
                    \"dev\": true
                },
                \"wrap-ansi\": {
                    \"version\": \"5.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-5.1.0.tgz\",
                    \"integrity\": \"sha512-QC1/iN/2/RPVJ5jYK8BGttj5z83LmSKmvbvrXPNCLZSEb32KKVDJDl/MOt2N01qU2H/FkzEa9PKto1BqDjtd7Q==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^3.2.0\",
                        \"string-width\": \"^3.0.0\",
                        \"strip-ansi\": \"^5.0.0\"
                    }
                },
                \"y18n\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.0.tgz\",
                    \"integrity\": \"sha512-r9S/ZyXu/Xu9q1tYlpsLIsa3EeLXXk0VwlxqTcFRfg9EhMW+17kbt9G0NrgCmhGb5vT2hyhJZLfDGx+7+5Uj/w==\",
                    \"dev\": true
                },
                \"yargs\": {
                    \"version\": \"13.3.2\",
                    \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-13.3.2.tgz\",
                    \"integrity\": \"sha512-AX3Zw5iPruN5ie6xGRIDgqkT+ZhnRlZMLMHAs8tg7nRruy2Nb+i5o9bwghAogtM08q1dpr2LVoS8KSTMYpWXUw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"cliui\": \"^5.0.0\",
                        \"find-up\": \"^3.0.0\",
                        \"get-caller-file\": \"^2.0.1\",
                        \"require-directory\": \"^2.1.1\",
                        \"require-main-filename\": \"^2.0.0\",
                        \"set-blocking\": \"^2.0.0\",
                        \"string-width\": \"^3.0.0\",
                        \"which-module\": \"^2.0.0\",
                        \"y18n\": \"^4.0.0\",
                        \"yargs-parser\": \"^13.1.2\"
                    }
                }
            }
        },
        \"scss-tokenizer\": {
            \"version\": \"0.2.3\",
            \"resolved\": \"https://registry.npmjs.org/scss-tokenizer/-/scss-tokenizer-0.2.3.tgz\",
            \"integrity\": \"sha1-jrBtualyMzOCTT9VMGQRSYR85dE=\",
            \"dev\": true,
            \"requires\": {
                \"js-base64\": \"^2.1.8\",
                \"source-map\": \"^0.4.2\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.4.4\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.4.4.tgz\",
                    \"integrity\": \"sha1-66T12pwNyZneaAMti092FzZSA2s=\",
                    \"dev\": true,
                    \"requires\": {
                        \"amdefine\": \">=0.0.4\"
                    }
                }
            }
        },
        \"semver\": {
            \"version\": \"5.7.1\",
            \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
            \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
            \"dev\": true
        },
        \"semver-greatest-satisfied-range\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/semver-greatest-satisfied-range/-/semver-greatest-satisfied-range-1.1.0.tgz\",
            \"integrity\": \"sha1-E+jCZYq5aRywzXEJMkAoDTb3els=\",
            \"dev\": true,
            \"requires\": {
                \"sver-compat\": \"^1.5.0\"
            }
        },
        \"send\": {
            \"version\": \"0.16.2\",
            \"resolved\": \"https://registry.npmjs.org/send/-/send-0.16.2.tgz\",
            \"integrity\": \"sha512-E64YFPUssFHEFBvpbbjr44NCLtI1AohxQ8ZSiJjQLskAdKuriYEP6VyGEsRDH8ScozGpkaX1BGvhanqCwkcEZw==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"2.6.9\",
                \"depd\": \"~1.1.2\",
                \"destroy\": \"~1.0.4\",
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"etag\": \"~1.8.1\",
                \"fresh\": \"0.5.2\",
                \"http-errors\": \"~1.6.2\",
                \"mime\": \"1.4.1\",
                \"ms\": \"2.0.0\",
                \"on-finished\": \"~2.3.0\",
                \"range-parser\": \"~1.2.0\",
                \"statuses\": \"~1.4.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"inherits\": {
                    \"version\": \"2.0.3\",
                    \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
                    \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
                    \"dev\": true
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.4.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.4.0.tgz\",
                    \"integrity\": \"sha512-zhSCtt8v2NDrRlPQpCNtw/heZLtfUDqxBM1udqikb/Hbk52LK4nQSwr10u77iopCW5LsyHpuXS0GnEc48mLeew==\",
                    \"dev\": true
                }
            }
        },
        \"serve-index\": {
            \"version\": \"1.9.1\",
            \"resolved\": \"https://registry.npmjs.org/serve-index/-/serve-index-1.9.1.tgz\",
            \"integrity\": \"sha1-03aNabHn2C5c4FD/9bRTvqEqkjk=\",
            \"dev\": true,
            \"requires\": {
                \"accepts\": \"~1.3.4\",
                \"batch\": \"0.6.1\",
                \"debug\": \"2.6.9\",
                \"escape-html\": \"~1.0.3\",
                \"http-errors\": \"~1.6.2\",
                \"mime-types\": \"~2.1.17\",
                \"parseurl\": \"~1.3.2\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"http-errors\": {
                    \"version\": \"1.6.3\",
                    \"resolved\": \"https://registry.npmjs.org/http-errors/-/http-errors-1.6.3.tgz\",
                    \"integrity\": \"sha1-i1VoC7S+KDoLW/TqLjhYC+HZMg0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"depd\": \"~1.1.2\",
                        \"inherits\": \"2.0.3\",
                        \"setprototypeof\": \"1.1.0\",
                        \"statuses\": \">= 1.4.0 < 2\"
                    }
                },
                \"inherits\": {
                    \"version\": \"2.0.3\",
                    \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
                    \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
                    \"dev\": true
                },
                \"setprototypeof\": {
                    \"version\": \"1.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.0.tgz\",
                    \"integrity\": \"sha512-BvE/TwpZX4FXExxOxZyRGQQv651MSwmWKZGqvmPcRIjDqWub67kTKuIMx43cZZrS/cBBzwBcNDWoFxt2XEFIpQ==\",
                    \"dev\": true
                },
                \"statuses\": {
                    \"version\": \"1.5.0\",
                    \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.5.0.tgz\",
                    \"integrity\": \"sha1-Fhx9rBd2Wf2YEfQ3cfqZOBR4Yow=\",
                    \"dev\": true
                }
            }
        },
        \"serve-static\": {
            \"version\": \"1.13.2\",
            \"resolved\": \"https://registry.npmjs.org/serve-static/-/serve-static-1.13.2.tgz\",
            \"integrity\": \"sha512-p/tdJrO4U387R9oMjb1oj7qSMaMfmOyd4j9hOFoxZe2baQszgHcSWjuya/CiT5kgZZKRudHNOA0pYXOl8rQ5nw==\",
            \"dev\": true,
            \"requires\": {
                \"encodeurl\": \"~1.0.2\",
                \"escape-html\": \"~1.0.3\",
                \"parseurl\": \"~1.3.2\",
                \"send\": \"0.16.2\"
            }
        },
        \"server-destroy\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/server-destroy/-/server-destroy-1.0.1.tgz\",
            \"integrity\": \"sha1-8Tv5KOQrnD55OD5hzDmYtdFObN0=\",
            \"dev\": true
        },
        \"set-blocking\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
            \"integrity\": \"sha1-BF+XgtARrppoA93TgrJDkrPYkPc=\",
            \"dev\": true
        },
        \"set-value\": {
            \"version\": \"2.0.1\",
            \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-2.0.1.tgz\",
            \"integrity\": \"sha512-JxHc1weCN68wRY0fhCoXpyK55m/XPHafOmK4UWD7m2CI14GMcFypt4w/0+NV5f/ZMby2F6S2wwA7fgynh9gWSw==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^2.0.1\",
                \"is-extendable\": \"^0.1.1\",
                \"is-plain-object\": \"^2.0.3\",
                \"split-string\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                }
            }
        },
        \"setprototypeof\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/setprototypeof/-/setprototypeof-1.1.1.tgz\",
            \"integrity\": \"sha512-JvdAWfbXeIGaZ9cILp38HntZSFSo3mWg6xGcJJsd+d4aRMOqauag1C63dJfDw7OaMYwEbHMOxEZ1lqVRYP2OAw==\",
            \"dev\": true
        },
        \"signal-exit\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/signal-exit/-/signal-exit-3.0.3.tgz\",
            \"integrity\": \"sha512-VUJ49FC8U1OxwZLxIbTTrDvLnf/6TDgxZcK8wxR8zs13xpx7xbG60ndBlhNrFi2EMuFRoeDoJO7wthSLq42EjA==\",
            \"dev\": true
        },
        \"slash\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/slash/-/slash-3.0.0.tgz\",
            \"integrity\": \"sha512-g9Q1haeby36OSStwb4ntCGGGaKsaVSjQ68fBxoQcutl5fS1vuY18H3wSt3jFyFtrkx+Kz0V1G85A4MyAdDMi2Q==\",
            \"dev\": true
        },
        \"snapdragon\": {
            \"version\": \"0.8.2\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon/-/snapdragon-0.8.2.tgz\",
            \"integrity\": \"sha512-FtyOnWN/wCHTVXOMwvSv26d+ko5vWlIDD6zoUJ7LW8vh+ZBC8QdljveRP+crNrtBwioEUWy/4dMtbBjA4ioNlg==\",
            \"dev\": true,
            \"requires\": {
                \"base\": \"^0.11.1\",
                \"debug\": \"^2.2.0\",
                \"define-property\": \"^0.2.5\",
                \"extend-shallow\": \"^2.0.1\",
                \"map-cache\": \"^0.2.2\",
                \"source-map\": \"^0.5.6\",
                \"source-map-resolve\": \"^0.5.0\",
                \"use\": \"^3.1.0\"
            },
            \"dependencies\": {
                \"debug\": {
                    \"version\": \"2.6.9\",
                    \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
                    \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ms\": \"2.0.0\"
                    }
                },
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                },
                \"extend-shallow\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
                    \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-extendable\": \"^0.1.0\"
                    }
                },
                \"ms\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
                    \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
                    \"dev\": true
                }
            }
        },
        \"snapdragon-node\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-node/-/snapdragon-node-2.1.1.tgz\",
            \"integrity\": \"sha512-O27l4xaMYt/RSQ5TR3vpWCAB5Kb/czIcqUFOM/C4fYcLnbZUc1PkjTAMjof2pBWaSTwOUd6qUHcFGVGj7aIwnw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^1.0.0\",
                \"isobject\": \"^3.0.0\",
                \"snapdragon-util\": \"^3.0.1\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
                    \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^1.0.0\"
                    }
                },
                \"is-accessor-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-data-descriptor\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
                    \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"kind-of\": \"^6.0.0\"
                    }
                },
                \"is-descriptor\": {
                    \"version\": \"1.0.2\",
                    \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
                    \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-accessor-descriptor\": \"^1.0.0\",
                        \"is-data-descriptor\": \"^1.0.0\",
                        \"kind-of\": \"^6.0.2\"
                    }
                }
            }
        },
        \"snapdragon-util\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/snapdragon-util/-/snapdragon-util-3.0.1.tgz\",
            \"integrity\": \"sha512-mbKkMdQKsjX4BAL4bRYTj21edOf8cN7XHdYUJEe+Zn99hVEYcMvKPct1IqNe7+AZPirn8BCDOQBHQZknqmKlZQ==\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.2.0\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"socket.io\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io/-/socket.io-2.1.1.tgz\",
            \"integrity\": \"sha512-rORqq9c+7W0DAK3cleWNSyfv/qKXV99hV4tZe+gGLfBECw3XEhBy7x85F3wypA9688LKjtwO9pX9L33/xQI8yA==\",
            \"dev\": true,
            \"requires\": {
                \"debug\": \"~3.1.0\",
                \"engine.io\": \"~3.2.0\",
                \"has-binary2\": \"~1.0.2\",
                \"socket.io-adapter\": \"~1.1.0\",
                \"socket.io-client\": \"2.1.1\",
                \"socket.io-parser\": \"~3.2.0\"
            },
            \"dependencies\": {
                \"base64-arraybuffer\": {
                    \"version\": \"0.1.5\",
                    \"resolved\": \"https://registry.npmjs.org/base64-arraybuffer/-/base64-arraybuffer-0.1.5.tgz\",
                    \"integrity\": \"sha1-c5JncZI7Whl0etZmqlzUv5xunOg=\",
                    \"dev\": true
                },
                \"engine.io-client\": {
                    \"version\": \"3.2.1\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-client/-/engine.io-client-3.2.1.tgz\",
                    \"integrity\": \"sha512-y5AbkytWeM4jQr7m/koQLc5AxpRKC1hEVUb/s1FUAWEJq5AzJJ4NLvzuKPuxtDi5Mq755WuDvZ6Iv2rXj4PTzw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"component-inherit\": \"0.0.3\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-parser\": \"~2.1.1\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"ws\": \"~3.3.1\",
                        \"xmlhttprequest-ssl\": \"~1.5.4\",
                        \"yeast\": \"0.1.2\"
                    }
                },
                \"engine.io-parser\": {
                    \"version\": \"2.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/engine.io-parser/-/engine.io-parser-2.1.3.tgz\",
                    \"integrity\": \"sha512-6HXPre2O4Houl7c4g7Ic/XzPnHBvaEmN90vtRO9uLmwtRqQmTOw0QMevL1TOfL2Cpu1VzsaTmMotQgMdkzGkVA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"after\": \"0.8.2\",
                        \"arraybuffer.slice\": \"~0.0.7\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"blob\": \"0.0.5\",
                        \"has-binary2\": \"~1.0.2\"
                    }
                },
                \"parseqs\": {
                    \"version\": \"0.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/parseqs/-/parseqs-0.0.5.tgz\",
                    \"integrity\": \"sha1-1SCKNzjkZ2bikbouoXNoSSGouJ0=\",
                    \"dev\": true,
                    \"requires\": {
                        \"better-assert\": \"~1.0.0\"
                    }
                },
                \"parseuri\": {
                    \"version\": \"0.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/parseuri/-/parseuri-0.0.5.tgz\",
                    \"integrity\": \"sha1-gCBKUNTbt3m/3G6+J3jZDkvOMgo=\",
                    \"dev\": true,
                    \"requires\": {
                        \"better-assert\": \"~1.0.0\"
                    }
                },
                \"socket.io-client\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.1.1.tgz\",
                    \"integrity\": \"sha512-jxnFyhAuFxYfjqIgduQlhzqTcOEQSn+OHKVfAxWaNWa7ecP7xSNk2Dx/3UEsDcY7NcFafxvNvKPmmO7HTwTxGQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"backo2\": \"1.0.2\",
                        \"base64-arraybuffer\": \"0.1.5\",
                        \"component-bind\": \"1.0.0\",
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"engine.io-client\": \"~3.2.0\",
                        \"has-binary2\": \"~1.0.2\",
                        \"has-cors\": \"1.1.0\",
                        \"indexof\": \"0.0.1\",
                        \"object-component\": \"0.0.3\",
                        \"parseqs\": \"0.0.5\",
                        \"parseuri\": \"0.0.5\",
                        \"socket.io-parser\": \"~3.2.0\",
                        \"to-array\": \"0.1.4\"
                    }
                },
                \"socket.io-parser\": {
                    \"version\": \"3.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.2.0.tgz\",
                    \"integrity\": \"sha512-FYiBx7rc/KORMJlgsXysflWx/RIvtqZbyGLlHZvjfmPTPeuD/I8MaW7cfFrj5tRltICJdgwflhfZ3NVVbVLFQA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"component-emitter\": \"1.2.1\",
                        \"debug\": \"~3.1.0\",
                        \"isarray\": \"2.0.1\"
                    }
                },
                \"ws\": {
                    \"version\": \"3.3.3\",
                    \"resolved\": \"https://registry.npmjs.org/ws/-/ws-3.3.3.tgz\",
                    \"integrity\": \"sha512-nnWLa/NwZSt4KQJu51MYlCcSQ5g7INpOrOMt4XV8j4dqTXdmlUmSHQ8/oLC069ckre0fRsgfvsKwbTdtKLCDkA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"async-limiter\": \"~1.0.0\",
                        \"safe-buffer\": \"~5.1.0\",
                        \"ultron\": \"~1.1.0\"
                    }
                }
            }
        },
        \"socket.io-adapter\": {
            \"version\": \"1.1.2\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-adapter/-/socket.io-adapter-1.1.2.tgz\",
            \"integrity\": \"sha512-WzZRUj1kUjrTIrUKpZLEzFZ1OLj5FwLlAFQs9kuZJzJi5DKdU7FsWc36SNmA8iDOtwBQyT8FkrriRM8vXLYz8g==\",
            \"dev\": true
        },
        \"socket.io-client\": {
            \"version\": \"2.3.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-client/-/socket.io-client-2.3.1.tgz\",
            \"integrity\": \"sha512-YXmXn3pA8abPOY//JtYxou95Ihvzmg8U6kQyolArkIyLd0pgVhrfor/iMsox8cn07WCOOvvuJ6XKegzIucPutQ==\",
            \"dev\": true,
            \"requires\": {
                \"backo2\": \"1.0.2\",
                \"component-bind\": \"1.0.0\",
                \"component-emitter\": \"~1.3.0\",
                \"debug\": \"~3.1.0\",
                \"engine.io-client\": \"~3.4.0\",
                \"has-binary2\": \"~1.0.2\",
                \"indexof\": \"0.0.1\",
                \"parseqs\": \"0.0.6\",
                \"parseuri\": \"0.0.6\",
                \"socket.io-parser\": \"~3.3.0\",
                \"to-array\": \"0.1.4\"
            },
            \"dependencies\": {
                \"component-emitter\": {
                    \"version\": \"1.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
                    \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
                    \"dev\": true
                }
            }
        },
        \"socket.io-parser\": {
            \"version\": \"3.3.1\",
            \"resolved\": \"https://registry.npmjs.org/socket.io-parser/-/socket.io-parser-3.3.1.tgz\",
            \"integrity\": \"sha512-1QLvVAe8dTz+mKmZ07Swxt+LAo4Y1ff50rlyoEx00TQmDFVQYPfcqGvIDJLGaBdhdNCecXtyKpD+EgKGcmmbuQ==\",
            \"dev\": true,
            \"requires\": {
                \"component-emitter\": \"~1.3.0\",
                \"debug\": \"~3.1.0\",
                \"isarray\": \"2.0.1\"
            },
            \"dependencies\": {
                \"component-emitter\": {
                    \"version\": \"1.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
                    \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
                    \"dev\": true
                }
            }
        },
        \"source-map\": {
            \"version\": \"0.5.7\",
            \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
            \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
            \"dev\": true
        },
        \"source-map-resolve\": {
            \"version\": \"0.5.3\",
            \"resolved\": \"https://registry.npmjs.org/source-map-resolve/-/source-map-resolve-0.5.3.tgz\",
            \"integrity\": \"sha512-Htz+RnsXWk5+P2slx5Jh3Q66vhQj1Cllm0zvnaY98+NFx+Dv2CF/f5O/t8x+KaNdrdIAsruNzoh/KpialbqAnw==\",
            \"dev\": true,
            \"requires\": {
                \"atob\": \"^2.1.2\",
                \"decode-uri-component\": \"^0.2.0\",
                \"resolve-url\": \"^0.2.1\",
                \"source-map-url\": \"^0.4.0\",
                \"urix\": \"^0.1.0\"
            }
        },
        \"source-map-url\": {
            \"version\": \"0.4.0\",
            \"resolved\": \"https://registry.npmjs.org/source-map-url/-/source-map-url-0.4.0.tgz\",
            \"integrity\": \"sha1-PpNdfd1zYxuXZZlW1VEo6HtQhKM=\",
            \"dev\": true
        },
        \"sparkles\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/sparkles/-/sparkles-1.0.1.tgz\",
            \"integrity\": \"sha512-dSO0DDYUahUt/0/pD/Is3VIm5TGJjludZ0HVymmhYF6eNA53PVLhnUk0znSYbH8IYBuJdCE+1luR22jNLMaQdw==\",
            \"dev\": true
        },
        \"spdx-correct\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.1.0.tgz\",
            \"integrity\": \"sha512-lr2EZCctC2BNR7j7WzJ2FpDznxky1sjfxvvYEyzxNyb6lZXHODmEoJeFu4JupYlkfha1KZpJyoqiJ7pgA1qq8Q==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-expression-parse\": \"^3.0.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-exceptions\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-exceptions/-/spdx-exceptions-2.2.0.tgz\",
            \"integrity\": \"sha512-2XQACfElKi9SlVb1CYadKDXvoajPgBVPn/gOQLrTvHdElaVhr7ZEbqJaRnJLVNeaI4cMEAgVCeBMKF6MWRDCRA==\",
            \"dev\": true
        },
        \"spdx-expression-parse\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/spdx-expression-parse/-/spdx-expression-parse-3.0.0.tgz\",
            \"integrity\": \"sha512-Yg6D3XpRD4kkOmTpdgbUiEJFKghJH03fiC1OPll5h/0sO6neh2jqRDVHOQ4o/LMea0tgCkbMgea5ip/e+MkWyg==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-exceptions\": \"^2.1.0\",
                \"spdx-license-ids\": \"^3.0.0\"
            }
        },
        \"spdx-license-ids\": {
            \"version\": \"3.0.5\",
            \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.5.tgz\",
            \"integrity\": \"sha512-J+FWzZoynJEXGphVIS+XEh3kFSjZX/1i9gFBaWQcB+/tmpe2qUsSBABpcxqxnAxFdiUFEgAX1bjYGQvIZmoz9Q==\",
            \"dev\": true
        },
        \"split-string\": {
            \"version\": \"3.1.0\",
            \"resolved\": \"https://registry.npmjs.org/split-string/-/split-string-3.1.0.tgz\",
            \"integrity\": \"sha512-NzNVhJDYpwceVVii8/Hu6DKfD2G+NrQHlS/V/qgv763EYudVwEcMQNxd2lh+0VrUByXN/oJkl5grOhYWvQUYiw==\",
            \"dev\": true,
            \"requires\": {
                \"extend-shallow\": \"^3.0.0\"
            }
        },
        \"sshpk\": {
            \"version\": \"1.16.1\",
            \"resolved\": \"https://registry.npmjs.org/sshpk/-/sshpk-1.16.1.tgz\",
            \"integrity\": \"sha512-HXXqVUq7+pcKeLqqZj6mHFUMvXtOJt1uoUx09pFW6011inTMxqI8BA8PM95myrIyyKwdnzjdFjLiE6KBPVtJIg==\",
            \"dev\": true,
            \"requires\": {
                \"asn1\": \"~0.2.3\",
                \"assert-plus\": \"^1.0.0\",
                \"bcrypt-pbkdf\": \"^1.0.0\",
                \"dashdash\": \"^1.12.0\",
                \"ecc-jsbn\": \"~0.1.1\",
                \"getpass\": \"^0.1.1\",
                \"jsbn\": \"~0.1.0\",
                \"safer-buffer\": \"^2.0.2\",
                \"tweetnacl\": \"~0.14.0\"
            }
        },
        \"stack-trace\": {
            \"version\": \"0.0.10\",
            \"resolved\": \"https://registry.npmjs.org/stack-trace/-/stack-trace-0.0.10.tgz\",
            \"integrity\": \"sha1-VHxws0fo0ytOEI6hoqFZ5f3eGcA=\",
            \"dev\": true
        },
        \"static-extend\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/static-extend/-/static-extend-0.1.2.tgz\",
            \"integrity\": \"sha1-YICcOcv/VTNyJv1eC1IPNB8ftcY=\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^0.2.5\",
                \"object-copy\": \"^0.1.0\"
            },
            \"dependencies\": {
                \"define-property\": {
                    \"version\": \"0.2.5\",
                    \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
                    \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-descriptor\": \"^0.1.0\"
                    }
                }
            }
        },
        \"statuses\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/statuses/-/statuses-1.3.1.tgz\",
            \"integrity\": \"sha1-+vUbnrdKrvOzrPStX2Gr8ky3uT4=\",
            \"dev\": true
        },
        \"stdout-stream\": {
            \"version\": \"1.4.1\",
            \"resolved\": \"https://registry.npmjs.org/stdout-stream/-/stdout-stream-1.4.1.tgz\",
            \"integrity\": \"sha512-j4emi03KXqJWcIeF8eIXkjMFN1Cmb8gUlDYGeBALLPo5qdyTfA9bOtl8m33lRoC+vFMkP3gl0WsDr6+gzxbbTA==\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"^2.0.1\"
            }
        },
        \"stream-exhaust\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/stream-exhaust/-/stream-exhaust-1.0.2.tgz\",
            \"integrity\": \"sha512-b/qaq/GlBK5xaq1yrK9/zFcyRSTNxmcZwFLGSTG0mXgZl/4Z6GgiyYOXOvY7N3eEvFRAG1bkDRz5EPGSvPYQlw==\",
            \"dev\": true
        },
        \"stream-shift\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/stream-shift/-/stream-shift-1.0.1.tgz\",
            \"integrity\": \"sha512-AiisoFqQ0vbGcZgQPY1cdP2I76glaVA/RauYR4G4thNFgkTqr90yXTo4LYX60Jl+sIlPNHHdGSwo01AvbKUSVQ==\",
            \"dev\": true
        },
        \"stream-throttle\": {
            \"version\": \"0.1.3\",
            \"resolved\": \"https://registry.npmjs.org/stream-throttle/-/stream-throttle-0.1.3.tgz\",
            \"integrity\": \"sha1-rdV8jXzHOoFjDTHNVdOWHPr7qcM=\",
            \"dev\": true,
            \"requires\": {
                \"commander\": \"^2.2.0\",
                \"limiter\": \"^1.0.5\"
            }
        },
        \"string-width\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-1.0.2.tgz\",
            \"integrity\": \"sha1-EYvfW4zcUaKn5w0hHgfisLmxB9M=\",
            \"dev\": true,
            \"requires\": {
                \"code-point-at\": \"^1.0.0\",
                \"is-fullwidth-code-point\": \"^1.0.0\",
                \"strip-ansi\": \"^3.0.0\"
            }
        },
        \"string_decoder\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.1.1.tgz\",
            \"integrity\": \"sha512-n/ShnvDi6FHbbVfviro+WojiFzv+s8MPMHBczVePfUpDJLwoLT0ht1l4YwBCbi8pJAveEEdnkHyPyTP/mzRfwg==\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"~5.1.0\"
            }
        },
        \"strip-ansi\": {
            \"version\": \"3.0.1\",
            \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
            \"integrity\": \"sha1-ajhfuIU9lS1f8F0Oiq+UJ43GPc8=\",
            \"dev\": true,
            \"requires\": {
                \"ansi-regex\": \"^2.0.0\"
            }
        },
        \"strip-bom\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-2.0.0.tgz\",
            \"integrity\": \"sha1-YhmoVhZSBJHzV4i9vxRHqZx+aw4=\",
            \"dev\": true,
            \"requires\": {
                \"is-utf8\": \"^0.2.0\"
            }
        },
        \"strip-indent\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/strip-indent/-/strip-indent-1.0.1.tgz\",
            \"integrity\": \"sha1-DHlipq3vp7vUrDZkYKY4VSrhoKI=\",
            \"dev\": true,
            \"requires\": {
                \"get-stdin\": \"^4.0.1\"
            }
        },
        \"supports-color\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-2.0.0.tgz\",
            \"integrity\": \"sha1-U10EXOa2Nj+kARcIRimZXp3zJMc=\",
            \"dev\": true
        },
        \"sver-compat\": {
            \"version\": \"1.5.0\",
            \"resolved\": \"https://registry.npmjs.org/sver-compat/-/sver-compat-1.5.0.tgz\",
            \"integrity\": \"sha1-PPh9/rTQe0o/FIJ7wYaz/QxkXNg=\",
            \"dev\": true,
            \"requires\": {
                \"es6-iterator\": \"^2.0.1\",
                \"es6-symbol\": \"^3.1.1\"
            }
        },
        \"symbol-observable\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/symbol-observable/-/symbol-observable-1.0.1.tgz\",
            \"integrity\": \"sha1-g0D8RwLDEi310iKI+IKD9RPT/dQ=\",
            \"dev\": true
        },
        \"tar\": {
            \"version\": \"2.2.2\",
            \"resolved\": \"https://registry.npmjs.org/tar/-/tar-2.2.2.tgz\",
            \"integrity\": \"sha512-FCEhQ/4rE1zYv9rYXJw/msRqsnmlje5jHP6huWeBZ704jUTy02c5AZyWujpMR1ax6mVw9NyJMfuK2CMDWVIfgA==\",
            \"dev\": true,
            \"requires\": {
                \"block-stream\": \"*\",
                \"fstream\": \"^1.0.12\",
                \"inherits\": \"2\"
            }
        },
        \"tfunk\": {
            \"version\": \"4.0.0\",
            \"resolved\": \"https://registry.npmjs.org/tfunk/-/tfunk-4.0.0.tgz\",
            \"integrity\": \"sha512-eJQ0dGfDIzWNiFNYFVjJ+Ezl/GmwHaFTBTjrtqNPW0S7cuVDBrZrmzUz6VkMeCR4DZFqhd4YtLwsw3i2wYHswQ==\",
            \"dev\": true,
            \"requires\": {
                \"chalk\": \"^1.1.3\",
                \"dlv\": \"^1.1.3\"
            }
        },
        \"through2\": {
            \"version\": \"2.0.5\",
            \"resolved\": \"https://registry.npmjs.org/through2/-/through2-2.0.5.tgz\",
            \"integrity\": \"sha512-/mrRod8xqpA+IHSLyGCQ2s8SPHiCDEeQJSep1jqLYeEUClOFG2Qsh+4FU6G9VeqpZnGW/Su8LQGc4YKni5rYSQ==\",
            \"dev\": true,
            \"requires\": {
                \"readable-stream\": \"~2.3.6\",
                \"xtend\": \"~4.0.1\"
            }
        },
        \"through2-filter\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/through2-filter/-/through2-filter-3.0.0.tgz\",
            \"integrity\": \"sha512-jaRjI2WxN3W1V8/FMZ9HKIBXixtiqs3SQSX4/YGIiP3gL6djW48VoZq9tDqeCWs3MT8YY5wb/zli8VW8snY1CA==\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"~2.0.0\",
                \"xtend\": \"~4.0.0\"
            }
        },
        \"time-stamp\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/time-stamp/-/time-stamp-1.1.0.tgz\",
            \"integrity\": \"sha1-dkpaEa9QVhkhsTPztE5hhofg9cM=\",
            \"dev\": true
        },
        \"to-absolute-glob\": {
            \"version\": \"2.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-absolute-glob/-/to-absolute-glob-2.0.2.tgz\",
            \"integrity\": \"sha1-GGX0PZ50sIItufFFt4z/fQ98hJs=\",
            \"dev\": true,
            \"requires\": {
                \"is-absolute\": \"^1.0.0\",
                \"is-negated-glob\": \"^1.0.0\"
            }
        },
        \"to-array\": {
            \"version\": \"0.1.4\",
            \"resolved\": \"https://registry.npmjs.org/to-array/-/to-array-0.1.4.tgz\",
            \"integrity\": \"sha1-F+bBH3PdTz10zaek/zI46a2b+JA=\",
            \"dev\": true
        },
        \"to-object-path\": {
            \"version\": \"0.3.0\",
            \"resolved\": \"https://registry.npmjs.org/to-object-path/-/to-object-path-0.3.0.tgz\",
            \"integrity\": \"sha1-KXWIt7Dn4KwI4E5nL4XB9JmeF68=\",
            \"dev\": true,
            \"requires\": {
                \"kind-of\": \"^3.0.2\"
            },
            \"dependencies\": {
                \"kind-of\": {
                    \"version\": \"3.2.2\",
                    \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
                    \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
                    \"dev\": true,
                    \"requires\": {
                        \"is-buffer\": \"^1.1.5\"
                    }
                }
            }
        },
        \"to-regex\": {
            \"version\": \"3.0.2\",
            \"resolved\": \"https://registry.npmjs.org/to-regex/-/to-regex-3.0.2.tgz\",
            \"integrity\": \"sha512-FWtleNAtZ/Ki2qtqej2CXTOayOH9bHDQF+Q48VpWyDXjbYxA4Yz8iDB31zXOBUlOHHKidDbqGVrTUvQMPmBGBw==\",
            \"dev\": true,
            \"requires\": {
                \"define-property\": \"^2.0.2\",
                \"extend-shallow\": \"^3.0.2\",
                \"regex-not\": \"^1.0.2\",
                \"safe-regex\": \"^1.1.0\"
            }
        },
        \"to-regex-range\": {
            \"version\": \"2.1.1\",
            \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-2.1.1.tgz\",
            \"integrity\": \"sha1-fIDBe53+vlmeJzZ+DU3VWQFB2zg=\",
            \"dev\": true,
            \"requires\": {
                \"is-number\": \"^3.0.0\",
                \"repeat-string\": \"^1.6.1\"
            }
        },
        \"to-through\": {
            \"version\": \"2.0.0\",
            \"resolved\": \"https://registry.npmjs.org/to-through/-/to-through-2.0.0.tgz\",
            \"integrity\": \"sha1-/JKtq6ByZHvAtn1rA2ZKoZUJOvY=\",
            \"dev\": true,
            \"requires\": {
                \"through2\": \"^2.0.3\"
            }
        },
        \"toidentifier\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/toidentifier/-/toidentifier-1.0.0.tgz\",
            \"integrity\": \"sha512-yaOH/Pk/VEhBWWTlhI+qXxDFXlejDGcQipMlyxda9nthulaxLZUNcUqFxokp0vcYnvteJln5FNQDRrxj3YcbVw==\",
            \"dev\": true
        },
        \"tough-cookie\": {
            \"version\": \"2.5.0\",
            \"resolved\": \"https://registry.npmjs.org/tough-cookie/-/tough-cookie-2.5.0.tgz\",
            \"integrity\": \"sha512-nlLsUzgm1kfLXSXfRZMc1KLAugd4hqJHDTvc2hDIwS3mZAfMEuMbc03SujMF+GEcpaX/qboeycw6iO8JwVv2+g==\",
            \"dev\": true,
            \"requires\": {
                \"psl\": \"^1.1.28\",
                \"punycode\": \"^2.1.1\"
            }
        },
        \"trim-newlines\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/trim-newlines/-/trim-newlines-1.0.0.tgz\",
            \"integrity\": \"sha1-WIeWa7WCpFA6QetST301ARgVphM=\",
            \"dev\": true
        },
        \"true-case-path\": {
            \"version\": \"1.0.3\",
            \"resolved\": \"https://registry.npmjs.org/true-case-path/-/true-case-path-1.0.3.tgz\",
            \"integrity\": \"sha512-m6s2OdQe5wgpFMC+pAJ+q9djG82O2jcHPOI6RNg1yy9rCYR+WD6Nbpl32fDpfC56nirdRy+opFa/Vk7HYhqaew==\",
            \"dev\": true,
            \"requires\": {
                \"glob\": \"^7.1.2\"
            }
        },
        \"tunnel-agent\": {
            \"version\": \"0.6.0\",
            \"resolved\": \"https://registry.npmjs.org/tunnel-agent/-/tunnel-agent-0.6.0.tgz\",
            \"integrity\": \"sha1-J6XeoGs2sEoKmWZ3SykIaPD8QP0=\",
            \"dev\": true,
            \"requires\": {
                \"safe-buffer\": \"^5.0.1\"
            }
        },
        \"tweetnacl\": {
            \"version\": \"0.14.5\",
            \"resolved\": \"https://registry.npmjs.org/tweetnacl/-/tweetnacl-0.14.5.tgz\",
            \"integrity\": \"sha1-WuaBd/GS1EViadEIr6k/+HQ/T2Q=\",
            \"dev\": true
        },
        \"type\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/type/-/type-1.2.0.tgz\",
            \"integrity\": \"sha512-+5nt5AAniqsCnu2cEQQdpzCAh33kVx8n0VoFidKpB1dVVLAN/F+bgVOqOJqOnEnrhp222clB5p3vUlD+1QAnfg==\",
            \"dev\": true
        },
        \"typedarray\": {
            \"version\": \"0.0.6\",
            \"resolved\": \"https://registry.npmjs.org/typedarray/-/typedarray-0.0.6.tgz\",
            \"integrity\": \"sha1-hnrHTjhkGHsdPUfZlqeOxciDB3c=\",
            \"dev\": true
        },
        \"ua-parser-js\": {
            \"version\": \"0.7.22\",
            \"resolved\": \"https://registry.npmjs.org/ua-parser-js/-/ua-parser-js-0.7.22.tgz\",
            \"integrity\": \"sha512-YUxzMjJ5T71w6a8WWVcMGM6YWOTX27rCoIQgLXiWaxqXSx9D7DNjiGWn1aJIRSQ5qr0xuhra77bSIh6voR/46Q==\",
            \"dev\": true
        },
        \"uglify-js\": {
            \"version\": \"3.7.5\",
            \"resolved\": \"https://registry.npmjs.org/uglify-js/-/uglify-js-3.7.5.tgz\",
            \"integrity\": \"sha512-GFZ3EXRptKGvb/C1Sq6nO1iI7AGcjyqmIyOw0DrD0675e+NNbGO72xmMM2iEBdFbxaTLo70NbjM/Wy54uZIlsg==\",
            \"dev\": true,
            \"requires\": {
                \"commander\": \"~2.20.3\",
                \"source-map\": \"~0.6.1\"
            },
            \"dependencies\": {
                \"source-map\": {
                    \"version\": \"0.6.1\",
                    \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
                    \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
                    \"dev\": true
                }
            }
        },
        \"ultron\": {
            \"version\": \"1.1.1\",
            \"resolved\": \"https://registry.npmjs.org/ultron/-/ultron-1.1.1.tgz\",
            \"integrity\": \"sha512-UIEXBNeYmKptWH6z8ZnqTeS8fV74zG0/eRU9VGkpzz+LIJNs8W/zM/L+7ctCkRrgbNnnR0xxw4bKOr0cW0N0Og==\",
            \"dev\": true
        },
        \"unc-path-regex\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/unc-path-regex/-/unc-path-regex-0.1.2.tgz\",
            \"integrity\": \"sha1-5z3T17DXxe2G+6xrCufYxqadUPo=\",
            \"dev\": true
        },
        \"undertaker\": {
            \"version\": \"1.2.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker/-/undertaker-1.2.1.tgz\",
            \"integrity\": \"sha512-71WxIzDkgYk9ZS+spIB8iZXchFhAdEo2YU8xYqBYJ39DIUIqziK78ftm26eecoIY49X0J2MLhG4hr18Yp6/CMA==\",
            \"dev\": true,
            \"requires\": {
                \"arr-flatten\": \"^1.0.1\",
                \"arr-map\": \"^2.0.0\",
                \"bach\": \"^1.0.0\",
                \"collection-map\": \"^1.0.0\",
                \"es6-weak-map\": \"^2.0.1\",
                \"last-run\": \"^1.1.0\",
                \"object.defaults\": \"^1.0.0\",
                \"object.reduce\": \"^1.0.0\",
                \"undertaker-registry\": \"^1.0.0\"
            }
        },
        \"undertaker-registry\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/undertaker-registry/-/undertaker-registry-1.0.1.tgz\",
            \"integrity\": \"sha1-XkvaMI5KiirlhPm5pDWaSZglzFA=\",
            \"dev\": true
        },
        \"union-value\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/union-value/-/union-value-1.0.1.tgz\",
            \"integrity\": \"sha512-tJfXmxMeWYnczCVs7XAEvIV7ieppALdyepWMkHkwciRpZraG/xwT+s2JN8+pr1+8jCRf80FFzvr+MpQeeoF4Xg==\",
            \"dev\": true,
            \"requires\": {
                \"arr-union\": \"^3.1.0\",
                \"get-value\": \"^2.0.6\",
                \"is-extendable\": \"^0.1.1\",
                \"set-value\": \"^2.0.1\"
            }
        },
        \"unique-stream\": {
            \"version\": \"2.3.1\",
            \"resolved\": \"https://registry.npmjs.org/unique-stream/-/unique-stream-2.3.1.tgz\",
            \"integrity\": \"sha512-2nY4TnBE70yoxHkDli7DMazpWiP7xMdCYqU2nBRO0UB+ZpEkGsSija7MvmvnZFUeC+mrgiUfcHSr3LmRFIg4+A==\",
            \"dev\": true,
            \"requires\": {
                \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
                \"through2-filter\": \"^3.0.0\"
            }
        },
        \"universalify\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/universalify/-/universalify-0.1.2.tgz\",
            \"integrity\": \"sha512-rBJeI5CXAlmy1pV+617WB9J63U6XcazHHF2f2dbJix4XzpUF0RS3Zbj0FGIOCAva5P/d/GBOYaACQ1w+0azUkg==\",
            \"dev\": true
        },
        \"unpipe\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unpipe/-/unpipe-1.0.0.tgz\",
            \"integrity\": \"sha1-sr9O6FFKrmFltIF4KdIbLvSZBOw=\",
            \"dev\": true
        },
        \"unset-value\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/unset-value/-/unset-value-1.0.0.tgz\",
            \"integrity\": \"sha1-g3aHP30jNRef+x5vw6jtDfyKtVk=\",
            \"dev\": true,
            \"requires\": {
                \"has-value\": \"^0.3.1\",
                \"isobject\": \"^3.0.0\"
            },
            \"dependencies\": {
                \"has-value\": {
                    \"version\": \"0.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-0.3.1.tgz\",
                    \"integrity\": \"sha1-ex9YutpiyoJ+wKIHgCVlSEWZXh8=\",
                    \"dev\": true,
                    \"requires\": {
                        \"get-value\": \"^2.0.3\",
                        \"has-values\": \"^0.1.4\",
                        \"isobject\": \"^2.0.0\"
                    },
                    \"dependencies\": {
                        \"isobject\": {
                            \"version\": \"2.1.0\",
                            \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-2.1.0.tgz\",
                            \"integrity\": \"sha1-8GVWEJaj8dou9GJy+BXIQNh+DIk=\",
                            \"dev\": true,
                            \"requires\": {
                                \"isarray\": \"1.0.0\"
                            }
                        }
                    }
                },
                \"has-values\": {
                    \"version\": \"0.1.4\",
                    \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-0.1.4.tgz\",
                    \"integrity\": \"sha1-bWHeldkd/Km5oCCJrThL/49it3E=\",
                    \"dev\": true
                },
                \"isarray\": {
                    \"version\": \"1.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
                    \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
                    \"dev\": true
                }
            }
        },
        \"upath\": {
            \"version\": \"1.2.0\",
            \"resolved\": \"https://registry.npmjs.org/upath/-/upath-1.2.0.tgz\",
            \"integrity\": \"sha512-aZwGpamFO61g3OlfT7OQCHqhGnW43ieH9WZeP7QxN/G/jS4jfqUkZxoryvJgVPEcrl5NL/ggHsSmLMHuH64Lhg==\",
            \"dev\": true
        },
        \"uri-js\": {
            \"version\": \"4.4.0\",
            \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.4.0.tgz\",
            \"integrity\": \"sha512-B0yRTzYdUCCn9n+F4+Gh4yIDtMQcaJsmYBDsTSG8g/OejKBodLQ2IHfN3bM7jUsRXndopT7OIXWdYqc1fjmV6g==\",
            \"dev\": true,
            \"requires\": {
                \"punycode\": \"^2.1.0\"
            }
        },
        \"urix\": {
            \"version\": \"0.1.0\",
            \"resolved\": \"https://registry.npmjs.org/urix/-/urix-0.1.0.tgz\",
            \"integrity\": \"sha1-2pN/emLiH+wf0Y1Js1wpNQZ6bHI=\",
            \"dev\": true
        },
        \"use\": {
            \"version\": \"3.1.1\",
            \"resolved\": \"https://registry.npmjs.org/use/-/use-3.1.1.tgz\",
            \"integrity\": \"sha512-cwESVXlO3url9YWlFW/TA9cshCEhtu7IKJ/p5soJ/gGpj7vbvFrAY/eIioQ6Dw23KjZhYgiIo8HOs1nQ2vr/oQ==\",
            \"dev\": true
        },
        \"util-deprecate\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
            \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
            \"dev\": true
        },
        \"utils-merge\": {
            \"version\": \"1.0.1\",
            \"resolved\": \"https://registry.npmjs.org/utils-merge/-/utils-merge-1.0.1.tgz\",
            \"integrity\": \"sha1-n5VxD1CiZ5R7LMwSR0HBAoQn5xM=\",
            \"dev\": true
        },
        \"uuid\": {
            \"version\": \"3.4.0\",
            \"resolved\": \"https://registry.npmjs.org/uuid/-/uuid-3.4.0.tgz\",
            \"integrity\": \"sha512-HjSDRw6gZE5JMggctHBcjVak08+KEVhSIiDzFnT9S9aegmp85S/bReBVTb4QTFaRNptJ9kuYaNhnbNEOkbKb/A==\",
            \"dev\": true
        },
        \"v8flags\": {
            \"version\": \"3.1.3\",
            \"resolved\": \"https://registry.npmjs.org/v8flags/-/v8flags-3.1.3.tgz\",
            \"integrity\": \"sha512-amh9CCg3ZxkzQ48Mhcb8iX7xpAfYJgePHxWMQCBWECpOSqJUXgY26ncA61UTV0BkPqfhcy6mzwCIoP4ygxpW8w==\",
            \"dev\": true,
            \"requires\": {
                \"homedir-polyfill\": \"^1.0.1\"
            }
        },
        \"validate-npm-package-license\": {
            \"version\": \"3.0.4\",
            \"resolved\": \"https://registry.npmjs.org/validate-npm-package-license/-/validate-npm-package-license-3.0.4.tgz\",
            \"integrity\": \"sha512-DpKm2Ui/xN7/HQKCtpZxoRWBhZ9Z0kqtygG8XCgNQ8ZlDnxuQmWhj566j8fN4Cu3/JmbhsDo7fcAJq4s9h27Ew==\",
            \"dev\": true,
            \"requires\": {
                \"spdx-correct\": \"^3.0.0\",
                \"spdx-expression-parse\": \"^3.0.0\"
            }
        },
        \"value-or-function\": {
            \"version\": \"3.0.0\",
            \"resolved\": \"https://registry.npmjs.org/value-or-function/-/value-or-function-3.0.0.tgz\",
            \"integrity\": \"sha1-HCQ6ULWVwb5Up1S/7OhWO5/42BM=\",
            \"dev\": true
        },
        \"verror\": {
            \"version\": \"1.10.0\",
            \"resolved\": \"https://registry.npmjs.org/verror/-/verror-1.10.0.tgz\",
            \"integrity\": \"sha1-OhBcoXBTr1XW4nDB+CiGguGNpAA=\",
            \"dev\": true,
            \"requires\": {
                \"assert-plus\": \"^1.0.0\",
                \"core-util-is\": \"1.0.2\",
                \"extsprintf\": \"^1.2.0\"
            }
        },
        \"vinyl\": {
            \"version\": \"2.2.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl/-/vinyl-2.2.0.tgz\",
            \"integrity\": \"sha512-MBH+yP0kC/GQ5GwBqrTPTzEfiiLjta7hTtvQtbxBgTeSXsmKQRQecjibMbxIXzVT3Y9KJK+drOz1/k+vsu8Nkg==\",
            \"dev\": true,
            \"requires\": {
                \"clone\": \"^2.1.1\",
                \"clone-buffer\": \"^1.0.0\",
                \"clone-stats\": \"^1.0.0\",
                \"cloneable-readable\": \"^1.0.0\",
                \"remove-trailing-separator\": \"^1.0.1\",
                \"replace-ext\": \"^1.0.0\"
            }
        },
        \"vinyl-fs\": {
            \"version\": \"3.0.3\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-fs/-/vinyl-fs-3.0.3.tgz\",
            \"integrity\": \"sha512-vIu34EkyNyJxmP0jscNzWBSygh7VWhqun6RmqVfXePrOwi9lhvRs//dOaGOTRUQr4tx7/zd26Tk5WeSVZitgng==\",
            \"dev\": true,
            \"requires\": {
                \"fs-mkdirp-stream\": \"^1.0.0\",
                \"glob-stream\": \"^6.1.0\",
                \"graceful-fs\": \"^4.0.0\",
                \"is-valid-glob\": \"^1.0.0\",
                \"lazystream\": \"^1.0.0\",
                \"lead\": \"^1.0.0\",
                \"object.assign\": \"^4.0.4\",
                \"pumpify\": \"^1.3.5\",
                \"readable-stream\": \"^2.3.3\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"remove-bom-stream\": \"^1.2.0\",
                \"resolve-options\": \"^1.1.0\",
                \"through2\": \"^2.0.0\",
                \"to-through\": \"^2.0.0\",
                \"value-or-function\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\",
                \"vinyl-sourcemap\": \"^1.1.0\"
            }
        },
        \"vinyl-sourcemap\": {
            \"version\": \"1.1.0\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-sourcemap/-/vinyl-sourcemap-1.1.0.tgz\",
            \"integrity\": \"sha1-kqgAWTo4cDqM2xHYswCtS+Y7PhY=\",
            \"dev\": true,
            \"requires\": {
                \"append-buffer\": \"^1.0.2\",
                \"convert-source-map\": \"^1.5.0\",
                \"graceful-fs\": \"^4.1.6\",
                \"normalize-path\": \"^2.1.1\",
                \"now-and-later\": \"^2.0.0\",
                \"remove-bom-buffer\": \"^3.0.0\",
                \"vinyl\": \"^2.0.0\"
            },
            \"dependencies\": {
                \"normalize-path\": {
                    \"version\": \"2.1.1\",
                    \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
                    \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
                    \"dev\": true,
                    \"requires\": {
                        \"remove-trailing-separator\": \"^1.0.1\"
                    }
                }
            }
        },
        \"vinyl-sourcemaps-apply\": {
            \"version\": \"0.2.1\",
            \"resolved\": \"https://registry.npmjs.org/vinyl-sourcemaps-apply/-/vinyl-sourcemaps-apply-0.2.1.tgz\",
            \"integrity\": \"sha1-q2VJ1h0XLCsbh75cUI0jnI74dwU=\",
            \"dev\": true,
            \"requires\": {
                \"source-map\": \"^0.5.1\"
            }
        },
        \"which\": {
            \"version\": \"1.3.1\",
            \"resolved\": \"https://registry.npmjs.org/which/-/which-1.3.1.tgz\",
            \"integrity\": \"sha512-HxJdYWq1MTIQbJ3nw0cqssHoTNU267KlrDuGZ1WYlxDStUtKUhOaJmh112/TZmHxxUfuJqPXSOm7tDyas0OSIQ==\",
            \"dev\": true,
            \"requires\": {
                \"isexe\": \"^2.0.0\"
            }
        },
        \"which-module\": {
            \"version\": \"1.0.0\",
            \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-1.0.0.tgz\",
            \"integrity\": \"sha1-u6Y8qGGUiZT/MHc2CJ47lgJsKk8=\",
            \"dev\": true
        },
        \"wide-align\": {
            \"version\": \"1.1.3\",
            \"resolved\": \"https://registry.npmjs.org/wide-align/-/wide-align-1.1.3.tgz\",
            \"integrity\": \"sha512-QGkOQc8XL6Bt5PwnsExKBPuMKBxnGxWWW3fU55Xt4feHozMUhdUMaBCk290qpm/wG5u/RSKzwdAC4i51YigihA==\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.2 || 2\"
            }
        },
        \"wrap-ansi\": {
            \"version\": \"2.1.0\",
            \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-2.1.0.tgz\",
            \"integrity\": \"sha1-2Pw9KE3QV5T+hJc8rs3Rz4JP3YU=\",
            \"dev\": true,
            \"requires\": {
                \"string-width\": \"^1.0.1\",
                \"strip-ansi\": \"^3.0.1\"
            }
        },
        \"wrappy\": {
            \"version\": \"1.0.2\",
            \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
            \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\",
            \"dev\": true
        },
        \"ws\": {
            \"version\": \"6.1.4\",
            \"resolved\": \"https://registry.npmjs.org/ws/-/ws-6.1.4.tgz\",
            \"integrity\": \"sha512-eqZfL+NE/YQc1/ZynhojeV8q+H050oR8AZ2uIev7RU10svA9ZnJUddHcOUZTJLinZ9yEfdA2kSATS2qZK5fhJA==\",
            \"dev\": true,
            \"requires\": {
                \"async-limiter\": \"~1.0.0\"
            }
        },
        \"xmlhttprequest-ssl\": {
            \"version\": \"1.5.5\",
            \"resolved\": \"https://registry.npmjs.org/xmlhttprequest-ssl/-/xmlhttprequest-ssl-1.5.5.tgz\",
            \"integrity\": \"sha1-wodrBhaKrcQOV9l+gRkayPQ5iz4=\",
            \"dev\": true
        },
        \"xtend\": {
            \"version\": \"4.0.2\",
            \"resolved\": \"https://registry.npmjs.org/xtend/-/xtend-4.0.2.tgz\",
            \"integrity\": \"sha512-LKYU1iAXJXUgAXn9URjiu+MWhyUXHsvfp7mcuYm9dSUKK0/CjtrUwFAxD82/mCWbtLsGjFIad0wIsod4zrTAEQ==\",
            \"dev\": true
        },
        \"y18n\": {
            \"version\": \"3.2.1\",
            \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-3.2.1.tgz\",
            \"integrity\": \"sha1-bRX7qITAhnnA136I53WegR4H+kE=\",
            \"dev\": true
        },
        \"yallist\": {
            \"version\": \"2.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-2.1.2.tgz\",
            \"integrity\": \"sha1-HBH5IY8HYImkfdUS+TxmmaaoHVI=\",
            \"dev\": true
        },
        \"yargs\": {
            \"version\": \"15.4.1\",
            \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-15.4.1.tgz\",
            \"integrity\": \"sha512-aePbxDmcYW++PaqBsJ+HYUFwCdv4LVvdnhBy78E57PIor8/OVvhMrADFFEDh8DHDFRv/O9i3lPhsENjO7QX0+A==\",
            \"dev\": true,
            \"requires\": {
                \"cliui\": \"^6.0.0\",
                \"decamelize\": \"^1.2.0\",
                \"find-up\": \"^4.1.0\",
                \"get-caller-file\": \"^2.0.1\",
                \"require-directory\": \"^2.1.1\",
                \"require-main-filename\": \"^2.0.0\",
                \"set-blocking\": \"^2.0.0\",
                \"string-width\": \"^4.2.0\",
                \"which-module\": \"^2.0.0\",
                \"y18n\": \"^4.0.0\",
                \"yargs-parser\": \"^18.1.2\"
            },
            \"dependencies\": {
                \"ansi-regex\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.0.tgz\",
                    \"integrity\": \"sha512-bY6fj56OUQ0hU1KjFNDQuJFezqKdrAyFdIevADiqrWHwSlbmBNMHp5ak2f40Pm8JTFyM2mqxkG6ngkHO11f/lg==\",
                    \"dev\": true
                },
                \"ansi-styles\": {
                    \"version\": \"4.3.0\",
                    \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
                    \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-convert\": \"^2.0.1\"
                    }
                },
                \"camelcase\": {
                    \"version\": \"5.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
                    \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
                    \"dev\": true
                },
                \"cliui\": {
                    \"version\": \"6.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-6.0.0.tgz\",
                    \"integrity\": \"sha512-t6wbgtoCXvAzst7QgXxJYqPt0usEfbgQdftEPbLL/cvv6HPE5VgvqCuAIDR0NgU52ds6rFwqrgakNLrHEjCbrQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"string-width\": \"^4.2.0\",
                        \"strip-ansi\": \"^6.0.0\",
                        \"wrap-ansi\": \"^6.2.0\"
                    }
                },
                \"color-convert\": {
                    \"version\": \"2.0.1\",
                    \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
                    \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"color-name\": \"~1.1.4\"
                    }
                },
                \"emoji-regex\": {
                    \"version\": \"8.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-8.0.0.tgz\",
                    \"integrity\": \"sha512-MSjYzcWNOA0ewAHpz0MxpYFvwg6yjy1NG3xteoqz644VCo/RPgnr1/GGt+ic3iJTzQ8Eu3TdM14SawnVUmGE6A==\",
                    \"dev\": true
                },
                \"find-up\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
                    \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
                    \"dev\": true,
                    \"requires\": {
                        \"locate-path\": \"^5.0.0\",
                        \"path-exists\": \"^4.0.0\"
                    }
                },
                \"get-caller-file\": {
                    \"version\": \"2.0.5\",
                    \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
                    \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
                    \"dev\": true
                },
                \"is-fullwidth-code-point\": {
                    \"version\": \"3.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-3.0.0.tgz\",
                    \"integrity\": \"sha512-zymm5+u+sCsSWyD9qNaejV3DFvhCKclKdizYaJUuHA83RLjb7nSuGnddCHGv0hk+KY7BMAlsWeK4Ueg6EV6XQg==\",
                    \"dev\": true
                },
                \"locate-path\": {
                    \"version\": \"5.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-5.0.0.tgz\",
                    \"integrity\": \"sha512-t7hw9pI+WvuwNJXwk5zVHpyhIqzg2qTlklJOf0mVxGSbe3Fp2VieZcduNYjaLDoy6p9uGpQEGWG87WpMKlNq8g==\",
                    \"dev\": true,
                    \"requires\": {
                        \"p-locate\": \"^4.1.0\"
                    }
                },
                \"p-locate\": {
                    \"version\": \"4.1.0\",
                    \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
                    \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
                    \"dev\": true,
                    \"requires\": {
                        \"p-limit\": \"^2.2.0\"
                    }
                },
                \"path-exists\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
                    \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
                    \"dev\": true
                },
                \"require-main-filename\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
                    \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
                    \"dev\": true
                },
                \"string-width\": {
                    \"version\": \"4.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-4.2.0.tgz\",
                    \"integrity\": \"sha512-zUz5JD+tgqtuDjMhwIg5uFVV3dtqZ9yQJlZVfq4I01/K5Paj5UHj7VyrQOJvzawSVlKpObApbfD0Ed6yJc+1eg==\",
                    \"dev\": true,
                    \"requires\": {
                        \"emoji-regex\": \"^8.0.0\",
                        \"is-fullwidth-code-point\": \"^3.0.0\",
                        \"strip-ansi\": \"^6.0.0\"
                    }
                },
                \"strip-ansi\": {
                    \"version\": \"6.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.0.tgz\",
                    \"integrity\": \"sha512-AuvKTrTfQNYNIctbR1K/YGTR1756GycPsg7b9bdV9Duqur4gv6aKqHXah67Z8ImS7WEz5QVcOtlfW2rZEugt6w==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-regex\": \"^5.0.0\"
                    }
                },
                \"which-module\": {
                    \"version\": \"2.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
                    \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
                    \"dev\": true
                },
                \"wrap-ansi\": {
                    \"version\": \"6.2.0\",
                    \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-6.2.0.tgz\",
                    \"integrity\": \"sha512-r6lPcBGxZXlIcymEu7InxDMhdW0KDxpLgoFLcguasxCaJ/SOIZwINatK9KY/tf+ZrlywOKU0UDj3ATXUBfxJXA==\",
                    \"dev\": true,
                    \"requires\": {
                        \"ansi-styles\": \"^4.0.0\",
                        \"string-width\": \"^4.1.0\",
                        \"strip-ansi\": \"^6.0.0\"
                    }
                },
                \"y18n\": {
                    \"version\": \"4.0.0\",
                    \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.0.tgz\",
                    \"integrity\": \"sha512-r9S/ZyXu/Xu9q1tYlpsLIsa3EeLXXk0VwlxqTcFRfg9EhMW+17kbt9G0NrgCmhGb5vT2hyhJZLfDGx+7+5Uj/w==\",
                    \"dev\": true
                },
                \"yargs-parser\": {
                    \"version\": \"18.1.3\",
                    \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-18.1.3.tgz\",
                    \"integrity\": \"sha512-o50j0JeToy/4K6OZcaQmW6lyXXKhq7csREXcDwk2omFPJEwUNOVtJKvmDr9EI1fAJZUyZcRF7kxGBWmRXudrCQ==\",
                    \"dev\": true,
                    \"requires\": {
                        \"camelcase\": \"^5.0.0\",
                        \"decamelize\": \"^1.2.0\"
                    }
                }
            }
        },
        \"yargs-parser\": {
            \"version\": \"13.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-13.1.2.tgz\",
            \"integrity\": \"sha512-3lbsNRf/j+A4QuSZfDRA7HRSfWrzO0YjqTJd5kjAq37Zep1CEgaYmrH9Q3GwPiB9cHyd1Y1UwggGhJGoxipbzg==\",
            \"dev\": true,
            \"requires\": {
                \"camelcase\": \"^5.0.0\",
                \"decamelize\": \"^1.2.0\"
            },
            \"dependencies\": {
                \"camelcase\": {
                    \"version\": \"5.3.1\",
                    \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
                    \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
                    \"dev\": true
                }
            }
        },
        \"yeast\": {
            \"version\": \"0.1.2\",
            \"resolved\": \"https://registry.npmjs.org/yeast/-/yeast-0.1.2.tgz\",
            \"integrity\": \"sha1-AI4G2AlDIMNy28L47XagymyKxBk=\",
            \"dev\": true
        }
    }
}
", "backoffice/package-lock.json", "C:\\xampp\\htdocs\\gouader\\templates\\backoffice\\package-lock.json");
    }
}
