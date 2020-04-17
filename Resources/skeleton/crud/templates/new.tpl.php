{% extends 'layout/base.html.twig' %}

{% block title %}{{ 'Create new <?= $entity_class_name ?>'|trans }}{% endblock %}

{% block page_content %}
    <div class="row">
        <div class="col-md-12">
            {% embed '@AdminLTE/Widgets/box-widget.html.twig' %}
                {% block box_before %}{{ form_start(form) }}{% endblock %}
                {% block box_title %}{{ 'Create new <?= $entity_class_name ?>'|trans }}{% endblock %}
                {% block box_body %}
                    {{ form_widget(form) }}
                {% endblock %}
                {% block box_footer %}
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary" href="{{ path('<?= $route_name ?>_new') }}">{{ 'Submit'|trans }}</button>
                        <a class="btn btn-warning" href="{{ path('<?= $route_name ?>_index') }}">{{ 'Back to list'|trans }}</a>
                    </div>
                {% endblock %}
                {% block box_after %}{{ form_end(form) }}{% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}