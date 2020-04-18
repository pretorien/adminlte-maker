{% extends '<?= $base_layout ?>' %}

{% block page_content %}
    <h1>Edit <?= $entity_class_name ?></h1>

    {{ include('<?= $route_name ?>/_form.html.twig', {'button_label': 'Update'}) }}

    <a href="{{ path('<?= $route_name ?>_index') }}">back to list</a>

    {{ include('<?= $route_name ?>/_delete_form.html.twig') }}
{% endblock %}
