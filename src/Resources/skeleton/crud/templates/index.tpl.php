{% extends '<?= $base_layout ?>' %}

{% block page_content %}
    <div class="row">
        <div class="col-md-12">
            {% embed '@AdminLTE/Widgets/box-widget.html.twig' %}
                {% block box_before %}{% endblock %}
                {% block box_title %}{{ '<?= $entity_class_name ?> index'|trans }}{% endblock %}
                {% block box_body %}
                    <div id="<?= $entity_twig_var_plural ?>">{{ 'Loading'|trans }}...</div>
                {% endblock %}
                {% block box_footer %}
                    <div class="pull-right">
                        <a class="btn btn-primary " href="{{ path('<?= $route_name ?>_new') }}">{{ 'Create new'|trans }}</a>
                    </div>
                {% endblock %}
                {% block box_after %}{% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel="stylesheet" type="text/css" href="<?= $cdn_css ?>"/>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type="text/javascript" src="<?= $cdn_js ?>"></script>
    <script src="{{ asset('bundles/datatables/js/datatables.js') }}"></script>
    <script type="text/javascript">
    $(function() {
        $('#<?= $entity_twig_var_plural ?>').initDataTables({{ datatable_settings(datatable) }});
    });
    </script>
{% endblock %}
