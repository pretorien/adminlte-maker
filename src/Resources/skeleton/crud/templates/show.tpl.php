{% extends '<?= $base_layout ?>' %}

{% block page_content %}
    <div class="row">
        <div class="col-md-12">
            {% embed '@AdminLTE/Widgets/box-widget.html.twig' %}
                {% block box_before %}{% endblock %}
                {% block box_title %}{{ '<?= $entity_class_name ?>'|trans }}{% endblock %}
                {% block box_body %}
    <table class="table">
        <tbody>
<?php foreach ($entity_fields as $field): ?>
            <tr>
                <th>{{ '<?= ucfirst($field['fieldName']) ?>'|trans }}</th>
                <td>{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>
    {% endblock %}
                {% block box_footer %}
                    <div class="pull-right">
                        <a class="btn btn-success " href="{{ path('<?= $route_name ?>_edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}">{{ 'Edit'|trans }}</a>
                        <a class="btn btn-primary " href="{{ path('<?= $route_name ?>_index') }}">{{ 'Back to list'|trans }}</a>
                        {{ include('<?= strtolower($entity_class_name) ?>/_delete_form.html.twig') }}
                    </div>
                {% endblock %}
                {% block box_after %}{% endblock %}
            {% endembed %}
        </div>
    </div>
{% endblock %}