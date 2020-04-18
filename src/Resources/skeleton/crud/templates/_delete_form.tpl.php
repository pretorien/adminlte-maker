<a onclick="return confirm('{{ "Are you sure you want to delete this item?" | trans }}');" 
   href="{{ path('<?= $route_name ?>_delete', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>, 'token': csrf_token('delete' ~ <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>) }) }}" 
   class="btn btn-danger">{{ "Delete"| trans }}
</a>