<h3>Список характеристик</h3>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Тип</th>
            <th>Обязательная</th>
            <th>Min</th>
            <th>Max</th>
            <th>Ед. измерения</th>
            <th>В списке</th>
            <th>В товаре</th>
            <th>Значения</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($features as $f) : ?>
            <?php $f_values = []; ?>
            <tr>
                <td><?= $f->feature_id ?></td>
                <td><?= $f->feature_name ?></td>
                <td><?= $f->feature_type ?></td>
                <td><?= $f->feature_required ?></td>
                <td><?= $f->feature_min ?></td>
                <td><?= $f->feature_max ?></td>
                <td><?= $f->feature_measure ?></td>
                <td><?= $f->feature_show_on_list ?></td>
                <td><?= $f->feature_show_on_good ?></td>
                <td><?php foreach ($f->values as $value) { $f_values[] = $value->value; } ?><?= implode(',', $f_values) ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>