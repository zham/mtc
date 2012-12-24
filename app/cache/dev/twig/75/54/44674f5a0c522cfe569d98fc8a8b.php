<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_755444674f5a0c522cfe569d98fc8a8b extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo $this->getContext($context, "id");
        echo " .sonata-ba-list-field');

        // the user does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                success: function(html) {
                   field_dialog_";
        // line 49
        echo $this->getContext($context, "id");
        echo ".html(html);
                }
            });

            return;
        }

        jQuery('#";
        // line 56
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 57
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 59
        echo $this->getContext($context, "id");
        echo ".dialog('close');
    }


    // handle the add link
    var field_dialog_form_list_";
        // line 64
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 66
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 71
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 75
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 83
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 86
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 88
        echo $this->getContext($context, "id");
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 92
        echo $this->getContext($context, "id");
        echo ").live('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 93
        echo $this->getContext($context, "id");
        echo ").live('submit', function(event) {
                    event.preventDefault();

                    var form = jQuery(this);

                    jQuery(form).ajaxSubmit({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        dataType: 'html',
                        data: {_xml_http_request: true},
                        success: function(html) {
                           field_dialog_";
        // line 104
        echo $this->getContext($context, "id");
        echo ".html(html);
                        }
                    });
                });

                // open the dialog in modal mode
                field_dialog_";
        // line 110
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 115
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 118
        echo $this->getContext($context, "id");
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 119
        echo $this->getContext($context, "id");
        echo ").die('submit');
                    },
                    zIndex: 9998
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 128
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 129
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 136
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 138
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 146
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_";
        // line 149
        echo $this->getContext($context, "id");
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 153
        echo $this->getContext($context, "id");
        echo ").live('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 154
        echo $this->getContext($context, "id");
        echo ").live('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 157
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 650,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 163
        echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "associationadmin"), "label"), array(), $this->getAttribute($this->getContext($context, "associationadmin"), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 165
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] dialog closed - removing `live` events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 167
        echo $this->getContext($context, "id");
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 168
        echo $this->getContext($context, "id");
        echo ").die('submit');
                    },
                    zIndex: 9998,
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 177
        echo $this->getContext($context, "id");
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 182
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 184
        echo $this->getContext($context, "id");
        echo "();

        var element = jQuery(this);

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 200
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 210
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {

                Admin.log('[";
        // line 219
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');

                if (typeof data == 'string') {
                    field_dialog_";
        // line 222
        echo $this->getContext($context, "id");
        echo ".html(data);
                    return;
                };

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (data.result == 'ok') {
                    field_dialog_";
        // line 229
        echo $this->getContext($context, "id");
        echo ".dialog('close');

                    ";
        // line 231
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "edit") == "list")) {
            // line 232
            echo "                        ";
            // line 236
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 237
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 240
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 242
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 243
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code")));
            // line 248
            echo "',
                            data: {_xml_http_request: true },
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 252
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                                jQuery('#";
            // line 253
            echo $this->getContext($context, "id");
            echo " option[value=\"' + data.objectId + '\"]').attr('selected', 'selected');
                            }
                        });

                    ";
        }
        // line 258
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 263
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_pretty_errors(field_dialog_";
        // line 265
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 268
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 275
        echo $this->getContext($context, "id");
        echo " = false;

    function initialize_popup_";
        // line 277
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 279
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 280
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 283
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 285
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 292
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 294
        echo $this->getContext($context, "id");
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 299
        echo $this->getContext($context, "id");
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 303
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 310
        echo $this->getContext($context, "id");
        echo ");


    ";
        // line 313
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "edit") == "list")) {
            // line 314
            echo "        ";
            // line 317
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 319
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 323
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 327
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 334
            echo $this->getContext($context, "id");
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 339
            echo $this->getContext($context, "id");
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 346
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 349
            echo $this->getContext($context, "id");
            echo " option').get(0)) {
                jQuery('#";
            // line 350
            echo $this->getContext($context, "id");
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 353
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 354
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 361
            echo "
        // update the label
        jQuery('#";
            // line 363
            echo $this->getContext($context, "id");
            echo "').live('change', function(event) {

            Admin.log('[";
            // line 365
            echo $this->getContext($context, "id");
            echo "] update the label');

            jQuery('#field_widget_";
            // line 367
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 370
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getContext($context, "associationadmin"), "uniqid"), "code" => $this->getAttribute($this->getContext($context, "associationadmin"), "code")));
            // line 374
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                success: function(html) {
                    jQuery('#field_widget_";
            // line 376
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 382
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 382,  622 => 376,  618 => 374,  616 => 370,  606 => 367,  601 => 365,  596 => 363,  592 => 361,  585 => 354,  581 => 353,  575 => 350,  571 => 349,  565 => 346,  555 => 339,  547 => 334,  537 => 327,  530 => 323,  523 => 319,  519 => 317,  517 => 314,  515 => 313,  509 => 310,  499 => 303,  492 => 299,  484 => 294,  480 => 292,  473 => 285,  468 => 283,  460 => 280,  446 => 275,  428 => 265,  423 => 263,  416 => 258,  404 => 252,  398 => 248,  392 => 242,  388 => 240,  377 => 236,  375 => 232,  340 => 210,  327 => 200,  308 => 184,  303 => 182,  295 => 177,  283 => 168,  279 => 167,  274 => 165,  269 => 163,  260 => 157,  252 => 154,  239 => 149,  231 => 146,  215 => 136,  205 => 129,  201 => 128,  189 => 119,  185 => 118,  179 => 115,  162 => 104,  148 => 93,  142 => 92,  135 => 88,  130 => 86,  124 => 83,  113 => 75,  106 => 71,  98 => 66,  80 => 57,  36 => 32,  76 => 56,  65 => 28,  55 => 24,  50 => 22,  46 => 21,  31 => 15,  22 => 13,  20 => 12,  17 => 11,  462 => 138,  458 => 136,  456 => 279,  451 => 277,  434 => 268,  417 => 131,  413 => 130,  408 => 253,  405 => 128,  402 => 127,  399 => 126,  396 => 243,  394 => 124,  391 => 123,  382 => 237,  378 => 116,  376 => 115,  373 => 231,  371 => 113,  368 => 229,  364 => 92,  358 => 222,  352 => 219,  349 => 87,  346 => 86,  339 => 107,  333 => 104,  330 => 103,  328 => 102,  325 => 101,  319 => 99,  317 => 98,  312 => 96,  301 => 94,  298 => 93,  296 => 86,  287 => 85,  282 => 83,  278 => 82,  273 => 81,  270 => 80,  267 => 79,  257 => 73,  254 => 72,  251 => 71,  245 => 69,  243 => 68,  238 => 67,  235 => 66,  232 => 65,  226 => 63,  224 => 62,  216 => 61,  212 => 59,  196 => 54,  186 => 51,  183 => 50,  178 => 47,  158 => 45,  153 => 44,  147 => 42,  102 => 27,  96 => 23,  94 => 22,  73 => 19,  49 => 38,  42 => 79,  39 => 78,  37 => 18,  34 => 49,  29 => 22,  24 => 20,  169 => 75,  163 => 73,  157 => 71,  149 => 67,  143 => 65,  137 => 36,  125 => 32,  122 => 58,  120 => 57,  109 => 52,  107 => 30,  101 => 49,  95 => 47,  77 => 41,  72 => 32,  69 => 37,  67 => 17,  59 => 14,  56 => 13,  51 => 25,  48 => 24,  43 => 20,  40 => 20,  32 => 42,  249 => 71,  246 => 153,  241 => 68,  236 => 67,  233 => 66,  225 => 64,  222 => 63,  220 => 138,  217 => 61,  211 => 59,  209 => 58,  203 => 56,  200 => 55,  194 => 53,  191 => 53,  188 => 52,  182 => 49,  176 => 47,  173 => 46,  171 => 110,  168 => 44,  165 => 43,  160 => 72,  155 => 17,  150 => 43,  146 => 73,  144 => 43,  139 => 41,  136 => 40,  134 => 39,  131 => 34,  108 => 31,  104 => 30,  99 => 25,  93 => 64,  85 => 59,  83 => 38,  75 => 40,  71 => 19,  66 => 49,  63 => 16,  57 => 13,  54 => 40,  52 => 123,  38 => 6,  35 => 17,  33 => 4,  30 => 3,  27 => 21,  21 => 18,  126 => 46,  123 => 31,  117 => 56,  111 => 32,  103 => 35,  100 => 34,  92 => 32,  89 => 20,  81 => 29,  78 => 28,  70 => 18,  68 => 18,  64 => 16,  61 => 27,  53 => 18,  47 => 112,  44 => 111,  41 => 33,  10 => 43,);
    }
}
